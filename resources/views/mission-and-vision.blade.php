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
                            <h2>Mission Statement</h2>


                        </div>
                        <!-- Main Search Container / End -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--div class="container">
                        <div class="row">


                <div class="col-lg-12 col-md-7 sp-content">
                    <div class="property-description">

                        <h3 class="desc-headline">Vision</h3>
                        <div class="input">

                            <?php
                            /*if (isset($contents[0])) {
                        print $contents[0]->section3;
                    }*/
                            ?>

                        </div>
                    </div>
                </div>

                </div>
                </div-->

    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-12 col-md-7 sp-content">
                <div class="property-description">
                    <!-- Description -->
                    <!--h3 class="desc-headline">Mission Statement</h3-->
                    <div class="input">
                        <?php
                        if (isset($contents[0])) {
                            print $contents[0]->section2;
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
            <!-- Property Description / End -->
        </div>
    </div>

    <!--div class="container">
                                         <div class="row">


                                          <div class="col-lg-12 col-md-7 sp-content mt-10">
                                           <div class="property-description">

                                            <h3 class="desc-headline">VISION STATEMENT:</h3>
                                            <h5 class="desc-headline">To ensure quality affordable for every Barbadian through the following core values: -</h5>
                                            <div class="input">
                                             • Professionalism
                                             • Accountability
                                             • Credibility
                                             • Efficiency
                                            </div>
                                           </div>
                                          </div>
                                          <!-- Property Description / End -->
    </div>
    </div-->
    <br>
    <br>
    <br>
    <br>
@endsection
