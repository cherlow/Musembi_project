@extends('layouts.dashboardlayout')
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
            <h3>Manage Jobs</h3>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Manage Jobs</li>
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
                        <h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
                    </div>

                    <div class="content">
                        <ul class="dashboard-box-list">

                            @foreach ($tasks as $task)
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
                                            <h3 class="job-listing-title"><a href="#">{{ $task->title }}</a>

                                                @if ($task->status == 'pending')
                                                <span class="dashboard-status-button green">Active</span>
                                                @endif

                                            </h3>

                                            <!-- Job Listing Footer -->
                                            <div class="job-listing-footer">
                                                <ul>
                                                    <li><i class="icon-material-outline-date-range"></i> Posted on
                                                        {{$task->created_at}}
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="buttons-to-right always-visible">
                                    @if ($task->status=="pending")

                                    <a href="{{'/applications/'.$task->id}}" class="button ripple-effect"><i
                                            class="icon-material-outline-supervisor-account"></i> Manage Candidates
                                        <span class="button-info">{{ count($task->bids) }}</span></a>

                                    @endif

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
                © {{ date('Y') }} <strong>Ajira</strong>. All Rights Reserved.
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