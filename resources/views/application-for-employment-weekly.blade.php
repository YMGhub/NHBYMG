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
                        APPLICATION FOR EMPLOYMENT (WEEKLY)</h4>

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
                        action="{{ route('application-for-employment-weekly.apply') }}" name="weeklyworkapp"
                        id="weeklyworkapp" autocomplete="on">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div>
                                    <label><b>Name:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="name" type="text" id="name" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Address:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea name="address" id="address" cols="5" rows="5" required="required"></textarea>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Telephone No:</b></label>
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
                                    <label><b>Citizenship:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="citizenship" type="text" id="citizenship" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>Date of Birth:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="date_of_birth" type="date" id="date_of_birth" placeholder=""
                                                required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="container">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <label><b>National Registration No:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="national_registration_no" type="text"
                                                        id="national_registration_no" placeholder="" required="required" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <label><b>NIS No:</b></label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input name="nis_no" type="text" id="nis_no" placeholder=""
                                                        required="required" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="container">
                                <label><b>Type of Work Required:</b></label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="Masonry"
                                                name="Masonry">
                                            <label class="form-check-label" for="Masonry">
                                                Masonry
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="Carpentry"
                                                name="Carpentry">
                                            <label class="form-check-label" for="Carpentry">
                                                Carpentry
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="Painting" name="Painting">
                                            <label class="form-check-label" for="Painting">
                                                Painting
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="Electrical" type="checkbox"
                                                value="1" id="Electrical" name="Electrical">
                                            <label class="form-check-label" for="Electrical">
                                                Electrical
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="Plumbing" name="Plumbing">
                                            <label class="form-check-label" for="Plumbing">
                                                Plumbing
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="Labourer" name="Labourer">
                                            <label class="form-check-label" for="Labourer">
                                                Labourer
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="Other (Specify)" name="Other">
                                            <label class="form-check-label" for="Other (Specify) ">
                                                Other (Specify)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                </div>

                            </div>


                            <div class="col-md-12">
                                <div>
                                    <label><b>Work Experience:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="work_experience" type="text" id="work_experience"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Education/Qualifications:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="education_qualification" type="text"
                                                id="education_qualification" placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Referee (Job Related) Name:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_name" type="text" id="refereejob_name"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Address :</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_address" type="text" id="refereejob_address"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Length of Time Known :</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_lenght_of_time" type="text"
                                                id="refereejob_lenght_of_time" placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Referee (Job Related) Name:</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_name_2" type="text" id="refereejob_name_2"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Address :</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_address_2" type="text" id="refereejob_address_2"
                                                placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div>
                                    <label><b>Length of Time Known :</b></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input name="refereejob_lenght_of_time_2" type="text"
                                                id="refereejob_lenght_of_time_2" placeholder="" required="required" />
                                        </div>
                                    </div>

                                </div>
                            </div>





                            <div class="col-md-12">
                                <div>
                                    <label><b>Any Other Information : </b></label>
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
                                    <label><b>Signature of Applicant: </b></label>
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

                            <div class="col-md-12 mb-3">
                                <div>
                                    <label><b>NB:Application must be accompanied by a Certificate of Character, the date of
                                            which must not
                                            exceed three (3) months.</b></label>
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
