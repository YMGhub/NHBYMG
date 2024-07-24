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
                            <h2>Frequently Asked Questions</h2>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description" style="padding-top:25px;padding-bottom:25px">
                    <!-- Description -->
                    <div class="input">

                        @foreach ($data as $row)
                            <div class="toggle-wrap style-2">

                                <span class="trigger">
                                    <a href="#" style="text-decoration: none">
                                        {{ $loop->iteration }}. {{ $row->question }}
                                        <i class="sl sl-icon-plus"></i>
                                    </a>
                                </span>
                                <div class="toggle-container" style="display: none;">
                                    {{ $row->answer }}
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <a href="/contact" class="flip-banner parallax" data-background="images/back.jpg" data-color="#274abb"
        data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">Not Sure Of Your Next Step</h2>
            <h2 class="flip-hidden">Get In Contact Today <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script> --}}
{{-- $(document).ready(function(){ --}}
{{-- $('.trigger a').click(function(e){ --}}
{{-- e.preventDefault(); --}}
{{-- var $this = $(this); --}}
{{-- var $toggleContainer = $this.closest('.toggle-wrap').find('.toggle-container'); --}}

{{-- $toggleContainer.slideToggle(); --}}

{{-- // Change icon on toggle --}}
{{-- $this.find('i').toggleClass('sl-icon-plus sl-icon-minus'); --}}
{{-- }); --}}
{{-- }); --}}
{{-- </script> --}}
