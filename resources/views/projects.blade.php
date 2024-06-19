@extends('layouts.layout')
@section('content')
    <style>
        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, transparent);
        }
    </style>
    <div class="parallax" data-background="/images/Project-Hero.jpg" data-color="#" data-color-opacity="0.1"
        data-img-width="1000" data-img-height="1200" style="background-position: 0">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">
                            <h2>Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <h3 class="desc-headline">New and Current Projects</h3>
                    <div class="input">
                        <p>The National Housing Corporation takes pride in a rich portfolio of completed projects that have
                            positively shaped the housing landscape in Barbados. Our projects range from innovative real
                            estate developments and the construction of modern, comfortable homes to the efficient
                            management of properties and expertly handled legal and project management services. These
                            endeavors reflect our unwavering commitment to providing affordable and quality housing
                            solutions for the benefit of the community.

                            Our aim is to continue to make a lasting impact by creating thriving communities and shaping the
                            future of housing in Barbados.

                        </p>


                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>

                    <!-- Details -->
                    <!-- <h3 class="desc-headline">Projects</h3> -->
                    <hr class="desc-headline">
                    <div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="listings-container list-layout">

                        {{-- @foreach ($projects as $project) --}}
                        {{-- <div class="listing-item"> --}}
                        {{-- <a href="#" class="listing-img-container"> --}}
                        {{-- <div class="listing-badges"> --}}
                        {{-- </div> --}}
                        {{-- <div class="listing-img-content"> --}}
                        {{-- <!-- <span class="listing-price">$1700 <i>monthly</i></span> --> --}}
                        {{-- <span class="like-icon"></span> --}}
                        {{-- </div> --}}
                        {{-- <img src="{{public_path()}}" alt=""> --}}
                        {{-- </a> --}}
                        {{-- <div class="listing-content"> --}}
                        {{-- <div class="listing-title"> --}}
                        {{-- <h4><a href="#">{{$project->title}}</a></h4> --}}
                        {{-- <!-- <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps"> --}}
                        {{-- <i class="fa fa-map-marker"></i> --}}
                        {{-- 778 Country St. Panama City, FL --}}
                        {{-- </a> --> --}}

                        {{-- <a href="#" class="details button border">Details</a> --}}
                        {{-- </div> --}}

                        {{-- <!-- <ul class="listing-details"> --}}
                        {{-- <li>1450 sq ft</li> --}}
                        {{-- <li>1 Bedroom</li> --}}
                        {{-- <li>2 Rooms</li> --}}
                        {{-- <li>2 Rooms</li> --}}
                        {{-- </ul> --> --}}

                        {{-- <div class="listing-footer"> --}}
                        {{-- <a href="#"><i class="fa fa-user"></i> Admin</a> --}}
                        {{-- <span><i class="fa fa-calendar-o"></i> {{$project->created_at->diffForHumans()}}</span> --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- @endforeach --}}
                    </div>
                    <!-- Similar Listings Container / End -->


                    <!-- Floorplans -->
                    <!-- <h3 class="desc-headline no-border">Floorplans</h3> -->
                    <!-- Accordion -->
                    <!-- <div class="style-1 fp-accordion">
                                                                                                                <div class="accordion">

                                                                                                                    <h3>First Floor <span>460 sq ft</span> <i class="fa fa-angle-down"></i> </h3>
                                                                                                                    <div>
                                                                                                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/kChy7IU.jpg">
                                                                                                                            <img src="https://i.imgur.com/kChy7IU.jpg" alt="">
                                                                                                                        </a>
                                                                                                                        <p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
                                                                                                                    </div>

                                                                                                                    <h3>Second Floor <span>440 sq ft</span> <i class="fa fa-angle-down"></i></h3>
                                                                                                                    <div>
                                                                                                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/l2VNlwu.jpg">
                                                                                                                            <img src="https://i.imgur.com/l2VNlwu.jpg" alt="">
                                                                                                                        </a>
                                                                                                                        <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
                                                                                                                    </div>

                                                                                                                    <h3>Garage <span>140 sq ft</span> <i class="fa fa-angle-down"></i></h3>
                                                                                                                    <div>
                                                                                                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/0zJYERy.jpg">
                                                                                                                            <img src="https://i.imgur.com/0zJYERy.jpg" alt="">
                                                                                                                        </a>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                            </div> -->
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb-2">
            <div class="col-md-4 bottomMargin">
                <!--Electrical Upgrade Project-->
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/1.jpg" data-fancybox="gallery-a" data-caption="Electrical Upgrade Project">
                            <img src="images/project/1.jpg" />
                        </a>

                        <a class="hide" href="images/project/2.jpg" data-fancybox="gallery-a"
                            data-caption="Electrical Upgrade Project">
                            <img src="images/project/2.jpg" />
                        </a>
                    </div>
                    <div class="titleImage">
                        <h3>Electrical Upgrade Project</h3>
                    </div>
                </div>
            </div>

            <!--NHC Hurricane Elsa Project-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/19.jpg" data-fancybox="gallery-b" data-caption="NHC Hurricane Elsa Project">
                            <img src="images/project/19.jpg" />
                        </a>

                        <a class="hide" href="images/project/galleryb.jpg" data-fancybox="gallery-b"
                            data-caption="NHC Hurricane Elsa Project">
                            <img src="images/project/galleryb.jpg" />
                        </a>
                    </div>
                    <div class="titleImage">
                        <h3>NHC Hurricane Elsa Project</h3>
                    </div>
                </div>
            </div>

            <!--NHC East West Quad Housing Project-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/26.jpg" data-fancybox="gallery-c"
                            data-caption="NHC East West Quad Housing Project">
                            <img src="images/project/26.jpg" />
                        </a>

                        <a class="hide" href="images/project/25.jpg" data-fancybox="gallery-c"
                            data-caption="NHC East West Quad Housing Project">
                            <img src="images/project/25.jpg" />
                        </a>
                    </div>
                    <div class="titleImage">
                        <h3>NHC East West Quad Housing Project</h3>
                    </div>
                </div>
            </div>


            <!--NHC Whitehill Relocation Project-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/27.jpg" data-fancybox="gallery-d"
                            data-caption="NHC Whitehill Relocation Project">
                            <img src="images/project/27.jpg" />
                        </a>
                    </div>
                    <div class="titleImage">
                        <h3>NHC Whitehill Relocation Project</h3>
                    </div>
                </div>
            </div>

            <!--NHC Ridge Meadows Housing-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/gallerye.jpg" data-fancybox="gallery-e"
                            data-caption="NHC Ridge Meadows Housing">
                            <img src="images/project/gallerye.jpg" />
                        </a>

                        <a class="hide" href="images/project/gallerye1.jpg" data-fancybox="gallery-e"
                            data-caption="NHC Ridge Meadows Housing">
                            <img src="images/project/gallerye1.jpg" />
                        </a>
                    </div>
                    <div class="titleImage">
                        <h3>NHC Ridge Meadows Housing</h3>
                    </div>
                </div>
            </div>

            <!--NHC Alleynes Court Housing Project-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/28.jpg" data-fancybox="gallery-f"
                            data-caption="NHC Alleynes Court Housing Project">
                            <img src="images/project/28.jpg" />
                        </a>


                    </div>
                    <div class="titleImage">
                        <h3>NHC Alleynes Court Housing Project</h3>
                    </div>
                </div>
            </div>


            <!--SolarasCourt-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/29.jpg" data-fancybox="gallery-g" data-caption="SolarasCourt">
                            <img src="images/project/29.jpg" />
                        </a>


                    </div>
                    <div class="titleImage">
                        <h3>SolarasCourt</h3>
                    </div>
                </div>
            </div>

            <!--Todds South Site Rendition 2-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/ToddsSouthSiteRendition2.jpg" data-fancybox="gallery-h"
                            data-caption="Todds South Site Rendition">
                            <img src="images/project/ToddsSouthSiteRendition2.jpg" />
                        </a>


                    </div>
                    <div class="titleImage">
                        <h3>Todds South Site Rendition</h3>
                    </div>
                </div>
            </div>

            <!--BRIGHT HALL hatchwork-Model-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/BRIGHTHALLhatchworkModel.png" data-fancybox="gallery-i"
                            data-caption="BRIGHT HALL hatchwork Model">
                            <img src="images/project/BRIGHTHALLhatchworkModel.png" />
                        </a>


                    </div>
                    <div class="titleImage">
                        <h3>BRIGHT HALL hatchwork Model</h3>
                    </div>
                </div>
            </div>

            <!--Bright Hall Location Plan-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/BrightHallLocationPlan.jpg" data-fancybox="gallery-j"
                            data-caption="Bright Hall Location Plan">
                            <img src="images/project/BrightHallLocationPlan.jpg" />
                        </a>


                    </div>
                    <div class="titleImage">
                        <h3>Bright Hall Location Plan</h3>
                    </div>
                </div>
            </div>

            <!--Seven Acres Development 1-->
            <div class="col-md-4 bottomMargin">
                <div class="photo-grid-item">
                    <div class="boxImage">

                        <a href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0001.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0001.jpg" />
                        </a>

                        <a class="hide"
                            href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0002.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0002.jpg" />
                        </a>

                        <a class="hide"
                            href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0003.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0003.jpg" />
                        </a>

                        <a class="hide"
                            href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0004.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0004.jpg" />
                        </a>

                        <a class="hide"
                            href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0005.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0005.jpg" />
                        </a>

                        <a class="hide"
                            href="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0006.jpg"
                            data-fancybox="gallery-k" data-caption="Seven Acres Development 1">
                            <img src="images/project/SevenAcresDevelopment1/SevenAcresDevelopment1_page-0006.jpg" />
                        </a>



                    </div>
                    <div class="titleImage">
                        <h3>Seven Acres Development 1</h3>
                    </div>
                </div>
            </div>


            <!-- Add more photo items here -->
        </div>


        <div class="container">
            <div class="row text-center">
                <a href="https://survey123.arcgis.com/share/7fcc232f06824bd1a428954c6db73882" class="linkButton">
                    ENVIRONMENTAL PROTECTION DEPARTMENT
                </a>
            </div>
        </div>

    </div>

    <!--carusel videos -->
    <div class="container videoOut">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline margin-bottom-25 margin-top-65">Video Gallery</h3>
            </div>
            <div class="col-md-12">
                <div class="carousel_video">
                    <div class="carousel-item">
                        <video class="video-item" muted controls width="100%" height="400">
                            <source src="images/project/video/AlleynesCourt.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="carousel-item">
                        <video class="video-item" muted controls width="100%" height="400">
                            <source src="images/project/video/HaggatHallVideoMinisterSutherlandandDugid.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="carousel-item">
                        <video class="video-item" muted controls width="100%" height="400" >
                            <source src="images/project/video/WhitehillrelocationMinisterSutherland.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-------------------->






    <!--hero banner-->
    <div class="parallax bannerProject white-font" data-background="images/sevenAcres.jpeg" data-color="#36383e"
        data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <h2>It's your journey. We're here to help.</h2>
                        <p>Explore our diverse portfolio of affordable housing solutions and contact the National Housing
                            Corporation today to discuss how we can meet your unique housing needs.</p>
                        <a href="/our-services" class="button margin-top-25">Get Started</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--hero banner-->
@endsection
