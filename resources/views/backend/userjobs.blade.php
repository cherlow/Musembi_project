@extends('layouts.userlayout')
@section('headers')
<title>Manage Tasks </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')

<!-- Dashboard Content
	================================================== -->
<div class="dashboard-content-container" data-simplebar>
	<div class="dashboard-content-inner">

		<!-- Dashboard Headline -->
		<div class="dashboard-headline">
			<h3>Manage Applications</h3>

			<!-- Breadcrumbs -->
			<nav id="breadcrumbs" class="dark">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Dashboard</a></li>
					<li>Manage Applications</li>
				</ul>
			</nav>
		</div>

		<!-- Row -->
		<div class="row">

			<!-- Dashboard Box -->
			<div class="col-xl-12">
				<div class="dashboard-box margin-top-0">

					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-material-outline-business-center"></i> My Job Applications</h3>
					</div>

					<div class="content">
						<ul class="dashboard-box-list">


							@foreach ($jobs as $job)
							<li>
								<!-- Job Listing -->
								<div class="job-listing">

									<!-- Job Listing Details -->
									<div class="job-listing-details">

										<!-- Logo -->
										<!-- 											<a href="#" class="job-listing-company-logo">
												<img src="images/company-logo-05.png" alt="">
											</a> -->

										<!-- Details -->
										<div class="job-listing-description">
											<h3 class="job-listing-title"><a href="#">{{ $job->task->title }}</a>

												@if ($job->task->status=="pending")
												<span class="dashboard-status-button green">active</span>
												@else
												<span class="dashboard-status-button green">closed</span>
												@endif


											</h3>

											<!-- Job Listing Footer -->
											<div class="job-listing-footer">
												<ul>
													<li><i class="icon-material-outline-date-range"></i> Applied
														{{ $job->created_at->diffForHumans() }}</li>

												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Buttons -->
								<div class="buttons-to-right always-visible">
									<a href="/messages/{{ $job->task->user->name }}" class="button ripple-effect"><i
											class="icon-material-outline-supervisor-account"></i> Message Employer
									</a>
									{{-- <a href="#" class="button gray ripple-effect ico" title="Edit"
										data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
									<a href="#" class="button gray ripple-effect ico" title="Remove"
										data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a> --}}
								</div>
							</li>
							@endforeach



						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- Row / End -->

		<!-- Footer -->
		<div class="dashboard-footer-spacer"></div>
		<div class="small-footer margin-top-15">
			<div class="small-footer-copyrights">
				© 2018 <strong>Hireo</strong>. All Rights Reserved.
			</div>
			<ul class="footer-social-links">
				<li>
					<a href="#" title="Facebook" data-tippy-placement="top">
						<i class="icon-brand-facebook-f"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Twitter" data-tippy-placement="top">
						<i class="icon-brand-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Google Plus" data-tippy-placement="top">
						<i class="icon-brand-google-plus-g"></i>
					</a>
				</li>
				<li>
					<a href="#" title="LinkedIn" data-tippy-placement="top">
						<i class="icon-brand-linkedin-in"></i>
					</a>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- Footer / End -->

	</div>
</div>
<!-- Dashboard Content / End -->

@endsection