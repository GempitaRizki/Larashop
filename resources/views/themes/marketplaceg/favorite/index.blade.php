@extends('themes.marketplaceg.layouts.appdetail')
@section('content')

    <body>
        <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Favorite</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="main-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-7">
                        <ul class="list-group list-group-flush">
                            @foreach ($favorite->items as $item)
                                <li class="list-group-item py-3 border-top">
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{ asset('themes/marketplaceg/assets/img/p1.jpg') }}"
                                                    alt="Ecommerce" style="height: 70px;">
                                                <div class="ms-3">
                                                    <a href="{{ shop_product_link($item->product) }}">
                                                        <h6 class="mb-0">{{ $item->product->name }}</h6>
                                                    </a>
                                                    <span>
                                                        <small>IDR {{ $item->product->price_label }}</small>
                                                    </span>
                                                    <div class="mt-2 small lh-1">
                                                        <a href="#!" class="text-decoration-none text-inherit">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                            <a href="{{ route('favorites.destroy', [$item->id]) }}"
                                                onclick="return confirm('Are you sure to delete From Favorites?')">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
