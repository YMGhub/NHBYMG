@extends('layouts.layout')
@section('content')
    <div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45"
        data-img-width="2500" data-img-height="1600">
        <div class="parallax-content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Main Search Container -->
                        <div class="main-search-container">
                            <h2>
                                <?php
                                if (isset($data1[0])) {
                                    print $data1[0]->title_page;
                                }
                                ?>
                            </h2>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-7 sp-content" style="padding:0px !important">
                <div class="property-description">
                    <!-- Description -->
                    <br>
                    <br>
                    <div class="input">
                        <p>
                            <?php
                            if (isset($data1[0])) {
                                print $data1[0]->description_page;
                            }
                            ?>
                        </p>

                        <!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($data as $content)
                <div class="toggle-wrap style-2  "><span class="trigger "><a href="#"> {{ $content->name_commercial }}
                            <i class="sl sl-icon-plus"></i></a></span>
                    <div class="toggle-container">
                        <p>
                            {{ $content->description_commercial }}

                        </p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    </div>

    </div>

    </div>
    <a href="/contact" class="flip-banner parallax" data-background="images/back.jpg" data-color="#"
        data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
        <div class="flip-banner-content">
            <h2 class="flip-visible">Not Sure Of Your Next Step</h2>
            <h2 class="flip-hidden">Get In Contact Today <i class="sl sl-icon-arrow-right"></i></h2>
        </div>
    </a>
@endsection
