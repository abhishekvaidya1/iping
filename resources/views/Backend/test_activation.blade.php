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
            <form class="form-vartical" id="design-form" method="post" action="{{ url('activation_link') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="tile">
                    <h3 class="tile-title">Test Activation</h3>
                    <div class="tile-body">
                        <div class="row">
                        <div class="col-md-6">
                            <p><b>Active Aptitude Test</b></p>
                            <div class="toggle-flip">
                              <label>
                                  <input type="checkbox" name="apti_test" id="apti_test" <?php if(isset($activation->apti_test)) { if($activation->apti_test == "on") echo "checked"; }?>><span class="flip-indecator" data-toggle-on="ON"  data-toggle-off="OFF" ></span>
                              </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p><b>Active Programing Test</b></p>
                            <div class="toggle-flip">
                              <label>
                                  <input type="checkbox" name="program_test" id="program_test" <?php if(isset($activation->program_test)) { if($activation->program_test == "on") echo "checked"; } ?>><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                              </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="{{url('activation_link')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
