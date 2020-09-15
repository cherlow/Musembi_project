@extends('layouts.pageslayout')
@section('headers')
<title>login </title>
<meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
<meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection
@section('content')
<!-- Wrapper -->
<div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">
        
         <headercomponent/>
        
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        
        <!-- Titlebar
        ================================================== -->
       <div class="margin-bottom-70"></div>
        
        <!-- Page Content
        ================================================== -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
        
        
                    <div class="login-register-page">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h3>We're glad to see you again!</h3>
                        <span>Don't have an account? <a href="{{url('/register')}}">Sign Up!</a></span>
                        </div>
                            
                        <!-- Form -->
                        <form action="{{ route('login') }}" method="POST" id="login-form">
                            @csrf
                            <div class="input-with-icon-left">
                                <i class="icon-material-baseline-mail-outline"></i>
                                <input type="email" class="input-text with-border" name="email" id="emailaddress" placeholder="Email Address" required/>
                            </div>
        
                            <div class="input-with-icon-left">
                                <i class="icon-material-outline-lock"></i>
                                <input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <a href="#" class="forgot-password">Forgot Password?</a>

                            <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
                        </form>
                        
                        <!-- Button -->
                        
                        
                        <!-- Social Login -->
                        <div class="social-login-separator"><span>or</span></div>
                        <div class="social-login-buttons">
                            <button class="github-login ripple-effect"><i class="icon-brand-github"></i> Log In via Github</button>
                            <button class="google-login ripple-effect"><i class="icon-line-awesome-envelope-o"></i> Log In via Google</button>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        
        
        <!-- Spacer -->
        <div class="margin-top-70"></div>
        <!-- Spacer / End-->
        
      
        
        </div>
        <!-- Wrapper / End -->
@endsection
