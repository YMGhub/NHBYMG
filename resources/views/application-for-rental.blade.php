
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
                        <h3>APPLICATION FOR RENTAL UNIT/ LOT</h3>

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
					<li><i class="im im-icon-Phone-2"></i> <strong>PBX:</strong> <span><a href="#1-246-536-5300">1-246-536-5300<a href="#"></a></span></li>
					<li><i class="im im-icon-Fax"></i> <strong>Fax:</strong> <span><a href="#1-246-437-8297">1-246-437-8297</a> </span></li>
					<li><i class="im im-icon-Globe"></i> <strong>Opening Hours:</strong> <span><a href="#">Friday 8.15am – 4.30pm</a></span></li>
					<li><i class="im im-icon-Envelope"></i> <strong>Email:</strong> <span><a href="mailto:NHC.CustomerService@barbados.gov.bb">NHC.CustomerService@barbados.gov.bb</a></span></li>
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8 col-sm-8">

			<section id="contact">
				<h4 class="headline margin-bottom-35">Send Us A Message</h4>

				<!--div id="contact-message"></div-->

				<form method="post" action="{{ route('contact.apply') }}" name="contactform" id="contactform" autocomplete="on">
                    @csrf
					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
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
