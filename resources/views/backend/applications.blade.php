@extends('layouts.dashboardlayout')
@section('headers')
<title>Chat Room </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')

<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>Manage Candidates</h3>
            <span class="margin-top-7">Job Applications for <a href="#">{{ $task->title }}</a></span>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Manage Candidates</li>
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
                        <h3><i class="icon-material-outline-supervisor-account"></i> {{ count($applications) }}
                            Candidates</h3>
                    </div>

                    <div class="content">
                        <ul class="dashboard-box-list">

                            @foreach ($applications as $application)
                            <li>
                                <!-- Overview -->
                                <div class="freelancer-overview manage-candidates">
                                    <div class="freelancer-overview-inner">

                                        <!-- Avatar -->
                                        <div class="freelancer-avatar">
                                            <a href="#"><img src="images/user-avatar-big-03.jpg" alt=""></a>
                                        </div>

                                        <!-- Name -->
                                        <div class="freelancer-name">
                                            <h4><a href="#">{{ $application->user->name }}</a></h4>

                                            <!-- Details -->
                                            <span class="freelancer-detail-item"><a href="#"><i
                                                        class="icon-feather-mail"></i>{{ $application->user->email }}</a></span>
                                            <span class="freelancer-detail-item"><i class="icon-feather-phone"></i>
                                                {{ $application->user->mobile }}</span>

                                            <!-- Rating -->
                                            <div class="freelancer-rating">
                                                <div class="star-rating" data-rating="5.0"></div>
                                            </div>
                                            <br>
                                            <div>{{ $application->details }}</div>
                                            <!-- Buttons -->
                                            <div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">

                                                <a href="/jobaccept/{{ $application->id }}"
                                                    class="button dark ripple-effect"><i class="icon-feather-check"></i>
                                                    Accept Appliction</a>
                                                <a href="/messages/{{ $application->user->name }}"
                                                    class="button dark ripple-effect"><i class="icon-feather-mail"></i>
                                                    Send Message</a>

                                                @foreach ($application->user->attachments as $attachment)
                                                <a href="/storage/attachments/{{ $attachment->attachment_link }}"
                                                    class="button ripple-effect"><i class="icon-feather-file-text"></i>
                                                    Download {{ $attachment->attachment_name }}</a>
                                                @endforeach



                                            </div>
                                        </div>
                                    </div>
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


@endsection