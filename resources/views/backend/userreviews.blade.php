@extends('layouts.userlayout')
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
            <h3>Reviews</h3>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Reviews</li>
                </ul>
            </nav>
        </div>

        <!-- Row -->
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box margin-top-0">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-business"></i> Rate Employers</h3>
                    </div>

                    <div class="content">
                        <ul class="dashboard-box-list">

                            @foreach ($tasks as $task)
                            <li>
                                <div class="boxed-list-item">
                                    <!-- Content -->
                                    <div class="item-content">
                                        <h4>{{  $task->user->name }} ({{ $task->title }})</h4>
                                        <span class="company-not-rated margin-bottom-5">Not Rated</span>
                                    </div>
                                </div>

                                <a href="/userleavereview/{{ $task->id }}"
                                    class=" button ripple-effect margin-top-5 margin-bottom-10"><i
                                        class="icon-material-outline-thumb-up"></i> Leave a Review</a>
                            </li>
                            @endforeach





                        </ul>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="clearfix"></div>

                <!-- Pagination / End -->

            </div>

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box margin-top-0">

                    <!-- Headline -->
                    <div class="headline">
                        <h3><i class="icon-material-outline-face"></i>Your Ratings & Reviews</h3>
                    </div>

                    <div class="content">
                        <ul class="dashboard-box-list">
                            @foreach ($reviews as $review)
                            <li>
                                <div class="boxed-list-item">
                                    <!-- Content -->
                                    <div class="item-content">
                                        <h4>{{ $review->user->name }}</h4>
                                        <div class="item-details margin-top-10">
                                            <div class="star-rating" data-rating="{{ $review->rating }}"></div>
                                            <div class="detail-item"><i class="icon-material-outline-date-range"></i>
                                                {{ $review->created_at->diffForHumans() }}</div>
                                        </div>
                                        <div class="item-description">
                                            <p>{{ $review->review }}</p>
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
@endsection