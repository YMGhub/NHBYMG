@extends('layouts.layout')
@section('title', 'About')
@section('content')
    <div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <h2>PRIVACY POLICY</h2>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Titlebar
                                                    ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <!-- Main Search Input -->
                    {!! $settings->policy ?? 'No policy found.' !!}

            </div>
        </div>
    </div>
    <!-- Content

@endsection
