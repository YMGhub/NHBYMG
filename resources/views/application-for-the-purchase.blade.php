@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
    <style>
        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, transparent);
        }

        .bannerOurDeparment {}

        #GroupFields,
        #groupCheckbox,
        #buttonSubmit {
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

        .buttonRed {
            background: red !important;
        }

        /*CoApplicant Fields*/


        .hideArea {
            display: none;
        }

        .hideArea2 {
            display: none;
        }

        @media only screen and (max-width: 480px) and (orientation: portrait) {

            /* Portrait-specific styles */
            .BoxMarital {
                flex-wrap: wrap;
            }

            .BoxMarital .form-check {
                width: 100% !important;
            }
        }
    </style>
    <div class="parallax bannerOurDeparment" data-background="images/Project-Hero.jpg" data-color="#" data-color-opacity="0.1"
        data-img-width="1000" data-img-height="1200"
        style="background-position: 0 !important;background-size:100% !important;    position: relative;
   z-index: 99;    background-repeat: no-repeat;">
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
    <!-- Container / Start --><!-- Container / End -->
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-12 col-sm-12">
                <section id="contact">

                    <!--email register form-->
                    @if (!$showSecondForm)
                        <!--formulario send email -->
                        <div class="margin-top-35 margin-bottom-10" style="overflow:hidden !important">
                            <!--div id="contact-message"></div-->
                            @if (Session::has('success'))
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const form = document.getElementById("FormRequestPurchase");
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
                            @if (session('error') && is_array(session('error')))
                                <div class="alert alert-danger alert-custom alert-danger-custom">
                                    <strong>{{ session('error')['message'] ?? 'Error' }}</strong> <br>
                                    <span>{{ session('error')['detail'] ?? '' }}</span>
                                </div>
                            @endif
                            <form action="{{ route('link-request.send-purchase') }}" method="POST"
                                id="FormRequestPurchase">
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
                                                <input name="type_form" type="hidden" id="type_form" value="purchase" />
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
                    <!----------------------->

                    <!--formulario que aparecera cuando este el hash en la url -->
                    @if ($showSecondForm)
                        <div class="MainGroup">
                            <!-- Contact Form -->
                            <div class="col-md-12 col-sm-12">
                                <section id="contact">

                                    <h4 class="text-center headline margin-top-35 margin-bottom-35">
                                        APPLICATION FORM FOR THE PURCHASE OF LAND OR PROPERTY <br>USE BLOCK LETTERS
                                    </h4>
                                    <p class="text-center headline margin-top-35 margin-bottom-35">
                                        Please complete this form in full using BLOCK LETTERS. Incomplete forms will not be
                                        processed. If
                                        you are purchasing without a loan or mortgage a BANK STATEMENT is required and must
                                        be uploaded to
                                        complete the application. For purchases financed by mortgages/loans a MORTGAGE
                                        CERTIFICATE is
                                        required and must be uploaded to complete the application. The Corporation does not
                                        sell
                                        land/property to persons who already own land/property. Low Income lots range in
                                        size from
                                        approximately 3,000 to 4,000 sq. ft only. Refer to the notes at the end for more
                                        details.
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
                                    @if (session('error') && is_array(session('error')))
                                        <div class="alert alert-danger alert-custom alert-danger-custom">
                                            <strong>{{ session('error')['message'] ?? 'Error' }}</strong> <br>
                                            <span>{{ session('error')['detail'] ?? '' }}</span>
                                        </div>
                                    @endif

                                    <form method="post" enctype="multipart/form-data"
                                        action="{{ route('application-for-the-purchase.apply') }}"
                                        name="applicationpurchase" id="applicationpurchase" autocomplete="on">
                                        @csrf
                                        <div class="row">

                                            <!--Client ID-->
                                            <input name="client_id" type="hidden" id="client_id" value=""
                                                required="required" readonly />
                                            <!--Client ID-->

                                            <!----------->
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><b>EMAIL:</b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="applicant_email" type="email"
                                                                        id="applicant_email" placeholder="Email"
                                                                        value="{{ $email ?? '' }}" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->
                                            <!----------->
                                            <div class="col-md-12">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label><b>NATIONAL REGISTRATION NUMBER:</b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input maxlength="10" pattern="\d{10}"
                                                                        name="applicant_national_registration_number"
                                                                        type="text"
                                                                        id="applicant_national_registration_number"
                                                                        placeholder="National Registration Number"
                                                                        pattern="[0-9]*" inputmode="numeric"
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
                                            </div>
                                            <!----------->
                                            <!----------->
                                            <div class="col-md-12 hideArea">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <label style="color:#fff"><b>.</b></label>
                                                                <input name="salutation" type="text" id="salutation"
                                                                    placeholder="Surname" required="required" />
                                                            </div>
                                                        </div>
                                                        <!--div class="col-md-3">
                                                                                                                                                    <label style="color:#fff"><b>.</b></label>
                                                                                                                                                    <input name="applicant_surname" type="text" id="applicant_surname"
                                                                                                                                                        placeholder="Surname" required="required" />
                                                                                                                                                    </div-->
                                                        <div class="col-md-4">
                                                            <label style="color:#fff"><b>.</b></label>
                                                            <input name="applicant_first" type="text"
                                                                id="applicant_first" placeholder="First"
                                                                required="required" />
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label style="color:#fff"><b>.</b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="applicant_middle" type="text"
                                                                        id="applicant_middle" placeholder="Middle"
                                                                        required="required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->
                                            <!----------->
                                            <div class="col-md-12 hideArea">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><b>DATE OF BIRTH: Self: yyyy/mm/dd</b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="applicant_date_birth" type="text"
                                                                        id="applicant_date_birth" placeholder="YYYY-MM-DD"
                                                                        required="required" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><b>GENDER</b></label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input name="applicant_gender" type="text"
                                                                        id="applicant_gender" placeholder="GENDER"
                                                                        required="required" />
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
                                                                These fields cannot be edited. If this information is
                                                                incorrect, please contact NHC.<br>
                                                                Phone: 1-246-536-5300 Email:
                                                                NHC.CustomerService@barbados.gov.bb
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!----------->

                                            <!--Creation button Continnue -->
                                            <div class="col-md-12 hideArea">
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

                                            <!----------->
                                            <div id="GroupFields">
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>TAMIS NO:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input maxlength="13" name="applicant_tamis_no"
                                                                            type="text" id="applicant_tamis_no"
                                                                            placeholder="Tamis No." required="required"
                                                                            minlength="13" maxlength="13" />
                                                                        <p id="tamis_error"
                                                                            style="    color: red;
    margin: 0;
    display: block;
    padding: 0;
    position: absolute;
    top: 51px;
    font-size: 12px;"
                                                                            class="text-red-600 text-sm mt-1"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 1:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_address" type="text"
                                                                            id="applicant_address" placeholder="Address"
                                                                            required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 2:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_address2" type="text"
                                                                            id="applicant_address2" placeholder="Address"
                                                                            required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 3:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_address3" type="text"
                                                                            id="applicant_address3" placeholder="Address"
                                                                            required />
                                                                    </div>
                                                                </div>
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
                                                                        <select required id="applicant_parish"
                                                                            name="applicant_parish"
                                                                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                                                                            <option value="" selected disabled>Select
                                                                                a Parish
                                                                            </option>
                                                                            <option value="Christ Church">Christ Church
                                                                            </option>
                                                                            <option value="St. Andrew">St. Andrew</option>
                                                                            <option value="St. George">St. George</option>
                                                                            <option value="St. James">St. James</option>
                                                                            <option value="St. John">St. John</option>
                                                                            <option value="St. Joseph">St. Joseph</option>
                                                                            <option value="St. Lucy">St. Lucy</option>
                                                                            <option value="St. Michael">St. Michael
                                                                            </option>
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
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <label for=""><b>TELEPHONE NUMBER:</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Home:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_phone_home" type="text"
                                                                            id="applicant_phone_home" placeholder="Home"
                                                                            required="required" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>Work:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_phone_work" type="text"
                                                                            id="applicant_phone_work" placeholder="Work"
                                                                            required="required" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>Cell:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="applicant_phone_cell" type="text"
                                                                            id="applicant_phone_cell" placeholder="Cell"
                                                                            required="required" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>MARITAL STATUS:</b></label>
                                                                <div class="row">
                                                                    <div class="BoxMarital"
                                                                        style="display: flex;width: 100%;justify-content: space-between; ">
                                                                        <div style="width:20%;display:flex;align-items: center;"
                                                                            class="form-check form-check-inline ">
                                                                            <input style="margin-bottom:0px"
                                                                                class="form-check-input" type="radio"
                                                                                name="marital_status" id="Single"
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
                                                                                name="marital_status" id="Married"
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
                                                                                name="marital_status" id="Widowed"
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
                                                                                name="marital_status" id="Divorced"
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
                                                                                name="marital_status" id="Separated"
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
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6" style="    margin-bottom: 20px;">
                                                                <label><b>CITIZENSHIP:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <select required name="applicant_citizenship"
                                                                            id="applicant_citizenship">
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
                                                                                Barthelemy</option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint Vincent
                                                                                and
                                                                                the Grenadines
                                                                            </option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and Caicos
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
                                                            <div class="col-md-6" style="    margin-bottom: 20px;">
                                                                <label><b>COUNTRY OF RESIDENCE:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <select required
                                                                            name="applicant_country_of_residence"
                                                                            id="applicant_country_of_residence">
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
                                                                                Barthelemy</option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint Vincent
                                                                                and
                                                                                the Grenadines
                                                                            </option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and Caicos
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
                                                <!----------->
                                                <!--new fields applicant - 2025---->
                                                <!---Employer and Occupation--->
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label><b>Employer:</b></label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input name="app_employer_field"
                                                                                type="text" id="employer_field"
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
                                                                            <input name="app_occupation_field"
                                                                                type="text" id="occupation_field"
                                                                                placeholder="" required="required" />
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
                                                                            <select required
                                                                                name="app_period_of_employment"
                                                                                id="app_period_of_employment">
                                                                                <option value="< 1 year">
                                                                                    < 1 year </option>
                                                                                <option value="1-3 years">1 – 3 years
                                                                                </option>
                                                                                <option value="3-5 years">3 – 5 years
                                                                                </option>
                                                                                <option value="5-7 years">5 – 7 years
                                                                                </option>
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
                                                                            <input required name="app_salary"
                                                                                type="text" id="salary"
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
                                                                <div
                                                                    style="display: flex;width: 100%;justify-content: space-between;">
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_pay_period" id="Weekly"
                                                                            value="Weekly">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Weekly">Weekly</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_pay_period" id="Bi-Monthly"
                                                                            value="Bi-Monthly">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Bi-Monthly">Bi-Monthly</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_pay_period" id="Monthly"
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
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_employment_status" id="Government"
                                                                            value="Government">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Government">Government</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_employment_status" id="Private"
                                                                            value="Private">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Private">Private</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input required style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="app_employment_status" id="Self"
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


                                                <div class="col-md-12 ">
                                                    <div>
                                                        <label><b>APPLICATION TYPE:</b></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div style="display: flex;width: 100%;justify-content: space-between;">
                                                        <div class="col-12 col-md-3">
                                                            <label><b>Timber:</b></label>
                                                            <input name="co_house_type" value="Timber" type="radio"
                                                                id="Timber" />
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <label><b>Wall:</b></label>
                                                            <input name="co_house_type" value="Wall" type="radio"
                                                                id="Wall" />
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <label><b>Timber / Wall:</b></label>
                                                            <input name="co_house_type" value="Timber / Wall"
                                                                type="radio" id="timber_wall" />
                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <label><b>Steel Frame:</b></label>
                                                            <input name="co_house_type" value="Steel Frame"
                                                                type="radio" id="Steel_Frame" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div>
                                                        <label><b>PREFERRED HOUSE TYPE:</b></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div style="display: flex;width: 100%;justify-content: space-between;">
                                                        <div class="col-12 col-md-3">
                                                            <label><b>2 Bedroom:</b></label>
                                                            <input name="co_bedrooms" value="2" type="radio" />
                                                        </div>
                                                        <div class="col-12 col-md-3">

                                                        </div>
                                                        <div class="col-12 col-md-3">
                                                            <label><b>3 Bedroom:</b></label>
                                                            <input name="co_bedrooms" value="3" type="radio" />
                                                        </div>
                                                        <div class="col-12 col-md-3">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div>
                                                        <label><b>NO OF OCCUPANTS:</b></label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div>
                                                        <label><b>Adults:</b></label>
                                                        <input name="co_no_occupants_adult" value="2"
                                                            type="number" />
                                                    </div>
                                                    <div>
                                                        <label><b>Children:</b></label>
                                                        <input name="co_no_occupants_children" value="3"
                                                            type="number" />
                                                    </div>
                                                </div>

                                                <!---co_children_agen--->
                                                <div class="col-md-12 ">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div>
                                                                    <label><b>CHILDREN’S AGES:</b></label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input name="co_children_age" type="text"
                                                                                id="co_children_age" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!-------------------------->
                                                <!---INFORMATION ON INTENDED OCCUPANTS --->
                                                <!--div class="col-md-12 hideArea">
                                                            <div>
                                                                <label><b>INFORMATION ON INTENDED OCCUPANTS:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <table class="table table-bordered" id="dynamicTable">
                                                                            <tr>
                                                                                <th>ADULT</th>
                                                                                <th>CHILDREN</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="number"
                                                                                        class="adults"name="addmore[0][adult_person]"
                                                                                        value="0" required min="0">
                                                                                </td>
                                                                                <td><input type="number"
                                                                                        name="addmore[0][children_person]"
                                                                                        placeholder="Enter Children"
                                                                                        class="form-control" value="0"
                                                                                        min="0"  /></td>
                                                                                <td><button type="button" name="add"
                                                                                                id="add"
                                                                                                class="btn btn-success addMore">+</button>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div-->
                                                <!---INFORMATION ON INTENDED OCCUPANTS --->

                                                <!--ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?-->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE
                                                                HOUSEHOLD?:</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Yes:</b></label>
                                                                <input name="disabilitieswithinthehousehold"
                                                                    value="yes" type="radio" id="Adults"
                                                                    required />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>No:</b></label>
                                                                <input name="disabilitieswithinthehousehold"
                                                                    value="No" type="radio" id="Children" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?-->
                                                <!---ALTERNATIVE SOURCES--->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>ALTERNATIVE SOURCES OF INCOME IN HOUSEHOLD: (Maintenance,
                                                                Alimony,
                                                                Second Job,
                                                                Adults working but not listed on this application
                                                                etc…)</b></label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label style="color:#fff"><b>.</b></label>
                                                                <input name="alternative" type="text" id="alternative"
                                                                    placeholder="" required="required" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><b>Amount</b></label>
                                                                <input name="alternative_amount" type="text"
                                                                    id="alternative_amount" placeholder=""
                                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label style="color:#fff"><b>.</b></label>
                                                                <input name="alternative1" type="text"
                                                                    id="alternative" placeholder="" />
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><b>Amount</b></label>
                                                                <input name="alternative_amount2" type="text"
                                                                    id="alternative_amount2" placeholder=""
                                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END ALTERNATIVE DIVS-->
                                                <!--Are you currently renting?-->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>Are you currently renting?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Yes:</b></label>
                                                                <input class="inputRenting" name="areyourenting"
                                                                    value="Yes" type="radio" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>No:</b></label>
                                                                <input class="inputRenting" name="areyourenting"
                                                                    value="No" type="radio" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Are you currently renting?-->
                                                <div class="col-md-12 boxCurrentRenting" style="display: none">
                                                    <div>
                                                        <label><b>If yes, how much is your rent?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input name="ifyeshowmuch" type="text"
                                                                    placeholder="$" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Are you currently renting?-->
                                                <!--Do you have your own land and wish us to provide you with a Housing solution?-->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>Do you wish us to provide a housing solution on land you
                                                                own?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Yes:</b></label>
                                                                <input class="yourownland" name="yourownland"
                                                                    value="Yes" type="radio" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>No:</b></label>
                                                                <input class="yourownland" name="yourownland"
                                                                    value="No" type="radio" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--prompt the applicant to provide the location of the land lot.-->
                                                <!--prompt the applicant to provide the location of the land lot.-->
                                                <div class="col-md-12 landLotBox" style="display: none">
                                                    <div>
                                                        <label><b>Please provide the location of the land Lot</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input name="land_or_lot" type="text"
                                                                    placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--prompt the applicant to provide the location of the land lot.-->
                                                <!--Are you a tenant of the land on which you wish to build your Housing solution?-->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>Do you wish the NHC to provide a housing solution on land
                                                                you do not own
                                                                (and not
                                                                owned by the NHC)?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Yes:</b></label>
                                                                <input class="boxRadioTenant" name="tenant"
                                                                    value="Yes" type="radio" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>No:</b></label>
                                                                <input class="boxRadioTenant" name="tenant"
                                                                    value="No" type="radio" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Are you a tenant of the land on which you wish to build your Housing solution?-->
                                                <!--Are you currently renting?-->
                                                <div class="col-md-12 landlordAgentBox" style="display: none">
                                                    <div>
                                                        <label><b>(If yes, you MUST have a letter of permission from the
                                                                landlord/agent.)</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input style="margin-bottom: 0px;" type="file"
                                                                    id="land_or_agent" name="land_or_agent" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Are you currently renting?-->
                                                <!--FINANCING OF PROPERTY/LAND:-->
                                                <div class="col-md-12 hideArea" style="margin-top:20px">
                                                    <div>
                                                        <label style="text-align: center"><b>FINANCING OF
                                                                PROPERTY/LAND:</b></label>
                                                    </div>
                                                </div>
                                                <!--FINANCING OF PROPERTY/LAND:-->
                                                <!--How will you finance the purchase of property / land?-->
                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <label><b>How will you finance the purchase of property /
                                                                land?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Mortgage:</b><small style="display:block">State
                                                                        the
                                                                        amount
                                                                        to be deposited as a
                                                                        down payment</small>
                                                                    <input class="financeBox"
                                                                        name="financethepurchsaseproporty"
                                                                        value="Mortgage" type="radio"
                                                                        required /></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>Loan:</b>
                                                                    <input class="financeBox"
                                                                        name="financethepurchsaseproporty" value="Loan"
                                                                        type="radio" /></label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>For Full Cash Payment:</b>
                                                                    <input class="financeBox"
                                                                        name="financethepurchsaseproporty"
                                                                        value="Full Cash Payment"
                                                                        type="radio" /></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--How will you finance the purchase of property / land?-->
                                                <!--If mortgage or loan, please indicate a potential lending institution of your choice-->
                                                <div class="col-md-12 boxGroup1" style="display: none">
                                                    <div>
                                                        <label><b>If mortgage or loan, please indicate a potential lending
                                                                institution of
                                                                your
                                                                choice</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="mortgage_or_loan" name="mortgage_or_loan"
                                                                    type="text" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--If mortgage or loan, please indicate a potential lending institution of your choice-->
                                                <!--What is the amount of deposit available?-->
                                                <div class="col-md-12 boxGroup1" style="display: none">
                                                    <div>
                                                        <label><b>What is the amount of deposit available?</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input class="the_amount_of_deposit"
                                                                    name="the_amount_of_deposit"
                                                                    id="the_amount_of_deposit" type="text"
                                                                    placeholder="$" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <!--PREFERRED LOCATION OF LAND/PROPERT:-->
                                                <!--Applicant to submit bank statement(s) -->
                                                <div class="col-md-12 boxGroup2" style="display: none">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>Applicant to submit bank statement(s)
                                                                        :</b></label>
                                                                <input style="margin-bottom: 0px;" type="file"
                                                                    id="bankstatements" name="bankstatements" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Qualifying Amount -->
                                                <div class="col-md-12 boxGroup1" style="display: none">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>Qualifying Amount :</b></label>
                                                                <input name="qualifyngamount" type="text"
                                                                    placeholder="" id="qualifyngamount"
                                                                    class="qualifyngamount" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Applicant to submit mortage_certificate(s) -->
                                                <div class="col-md-12 boxGroup1 mortage_certificate"
                                                    id="mortage_certificate" style="display: none">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>Mortage Certificate(s)
                                                                        :</b></label>
                                                                <input style="margin-bottom: 0px;" type="file"
                                                                    id="mortage_certificate" name="mortage_certificate" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--or personally financed purchases Description -->
                                                <div class="col-md-12 boxGroup1" style="display: none">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>For personally financed purchases, a BANK STATEMENT is
                                                                    required. For
                                                                    mortgages/loans, a MORTGAGE CERTIFICATE is required.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <!--CO Applicant-->
                                                <!--ES NUEVA POSICION DEL COAPPLICANT FIELDS-->
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

                                            </div>
                                            <!--CLOSE GROUP  GroupFields APPLICANT -->



                                            <!--ES NUEVA POSICION DEL COAPPLICANT FIELDS-->

                                            <!--CoApplicant-->
                                            <!--GROUP COAPPLICANT-->
                                            <div id="DataCoApplicant">

                                                <div class="col-md-12">
                                                    <label><b>CO-APPLICANT</b></label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>NATIONAL REGISTRATION NUMBER:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input maxlength="10" pattern="\d{10}"
                                                                            name="coapplicant_national_registration_number"
                                                                            type="text"
                                                                            id="coapplicant_national_registration_number"
                                                                            placeholder="National Registration Number" />
                                                                        <div id="validation-result2"
                                                                            style="font-weight: bold;padding: 0;margin: 0;margin-top: -21px;display: block;font-size: 11px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!---EMAIL Co applicant--->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <label><b>EMAIL</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input name="coapplicant_email" type="email"
                                                                    id="coapplicant_email" placeholder="Email" />
                                                                <input type="hidden" value="" name="co_client_id"
                                                                    id="co_client_id" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 hideArea2" style="margin-top:0px;">

                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div>
                                                                    <label style="color:#fff"><b>.</b></label>
                                                                    <input name="coapplicant_salutation" type="text"
                                                                        id="coapplicant_salutation"
                                                                        placeholder="Surname" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" style="display:none">
                                                                <label style="color:#fff"><b>.</b></label>
                                                                <input name="coapplicant_surname" type="text"
                                                                    id="coapplicant_surname" placeholder="Surname" />
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label style="color:#fff"><b>.</b></label>
                                                                <input name="coapplicant_first" type="text"
                                                                    id="coapplicant_first" placeholder="First" />
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label><b>Middle</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_middle" type="text"
                                                                            id="coapplicant_middle"
                                                                            placeholder="Middle" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label><b>Maiden Name:</b></label>
                                                                <div class="row">
                                                                    <div class="    col-md-12">
                                                                        <input name="coapplicant_maiden_name"
                                                                            type="text" id="coapplicant_maiden_name"
                                                                            placeholder="Maiden Name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->

                                                <!----------->

                                                <!----------->
                                                <!----------->

                                                <div class="col-md-12 hideArea">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><b>DATE OF BIRTH: Self: yyyy/mm/dd</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_date_birth"
                                                                            type="text" id="coapplicant_date_birth"
                                                                            placeholder="YYYY-MM-DD" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><b>GENDER</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_gender" type="text"
                                                                            id="coapplicant_gender"
                                                                            placeholder="GENDER" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>TAMIS NO:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_tamis_no" type="text"
                                                                            id="coapplicant_tamis_no"
                                                                            placeholder="Tamis No." maxlength="13"
                                                                            minlength="13" />
                                                                        <p id="co_tamis_error"
                                                                            style="    color: red;
    margin: 0;
    display: block;
    padding: 0;
    position: absolute;
    top: 51px;
    font-size: 12px;"
                                                                            class="text-red-600 text-sm mt-1"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 1:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_address" type="text"
                                                                            id="coapplicant_address"
                                                                            placeholder="Address" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 2:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_address2" type="text"
                                                                            id="coapplicant_address2"
                                                                            placeholder="Address" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>ADDRESS 3:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_address3" type="text"
                                                                            id="coapplicant_address3"
                                                                            placeholder="Address" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!----------->
                                                <div class="col-md-12 hideArea2" style="    margin-bottom: 20px;">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label><b>PARISH: </b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <select id="coapplicant_parish"
                                                                            name="coapplicant_parish"
                                                                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                                                                            <option value="" selected disabled>Select
                                                                                a Parish
                                                                            </option>
                                                                            <option value="Christ Church">Christ Church
                                                                            </option>
                                                                            <option value="St. Andrew">St. Andrew</option>
                                                                            <option value="St. George">St. George</option>
                                                                            <option value="St. James">St. James</option>
                                                                            <option value="St. John">St. John</option>
                                                                            <option value="St. Joseph">St. Joseph</option>
                                                                            <option value="St. Lucy">St. Lucy</option>
                                                                            <option value="St. Michael">St. Michael
                                                                            </option>
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
                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <label for="">TELEPHONE NUMBER:</label>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label><b>Home:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_phone_home"
                                                                            type="text" id="coapplicant_phone_home"
                                                                            placeholder="Home" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>Work:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_phone_work"
                                                                            type="text" id="coapplicant_phone_work"
                                                                            placeholder="Work" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label><b>Cell:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input name="coapplicant_phone_cell"
                                                                            type="text" id="coapplicant_phone_cell"
                                                                            placeholder="Cell" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Marital Status / Co applicant-->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <label><b>Marital Status:</b></label>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div style="display: flex;width: 100%;justify-content: space-between;"
                                                                    class="BoxMarital">
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
                                                <!--nuevos campos co applicant 2025--->
                                                <!----------->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6" style="    margin-bottom: 20px;">
                                                                <label><b>CITIZENSHIP:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <select name="co_applicant_citizenship"
                                                                            id="co_applicant_citizenship">
                                                                            <option value="">Select a country
                                                                            </option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua
                                                                                and
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
                                                                                Republic
                                                                            </option>
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
                                                                                Barthelemy</option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint
                                                                                Vincent and
                                                                                the Grenadines
                                                                            </option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and Caicos
                                                                                Islands
                                                                            </option>
                                                                            <option value="United Kingdom">United Kingdom
                                                                            </option>
                                                                            <option value="United States">United States
                                                                            </option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Virgin Islands, British">Virgin
                                                                                Islands,
                                                                                British
                                                                            </option>
                                                                            <option value="Virgin Islands, U.S.">Virgin
                                                                                Islands, U.S.
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="    margin-bottom: 20px;">
                                                                <label><b>COUNTRY OF RESIDENCE:</b></label>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <select name="co_applicant_country_of_residence"
                                                                            id="co_applicant_country_of_residence">
                                                                            <option value="">Select a country
                                                                            </option>
                                                                            <option value="Afghanistan">Afghanistan
                                                                            </option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Antigua and Barbuda">Antigua
                                                                                and Barbuda
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
                                                                                Republic
                                                                            </option>
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
                                                                                Barthelemy</option>
                                                                            <option value="Saint Kitts and Nevis">Saint
                                                                                Kitts and Nevis
                                                                            </option>
                                                                            <option value="Saint Lucia">Saint Lucia
                                                                            </option>
                                                                            <option value="Saint Martin">Saint Martin
                                                                            </option>
                                                                            <option
                                                                                value="Saint Vincent and the Grenadines">
                                                                                Saint
                                                                                Vincent and
                                                                                the Grenadines
                                                                            </option>
                                                                            <option value="Trinidad and Tobago">Trinidad
                                                                                and Tobago
                                                                            </option>
                                                                            <option value="Turks and Caicos Islands">Turks
                                                                                and Caicos
                                                                                Islands
                                                                            </option>
                                                                            <option value="United Kingdom">United Kingdom
                                                                            </option>
                                                                            <option value="United States">United States
                                                                            </option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Virgin Islands, British">Virgin
                                                                                Islands,
                                                                                British
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
                                                <!----------->
                                                <!---Employer and Occupation--->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label><b>Employer:</b></label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input name="co_app_employer_field"
                                                                                type="text"
                                                                                id="co_app_employer_field"
                                                                                placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label><b>Occupation:</b></label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input name="co_app_occupation_field"
                                                                                type="text"
                                                                                id="co_app_occupation_field"
                                                                                placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---Employer and Occupation--->
                                                <!---Period of Employment  and Salary--->
                                                <div class="col-md-12 hideArea2">
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div>
                                                                    <label><b>Period of Employment:</b></label>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select name="co_app_period_of_employment"
                                                                                id="co_app_period_of_employment">
                                                                                <option value="< 1 year">
                                                                                    < 1 year </option>
                                                                                <option value="1-3 years">1 – 3 years
                                                                                </option>
                                                                                <option value="3-5 years">3 – 5 years
                                                                                </option>
                                                                                <option value="5-7 years">5 – 7 years
                                                                                </option>
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
                                                                            <input name="co_app_salary" type="text"
                                                                                id="co_salary" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---Period of Employment  and Salary--->
                                                <!--Pay Period-->
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
                                                                            name="co_app_pay_period" id="Weekly1"
                                                                            value="Weekly">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Weekly1">Weekly</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="co_app_pay_period" id="Bi-Monthly1"
                                                                            value="Bi-Monthly">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Bi-Monthly1">Bi-Monthly</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="co_app_pay_period" id="Monthly1"
                                                                            value="Monthly">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Monthly1">Monthly</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!----------->
                                                <!--Employment status-->
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
                                                                            name="co_app_employment_status"
                                                                            id="Government1" value="Government">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Government1">Government</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="co_app_employment_status"
                                                                            id="Private1" value="Private">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label"
                                                                            for="Private1">Private</label>
                                                                    </div>
                                                                    <div style="width:40%;display:flex;align-items: center;"
                                                                        class="form-check form-check-inline">
                                                                        <input style="margin-bottom:0px"
                                                                            class="form-check-input" type="radio"
                                                                            name="co_app_employment_status"
                                                                            id="Self1" value="Self">
                                                                        <label
                                                                            style="margin-bottom: 0;display: block;margin-left: 10px;"
                                                                            class="form-check-label" for="Self1">Self
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                            </div>
                                            <!--Cierra DataCoApplicant-->
                                            <!--ES NUEVA POSICION DEL COAPPLICANT FIELDS-->

                                            <!--CO Applicant-->



                                            <!--NOTE-->
                                            <br>
                                            <div class="col-md-12 hideArea">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <b> NOTE:<br>
                                                                1. The Corporation does not sell land/property to persons
                                                                who already
                                                                own
                                                                land/property.<br>
                                                                2. The NHC has the right to assign you to the first
                                                                available
                                                                development, since
                                                                a property may not be available in the parish of your
                                                                choice.<br>
                                                                3. Low Income lots range in size from approximately 3,000 to
                                                                4,000 sq.
                                                                ft
                                                                only.<br>
                                                                <br>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--NOTE-->

                                            <div class="col-md-12" id="groupCheckbox">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div style="display:flex;    align-items: center;">
                                                                <input name="privacy" style="margin-bottom: 0;"
                                                                    type="checkbox" id="privacy" required>
                                                                <label style="    margin-bottom: 0;margin-left: 10px;"
                                                                    for="privacy">I have read and accept the <a
                                                                        href="/privacy-policy" target="_blank">Privacy
                                                                        Policy.</a></label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div style="display:flex;    align-items: center;">
                                                                <input style="margin-bottom: 0;" type="checkbox"
                                                                    id="confirm_info" required>
                                                                <label style="    margin-bottom: 0;margin-left: 10px;"
                                                                    for="confirm_info">I confirm that the information
                                                                    provided
                                                                    is
                                                                    accurate.</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!--dateend-->
                                            <div class="col-md-12 hideArea" id="buttonSubmit">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="submit button" id="submit"
                                                                value="Submit" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </section>
                            </div>
                        </div>
                    @endif
                    <!----------------------------------------------------------->

                </section>
            </div>
        </div>
    </div>
