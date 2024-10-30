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
                        TO BE RETURNED BY APPLICANT(S)</h4>

                    <p class="text-center headline margin-top-35 margin-bottom-35">
                        (Income not exceeding $3,000 Monthly)<br>
                        Required Documents: 1) Two Recent Pay slips, 2) One ID Card, 3) One Job Letter, 4) One Passport Size
                        Photo <br>
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
                            <div class="col-md-12">
                                <div>
                                    <label><b>APPLICANT: Mr. Miss. Mrs.</b></label>
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
                                    </div>

                                </div>
                            </div>

                            <!--Address-->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="applicant_address" type="text" id="applicant_address"
                                                placeholder="Address" required="required" />
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

                                        <div class="col-md-4">
                                            <input name="co_applicant_surname" type="text" id="co_applicant_surname"
                                                placeholder="Surname" required="required" />
                                        </div>
                                        <div class="col-md-4">
                                            <input name="co_applicant_name" type="text" id="co_applicant_name"
                                                placeholder="Name" required="required" />
                                        </div>

                                        <div class="col-md-4">
                                            <input name="co_applicant_middle" type="text" id="co_applicant_middle"
                                                placeholder="Middle" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--------------->

                            <!---ADDRESS--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>Address</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="co_applicant_address" type="text" id="co_applicant_address"
                                                placeholder="Address" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---ADDRESS--->

                            <!---NATIONAL REGISTRATION NUMBER--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>NATIONAL REGISTRATION NUMBER</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="national_registration_number" type="number"
                                                id="national_registration_number" placeholder="National Registration Number"
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---ADDRESS--->

                            <!---EMPLOYER:--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>EMPLOYER:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="employer" type="text" id="employer" placeholder="Employer"
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---EMPLOYER:--->

                            <!---OCCUPATION::--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>OCCUPATION:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="occupation" type="text" id="occupation"
                                                placeholder="Occupation" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---OCCUPATION::--->

                            <!---CITIZENSHIP:::--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>CITIZENSHIP:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="citizenship" type="text" id="citizenship"
                                                placeholder="Citizenship" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---CITIZENSHIP:::--->

                            <!---TELEPHONE:::--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>TELEPHONE:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="telephone" type="tel" id="telephone"
                                                placeholder="Telephone" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---TELEPHONE:::--->

                            <!---INCOME--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>INCOME:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="income" type="text" id="income" placeholder="Income"
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---INCOME--->



                            <div class="col-md-12">
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
                            </div>

                            <!---DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?</b></label>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary radio-inline">
                                                    <input type="radio" value="yes" name="own_landorproperty">Yes
                                                </label>
                                                <label class="btn btn-primary radio-inline">
                                                    <input type="radio" value="no" name="own_landorproperty"> No
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?--->

                            <!---IF YES, PLEASE STATE ADDRESS--->
                            <div class="col-md-12">
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
                                    <label><b>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?</b></label>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary ">
                                                    <input type="radio" value="yes" name="financial_institution">Yes
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" value="no" name="financial_institution"> No
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?--->


                            <!---IF YES, PLEASE GIVE DETAILS--->
                            <div class="col-md-12">
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
                            <div class="col-md-12">
                                <div>
                                    <label><b>PHOTOGRAPH</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="file" name="photograph"
                                                accept="image/jpg, image/jpeg, image/png">
                                        </div>
                                    </div>
                                </div>
                            </div>
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

                            <h4 class="text-center headline margin-top-35 margin-bottom-35">
                                FOR OFFICIAL USE</h4>

                            <!---IS APPLICANT A TENANT OR LODGER?--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>IS APPLICANT A TENANT OR LODGER?</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="tenantorlodger" type="text" id="tenantorlodger"
                                                placeholder="Is Applicant a Tenant or Lodger" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---IS APPLICANT A TENANT OR LODGER?--->


                            <!---NAME AND ADDRESS OF LANDLORD:--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>NAME AND ADDRESS OF LANDLORD:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="addressoflandlord" type="text" id="addressoflandlord"
                                                placeholder="Name and Address of Landlord" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---NAME AND ADDRESS OF LANDLORD:--->


                            <!---DATE OF OCCUPATION OF PRESENT ACCOMMODATION--->
                            <div class="col-md-12">
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
                            </div>
                            <!--DATE OF OCCUPATION OF PRESENT ACCOMMODATION--->


                            <!--STRUCTURE OF HOUSE / RENTAL RATE--->
                            <div class="col-md-12">
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
                            </div>
                            <!--STRUCTURE OF HOUSE / RENTAL RATE--->


                            <!--TYPE OF SANITARY FACILITIES / WATER SUPPLY--->
                            <div class="col-md-12">
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
                            </div>
                            <!--STRUCTURE OF HOUSE / WATER SUPPLY--->


                            <h4 class="text-center headline margin-top-35 margin-bottom-35">
                                HOUSING OFFICER’S COMMENTS</h4>

                            <!-- HOUSING OFFICER’S COMMENTS--->
                            <div class="col-md-12">
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <textarea style="field-sizing:content" name="housingofficercomments" id="housingofficercomments"
                                                placeholder="Housing Officer´s Comments" required="required"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- HOUSING OFFICER’S COMMENTS--->

                            <!--ACKNOWLEDGED THIS--->
                            <div class="col-md-12">
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
                            </div>
                            <!--ACKNOWLEDGED THIS--->

                            <!--KEYS RECEIVED BY--->

                            <div class="col-md-12">
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
                            </div>

                            <!--KEYS RECEIVED BY--->


                            <!--WITNESSED BY--->

                            <div class="col-md-12">
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
                            </div>

                            <!--WITNESSED BY--->


                            <!---HOUSING OFFICER / ASST. HOUSING OFFICER--->
                            <div class="col-md-12">
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
                            </div>
                            <!--HOUSING OFFICER / ASST. HOUSING OFFICER--->


                            <!---Signatures--->
                            <div class="col-md-12">
                                <div>
                                    <label><b>SIGNATURE(S)</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="signatures" type="text" id="signatures"
                                                placeholder="Signatures" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Signatures--->

                            <!--DATED THIS - Signatures--->
                            <div class="col-md-12">
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

                                                <div class="col-md-3">
                                                    <label style="color:#fff"><b>Year OF</b></label>
                                                    <input type="hidden" value="<?php echo date('Y'); ?>"
                                                        name="yeardatedthis" />
                                                    <p> <?php echo date('Y'); ?> </p>
                                                </div>


                                            </div>
                                        </div>




                                    </div>

                                </div>
                            </div>
                            <!--ACKNOWLEDGED THIS--->

                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit" />

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>

    <!-- Container / End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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

        });
    </script>

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
