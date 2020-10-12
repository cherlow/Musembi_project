@extends('layouts.pageslayout')
@section('headers')
    <title>register </title>
    <meta name="description" content="Huge community of designers, developers and creatives ready for your project.">
    <meta name="keywords" content="Huge community of designers, developers and creatives ready for your project.">

@endsection

@section('content')
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">

            <headercomponent />

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
                            <h3 style="font-size: 26px;">Let's create your account!</h3>
                            <span>Already have an account? <a href="{{ url('/login') }}">Log In!</a></span>
                        </div>

                        <!-- Account Type -->
                        {{-- <div class="account-type">
                            <div>
                                <input type="radio" name="account-type-radio" id="freelancer-radio"
                                    class="account-type-radio" checked />
                                <label for="freelancer-radio" class="ripple-effect-dark"><i
                                        class="icon-material-outline-account-circle"></i> Freelancer</label>
                            </div>

                            <div>
                                <input type="radio" name="account-type-radio" id="employer-radio"
                                    class="account-type-radio" />
                                <label for="employer-radio" class="ripple-effect-dark"><i
                                        class="icon-material-outline-business-center"></i> Employer</label>
                            </div>
                        </div> --}}

                        <!-- Form -->
                        <form method="POST" action="{{ route('register') }}" id="register-account-form">
                            @csrf
                            <div class="account-type">
                                <div>
                                    <input type="radio" name="role" id="freelancer-radio" class="account-type-radio"
                                        value="hustlancer" checked />
                                    <label for="freelancer-radio" class="ripple-effect-dark"><i
                                            class="icon-material-outline-account-circle"></i> Freelancer</label>
                                </div>

                                <div>
                                    <input type="radio" name="role" id="employer-radio" class="account-type-radio"
                                        value="employer" />
                                    <label for="employer-radio" class="ripple-effect-dark"><i
                                            class="icon-material-outline-business-center"></i> Employer</label>
                                </div>
                            </div>
                            <div class="input-with-icon-left">
                                <i class="icon-feather-user"></i>
                                <input type="text" class="input-text with-border @error('name') is-invalid @enderror"
                                    name="name" placeholder="username" required />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-with-icon-left">
                                <i class="icon-material-baseline-mail-outline"></i>
                                <input type="email" class="input-text with-border @error('email') is-invalid @enderror"
                                    name="email" id="emailaddress-register" placeholder="Email Address" required />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-with-icon-left" title="Should be at least 8 characters long"
                                data-tippy-placement="bottom">
                                <i class="icon-material-outline-lock"></i>
                                <input type="password"
                                    class="input-text with-border @error('password') is-invalid @enderror" name="password"
                                    id="password-register" placeholder="Password" required />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-with-icon-left">
                                <i class="icon-material-outline-lock"></i>
                                <input type="password" class="input-text with-border" name="password_confirmation"
                                    id="password-repeat-register" placeholder="Repeat Password" required
                                    autocomplete="new-password" />
                            </div>
                            <button class="button full-width button-sliding-icon ripple-effect margin-top-10"
                                type="submit">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
                        </form>

                        <!-- Button -->



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