@endsection
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {


        //adult and children
        //adult
        const sourceInput = document.querySelector('input[name="co_no_occupants_adult"]');
        const targetInput = document.querySelector('input[name="addmore[0][adult_person]"]');

        sourceInput.addEventListener('input', function() {
            targetInput.value = sourceInput.value;
        });

        //chiildren
        const sourceInput1 = document.querySelector('input[name="co_no_occupants_children"]');
        const targetInput1 = document.querySelector('input[name="addmore[0][children_person]"]');

        sourceInput1.addEventListener('input', function() {
            targetInput1.value = sourceInput1.value;
        });

        //////////////////

        //validate tamis number 13 digitos
        const input = document.getElementById('applicant_tamis_no');
        const errorText = document.getElementById('tamis_error');

        input.addEventListener('input', function() {
            const value = input.value;

            // Si contiene letras o caracteres no numéricos
            if (!/^\d*$/.test(value)) {
                errorText.textContent = "Only numbers are allowed.";
            }
            // Si tiene menos de 13 dígitos (pero más de 0)
            else if (value.length > 0 && value.length < 13) {
                errorText.textContent = "It must contain exactly 13 digits.";
            }
            // Si tiene exactamente 13 dígitos
            else if (value.length === 13) {
                errorText.textContent = ""; // todo correcto
            }
            // Si está vacío
            else {
                errorText.textContent = "";
            }
        });

        const inputx = document.getElementById('coapplicant_tamis_no');
        const errorTextx = document.getElementById('co_tamis_error');

        inputx.addEventListener('input', function() {
            const value = input.value;

            // Si contiene letras o caracteres no numéricos
            if (!/^\d*$/.test(value)) {
                errorTextx.textContent = "Only numbers are allowed.";
            }
            // Si tiene menos de 13 dígitos (pero más de 0)
            else if (value.length > 0 && value.length < 13) {
                errorTextx.textContent = "It must contain exactly 13 digits.";
            }
            // Si tiene exactamente 13 dígitos
            else if (value.length === 13) {
                errorTextx.textContent = ""; // todo correcto
            }
            // Si está vacío
            else {
                errorTextx.textContent = "";
            }
        });

        //
        //the_amount_of_deposit
        const the_amount_of_deposit = document.getElementById('the_amount_of_deposit');

        the_amount_of_deposit.addEventListener('input', function(e) {
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

        //qualifyngamount
        const qualifyngamount = document.getElementById('qualifyngamount');

        qualifyngamount.addEventListener('input', function(e) {
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


        const form = document.getElementById('applicationpurchase');


        /**cookies**/
        const fieldNamesCookie = [
            "client_id",
            "applicant_email",
            "applicant_national_registration_number",
            "salutation",
            "applicant_first",
            "applicant_middle",
            "applicant_date_birth",
            "applicant_gender",
            "applicant_tamis_no",
            "applicant_address",
            "applicant_address2",
            "applicant_address3",
            "applicant_parish",
            "applicant_phone_home",
            "applicant_phone_work",
            "applicant_phone_cell",
            "marital_status",
            "applicant_citizenship",
            "applicant_country_of_residence",
            "app_employer_field",
            "app_occupation_field",
            "app_period_of_employment",
            "app_salary",
            "app_pay_period",
            "app_employment_status",
            "addmore[0][adult_person]",
            "addmore[0][children_person]",
            "disabilitieswithinthehousehold",
            "alternative",
            "alternative_amount",
            "alternative1",
            "alternative_amount2",
            "areyourenting",
            "ifyeshowmuch",
            "yourownland",
            "land_or_lot",
            "tenant",
            "land_or_agent",
            "mortgage_or_loan",
            "the_amount_of_deposit",
            "bankstatements",
            "qualifyngamount",
            "coapplicant_national_registration_number",
            "coapplicant_email",
            "co_client_id",
            "coapplicant_salutation",
            "coapplicant_surname",
            "coapplicant_first",
            "coapplicant_middle",
            "coapplicant_maiden_name",
            "coapplicant_date_birth",
            "coapplicant_tamis_no",
            "coapplicant_address",
            "coapplicant_address2",
            "coapplicant_address3",
            "coapplicant_parish",
            "coapplicant_phone_home",
            "coapplicant_phone_work",
            "coapplicant_phone_cell",
            "co_marital_status",
            "co_applicant_citizenship",
            "co_applicant_country_of_residence",
            "co_app_employer_field",
            "co_app_occupation_field",
            "co_app_period_of_employment",
            "co_app_salary",
            "co_app_pay_period",
            "co_app_employment_status"
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

        fieldNamesCookie.forEach(name => {
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
            'app_pay_period',
            'app_employment_status',
            'disabilitieswithinthehousehold ',
            'areyourenting',
            'tenant',
            'financethepurchsaseproporty',
            'co_marital_status',
            'co_app_pay_period',
            'co_app_employment_status'
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
                        console.log(
                            `Guardado en localStorage: ${name} = ${radio.value}`);
                    }
                });
            });
        });
        /***********/




        //NRN applicant
        //phone applicant


        document.getElementById('applicant_phone_home').addEventListener('input', function(e) {
            let input = e.target.value.replace(/\D/g, '').substring(0, 10);
            let formatted = '';

            if (input.length > 6) {
                formatted =
                    `(${input.substring(0, 3)}) - ${input.substring(3, 6)} - ${input.substring(6, 10)}`;
            } else if (input.length > 3) {
                formatted = `(${input.substring(0, 3)}) - ${input.substring(3)}`;
            } else if (input.length > 0) {
                formatted = `(${input}`;
            }

            e.target.value = formatted;


            // Validación personalizada
            if (e.target.validity.patternMismatch) {
                e.target.setCustomValidity(
                    "Por favor, ingresa el número en el formato (123) - 456 - 7890.");
            } else {
                e.target.setCustomValidity("");
            }
        });

        document.getElementById('applicant_phone_work').addEventListener('input', function(e) {
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

        document.getElementById('applicant_phone_cell').addEventListener('input', function(e) {
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
        document.getElementById('coapplicant_phone_home').addEventListener('input', function(e) {
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

        document.getElementById('coapplicant_phone_work').addEventListener('input', function(e) {
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

        document.getElementById('coapplicant_phone_cell').addEventListener('input', function(e) {
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
        //NRN - sin consultar el api
        document.getElementById('applicant_national_registration_number').addEventListener('input', function() {
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

            jQuery("#applicant_date_birth").val("").css({
                'pointer-events': '',
                'background-color': '',
                'cursor': ''
            });

            jQuery("#applicant_gender").val("").css({
                'pointer-events': '',
                'background-color': '',
                'cursor': ''
            });



            jQuery("#salutation").val("").css({
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
                            type_form: "Purchase",
                            co_app: 0
                        })
                    })
                    .then(response => response.json())
                    .then(data => {


                        const listResponse = typeof data === 'string' ?
                            JSON.parse(data) : data;

                        var ClientIDValid = listResponse.data[0].ClientID;



                        if (ClientIDValid == 0) {



                            mensaje.innerHTML =
                                "Your National Registration Number is already associated with an application in our system. For additional assistance<br> ";
                            mensaje.innerHTML +=
                                "Please contact NHC. Phone: 1-246-536-5300 Email: NHC.CustomerService@barbados.gov.bb";

                            mensaje.style.color =
                                "red"; // Mensaje de error en rojo
                        } else {



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
                                        "The number you entered is invalid. Please check it and try again.";
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
                                    jQuery("#applicant_date_birth").val(DOB).css({
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
                                    jQuery("#salutation").val(Surname)
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

                        } /*end validation client id */


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
        //end NRN applicant

        //NRN COAPPLICANT
        document.getElementById('coapplicant_national_registration_number').addEventListener('input',
            function() {
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
                jQuery("#coapplicant_salutation").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });
                jQuery("#coapplicant_first").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_middle").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_maiden_name").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_date_birth").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery(".co_children_age").val("").css({
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
                                type_form: "Purchase",
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
                                        "The number you entered is invalid. Please check it and try again.";
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
                                    jQuery("#coapplicant_salutation").val(Surname);
                                    jQuery("#coapplicant_salutation").css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    jQuery("#coapplicant_first").val(FirstName);
                                    jQuery("#coapplicant_first").css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;
                                    //field LastName
                                    jQuery("#coapplicant_middle").val(LastName)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                    //field MiddleName
                                    jQuery("#coapplicant_maiden_name").val(MiddleName)
                                        .css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                    //field DOB
                                    jQuery("#coapplicant_date_birth").val(DOB).css({
                                        'pointer-events': 'none',
                                        'background-color': '#f5f5f5',
                                        'cursor': 'not-allowed'
                                    });;

                                    jQuery(".co_children_age").val(Gender).css({
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

        /*********************/
        // END NRN COAPPLICANT


        //alternative_amount
        const alternative_amount = document.getElementById('alternative_amount');

        alternative_amount.addEventListener('input', function(e) {
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
        //alternative_amount2
        const alternative_amount2 = document.getElementById('alternative_amount2');

        alternative_amount2.addEventListener('input', function(e) {
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

        //salary

        const cosalaryInput = document.getElementById('co_salary');

        cosalaryInput.addEventListener('input', function(e) {
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


        //campos appllicant
        document.getElementById('ButtonNext').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('GroupFields').classList.toggle('mostrar');
            document.getElementById('groupCheckbox').classList.toggle('mostrar');
            document.getElementById('buttonSubmit').classList.toggle('mostrar');
            buttonSubmit
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


                const fieldsToAdd = [
                    'coapplicant_national_registration_number',
                    'coapplicant_email',
                    'coapplicant_salutation',
                    'coapplicant_first',
                    'coapplicant_middle',
                    'coapplicant_maiden_name',
                    'coapplicant_date_birth',
                    'coapplicant_tamis_no',
                    'coapplicant_address',
                    'coapplicant_address2',
                    'coapplicant_address3',
                    'coapplicant_parish',
                    'coapplicant_phone_home',
                    'coapplicant_phone_work',
                    'coapplicant_phone_cell',
                    'co_marital_status',
                    'co_applicant_citizenship',
                    'co_applicant_country_of_residence',
                    'co_app_employer_field',
                    'co_app_occupation_field',
                    'co_app_period_of_employment',
                    'co_app_salary',
                    'co_app_pay_period',
                    'co_app_employment_status'
                ];

                fieldsToAdd.forEach(name => {
                    const field = document.querySelector(`[name="${name}"]`);
                    if (field) {
                        field.setAttribute('required', 'required');
                    }
                });





            } else {
                button.classList.remove('buttonRed');
                button.textContent = 'Add Co-Applicant';


                const fieldsToRemoveReq = [
                    'coapplicant_national_registration_number',
                    'coapplicant_email',
                    'coapplicant_salutation',
                    'coapplicant_first',
                    'coapplicant_middle',
                    'coapplicant_maiden_name',
                    'coapplicant_date_birth',
                    'coapplicant_tamis_no',
                    'coapplicant_address',
                    'coapplicant_address2',
                    'coapplicant_address3',
                    'coapplicant_parish',
                    'coapplicant_phone_home',
                    'coapplicant_phone_work',
                    'coapplicant_phone_cell',
                    'co_marital_status',
                    'co_applicant_citizenship',
                    'co_applicant_country_of_residence',
                    'co_app_employer_field',
                    'co_app_occupation_field',
                    'co_app_period_of_employment',
                    'co_app_salary',
                    'co_app_pay_period',
                    'co_app_employment_status'
                ];

                fieldsToRemoveReq.forEach(name => {
                    const field = document.querySelector(`[name="${name}"]`);
                    if (field) {
                        field.removeAttribute('required', 'required');
                    }
                });

                //remueve los localstorage de los campos de coapplicant
                const fieldsToRemove = [
                    'coapplicant_national_registration_number',
                    'coapplicant_email',
                    'coapplicant_salutation',
                    'coapplicant_first',
                    'coapplicant_middle',
                    'coapplicant_maiden_name',
                    'coapplicant_date_birth',
                    'coapplicant_tamis_no',
                    'coapplicant_address',
                    'coapplicant_address2',
                    'coapplicant_address3',
                    'coapplicant_parish',
                    'coapplicant_phone_home',
                    'coapplicant_phone_work',
                    'coapplicant_phone_cell',
                    'co_marital_status',
                    'co_applicant_citizenship',
                    'co_applicant_country_of_residence',
                    'co_app_employer_field',
                    'co_app_occupation_field',
                    'co_app_period_of_employment',
                    'co_app_salary',
                    'co_app_pay_period',
                    'co_app_employment_status'
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

        //number national 1
        const inputFields = document.querySelectorAll("#applicant_national_registration_numberxx");
        let typingTimer; // Variable para el temporizador
        const doneTypingInterval = 500; // Tiempo de espera después de la última pulsación (en ms)


        inputFields.forEach(input => {
            input.addEventListener("input", function() {
                clearTimeout(typingTimer); // Reinicia el temporizador

                let number = this.value;
                let validationResult = document.getElementById("validation-result");


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

                jQuery("#applicant_maiden_name").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#applicant_date_birth").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });



                jQuery("#applicant_gender").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#salutation").val("").css({
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
                                    type_form: "Purchase",
                                    co_app: 0

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

                                    function isDataEmpty3(response) {
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

                                    if (isDataEmpty3(parsedData)) {
                                        //desbloquea los campos par que la persona pueda escribri su informacion
                                        console.log("La información está vacía.");

                                        validationResult.textContent =
                                            "The number you entered is invalid. Please check it and try again.";
                                        validationResult.style.color =
                                            "red"; // Mensaje de error en rojo

                                        jQuery("#MessageInformation").hide();
                                        jQuery("#ButtonNext").hide();
                                        jQuery(".HideArea").hide();



                                    } else {
                                        jQuery(".HideArea").show();
                                        jQuery("#MessageInformation").show();
                                        jQuery("#ButtonNext").show();
                                        //bloquea los campos nombre y fecha de nac para que la persona no pueda escribri su informacion
                                        //FirstName,MiddleName,LastName,DOB FechaNac
                                        var FirstName = parsedData.data[0]
                                            .FirstName;
                                        var LastName = parsedData.data[0].LastName;
                                        var MiddleName = parsedData.data[0]
                                            .MiddleName;
                                        var DOB = parsedData.data[0].DOB;
                                        var Gender = parsedData.data[0].Gender;
                                        var Surname = parsedData.data[0].Salutation;



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
                                        jQuery("#applicant_maiden_name").val(
                                            MiddleName).css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                        //field DOB
                                        jQuery("#applicant_date_birth").val(DOB)
                                            .css({
                                                'pointer-events': 'none',
                                                'background-color': '#f5f5f5',
                                                'cursor': 'not-allowed'
                                            });;
                                        //field Gender
                                        //jQuery("#applicant_first").val(FirstName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;

                                        //field Gender
                                        jQuery("#applicant_gender").val(Gender)
                                            .css({
                                                'pointer-events': 'none',
                                                'background-color': '#f5f5f5',
                                                'cursor': 'not-allowed'
                                            });;

                                        //field Saludation
                                        jQuery("#salutation").val(Surname).css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;

                                        validationResult.textContent =
                                            "Valid number";
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
        const inputFields2 = document.querySelectorAll("#coapplicant_national_registration_numberxx");
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


                jQuery("#coapplicant_first").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_middle").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_maiden_name").val("").css({
                    'pointer-events': '',
                    'background-color': '',
                    'cursor': ''
                });

                jQuery("#coapplicant_date_birth").val("").css({
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
                                    type_form: "Purchase"
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

                                        jQuery(".hideArea2").hide();
                                        jQuery("#MessageInformation").hide();
                                        jQuery("#ButtonNext").hide();


                                    } else {

                                        jQuery(".hideArea2").show();
                                        jQuery("#MessageInformation").show();
                                        jQuery("#ButtonNext").show();
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
                                        jQuery("#coapplicant_first").val(FirstName);
                                        jQuery("#coapplicant_first").css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                        //field LastName
                                        jQuery("#coapplicant_middle").val(LastName)
                                            .css({
                                                'pointer-events': 'none',
                                                'background-color': '#f5f5f5',
                                                'cursor': 'not-allowed'
                                            });;
                                        //field MiddleName
                                        jQuery("#coapplicant_maiden_name").val(
                                            MiddleName).css({
                                            'pointer-events': 'none',
                                            'background-color': '#f5f5f5',
                                            'cursor': 'not-allowed'
                                        });;
                                        //field DOB
                                        jQuery("#coapplicant_date_birth").val(DOB)
                                            .css({
                                                'pointer-events': 'none',
                                                'background-color': '#f5f5f5',
                                                'cursor': 'not-allowed'
                                            });;
                                        //field Gender
                                        //jQuery("#applicant_first").val(FirstName).css({'pointer-events': 'none','background-color': '#f5f5f5','cursor': 'not-allowed'});;

                                        validationResult2.textContent =
                                            "Valid number";
                                        validationResult2.style.color =
                                            "green"; // Mensaje de éxito en verde



                                    }

                                }


                            })
                            .catch(error => {
                                document.getElementById("validation-result2")
                                    .textContent = "Error en la validación";
                                console.error("Error:", error);
                            });
                    }, doneTypingInterval2);
                }
            });
        });
        //////////


        document.getElementById('applicant_national_registration_number').addEventListener('input',
            function(
                e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElemen tById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });



        document.getElementById('coapplicant_national_registration_number').addEventListener(
            'input blur change',
            function(
                e) {
                this.value = this.value.replace(/\D/g, ''); // Remove non-digits
                //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
            });

        //tamis number
        document.getElementById('applicant_tamis_no').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, ''); // Remove non-digits
            //document.getElementById('nrn-error').style.display = this.value.length === 10 ? 'none' : 'inline';
        });


        //Are you currently Renting?

        const $rentingInputs = $(".inputRenting");
        const $boxCurrentRenting = $(".boxCurrentRenting"); // Asegúrate que el selector es correcto

        if ($boxCurrentRenting.length === 0) {
            console.error("❌ Error: No se encontró el elemento con clase 'boxCurrentRenting'");
            return;
        }

        $rentingInputs.change(function() {
            if ($(this).val() === "Yes") {
                $boxCurrentRenting.show(); // Mostrar el div
            } else {
                $boxCurrentRenting.hide(); // Ocultar el div
            }
        })


        //Do you wish us to provide a housing solution on land you own?

        const $yourownland = $(".yourownland");
        const $landLotBox = $(".landLotBox"); // Asegúrate que el selector es correcto

        if ($boxCurrentRenting.length === 0) {
            console.error("❌ Error: No se encontró el elemento con clase 'landLotBox'");
            return;
        }

        $yourownland.change(function() {
            if ($(this).val() === "Yes") {
                $landLotBox.show(); // Mostrar el div
            } else {
                $landLotBox.hide(); // Ocultar el div
            }
        })


        //Are you a tenant of the land on which you wish to build your Housing solution?

        const $boxRadioTenant = $(".boxRadioTenant");
        const $landlordAgentBox = $(".landlordAgentBox"); // Asegúrate que el selector es correcto

        if ($landlordAgentBox.length === 0) {
            console.error("❌ Error: No se encontró el elemento con clase 'landlordAgentBox'");
            return;
        }

        $boxRadioTenant.change(function() {
            if ($(this).val() === "Yes") {
                $landlordAgentBox.show(); // Mostrar el div
            } else {
                $landlordAgentBox.hide(); // Ocultar el div
            }
        })
        /////////////////////


        ///Mortage, Loan and Cash Full Pay
        //Mortage
        const $financeBox = $(".financeBox");
        const $boxGroup1 = $(".boxGroup1"); // Asegúrate que el selector es correcto

        if ($boxGroup1.length === 0) {
            console.error("❌ Error: No se encontró el elemento con clase 'FieldsMortage'");
            return;
        }

        $financeBox.change(function() {


            if ($(this).val() === "Loan") {
                $boxGroup1.show(); // Mostrar el div

                const input = document.querySelector('input[name="mortgage_or_loan"]');

                // Mostrar el campo (si estuviera oculto)
                input.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input.setAttribute('required', true);

                // Limpia su valor
                input.value = '';

                const input2 = document.querySelector('input[name="the_amount_of_deposit"]');

                // Mostrar el campo (si estuviera oculto)
                input2.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input2.setAttribute('required', true);

                // Limpia su valor
                input2.value = '';

                const input3 = document.querySelector('input[name="qualifyngamount"]');

                // Mostrar el campo (si estuviera oculto)
                input3.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input3.setAttribute('required', true);

                // Limpia su valor
                input3.value = '';

                //mortage file
                const mortageFile1 = document.querySelector('#mortage_certificate');

                // Mostrar el campo (si estuviera oculto)
                mortageFile1.style.display = 'none'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                mortageFile1.removeAttribute('required');

                // Limpia su valor
                mortageFile1.value = '';



            }

            if ($(this).val() === "Mortgage") {


                $boxGroup1.show(); // Mostrar el div



                const input = document.querySelector('input[name="mortgage_or_loan"]');

                // Mostrar el campo (si estuviera oculto)
                input.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input.setAttribute('required', true);

                // Limpia su valor
                input.value = '';

                const input2 = document.querySelector('input[name="the_amount_of_deposit"]');

                // Mostrar el campo (si estuviera oculto)
                input2.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input2.setAttribute('required', true);

                // Limpia su valor
                input2.value = '';

                const input3 = document.querySelector('input[name="qualifyngamount"]');

                // Mostrar el campo (si estuviera oculto)
                input3.style.display = 'block'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input3.setAttribute('required', true);

                // Limpia su valor
                input3.value = '';

                //mortage File

                //mortage_certificate file
                const mortageFile2 = document.querySelector('#mortage_certificate');

                // Ocultar el campo
                mortageFile2.style.display = 'block';

                // Quitar el atributo required
                mortageFile2.setAttribute('required', true);

                // Limpiar el valor
                mortageFile2.value = '';

            }

            if ($(this).val() === "Full Cash Payment") {
                $boxGroup1.hide(); // Ocultar el div

                const input = document.querySelector('input[name="mortgage_or_loan"]');

                // Mostrar el campo (si estuviera oculto)
                input.style.display = 'none'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input.removeAttribute('required');

                // Limpia su valor
                input.value = '';

                const input2 = document.querySelector('input[name="the_amount_of_deposit"]');

                // Mostrar el campo (si estuviera oculto)
                input2.style.display = 'none'; // o usa otra lógica según tu HTML

                // Agrega el atributo required
                input2.removeAttribute('required');

                // Limpia su valor
                input2.value = '';

                const input3 = document.querySelector('input[name="qualifyngamount"]');

                // Mostrar el campo (si estuviera oculto)
                input3.style.display = 'none'; // o usa otra lógica según tu HTML

                // Agrega el atributo false
                input3.removeAttribute('required');

                // Limpia su valor
                input3.value = '';

                //mortage_certificate file
                const mortageFile3 = document.querySelector('#mortage_certificate');

                // Ocultar el campo
                mortageFile3.style.display = 'none';

                // Quitar el atributo required
                mortageFile3.removeAttribute('required');

                // Limpiar el valor
                mortageFile3.value = '';
            }
        })

        //Cash Full
        const $financeBox2 = $(".financeBox");
        const $boxGroup2 = $(".boxGroup2"); // Asegúrate que el selector es correcto

        if ($boxGroup2.length === 0) {
            console.error("❌ Error: No se encontró el elemento con clase 'boxGroup2'");
            return;
        }

        $financeBox2.change(function() {
            if ($(this).val() === "Full Cash Payment") {
                $boxGroup2.show(); // Mostrar el div
                jQuery(".boxGroup2 input").attr("required");

                const bankstatements = document.getElementById('bankstatements');
                if (bankstatements) {
                    bankstatements.setAttribute('required', 'required');
                }


            } else {
                $boxGroup2.hide(); // Ocultar el div
                const bankstatements = document.getElementById('bankstatements');
                if (bankstatements) {
                    bankstatements.removeAttribute('required', 'required');
                }
            }
        })

        //date Birth
        flatpickr("#applicant_date_birth", {
            dateFormat: "Y-m-d", // Formato de fecha
            minDate: "today", // Limita la selección a fechas futuras
        });


        //coapplicant
        flatpickr("#co_applicant_date_birth", {
            dateFormat: "Y-m-d", // Formato de fecha
            minDate: "today", // Limita la selección a fechas futuras
        });




        /***begin family fields**/
        /* let i = 0;

        document.getElementById("add").addEventListener("click", function() {
            ++i;

            const table = document.getElementById("dynamicTable");
            const row = document.createElement("tr");

            row.innerHTML = `
   <td><input type="number"  name="addmore[${i}][adult_person]" placeholder="Enter Adult" class="form-control adults"   value="0" min="0" /></td>
   <td><input type="number" name="addmore[${i}][children_person]" placeholder="Enter Children" class="form-control children"   value="0" min="0" /> </td>
   <td><button type="button" class="btn btn-danger remove-tr">delete</button></td>
   `;

            table.querySelector('tbody').appendChild(row);
        });*/

        document.addEventListener('click', function(event) {

            if (event.target && event.target.classList.contains('remove-tr')) {
                event.target.closest('tr').remove();
            }
        });

        // Get buttons and input fields
        const increaseAdultsBtns = document.querySelectorAll('.increase-adults');
        const decreaseAdultsBtns = document.querySelectorAll('.decrease-adults');
        const adultsInputs = document.querySelectorAll('.adults');

        const increaseChildrenBtns = document.querySelectorAll('.increase-children');
        const decreaseChildrenBtns = document.querySelectorAll('.decrease-children');
        const childrenInputs = document.querySelectorAll('.children');

        // Increase/Decrease adults


        increaseAdultsBtns.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                adultsInputs[index].value = parseInt(adultsInputs[index].value) + 1;
            });
        });

        // Disminuir adultos
        decreaseAdultsBtns.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                if (adultsInputs[index].value > 0) {
                    adultsInputs[index].value = parseInt(adultsInputs[index].value) - 1;
                }

                if (parseInt(adultsInputs[index].value) < 0) {
                    e.preventDefault();
                    alert('Adult size cannot be negative.');
                }



            });
        });

        // Aumentar niños
        increaseChildrenBtns.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                childrenInputs[index].value = parseInt(childrenInputs[index].value) + 1;
            });
        });

        // Disminuir niños
        decreaseChildrenBtns.forEach((btn, index) => {
            btn.addEventListener('click', function() {
                if (childrenInputs[index].value > 0) {
                    childrenInputs[index].value = parseInt(childrenInputs[index].value) - 1;
                }

                if (parseInt(childrenInputs.value) < 0) {
                    e.preventDefault();
                    alert('Children size cannot be negative.');
                }

            });
        });


        /**end fields  family**/

    })
</script>
