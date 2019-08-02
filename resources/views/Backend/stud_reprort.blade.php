@extends('layouts.app')
@section('title', 'Students Marks')
@section('content')
<?php $x = 1; ?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Students Marks Details</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">Student</a></li>
        </ul>
      </div>
      <div class="row">
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Filter</h3>
            <form class="form-horizontal" action="{{url('stud_answer')}}" method="POST">
                {{ csrf_field() }}
                <div class="tile-body">
                    <div class="form-group row">
                      <label class="control-label col-md-2">From Date</label>
                      <div class="col-md-4">
                          <input class="form-control demoDate" name="from_date" type="text" placeholder="Select Date">
                      </div>
                      <label class="control-label col-md-2">To Date</label>
                      <div class="col-md-4">
                        <input class="form-control demoDate" name="to_date" type="text" placeholder="Select Date">
                      </div>
                    </div>
                </div>
                <div class="tile-footer">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <input class="btn btn-primary" value="Download Report" name="Submit" type="submit">&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                  </div>
                </div>
           </form>
          </div>
          </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Collage Name</th>
                    <th>Score</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($answer as $row)
                  <tr>
                      <td>{{$x++}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile_no}}</td>
                    <td>{{$row->collage_name}}</td>
                    <td>{{$row->score}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
