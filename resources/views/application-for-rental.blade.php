@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
    <style>
        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, transparent);
        }


        .bannerOurDeparment1 {
            background: url("https://nhc.ymgweb.com/images/Project-Hero.jpg") !important;
            background-position: 50% 50% !important;
            background-size: cover !important;
            margin-bottom: 40px
        }

        .parallax1 {
            position: relative;
            z-index: 99;
        }

        .parallax-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 101;
            background-color: #333;
        }
    </style>
    <div class="parallax1 bannerOurDeparment2" data-background="/images/Project-Hero.jpg" data-color="#"
        data-color-opacity="0.1" data-img-width="1000" data-img-height="1200"
        style="background-position: 0;   background-image: url(/images/Project-Hero.jpg);
    background-attachment: fixed;
    background-size: 100% !important;
    background-position: center !important;">
        <div class="parallax-overlay" style="background-color: rgb(54, 56, 62); opacity: 0.45;"></div>
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">
                            <h2>NATIONAL HOUSING CORPORATION</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Map Container / End -->


    <!-- Container / Start -->
    <div class="container">

        <div class="row">


            <!-- Contact Form -->
            <div class="col-md-12 col-sm-12">

                <section id="contact">
                    <h4 class="text-center headline margin-top-35 margin-bottom-35">
                        APPLICATION FOR RENTAL UNIT/ LOT <br>
                        USE BLOCK LETTERS</h4>

                    <p class="text-center headline margin-top-35 margin-bottom-35">
                        Please complete this form in full using BLOCK LETTERS. Incomplete forms will not be processed.
                        Applicants must upload your most recent Pay Slips, a recent (less than 1 month old) Job Letter, a
                        Passport Size Photo, and a photo of their ID Card to complete the application.
                    </p>

                    <!--div id="contact-message"></div-->
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-custom alert-success-custom">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    <!-- Form Validation Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-custom alert-danger-custom">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" enctype="multipart/form-data" action="{{ route('application-for-rental.apply') }}"
                        name="applicationrental" id="applicationrental" autocomplete="on">
                        @csrf

                        <div class="row">

                            <!--Email-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Email:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="email_field" type="email" id="email_field" placeholder="Email"
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!---NATIONAL REGISTRATION NUMBER--->
                            <div class="col-md-12">
                                <div class maxlength="10" pattern="\d{10}"="col-md-12">
                                    <div>
                                        <label><b>NATIONAL REGISTRATION NUMBER</b></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input maxlength="10" pattern="\d{10}" name="national_registration_number"
                                                    type="text" id="national_registration_number"
                                                    placeholder="National Registration Number" required="required" />
                                                <div id="validation-result"
                                                    style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---NATIONAL REGISTRATION NUMBER--->

                            <div class="col-md-12">
                                <div>
                                    <label><b>APPLICANT: Mr. Miss. Mrs.</b></label>
                                    <div class="row">
                                        <div class="col-md-3">

                                            <select name="applicant_surname" id="applicant_surname" placeholder="Surname"
                                                required="required">
                                                <option value="" disabled selected>Select Surname</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Ms.">Ms.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="applicant_first" type="text" id="applicant_first"
                                                placeholder="First" required="required" />
                                        </div>
                                        <div class="col-md-3">
                                            <input name="applicant_middle" type="text" id="applicant_middle"
                                                placeholder="Middle" required="required" />
                                        </div>
                                        <div class="col-md-3">
                                            <input name="maiden_name" type="text" id="maiden_name"
                                                placeholder="Maiden Name" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- date and photograph-->
                            <!--div class="col-md-12">
                                                                                                                                                                                                <div>

                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-md-8">
                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <label><b>Date of Birth:</b></label>
                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                        <input name="date_of_birth" type="text" id="date_of_birth"
                                                                                                                                                                                                                            placeholder="yyyy-mm-dd" required="required" />
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-md-4">
                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                <label><b>Photograph:</b></label>
                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                        <input type="file" name="photograph"
                                                                                                                                                                                                                            accept="image/jpg, image/jpeg, image/png">
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>

                                                                                                                                                                                                    </div>

                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div-->
                            <!-- date and photograph-->

                            <!--TAMIS-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Tamis Number</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="tamis_number" type="text" maxlength="13" id="tamis_number"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Address-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address 1</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="applicant_address" type="text" id="applicant_address"
                                                placeholder="Address" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Address 2-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address 2</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="applicant_address2" type="text" id="applicant_address2"
                                                placeholder="Address" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!----------->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-12" style="    margin-bottom: 20px;">
                                            <label><b>PARISH: </b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select id="applicant_parish" name="co_applicant_parish"
                                                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                                                        <option value="" selected disabled>Select a Parish</option>
                                                        <option value="Christ Church">Christ Church</option>
                                                        <option value="St. Andrew">St. Andrew</option>
                                                        <option value="St. George">St. George</option>
                                                        <option value="St. James">St. James</option>
                                                        <option value="St. John">St. John</option>
                                                        <option value="St. Joseph">St. Joseph</option>
                                                        <option value="St. Lucy">St. Lucy</option>
                                                        <option value="St. Michael">St. Michael</option>
                                                        <option value="St. Peter">St. Peter</option>
                                                        <option value="St. Philip">St. Philip</option>
                                                        <option value="St. Thomas">St. Thomas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Telephone Number-->
                            <div class="col-md-12">
                                <label><b>Telephone Number:</b></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="tel" id="phone_home" name="phone_home" pattern="[0-9]{10}"
                                            placeholder="Home" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="tel" id="phone_work" name="phone_work" pattern="[0-9]{10}"
                                            placeholder="Work" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="tel" id="phone_cell" name="phone_cell" pattern="[0-9]{10}"
                                            placeholder="Cell" required>
                                    </div>

                                </div>
                            </div>
                            <!----------->



                            <!--Marital Status-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Marital Status:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="marital_status" id="Single"
                                                        value="Single">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Single">Single</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="marital_status" id="Married"
                                                        value="Married">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Married">Married</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="marital_status" id="Widowed"
                                                        value="Widowed">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Widowed">Widowed</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="marital_status" id="Divorced"
                                                        value="Divorced">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Divorced">Divorced</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="marital_status" id="Separated"
                                                        value="Separated">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Separated">Separated</label>
                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!---CITIZENSHIP - Country of Residence--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>CITIZENSHIP:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <select name="citizenship_field" id="citizenship_field">
                                                            <option value="">Select a country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="France">France</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Martin">Saint Martin</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                                and
                                                                the Grenadines</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Country of Residence:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <select name="country_of_residence" id="country_of_residence">
                                                            <option value="">Select a country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="France">France</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Martin">Saint Martin</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                                and
                                                                the Grenadines</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---CITIZENSHIP - Country of Residence--->



                            <!---Employer and Occupation--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Employer:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="employer_field" type="text" id="employer_field"
                                                            placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Occupation:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupation_field" type="text"
                                                            id="occupation_field" placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---Employer and Occupation--->

                            <!---Period of Employment  and Salary--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Period of Employment:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">


                                                        <select name="period_of_employment" id="period_of_employment">
                                                            <option value="< 1 year">
                                                                < 1 year</option>
                                                            <option value="1-3 years">1 – 3 years</option>
                                                            <option value="3-5 years">3 – 5 years</option>
                                                            <option value="5-7 years">5 – 7 years</option>
                                                            <option value="7-10 years">7 – 10 years</option>
                                                            <option value="> 10 years "> > 10 years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Salary:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="salary" type="text" id="salary"
                                                            placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---Period of Employment  and Salary--->

                            <!--Pay Period-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Pay Period:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="pay_period" id="Weekly" value="Weekly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Weekly">Weekly</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="pay_period" id="Bi-Monthly"
                                                        value="Bi-Monthly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Bi-Monthly">Bi-Monthly</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="pay_period" id="Monthly" value="Monthly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Monthly">Monthly</label>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Employment status-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Employment Status:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="employment_status" id="Government"
                                                        value="Government">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Government">Government</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="employment_status" id="Private"
                                                        value="Private">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Private">Private</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="employment_status" id="Self"
                                                        value="Self">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Self">Self </label>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->



                            <!--Coapplicant-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>CO-APPLICANT: Mr. Miss. Mrs.</b></label>
                                    <div class="row">

                                        <div class="col-md-3">

                                            <select name="co_applicant_surname" id="co_applicant_surname"
                                                placeholder="Surname" required="required">
                                                <option value="" disabled selected>Select Surname</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Ms.">Ms.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input name="co_applicant_name" type="text" id="co_applicant_name"
                                                placeholder="Name" required="required" />
                                        </div>

                                        <div class="col-md-3">
                                            <input name="co_applicant_middle" type="text" id="co_applicant_middle"
                                                placeholder="Middle" required="required" />
                                        </div>
                                        <div class="col-md-3">
                                            <input name="co_maiden_name" type="text" id="co_maiden_name"
                                                placeholder="Maiden Name" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--------------->

                            <!---NATIONAL REGISTRATION NUMBE Co applicant--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>NATIONAL REGISTRATION NUMBER</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="co_national_registration_number" type="text"
                                                id="co_national_registration_number" maxlength="10"
                                                placeholder="National Registration Number" required="required" />
                                            <div id="validation-result2"
                                                style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---NATIONAL REGISTRATION NUMBER CoApplicant--->

                            <!-- date birth CoApplicant-->
                            <div class="col-md-12">
                                <div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label><b>Date of Birth:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="co_date_of_birth" type="text"
                                                            id="co_date_of_birth" placeholder="yyyy-mm-dd"
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <!-- date and photograph-->

                            <!--TAMIS Co applicant-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Tamis Number</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="co_tamis_number" type="text" maxlength="13"
                                                id="co_tamis_number" placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!---ADDRESS--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="co_applicant_address" type="text" id="co_applicant_address"
                                                placeholder="Address" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---ADDRESS--->

                            <!--Address 2-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address 2</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="co_applicant_address2" type="text" id="co_applicant_address2"
                                                placeholder="Address" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!----------->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-12" style="    margin-bottom: 20px;">
                                            <label><b>PARISH: </b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select id="co_applicant_parish" name="co_applicant_parish"
                                                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                                                        <option value="" selected disabled>Select a Parish</option>
                                                        <option value="Christ Church">Christ Church</option>
                                                        <option value="St. Andrew">St. Andrew</option>
                                                        <option value="St. George">St. George</option>
                                                        <option value="St. James">St. James</option>
                                                        <option value="St. John">St. John</option>
                                                        <option value="St. Joseph">St. Joseph</option>
                                                        <option value="St. Lucy">St. Lucy</option>
                                                        <option value="St. Michael">St. Michael</option>
                                                        <option value="St. Peter">St. Peter</option>
                                                        <option value="St. Philip">St. Philip</option>
                                                        <option value="St. Thomas">St. Thomas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Telephone Number Co Applicant-->
                            <div class="col-md-12">
                                <label><b>Telephone Number:</b></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="tel" id="co_phone_home" name="co_phone_home"
                                            pattern="[0-9]{10}" placeholder="Home">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="tel" id="co_phone_work" name="co_phone_work"
                                            pattern="[0-9]{10}" placeholder="Work">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="tel" id="co_phone_cell" name="co_phone_cell"
                                            pattern="[0-9]{10}" placeholder="Cell">
                                    </div>

                                </div>
                            </div>
                            <!----------->

                            <!---EMAIL CO APPLICANT--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                            <label><b>Email:</b></label>
                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                    <input name="co_email" type="email" id="co_email" placeholder="" />
                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!------------------->

                            <!--Marital Status / Co applicant-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Marital Status:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_marital_status" id="Single"
                                                        value="Single">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Single">Single</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_marital_status" id="Married"
                                                        value="Married">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Married">Married</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_marital_status" id="Widowed"
                                                        value="Widowed">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Widowed">Widowed</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_marital_status" id="Divorced"
                                                        value="Divorced">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Divorced">Divorced</label>
                                                </div>
                                                <div style="width:20%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_marital_status" id="Separated"
                                                        value="Separated">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Separated">Separated</label>
                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!---CITIZENSHIP - Country of Residence / co applcianant--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>CITIZENSHIP:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <select name="co_citizenship_field" id="co_citizenship_field">
                                                            <option value="">Select a country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="France">France</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Martin">Saint Martin</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                                and
                                                                the Grenadines</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Country of Residence:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">


                                                        <select name="co_country_of_residence" id="co_citizenship_field">
                                                            <option value="">Select a country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="France">France</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Martin">Saint Martin</option>
                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                                and
                                                                the Grenadines</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---CITIZENSHIP - Country of Residence--->



                            <!---Employer and Occupation / co applicant--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Employer:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="co_employer_field" type="text"
                                                            id="co_employer_field" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Occupation:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="co_occupation_field" type="text"
                                                            id="co_occupation_field" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---Employer and Occupation--->

                            <!---Period of Employment  and Salary Co Applicant--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Period of Employment:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">


                                                        <select name="co_period_of_employment"
                                                            id="co_period_of_employment">
                                                            <option value="< 1 year">
                                                                < 1 year</option>
                                                            <option value="1-3 years">1 – 3 years</option>
                                                            <option value="3-5 years">3 – 5 years</option>
                                                            <option value="5-7 years">5 – 7 years</option>
                                                            <option value="7-10 years">7 – 10 years</option>
                                                            <option value="> 10 years "> > 10 years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <label><b>Salary:</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="co_salary" type="text" id="co_salary"
                                                            placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---Period of Employment  and Salary Co Applicant--->

                            <!--Pay Period CO-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Pay Period:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_pay_period" id="Weekly"
                                                        value="Weekly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Weekly">Weekly</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_pay_period" id="Bi-Monthly"
                                                        value="Bi-Monthly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Bi-Monthly">Bi-Monthly</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_pay_period" id="Monthly"
                                                        value="Monthly">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Monthly">Monthly</label>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--Employment status CO-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Employment Status:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display: flex;width: 100%;justify-content: space-between;">

                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_employment_status" id="Government"
                                                        value="Government">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Government">Government</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_employment_status" id="Private"
                                                        value="Private">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Private">Private</label>
                                                </div>
                                                <div style="width:40%;display:flex;align-items: center;"
                                                    class="form-check form-check-inline">
                                                    <input style="margin-bottom:0px" class="form-check-input"
                                                        type="radio" name="co_employment_status" id="Self"
                                                        value="Self">
                                                    <label style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                        class="form-check-label" for="Self">Self </label>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->




                            <!---EMPLOYER:--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                <label><b>EMPLOYER:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                        <input name="employer" type="text" id="employer" placeholder="Employer"
                                                                                                                                                                                                                                                                                                                                                                                                                                            required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div-->
                            <!---EMPLOYER:--->

                            <!---OCCUPATION::--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                <label><b>OCCUPATION:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                        <input name="occupation" type="text" id="occupation"
                                                                                                                                                                                                                                                                                                                                                                                                                                            placeholder="Occupation" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div-->
                            <!---OCCUPATION::--->

                            <!---CITIZENSHIP:::--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>CITIZENSHIP:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="citizenship" type="text" id="citizenship"
                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Citizenship" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!---CITIZENSHIP:::--->

                            <!---TELEPHONE:::--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>TELEPHONE:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="telephone" type="tel" id="telephone"
                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Telephone" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!---TELEPHONE:::--->

                            <!---INCOME--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>INCOME:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="income" type="text" id="income" placeholder="Income"
                                                                                                                                                                                                                                                                                                                                                                                                                                        required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!---INCOME--->

                            <!--div class="col-md-12 mt-3" style="margin-top:30px">
                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                    <div class="col-md-4">
                                                                                                                                                                                                                                                        <label><b>SIZE OF FAMILY:</b></label>
                                                                                                                                                                                                                                                        <input name="size_of_family" type="number" id="size_of_family"
                                                                                                                                                                                                                                                            placeholder="Size of Family" required="required" />
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <div class="col-md-4">
                                                                                                                                                                                                                                                        <label><b>ADULT:</b></label>
                                                                                                                                                                                                                                                        <input name="adults" type="number" id="adults" placeholder="Adults"
                                                                                                                                                                                                                                                            required="required" />
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                    <div class="col-md-4">
                                                                                                                                                                                                                                                        <label><b>CHILDREN:</b></label>
                                                                                                                                                                                                                                                        <input name="children" type="number" id="children" placeholder="Children"
                                                                                                                                                                                                                                                            required="required" />
                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                        </div-->

                            <!---DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?</b></label>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary radio-inline">
                                                    <input class="own_landorproperty" type="radio" value="yes"
                                                        name="own_landorproperty">Yes
                                                </label>
                                                <label class="btn btn-primary radio-inline">
                                                    <input class="own_landorproperty" type="radio" value="no"
                                                        name="own_landorproperty"> No
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?--->

                            <!---IF YES, PLEASE STATE ADDRESS--->
                            <div class="col-md-12 boxStateAddress" style="display:none">
                                <div>
                                    <label><b>IF YES, PLEASE STATE ADDRESS:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="state_address" type="text" id="state_address"
                                                placeholder="If Yes, Please State Address" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---INIF YES, PLEASE STATE ADDRESSCOME--->


                            <!---ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSTITUTION</b></label>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary ">
                                                    <input class="financial_institution" type="radio" value="yes"
                                                        name="financial_institution">Yes
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input class="financial_institution" type="radio" value="no"
                                                        name="financial_institution">
                                                    No
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?--->


                            <!---IF YES, PLEASE GIVE DETAILS--->
                            <div class="col-md-12 giveDetailBox" style="display: none">
                                <div>
                                    <label><b>IF YES, PLEASE GIVE DETAILS:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="give_details" type="text" id="give_details"
                                                placeholder="If Yes, Please Give Details" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---IF YES, PLEASE GIVE DETAILS--->


                            <!---HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="occupedaunit" type="text" id="occupedaunit"
                                                placeholder="Have you ever occupied a unit? If Yes, Where?"
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?--->

                            <!---Photograph--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                <div>
                                                                                                                                                                                                    <label><b>PHOTOGRAPH</b></label>
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-md-12">
                                                                                                                                                                                                            <input type="file" name="photograph"
                                                                                                                                                                                                                accept="image/jpg, image/jpeg, image/png">
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div-->
                            <!--Photograph--->

                            <!---INFORMATION ON INTENDED OCCUPANTS --->
                            <div class="col-md-12">
                                <div>
                                    <label><b>INFORMATION ON INTENDED OCCUPANTS:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTable">
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>RELATION</th>
                                                    <th>AGE</th>
                                                    <th>OCCUPATION / SCHOOL</th>
                                                    <th>INCOME</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore[0][name_occupant]"
                                                            placeholder="Enter Name" class="form-control" /></td>
                                                    <td><input type="text" name="addmore[0][relation_occupant]"
                                                            placeholder="Enter Relation" class="form-control" /></td>
                                                    <td><input type="number" name="addmore[0][age_accupant]"
                                                            placeholder="Enter Age" class="form-control" /></td>
                                                    <td><input type="text"
                                                            name="addmore[0][occupation_school_occupant]"
                                                            placeholder="Enter Occupation / School"
                                                            class="form-control" /></td>
                                                    <td><input type="text" name="addmore[0][income_occupant]"
                                                            placeholder="Enter Income" class="form-control" /></td>
                                                    <td><button type="button" name="add" id="add"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---INFORMATION ON INTENDED OCCUPANTS --->

                            <!---DOCUMENTS --->
                            <div class="col-md-12">
                                <div class="ContainerDocuments">
                                    <label><b>DOCUMENTS:</b></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Pay Slips:</b></label>
                                            <input style="margin-bottom: 0px;" type="file" id="payslips"
                                                name="payslips[]" multiple />
                                            <p id="ErrorPayslips" style="color: red;margin-bottom: 25px;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>ID Card (Back & Front):</b></label>
                                            <input style="margin-bottom: 0px;" type="file" id="id_card"
                                                name="id_card" accept=".jpg, .jpeg" />
                                            <p id="ErrorIdCard " style="color: red;margin-bottom: 25px;"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Job Letter:</b></label>
                                            <input style="margin-bottom: 0px;" type="file" id="job_letter"
                                                name="job_letter" />
                                            <p id="ErrorJobLetter " style="color: red;margin-bottom: 25px;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>Passport Size Photo:</b></label>
                                            <input style="margin-bottom: 0px;" type="file" id="passport"
                                                name="passport" accept=".png, .jpg, .jpeg" />
                                            <p id="ErrorPassport " style="color: red;margin-bottom: 25px;"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!---DOCUMENTS --->

                            <!--h4 class="text-center headline margin-top-35 margin-bottom-35">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                FOR OFFICIAL USE</h4-->

                            <!---IS APPLICANT A TENANT OR LODGER?--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>IS APPLICANT A TENANT OR LODGER?</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="tenantorlodger" type="text" id="tenantorlodger"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Is Applicant a Tenant or Lodger" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!---IS APPLICANT A TENANT OR LODGER?--->


                            <!---NAME AND ADDRESS OF LANDLORD:--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>NAME AND ADDRESS OF LANDLORD:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="addressoflandlord" type="text" id="addressoflandlord"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Name and Address of Landlord" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!---NAME AND ADDRESS OF LANDLORD:--->


                            <!---DATE OF OCCUPATION OF PRESENT ACCOMMODATION--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>DATE OF OCCUPATION OF PRESENT ACCOMMODATION</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="present_accommodation" type="date" id="present_accommodation"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Date of Occupation of Present Accommodation"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!--DATE OF OCCUPATION OF PRESENT ACCOMMODATION--->


                            <!--STRUCTURE OF HOUSE / RENTAL RATE--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <label><b>STRUCTURE OF HOUSE:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="structureofhouse" type="text" id="structureofhouse"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Structure of House" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <label><b>RENTAL RATE:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="rental_date" type="date" id="rental_date"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Rental Date" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div-->
                            <!--STRUCTURE OF HOUSE / RENTAL RATE--->


                            <!--TYPE OF SANITARY FACILITIES / WATER SUPPLY--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <label><b>TYPE OF SANITARY FACILITIES:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <input name="typeofsanityfacilities" type="text"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            id="typeofsanityfacilities"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            placeholder="Type of Sanitary Facilities of House" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <label><b>WATER SUPPLY:</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <input name="water_supply" type="text" id="water_supply"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            placeholder="Water Supply" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div-->
                            <!--STRUCTURE OF HOUSE / WATER SUPPLY--->


                            <!--h4 class="text-center headline margin-top-35 margin-bottom-35">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                HOUSING OFFICER’S COMMENTS</h4-->

                            <!-- HOUSING OFFICER’S COMMENTS--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-12">

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <textarea style="field-sizing:content" name="housingofficercomments" id="housingofficercomments"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Housing Officer´s Comments" required="required"></textarea>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div-->
                            <!-- HOUSING OFFICER’S COMMENTS--->

                            <!--ACKNOWLEDGED THIS--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>ACKNOWLEDGED THIS</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="acknowledged" type="text" id="acknowledged"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Acknowledged this" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>Day Of</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-9">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input name="dayof" type="text" id="dayof"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        placeholder="Day Of" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-13">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <input type="hidden" value="<?php echo date('Y'); ?>" name="year" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <p> <?php echo date('Y'); ?> </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>By</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="by" type="text" id="by" placeholder="By"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                required="required" />

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div-->
                            <!--ACKNOWLEDGED THIS--->

                            <!--KEYS RECEIVED BY--->

                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>KEYS RECEIVED BY</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="keysreceived" type="text" id="keysreceived"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Keys Received" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>THIS</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="thiskeys" type="text" id="thiskeys" placeholder=""
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>DAY OF</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="dayofkeys" type="text" id="dayofkeys" placeholder=""
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label style="color:#fff"><b>Year OF</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input type="hidden" value="<?php echo date('Y'); ?>" name="yearkeys" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p> <?php echo date('Y'); ?> </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div-->

                            <!--KEYS RECEIVED BY--->


                            <!--WITNESSED BY--->

                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-4">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>WITNESSED BY</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="whitnessed" type="text" id="whitnessed"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Witnessed By" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>THIS</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="thiswhitnessed" type="text" id="thiswhitnessed"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-3">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label><b>DAY OF</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="dayofwhitnessed" type="text" id="dayofwhitnessed"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="" required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <label style="color:#fff"><b>Year OF</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input type="hidden" value="<?php echo date('Y'); ?>" name="yearwhitnessed" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <p> <?php echo date('Y'); ?> </p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div-->

                            <!--WITNESSED BY--->


                            <!---HOUSING OFFICER / ASST. HOUSING OFFICER--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <label><b>HOUSING OFFICER / ASST. HOUSING OFFICER</b></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="col-md-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input name="housingofficer" type="text" id="housingofficer"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                placeholder="Housing Officer / Asst. Housing Officer"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                required="required" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div-->
                            <!--HOUSING OFFICER / ASST. HOUSING OFFICER--->


                            <!---Signatures--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                        <div>
                                                                                                                                                                                                            <label><b>SIGNATURE(S)</b></label>
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-md-12">
                                                                                                                                                                                                                    <input name="signatures" type="text" id="signatures"
                                                                                                                                                                                                                        placeholder="Signatures" required="required" />
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div-->
                            <!--Signatures--->

                            <!--DATED THIS - Signatures--->
                            <!--div class="col-md-12">
                                                                                                                                                                                                        <div>
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                                                                    <label><b>DATED THIS</b></label>
                                                                                                                                                                                                                    <input name="datedthis" type="text" id="datedthis"
                                                                                                                                                                                                                        placeholder="Dated This" required="required" />
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div class="col-md-6">

                                                                                                                                                                                                                    <div class="row">

                                                                                                                                                                                                                        <div class="col-md-9">
                                                                                                                                                                                                                            <label><b>Day Of</b></label>
                                                                                                                                                                                                                            <input name="dayofdatedthis" type="text" id="dayofdatedthis"
                                                                                                                                                                                                                                placeholder="Day Of" required="required" />
                                                                                                                                                                                                                        </div>




                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>




                                                                                                                                                                                                            </div>

                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div-->
                            <!--ACKNOWLEDGED THIS--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="display:flex;    align-items: center;">
                                                <input style="margin-bottom: 0;" type="checkbox" id="confirm_info"
                                                    required>
                                                <label style="    margin-bottom: 0;margin-left: 10px;"
                                                    for="confirm_info">I confirm that the information provided is
                                                    accurate.</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit" />

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>


    </div>

    <!-- Container / End -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Enable submit button only when checkbox is checked
            document.getElementById("confirm_info").addEventListener("change", function() {
                document.getElementById("submit").disabled = !this.checked;
            });

            document.getElementById('national_registration_number').addEventListener('input', function(e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });

            document.getElementById('co_national_registration_number').addEventListener('input', function(e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });

            // applicant tamis number
            document.getElementById('tamis_number').addEventListener('input', function(e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });
            //coapplicant tamis number
            document.getElementById('co_tamis_number').addEventListener('input', function(e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });

            //date birth
            /*document.getElementById("date_of_birth").addEventListener("change", function() {
                let date = this.value; // Formato YYYY-MM-DD
                let parts = date.split("-");

                if (parts.length === 3) {
                    let formattedDate = `${parts[0]}/${parts[1]}/${parts[2]}`; // Convierte a DD/MM/YYYY
                    document.getElementById("date_of_birth").value = formattedDate;
                    //alert("Selected Date: " +formattedDate); // Solo para prueba, puedes usarlo en otro lado
                }
            });*/

            //date Birth
            flatpickr("#date_of_birth", {
                dateFormat: "Y-m-d", // Formato de fecha
                minDate: "today", // Limita la selección a fechas futuras
            });


            //coapplicant
            flatpickr("#co_date_of_birth", {
                dateFormat: "Y-m-d", // Formato de fecha
                minDate: "today", // Limita la selección a fechas futuras
            });


            //DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?
            const $own_landorproperty = $(".own_landorproperty");
            const $boxStateAddress = $(".boxStateAddress"); // Asegúrate que el selector es correcto

            if ($boxStateAddress.length === 0) {
                console.error("❌ Error: No se encontró el elemento con clase 'boxStateAddress'");
                return;
            }

            $own_landorproperty.change(function() {
                if ($(this).val() === "yes") {
                    $boxStateAddress.show(); // Mostrar el div
                } else {
                    $boxStateAddress.hide(); // Ocultar el div
                }
            });


            //ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSTITUTION
            const $financial_institution = $(".financial_institution");
            const $giveDetailBox = $(".giveDetailBox"); // Asegúrate que el selector es correcto

            if ($giveDetailBox.length === 0) {
                console.error("❌ Error: No se encontró el elemento con clase 'giveDetailBox'");
                return;
            }

            $financial_institution.change(function() {
                if ($(this).val() === "yes") {
                    $giveDetailBox.show(); // Mostrar el div
                } else {
                    $giveDetailBox.hide(); // Ocultar el div
                }
            });



            //subida de documentos

            document.getElementById('payslips').addEventListener('change', function() {
                let errorElement = document.getElementById('ErrorPayslips');
                if (this.files.length > 2) {
                    errorElement.textContent = "You can only upload a maximum of 2 files.";
                    this.value = ""; // Reinicia el input
                } else {
                    errorElement.textContent = "";
                }
            });

            /**ID Card*/
            document.getElementById('id_card').addEventListener('change', function() {
                let errorElement = document.getElementById('ErrorIdCard');
                let allowedExtensions =
                    /(\.jpg|\.jpeg|\.png)$/i; // Expresión regular para validar formatos permitidos

                if (!allowedExtensions.test(this.value)) {
                    errorElement.textContent = "Only PNG, JPG, or JPEG files are allowed.";
                    this.value = ""; // Reinicia el input
                } else {
                    errorElement.textContent = "";
                }
            });

            /**Passport */
            document.getElementById('passport').addEventListener('change', function() {
                let errorElement = document.getElementById('ErrorPassport ');
                let allowedExtensions =
                    /(\.jpg|\.jpeg|\.png)$/i; // Expresión regular para validar formatos permitidos

                if (!allowedExtensions.test(this.value)) {
                    errorElement.textContent = "Only PNG, JPG, or JPEG files are allowed.";
                    this.value = ""; // Reinicia el input
                } else {
                    errorElement.textContent = "";
                }
            });

            /////////////////////


            let i = 0;

            document.getElementById("add").addEventListener("click", function() {
                ++i;

                const table = document.getElementById("dynamicTable");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore[${i}][name_occupant]" placeholder="Enter Name" class="form-control" /></td>
            <td><input type="text" name="addmore[${i}][relation_occupant]" placeholder="Enter Relation" class="form-control" /></td>
            <td><input type="text" name="addmore[${i}][age_accupant]" placeholder="Enter Age" class="form-control" /></td>
            <td><input type="text" name="addmore[${i}][occupation_school_occupant]" placeholder="Enter Occupation / School" class="form-control" /></td>
            <td><input type="text" name="addmore[${i}][income_occupant]" placeholder="Enter Income" class="form-control" /></td>
            <td><button type="button" class="btn btn-danger remove-tr">delete</button></td>
        `;

                table.querySelector('tbody').appendChild(row);
            });

            document.addEventListener('click', function(event) {

                if (event.target && event.target.classList.contains('remove-tr')) {
                    event.target.closest('tr').remove();
                }
            });


            //number national 1
            const inputFields = document.querySelectorAll("#national_registration_number");
            let typingTimer; // Variable para el temporizador
            const doneTypingInterval = 500; // Tiempo de espera después de la última pulsación (en ms)


            inputFields.forEach(input => {
                input.addEventListener("input", function() {
                    clearTimeout(typingTimer); // Reinicia el temporizador

                   

                    let number = this.value;
                    let validationResult = document.getElementById("validation-result");

                    //Limpiar campos cada vez que se vuelve a escribir
                    jQuery("#applicant_first").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                        jQuery("#applicant_middle").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                        jQuery("#maiden_name").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                    if (number.length == 10) { // Solo consulta si hay al menos 5 dígitos


                        

                        validationResult.textContent = "Validating wait a moment...";
                        validationResult.style.color = "blue"; // Loading color
                        inputFields.disabled = true; // Disable input
                        //inputFields.style.cursor = "wait"; // Change cursor

                       


                        typingTimer = setTimeout(() => { // Espera antes de ejecutar el fetch

                         




                            fetch("{{ route('validate.number') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        number_national: number,
                                        type_form: "Rental"
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {

                       


                                    if (data.errorMessage) {
                                        validationResult.textContent = data
                                            .errorMessage;
                                        validationResult.style.color =
                                            "red"; // Mensaje de error en rojo
                                    } else {


                                        const parsedData = typeof data === 'string' ?
                                            JSON.parse(data) : data;

                                        function isDataEmpty(response) {
                                            const data = response.data;

                                            if (!Array.isArray(data)) {
                                                console.error(
                                                    "La propiedad 'data' no es un arreglo:",
                                                    data);
                                                return true;
                                            }

                                            return data.length === 0 || data.every(
                                                obj =>
                                                Object.values(obj).every(value =>
                                                    value === null || value === '')
                                            );
                                        }

                                        if (isDataEmpty(parsedData)) {
                                            //desbloquea los campos par que la persona pueda escribri su informacion
                                            console.log("La información está vacía.");

                                            validationResult.textContent = data
                                            .errorMessage;
                                        validationResult.style.color =
                                            "red"; // Mensaje de error en rojo

                                           

                                        } else {
                                            //bloquea los campos nombre y fecha de nac para que la persona no pueda escribri su informacion
                                            //FirstName,MiddleName,LastName,DOB FechaNac
                                            var FirstName = parsedData.data[0]
                                                .FirstName;
                                            var LastName = parsedData.data[0].LastName;
                                            var MiddleName = parsedData.data[0]
                                                .MiddleName;
                                            var DOB = parsedData.data[0].DOB;
                                            var Gender = parsedData.data[0].Gender;

                                             

                                            //field First Name
                                            jQuery("#applicant_first").val(FirstName);
                                            jQuery("#applicant_first").css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field LastName
                                            jQuery("#applicant_middle").val(LastName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field MiddleName
                                            jQuery("#maiden_name").val(MiddleName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field DOB
                                            //jQuery("#maiden_name").val(FirstName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field Gender
                                            //jQuery("#applicant_first").val(FirstName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;

                                            validationResult.textContent = "Valid number";
                                        validationResult.style.color =
                                            "green"; // Mensaje de éxito en verde



                                        }



                                      
                                    }


                                })
                                .catch(error => {
                                    document.getElementById("validation-result")
                                        .textContent = "Validation error";
                                    console.error("Error:", error);
                                });
                        }, doneTypingInterval);
                    }
                });
            });

            //number national 2
            const inputFields2 = document.querySelectorAll("#co_national_registration_number");
            let typingTimer2; // Variable para el temporizador
            const doneTypingInterval2 = 500; // Tiempo de espera después de la última pulsación (en ms)


            inputFields2.forEach(input => {
                input.addEventListener("input", function() {
                    clearTimeout(typingTimer2); // Reinicia el temporizador

                    let number = this.value;
                    let validationResult2 = document.getElementById("validation-result2");

                    validationResult2.textContent = "Validating wait a moment...";
                    validationResult2.style.color = "blue"; // Loading color
                    inputFields2.disabled = true; // Disable input
                    //inputFields2.style.cursor = "wait"; // Change cursor

                      //Limpiar campos cada vez que se vuelve a escribir
                      jQuery("#co_applicant_name").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                        jQuery("#co_applicant_middle").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                        jQuery("#co_maiden_name").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                        jQuery("#co_date_of_birth").val("").css({
                            'pointer-events': '',
                            'background-color': '',
                            'cursor': ''
                        });

                      

                    if (number.length == 10) { // Solo consulta si hay al menos 5 dígitos
                        typingTimer2 = setTimeout(() => { // Espera antes de ejecutar el fetch
                            fetch("{{ route('validate.number') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        number_national: number,
                                        type_form: "Rental"
                                    })
                                })
                                .then(response => response.json())
                                .then(data => {

                                    if (data.errorMessage) {
                                        validationResult2.textContent = data
                                            .errorMessage;
                                        validationResult2.style.color =
                                            "red"; // Mensaje de error en rojo
                                    } else {


                                        /*REFILL FIELDS*/ 
                                        const parsedData = typeof data === 'string' ?
                                            JSON.parse(data) : data;

                                        function isDataEmpty2(response) {
                                            const data = response.data;

                                            if (!Array.isArray(data)) {
                                                console.error(
                                                    "La propiedad 'data' no es un arreglo:",
                                                    data);
                                                return true;
                                            }

                                            return data.length === 0 || data.every(
                                                obj =>
                                                Object.values(obj).every(value =>
                                                    value === null || value === '')
                                            );
                                        }

                                        if (isDataEmpty2(parsedData)) {
                                            //desbloquea los campos par que la persona pueda escribri su informacion
                                            console.log("La información está vacía.");

                                            validationResult2.textContent = data
                                            .errorMessage;
                                        validationResult2.style.color =
                                            "red"; // Mensaje de error en rojo
                                           

                                        } else {
                                            //bloquea los campos nombre y fecha de nac para que la persona no pueda escribri su informacion
                                            //FirstName,MiddleName,LastName,DOB FechaNac
                                            var FirstName = parsedData.data[0]
                                                .FirstName;
                                            var LastName = parsedData.data[0].LastName;
                                            var MiddleName = parsedData.data[0]
                                                .MiddleName;
                                            var DOB = parsedData.data[0].DOB;
                                            var Gender = parsedData.data[0].Gender;

                                             

                                            //field First Name
                                            jQuery("#co_applicant_name").val(FirstName);
                                            jQuery("#co_applicant_name").css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field LastName
                                            jQuery("#co_applicant_middle").val(LastName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field MiddleName
                                            jQuery("#co_maiden_name").val(MiddleName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field DOB
                                            jQuery("#co_date_of_birth").val(DOB ).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;
                                            //field Gender
                                            //jQuery("#applicant_first").val(FirstName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;

                                            validationResult2.textContent = "Valid number";
                                            validationResult2.style.color =
                                            "green"; // Mensaje de éxito en verde



                                        }

                                    }


                                })
                                .catch(error => {
                                    console.log(error);
                                    document.getElementById("validation-result2")
                                        .textContent = "Error en la validación";
                                    console.error("Error:", error);
                                });
                        }, doneTypingInterval2);
                    }
                });
            });
            //////////


        });
    </script>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        /* document.getElementById('applicationrental').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Assuming you have included SweetAlert library script tag

            // Submit the form data via AJAX
            let formData = new FormData(this);



            fetch(this.action, {
                    method: this.method,
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while submitting the form. Please try again later.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        throw new Error('Network response was not ok');
                    } else {

                        Swal.fire({
                            title: 'Success!',
                            text: "Submitted successfully", // Assuming the server returns a message key in the JSON response
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });


                    }
                    return response.json();
                })

            document.getElementById('applicationrental').reset();

        });*/
    });
</script>
