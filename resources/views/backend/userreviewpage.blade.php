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
            <h3>Leave a Review</h3>

            <!-- Breadcrumbs -->
            <nav id="breadcrumbs" class="dark">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li>Leave a Review</li>
                </ul>
            </nav>
        </div>

        <!-- Row -->
        <div class="row">

            <div class="col-8" style="margin 0 auto">

                <form method="post" id="login-form" action="/userpostreview/{{ $task->id }}">
                    @csrf

                    <div class="input-with-icon-left">
                        <i class="icon-material-outline-star"></i>
                        <input type="number" class="input-text with-border" name="rating" id="emailaddress"
                            placeholder="rating (0-5)" required="">
                    </div>

                    <div class="input-with-icon-left">

                        <textarea name="review" id="" cols="30" rows="5" placeholder="enter review here...">


                        </textarea>
                    </div>
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"
                        form="login-form">Submit <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
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