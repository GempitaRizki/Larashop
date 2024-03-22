@extends('themes.marketplaceg.layouts.appdetail')
@section('content')
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
    <div class="empty_state">
        <h3 class="">No Favorite</h3>
        <p>There have been no favorite in this section yet</p>
    </div>    
    <style>
        body,
        html {
            height: 100%;
        }

        * {
            font-family: 'Lato';
        }

        .empty_state {
            position: relative;
            top: -20px;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;

            i {
                margin: auto;
                margin-bottom: 0px;
                font-size: 90px;
                color: #ccc;
            }

            h3 {
                margin: 8px 0px;
                text-align: center;
                font-weight: normal;
            }

            p {
                font-size: 14px;
                margin: 0px;
                color: #999;
                text-align: center;
            }

            button {
                outline: none;
                border: none;
                border-radius: 3px;
                padding: 8px 8px;
                margin: 20px auto auto auto;
                width: 50%;
                max-width: 200px;
                background: #000000;
                color: white;
                letter-spacing: 0.8px;
                text-transform: uppercase;
                font-size: 12px;

            }
        }
    </style>
@endsection
