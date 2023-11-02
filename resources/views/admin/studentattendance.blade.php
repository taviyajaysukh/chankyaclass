@extends('layouts.master')
<style>

</style>
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Attendance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<?php
								$months = array(
									'january'=>'January',
									'february'=>'February',
									'march'=>'March',
									'april'=>'April',
									'may'=>'May',
									'june'=>'June',
									'july'=>'July',
									'august'=>'August',
									'september'=>'September',
									'october'=>'October',
									'november'=>'November',
									'december'=>'December',
								);
								$years = array(
									'2019'=>'2019',
									'2020'=>'2020',
									'2021'=>'2021',
									'2022'=>'2022',
									'2023'=>'2023',
								);
							?>
							<select class="form-control js-example-basic-single" id="monthselect" name="monthselect">
								@foreach($months as $key=>$val)
									<option value="{{$key}}">{{$val}}</option>
								@endforeach
							</select>
						  </div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control js-example-basic-single" id="yearselect" name="yearselect">
							  @foreach($years as $key=>$val)
									<option value="{{$key}}">{{$val}}</option>
								@endforeach
							</select>
						  </div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<button class="btn btn-success" id="filterattendance" value="search">Search</button>
						</div>	
					</div>
				</div>
                <table id="studentAttendaceTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Date</th>
                    <th>Time</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($students) && $students)
							@foreach($students as $student)
								<tr>
									<td>{{$student->id}}</td>
									<td>{{$student->student_name}}</td>
									<td>{{$student->email}}</td>
									<td>
									@if($student->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeStudentStatus" data-id="{{ $student->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeStudentStatus" data-id="{{ $student->id }}">Deactive</a>
									@endif
									</td>
									<td>
										action
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Date</th>
                    <th>time</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </section>
  </div>
  @endsection

