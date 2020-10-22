<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
@yield('headers')

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/colors/green.css')}}">
{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

</head>
<body class="gray">

<div id="app">
  <!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fullwidth dashboard-header not-sticky">

        <!-- Header -->
    <backheader auth="{{auth()->user()}}"></backheader>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard Container -->
    <div class="dashboard-container">

        <!-- Dashboard Sidebar
        ================================================== -->
        <div class="dashboard-sidebar">
            <div class="dashboard-sidebar-inner" data-simplebar>
                <div class="dashboard-nav-container">

                    <!-- Responsive Navigation Trigger -->
                    <a href="#" class="dashboard-responsive-nav-trigger">
                        <span class="hamburger hamburger--collapse" >
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                        <span class="trigger-title">Dashboard Navigation</span>
                    </a>

                    <!-- Navigation -->
                    <div class="dashboard-nav">
                        <div class="dashboard-nav-inner">

                            <ul data-submenu-title="Start">
                            <li class="active"><a href="{{url('/home')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                            <li><a href="{{url('/usermessages')}}"><i class="icon-material-outline-question-answer"></i> Messages </a></li>

                            <li><a href="{{url('/userreviews')}}"><i class="icon-material-outline-rate-review"></i> Reviews</a></li>
                            </ul>

                            <ul data-submenu-title="Organize and Manage">

                                <li><a href="/userjobs"><i class="icon-material-outline-assignment"></i>My Job Applications</a>

                                </li>
                            </ul>

                            <ul data-submenu-title="Account">
                            <li><a href="{{url('/useraccount')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
                                <li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                            </ul>

                        </div>
                    </div>
                    <!-- Navigation / End -->

                </div>
            </div>
        </div>
        <!-- Dashboard Sidebar / End -->

@yield('content')


</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

</div>

<!-- Scripts
================================================== -->
<script type="application/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>



<script type="application/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>



<script type="application/javascript" src="{{asset('js/mmenu.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/tippy.all.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/simplebar.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/bootstrap-slider.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/snackbar.js')}}"></script>
<script type="application/javascript" src="{{asset('js/clipboard.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/counterup.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/magnific-popup.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/slick.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/custom.js')}}"></script>
<script type="application/javascript">
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
        </script>

        <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
    <script type="application/javascript" src="{{asset('js/chart.min.js')}}"></script>



        </body>
        </html>
