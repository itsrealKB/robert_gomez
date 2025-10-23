@extends('layouts.admin.app')

@push('styles')

@endpush

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="dashboard-content">
                    <div class="inner-head-wrap2">
                        <ul class="inner-head2">
                            <button class="link text-decoration-none" id="resource-videos" data-toggle="modal"
                                    data-target="#modal-xl">
                                <li class="inner-list inner-list-1">Resource Vidoes</li>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Add Resource Vidoes Modal -->
    <div class="modal fade" id="modal-xl" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Payment Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="paymentForm" action="">
                    @csrf
                    <div class="modal-body" style="background-color:#212529 !important">
                        <div class="form-group payment-form-group">
                            <label for="billingType" style="color:#fff">Billing Type</label>
                            <input type="text" value="" style="background:#fff; color:#000"
                                class="form-control" id="billingType" name="billing_type[]"
                                placeholder="Enter billing type">

                            <label for="miles" style="color:#fff">Miles</label>
                            <input type="number" value="" style="background:#fff; color:#000"
                                class="form-control" id="miles" placeholder="Enter miles" name="miles[]">

                            <label for="price" style="color:#fff">Price</label>
                            <input type="number" style="background:#fff; color:#000" class="form-control"
                                id="price" name="price[]" value="" placeholder="Enter price">

                            <button class="btn btn-danger btn-sm remove-group-btn mt-2" type="button"
                                style="display:none;">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>

                        <button class="btn btn-success mt-2 add-group-btn" type="button">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
