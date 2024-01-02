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
            <h1 class="m-0">Manage student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage student</li>
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
		Add Student
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
												<a class="dropdown-item" href="studentattendance/{{$student->id}}">
													Attendance
												</a>
												<a class="dropdown-item" href="studentmanagecertificate/{{$student->id}}">
													Manage Certificate
												</a>
												<a class="dropdown-item" href="extraclassattendance/{{$student->id}}">
													Extra Class Attendance
												</a>
												<a class="dropdown-item" href="studentprogress/{{$student->id}}">
													Progress
												</a>
												<a class="dropdown-item" href="studentacademicrecord/{{$student->id}}">
													Academic Record
												</a>
												<a class="dropdown-item" href="studentnotice/{{$student->id}}">
													Notice
												</a>
												<a class="dropdown-item" href="studentdoubtask/{{$student->id}}">
													Doubts Ask
												</a>
												<a class="dropdown-item changebtnpass" href="javascript:void(0)" data-id="{{$student->id}}" >
													Change Password
												</a>
												<a class="dropdown-item" href="editstudent/{{$student->id}}">
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

