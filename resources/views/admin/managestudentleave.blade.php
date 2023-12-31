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
            <h1 class="m-0">Student Leave Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Leave</li>
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
                <table id="studentLeaveTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Index</th>
                    <th>Student Name</th>
                    <th>Apply Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Total Dates</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
					<tbody>
						@if(isset($applyleaves) && $applyleaves)
							@foreach($applyleaves as $applyleave)
								<tr>
								@php
									$studentname = \App\Models\Student::select('student_name')->where('contact_number',$applyleave->applyby)->first();
									$date1 = new DateTime($applyleave->from_date);
									$date2 = new DateTime($applyleave->to_date);
									$days  = $date2->diff($date1)->format('%a');
								@endphp
									<td>{{$applyleave->id}}</td>
									<td>{{$studentname['student_name']}}</td>
									<td>{{$applyleave->created_at}}</td>
									<td>{{$applyleave->from_date}}</td>
									<td>{{$applyleave->to_date}}</td>
									<td>{{$days}}</td>
									<td>
									@if($applyleave->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeLeaveAppStatus" data-id="{{ $applyleave->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeLeaveAppStatus" data-id="{{ $applyleave->id }}">Deactive</a>
									@endif
									</td>
									<td>
										</a>
											<a href="javascript:void(0)" class="btn btn-default viewleaveclick" data-toggle="modal" data-target="#viewLeaveModal" id="viewleaveclick" data-subject="{{$applyleave->subject}}" data-message="{{$applyleave->message}}" data-fromdate="{{$applyleave->from_date}}" data-todate="{{$applyleave->to_date}}" data-id="{{ $applyleave->id }}"><i class="fas fa-eye"></i></a>
									</td>
								</tr>
							@endforeach
						@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Student Name</th>
                    <th>Apply Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Total Dates</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

