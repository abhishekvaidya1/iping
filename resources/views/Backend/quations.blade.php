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
            <form class="form-horizontal" id="design-form" method="post" action="{{ url('uplaod_quations') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Question Upload Using Excel File</h3>
                    <div class="tile-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Select File</label>
                            <div class="col-md-8">
                                <input type="file" name="sample_file" id="sample_file" onchange="return fileValidation()" class="required form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3"></label>
                            <a href="sample.xlsx">Click Here To Download Sample File</a>
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
    
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" id="design-form" method="post" action="{{ url('uplaod_quations_img') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Question Upload With Image</h3>
                    <div class="tile-body">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Question</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="question" id="question" rows="3"></textarea>
                                <!--<input type="text" name="question" id="question" onchange="return fileValidation()" class="required form-control" />-->
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Option1</label>
                            <div class="col-md-4">
                                <input type="text" name="option1" id="option1" class="required form-control" />
                            </div>
                            <label class="control-label col-md-2">Option2</label>
                            <div class="col-md-4">
                                <input type="text" name="option2" id="option2" class="required form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Option3</label>
                            <div class="col-md-4">
                                <input type="text" name="option3" id="option3" class="required form-control" />
                            </div>
                            <label class="control-label col-md-2">Option4</label>
                            <div class="col-md-4">
                                <input type="text" name="option4" id="option4" class="required form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Answer</label>
                            <div class="col-md-4">
                                <input type="text" name="answer" id="answer" onchange="return fileValidation()" class="required form-control" />
                            </div>
                            <label class="control-label col-md-2">Marks</label>
                            <div class="col-md-4">
                                <input type="text" name="marks" id="marks" onchange="return fileValidation()" class="required form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Problem Figure</label>
                            <div class="col-md-4">
                                <input type="file" name="problem_fig" id="problem_fig" onchange="return fileValidation()" class="required form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-2">Answer Figure</label>
                            <div class="col-md-4">
                                <input type="file" name="answer_fig" id="answer_fig" onchange="return fileValidation()" class="required form-control" />
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
