@extends('layouts.layout')
@section('content')
    <div class="parallax" data-background="images/projectStandard1.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <h2>Our Services</h2>


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
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Our Services</h3>
                    <div class="input">
                        <p>The National Housing Corporation offers a comprehensive range of housing and property-related
                            services. With a history spanning over five decades, our commitment to providing affordable
                            housing solutions to low- and middle-income individuals remains unwavering. Our dedication is to
                            create thriving communities and provide quality housing solutions to benefit our clients and the
                            community at large. </p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Sale and Rental of Houses:</h3>
                    <div class="input">
                        <p>Explore our diverse range of houses available for both sale and rental. Whether you're looking
                            for a new home or a temporary residence, we offer a variety of housing options to suit your
                            needs.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Sale and Rental of Lots:</h3>
                    <div class="input">
                        <p>Discover the perfect plot of land to build your dream home or invest in. We have a selection of
                            lots available for sale or rental, allowing you to shape your future according to your
                            preferences.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Rent-to-Own Programs:</h3>
                    <div class="input">
                        <p>Our rent-to-own programs provide a pathway to homeownership. Rent a property with the option to
                            purchase it in the future, making it easier for you to transition from renting to owning.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Relocation Programs:</h3>
                    <div class="input">
                        <p>In times of national emergencies or planned relocations, our relocation programs help by
                            providing new housing solutions. We aim to make the transition as smooth as possible during
                            challenging circumstances.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Issuance of Loans:</h3>
                    <div class="input">
                        <p>Take advantage of our loan offerings, including the General Workers Loan Scheme, to support your
                            housing-related financial needs. We're here to help you access the financial resources necessary
                            for your housing goals.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <h3 class="desc-headline">Maintenance of Estates:</h3>
                    <div class="input">
                        <p>Our commitment to providing quality housing doesn't end at the point of sale or rental. We also
                            offer estate maintenance services to ensure that your living environment remains safe, clean,
                            and well-maintained for your convenience and peace of mind.</p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div> --}}


    <div class="container-fluid">
        <div class="row">
            <section class="fullwidth margin-top-105 ourServices" data-background-color="#f7f7f7"
                style="background: rgb(247, 247, 247);">

                <!-- Box Headline -->
                <!-- <h3 class="headline-box">What are you looking for?</h3> -->



                <!--list our services-->
                <!-- Content -->
                <div class="container">
                    <div class="row">

                        @foreach ($data as $row)
                            <div class="col-md-4 col-sm-12">
                                <div class="icon-box-1">


                                    <div class="icon-container">
                                        <div class="iconImg">

                                            @foreach (json_decode($row->imagesOurServices) as $images)
                                                <img src="{{ url('storage/our_services/' . $images->path) }}"
                                                    style="width:50%" />
                                            @endforeach

                                        </div>

                                    </div>

                                    <h4>{{ $row->title }}</h4>
                                    <div class="input">
                                        <p>{{ strip_tags(html_entity_decode($row->description)) }}</p>
                                    </div>

                                    @if (!empty($row->url_form))
                                        <p>
                                            <a href="{{ $row->url_form }}" class="button border">Apply Now</a>
                                        </p>
                                    @endif

                                </div>
                            </div>
                        @endforeach







                    </div>
                </div>


                <a href="/contact" class="flip-banner parallax" data-background="images/back.jpg" data-color="#"
                    data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
                    <div class="flip-banner-content">
                        <h2 class="flip-visible">Not Sure Of Your Next Step</h2>
                        <h2 class="flip-hidden">Get In Contact Today <i class="sl sl-icon-arrow-right"></i></h2>
                    </div>
                </a>

            </section>
        </div>
    </div>
@endsection
