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
            <taskcomponent></taskcomponent>
        </div>
        
        
  
        
        </div>
        <!-- Wrapper / End -->
        

@endsection