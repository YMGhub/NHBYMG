@extends("layouts.layout")
@section("title","Welcome")
@section("content")
    <!--slider--->
    <div class="container-fluid">
        <div class="row">
            <div class="sliderHome">
                <div><img class="" src="{{ url('/images/slider/slider1.jpg') }}" alt=""></div>
                <div><img class="" src="{{ url('/images/slider/slider2.png') }}" alt=""></div>
                <div><img class="" src="{{ url('/images/slider/slider3.jpg') }}" alt=""></div>
            </div>

        </div>
    </div>
    <!--slider--->

        <!-- Content
        ================================================== -->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline margin-bottom-25 margin-top-65">Featured Opportunities</h3>
                </div>

                <!-- Carousel -->
                <div class="col-md-12">
                    <div class="carousel">

                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">

                                <a href="javascript:void(0);" class="listing-img-container">

                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                        <span>For Sale</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">$275,000 <i>$520 / sq ft</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src="images/project/21.jpg" alt=""></div>
                                        <div><img src="images/project/22.jpg" alt=""></div>
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="javascript:void(0);">Eagle Apartments</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                            class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            9364 School St. Lynchburg, NY
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Area <span>530 sq ft</span></li>
                                        <li>Bedrooms <span>2</span></li>
                                        <li>Bathrooms <span>1</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> David Strozier</a>
                                        <span><i class="fa fa-calendar-o"></i> 1 day ago</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">

                                <a href="javascript:void(0);" class="listing-img-container">

                                    <div class="listing-badges">
                                        <span>For Rent</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">$900 <i>monthly</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src="images/project/23.jpg" alt=""></div>
                                        <div><img src="images/project/24.jpg" alt=""></div>
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="javascript:void(0);">Serene Uptown</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                            class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            6 Bishop Ave. Perkasie, PA
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Area <span>440 sq ft</span></li>
                                        <li>Bedrooms <span>2</span></li>
                                        <li>Bathrooms <span>1</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> Harriette Clark</a>
                                        <span><i class="fa fa-calendar-o"></i> 2 days ago</span>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">

                                <a href="javascript:void(0);" class="listing-img-container">

                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                        <span>For Rent</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">$1700 <i>monthly</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src="images/project/27.jpg" alt=""></div>
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="javascript:void(0);">Meridian Villas</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                            class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            778 Country St. Panama City, FL
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Area <span>1450 sq ft</span></li>
                                        <li>Bedrooms <span>2</span></li>
                                        <li>Bathrooms <span>3</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> Chester Miller</a>
                                        <span><i class="fa fa-calendar-o"></i> 4 days ago</span>
                                    </div>

                                </div>
                                <!-- Listing Item / End -->

                            </div>
                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">


                                <a href="javascript:void(0);" class="listing-img-container">

                                    <div class="listing-badges">
                                        <span>For Sale</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">$420,000 <i>$770 / sq ft</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src="images/project/28.jpg" alt=""></div>
                                    </div>

                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="javascript:void(0);">Selway Apartments</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                            class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            33 William St. Northbrook, IL
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Area <span>540 sq ft</span></li>
                                        <li>Bedrooms <span>2</span></li>
                                        <li>Bathrooms <span>2</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> Kristen Berry</a>
                                        <span><i class="fa fa-calendar-o"></i> 3 days ago</span>
                                    </div>

                                </div>
                                <!-- Listing Item / End -->

                            </div>
                        </div>
                        <!-- Listing Item / End -->


                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <div class="listing-item">


                                <a href="javascript:void(0);" class="listing-img-container">
                                    <div class="listing-badges">
                                        <span>For Sale</span>
                                    </div>

                                    <div class="listing-img-content">
                                        <span class="listing-price">$535,000 <i>$640 / sq ft</i></span>
                                        <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                        <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                    </div>

                                    <div class="listing-carousel">
                                        <div><img src="images/project/29.jpg" alt=""></div>
                                    </div>
                                </a>

                                <div class="listing-content">

                                    <div class="listing-title">
                                        <h4><a href="javascript:void(0);">Oak Tree Villas</a></h4>
                                        <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                            class="listing-address popup-gmaps">
                                            <i class="fa fa-map-marker"></i>
                                            71 Lower River Dr. Bronx, NY
                                        </a>
                                    </div>

                                    <ul class="listing-features">
                                        <li>Area <span>350 sq ft</span></li>
                                        <li>Bedrooms <span>2</span></li>
                                        <li>Bathrooms <span>1</span></li>
                                    </ul>

                                    <div class="listing-footer">
                                        <a href="#"><i class="fa fa-user"></i> Mabel Gagnon</a>
                                        <span><i class="fa fa-calendar-o"></i> 4 days ago</span>
                                    </div>

                                </div>
                                <!-- Listing Item / End -->

                            </div>
                        </div>
                        <!-- Listing Item / End -->



                    </div>
                </div>
                <!-- Carousel / End -->

            </div>
        </div>

        <!--services-->
            <!-- Fullwidth Section -->
    <section class="fullwidth margin-top-105 servicesHome" data-background-color="#f7f7f7"
    style="background: rgb(247, 247, 247);">

    <!-- Box Headline -->
    <h3 class="headline-box">What are you looking for?</h3>

    <!-- Content -->
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Office"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Sale and Rental of Houses</h4>
                    <!--a href="/customer/property/add" class="button border">Apply Now</a-->
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Home-2"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Sale and Rental of Lots</h4>
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Car-3"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Rent-to-Own Programs</h4>
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Clothing-Store"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Relocation Programs</h4>
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>

        </div>
    </div>
    <hr>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Office"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Issuance of Loans</h4>
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <!-- Icon Box -->
                <div class="icon-box-1">

                    <div class="icon-container">
                        <i class="im im-icon-Home-2"></i>
                        <div class="icon-links">
                            <a href="/our-services">For Sale</a>
                            <a href="/our-services">For Rent</a>
                        </div>
                    </div>

                    <h4>Maintenance of Estates</h4>
                    <a href="/our-services" class="button border">Apply Now</a>
                </div>
            </div>
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
                    <div class="col-md-3">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <i class="im im-icon-Home" style="color: white"></i><br>
                                    <span class="numberCounter" style="color: white">942</span>
                                    <h5 style="color: white">Sales & Rentals</h5>
                                </a>

                            </div>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                    <div class="col-md-3">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <i class="im im-icon-Money" style="color: white"></i><br>
                                    <span class="numberCounter" style="color: white">1476</span>
                                    <h5 style="color: white">Rent To Own & Relocation Programs</h5>
                                </a>
                            </div>

                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                    <div class="col-md-3">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <i class="im im-icon-People-onCloud" style="color: white"></i><br>
                                    <span class="numberCounter" style="color: white">89</span>
                                    <h5 style="color: white"> Issuance of Loans</h5>
                                </a>
                            </div>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                    <div class="col-md-3">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <div class="text-center">
                                <a href="/our-services">
                                    <i class="im im-icon-People-onCloud" style="color: white"></i><br>
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
    <a href="/our-services" class="flip-banner parallax" data-background="images/back.jpg" data-color=""
        data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">How can we help today?</h2>
            <h2 class="flip-hidden">Our Services <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
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
                        class="headline margin-top-15 margin-bottom-35     ">Companies We&#8217;ve Worked With <span>We can
                            assist you with your innovation or commercialisation journey!</span></h3>
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
                            <a href="https://www.gov.bb/Ministries/housing" target="_blank">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fullwidth Section / End -->

@endsection

