@extends('themes.marketplaceg.layouts.appdetail')

@section('content')
<section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
</section>
<section class="main-content">
    <div class="container">
        <div class="row">
            <section class="col-lg-12 col-md-12 shopping-cart">
                <div class="card mb-4 bg-light border-0 section-header">
                    <div class="card-body p-5">
                        <h2 class="mb-0">Checkout</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0"><i class='bx bx-map'></i> Delivery Address</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Add a new address</a>
                        </div>
                        <div class="mt-3">
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="card card-body p-6">
                                        <div class="form-check mb-4">
                                            <input class="form-check-input delivery-address" value="" type="radio" name="address_id" id="homeRadio">
                                            <label class="form-check-label text-dark" for="homeRadio"></label>
                                        </div>
                                        <!-- address -->
                                        <address>
                                            <strong> + </strong>
                                            <br>

                                            <br>

                                            <br>

                                            <abbr title="Phone">P: </abbr>
                                        </address>
                                        <span class="text-danger">Default address</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-0"><i class='bx bxs-truck'></i> Delivery Service</h5>
                        <div class="mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input courier-code" type="radio" name="courier_code" id="inlineRadio1" value="jne">
                                <label class="form-check-label" for="inlineRadio1">JNE</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input courier-code" type="radio" name="courier_code" id="inlineRadio2" value="pos">
                                <label class="form-check-label" for="inlineRadio2">POS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input courier-code" type="radio" name="courier_code" id="inlineRadio2" value="tiki">
                                <label class="form-check-label" for="inlineRadio2">TIKI</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p>Available services:</p>
                            <ul class="list-group list-group-flush available-services" style="display: none;"></ul>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="#!" class="btn btn-second">Back to Shopping Cart</a>
                            <a href="#!" class="btn btn-first">Place Order</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-6">
                        <div class="mb-5 card mt-6 shadow">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Order Details</h2>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item py-3 ">
                                        <div class="row align-items-center">
                                            <div class="col-6 col-md-6 col-lg-7">
                                                <div class="d-flex">
                                                    <img src="{{ asset('img/p1.jpg') }}" alt="Ecommerce" style="height: 70px;">
                                                    <div class="ms-3">
                                                        <a href="">
                                                            <h6 class="mb-0"></h6>
                                                        </a>
                                                        <span>
                                                            <small>IDR </small>
                                                            <small class="text-muted text-decoration-line-through"></small>
                                                            
                                                            <small>IDR </small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-2 col-lg-2">
                                                1
                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">IDR</span>
                                                <span class="fw-bold">IDR </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item py-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Item Subtotal</div>
                                            <div class="fw-bold">IDR </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Discount</div>
                                            <div class="fw-bold">IDR </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>Tax (11%)</div>
                                            <div class="fw-bold">IDR </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div>Shipping Fee</div>
                                            <div class="fw-bold" id="shipping-fee">IDR 0</div>
                                        </div>

                                    </li>
                                    <li class="list-group-item py-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2 fw-bold">
                                            <div>Grand Total</div>
                                            <div id="grand-total">IDR </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
@endsection