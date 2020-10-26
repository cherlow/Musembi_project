@extends('layouts.userlayout')
@section('headers')
<title>Dashboard </title>
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
            <h3>Howdy, {{auth()->user()->name}}</h3>
            <span>We are glad to see you again!</span>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </nav>
        </div>

        <!-- Fun Facts Container -->
        <div class="fun-facts-container">
            <div class="fun-fact">
                <div class="fun-fact-text">
                    <span>Jobs Won</span>
                    <h4>{{ $jobs }}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-gavel" style="color:#36bd78"></i></div>
            </div>
            <div class="fun-fact">
                <div class="fun-fact-text">
                    <span>Jobs Applied</span>
                    <h4>{{ count(auth()->user()->bids )}}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-business-center" style="color:#b81b7f"></i>
                </div>
            </div>
            <div class="fun-fact">
                <div class="fun-fact-text">
                    <span>Reviews</span>
                    <h4>28</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-material-outline-rate-review" style="color:#efa80f"></i></div>
            </div>

            <!-- Last one has to be hidden below 1600px, sorry :( -->

        </div>



        <!-- Row -->

        <!-- Row / End -->

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


                            @foreach (auth()->user()->bids as $job)
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
                © {{ date("Y") }} <strong>Ajira</strong>. All Rights Reserved.
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



<!-- Apply for a job popup
            ================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

    <!--Tabs -->
    <div class="sign-in-form">

        <ul class="popup-tabs-nav">
            <li><a href="#tab">Add Note</a></li>
        </ul>

        <div class="popup-tabs-container">

            <!-- Tab -->
            <div class="popup-tab-content" id="tab">

                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>Do Not Forget 😎</h3>
                </div>

                <!-- Form -->
                <form method="post" id="add-note">

                    <select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                        <option>Low Priority</option>
                        <option>Medium Priority</option>
                        <option>High Priority</option>
                    </select>

                    <textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

                </form>

                <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add
                    Note <i class="icon-material-outline-arrow-right-alt"></i></button>

            </div>

        </div>
    </div>
</div>
<!-- Apply for a job popup / End -->
@endsection