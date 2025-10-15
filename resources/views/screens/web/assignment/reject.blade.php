@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head :assignment="$assignment->id" />
                <div class="asign-head">
                    <p>Accept Assignment</p>
                </div>
                <form action="{{ route('reject', $assignment->id) }}" id="rejectAssignment">
                    <div class="row mb-5 row-gap-4">
                        <div class="col-md-2 col-sm-12">
                            <label for="" class="custom-label">Update Status</label>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <div class="d-flex gap-5 radio-wrap">
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor" class="" value="0" name="accept"
                                        {{ $assignment?->is_accept == 0 ? 'checked' : '' }}>
                                    <label for="factor">No</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" id="factor2" class="" {{ $assignment?->is_accept  == 1 || $assignment?->is_accept == null ? 'checked' : '' }} value="1" name="accept">
                                    <label for="factor2">Yes</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row row-gap-4">
                        <div class="col-md-2 col-sm-12">
                            <label for="" class="custom-label">Reason for Rejecting</label>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <textarea name="reason" class="custom-input mb-5" style="height: 220px; resize: none;" id="" cols="10"
                                rows="10" placeholder="Your Reason here..." {{ $assignment?->reason_rejection }}></textarea>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <h1 class="d-none">jj</h1>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <input type="submit" class="submit-btn" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            function toggleReasonField() {
                if ($('input[name="accept"]:checked').val() === '1') {
                    $('textarea[name="reason"]').prop('disabled', true).val('');
                } else {
                    $('textarea[name="reason"]').prop('disabled', false);
                }
            }


            toggleReasonField();


            $('input[name="accept"]').change(function() {
                toggleReasonField();
            });


            $('#rejectAssignment').on('submit', function(e) {
                e.preventDefault();


                $('.text-danger').remove();
                $('.custom-input, input[name="accept"]').removeClass('is-invalid');


                let form = $(this);
                let accept = $('input[name="accept"]:checked').val();
                let reason = $('textarea[name="reason"]').val().trim();
                let assignmentId = "{{ $assignment->id }}";


                let errors = [];

                if (!accept) {
                    errors.push({
                        field: 'accept',
                        message: 'Please select an option'
                    });
                }

                if (accept === '0' && !reason) {
                    errors.push({
                        field: 'reason',
                        message: 'Please provide a reason for rejection'
                    });
                }


                if (errors.length > 0) {
                    errors.forEach(function(error) {
                        let errorElement = $('<div>').addClass('text-danger').text(error.message);
                        if (error.field === 'accept') {
                            $('.radio-wrap').after(errorElement);
                            $('input[name="accept"]').addClass('is-invalid');
                        } else if (error.field === 'reason') {
                            $('textarea[name="reason"]').after(errorElement);
                            $('textarea[name="reason"]').addClass('is-invalid');
                        }
                    });
                    return;
                }
                $.LoadingOverlay("show");

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: {
                        accept: accept,
                        reason: reason,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {

                         $.LoadingOverlay("hide");
                        if (response.status == 'true') {

                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Your Query uploaded Successfully',
                                showConfirmButton: false,
                                timer: 1500,
                            }).then(() => {
                                window.location.href = response.route;
                            });


                        }
                    },
                    error: function(xhr) {
                          $.LoadingOverlay("hide");

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, messages) {
                                let errorElement = $('<div>').addClass('text-danger')
                                    .text(messages[0]);
                                if (key === 'accept') {
                                    $('.radio-wrap').after(errorElement);
                                    $('input[name="accept"]').addClass('is-invalid');
                                } else if (key === 'reason') {
                                    $('textarea[name="reason"]').after(errorElement);
                                    $('textarea[name="reason"]').addClass('is-invalid');
                                }
                            });
                        } else {

                            form.prepend(
                                '<div class="alert alert-danger">An error occurred. Please try again.</div>'
                                );
                        }
                    }
                });
            });
        });
    </script>
@endpush
