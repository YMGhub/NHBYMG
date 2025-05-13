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

        #GroupFields {
            opacity: 0;
            visibility: hidden;
            display: none;
        }

        .mostrar {

            opacity: 1 !important;
            visibility: visible !important;
            display: block !important
        }

        /*CoApplicant Fields*/
        #DataCoApplicant {
            opacity: 0;
            visibility: hidden;
            display: none;
        }

        .mostrarCoApp {

            opacity: 1 !important;
            visibility: visible !important;
            display: block !important
        }

        /*CoApplicant Fields*/

        .buttonRed {
            background: red !important;
        }

        .hideArea {
            display: none;
        }

        .hideArea2 {
            display: none;
        }

        /* Estilo visual para campos con error */
.campo-error {
    border: 2px solid red;
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

                    @if (!$showSecondForm)
                        <!--formulario send email -->

                        <div class="margin-top-35 margin-bottom-10" style="overflow:hidden !important">
                            <!--div id="contact-message"></div-->
                            @if (Session::has('success'))
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const form = document.getElementById("FormRequestRental");
                                        if (form) {
                                            form.style.display = "none";
                                        }
                                    });
                                </script>
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

                            <form action="{{ route('link-request.send') }}" method="POST" id="FormRequestRental">
                                @csrf
                                <div class="col-md-12">
                                    <div>
                                        <label><b>Enter your email address to start the application process. A verification
                                                link will be sent to your inbox.</b></label>

                                    </div>
                                </div>
                                <!--Email-->
                                <div class="col-md-12">
                                    <div>
                                        <label><b>Email:</b></label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input name="email_field2" type="email" id="email_field2"
                                                    placeholder="Email" required="required" />
                                                <div id="validation-result-email"
                                                    style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <input name="type_form" type="hidden" id="type_form" value="rental" />
                                                <button class="submit button margin-top-10" type="submit">Verify/
                                                    Submit</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!----------->
                                <!-- campos del primer formulario -->

                            </form>
                        </div>
                    @endif
                    <!-------------------------->


                    @if ($showSecondForm)

                        <div class="MainGroup">

                            <h4 class="text-center headline margin-top-35 margin-bottom-35">
                                APPLICATION FOR RENTAL UNIT/ LOT <br>
                                USE BLOCK LETTERS</h4>

                            <p class="text-center headline margin-top-35 margin-bottom-35">
                                Please complete this form in full using BLOCK LETTERS. Incomplete forms will not be
                                processed.
                                Applicants must upload your most recent Pay Slips, a recent (less than 1 month old) Job
                                Letter, a
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


                                <script>
                                    localStorage.clear(); // O elimina claves específicas
                                </script>

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



                            <form method="post" enctype="multipart/form-data"
                                action="{{ route('application-for-rental.apply') }}" name="applicationrental"
                                id="applicationrental" autocomplete="on">
                                @csrf

                                <div class="row">

                                    <!--Client ID-->
                                    <input name="client_id" type="hidden" id="client_id" value="" required="required" readonly />
                                    <!--Client ID-->


                                    <!--Email-->
                                    <div class="col-md-12">
                                        <div>
                                            <label><b>Email:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="email_field" type="email" id="email_field"
                                                        placeholder="Email" value="{{ $email ?? '' }}" required="required"
                                                        readonly />
                                                    <div id="validation-result-email"
                                                        style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                    </div>
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
                                                        <input maxlength="10" pattern="\d{10}"
                                                            name="national_registration_number" type="text"
                                                            id="national_registration_number"
                                                            placeholder="National Registration Number"
                                                            required="required" />
                                                        <div id="mensaje"></div>
                                                        <div id="validation-result"
                                                            style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!---NATIONAL REGISTRATION NUMBER--->


                                    <div class="col-md-12 hideArea">
                                        <div>
                                            <label><b>APPLICANT:</b></label>
                                            <div class="row">
                                                <div class="col-md-4">



                                                    <input name="applicant_surname" type="text" id="applicant_surname"
                                                        placeholder="Surname" required="required" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="applicant_first" type="text" id="applicant_first"
                                                        placeholder="First" required="required" />
                                                </div>
                                                <div class="col-md-4">
                                                    <input name="applicant_middle" type="text" id="applicant_middle"
                                                        placeholder="Middle" required="required" />
                                                </div>
                                                <div class="col-md-3 hide">
                                                    <input name="maiden_name" type="text" id="maiden_name"
                                                        placeholder="Maiden Name" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--date Birth Appplicant -->
                                    <div class="col-md-12 hideArea">
                                        <div class="row">
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
                                                <div>
                                                    <label><b>Gender:</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="applicant_gender" type="text"
                                                                id="applicant_gender" required  />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="MessageInformation" style="display: none">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <p
                                                        style="color:red;margin: 0;font-size: 12px;line-height: 17px;margin-top: -14px;margin-bottom: 14px;">
                                                        These fields cannot be edited. If this information is incorrect,
                                                        please contact NHC.<br>
                                                        Phone: 1-246-536-5300 Email: NHC.CustomerService@barbados.gov.bb</p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!--Creation button Continnue -->
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <div style="width: 100%;text-align:center;margin-bottom:10px">
                                                        <button class="button text-center" id="ButtonNext"
                                                            style="margin: 0 auto;display: none;">Continue</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Creation button Continnue -->


                                    <div id="GroupFields">
                                        <!--TAMIS-->
                                        <div class="col-md-12">
                                            <div>
                                                <label><b>Tamis Number</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="tamis_number" type="text" maxlength="13"
                                                            id="tamis_number" placeholder="" required />
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
                                                        <input name="applicant_address" type="text"
                                                            id="applicant_address" placeholder="Address" required />
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
                                                        <input name="applicant_address2" type="text"
                                                            id="applicant_address2" placeholder="Address" required />
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
                                                                <select id="applicant_parish" name="applicant_parish"
                                                                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" required>
                                                                    <option value="" selected disabled>Select a
                                                                        Parish</option>
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
                                                    <input type="tel" id="phone_home" name="phone_home"
                                                        placeholder="Home" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="tel" id="phone_work" name="phone_work"
                                                        placeholder="Work" required >
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="tel" id="phone_cell" name="phone_cell"
                                                        placeholder="Cell"  required >
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
                                                        <div
                                                            style="display: flex;width: 100%;justify-content: space-between;">

                                                            <div style="width:20%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="marital_status" id="Single"
                                                                    value="Single" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label" for="Single">Single</label>
                                                            </div>
                                                            <div style="width:20%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="marital_status" id="Married"
                                                                    value="Married" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Married">Married</label>
                                                            </div>
                                                            <div style="width:20%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="marital_status" id="Widowed"
                                                                    value="Widowed" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Widowed">Widowed</label>
                                                            </div>
                                                            <div style="width:20%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="marital_status" id="Divorced"
                                                                    value="Divorced" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Divorced">Divorced</label>
                                                            </div>
                                                            <div style="width:20%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="marital_status" id="Separated"
                                                                    value="Separated" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Separated">Separated</label>
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

                                                                    <select name="citizenship_field"
                                                                        id="citizenship_field" required>
                                                                        <option value="">Select a country</option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda
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
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
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
                                                                        <option value="Saint Barthelemy">Saint Barthelemy
                                                                        </option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis
                                                                        </option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Martin">Saint Martin</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent
                                                                            and
                                                                            the Grenadines</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago
                                                                        </option>
                                                                        <option value="Turks and Caicos Islands">Turks and
                                                                            Caicos
                                                                            Islands
                                                                        </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Virgin Islands, British">Virgin
                                                                            Islands, British
                                                                        </option>
                                                                        <option value="Virgin Islands, U.S.">Virgin
                                                                            Islands, U.S.
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

                                                                    <select name="country_of_residence"
                                                                        id="country_of_residence" required>
                                                                        <option value="">Select a country</option>
                                                                        <option value="Afghanistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Antigua and Barbuda">Antigua and
                                                                            Barbuda
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
                                                                        <option value="Cayman Islands">Cayman Islands
                                                                        </option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican
                                                                            Republic</option>
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
                                                                        <option value="Saint Barthelemy">Saint Barthelemy
                                                                        </option>
                                                                        <option value="Saint Kitts and Nevis">Saint Kitts
                                                                            and Nevis
                                                                        </option>
                                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                                        <option value="Saint Martin">Saint Martin</option>
                                                                        <option value="Saint Vincent and the Grenadines">
                                                                            Saint Vincent
                                                                            and
                                                                            the Grenadines</option>
                                                                        <option value="Trinidad and Tobago">Trinidad and
                                                                            Tobago
                                                                        </option>
                                                                        <option value="Turks and Caicos Islands">Turks and
                                                                            Caicos
                                                                            Islands
                                                                        </option>
                                                                        <option value="United Kingdom">United Kingdom
                                                                        </option>
                                                                        <option value="United States">United States
                                                                        </option>
                                                                        <option value="Uruguay">Uruguay</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Virgin Islands, British">Virgin
                                                                            Islands, British
                                                                        </option>
                                                                        <option value="Virgin Islands, U.S.">Virgin
                                                                            Islands, U.S.
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
                                                                    <input name="employer_field" type="text"
                                                                        id="employer_field" placeholder="" required />
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
                                                                        id="occupation_field" placeholder="" required />
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


                                                                    <select name="period_of_employment"
                                                                        id="period_of_employment">
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
                                                                        placeholder="" inputmode="decimal" required>

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
                                                        <div
                                                            style="display: flex;width: 100%;justify-content: space-between;">

                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="pay_period" id="Weekly"
                                                                    value="Weekly" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label" for="Weekly">Weekly</label>
                                                            </div>
                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="pay_period" id="Bi-Monthly"
                                                                    value="Bi-Monthly" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Bi-Monthly">Bi-Monthly</label>
                                                            </div>
                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="pay_period" id="Monthly"
                                                                    value="Monthly" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Monthly">Monthly</label>
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
                                                        <div
                                                            style="display: flex;width: 100%;justify-content: space-between;">

                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="employment_status"
                                                                    id="Government" value="Government" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Government">Government</label>
                                                            </div>
                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="employment_status"
                                                                    id="Private" value="Private" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label"
                                                                    for="Private">Private</label>
                                                            </div>
                                                            <div style="width:40%;display:flex;align-items: center;"
                                                                class="form-check form-check-inline">
                                                                <input style="margin-bottom:0px" class="form-check-input"
                                                                    type="radio" name="employment_status"
                                                                    id="Self" value="Self" required>
                                                                <label
                                                                    style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                    class="form-check-label" for="Self">Self </label>
                                                            </div>



                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!----------->






                                        <!---DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?--->
                                        <div class="col-md-12 hideArea">
                                            <div>
                                                <label><b>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?</b></label>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-primary radio-inline">
                                                                <input class="own_landorproperty" type="radio"
                                                                    value="yes" name="own_landorproperty" required>Yes
                                                            </label>
                                                            <label class="btn btn-primary radio-inline">
                                                                <input class="own_landorproperty" type="radio"
                                                                    value="no" name="own_landorproperty" required> No
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
                                        <div class="col-md-12 hideArea">
                                            <div>
                                                <label><b>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL
                                                        INSTITUTION</b></label>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-primary ">
                                                                <input class="financial_institution" type="radio"
                                                                    value="yes" name="financial_institution" required>Yes
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input class="financial_institution" type="radio"
                                                                    value="no" name="financial_institution" required>
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


                                        <!---IF YES, OCCUPIED A UNIT--->
                                        <div class="col-md-12 hideArea ">
                                            <div>
                                                <label><b>HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?</b></label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-primary ">
                                                                <input class="occuppiedUnit" type="radio"
                                                                    value="yes" name="occuppiedUnit" required>Yes
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input class="occuppiedUnit" type="radio"
                                                                    value="no" name="occuppiedUnit" required>
                                                                No
                                                            </label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---IF YES, OCCUPIED A UNIT--->


                                        <!---HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?--->
                                        <div class="col-md-12 occuppiedUnitArea" style="display: none">
                                            <div>
                                                <label><b>IF YES, PLEASE GIVE DETAILS YOU EVER OCCUPIED A UNIT</b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupedaunit" type="text" id="occupedaunit"
                                                            placeholder="Have you ever occupied a unit? If Yes, Where?"
                                                             />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?--->




                                        <!---INFORMATION ON INTENDED OCCUPANTS --->
                                        <div class="col-md-12 hideArea">
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
                                                                        placeholder="Enter Name" class="form-control" />
                                                                </td>
                                                                <td><input type="text"
                                                                        name="addmore[0][relation_occupant]"
                                                                        placeholder="Enter Relation"
                                                                        class="form-control" required />
                                                                </td>
                                                                <td><input type="number" name="addmore[0][age_accupant]"
                                                                        placeholder="Enter Age"
                                                                        class="form-control ageField" required /></td>
                                                                <td><input type="text"
                                                                        name="addmore[0][occupation_school_occupant]"
                                                                        placeholder="Enter Occupation / School"
                                                                        class="form-control" required /></td>
                                                                <td><input type="text"
                                                                        name="addmore[0][income_occupant]"
                                                                        placeholder="Enter Income"
                                                                        class="form-control incomeField" required />
                                                                </td>
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
                                        <div class="col-md-12 hideArea">

                                            <div class="ContainerDocuments">
                                                <label><b>DOCUMENTS:</b></label>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><b>Pay Slips:</b></label>
                                                        <input style="margin-bottom: 0px;" type="file" id="payslips"
                                                            name="payslips[]" multiple required />
                                                            <p>You can only upload a maximum of 2 files.</p>
                                                        <p id="ErrorPayslips" style="color: red;margin-bottom: 25px;"></p>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><b>ID Card (Back & Front):</b></label>
                                                        <input style="margin-bottom: 0px;" type="file" id="id_card"
                                                            name="id_card" accept=".png,.jpg, .jpeg" required />
                                                            <p>Only PNG, JPG, or JPEG files are allowed.</p>
                                                        <p id="ErrorIdCard " style="color: red;margin-bottom: 25px;"></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><b>Job Letter:</b></label>
                                                        <input style="margin-bottom: 0px;" type="file" id="job_letter"
                                                            name="job_letter" accept=".pdf" required />
                                                            <p>Only PDF file are allowed.</p>
                                                        <p id="ErrorJobLetter " style="color: red;margin-bottom: 25px;">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><b>Passport Size Photo:</b></label>
                                                        <input style="margin-bottom: 0px;" type="file" id="passport"
                                                            name="passport" accept=".png, .jpg, .jpeg" required />
                                                            <p>Only PNG, JPG, or JPEG files are allowed.</p>
                                                        <p id="ErrorPassport " style="color: red;margin-bottom: 25px;">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!---DOCUMENTS --->

                                        <!--NUEVA POSICION DE COAPPLICANT-->
                                        <!--Creation button Continnue -->
                                        <div class="col-md-12 hideArea">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <div style="width: 100%;text-align:center">
                                                            <button class="button text-center" id="ButtonAddCoApp"
                                                                style="margin: 0 auto;;">Add Co-Appliant</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Creation button Continnue -->
                                        <!--GROUP COAPPLICANT-->
                                        <div id="DataCoApplicant">

                                            <!---NATIONAL REGISTRATION NUMBE Co applicant--->
                                            <div class="col-md-12">
                                                <div>
                                                    <label><b>NATIONAL REGISTRATION NUMBER</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="co_national_registration_number" type="text"
                                                                id="co_national_registration_number" maxlength="10"
                                                                placeholder="National Registration Number"
                                                                />
                                                                <input type="hidden" value="" name="co_client_id"  id="co_client_id" />
                                                            <div id="validation-result2"
                                                                style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---NATIONAL REGISTRATION NUMBER CoApplicant--->

                                             <!---EMAIL Co applicant--->
                                             <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>EMAIL</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="co_email_field" type="email"
                                                                id="co_email_field"
                                                                placeholder="Email"
                                                                />
                                                                <input type="hidden" value="" name="co_client_id"  id="co_client_id" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---EMAIL CoApplicant--->


                                            <!--Coapplicant-->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>CO-APPLICANT:</b></label>
                                                    <div class="row">

                                                        <div class="col-md-3">


                                                            <input name="co_applicant_surname" type="text"
                                                                id="co_applicant_surname" placeholder="SurName" />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input name="co_applicant_name" type="text"
                                                                id="co_applicant_name" placeholder="Name"
                                                              />
                                                        </div>

                                                        <div class="col-md-3">
                                                            <input name="co_applicant_middle" type="text"
                                                                id="co_applicant_middle" placeholder="Middle"
                                                                />
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input name="co_maiden_name" type="text"
                                                                id="co_maiden_name" placeholder="Maiden Name"
                                                                />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--------------->


                                            <!-- date birth CoApplicant-->
                                            <div class="col-md-12 hideArea2">
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
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Tamis Number</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="co_tamis_number" type="text" maxlength="13"
                                                                id="co_tamis_number" placeholder=""
                                                                 />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                            <!---ADDRESS--->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Address</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="co_applicant_address" type="text"
                                                                id="co_applicant_address" placeholder="Address" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!---ADDRESS--->

                                            <!--Address 2-->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Address 2</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input name="co_applicant_address2" type="text"
                                                                id="co_applicant_address2" placeholder="Address"
                                                               />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                            <!----------->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12" style="    margin-bottom: 20px;">
                                                            <label><b>PARISH: </b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <select id="co_applicant_parish"
                                                                        name="co_applicant_parish"
                                                                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                                                                        <option value="" selected disabled>Select a
                                                                            Parish</option>
                                                                        <option value="Christ Church">Christ Church
                                                                        </option>
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
                                            <div class="col-md-12 hideArea2">
                                                <label><b>Telephone Number:</b></label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="tel" id="co_phone_home" name="co_phone_home"
                                                        placeholder="Home" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="tel" id="co_phone_work" name="co_phone_work"
                                                        placeholder="Work" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="tel" id="co_phone_cell" name="co_phone_cell"
                                                         placeholder="Cell" autocomplete="off">
                                                    </div>

                                                </div>
                                            </div>
                                            <!----------->

                                            <!---EMAIL CO APPLICANT--->


                                            <!--Marital Status / Co applicant-->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Marital Status:</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div
                                                                style="display: flex;width: 100%;justify-content: space-between;">

                                                                <div style="width:20%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_marital_status" id="Single"
                                                                        value="Single">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Single">Single</label>
                                                                </div>
                                                                <div style="width:20%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_marital_status" id="Married"
                                                                        value="Married">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Married">Married</label>
                                                                </div>
                                                                <div style="width:20%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_marital_status" id="Widowed"
                                                                        value="Widowed">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Widowed">Widowed</label>
                                                                </div>
                                                                <div style="width:20%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_marital_status" id="Divorced"
                                                                        value="Divorced">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Divorced">Divorced</label>
                                                                </div>
                                                                <div style="width:20%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_marital_status" id="Separated"
                                                                        value="Separated">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Separated">Separated</label>
                                                                </div>


                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                            <!---CITIZENSHIP - Country of Residence / co applcianant--->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div>
                                                                <label><b>CITIZENSHIP:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">

                                                                        <select name="co_citizenship_field"
                                                                            id="co_citizenship_field">
                                                                            <option value="">Select a country
                                                                            </option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua and
                                                                                Barbuda
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
                                                                            <option value="Cayman Islands">Cayman Islands
                                                                            </option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican
                                                                                Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="El Salvador">El Salvador
                                                                            </option>
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
                                                                            <option value="Netherlands">Netherlands
                                                                            </option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Puerto Rico">Puerto Rico
                                                                            </option>
                                                                            <option value="Saint Barthelemy">Saint
                                                                                Barthelemy
                                                                            </option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts
                                                                                and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint Vincent
                                                                                and
                                                                                the Grenadines</option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and
                                                                                Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and
                                                                                Caicos
                                                                                Islands
                                                                            </option>
                                                                            <option value="United Kingdom">United Kingdom
                                                                            </option>
                                                                            <option value="United States">United States
                                                                            </option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Virgin Islands, British">Virgin
                                                                                Islands, British
                                                                            </option>
                                                                            <option value="Virgin Islands, U.S.">Virgin
                                                                                Islands, U.S.
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


                                                                        <select name="co_country_of_residence"
                                                                            id="co_citizenship_field">
                                                                            <option value="">Select a country
                                                                            </option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua and
                                                                                Barbuda
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
                                                                            <option value="Cayman Islands">Cayman Islands
                                                                            </option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican
                                                                                Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="El Salvador">El Salvador
                                                                            </option>
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
                                                                            <option value="Netherlands">Netherlands
                                                                            </option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Puerto Rico">Puerto Rico
                                                                            </option>
                                                                            <option value="Saint Barthelemy">Saint
                                                                                Barthelemy
                                                                            </option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts
                                                                                and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint Vincent
                                                                                and
                                                                                the Grenadines</option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and
                                                                                Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and
                                                                                Caicos
                                                                                Islands
                                                                            </option>
                                                                            <option value="United Kingdom">United Kingdom
                                                                            </option>
                                                                            <option value="United States">United States
                                                                            </option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Virgin Islands, British">Virgin
                                                                                Islands, British
                                                                            </option>
                                                                            <option value="Virgin Islands, U.S.">Virgin
                                                                                Islands, U.S.
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
                                            <div class="col-md-12 hideArea2">
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
                                            <div class="col-md-12 hideArea2">
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
                                                                            <option value="7-10 years">7 – 10 years
                                                                            </option>
                                                                            <option value="> 10 years "> > 10 years
                                                                            </option>
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
                                                                        <input name="co_salary" type="text"
                                                                            id="co_salary" placeholder="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!---Period of Employment  and Salary Co Applicant--->

                                            <!--Pay Period CO-->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Pay Period:</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div
                                                                style="display: flex;width: 100%;justify-content: space-between;">

                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_pay_period" id="Weekly"
                                                                        value="Weekly">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Weekly">Weekly</label>
                                                                </div>
                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_pay_period" id="Bi-Monthly"
                                                                        value="Bi-Monthly">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Bi-Monthly">Bi-Monthly</label>
                                                                </div>
                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_pay_period" id="Monthly"
                                                                        value="Monthly">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Monthly">Monthly</label>
                                                                </div>



                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                            <!--Employment status CO-->
                                            <div class="col-md-12 hideArea2">
                                                <div>
                                                    <label><b>Employment Status:</b></label>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div
                                                                style="display: flex;width: 100%;justify-content: space-between;">

                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_employment_status" id="Government"
                                                                        value="Government">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Government">Government</label>
                                                                </div>
                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_employment_status" id="Private"
                                                                        value="Private">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label"
                                                                        for="Private">Private</label>
                                                                </div>
                                                                <div style="width:40%;display:flex;align-items: center;"
                                                                    class="form-check form-check-inline">
                                                                    <input style="margin-bottom:0px"
                                                                        class="form-check-input" type="radio"
                                                                        name="co_employment_status" id="Self"
                                                                        value="Self">
                                                                    <label
                                                                        style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                        class="form-check-label" for="Self">Self
                                                                    </label>
                                                                </div>



                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                        </div>
                                        <!--CLOSE GROUP DataCoApplicant COAPPLICANT-->
                                        <!--NUEVA POSICION DE COAPPLICANT-->

                                        <!--ACKNOWLEDGED THIS--->
                                        <div class="col-md-12 hideArea">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="display:flex;    align-items: center;">
                                                            <input style="margin-bottom: 0;" type="checkbox"
                                                                id="confirm_info" required>
                                                            <label style="    margin-bottom: 0;margin-left: 10px;"
                                                                for="confirm_info">I confirm that the information provided
                                                                is
                                                                accurate.</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 hideArea">
                                            <input type="submit" class="submit button" id="submit"
                                                value="Submit" />
                                        </div>
                                    </div>
                                    <!--END GROUPED FIELDS-->

                                </div>


                            </form>

                        </div>
                    @endif
                    <!--close div MainGroup group allFields without hash -->


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

            //prevent submit
