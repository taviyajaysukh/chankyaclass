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
            <h1 class="m-0">Teacher</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Teacher</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addTeacherModal">
		Add teacher
       </button>
		<div class="card">
              <div class="card-body">
                <table id="extraClassesTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Education</th>
                    <th>Gender</th>
					<th>Subjects</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($teachers) && $teachers)
							@foreach($teachers as $teacher)
								<tr>
									<td>{{$teacher->id}}</td>
									<td>{{$teacher->name}}</td>
									<td>{{$teacher->email}}</td>
									<td>{{$teacher->education}}</td>
									<td>{{$teacher->gender}}</td>
									<td>{{$teacher->subject}}</td>
									<td>{{$teacher->createdby}}</td>
									<td>
									@if($teacher->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeTeacherStatus" data-id="{{ $teacher->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeTeacherStatus" data-id="{{ $teacher->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group">
											<button type="button" class="btn btn-default btn-flat">Action</button>
											<button type="button" class="btn btn-default btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
											  <span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu custom-table-dropdown" role="menu">
											  <div class="dropdown-divider"></div>
												<a class="dropdown-item editClickTeacher"  href="javascript:void(0)" data-toggle="modal" data-target="#editTeacherModal" data-id="{{ $teacher->id }}" data-name="{{ $teacher->name }}" data-gender="{{ $teacher->gender }}" data-email="{{ $teacher->email }}" data-eduation="{{ $teacher->education }}" data-image="{{ $teacher->teacherimage }}" data-subject="{{ $teacher->subject }}" data-moduleaccess="{{ $teacher->moduleaccess }}">
													Edit
												</a>
												<a class="dropdown-item deletestudentrecord" data-toggle="modal" data-target="#deleteTeacherModal" data-id="{{ $teacher->id }}" href="javascript:void(0)">
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
                    <th>Education</th>
                    <th>Gender</th>
					<th>Subjects</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
      </div>
    </section>
  </div>
  @endsection

