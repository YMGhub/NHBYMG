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
            width: 15px; /* Set width */
            height: 15px; /* Set height */
            margin-right: 5px; /* Adjust spacing between radio button and label */
        }

    </style>

    <!-- Map Container -->
    <div class="contact-map margin-bottom-55">

        <!-- Google Maps -->

        <!-- Google Maps / End -->

        <!-- Office -->

        <!-- Office / End -->

    </div>
    <div class="clearfix"></div>
    <!-- Map Container / End -->
    <!-- Container / Start -->
    <div class="container">

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-12 col-sm-12">

                <section id="contact">
                    <h4 class="headline margin-bottom-35">Careers Form</h4>

                    <div id="contact-message"></div>

                    <form method="post" action="{{ route('careers.apply') }}" name="careerApplicationForm" id="careerApplicationForm" enctype="multipart/form-data" autocomplete="on">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="first_name" type="text" id="first_name" placeholder="First Name" required="required" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="last_name" type="text" id="last_name" placeholder="Last Name" required="required" />
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
                                    <input name="age" type="number" id="age" placeholder="Age" required="required" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <input name="phone_home" type="tel" id="phone_home" placeholder="Phone (Home)" required="required" />
                        </div>

                        <div>
                            <input name="phone_work" type="tel" id="phone_work" placeholder="Phone (Work)" />
                        </div>

                        <div>
                            <input name="phone_mobile" type="tel" id="phone_mobile" placeholder="Phone (Mobile)" required="required" />
                        </div>

                        <div>
                            <input name="email" type="email" id="email" placeholder="Email Address" required="required" />
                        </div>

                        <div>
                            <input name="resume" type="file" id="resume" accept=".pdf,.doc,.docx,.txt" required="required">
                            <label for="resume">Upload Resume/CV (PDF, DOC, DOCX, TXT)</label>
                        </div>

                        <div>
                            <input name="cover_letter" type="file" id="cover_letter" accept=".pdf,.doc,.docx,.txt" required="required">
                            <label for="cover_letter">Upload Cover Letter (PDF, DOC, DOCX, TXT)</label>
                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit Application" />

                    </form>

                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('careerApplicationForm').addEventListener('submit', function (event) {
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
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
            .then(data => {
                Swal.fire({
                title: 'Success!',
                text: data.message, // Assuming the server returns a message key in the JSON response
                icon: 'success',
                confirmButtonText: 'OK'
            });
        })
            .catch(error => {
                console.error('There was an error!', error);
            Swal.fire({
                title: 'Error!',
                text: 'An error occurred while submitting the form. Please try again later.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
        });
    });
</script>
