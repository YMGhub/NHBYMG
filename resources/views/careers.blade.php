@extends('layouts.layout')
@section('content')
    <style>
        .gender-options label {
            display: inline-block;
            margin-right: 15px;
        }

        .gender-options input[type="radio"] {
            vertical-align: middle;
            margin-right: 5px;
        }

        .radio-label input[type="radio"] {
            width: 15px;
            /* Set width */
            height: 15px;
            /* Set height */
            margin-right: 5px;
            /* Adjust spacing between radio button and label */
        }

        .bannerOurDeparment1 {
            background: url("https://nhc.ymgweb.com/images/headOffice.jpeg") !important;
            background-position: 50% 50% !important;
            background-size: cover !important;

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

    <div class="parallax bannerOurDeparment1" data-background="images/Project-Hero.jpg" data-color="#" data-color-opacity="0.1"
        data-img-width="1000" data-img-height="1200"
        style="background-position: 0 !important;background-size:100% !important;    position: relative;
z-index: 99;    background-repeat: no-repeat;">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-search-container">
                            <h2>CAREERS</h2>
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

                    <p>
                        At the National Housing Corporation, we are always on the lookout for passionate, skilled
                        professionals to join our team. We offer diverse opportunities to contribute to our mission of
                        providing high-quality housing solutions.<br>
                        If you're ready to make a difference and grow your career in a rewarding environment, we encourage
                        you to apply today. Together, we can build a brighter future for communities across the nation.
                    </p>

                    <div id="contact-message"></div>

                    <form method="post" action="{{ route('careers.apply') }}" name="careerApplicationForm"
                        id="careerApplicationForm" enctype="multipart/form-data" autocomplete="on">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="first_name" type="text" id="first_name" placeholder="First Name"
                                        required="required" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="last_name" type="text" id="last_name" placeholder="Last Name"
                                        required="required" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="gender-options">
                                    <label for="">Gender</label>
                                    <label for="male" class="radio-label">
                                        <input type="radio" name="gender" id="male" value="male">
                                        Male
                                    </label>
                                    <label for="female" class="radio-label">
                                        <input type="radio" name="gender" id="female" value="female">
                                        Female
                                    </label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div>
                                    <input name="age" type="number" id="age" placeholder="Age"
                                        required="required" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <input name="phone_home" type="tel" id="phone_home" placeholder="Phone (Home)"
                                required="required" />
                        </div>

                        <div>
                            <input name="phone_work" type="tel" id="phone_work" placeholder="Phone (Work)" />
                        </div>

                        <div>
                            <input name="phone_mobile" type="tel" id="phone_mobile" placeholder="Phone (Mobile)"
                                required="required" />
                        </div>

                        <div>
                            <input name="email" type="email" id="email" placeholder="Email Address"
                                required="required" />
                        </div>

                        <div><label for="resume">Upload Resume/CV (PDF, DOC, DOCX, TXT)</label>
                            <input name="resume" type="file" id="resume" accept=".pdf,.doc,.docx,.txt"
                                required="required">

                        </div>

                        <div>
                            <label for="cover_letter">Upload Cover Letter (PDF, DOC, DOCX, TXT)</label>
                            <input name="cover_letter" type="file" id="cover_letter" accept=".pdf,.doc,.docx,.txt"
                                required="required">

                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit Application" />

                    </form>

                </section>

                <div class="row">
                    <div class="col-md-6 text-center"><a href="/monthly-work-application" class="button">The Application
                            Forms for Employment (Monthly)</a>
                    </div>
                    <div class="col-md-6 text-center"><a href="/application-for-employment-weekly" class="button">The
                            Application Forms for Employment (Weekly)</a>
                    </div>
                </div>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('careerApplicationForm').addEventListener('submit', function(event) {
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

            document.getElementById('careerApplicationForm').reset();

        });
    });
</script>
