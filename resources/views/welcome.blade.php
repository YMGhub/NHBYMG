@extends('layouts.layout')
@section('title', 'Welcome')
@section('content')
    <!--slider--->
    <div class="container-fluid">
        <div class="row">
            <div class="sliderHome">
                <div><img class="" src="{{ url('/images/slider/slider1.jpg') }}" alt=""></div>
                <div><img class="" src="{{ url('/images/slider/slider3.jpg') }}" alt=""></div>
            </div>

        </div>
    </div>
    <!--slider--->

    <!-- Content
                                                                                                                                                                                                                                                                                                                                                                                                                            ================================================== -->
    <!--div class="container">
                            <div class="row">

                                <div class="col-md-12">
                                    <h3 class="headline margin-bottom-25 margin-top-65">Featured Opportunities</h3>
                                </div>




                                <div class="col-md-12">
                                    <div class="carousel">

                                        @foreach ($dataproperties as $content)
    <div class="carousel-item">
                                                <div class="listing-item">

                                                    <a href="javascript:void(0);" class="listing-img-container">

                                                        @if ($content->featured == 1)
    <div class="listing-badges">
                                                                <span class="featured">Featured</span>
                                                                <span>{{ $content->category }}</span>
                                                            </div>
    @endif

                                                        <div class="listing-img-content">
                                                            <span
                                                                class="listing-price">${{ number_format($content->price_or_rent_type, 2, '.', ',') }}
                                                                <i></i></span>
                                                            <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                                            <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                                        </div>

                                                        <div class="listing-carousel">
                                                            @foreach (json_decode($content->images) as $images)
    <div><img src="{{ url('images/properties/' . $images->image_path) }}"
                                                                        style="width:100%" /></div>
    @endforeach
                                                        </div>

                                                    </a>

                                                    <div class="listing-content">

                                                        <div class="listing-title">
                                                            <h4><a href="javascript:void(0);">{{ $content->title }}</a></h4>
                                                            <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                                                class="listing-address popup-gmaps">
                                                                <i class="fa fa-map-marker"></i>
                                                                {{ $content->address }}
                                                            </a>
                                                        </div>

                                                        <ul class="listing-features">
                                                            <li>Area <span>{{ $content->area }} sq ft</span></li>
                                                            <li>Bedrooms <span>{{ $content->bedrooms }}</span></li>
                                                            <li>Bathrooms <span>{{ $content->bathrooms }}</span></li>
                                                        </ul>

                                                        <div class="listing-footer">
                                                            <a href="#"><i class="fa fa-user"></i> {{ $content->author }}</a>
                                                            <span><i class="fa fa-calendar-o"></i>
                                                                {{ $content->created_at->diffForHumans() }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
    @endforeach





                                    </div>
                                </div>


                            </div>
                        </div-->

    <!--services-->
    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-105 servicesHome" data-background-color="#f7f7f7"
        style="background: rgb(247, 247, 247);">

        <!-- Box Headline -->
        <h3 class="headline-box">What are you looking for?</h3>

        <!-- Content -->
        <div class="container">
            <div class="row">

                @foreach ($data as $row)
                    <div class="col-md-4 col-sm-12">
                        <div class="icon-box-1">


                            <div class="icon-container">
                                <div class="iconImg">

                                    @foreach (json_decode($row->imagesOurServices) as $images)
                                        <img src="{{ url('storage/our_services/' . $images->path) }}" style="width:50%" />
                                    @endforeach

                                </div>

                            </div>

                            <h4>{{ $row->title }}</h4>
                            <div class="input">
                                <p>{{ strip_tags(html_entity_decode($row->description)) }}</p>
                            </div>

                            <p>
                                <a href="{{ $row->url_form }}" class="button border">Apply Now</a>

                        </div>
                    </div>
                @endforeach






            </div>
        </div>

    </section>
    <!-- Fullwidth Section / End -->

    <!-- Flip banner -->
    <div class="parallax flipBannerHome" data-background="images/headOffice.jpeg" data-color="#36383e"
        data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <div class="iconImg">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 334.44 313.23">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #323232;
                                                        stroke-width: 0px;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_Í_ã_1" data-name="Í¼²ã_1">
                                                <g>
                                                    <path class="cls-1"
                                                        d="m87.51,157.66c0,42.58,72.15,119.53,75.23,122.79,1.16,1.24,2.78,1.93,4.48,1.93s3.32-.7,4.48-1.93c3.07-3.25,75.23-80.21,75.23-122.79s-35.76-79.71-79.71-79.71-79.71,35.76-79.71,79.71Zm147.09,0c0,29.17-45.08,84.9-67.38,109.48-22.31-24.58-67.38-80.3-67.38-109.48,0-37.16,30.23-67.39,67.38-67.39s67.38,30.23,67.38,67.39Z" />
                                                    <path class="cls-1"
                                                        d="m130.42,152.98c0,20.27,16.5,36.77,36.77,36.77s36.77-16.49,36.77-36.77-16.5-36.77-36.77-36.77-36.77,16.49-36.77,36.77Zm61.22,0c0,13.48-10.97,24.45-24.44,24.45s-24.45-10.97-24.45-24.45,10.97-24.45,24.45-24.45,24.44,10.97,24.44,24.45Z" />
                                                    <path class="cls-1"
                                                        d="m332.64,162.79L171.58,1.73c-2.31-2.31-6.4-2.31-8.71,0L1.8,162.79c-1.76,1.76-2.29,4.41-1.33,6.71.95,2.3,3.2,3.8,5.69,3.8h43.58v133.76c0,3.4,2.76,6.16,6.16,6.16h222.63c3.4,0,6.16-2.76,6.16-6.16v-133.76h43.58c2.49,0,4.74-1.5,5.69-3.8.95-2.3.43-4.95-1.33-6.71Zm-54.1-1.8c-3.4,0-6.16,2.76-6.16,6.16v133.76H62.07v-133.76c0-3.4-2.76-6.16-6.16-6.16H21.03L167.22,14.8l146.19,146.19h-34.87Z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="numberCounter" style="color: white">942</span>
                                    <h5 style="color: white">Sales & Rentals</h5>
                                </a>

                            </div>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                    <div class="col-md-4">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <div class="iconImg">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 158.85 149.45">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #1d1d1b;
                                                        stroke: #231f20;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_Ñëîé_1" data-name="Ñëîé 1">
                                                <g>
                                                    <path class="cls-1"
                                                        d="m146.36,27.72h-4.02c-1.4-15.24-14.25-27.22-29.86-27.22s-28.45,11.98-29.86,27.22h-47.76c0-4.42,0-7.07,0-7.13-.03-3.76-1.53-7.28-4.21-9.92-3.22-3.17-7.47-4.91-11.98-4.91-.05,0-.1,0-.14,0-4.57.04-8.84,1.85-12.04,5.11C2.63,14.8.5,19.99.5,25.5c0,0,.05,91.57.04,99.73h.03c-.38,5.85,1.66,11.83,6.16,16.25,4.8,4.72,11.15,7.33,17.88,7.34,5.26.01,67.18.12,108.66.12,4.64,0,9.04,0,13.06,0,6.62,0,12-5.39,12-12.01l.02-97.21c0-3.21-1.25-6.22-3.51-8.49-2.27-2.27-5.28-3.51-8.48-3.51Zm8,12l-.02,65.32h-83.05c-.55,0-1-.45-1-1V31.72h12.23c.58,13.58,10.67,28.74,22.31,46.21,1.95,2.93,5.11,7.59,5.98,9.04.87,1.45,2.5,1.36,3.37-.04.87-1.4,5.38-8.45,8.04-12.52,10.09-15.45,19.63-30.07,20.22-42.69h3.92c2.14,0,4.14.83,5.66,2.34,1.51,1.51,2.34,3.52,2.34,5.66Zm-98.04,105.16v-58.01c0-1.66-1.34-3-3-3h-18.46c0-2.73,0-5.5,0-8.28h18.46c1.66,0,3-1.34,3-3V31.72h9.97v74.32c0,1.66,1.34,3,3,3h85.05v9.13h-85.05c-1.66,0-3,1.34-3,3v23.72c-3.45,0-6.79,0-9.97-.01ZM138.46,30.49c0,11.7-9.52,26.29-19.6,41.74-1.94,2.97-3.93,6.01-5.89,9.1-.3.47-.78.47-1.09,0-1.26-1.91-2.51-3.78-3.73-5.62-11.62-17.46-21.66-32.54-21.66-45.22,0-14.33,11.66-25.99,25.99-25.99s25.99,11.66,25.99,25.99Zm-86.15,40.11c0,.55-.45,1-1,1h-16.46c0-15.15,0-30.11,0-39.87h17.45v38.87ZM4.5,25.5c0-4.45,1.72-8.65,4.84-11.82,2.45-2.49,5.73-3.88,9.23-3.91,3.46-.04,6.79,1.31,9.29,3.76,1.92,1.89,2.99,4.41,3.01,7.09,0,.6-.01,62.82-.02,91.36-.06-.06-.12-.13-.18-.2-3.25-3.2-7.55-4.93-12.13-4.91-4.57.04-8.84,1.85-12.04,5.11-.72.74-1.36,1.52-1.95,2.33,0-21.4-.04-88.81-.04-88.81Zm14.07,85.37s.07,0,.11,0c3.46,0,6.71,1.33,9.18,3.76,1.81,1.79,2.86,4.14,2.99,6.67,0,.37,0,.72,0,1.06-.13,2.46-1.13,4.75-2.87,6.52-1.2,1.22-2.73,1.99-4.4,2.22-.55.08-.99.52-.99,1.07l.02,2c0,.55.46,1,1.01.95,2.73-.25,5.27-1.45,7.21-3.43,2.44-2.48,3.83-5.7,4.01-9.14,0-.07.02-20.43.02-34.67h16.46c.55,0,1,.45,1,1v56c-14.84-.02-25.63-.04-27.69-.05-5.68-.01-11.03-2.21-15.08-6.2-6.63-6.52-6.72-17.22-.2-23.85,2.45-2.49,5.73-3.88,9.23-3.91Zm51.72,34.03v-21.73c0-.55.45-1,1-1h83.05v14.76c0,4.41-3.59,8.01-8.01,8.01-20.63.02-50.84-.01-76.04-.05Z" />
                                                    <path class="cls-1"
                                                        d="m124.49,30.49c0-6.63-5.39-12.02-12.02-12.02s-12.02,5.39-12.02,12.02,5.39,12.02,12.02,12.02,12.02-5.39,12.02-12.02Zm-20.03,0c0-4.42,3.6-8.02,8.02-8.02s8.02,3.6,8.02,8.02-3.6,8.02-8.02,8.02-8.02-3.6-8.02-8.02Z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="numberCounter" style="color: white">1476</span>
                                    <h5 style="color: white">Rent To Own & Relocation Program</h5>
                                </a>
                            </div>

                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                    <!--div class="col-md-3">


                                                                                                                                                                                                                                                                        <div class="main-search-container">
                                                                                                                                                                                                                                                                            <div class="text-center">
                                                                                                                                                                                                                                                                                <a href="/our-services">
                                                                                                                                                                                                                                                                                    <div class="iconImg">
                                                                                                                                                                                                                                                                                        <?xml version="1.0" encoding="UTF-8"?>
                                                                                                                                                                                                                                                                                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                                                                                                                                                                                                                                                                            viewBox="0 0 464.44 417.3">
                                                                                                                                                                                                                                                                                            <defs>
                                                                                                                                                                                                                                                                                                <style>
                                                                                                                                                                                                                                                                                                    .cls-1 {
                                                                                                                                                                                                                                                                                                        fill: #2e2d31;
                                                                                                                                                                                                                                                                                                        stroke-width: 0px;
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                </style>
                                                                                                                                                                                                                                                                                            </defs>
                                                                                                                                                                                                                                                                                            <g id="Layer_1-2" data-name="Layer 1">
                                                                                                                                                                                                                                                                                                <g>
                                                                                                                                                                                                                                                                                                    <path class="cls-1"
                                                                                                                                                                                                                                                                                                        d="m224.31,3.91c-6.14,4.74-21.07,17.16-22.89,19.26-.69.84-7.67,6.84-15.35,13.25-7.67,6.42-16.47,13.96-19.54,16.75-3.07,2.79-10.05,8.79-15.49,13.26-5.44,4.6-13.54,11.45-18.14,15.35-4.46,4.05-13.53,11.72-19.96,17.17-6.42,5.58-12.42,10.75-13.4,11.72-.98.98-11.02,9.49-22.47,19.12-11.3,9.63-23.86,20.37-27.91,24-3.91,3.77-7.82,6.7-8.65,6.7s-2.65,1.39-4.05,3.21c-1.39,1.81-6.84,6.98-12.28,11.44-5.3,4.6-13.12,11.59-17.3,15.49-7.12,6.7-7.39,7.4-6.56,12.14.84,4.32,1.54,5.16,5.72,6,4.33.7,5.72.14,13.68-6.28,4.88-3.91,9.77-7.95,10.75-9.21.98-1.11,2.23-2.09,2.93-2.09s1.39,49.54,1.54,110.25c.42,108.01.42,110.24,3.21,112.89,2.79,2.79,4.88,2.79,194.54,2.93,174.16.14,191.88,0,193.97-2.09,1.96-1.95,2.23-13.53,2.65-113.03.14-60.98.7-110.94.98-110.94.42,0,5.58,4.05,11.58,9.07,11.45,9.63,15.21,10.88,19.82,6.28,6.14-6.14,3.21-10.32-20.93-30.84-5.02-4.32-10.89-9.35-13.26-11.44-2.24-2.09-9.63-8.51-16.33-14.37l-12.14-10.6-.42-64.2-.42-64.19-3.35-2.65c-3.21-2.65-5.3-2.79-34.47-2.37-27.77.42-31.4.7-33.63,2.93-2.23,2.23-2.51,5.86-2.93,33.07-.28,20.65-.98,30.7-1.95,30.7-.84,0-3.77-2.09-6.56-4.6-2.79-2.37-8.51-7.25-12.7-10.74-4.05-3.49-8.09-6.98-8.93-7.68-.84-.84-5.58-4.89-10.61-9.07-5.02-4.19-14.51-12.42-21.07-18.28C245.52,7.68,235.2,0,231.99,0c-1.4,0-4.88,1.82-7.68,3.91h0Zm16.19,23.44c3.07,2.65,10.89,9.49,17.44,14.93,6.56,5.58,14.37,12.28,17.44,15.07,3.07,2.93,12.14,10.75,20.24,17.45,22.61,18.98,22.75,19.12,27.21,23.72,2.23,2.38,5.16,4.89,6.42,5.58,1.26.7,6,4.46,10.47,8.37,31.54,27.49,40.47,35.3,45.63,39.63,3.21,2.65,10.47,8.79,16.05,13.68l10.05,8.93v110.66c0,60.84-.42,111.64-.84,112.9-.84,1.95-17.86,2.23-178.48,2.23s-177.65-.28-178.49-2.23c-.42-1.26-.84-52.05-.84-112.9v-110.8l10.88-9.49c6-5.16,14.23-12.28,18.42-15.77,4.05-3.49,10.33-8.79,13.82-12,3.49-3.07,10.89-9.35,16.19-13.82,5.44-4.61,10.05-8.65,10.46-9.07.42-.42,7.26-6.28,15.21-12.98,7.96-6.7,18.28-15.63,23.03-19.68,4.61-4.19,13.54-11.86,19.68-17.16,25.68-22.05,42.29-36.29,45.77-39.63,4.19-3.91,7.96-3.21,14.23,2.37h0Zm139.55,45.08c0,30.98-.56,48.28-1.39,48.56-1.26.42-6-3.49-28.19-23.03l-8.79-7.68v-31.12c0-17.03.42-32.1.84-33.21.84-1.95,3.49-2.23,19.26-1.95l18.28.42v48.01Z" />
                                                                                                                                                                                                                                                                                                    <path class="cls-1"
                                                                                                                                                                                                                                                                                                        d="m216.08,147.51c-6.14.7-20.09,5.02-26.52,8.09-8.09,3.77-16.61,9.21-23.72,15.07-5.86,4.88-20.93,22.05-20.93,23.86,0,.7-.84,2.37-1.95,3.49-4.18,4.89-10.75,24.7-12.28,37.26-8.93,70.75,51.91,127.69,121.97,114.29,6-1.12,12-2.65,13.26-3.21,1.39-.7,5.58-2.65,9.49-4.47,40.33-18,63.78-60.84,58.2-106.48-1.53-12.84-8.09-32.38-12.28-37.4-1.12-1.12-1.95-2.79-1.95-3.49,0-1.81-12.14-15.77-18.84-21.63-7.67-6.84-17.86-13.82-23.03-15.91-1.11-.56-3.21-1.53-4.61-2.23-7.81-4.18-20.79-6.98-35.86-7.4-8.79-.28-18.28-.28-20.93.14h0Zm39.21,19.95c12.14,3.91,17.45,6.42,26.38,13.12,8.93,6.56,12.56,10.19,19.4,19.68,6.84,9.49,7.95,11.72,11.58,21.91,4.32,12,4.47,42.56.28,53.44-5.3,13.82-12.84,25.26-23.31,35.03-13.95,13.12-25.12,18.56-44.93,22.05-25.4,4.46-51.63-3.91-70.89-22.61-11.31-11.02-17.03-19.81-22.33-34.47-4.33-12.14-4.33-40.89,0-53.03,6.7-18.56,15.49-30.56,31.26-42.14,8.65-6.42,13.95-9.07,25.68-12.84,11.86-3.91,34.75-3.91,46.89-.14h0Z" />
                                                                                                                                                                                                                                                                                                    <path class="cls-1"
                                                                                                                                                                                                                                                                                                        d="m228.64,182.39c-3.63,1.25-5.58,4.88-5.58,10.33,0,4.6-.7,5.58-5.86,8.65-10.33,6.14-15.07,14.37-15.07,25.96,0,16.61,9.35,26.93,27.49,30.84,10.05,2.09,14.51,5.86,14.65,12.56.14,5.44-6.7,12.56-12,12.56-4.74,0-11.58-6.28-12.7-11.58-1.39-6-4.6-9.35-9.07-9.35-14.79,0-8.93,25.54,8.09,35.58,3.77,2.23,4.47,3.49,4.47,7.68,0,5.72,4.6,11.16,9.21,11.16s8.93-5.72,8.93-11.58c0-4.47.69-5.58,5.3-8.51,6.84-4.33,10.33-8.65,13.26-16.19,3.07-8.09,2.93-11.59-.14-19.96-4.6-11.86-14.37-19.26-28.46-21.21-4.89-.56-7.12-1.68-8.93-4.6-3.35-5.16-3.07-10.75.98-15.07,2.93-3.21,4.19-3.49,10.05-2.93,7.68.7,10.05,3.07,11.72,11.45.98,4.61,1.95,5.72,5.58,6.84,6.84,1.96,11.59-1.67,11.59-8.93,0-5.58-3.07-13.82-6.98-18.56-1.12-1.4-4.74-4.19-7.95-6.14-5.31-3.07-6-4.05-6-8.65,0-2.79-.84-6.28-1.68-7.53-1.95-2.52-7.68-4.05-10.88-2.79h0Z" />
                                                                                                                                                                                                                                                                                                </g>
                                                                                                                                                                                                                                                                                            </g>
                                                                                                                                                                                                                                                                                        </svg>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <span class="numberCounter" style="color: white">89</span>
                                                                                                                                                                                                                                                                                    <h5 style="color: white"> Issuance of Loans</h5>
                                                                                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                                                                            </div>


                                                                                                                                                                                                                                                                        </div>


                                                                                                                                                                                                                                                                    </div-->
                    <div class="col-md-4">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <div class="iconImg">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 293.44 289.15">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #323232;
                                                        stroke-width: 0px;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_Í_ã_1" data-name="Í¼²ã_1">
                                                <g>
                                                    <path class="cls-1"
                                                        d="m117.33,173.19c-2.41-2.41-6.31-2.41-8.71,0l-54.84,54.84c-2.41,2.41-2.41,6.3,0,8.71,1.2,1.2,2.78,1.8,4.36,1.8s3.15-.6,4.36-1.8l54.84-54.84c2.41-2.41,2.41-6.3,0-8.71Z" />
                                                    <path class="cls-1"
                                                        d="m70.76,245.02c-2.41,2.41-2.41,6.31,0,8.71,1.2,1.2,2.78,1.8,4.36,1.8s3.15-.6,4.36-1.8l54.84-54.84c2.41-2.41,2.41-6.31,0-8.71-2.41-2.41-6.31-2.41-8.71,0l-54.84,54.84Z" />
                                                    <path class="cls-1"
                                                        d="m244.55,96.6c1.24,1.24,2.98,1.89,4.68,1.79,1.75-.09,3.37-.93,4.47-2.29l38.37-47.67c1.97-2.45,1.78-5.99-.44-8.22l-25.08-25.08c-2.23-2.22-5.76-2.41-8.22-.44l-47.67,38.38c-1.36,1.1-2.2,2.72-2.29,4.47-.09,1.75.56,3.45,1.8,4.69l3.18,3.18-58.11,58.11-50.82-50.82,29.8-29.8c2.41-2.41,2.41-6.31,0-8.71L101.78,1.73c-2.31-2.31-6.4-2.31-8.71,0L15.18,79.61c-.78.78-1.34,1.76-1.61,2.83L.19,134.67c-.54,2.11.07,4.35,1.61,5.88l13.03,13.03c1.2,1.2,2.78,1.8,4.36,1.8s3.15-.6,4.36-1.8l47.75-47.75,37.67,37.67c-2.91,1.05-5.6,2.67-7.86,4.92L24.61,224.93c-8.32,8.33-8.32,21.88,0,30.2l27.76,27.76c4.03,4.03,9.4,6.26,15.1,6.26s11.07-2.22,15.1-6.26l76.5-76.5c2.29-2.29,3.89-5,4.92-7.86l81.84,81.84c2.85,2.85,6.64,4.42,10.68,4.42s7.82-1.57,10.68-4.42l11.78-11.78c2.86-2.85,4.43-6.64,4.43-10.68s-1.57-7.82-4.42-10.68l-95.71-95.71,58.1-58.11,3.19,3.18ZM19.19,140.51l-6.19-6.19,12.09-47.19L97.42,14.8l23.74,23.74-29.79,29.79s0,0-.01,0c0,0,0,0,0,.01l-24.41,24.41s0,0,0,0h0s-47.74,47.75-47.74,47.75Zm131.17,57.17l-76.5,76.5c-3.41,3.41-9.37,3.41-12.78,0h0s-27.76-27.76-27.76-27.76c-3.52-3.53-3.52-9.26,0-12.78l76.5-76.5c1.71-1.71,3.97-2.65,6.39-2.65s4.68.94,6.39,2.64l27.77,27.78c3.52,3.53,3.51,9.25,0,12.77Zm120.71,60.23c0,.43-.1,1.26-.82,1.97l-11.78,11.78c-.71.71-1.53.81-1.96.81s-1.25-.1-1.96-.81l-95.47-95.47s0,0,0,0l-27.76-27.76-51.31-51.31,15.71-15.71,174.55,174.54c.71.71.81,1.53.81,1.96Zm-96.52-115.1l-7.06-7.06-3.53-3.53,62.47-62.46c1.16-1.16,1.8-2.72,1.8-4.36s-.65-3.2-1.81-4.35l-2.69-2.69,38.01-30.6,17.26,17.26-30.6,38.01-2.69-2.69c-2.4-2.4-6.3-2.4-8.71,0l-62.46,62.46Z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <span class="numberCounter" style="color: white">89</span>
                                    <h5 style="color: white">Maintenance of Estates</h5>
                                </a>
                            </div>

                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Flip banner / End -->
    <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-95 margin-bottom-0">

        <!-- Box Headline -->
        <h3 class="headline-box">Articles & Tips</h3>

        <div class="container">
            <div class="row">

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="javascript:void(0);" class="post-img">
                            <img src="images/blog-post-01.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">8 Tips to Help You Finding New Home</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="javascript:void(0);" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="javascript:void(0);" class="post-img">
                            <img src="images/blog-post-02.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">Bedroom Colors You'll Never Regret</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="javascript:void(0);" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

                <div class="col-md-4">

                    <!-- Blog Post -->
                    <div class="blog-post">

                        <!-- Img -->
                        <a href="javascript:void(0);" class="post-img">
                            <img src="images/blog-post-03.jpg" alt="">
                        </a>

                        <!-- Content -->
                        <div class="post-content">
                            <h3><a href="#">What to Do a Year Before Buying Apartment</a></h3>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc,
                                rutrum in malesuada vitae. </p>

                            <a href="javascript:void(0);" class="read-more">Read More <i
                                    class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                    <!-- Blog Post / End -->

                </div>

            </div>
        </div>
    </section>

    <a href="/our-services" class="flip-banner parallax" data-background="images/back.jpg" data-color=""
        data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">How can we help today?</h2>
            <h2 class="flip-hidden">Our Services <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>


    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
        class="vc_row wpb_row vc_row-fluid vc_custom_1500020484009 vc_row-no-padding">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div
                        class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text">
                        <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:#e4e4e4;"
                                class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span
                                style="border-color:#e4e4e4;" class="vc_sep_line"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row-full-width vc_clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1502814280818" style="padding-bottom:15px">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <h3 style="font-weight:normal;text-align:center;"
                        class="headline margin-top-15 margin-bottom-35     ">Our Partners
                        <span>Collaborating with our key government agencies and private sector companies to deliver
                            comprehensive, sustainable housing solutions and facilitating business efficiency. </span>
                    </h3>
                    <div class="logo-carousel dot-navigation">

                        <div class="item">
                            <a href="https://ezpay.gov.bb/login" target="_blank">
                                <img src="{{ url('/images/logos/Picture6.jpg') }}" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="https://www.gov.bb/State-Bodies/town-country-planning" target="_blank">
                                <img src="{{ url('/images/logos/Picture2.jpg') }}" alt="" /></a>
                            </a>
                        </div>
                        <div class="item">
                            <!--https://www.gov.bb/Ministries/housing-->

                            <a href="https://gov-bb.bonfirehub.com/portal/?tab=openOpportunities" target="_blank">
                                <img src="{{ url('/images/logos/Picture3.png') }}" alt="" /></a>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.gov.bb/Departments/land-registry" target="_blank">
                                <img src="{{ url('/images/logos/Picture4.jpg') }}" alt="" /></a>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://www.gov.bb/Departments/land-surveys" target="_blank">
                                <img src="{{ url('/images/logos/Picture5.jpg') }}" alt="" /></a>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://surepaybills.com/home-barbados/" target="_blank">
                                <img src="{{ url('/images/logos/SurepayLogo.jpeg') }}" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="https://publicworkers.bb/" target="_blank">
                                <img src="{{ url('/images/logos/BPWUCCUL.jpeg') }}" alt="" /></a>
                        </div>
                        <div class="item">
                            <a href="https://cobcreditunion.com/" target="_blank">
                                <img src="{{ url('/images/logos/COB.jpeg') }}" alt="" /></a>
                        </div>

                    </div>

                    <div class="container" style="margin-top:25px">
                        <div class="row text-center">
                            <a target="_blank" style="text-transform: uppercase"
                                href="https://gov-bb.bonfirehub.com/portal/?tab=openOpportunities" class="linkButton">
                                Government E-Procurement Registration
                            </a>

                            <a target="_blank" href="https://survey123.arcgis.com/share/7fcc232f06824bd1a428954c6db73882"
                                class="linkButton">
                                ENVIRONMENTAL PROTECTION DEPARTMENT
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Fullwidth Section / End -->

@endsection
