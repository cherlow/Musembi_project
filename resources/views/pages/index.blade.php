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
        <headercomponent auth="{{ auth()->user() }}"></headercomponent>
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

                            <strong>Hire experts for any job, any time.</strong>


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
                        {{-- <form action="/jobsindex/search" method="post"> --}}
                        <div class="intro-search-field with-label">
                            <label for="intro-keywords" class="field-title ripple-effect">Find a Job?</label>
                            <input name="query" id="intro-keywords" type="text" placeholder="e.g. build me a website">
                        </div>
                        <br>
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick=submitform()>Search</button>
                        </div>

                        {{-- </form> --}}


                        <!-- Search Field -->
                        {{-- <div class="intro-search-field">
                                <select class="selectpicker default" multiple data-selected-text-format="count"
                                    data-size="7" title="All Categories">
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

                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class=" row">
                <div class="col-md-12">
                    <ul class="intro-stats margin-top-45 hide-under-992px">
                        <li>
                            <strong class="counter">{{ count($jobs) }}</strong>
                            <span>Jobs Posted</span>
                        </li>
                        <li>
                            <strong class="counter">{{ count($users) }}</strong>
                            <span>Users</span>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="background-image-container"
            style="background-image: url(&quot;https://res.cloudinary.com/mkotar/image/upload/v1566567483/home-background-02_iq7i23.jpg&quot;);">
        </div>
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
                        <a href="{{ url('/tasks') }}" class="headline-link">Browse All Jobs</a>
                    </div>

                    <!-- Jobs Container -->
                    <div class="tasks-list-container compact-list margin-top-35">




                        @foreach ($jobs as $job)
                        <a href="{{ url('/tasks/' . $job->slug) }}" class="task-listing">

                            <!-- Job Listing Details -->
                            <div class="task-listing-details">

                                <!-- Details -->
                                <div class="task-listing-description">
                                    <h3 class="task-listing-title">{{ $job->title }}</h3>
                                    <ul class="task-icons">
                                        <li><i class="icon-material-outline-location-on"></i>
                                            {{ $job->location }}
                                        </li>
                                        <li><i class="icon-material-outline-access-time"></i>
                                            {{ $job->created_at->diffForHumans() }}
                                        </li>
                                    </ul>
                                    <div class="task-tags margin-top-15">

                                        @foreach ($job->skills as $skill)
                                        <span>{{ $skill->name }}</span>

                                        @endforeach

                                    </div>
                                </div>

                            </div>

                            <div class="task-listing-bid">
                                <div class="task-listing-bid-inner">

                                    <span class="button button-sliding-icon ripple-effect">Apply Now <i
                                            class="icon-material-outline-arrow-right-alt"></i></span>
                                </div>
                            </div>
                        </a>
                        @endforeach

                        <!-- Task -->


                        <!-- Task -->


                        <!-- Task -->




                        <!-- Task -->



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
                        <a href="{{ url('hustlancers') }}" class="headline-link">Browse All Users</a>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="default-slick-carousel freelancers-container freelancers-grid-layout">



                        @foreach ($users as $user)
                        <div class="freelancer">

                            <!-- Overview -->
                            <div class="freelancer-overview">
                                <div class="freelancer-overview-inner">

                                    <!-- Bookmark Icon -->


                                    <!-- Avatar -->
                                    <div class="freelancer-avatar">

                                        <a href="/hustlancers/{{ $user->name }}"><img
                                                src="/storage/userprofiles/{{ $user->cover_pic }}" alt=""></a>
                                    </div>

                                    <!-- Name -->
                                    <div class="freelancer-name">
                                        <h4><a href="/hustlancers/{{ $user->name }}">{{ $user->tagline }}
                                            </a></h4>
                                        <span>{{ $user->name }}</span>
                                    </div>

                                    <!-- Rating -->
                                    <div class="freelancer-rating">
                                        <div class="star-rating" data-rating="5"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="freelancer-details">
                                <div class="freelancer-details-list">
                                    <ul>
                                        <li>Location <strong><i class="icon-material-outline-location-on"></i>
                                                {{ $user->location }}</strong></li>
                                        <li>Reviews <strong>0</strong></li>
                                        <li> Jobs Won <strong>0</strong></li>
                                    </ul>
                                </div>
                                <a href="/hustlancers/{{ $user->name }}"
                                    class="button button-sliding-icon ripple-effect">View Profile <i
                                        class="icon-material-outline-arrow-right-alt"></i></a>
                            </div>
                        </div>
                        @endforeach
                        <!--Freelancer -->

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
                        <p>Up-to-date job listings directly from employer.Find job or hire talents near you.
                        </p>
                        <a href="{{"/home"}}" class="button button-sliding-icon ripple-effect big margin-top-20">Get
                            Started <i class="icon-material-outline-arrow-right-alt"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Photo Section / End -->
    <!-- Counters -->

    <!-- Counters / End -->




</div>
<!-- Wrapper / End -->


<script>
    function submitform(){

        var query=document.getElementById("intro-keywords").value; 
        console.log(query);
          window.location.href='/jobsindex/search/'+query;
    }
</script>
@endsection