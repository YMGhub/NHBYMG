@extends('layouts.layout')
@section('content')
    <style>
        .toggle-wrap .toggle-container {
            display: none;
            /* Hide by default */
        }

        .toggle-wrap .trigger a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
            color: #333;
        }

        .toggle-wrap .trigger a:hover {
            text-decoration: underline;
        }

        .toggle-wrap .trigger a i {
            transition: transform 0.3s;
        }
    </style>
    <div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <h2>{{ $article->title }}</h2>
                        </div>


                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container" style="padding-top:50px">
        <div class="row">
            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                {!!  $article->description !!}
            </div>
        </div>

         <div class="row">
            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <a href="/articles">Return to Articles</a>
            </div>
        </div>
    </div>
@endsection
