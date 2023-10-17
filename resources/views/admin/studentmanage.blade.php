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
            <h1 class="m-0">Upcomming Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exams</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
		<a href="addstudent" class="btn btn-default">
		Add Exam
       </a>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="studentTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Conatct Number</th>
                    <th>Batch</th>
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
									<td>{{$student->contact_number}}</td>
									<td>{{$student->batch}}</td>
									<td>
									@if($student->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeStudentStatus" data-id="{{ $student->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeStudentStatus" data-id="{{ $student->id }}">Deactive</a>
									@endif
									</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-flat">Action</button>
											<button type="button" class="btn btn-default btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
											  <span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu custom-table-dropdown" role="menu">
											  <div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">
													Edit
												</a>
												<a class="dropdown-item deletestudentrecord" data-id="{{ $student->id }}" href="javascript:void(0)">
													delete
												</a>
											</div>
										  </div>
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Conatct Number</th>
                    <th>Batch</th>
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
