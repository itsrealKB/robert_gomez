@extends('layouts.web.app')

@push('styles')
 <style>
    label.error{
        color: #dc3545 !important;
        margin-top: 0.5rem !important;
        font-weight: 700 !important;
        font-style: italic !important;
        font-size: 12.8px !important;
    }
</style>
@endpush

@section('content')
    <div class="dashboard-content">
        <div class="content-wrap">
            <h2>Add Your Feedback Here..!</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <form id="feedback-form" class="feedback-form">
                    @csrf
                    <div class="inp-wrap row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <label for="subject" class="custom-label fw-bold" style="font-size: 14px;">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control custom-input" placeholder="Feedback Subject">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <label for="feedback" class="custom-label fw-bold" style="font-size: 14px;">Feedback</label>
                            <textarea name="feedback" id="feedback" class="form-control custom-input" style="height: 100px !important;"></textarea>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="inp-wrap row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <input type="submit" class="load-btn bg-secondary text-white" value="Submit Feedback">
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
   {{-- Validation Scripts Start --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script>
        $("#feedback-form").validate({
            rules: {
                subject: {
                    required : true,
                },

                feedback: {
                    required : true,
                },
            },

            messages: {

                subject : {
                    required : "Feedback Subject Is Required!",
                },

                feedback : {
                    required : "Feedback Is Required!",
                },
            }
        });
    </script>
    {{-- Validation Scripts End --}}

    {{-- Feedback Form Submit --}}
    <script>
        $(document).ready(function(){
            $('#feedback-form').on('submit', function(e){
                if(!$(this).valid())
                {
                    return false;
                }
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url : "{{ route('feedback.store') }}",
                    type : 'POST',
                    data : formData,
                    processData: false,
                    contentType: false,
                    beforeSend : function()
                    {
                        $.LoadingOverlay('show');
                    },
                    success : function(response)
                    {
                        $.LoadingOverlay('hide');
                        if(response.status)
                        {
                            Swal.fire({
                                title: "There's Informaton For You!",
                                text: response.message,
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK'
                            });

                        }
                    },
                    error : function(error)
                    {
                        $.LoadingOverlay('hide');
                        Swal.fire({
                            title: 'Something Went Wrong!',
                            text: error.responseJSON.message,
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                $(this)[0].reset();
            });
        });
    </script>
    {{-- Feedback Form Submit --}}

@endpush