const form = document.getElementById('applicationrental');
                /*const form = document.getElementById('applicationrental');

            form.addEventListener('submit', function (e) {
                const campos = form.querySelectorAll('[required]');
                let hayErrores = false;
                const radiosAgrupados = {};

                campos.forEach(campo => {
                    campo.classList.remove('campo-error');

                    const tag = campo.tagName.toLowerCase();
                    const tipo = campo.type;

                    // Agrupar radios
                    if (tipo === 'radio') {
                        if (!radiosAgrupados[campo.name]) {
                            radiosAgrupados[campo.name] = form.querySelectorAll(`input[type="radio"][name="${campo.name}"]`);
                        }
                        return;
                    }

                    // Validar campos de tipo select
                    if (tag === 'select') {
                        if (!campo.value.trim()) {
                            hayErrores = true;
                            campo.classList.add('campo-error');
                        }
                    }

                    // Validar campos de tipo file
                    else if (tipo === 'file') {
                        if (campo.files.length === 0) {
                            hayErrores = true;
                            campo.classList.add('campo-error');
                        }
                    }

                    // Validar input text, email, tel, number
                    else if (tag === 'input' || tag === 'textarea') {
                        const tiposPermitidos = ['text', 'email', 'tel', 'number'];
                        if (tiposPermitidos.includes(tipo) && !campo.value.trim()) {
                            hayErrores = true;
                            campo.classList.add('campo-error');
                        }
                    }
                });

                // Validar grupos de radio
                for (const nombre in radiosAgrupados) {
                    const grupo = radiosAgrupados[nombre];
                    const algunoSeleccionado = Array.from(grupo).some(radio => radio.checked);
                    grupo.forEach(r => r.classList.remove('radio-error'));

                    if (!algunoSeleccionado) {
                        hayErrores = true;
                        grupo.forEach(r => r.classList.add('radio-error'));
                    }
                }

                if (hayErrores) {
                    e.preventDefault();
                    alert('Por favor, completa todos los campos requeridos.');
                }
            });

            // Eliminar errores al corregir
            form.querySelectorAll('input, textarea, select').forEach(campo => {
                campo.addEventListener('input', () => {
                    campo.classList.remove('campo-error');
                });
                campo.addEventListener('change', () => {
                    campo.classList.remove('campo-error');
                    if (campo.type === 'radio') {
                        const radios = form.querySelectorAll(`input[type="radio"][name="${campo.name}"]`);
                        radios.forEach(r => r.classList.remove('radio-error'));
                    }
                });
            });*/
            //end prevent submit

            //LocalStora para guardar el status actual del form

            const fieldsToPersistByName = [
                'email_field',
                'national_registration_number',
                'applicant_surname',
                'applicant_first',
                'applicant_middle',
                'maiden_name',
                'date_of_birth',
                'applicant_gender',
                'tamis_number',
                'applicant_address',
                'applicant_address2',
                'co_applicant_parish',
                'phone_home',
                'phone_work',
                'phone_cell',
                'marital_status',
                'citizenship_field',
                'country_of_residence',
                'employer_field',
                'occupation_field',
                'period_of_employment',
                'salary',
                'state_address',
                'give_details',
                'occupedaunit',
                'addmore[0][name_occupant]',
                'addmore[0][relation_occupant]',
                'addmore[0][age_accupant]',
                'addmore[0][occupation_school_occupant]',
                'addmore[0][income_occupant]',
                 'co_national_registration_number',
                'co_applicant_surname',
                'co_applicant_name',
                'co_applicant_middle',
                'co_maiden_name',
                'co_date_of_birth',
                'co_tamis_number',
                'co_applicant_address',
                'co_applicant_address2',
                'co_applicant_parish',
                'co_phone_home',
                'co_phone_work',
                'co_phone_cell',
                'co_citizenship_field',
                'co_country_of_residence',
                'co_employer_field',
                'co_occupation_field',
                'co_period_of_employment',
                'co_salary',
                'co_pay_period',



            ];

            // Guardar valor en localStorage cuando cambia
            function saveByName(name) {
                const elements = document.getElementsByName(name);
                if (elements.length > 0) {
                    const input = elements[0]; // asumimos que solo hay uno por name

                    if (input.type !== 'file') {
                        input.addEventListener('input', () => {
                            localStorage.setItem(name, input.value);
                        });
                    }
                }
            }

            // Al cargar: recuperar valores y aplicar listeners

            fieldsToPersistByName.forEach(name => {
                const elements = document.getElementsByName(name);
                if (elements.length > 0) {
                    const input = elements[0];
                    const savedValue = localStorage.getItem(name);
                    if (savedValue !== null) {
                        input.value = savedValue;
                    }
                    saveByName(name);
                }
            });

            //para radio buton

            // 👇 Lista de radios por name
            const radioGroups = [
                'marital_status',
                'pay_period',
                'employment_status',
                'financial_institution',
                'own_landorproperty',
                'occuppiedUnit',
                'co_marital_status',
                'co_pay_period',
                'co_employment_status'
            ];

            radioGroups.forEach(name => {
            const radios = Array.from(document.getElementsByName(name));
            const saved = localStorage.getItem(name);

            radios.forEach(radio => {
            // Cargar valor guardado
            if (saved && radio.value === saved) {
                radio.checked = true;
            }

            // Guardar nuevo valor al cambiar
            radio.addEventListener('change', () => {
                if (radio.checked) {
                localStorage.setItem(name, radio.value);
                console.log(`Guardado en localStorage: ${name} = ${radio.value}`);
                }
            });
            });
        });


            /*end LOCALSTORAGE*/


            //NRN - sin consultar el api
            document.getElementById('national_registration_number').addEventListener('input', function() {
                const input = this.value;
                const mensaje = document.getElementById('validation-result');

                if (input.length >= 2) {
                    const anio = parseInt(input.slice(0, 2), 10);
                    const currentYear = new Date().getFullYear();
                    const fullAnio = anio <= currentYear % 100 ? 2000 + anio : 1900 + anio;

                    const nacimiento = new Date(fullAnio, 0, 1); // Usamos 1 de enero como día base
                    const hoy = new Date();
                    const edad = hoy.getFullYear() - nacimiento.getFullYear();
                    const esMayorEdad = (edad > 18) || (edad === 18 && hoy >= new Date(hoy.getFullYear(), 0,
                        1));

                    if (!esMayorEdad) {
                        mensaje.textContent = 'You are NOT of legal age.';
                        mensaje.style.color = "red"; // Loading color


                        jQuery(".hideArea").hide();
                        jQuery("#MessageInformation").hide();
                        jQuery("#ButtonNext").hide();

                        return;
                    } else {
                        mensaje.textContent = '';
                    }
                } else {
                    mensaje.textContent = '';
                }

                if (input.length >= 4) {
                    const mes = parseInt(input.slice(2, 4), 10);
                    if (mes < 1 || mes > 12) {
                        mensaje.textContent = 'Invalid month (01-12).';
                        mensaje.style.color = "red"; // Loading color

                        jQuery(".hideArea").hide();
                        jQuery("#MessageInformation").hide();
                        jQuery("#ButtonNext").hide();

                        return;
                    }
                }

                if (input.length >= 6) {
                    const anio = parseInt(input.slice(0, 2), 10);
                    const mes = parseInt(input.slice(2, 4), 10);
                    const dia = parseInt(input.slice(4, 6), 10);
                    const currentYear = new Date().getFullYear();
                    const fullAnio = anio <= currentYear % 100 ? 2000 + anio : 1900 + anio;
                    const diasMes = new Date(fullAnio, mes, 0).getDate();

                    if (dia < 1 || dia > diasMes) {
                        mensaje.textContent = `Invalid day for the month ${mes}.`;
                        mensaje.style.color = "red"; // Loading color

                        jQuery(".hideArea").hide();
                        jQuery("#MessageInformation").hide();
                        jQuery("#ButtonNext").hide();
                        return;
                    }
                }

                //limpia los campos
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

                jQuery("#date_of_birth").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#applicant_gender").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });



                jQuery("#applicant_surname").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });
                /******************/

                let number = this.value;

                if (input.length === 10) {
                    mensaje.textContent = 'Full valid code.';
                    mensaje.style.color = "green"; // Loading color

                    //aqui hara la consulta al api

                    fetch("{{ route('validate.number') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                number_national: number,
                                type_form: "Rental",
                                co_app: 0
                            })
                        })
                        .then(response => response.json())
                        .then(data => {

                            if (data.errorMessage) {
                                mensaje.textContent = data
                                    .errorMessage;
                                mensaje.style.color =
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

                                    mensaje.textContent =
                                        "Invalid Number";
                                    mensaje.style.color =
                                        "red"; // Mensaje de error en rojo


                                    jQuery(".hideArea").hide();
                                    jQuery("#MessageInformation").hide();
                                    jQuery("#ButtonNext").hide();


                                } else {
                                    jQuery(".hideArea").show();
                                    jQuery("#MessageInformation").show();
                                    jQuery("#ButtonNext").show();
                                    //bloquea los campos nombre y fecha de nac para que la persona no pueda escribri su informacion
                                    //FirstName,MiddleName,LastName,DOB FechaNac
                                    var ClientID = parsedData.data[0]
                                        .ClientID;
                                    var FirstName = parsedData.data[0]
                                        .FirstName;
                                    var LastName = parsedData.data[0].LastName;
                                    var MiddleName = parsedData.data[0]
                                        .MiddleName;
                                    var DOB = parsedData.data[0].DOB;
                                    var Gender = parsedData.data[0].Gender;
                                    var Surname = parsedData.data[0].Salutation;

                                    jQuery("#client_id").val(ClientID);

                                    //field First Name
                                    jQuery("#applicant_first").val(FirstName);
                                    jQuery("#applicant_first").css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    //field LastName
                                    jQuery("#applicant_middle").val(LastName)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                    //field MiddleName
                                    jQuery("#maiden_name").val(MiddleName).css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    //field DOB
                                    jQuery("#date_of_birth").val(DOB).css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    //field Gender
                                    jQuery("#applicant_gender").val(Gender)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;

                                    //field Saludation
                                    jQuery("#applicant_surname").val(Surname)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;

                                    mensaje.textContent =
                                        "Valid number";
                                    mensaje.style.color =
                                        "green"; // Mensaje de éxito en verde



                                }

                            } /*end else*/


                        })
                        .catch(error => {
                            document.getElementById("validation-result")
                                .textContent = "Validation error";
                            console.error("Error:", error);
                        });

                    //termina el consumo del api



                } /*finaliza el input length*/
            });
            /////////////////////


            /*** NRN CoApplicant**/
            document.getElementById('co_national_registration_number').addEventListener('input', function() {
                const input = this.value;
                const mensaje = document.getElementById('validation-result2');

                if (input.length >= 2) {
                    const anio = parseInt(input.slice(0, 2), 10);
                    const currentYear = new Date().getFullYear();
                    const fullAnio = anio <= currentYear % 100 ? 2000 + anio : 1900 + anio;

                    const nacimiento = new Date(fullAnio, 0, 1); // Usamos 1 de enero como día base
                    const hoy = new Date();
                    const edad = hoy.getFullYear() - nacimiento.getFullYear();
                    const esMayorEdad = (edad > 18) || (edad === 18 && hoy >= new Date(hoy.getFullYear(), 0,
                        1));

                    if (!esMayorEdad) {
                        mensaje.textContent = 'You are NOT of legal age.';
                        mensaje.style.color = "red"; // Loading color


                        jQuery(".hideArea2").hide();
                        return;
                    } else {
                        mensaje.textContent = '';
                    }
                } else {
                    mensaje.textContent = '';
                }

                if (input.length >= 4) {
                    const mes = parseInt(input.slice(2, 4), 10);
                    if (mes < 1 || mes > 12) {
                        mensaje.textContent = 'Invalid month (01-12).';
                        mensaje.style.color = "red"; // Loading color

                        jQuery(".hideArea2").hide();


                        return;
                    }
                }

                if (input.length >= 6) {
                    const anio = parseInt(input.slice(0, 2), 10);
                    const mes = parseInt(input.slice(2, 4), 10);
                    const dia = parseInt(input.slice(4, 6), 10);
                    const currentYear = new Date().getFullYear();
                    const fullAnio = anio <= currentYear % 100 ? 2000 + anio : 1900 + anio;
                    const diasMes = new Date(fullAnio, mes, 0).getDate();

                    if (dia < 1 || dia > diasMes) {
                        mensaje.textContent = `Invalid day for the month ${mes}.`;
                        mensaje.style.color = "red"; // Loading color

                        jQuery(".hideArea2").hide();

                        return;
                    }
                }

                //limpia los campos
                //Limpiar campos cada vez que se vuelve a escribir
                //Limpiar campos cada vez que se vuelve a escribir
                jQuery("#co_applicant_surname").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });
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

                //applicant
                jQuery("#co_date_of_birth").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                /******************/

                let number = this.value;

                if (input.length === 10) {
                    mensaje.textContent = 'Full valid code.';
                    mensaje.style.color = "green"; // Loading color

                    //aqui hara la consulta al api

                    fetch("{{ route('validate.number') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                number_national: number,
                                type_form: "Rental",
                                co_app: 0
                            })
                        })
                        .then(response => response.json())
                        .then(data => {

                            if (data.errorMessage) {
                                mensaje.textContent = data
                                    .errorMessage;
                                mensaje.style.color =
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

                                    mensaje.textContent =
                                        "Invalid Number";
                                    mensaje.style.color =
                                        "red"; // Mensaje de error en rojo


                                    jQuery(".hideArea2").hide();
                                    jQuery("#MessageInformation").hide();



                                } else {
                                    jQuery(".hideArea2").show();
                                    jQuery("#MessageInformation").show();
                                    //bloquea los campos nombre y fecha de nac para que la persona no pueda escribri su informacion
                                    //FirstName,MiddleName,LastName,DOB FechaNac
                                    var ClientID = parsedData.data[0]
                                        .ClientID;
                                    var FirstName = parsedData.data[0]
                                        .FirstName;
                                    var LastName = parsedData.data[0].LastName;
                                    var MiddleName = parsedData.data[0]
                                        .MiddleName;
                                    var DOB = parsedData.data[0].DOB;
                                    var Gender = parsedData.data[0].Gender;
                                    var Surname = parsedData.data[0].Salutation;



                                    //client ID
                                    jQuery("#co_client_id").val(ClientID)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;


                                    //field First Name
                                    jQuery("#co_applicant_surname").val(Surname);
                                    jQuery("#co_applicant_surname").css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    jQuery("#co_applicant_name").val(FirstName);
                                    jQuery("#co_applicant_name").css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    //field LastName
                                    jQuery("#co_applicant_middle").val(LastName)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                    //field MiddleName
                                    jQuery("#co_maiden_name").val(MiddleName)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                    //field DOB
                                    jQuery("#co_date_of_birth").val(DOB).css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;

                                    //applicant
                                    jQuery("#co_date_of_birth").val(DOB).css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });


                                    mensaje.textContent =
                                        "Valid number";
                                    mensaje.style.color =
                                        "green"; // Mensaje de éxito en verde



                                }

                            } /*end else*/


                        })
                        .catch(error => {
                            document.getElementById("validation-result")
                                .textContent = "Validation error";
                            console.error("Error:", error);
                        });

                    //termina el consumo del api



                } /*finaliza el input length*/
            });

            /*********************/

            //Age field

            document.querySelectorAll('.ageField').forEach(function(input) {
                input.addEventListener('input', function(e) {
                    const value = e.target.value;

                    // Si el valor es menor que 0, lo corrige automáticamente a 0
                    if (value !== '' && parseInt(value) < 0) {
                        e.target.value = 0;
                    }
                });
            });

            //Age field

            document.querySelectorAll('.incomeField').forEach(function(input) {
                input.addEventListener('input', function(e) {
                    const value = e.target.value;

                    // Si el valor es menor que 0, lo corrige automáticamente a 0
                    if (value !== '' && parseInt(value) < 0) {
                        e.target.value = 0;
                    }
                });
            });



            //salary

            const salaryInput = document.getElementById('salary');

            salaryInput.addEventListener('input', function(e) {
                const input = e.target;

                // Obtener solo números y punto
                let value = input.value.replace(/[^0-9.]/g, '');

                // Separar entero y decimal
                let [intPart, decimalPart] = value.split('.');

                // Formatear parte entera con comas
                if (intPart) {
                    intPart = intPart.replace(/^0+/, ''); // eliminar ceros iniciales
                    intPart = intPart.replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                } else {
                    intPart = '0';
                }

                // Limitar decimales a 2
                if (decimalPart !== undefined) {
                    decimalPart = decimalPart.substring(0, 2);
                    value = `${intPart}.${decimalPart}`;
                } else {
                    value = `${intPart}`;
                }

                input.value = value;
            });



            //phone applicant


            document.getElementById('phone_home').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0, 10);
                let formatted = '';

                if (input.length > 6) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)} - ${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;


                // Validación personalizada
                if (e.target.validity.patternMismatch) {
                    e.target.setCustomValidity("Por favor, ingresa el número en el formato (123) - 456 - 7890.");
                } else {
                    e.target.setCustomValidity("");
                }
            });

            document.getElementById('phone_work').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0,
                    10); // solo números, máx 10 dígitos
                let formatted = '';

                if (input.length > 6) {
                    formatted =
                        `(${input.substring(0, 3)}) - ${input.substring(3, 6)}-${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;
            });

            document.getElementById('phone_cell').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0,
                    10); // solo números, máx 10 dígitos
                let formatted = '';

                if (input.length > 6) {
                    formatted =
                        `(${input.substring(0, 3)}) - ${input.substring(3, 6)}-${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;
            });

            //field coapp phone
            document.getElementById('co_phone_home').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0,
                    10); // solo números, máx 10 dígitos
                let formatted = '';

                if (input.length > 6) {
                    formatted =
                        `(${input.substring(0, 3)}) - ${input.substring(3, 6)}-${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;
            });

            document.getElementById('co_phone_work').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0,
                    10); // solo números, máx 10 dígitos
                let formatted = '';

                if (input.length > 6) {
                    formatted =
                        `(${input.substring(0, 3)}) - ${input.substring(3, 6)}-${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;
            });

            document.getElementById('co_phone_cell').addEventListener('input', function(e) {
                let input = e.target.value.replace(/\D/g, '').substring(0,
                    10); // solo números, máx 10 dígitos
                let formatted = '';

                if (input.length > 6) {
                    formatted =
                        `(${input.substring(0, 3)}) - ${input.substring(3, 6)}-${input.substring(6, 10)}`;
                } else if (input.length > 3) {
                    formatted = `(${input.substring(0, 3)}) - ${input.substring(3, 6)}`;
                } else if (input.length > 0) {
                    formatted = `(${input}`;
                }

                e.target.value = formatted;
            });
            ////////////////////



            //campos appllicant
            document.getElementById('ButtonNext').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('GroupFields').classList.toggle('mostrar');
            });

            //campos Co Appllicant
            document.getElementById('ButtonAddCoApp').addEventListener('click', function(e) {
                e.preventDefault();

                const coAppSection = document.getElementById('DataCoApplicant');
                const button = document.getElementById('ButtonAddCoApp');

                coAppSection.classList.toggle('mostrarCoApp');

                if (coAppSection.classList.contains('mostrarCoApp')) {
                    button.textContent = 'Remove Co-Applicant';
                    button.classList.add('buttonRed');


                    //añade attribute required
                        const camposCo = form.querySelectorAll('[name^="co_"]');

                        camposCo.forEach(campo => {
                        campo.classList.remove('campo-error');


                            campo.setAttribute('required', 'required');
                            if (!campo.value.trim()) {
                                hayErrores = true;
                                campo.classList.add('campo-error');
                            }

                    });



                } else {
                    button.classList.remove('buttonRed');
                    button.textContent = 'Add Co-Applicant';

                       const camposCo = form.querySelectorAll('[name^="co_"]');

                        camposCo.forEach(campo => {

                            campo.removeAttribute('required');
                            campo.value = ''; // Limpiar valor si no hay AddCoapplicant

                        });


                    //remueve los localstorage de los campos de coapplicant
                     const fieldsToRemove = [
                        'co_national_registration_number',
                        'co_email_field',
                        'co_applicant_surname',
                        'co_applicant_name',
                        'co_applicant_middle',
                        'co_maiden_name',
                        'co_date_of_birth',
                        'co_tamis_number',
                        'co_applicant_address',
                        'co_applicant_address2',
                        'co_applicant_parish',
                        'co_phone_home',
                        'co_phone_work',
                        'co_phone_cell',
                        'co_marital_status',
                        'co_citizenship_field',
                        'co_country_of_residence',
                        'co_employer_field',
                        'co_occupation_field',
                        'co_period_of_employment',
                        'co_salary',
                        'co_pay_period',
                        'co_employment_status'
                    ];

                    fieldsToRemove.forEach(name => {
                        // Limpia del localStorage
                        localStorage.removeItem(name);

                        // Limpia los campos del formulario
                        const field = document.querySelector(`[name="${name}"]`);
                        if (field) {
                            if (field.type === 'checkbox' || field.type === 'radio') {
                                field.checked = false;
                            } else {
                                field.value = '';
                            }
                        }
                    });
    /*end localstorage CoApplicant*/

                }
            });

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
                    const stateAddress = document.getElementById('state_address');
                    if (stateAddress) {
                        stateAddress.setAttribute('required', 'required');
                    }
                } else {
                    $boxStateAddress.hide(); // Ocultar el div

                     const stateAddress = document.getElementById('state_address');
                    if (stateAddress) {
                          stateAddress.removeAttribute('required');
                    }
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
                     const give_details = document.getElementById('give_details');
                    if (give_details) {
                        give_details.setAttribute('required', 'required');
                    }
                } else {
                    $giveDetailBox.hide(); // Ocultar el div

                   const give_details = document.getElementById('give_details');
                    if (give_details) {
                        give_details.removeAttribute('required', 'required');
                    }
                }
            });


            /*OCCUPIED A UNIT*/
            const $occupiedUnit = $(".occuppiedUnit");
            const $occuppiedUnitArea = $(".occuppiedUnitArea"); // Asegúrate que el selector es correcto

            if ($occuppiedUnitArea.length === 0) {
                console.error("❌ Error: No se encontró el elemento con clase 'giveDetailBox'");
                return;
            }

            $occupiedUnit.change(function() {
                if ($(this).val() === "yes") {
                    $occuppiedUnitArea.show(); // Mostrar el div
                      const occupedaunitInput = document.getElementById('occupedaunit');
                    if (occupedaunitInput) {
                        occupedaunitInput.setAttribute('required', 'required');
                    }
                } else {
                    $occuppiedUnitArea.hide(); // Ocultar el div
                      const occupedaunitInput = document.getElementById('occupedaunit');
                    if (occupedaunitInput) {
                        occupedaunitInput.removeAttribute('required', 'required');
                    }
                }
            });
            /*OCCUPIED A UNIT*/



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
            <td><input type="number " name="addmore[${i}][age_accupant]" placeholder="Enter Age" class="form-control ageField" /></td>
            <td><input type="text" name="addmore[${i}][occupation_school_occupant]" placeholder="Enter Occupation / School" class="form-control" /></td>
            <td><input type="text" name="addmore[${i}][income_occupant]" placeholder="Enter Income" class="form-control incomeField" /></td>
            <td><button type="button" class="btn btn-danger remove-tr">delete</button></td>
        `;

                table.querySelector('tbody').appendChild(row);



            });

            // Validar cualquier input con clase .ageField (incluso los que se agregan luego)
            document.addEventListener('input', function(e) {
                if (e.target.classList.contains('ageField')) {
                    let value = e.target.value;
                    value = value.replace(/[^0-9]/g, ''); // Solo números
                    e.target.value = value !== '' ? Math.max(0, parseInt(value)) : '';
                }
            });

            //income field
            document.addEventListener('input', function(e) {
                if (e.target.classList.contains('incomeField')) {
                    let value = e.target.value;
                    value = value.replace(/[^0-9]/g, ''); // Solo números
                    e.target.value = value !== '' ? Math.max(0, parseInt(value)) : '';
                }
            });

            document.addEventListener('click', function(event) {

                if (event.target && event.target.classList.contains('remove-tr')) {
                    event.target.closest('tr').remove();
                }
            });

            /*VALIDATE EMAIL */
            /*const emailInput = document.getElementById("email_field");
            const validationResultEmail = document.getElementById("validation-result-email");
            let typingTimerEmail;
            const doneTypingIntervalEmail = 1000;


            emailInput.addEventListener("input", () => {
                clearTimeout(typingTimerEmail);

                const emailValue = emailInput.value.trim();

                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

                if (emailRegex.test(emailValue)) {

                    validationResultEmail.textContent = "Validating, wait a moment...";
                    validationResultEmail.style.color = "blue";

                    fetch("{{ route('validate.email') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ email_user: emailValue })
                    })
                    .then(response => response.json())
                    .then(data => {


                    var hashGenerate = data.hash;

                    if (data.valido) {
                        validationResultEmail.textContent = "Valid Email ✅";
                        validationResultEmail.style.color = "green";
                        // Mostrar campos extra o continuar
                    } else {
                        validationResultEmail.textContent = "Invalid Email ❌";
                        validationResultEmail.style.color = "red";
                    }

                    inputFields.forEach(el => el.disabled = false);
                }).catch(error => {
                    validationResultEmail.textContent = "Validation Error";
                    validationResultEmail.style.color = "red";


                });


                }


            });*/

            /*inputFieldEmail.forEach(input => {
                input.addEventListener("input", function() {
                    clearTimeout(typingTimerEmail); // Reinicia el temporizador

                    let emailValue = this.value;

                    let validationResultEmail = document.getElementById("validation-result-email");

                    if (emailValue.length > 0) {


                        validationResultEmail.textContent = "Validating wait a moment...";
                        validationResultEmail.style.color = "blue"; // Loading color
                        inputFields.disabled = true; // Disable input

                        typingTimerEmail = setTimeout(() => { // Espera antes de ejecutar el fetch

                            fetch("{{ route('validate.email') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        email_user: emailValue,


                                    })
                                })
                                .then(response => response.json())
                                .then(data => {
                                    console.log(data);
                                })
                                .catch(error => {
                                    document.getElementById("validation-result")
                                        .textContent = "Validation error";
                                    console.error("Error:", error);
                                });
                        }, doneTypingIntervalEmail);









                    }


                });

            });*/
            /*VALIDATE EMAIL */




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
