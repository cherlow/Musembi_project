@extends('layouts.pageslayout')
@section('headers')
<title>Hustlance </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth transparent-header">

	<!-- Header -->
<headercomponent auth="{{auth()->user()}}"></headercomponent>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->

<div class="intro-banner dark-overlay ">

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">

					<h3>

						<strong>Hire experts  for any job, any time.</strong>


						<br>
						<span>Huge community of designers, developers and creatives ready for your Listing.</span>
					</h3>
				</div>
			</div>
		</div>

		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					{{-- <div class="intro-search-field with-autocomplete with-label">
						<label for="autocomplete-input" class="field-title ripple-effect">Where?</label>
						<div class="input-with-icon">
							<input id="autocomplete-input" type="text" placeholder="Location">
							<i class="icon-material-outline-location-on"></i>
						</div>
					</div> --}}

					<!-- Search Field -->
					<div class="intro-search-field with-label">
						<label for ="intro-keywords" class="field-title ripple-effect">Find a Job?</label>
						<input id="intro-keywords" type="text" placeholder="e.g. build me a website">
					</div>

					<!-- Search Field -->
					{{-- <div class="intro-search-field">
						<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
							<option>Admin Support</option>
							<option>Customer Service</option>
							<option>Data Analytics</option>
							<option>Design & Creative</option>
							<option>Legal</option>
							<option>Software Developing</option>
							<option>IT & Networking</option>
							<option>Writing</option>
							<option>Translation</option>
							<option>Sales & Marketing</option>
						</select>
					</div> --}}

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" onclick="window.location.href='freelancers-grid-layout-full-page.html'">Search</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">3,543</strong>
						<span>Users</span>
					</li>

				</ul>
			</div>
		</div>

	</div>
	<div class="background-image-container" style="background-image: url(&quot;https://res.cloudinary.com/mkotar/image/upload/v1566567483/home-background-02_iq7i23.jpg&quot;);"></div>
</div>

<!-- Content
================================================== -->

<!-- Popular Job Categories -->

<!-- Features Cities / End -->



<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Recent Jobs</h3>
					<a href="tasks-list-layout-1.html" class="headline-link">Browse All Jobs</a>
				</div>

				<!-- Jobs Container -->
				<div class="tasks-list-container compact-list margin-top-35">

					<!-- Task -->
					<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">Food Delviery Mobile App</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-on"></i> San Francisco</li>
									<li><i class="icon-material-outline-access-time"></i> 2 minutes ago</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span>iOS</span>
									<span>Android</span>
									<span>mobile apps</span>
									<span>design</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>$1,000 - $2,500</strong>
									<span>Fixed Price</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>

					<!-- Task -->
					<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">2000 Words English to German</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-off"></i> Online Job</li>
									<li><i class="icon-material-outline-access-time"></i> 5 minutes ago</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span>copywriting</span>
									<span>translating</span>
									<span>editing</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>$75</strong>
									<span>Fixed Price</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>

					<!-- Task -->
					<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">Fix Python Selenium Code</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-off"></i> Online Job</li>
									<li><i class="icon-material-outline-access-time"></i> 30 minutes ago</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span>Python</span>
									<span>Flask</span>
									<span>API Development</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>$100 - $150</strong>
									<span>Hourly Rate</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>

					<!-- Task -->
					<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">WordPress Theme Installation</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-off"></i> Online Job</li>
									<li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span>WordPress</span>
									<span>Theme Installation</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>$100</strong>
									<span>Fixed Price</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>

					<!-- Task -->
					<a href="single-task-page.html" class="task-listing">

						<!-- Job Listing Details -->
						<div class="task-listing-details">

							<!-- Details -->
							<div class="task-listing-description">
								<h3 class="task-listing-title">PHP Core Website Fixes</h3>
								<ul class="task-icons">
									<li><i class="icon-material-outline-location-off"></i> Online Job</li>
									<li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
								</ul>
								<div class="task-tags margin-top-15">
									<span>PHP</span>
									<span>MySQL Administration</span>
									<span>API Development</span>
								</div>
							</div>

						</div>

						<div class="task-listing-bid">
							<div class="task-listing-bid-inner">
								<div class="task-offers">
									<strong>$50 - $80</strong>
									<span>Hourly Rate</span>
								</div>
								<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
							</div>
						</div>
					</a>


				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->

