@extends('layouts.layout')
@section('content')
	<style>
		.list-layout .listing-img-container:after {
			background: linear-gradient(to bottom, transparent 55%, transparent);
		}
	</style>
	<div class="parallax" data-background="/images/Project-Hero.jpg" data-color="#" data-color-opacity="0.1" data-img-width="1000" data-img-height="1200" style="background-position: 0">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-search-container">
							<h2>Projects</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-7 sp-content">
				<div class="property-description">
					<h3 class="desc-headline">New and Current Projects</h3>
					<div class="input">
						<p>The National Housing Corporation takes pride in a rich portfolio of completed projects that have positively shaped the housing landscape in Barbados. Our projects range from innovative real estate developments and the construction of modern, comfortable homes to the efficient management of properties and expertly handled legal and project management services. These endeavors reflect our unwavering commitment to providing affordable and quality housing solutions for the benefit of the community.

							Our aim is to continue to make a lasting impact by creating thriving communities and shaping the future of housing in Barbados.

						</p>
						• Joint Venture Projects <br>
						• Electrical Upgrade Programme <br>
						• Sewage and Wells Rejuvenation Programme <br>
						• East/West Project <br>
						• Whitehill to Farmers Relocation <br>
						• Rock Hall Relocation <br>
						• Hurricane Elsa Programme <br>
						• 20 Year Divestment Programme <br>
						• Environmental Protection Department – Report of Derelict Buildings and Car <br>
						• Report of Derelict Buildings and Cars <br>
						<a href="https://survey123.arcgis.com/share/7fcc232f06824bd1a428954c6db73882">https://survey123.arcgis.com/share/7fcc232f06824bd1a428954c6db73882</a>

						<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->
					</div>

					<!-- Details -->
					<!-- <h3 class="desc-headline">Projects</h3> -->
					<hr class="desc-headline">
					<div class="layout-switcher hidden"><a href="#" class="list"><i class="fa fa-th-list"></i></a></div>
					<div class="listings-container list-layout">

						{{--@foreach($projects as $project)--}}
							{{--<div class="listing-item">--}}
								{{--<a href="#" class="listing-img-container">--}}
									{{--<div class="listing-badges">--}}
									{{--</div>--}}
									{{--<div class="listing-img-content">--}}
										{{--<!-- <span class="listing-price">$1700 <i>monthly</i></span> -->--}}
										{{--<span class="like-icon"></span>--}}
									{{--</div>--}}
									{{--<img src="{{public_path()}}" alt="">--}}
								{{--</a>--}}
								{{--<div class="listing-content">--}}
									{{--<div class="listing-title">--}}
										{{--<h4><a href="#">{{$project->title}}</a></h4>--}}
										{{--<!-- <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="listing-address popup-gmaps">--}}
                                                    {{--<i class="fa fa-map-marker"></i>--}}
                                                    {{--778 Country St. Panama City, FL--}}
                                                {{--</a> -->--}}

										{{--<a href="#" class="details button border">Details</a>--}}
									{{--</div>--}}

									{{--<!-- <ul class="listing-details">--}}
										{{--<li>1450 sq ft</li>--}}
										{{--<li>1 Bedroom</li>--}}
										{{--<li>2 Rooms</li>--}}
										{{--<li>2 Rooms</li>--}}
									{{--</ul> -->--}}

									{{--<div class="listing-footer">--}}
										{{--<a href="#"><i class="fa fa-user"></i> Admin</a>--}}
										{{--<span><i class="fa fa-calendar-o"></i> {{$project->created_at->diffForHumans()}}</span>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--@endforeach--}}
					</div>
					<!-- Similar Listings Container / End -->


					<!-- Floorplans -->
					<!-- <h3 class="desc-headline no-border">Floorplans</h3> -->
					<!-- Accordion -->
					<!-- <div class="style-1 fp-accordion">
                                <div class="accordion">

                                    <h3>First Floor <span>460 sq ft</span> <i class="fa fa-angle-down"></i> </h3>
                                    <div>
                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/kChy7IU.jpg">
                                            <img src="https://i.imgur.com/kChy7IU.jpg" alt="">
                                        </a>
                                        <p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>
                                    </div>

                                    <h3>Second Floor <span>440 sq ft</span> <i class="fa fa-angle-down"></i></h3>
                                    <div>
                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/l2VNlwu.jpg">
                                            <img src="https://i.imgur.com/l2VNlwu.jpg" alt="">
                                        </a>
                                        <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>
                                    </div>

                                    <h3>Garage <span>140 sq ft</span> <i class="fa fa-angle-down"></i></h3>
                                    <div>
                                        <a class="floor-pic mfp-image" href="https://i.imgur.com/0zJYERy.jpg">
                                            <img src="https://i.imgur.com/0zJYERy.jpg" alt="">
                                        </a>
                                    </div>

                                </div>
                            </div> -->
				</div>
			</div>
			<!-- Property Description / End -->
		</div>
	</div>

	{{--slider--}}
	<div class="container">
	<div class="row margin-bottom-50">
	<div class="col-md-12">
	<!-- Slider -->
	<div class="property-slider default">
	@foreach(range(1, 29) as $index)
	<a href="/images/project/{{ $index }}.jpg" data-background-image="/images/project/{{ $index }}.jpg" class="item mfp-gallery"></a>
	@endforeach
	</div>
	<!-- Slider Thumbs-->
	<div class="property-slider-nav">
	@foreach(range(1, 29) as $index)
	<div class="item">
	<img src="/images/project/{{ $index }}.jpg" alt="">
	</div>
	@endforeach
	</div>
	</div>
	</div>
	</div>

	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">Pictures From Electrical Upgrade Project</h3>--}}
	{{--<img src="/images/project/1.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/2.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/3.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/4.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/5.jpg" alt="">--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<!-- Property Description / End -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">Pictures From Sewage and Wells Rejuvenation Programme</h3>--}}
	{{--<img src="/images/project/6.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/7.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/8.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/9.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/10.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/11.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/12.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/13.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/14.png" alt="">  <br> <br>--}}
	{{--<img src="/images/project/15.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/16.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/17.jpg" alt="">  <br> <br>--}}
	{{--<img src="/images/project/18.jpg" alt="">  <br> <br>--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<!-- Property Description / End -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">Pictures From Hurricane Elsa Project</h3>--}}
	{{--<img src="/images/project/19.png" alt=""> <br> <br>--}}
	{{--<img src="/images/project/20.png" alt=""> <br> <br>--}}
	{{--<img src="/images/project/21.png" alt=""> <br> <br>--}}
	{{--<img src="/images/project/22.png" alt=""> <br> <br>--}}
	{{--<img src="/images/project/23.png" alt=""> <br> <br>--}}
	{{--<img src="/images/project/24.png" alt=""> <br> <br>--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<!-- Property Description / End -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">NHC EAST/PROJECT</h3>--}}
	{{--<a href="Haggat Hall Video - Minister Sutherland and Dugid.mp4">Haggat Hall Video - Minister Sutherland and Dugid.mp4</a>--}}
	{{--<img src="/images/project/25.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/26.jpg" alt=""> <br> <br>--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<!-- Property Description / End -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">WHITEHALL RELOCATION PROJECT</h3>--}}
	{{--<h5 class="desc-headline text-center">Whitehill to Farmers Relocation Project, Farmers, St. Thomas.  </h5>--}}
	{{--<a href="Whitehill relocation Minister Sutherland (Video).m4v">Whitehill relocation Minister Sutherland (Video).m4v</a>--}}
	{{--<img src="/images/project/27.jpg" alt=""> <br> <br>--}}
	{{--<img src="/images/project/26.jpg" alt=""> <br> <br>--}}
	{{--<h5 class="desc-headline text-center">Official Opening of Alleyne’s Court Estate, Whitepark Road, St. Michael</h5>--}}
	{{--<a href="https://globaljamaica-my.sharepoint.com/:v:/g/personal/afloro_yellomg_com/EZBfvBYxc45Aowc5XTjtdaIBPlxwISoOmbO1NceBM1IABA?e=IySqKm">Alleyne's Court.mv4</a>--}}
	{{--<h5>Alleyne’s Court Estate</h5>--}}
	{{--<img src="/images/project/28.jpg" alt=""> <br> <br>--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<!-- Property Description / End -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="container">--}}
	{{--<div class="row">--}}

	{{--<!-- Property Description -->--}}
	{{--<div class="col-lg-12 col-md-7 sp-content">--}}
	{{--<div class="property-description">--}}
	{{--<!-- Description -->--}}
	{{--<h3 class="desc-headline text-center">Seven Acres Development <a href="https://globaljamaica-my.sharepoint.com/:b:/g/personal/afloro_yellomg_com/EWkGwcQtwcFBsOMaZpHccvEBGz2hfCh9vOi9XPn77JupPw?e=LAxsdL">Seven Acres Development.pdf</a> </h3>--}}
	{{--<h3>Bright Hall, St. Lucy</h3>--}}
	{{--<a href="https://globaljamaica-my.sharepoint.com/:b:/g/personal/afloro_yellomg_com/EagLZFm6XVZEjJvrRRCJp_EBGs2-Bv4XhiMQ3e5vCoucUg?e=nURXfH">BRIGHT HALL hatchwork-Model.pdf</a>--}}
	{{--<a href="https://globaljamaica-my.sharepoint.com/:b:/g/personal/afloro_yellomg_com/EagLZFm6XVZEjJvrRRCJp_EBGs2-Bv4XhiMQ3e5vCoucUg?e=nURXfH">Bright Hall Location Plan.pdf</a>--}}
	{{--<h5>Solaras Court</h5>--}}
	{{--<img src="/images/project/29.jpg" alt=""> <br> <br>--}}
	{{--<div class="input">--}}

	{{--<!-- <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a> -->--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}

	<div class="container right-sidebar">

		<div class="row">

			<article id="post-55" class="col-md-12 post-55 page type-page status-publish hentry">

				<div class="row margin-bottom-15">

					<div class="col-md-6">
						<!-- Sort by -->

					</div>			</div>




			</article>
		</div>

	</div>
@endsection
