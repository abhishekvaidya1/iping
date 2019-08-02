@extends('layouts.app_apti')
@section('title', 'Home')
@section('content')
<style>
    .control-label{
        font-weight: bold;
    }
</style>
<?php $activation = \App\Activation::orderBy('id','desc')->first(); ?>
<main class="app-content" style="margin: 50px;">
<!--    <div class="app-title">
        <div>
            <h1>Welcome To Online Aptitude Test</h1>
        </div>
    </div>-->
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align:center;">Welcome To Online Test</h2>
        <br/>
        <?php if($activation->apti_test == "on"){ ?>
        <div class="row">
        <div class="col-md-6 col-lg-4"></div>
        <?php $user_id = Auth::user()->id; if(\App\Answer::where('stud_id', $user_id)->exists()){ ?>
        <div class="col-md-6 col-lg-4" style="margin-left: 82px;">
            <b>You Have Already Given Test </b>
        </div>
            
        <?php } else { ?>
        <div class="col-md-6 col-lg-3" style="margin-left: 38px;">
            <a href="{{url('test')}}" class="btn btn-primary btn-lg" >Click Here To Start Aptitude Test</a>
        </div>
        <?php } ?>
        </div>
        <?php } if($activation->program_test == "on"){ ?>
        <br/>
        <div class="row">
        <div class="col-md-6 col-lg-4"></div>
        <?php $user_id = Auth::user()->id; if(\App\Answer::where('stud_id', $user_id)->exists()){ ?>
        <div class="col-md-6 col-lg-4" style="margin-left: 82px;">
            <b>You Have Already Given Test </b>
        </div>
            
        <?php } else { ?>
        <div class="col-md-6 col-lg-3" style="margin-left: 28px;">
            <a href="{{url('programing_questions')}}" class="btn btn-primary btn-lg" >Click Here To Start Programing Test</a>
        </div>
        <?php } ?>
        </div>
        <?php } ?>
        </div>
    </div>
</main>

@endsection
