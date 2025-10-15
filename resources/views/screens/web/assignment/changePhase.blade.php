@extends('layouts.web.app')
@section('content')
    <section class="doc-sec reject-sec report-sec veh-sec">
        <div class="container-fluid">
            <div class="dashboard-content">
                <x-inner-head :assignment="$assignment->id" />
                <div class="asign-head">
                    <p>Change Assignment Phase</p>
                </div>
                <form id="assignPhase">
                    <div class="row mb-5 row-gap-3 align-items-center">
                        <div class="col-md-2">
                            <label for="status" class="custom-label">Assignment Phase</label>
                        </div>
                        <div class="col-md-5">
                            <select name="status" id="status" class="course-select">
                                <option value="pending" {{ $assignment->status == 'pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="completed" {{ $assignment->status == 'completed' ? 'selected' : '' }}>
                                    Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <h1 class="d-none">jj</h1>
                        </div>
                        <div class="col-md-10">
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
            $('#assignPhase').on("submit", function(e) {
                e.preventDefault();

                $.LoadingOverlay("show");

                let status = $('#status').val();
                let assignmentId = "{{ $assignment->id }}";

                $.ajax({
                    type: 'POST',
                    url: '{{ route('assign.status', ':id') }}'.replace(':id', assignmentId),
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status,
                        assignment: assignmentId
                    },
                    success: function(response) {

                        $.LoadingOverlay("hide");

                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message ||
                                'Assignment status updated successfully!',
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function(xhr) {
                        $.LoadingOverlay("hide");

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: xhr.responseJSON?.message ||
                                'Failed to update assignment status. Please try again.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
@endpush
