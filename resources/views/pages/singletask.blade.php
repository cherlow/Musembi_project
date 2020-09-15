@extends('layouts.pageslayout')
@section('headers')
<title>{{$task->title}} </title>
<meta name="description" content="{{$task->details}}">


@endsection
@section('content')
<!-- Wrapper -->
<div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="fullwidth">
        
            <!-- Header -->
            <headercomponent auth="{{auth()->user()}}" />
            <!-- Header / End -->
        
        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        
    <singletask task="{{json_encode($task)}}" auth="{{auth()->user()}}"/>

        
        
        
        
        
        <!-- Spacer -->
        <div class="margin-top-15"></div>
        <!-- Spacer / End-->
        
      
        
        </div>
        <!-- Wrapper / End -->
        
        
        

@endsection