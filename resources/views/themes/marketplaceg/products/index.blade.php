@extends('themes.marketplaceg.layouts.app')

@section('content')

    <body>
        <nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
            @include('themes.marketplaceg.partials.header')
        </nav>
        <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ ('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="main-content">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-3 col-md mb-6 mb-md-0">
                        @include('themes.marketplaceg.partials.sidebar', ['categories' => $categories])
                    </aside>
                    <section class="col-lg-9 col-md-12 products">
                        <div class="row">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="mb-3 mb-lg-0">
                                    &nbsp;
                                </div>
                                <div class="d-flex mt-2 mt-lg-0">
                                    <div class="me-2 flex-grow-1">
                                        &nbsp;
                                    </div>
                                    <div>
                                        {!! html()->select('sorting', $sortingOptions, $sortingQuery)->class(['form-select'])->attribute('onchange', 'this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @forelse ($products as $product)
                                @include('themes.marketplaceg.products.product_box', [
                                    'product' => $product,
                                ])
                            @empty
                                <p>Product Empty</p>
                            @endforelse
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    @endsection
