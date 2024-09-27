@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
    <style>
        .list-layout .listing-img-container:after {
            background: linear-gradient(to bottom, transparent 55%, transparent);
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


    <!-- Container / Start -->
    <div class="container">

        <div class="row">


            <!-- Contact Form -->
            <div class="col-md-12 col-sm-12">

                <section id="contact">
                    <h4 class="text-center headline margin-top-35 margin-bottom-35">
                        APPLICATION FORM FOR THE PURCHASE OF LAND OR PROPERTY <br>USE BLOCK LETTERS</h4>

                    <p class="text-center headline margin-top-35 margin-bottom-35">
                        PLEASE ENSURE THIS FORM IS FULLY COMPLETED, INCOMPLETE FORMS CANNOT BE PROCESSED.
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

                    <form method="post" enctype="multipart/form-data"
                        action="{{ route('application-for-the-purchase.apply') }}" name="applicationpurchase"
                        id="applicationpurchase" autocomplete="on">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <label><b>NAME: Mr. / Miss / Mrs.</b></label>
                                                <select name="salutation" id="salutation">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="applicant_surname" type="text" id="applicant_surname"
                                                placeholder="Surname" required="required" />
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="applicant_first" type="text" id="applicant_first"
                                                placeholder="First" required="required" />
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!----------->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Middle</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_middle" type="text" id="applicant_middle"
                                                        placeholder="Middle" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>Maiden Name:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_maiden_name" type="text"
                                                        id="applicant_maiden_name" placeholder="Middle"
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
                                        <div class="col-md-6">
                                            <label><b>NATIONAL REGISTRATION NUMBER:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_national_registration_number" type="text"
                                                        id="applicant_national_registration_number"
                                                        placeholder="National Registration Number" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>TAMIS NO:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_tamis_no" type="text" id="applicant_tamis_no"
                                                        placeholder="Tamis No." required="required" />
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
                                            <label><b>ADDRESS:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_address" type="text" id="applicant_address"
                                                        placeholder="Address" required="required" />
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
                                            <label><b>DATE OF BIRTH: Self: mm-dd-yyyy</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_date_birth" type="date"
                                                        id="applicant_date_birth" placeholder="Date of Birth"
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
                                    <label for="">TELEPHONE NUMBER:</label>
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
                                            <label><b>EMAIL:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_email" type="text" id="applicant_email"
                                                        placeholder="Email" required="required" />
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
                                                <div class="col-md-3">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="marital_status" value="SINGLE"
                                                                checked> SINGLE
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="marital_status" value="MARRIED">
                                                            MARRIED
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="marital_status" value="WIDOWED">
                                                            WIDOWED
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="marital_status" value="DIVORCED">
                                                            DIVORCED
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div>
                                                        <label>
                                                            <input type="radio" name="marital_status"
                                                                value="SEPARATED">
                                                            SEPARATED
                                                        </label>

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
                                        <div class="col-md-6">
                                            <label><b>CITIZENSHIP:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_citizenship" type="text"
                                                        id="applicant_citizenship" placeholder="Citizenship"
                                                        required="required" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>COUNTRY OF RESIDENCE:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="applicant_country_of_residence" type="text"
                                                        id="applicant_country_of_residence"
                                                        placeholder="Country of Residence" required="required" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--CoApplicant-->
                            <div class="col-md-12">
                                <label><b>(Optional)</b></label>
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <label><b>NAME: Mr. / Miss / Mrs.</b></label>
                                                <select name="coapplicant_salutation" id="coapplicant_salutation">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Miss">Miss</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="coapplicant_surname" type="text" id="coapplicant_surname"
                                                placeholder="Surname" />
                                        </div>
                                        <div class="col-md-4">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="coapplicant_first" type="text" id="coapplicant_first"
                                                placeholder="First" />
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!----------->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><b>Middle</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_middle" type="text"
                                                        id="coapplicant_middle" placeholder="Middle" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>Maiden Name:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_maiden_name" type="text"
                                                        id="coapplicant_maiden_name" placeholder="Middle" />
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
                                        <div class="col-md-6">
                                            <label><b>NATIONAL REGISTRATION NUMBER:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_national_registration_number" type="text"
                                                        id="coapplicant_national_registration_number"
                                                        placeholder="National Registration Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>TAMIS NO:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_tamis_no" type="text"
                                                        id="coapplicant_tamis_no" placeholder="Tamis No." />
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
                                            <label><b>ADDRESS:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_address" type="text"
                                                        id="coapplicant_address" placeholder="Address" />
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
                                            <label><b>DATE OF BIRTH: Self: mm-dd-yyyy</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_date_birth" type="date"
                                                        id="coapplicant_date_birth" placeholder="Date of Birth" />
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
                                    <label for="">TELEPHONE NUMBER:</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label><b>Home:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_phone_home" type="text"
                                                        id="coapplicant_phone_home" placeholder="Home" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>Work:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_phone_work" type="text"
                                                        id="coapplicant_phone_work" placeholder="Work" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label><b>Cell:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="coapplicant_phone_cell" type="text"
                                                        id="coapplicant_phone_cell" placeholder="Cell" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->
                            <!--------------->

                            <!--PERIOD OF EMPLOYMENT-->
                            <div class="col-md-6">
                                <div>
                                    <label><b>PERIOD OF EMPLOYMENT</b></label>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label><b>Applicant:</b></label>
                                            <input name="applicant_period" type="text" id="applicant_period"
                                                placeholder="Applicant" />
                                        </div>
                                        <div class="col-md-12">
                                            <label><b>Co-Applicant:</b></label>
                                            <input name="co_applicant_period" type="text" id="co_applicant"
                                                placeholder="Co-Applicant" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label><b>OCCUPATION</b></label>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label><b>Applicant:</b></label>
                                            <input name="applicant_occup" type="text" id="applicant_occup"
                                                placeholder="Applicant" />
                                        </div>
                                        <div class="col-md-12">
                                            <label><b>Co-Applicant:</b></label>
                                            <input name="co_applicant_occup" type="text" id="co_applicant_occup"
                                                placeholder="Co-Applicant" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--------------->

                            <!--EMPLOYER:-->
                            <div class="col-md-6">
                                <div>
                                    <label><b>EMPLOYER:</b></label>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label><b>Applicant:</b></label>
                                            <input name="applicant_employer" type="text" id="applicant_employer"
                                                placeholder="Applicant" />
                                        </div>
                                        <div class="col-md-12">
                                            <label><b>Co-Applicant:</b></label>
                                            <input name="co_applicant_employer" type="text" id="co_applicant_employer"
                                                placeholder="Co-Applicant" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label><b>SALARY::</b></label>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label><b>Applicant:</b></label>
                                            <input name="applicant_salary" type="text" id="applicant_salary"
                                                placeholder="Applicant" />
                                        </div>
                                        <div class="col-md-12">
                                            <label><b>Co-Applicant:</b></label>
                                            <input name="co_applicant_salary" type="text" id="co_applicant_salary"
                                                placeholder="Co-Applicant" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--------------->

                            <!--GOVERNMENT:-->
                            <div class="col-md-6">
                                <div class="row row-cols-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>GOVERNMENT:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="government" value="applicant_government" type="radio"
                                                    id="government" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="government" value="coapplicant_government" type="radio"
                                                    id="government" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>PRIVATE:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="private" value="applicant_private" type="radio"
                                                    id="private" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="private" value="coapplicant_private" type="radio"
                                                    id="private" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>SELF:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="self" value="applicant_self" type="radio"
                                                    id="self" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="self" value="coapplicant_selfe" type="radio"
                                                    id="self" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row row-cols-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>MONTHLY:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="monthly" value="applicant_monthly" type="radio"
                                                    id="monthly" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="monthly" value="coapplicant_monthly" type="radio"
                                                    id="monthly" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>WEEKLY:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="weekly" value="applicant_weekly" type="radio"
                                                    id="weekly" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="weekly" value="coapplicant_weekly" type="radio"
                                                    id="weekly" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label><b>FORT-NIGHTLY:</b></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input name="forth_nightly" value="applicant_forth_nightly"
                                                    type="radio" id="forth_nightly" />
                                            </div>
                                            <div class="col-md-4">
                                                <input name="forth_nightly" value="coapplicant_forth_nightly"
                                                    type="radio" id="forth_nightly" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------------>

                            <!--HOUSE TYPE-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>HOUSE TYPE:</b></label>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label><b>Timber:</b></label>
                                            <input name="house_type" value="Timber" type="radio" id="timber" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>Wall:</b></label>
                                            <input name="house_type" value="Wall" type="radio" id="Wall" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>FORT-NIGHTLY:</b></label>
                                            <input name="house_type" value="Steel Frame" type="radio"
                                                id="Steel_Frame" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--HOUSE TYPE-->




                            <!--PURCHASING OPTIONS:-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>PURCHASING OPTIONS:</b></label>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label><b>LAND:</b></label>
                                            <input name="purchasing_options" value="Land" type="radio"
                                                id="timber" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>PROPERTY:</b></label>
                                            <input name="purchasing_options" value="PROPERTY" type="radio"
                                                id="Wall" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>RENT TO OWN:</b></label>
                                            <input name="purchasing_options" value="RENT TO OWN" type="radio"
                                                id="Steel_Frame" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--PURCHASING OPTIONS:-->

                            <!--PREFERRED HOUSE TYPE:-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>IF YOU INTEND TO PURCHASE PROPERTY, FILL OUT THIS SECTION:</b></label>
                                </div>
                            </div>
                            <!--PREFERRED HOUSE TYPE:-->


                            <!--PREFERRED HOUSE TYPE:-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>PREFERRED HOUSE TYPE:</b></label>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label><b>2 Bedroom:</b></label>
                                            <input name="preferedhousetype" value="2Bedroom" type="radio"
                                                id="2Bedroom" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>3 Bedroom:</b></label>
                                            <input name="preferedhousetype" value="3Bedroom" type="radio"
                                                id="3Bedroom" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--PREFERRED HOUSE TYPE:-->

                            <!--NO OF OCCUPANTS:-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>NO OF OCCUPANTS:</b></label>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label><b>Adults:</b></label>
                                            <input name="no_of_occupants" value="Adults" type="radio"
                                                id="Adults" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>Children:</b></label>
                                            <input name="no_of_occupants" value="Children" type="radio"
                                                id="Children" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--NO OF OCCUPANTS:-->



                            <!----------->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label><b>CHILDREN'S AGES:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="children_ages" type="text" id="ages"
                                                        placeholder="Children´s Ages" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----------->

                            <!--ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?:</b></label>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <label><b>Yes:</b></label>
                                            <input name="disabilitieswithinthehousehold" value="yes" type="radio"
                                                id="Adults" />
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>No:</b></label>
                                            <input name="disabilitieswithinthehousehold" value="No" type="radio"
                                                id="Children" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?-->

                            <!---ALTERNATIVE SOURCES--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>ALTERNATIVE SOURCES OF INCOME IN HOUSEHOLD: (Maintenance, Alimony, Second Job,
                                            Adults working but not listed on this application etc…)</b></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="alternative" type="text" id="alternative" placeholder=""
                                                required="required" />
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>Amount</b></label>
                                            <input name="alternative_amount" type="text" id="alternative_amount"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label style="color:#fff"><b>.</b></label>
                                            <input name="alternative1" type="text" id="alternative" placeholder=""
                                                required="required" />
                                        </div>
                                        <div class="col-md-6">
                                            <label><b>Amount</b></label>
                                            <input name="alternative_amount2" type="text" id="alternative_amount"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---ALTERNATIVE SOURCES --->


                        <!--Are you currently renting?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>Are you currently renting?</b></label>
                                <div class="row">

                                    <div class="col-md-4">
                                        <label><b>Yes:</b></label>
                                        <input name="areyourenting" value="Yes" type="radio" />
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No:</b></label>
                                        <input name="areyourenting" value="No" type="radio" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Are you currently renting?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>If yes, how much is your rent?</b></label>
                                <div class="row">

                                    <div class="col-md-12">
                                        <input name="ifyeshowmuch" type="text" placeholder="$" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Are you currently renting?-->

                        <!--Do you have your own land and wish us to provide you with a Housing solution?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>Do you have your own land and wish us to provide you with a Housing
                                        solution?</b></label>
                                <div class="row">

                                    <div class="col-md-4">
                                        <label><b>Yes:</b></label>
                                        <input name="yourownland" value="Yes" type="radio" />
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No:</b></label>
                                        <input name="yourownland" value="No" type="radio" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Do you have your own land and wish us to provide you with a Housing solution?-->

                        <!--Are you a tenant of the land on which you wish to build your Housing solution?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>Are you a tenant of the land on which you wish to build your Housing
                                        solution?</b></label>
                                <div class="row">

                                    <div class="col-md-4">
                                        <label><b>Yes:</b></label>
                                        <input name="tenant" value="Yes" type="radio" />
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>No:</b></label>
                                        <input name="tenant" value="No" type="radio" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Are you a tenant of the land on which you wish to build your Housing solution?-->


                        <!--Are you currently renting?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>(If yes, you MUST have a letter of permission from the
                                        landlord/agent.)</b></label>
                                <div class="row">

                                    <div class="col-md-12">
                                        <input name="land_or_agent" type="text" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Are you currently renting?-->

                        <!--FINANCING OF PROPERTY/LAND:-->
                        <div class="col-md-12">
                            <div>
                                <label style="text-align: center"><b>FINANCING OF PROPERTY/LAND:</b></label>
                            </div>
                        </div>
                        <!--FINANCING OF PROPERTY/LAND:-->


                        <!--How will you finance the purchase of property / land?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>How will you finance the purchase of property / land?</b></label>
                                <div class="row">

                                    <div class="col-md-4">
                                        <label><b>Mortgage:</b></label>
                                        <input name="financethepurchsaseproporty" value="Mortgage" type="radio" />
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Loan:</b></label>
                                        <input name="financethepurchsaseproporty" value="Loan" type="radio" />
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Full Cash Payment:</b></label>
                                        <input name="financethepurchsaseproporty" value="Full Cash Payment"
                                            type="radio" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--How will you finance the purchase of property / land?-->


                        <!--If mortgage or loan, please indicate a potential lending institution of your choice-->
                        <div class="col-md-12">
                            <div>
                                <label><b>If mortgage or loan, please indicate a potential lending institution of your
                                        choice</b></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="mortgage_or_loan" type="text" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--If mortgage or loan, please indicate a potential lending institution of your choice-->

                        <!--What is the amount of deposit available?-->
                        <div class="col-md-12">
                            <div>
                                <label><b>What is the amount of deposit available?</b></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="the_amount_of_deposit" type="text" placeholder="$" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--What is the amount of deposit available?-->

                        <!--APPLICATION FOR HOUSING EVERY LAST PERSON (H.E.L.P):-->
                        <div class="col-md-12" style="margin-bottom:20px">
                            <div>
                                <h2 style="text-align: center;margin-bottom:0px"><b>APPLICATION FOR HOUSING EVERY LAST
                                        PERSON (H.E.L.P)</b>
                                </h2>
                                <h3 style="text-align: center;margin-bottom:0px"><b>PREFERRED LOCATION OF LAND/PROPERTY</b>
                                </h3>
                                <h4 style="text-align: center;margin-bottom:0px"><b>Tick one only</b></h4>
                            </div>
                        </div>
                        <!--APPLICATION FOR HOUSING EVERY LAST PERSON (H.E.L.P):-->


                        <!--PREFERRED LOCATION OF LAND/PROPERT:-->
                        <div class="col-md-12 mt-5">
                            <div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">(HOUSE & LAND)
                                                PROPERTY (STEEL FRAME ONLY)</th>
                                            <th scope="col">HOUSE & LAND)
                                                MIXED PROPERTIES
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="BULLENS, ST. JAMES" type="radio"
                                                        style="margin:0;" />BULLENS, ST. JAMES
                                                </div>
                                            </td>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="LOWER BURNEY, ST. MICHAEL"
                                                        type="radio" style="margin:0;" />LOWER BURNEY, ST. MICHAEL
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="BRIGHTON, ST. GEORGE"
                                                        type="radio" style="margin:0;" />BRIGHTON, ST. GEORGE
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="COCONUT HALL, ST. LUCY"
                                                        type="radio" style="margin:0;" />COCONUT HALL, ST. LUCY
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="RIVER CRESCENT, ST. PHILIP"
                                                        type="radio" style="margin:0;" />RIVER CRESCENT, ST. PHILIP
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div style="display:flex;align-items: center;"><input
                                                        name="land_or_property" value="CONCORDIA GARDENS, ST. PHILIP"
                                                        type="radio" style="margin:0;" />CONCORDIA GARDENS, ST. PHILIP
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--PREFERRED LOCATION OF LAND/PROPERT:-->


                        <!--Are you a tenant of the land on which you wish to build your Housing solution?-->
                        <div class="col-md-12">
                            <div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label><b>Signature(s): Applicant:</b></label>
                                        <input name="signature_applicant" type="text" placeholder="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Co-Applicant:</b></label>
                                        <input name="signature_coapplicant" type="text" placeholder="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Are you a tenant of the land on which you wish to build your Housing solution?-->

                        <!--dateend-->
                        <div class="col-md-12">
                            <div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <label><b>Date:</b></label>
                                        <input name="dateend" type="date" placeholder="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--dateend-->

                        <!--NOTE-->
                        <div class="col-md-12">
                            <div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <b> NOTE:<br>
                                            1. The Corporation does not sell land/property to persons who already own
                                            land/property.<br>
                                            2. The NHC has the right to assign you to the first available development since
                                            a
                                            property may not be available in the parish of your choice.<br>
                                            3. Low Income lots range in size from approximately 3,000 to 4,000 sq. ft only.
                                            <br>
                                        </b>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--NOTE-->


                        <!--dateend-->
                        <div class="col-md-12">
                            <div>
                                <div class="row">

                                    <div class="col-md-12">
                                        <input type="submit" class="submit button" id="submit" value="Submit" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--dateend-->






            </div>



            </form>
            </section>
        </div>
        <!-- Contact Form / End -->

    </div>

    </div>

    <!-- Container / End -->



@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('applicationrental').addEventListener('submit', function(event) {
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

        });
    });
</script>
