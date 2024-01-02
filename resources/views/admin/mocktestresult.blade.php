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
            <h1 class="m-0">Mock Test Result</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mock Test Result</li>
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
								<option value="">Select Month</option>
								@foreach($months as $key=>$val)
									<option value="{{$key}}">{{$val}}</option>
								@endforeach
							</select>
						  </div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control js-example-basic-single" id="yearselect" name="yearselect">
							  <option value="">Select Year</option>
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
							<select class="form-control js-example-basic-single" id="monthselectpr" name="monthselect">
								<option value="">Select Batch</option>
								@foreach($months as $key=>$val)
									<option value="{{$key}}">{{$val}}</option>
								@endforeach
							</select>
						  </div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control js-example-basic-single" id="yearselectpr" name="yearselect">
							  <option value="">Select Paper</option>
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
				<div class="row">
				<div class="col-md-12">
                <table id="practiceResultTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Student Name</th>
                    <th>Enrolment Id</th>
					<th>Paper Name</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>Submit Time</th>
                    <th>Total Question</th>
                    <th>Attempted Question</th>
                    <th>Time Duration</th>
                    <th>Time Taken</th>
                    <th>Right Answer</th>
                  </tr>
                  </thead>
                  <tbody>
						
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Student Name</th>
                    <th>Enrolment Id</th>
					<th>Paper Name</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>Submit Time</th>
                    <th>Total Question</th>
                    <th>Attempted Question</th>
                    <th>Time Duration</th>
                    <th>Time Taken</th>
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

