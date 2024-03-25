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
                        <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
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
                        <div class="card mb-4 bg-light border-0 section-header">
                            <div class="card-body p-5">
                                <h2 class="mb-0">Tag : {{ $tag->name }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <div class="mb-3 mb-lg-0">
                                    &nbsp;
                                </div>
                                <div class="d-flex mt-2 mt-lg-0">
                                    <div class="me-2 flex-grow-1">
                                        <select class="form-select">
                                            <option selected="">Show: 50</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div>
                                        <!-- select option -->
                                        <select class="form-select">
                                            <option selected="">Sort by: Featured</option>
                                            <option value="Low to High">Price: Low to High</option>
                                            <option value="High to Low"> Price: High to Low</option>
                                            <option value="Release Date"> Release Date</option>
                                            <option value="Avg. Rating"> Avg. Rating</option>

                                        </select>
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
                                <p>Product Empty </p>
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
