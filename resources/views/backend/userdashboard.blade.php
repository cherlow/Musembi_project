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
            <h3>Howdy, {{auth()->user()->username}}</h3>
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
                        <h4>22</h4>
                    </div>
                    <div class="fun-fact-icon"><i class="icon-material-outline-gavel" style="color:#36bd78"></i></div>
                </div>
                <div class="fun-fact">
                    <div class="fun-fact-text">
                        <span>Jobs Applied</span>
                        <h4>4</h4>
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
                <div class="col-xl-6">
                    <div class="dashboard-box">
                        <div class="headline">
                            <h3><i class="icon-material-baseline-notifications-none"></i> Notifications</h3>
                            <button class="mark-as-read ripple-effect-dark" data-tippy-placement="left"
                                title="Mark all as read">
                                <i class="icon-feather-check-square"></i>
                            </button>
                        </div>
                        <div class="content">
                            <ul class="dashboard-box-list">
                                <li>
                                    <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                    <span class="notification-text">
                                        <strong>Michael Shannah</strong> applied for a job <a href="#">Full Stack Software
                                            Engineer</a>
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class=" icon-material-outline-gavel"></i></span>
                                    <span class="notification-text">
                                        <strong>Gilber Allanis</strong> placed a bid on your <a href="#">iOS App
                                            Development</a> project
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class="icon-material-outline-autorenew"></i></span>
                                    <span class="notification-text">
                                        Your job listing <a href="#">Full Stack Software Engineer</a> is expiring
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                                    <span class="notification-text">
                                        <strong>Sindy Forrest</strong> applied for a job <a href="#">Full Stack Software
                                            Engineer</a>
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <span class="notification-icon"><i class="icon-material-outline-rate-review"></i></span>
                                    <span class="notification-text">
                                        <strong>David Peterson</strong> left you a <span class="star-rating no-stars"
                                            data-rating="5.0"></span> rating after finishing <a href="#">Logo Design</a>
                                        task
                                    </span>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="#" class="button ripple-effect ico" title="Mark as read"
                                            data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Box -->
                <div class="col-xl-6">
                    <div class="dashboard-box">
                        <div class="headline">
                            <h3><i class="icon-material-outline-assignment"></i> Recent Applications</h3>
                        </div>
                        <div class="content">
                            <ul class="dashboard-box-list">
                                <li>
                                    <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                        <ul>
                                            <li><span class="unpaid">Unpaid</span></li>
                                            <li>Order: #326</li>
                                            <li>Date: 12/08/2018</li>
                                        </ul>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="pages-checkout-page.html" class="button">Finish Payment</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                        <ul>
                                            <li><span class="paid">Paid</span></li>
                                            <li>Order: #264</li>
                                            <li>Date: 10/07/2018</li>
                                        </ul>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                        <ul>
                                            <li><span class="paid">Paid</span></li>
                                            <li>Order: #211</li>
                                            <li>Date: 12/06/2018</li>
                                        </ul>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="invoice-list-item">
                                        <strong>Professional Plan</strong>
                                        <ul>
                                            <li><span class="paid">Paid</span></li>
                                            <li>Order: #179</li>
                                            <li>Date: 06/05/2018</li>
                                        </ul>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="buttons-to-right">
                                        <a href="pages-invoice-template.html" class="button gray">View Invoice</a>
                                    </div>
                                </li>
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