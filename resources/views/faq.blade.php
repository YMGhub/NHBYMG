@extends('layouts.layout')
@section('content')
	<style>
		.toggle-wrap .toggle-container {
			display: none; /* Hide by default */
		}

		.toggle-wrap .trigger a {
			display: flex;
			justify-content: space-between;
			align-items: center;
			text-decoration: none;
			color: #333;
		}

		.toggle-wrap .trigger a:hover {
			text-decoration: underline;
		}

		.toggle-wrap .trigger a i {
			transition: transform 0.3s;
		}
	</style>
<div class="parallax" data-background="images/headOffice.jpeg" data-color="#36383e" data-color-opacity="0.45" data-img-width="2500" data-img-height="1600">
	<div class="parallax-content">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- Main Search Container -->
					<div class="main-search-container">
						<h2>Frequently Asked Questions</h2>


					</div>
					<!-- Main Search Container / End -->

				</div>
			</div>
		</div>

	</div>
</div>
<div class="container">
	<div class="row">
		<!-- Property Description -->
        <div class="col-lg-12 col-md-7 sp-content">
			<div class="property-description">
				<!-- Description -->
				<h3 class="desc-headline">FAQS</h3>
				<div class="input">
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                1.	What services does the National Housing Corporation (NHC) offer?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>The NHC offers a comprehensive range of housing and property-related services tailored to low- and middle-income individuals. These include sales and rentals of lots and houses, rental of housing units, maintenance of housing estates, issuance of loans, and relocation programs.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                2.	How can I buy or rent a house or lot through the NHC?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>You can buy or rent a house or lot through the NHC by contacting our sales or rental department. We offer affordable housing solutions suitable for your needs and budget.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                3.	Does the NHC provide housing maintenance services?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC is responsible for the maintenance of housing estates to ensure that residents live in safe and comfortable environments. Our maintenance services cover various aspects, including repairs, landscaping, and utilities management.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                4.	Does the NHC offer financial assistance or loans for housing?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC provides financial assistance through the issuance of loans to eligible individuals for housing purposes. Our loan programs are designed to support low- and middle-income individuals in acquiring affordable housing solutions.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                5.	What are the relocation programs offered by the NHC?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>The NHC offers relocation programs to assist individuals and families in moving to suitable housing accommodations. These programs may include subsidized relocation assistance for qualified applicants facing housing challenges.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                6.	Does the NHC engage in commercial endeavours apart from housing services?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, apart from housing services, the NHC is involved in various commercial endeavours. These include project management, property management, legal services, construction of houses, and real estate development of lands.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                7.	How can I avail project management services from the NHC?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>If you require project management services for housing or real estate development projects, you can contact our project management team. We provide comprehensive project management solutions to ensure successful project outcomes.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                8.	Does the NHC offer property management services?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC offers property management services for both residential and commercial properties. Our services include tenant management, property maintenance, rent collection, and more.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                9.	Can I seek legal assistance from the NHC for property-related matters?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC provides legal services related to property matters. Whether you need assistance with property transactions, contracts, or legal disputes, our legal team is here to help.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                10.	Does the NHC undertake construction projects?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC is involved in the construction of houses and other infrastructure projects. We ensure high-quality construction standards and timely project delivery.</p>
							</div>
						</div>
											<div class="toggle-wrap style-2">
                        <span class="trigger">
                            <a href="#" style="text-decoration: none">
                                11.	Does the NHC develop lands for real estate purposes?
								<i class="sl sl-icon-plus"></i>
                            </a>
                        </span>
							<div class="toggle-container" style="display: none;">
								<p>Yes, the NHC engages in real estate development projects, including the development of lands for residential and commercial purposes. We focus on creating sustainable and inclusive communities through our development initiatives.</p>
							</div>
						</div>
									</div>
			</div>
		</div>
		<!-- Property Description / End -->
	</div>
</div>
	<a href="/contact" class="flip-banner parallax" data-background="images/back.jpg" data-color="#274abb" data-color-opacity="0.1" data-img-width="2500" data-img-height="1600">
		<div class="flip-banner-content">
			<h2 class="flip-visible">Not Sure Of Your Next Step</h2>
			<h2 class="flip-hidden">Get In Contact Today <i class="sl sl-icon-arrow-right"></i></h2>
		</div>
	</a>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{--<script>--}}
    {{--$(document).ready(function(){--}}
        {{--$('.trigger a').click(function(e){--}}
            {{--e.preventDefault();--}}
            {{--var $this = $(this);--}}
            {{--var $toggleContainer = $this.closest('.toggle-wrap').find('.toggle-container');--}}

            {{--$toggleContainer.slideToggle();--}}

            {{--// Change icon on toggle--}}
            {{--$this.find('i').toggleClass('sl-icon-plus sl-icon-minus');--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
