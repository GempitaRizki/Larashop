@extends('themes.marketplaceg.layouts.app')

@section('content')

    <body>
        <nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.html">Market<span>G</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="input-group mx-auto mt-5 mt-lg-0">
                        <input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-warning" type="button" id="button-addon2"><i
                                class="bx bx-search"></i></button>
                    </div>
                    <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
                        <li class="nav-item me-3">
                            <a class="nav-link active" href="#">
                                <i class="bx bx-heart"></i>
                                <span class="badge text-bg-warning rounded-circle position-absolute">2</span>
                            </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="#">
                                <i class="bx bx-cart-alt"></i>
                                <span class="badge text-bg-warning rounded-circle position-absolute">3</span>
                            </a>
                        </li>
                        <!-- mobile menu -->
                        <div class="dropdown mt-3 d-lg-none">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Home</a></li>
                                <li><a class="dropdown-item" href="#">Best Seller</a></li>
                                <li><a class="dropdown-item" href="#">New Arrival</a></li>
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                            </ul>
                        </div>
                        <li class="nav-item mt-5 mt-lg-0 text-center">
                            <a class="nav-link btn-second me-lg-3" href="#">Login</a>
                        </li>
                        <li class="nav-item mt-3 mt-lg-0 text-center">
                            <a class="nav-link btn-first" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                <h2 class="mb-0">Category : {{ $category->name}}</h2>
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