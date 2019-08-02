@extends('layouts.app')
@section('title', 'Upload Question')
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    @if (Session::has('alert-success'))
    <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Success!</h4>
        {{ Session::get('alert-success') }}
    </div>
    @endif
    
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" id="design-form" method="post" action="{{ url('progaming_quetions') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Upload Programing Question</h3>
                    <div class="tile-body">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Question</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="questions" id="questions" rows="3"></textarea>
                                <!--<input type="text" name="question" id="question" onchange="return fileValidation()" class="required form-control" />-->
                            </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Upload</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="{{url('uplaod_quations')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