<!-- Highest Rated Freelancers -->
<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3>Highest Rated Users</h3>
				<a href="{{url('hustlancers')}}" class="headline-link">Browse All Freelancers</a>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">

								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
								<a href="{{url('singlehustlancer')}}"><img src="images/user-avatar-big-01.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="{{url('singlehustlancer')}}">Tom Smith <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
									<span>UI/UX Designer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> London</strong></li>
									<li>Rate <strong>$60 / hr</strong></li>
									<li> Success <strong>95%</strong></li>
								</ul>
							</div>
							<a href="{{url('singlehustlancer')}}" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">

								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">David Peterson <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>
									<span>iOS Expert + Node Dev</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Berlin</strong></li>
									<li>Rate <strong>$40 / hr</strong></li>
									<li> Success <strong>88%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
							<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Marcin Kowalski <img class="flag" src="images/flags/pl.svg" alt="" title="Poland" data-tippy-placement="top"></a></h4>
									<span>Front-End Developer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="4.9"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Warsaw</strong></li>
									<li>Rate <strong>$50 / hr</strong></li>
									<li> Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-03.jpg" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Sindy Forest <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>
									<span>Magento Certified Developer</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Brisbane</strong></li>
									<li>Rate <strong>$70 / hr</strong></li>
									<li> Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
									<span>Laravel Dev</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="4.5"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Milan</strong></li>
									<li>Rate <strong>$80 / hr</strong></li>
									<li> Success <strong>89%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->

					<!--Freelancer -->
					<div class="freelancer">

						<!-- Overview -->
						<div class="freelancer-overview">
								<div class="freelancer-overview-inner">
								<!-- Bookmark Icon -->
								<span class="bookmark-icon"></span>

								<!-- Avatar -->
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="#">Gabriel Lagueux <img class="flag" src="images/flags/fr.svg" alt="" title="France" data-tippy-placement="top"></a></h4>
									<span>WordPress Expert</span>
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="5.0"></div>
								</div>
							</div>
						</div>

						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Paris</strong></li>
									<li>Rate <strong>$50 / hr</strong></li>
									<li> Success <strong>100%</strong></li>
								</ul>
							</div>
							<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
						</div>
					</div>
					<!-- Freelancer / End -->


				</div>
			</div>

		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->

<!-- Icon Boxes -->

<!-- Icon Boxes / End -->


<!-- Testimonials -->
<div class="section gray padding-top-65 padding-bottom-55">



	<!-- Categories Carousel -->

	<!-- Categories Carousel / End -->

</div>
<!-- Testimonials / End -->

<!-- Photo Section -->
<div class="photo-section" data-background-image="images/img01.jpg">

	<!-- Infobox -->
	<div class="text-content white-font">
		<div class="container">

			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-12">
					<h2>Hire experts or be hired. <br> For any job, any time.</h2>
					<p>Up-to-date job listings directly from employer.Find job or hire talents near you.</p>
					<a href="pages-pricing-plans.html" class="button button-sliding-icon ripple-effect big margin-top-20">Get Started <i class="icon-material-outline-arrow-right-alt"></i></a>
				</div>
			</div>

		</div>
	</div>

	<!-- Infobox / End -->

</div>
<!-- Photo Section / End -->
<!-- Counters -->
<div class="section padding-top-70 padding-bottom-75">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<div class="counters-container">

                    <!-- Counter -->
                    <div class="col-md-3 col-sm-6">
					<div class="single-counter">
						<i class="icon-line-awesome-suitcase"></i>
						<div class="counter-inner">
							<h3><span class="counter">1,586</span></h3>
							<span class="counter-title">Jobs Posted</span>
						</div>
                    </div>
                    </div>

                    <!-- Counter -->
                    <div class="col-md-3 col-sm-6 ">
					<div class="single-counter">
						<i class="icon-line-awesome-legal"></i>
						<div class="counter-inner">
							<h3><span class="counter">3,543</span></h3>
							<span class="counter-title">Tasks Posted</span>
						</div>
                    </div>
                    </div>

                    <!-- Counter -->
                    <div class="col-md-3 col-sm-6">
					<div class="single-counter">
						<i class="icon-line-awesome-user"></i>
						<div class="counter-inner">
							<h3><span class="counter">2,413</span></h3>
							<span class="counter-title">Active Members</span>
						</div>
                    </div>
                    </div>

                    <!-- Counter -->
                    <div class="col-md-3 col-sm-6">
					<div class="single-counter">
						<i class="icon-line-awesome-trophy"></i>
						<div class="counter-inner">
							<h3><span class="counter">99</span>%</h3>
							<span class="counter-title">Satisfaction Rate</span>
						</div>
                    </div>
                    </div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Counters / End -->




</div>
<!-- Wrapper / End -->



@endsection

