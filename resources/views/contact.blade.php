@extends('layouts.layout')
@section('content')
    <!-- Map Container -->
    <div class="contact-map margin-bottom-55">

        <!-- Google Maps -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.931040510379!2d-59.613876325697014!3d13.103555087224077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c43f71fe93bfb77%3A0x3e3b73afa4a9edcc!2sNational%20Housing%20Corporation!5e0!3m2!1sen!2sjm!4v1702395892977!5m2!1sen!2sjm"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Google Maps / End -->

        <!-- Office -->
        <div class="address-box-container" style="height: 450px">
            <div class="address-container" data-background-image="images/our-office.jpg">
                <div class="office-address">
                    <h3>Our Office</h3>
                    <ul>
                        <li>“The Garden” Country Road</li>
                        <li>St. Michael</li>
                        <li>Barbados</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Office / End -->

    </div>
    <div class="clearfix"></div>
    <!-- Map Container / End -->


    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4 col-sm-4">

                <h4 class="headline margin-bottom-30">Find Us Here</h4>

                <!-- Contact Details -->
                <div class="sidebar-textbox">

                    <p>National Housing Corporation</p>
                    <p>“The Garden” Country Road</p>
                    <p>St. Michael</p>
                    <p>Barbados</p>

                    <ul class="contact-details">
                        <li><i class="im im-icon-Phone-2"></i> <strong>PBX:</strong> <span><a
                                    href="#1-246-536-5300">1-246-536-5300<a href="#"></a></span></li>
                        <!--li><i class="im im-icon-Fax"></i> <strong>Fax:</strong> <span><a href="#1-246-437-8297">1-246-437-8297</a> </span></li-->
                        <li><i class="im im-icon-Globe"></i> <strong>Opening Hours:</strong> <span><a href="#">Mon -
                                    Fri
                                    8.15am – 4.30pm</a></span></li>
                        <li><i class="im im-icon-Envelope"></i> <strong>Email:</strong> <span><a
                                    href="mailto:NHC.CustomerService@barbados.gov.bb">NHC.CustomerService@barbados.gov.bb</a></span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8 col-sm-8">

                <section id="contact">
                    <h4 class="headline margin-bottom-35">Send Us A Message</h4>

                    <!--div id="contact-message"></div-->

                    <form method="post" action="{{ route('contact.apply') }}" name="contactform" id="contactform"
                        autocomplete="on">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="name" type="text" id="name" placeholder="Your Name"
                                        required="required" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="email" type="email" id="email" placeholder="Email Address"
                                        pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                                        required="required" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
                        </div>

                        <div>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true"
                                required="required"></textarea>
                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit Message" />

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
        document.getElementById('contactform').addEventListener('submit', function(event) {
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

            document.getElementById('contactform').reset();

        });
    });
</script>
