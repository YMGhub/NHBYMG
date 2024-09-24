@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
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
                        APPLICATION FOR EMPLOYMENT</h4>

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
                        action="{{ route('monthly-work-application.apply') }}" name="monthlyworkapp" id="monthlyworkapp"
                        autocomplete="on">

                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <label><b>1. APPLICATION FOR THE POST OF:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="application_for_the_post" type="text"
                                                id="application_for_the_post" placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="col-md-12">
                                <div>
                                    <label><b>2. SURNAME Mr. Miss. Mrs.:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="surname" type="text" id="surname" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>3.  CHRISTIAN NAMES</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="christian_names" type="text" id="christian_names" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>4.  PERMANENT ADDRESS: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="permanent_address" type="text" id="permanent_address"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div>
                                    <label><b>5.   TELEPHONE NO.:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="telephone_no" type="text" id="telephone_no" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>6.   DATE OF BIRTH: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="date_of_birth" type="date" id="date_of_birth" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>7.   NATIONALITY: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="nationality" type="text" id="nationality" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>8.   NATIONAL REGISTRATION NO.:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="national_registration_no" type="number"
                                                id="national_registration_no" placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>9. NATIONAL INSURANCE NO.: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="national_insurance_no" type="number" id="national_insurance_no"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>10. TERTIARY </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTable1">
                                                <tr>
                                                    <th>Education</th>
                                                    <th>School/College/University</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore1[0][education_tertiary]"
                                                            placeholder="Enter Education" class="form-control" /></td>
                                                    <td><input type="text"
                                                            name="addmore1[0][school_collage_university_tertiary]"
                                                            placeholder="Enter School/College/University"
                                                            class="form-control" /></td>
                                                    <td><input type="number" name="addmore1[0][from_tertiary]"
                                                            placeholder="Enter From" class="form-control" /></td>
                                                    <td><input type="text" name="addmore1[0][to_tertiary]"
                                                            placeholder="Enter To" class="form-control" /></td>
                                                    <td><button type="button" name="add1" id="add1"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>10.1 SECONDARY </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTable2">
                                                <tr>
                                                    <th>Education</th>
                                                    <th>School/College/University</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore2[0][education_secondary]"
                                                            placeholder="Enter Education" class="form-control" /></td>
                                                    <td><input type="text"
                                                            name="addmore2[0][school_collage_university_secondary]"
                                                            placeholder="Enter School/College/University"
                                                            class="form-control" /></td>
                                                    <td><input type="number" name="addmore2[0][from_secondary]"
                                                            placeholder="Enter From" class="form-control" /></td>
                                                    <td><input type="text" name="addmore2[0][to_secondary]"
                                                            placeholder="Enter To" class="form-control" /></td>
                                                    <td><button type="button" name="add2" id="add2"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>10.2 PRIMARY </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTable3">
                                                <tr>
                                                    <th>Education</th>
                                                    <th>School/College/University</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore3[0][education_primary]"
                                                            placeholder="Enter Education" class="form-control" /></td>
                                                    <td><input type="text"
                                                            name="addmore3[0][school_collage_university_primary]"
                                                            placeholder="Enter School/College/University"
                                                            class="form-control" /></td>
                                                    <td><input type="number" name="addmore3[0][from_primary]"
                                                            placeholder="Enter From" class="form-control" /></td>
                                                    <td><input type="text" name="addmore3[0][to_primary]"
                                                            placeholder="Enter To" class="form-control" /></td>
                                                    <td><button type="button" name="add3" id="add3"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>11. QUALIFICATIONS: </b><br>(IN REVERSE CHRONOGICAL ORDER) </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTableQualifications">
                                                <tr>
                                                    <th>SUBJECTS/COURSES </th>
                                                    <th>LEVEL</th>
                                                    <th>YEAR </th>
                                                    <th>EXAMINING BODY </th>
                                                    <th>GRADES</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore4[0][subject_courses]"
                                                            placeholder="Enter Subject/Courses" class="form-control" />
                                                    </td>
                                                    <td><input type="text" name="addmore4[0][level]"
                                                            placeholder="Enter Level" class="form-control" /></td>
                                                    <td><input type="number" name="addmore4[0][year]"
                                                            placeholder="Enter Year" class="form-control" /></td>
                                                    <td><input type="text" name="addmore4[0][examining_body]"
                                                            placeholder="Enter Examining Body" class="form-control" />
                                                    </td>
                                                    <td><input type="text" name="addmore4[0][grades]"
                                                            placeholder="Enter Grades" class="form-control" /></td>
                                                    <td><button type="button" name="add4" id="add4"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>12. HISTORY OF EMPLOYMENT: </b><br>(IN REVERSE CHRONOGICAL ORDER) </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="dynamicTableHistory">
                                                <tr>
                                                    <th>EMPLOYER </th>
                                                    <th>POST HELD</th>
                                                    <th>FROM </th>
                                                    <th>TO</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="addmore5[0][employer]"
                                                            placeholder="Enter Employer" class="form-control" />
                                                    </td>
                                                    <td><input type="text" name="addmore5[0][post_held]"
                                                            placeholder="Enter Post Held" class="form-control" /></td>
                                                    <td><input type="number" name="addmore5[0][from]"
                                                            placeholder="Enter From" class="form-control" /></td>
                                                    <td><input type="text" name="addmore5[0][to]"
                                                            placeholder="Enter To" class="form-control" />
                                                    </td>
                                                    <td><button type="button" name="add5" id="add5"
                                                            class="btn btn-success addMore">+</button></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>13. PERSONNEL REFERENCES : </b><br>Give names and addresses of two references.
                                        They should be responsible persons who know you well, either in private life of
                                        business; one at least should be acquainted with you in private life. Names of
                                        relatives must not be given, or those of distinguished persons unless they know you
                                        well. </label>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div>
                                                <label><b>NAME: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="name_personal_1" type="text" id="name_personal_1"
                                                            placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>ADDRESS: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="address_personal_1" type="text"
                                                            id="address_personal_1" placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>OCCUPATION: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupation_personal_1" type="text"
                                                            id="occupation_personal_1" placeholder=""
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>LENGTH OF TIME KNOWN: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="length_personal_1" type="text"
                                                            id="length_personal_1" placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">

                                            <div>
                                                <label><b>NAME: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="name_personal_2" type="text" id="name_personal_2"
                                                            placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>ADDRESS: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="address_personal_2" type="text"
                                                            id="address_personal_2" placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>OCCUPATION: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupation_personal_2" type="text"
                                                            id="occupation_personal_2" placeholder=""
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>LENGTH OF TIME KNOWN: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="length_personal_2" type="text"
                                                            id="length_personal_2    " placeholder=""
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>14. TESTIMONIALS (TO BE PRESENTED ON REQUEST) </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <label><b>NAME: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="name_testimonial_1" type="text"
                                                            id="name_testimonial_1" placeholder="" required="required" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>ADDRESS: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="address_testimonial_1" type="text"
                                                            id="address_testimonial_1" placeholder=""
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <label><b>OCCUPATION: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupation_testimonial_1" type="text"
                                                            id="occupation_testimonial_1" placeholder=""
                                                            required="required" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-12">
                                            <div>
                                                <label><b>NAME: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="name_testimonial_2" type="text"
                                                            id="name_testimonial_2" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label><b>ADDRESS: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="address_testimonial_2" type="text"
                                                            id="address_testimonial_2" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <label><b>OCCUPATION: </b></label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input name="occupation_testimonial_2" type="text"
                                                            id="occupation_testimonial_2" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div>
                                    <label><b>ANY OTHER INFORMATION: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="any_other_information" type="text" id="any_other_information"
                                                placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>SIGNATURE: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="signature" type="text" id="signature" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>DATE: </b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="date" type="date" id="date" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!--end row-->

                        <input type="submit" class="submit button" id="submit" value="Submit" />

                    </form>


                </section>

            </div>
        </div>
    </div>

    <!--Tertiary Table -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let i = 0;

            document.getElementById("add1").addEventListener("click", fun ction() {
                ++i;

                const table = document.getElementById("dynamicTable1");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore1[${i}][education_tertiary]" placeholder="Enter Education" class="form-control" /></td>
            <td><input type="text" name="addmore1[${i}][school_collage_university_tertiary]" placeholder="Enter School/College/University" class="form-control" /></td>
            <td><input type="text" name="addmore1[${i}][from_tertiary]" placeholder="Enter From" class="form-control" /></td>
            <td><input type="text" name="addmore1[${i}][to_tertiary]" placeholder="Enter To" class="form-control" /></td>
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

        //secondary
        document.addEventListener('DOMContentLoaded', function() {
            let i = 0;

            document.getElementById("add2").addEventListener("click", function() {
                ++i;

                const table = document.getElementById("dynamicTable2");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore2[${i}][education_secondary]" placeholder="Enter Education" class="form-control" /></td>
            <td><input type="text" name="addmore2[${i}][school_collage_university_secondary]" placeholder="Enter School/College/University" class="form-control" /></td>
            <td><input type="text" name="addmore2[${i}][from_secondary]" placeholder="Enter From" class="form-control" /></td>
            <td><input type="text" name="addmore2[${i}][to_secondary]" placeholder="Enter To" class="form-control" /></td>
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

        //Primary
        document.addEventListener('DOMContentLoaded', function() {
            let i = 0;

            document.getElementById("add3").addEventListener("click", function() {
                ++i;

                const table = document.getElementById("dynamicTable3");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore3[${i}][education_primary]" placeholder="Enter Education" class="form-control" /></td>
            <td><input type="text" name="addmore3[${i}][school_collage_university_primary]" placeholder="Enter School/College/University" class="form-control" /></td>
            <td><input type="text" name="addmore3[${i}][from_primary]" placeholder="Enter From" class="form-control" /></td>
            <td><input type="text" name="addmore3[${i}][to_primary]" placeholder="Enter To" class="form-control" /></td>
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

        //dynamicTableQualifications
        document.addEventListener('DOMContentLoaded', function() {
            let i = 0;

            document.getElementById("add4").addEventListener("click", function() {
                ++i;

                const table = document.getElementById("dynamicTableQualifications");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore4[${i}][subject_courses]" placeholder="Enter Subject/Courses" class="form-control" /></td>
            <td><input type="text" name="addmore4[${i}][level]" placeholder="Enter Level" class="form-control" /></td>
            <td><input type="text" name="addmore4[${i}][year]" placeholder="Enter Year" class="form-control" /></td>
            <td><input type="text" name="addmore4[${i}][examining_body]" placeholder="Enter Examining Body" class="form-control" /></td>
            <td><input type="text" name="addmore4[${i}][grades]" placeholder="Enter Grades" class="form-control" /></td>
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


        //dynamicTableQualifications
        document.addEventListener('DOMContentLoaded', function() {
            let i = 0;

            document.getElementById("add4").addEventListener("click", function() {
                ++i;

                const table = document.getElementById("dynamicTableHistory");
                const row = document.createElement("tr");

                row.innerHTML = `
            <td><input type="text" name="addmore5[${i}][employer]" placeholder="Enter Employer" class="form-control" /></td>
            <td><input type="text" name="addmore5[${i}][post_held]" placeholder="Enter Post Held" class="form-control" /></td>
            <td><input type="text" name="addmore5[${i}][from]" placeholder="Enter From" class="form-control" /></td>
            <td><input type="text" name="addmore5[${i}][to]" placeholder="Enter To" class="form-control" /></td>
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
