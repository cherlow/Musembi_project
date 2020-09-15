@extends('layouts.pageslayout')
@section('headers')
<title>{{$user->name}} </title>
<meta name="description" content="{{$user->description}}">


@endsection
@section('content')
<!-- Wrapper -->
<div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">
        
            <!-- Header -->
            <headercomponent auth="{{auth()->user()}}"/>
            <!-- Header / End -->
        
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        
        
        
       <singlehustlancer resource="{{json_encode($resource)}}"></singlehustlancer>
        
        <!-- Spacer -->
        <div class="margin-top-15"></div>
        <!-- Spacer / End-->
        
     
        
        </div>
        <!-- Wrapper / End -->
        
       
@endsection