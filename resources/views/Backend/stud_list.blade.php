@extends('layouts.app')
@section('title', 'Register Students')
@section('content')
<?php $x = 1; ?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Register Students List</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">Student</a></li>
        </ul>
      </div>
      <div class="row">
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($stud_list as $row)
                  <tr>
                      <td>{{$x++}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile_no}}</td>
                    <td>{{$row->collage_name}}</td>
                    <td><a href="{{url('edit_stud?id='.$row->id)}}">Edit</a></td>
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
