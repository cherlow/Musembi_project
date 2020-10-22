@extends('layouts.pageslayout')
@section('headers')
<title>Tasks </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
        ================================================== -->
    <header id="header-container" class="fullwidth">

        <!-- Header -->
        <headercomponent auth="{{auth()->user()}}"></headercomponent>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- Spacer -->
    <div class="margin-top-90"></div>
    <!-- Spacer / End-->

    <!-- Page Content
        ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-xl-9 col-lg-8 content-left-offset" style="margin:0 auto">
                <h3 class="page-title">Search Results for "{{ $query }}"</h3>



                <!-- my accordion end  -->
                <!-- Tasks Container -->
                <div class="tasks-list-container margin-top-35">
                    <!-- Task -->

                    @foreach ($jobs as $job)
                    <a href="/tasks/{{ $job->slug }}" class="task-listing">
                        <!-- Job Listing Details -->
                        <div class="task-listing-details">
                            <!-- Details -->
                            <div class="task-listing-description">
                                <h3 class="task-listing-title">{{  $job->title }} </h3>
                                <ul class="task-icons">
                                    <li>
                                        <i class="icon-material-outline-location-on"></i>
                                        {{$job->location }}
                                    </li>
                                    <li>
                                        <i class="icon-material-outline-access-time"></i>
                                        {{$job->created_at->diffForHumans() }}
                                    </li>
                                </ul>
                                <p class="task-listing-text">

                                    @if (strlen($job->Description) >140)
                                    {{ $job->Description }}
                                    @else
                                    {{ $job->Description }}

                                    @endif
                            
                                </p>
                                <div class="task-tags">
                                    @foreach ($job->skills as $skill)
                                    <span>
                                        {{ $skill->name }}</span>
                                    @endforeach
                                    {{-- <span v-for="skill in task.skills" :key="skill.id">
                              {{ $job->skills }}</span> --}}
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


                    <!-- Pagination -->
                    <div class="clearfix"></div>

                    <!-- Pagination / End -->
                </div>
                <!-- Tasks Container / End -->
            </div>
        </div>
    </div>




</div>
<!-- Wrapper / End -->


@endsection