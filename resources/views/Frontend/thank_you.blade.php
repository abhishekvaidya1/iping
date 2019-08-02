@extends('layouts.app_apti')
@section('title', 'Home')
@section('content')
<style>
    .control-label{
        font-weight: bold;
    }
</style>
<main class="app-content" style="margin: 50px;">
<!--    <div class="app-title">
        <div>
            <h1>Welcome To Online Aptitude Test</h1>
        </div>
    </div>-->
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">Thank You !</h2>
        <br/>
<!--        <div class="row">
        <div class="col-md-6 col-lg-5"></div>
        
        <div class="col-md-6 col-lg-3" >
            <a href="{{url('test')}}" class="btn btn-primary btn-lg" >Click Here To Start Test</a>
        </div>-->
        </div>
        </div>
    </div>
</main>

@endsection
