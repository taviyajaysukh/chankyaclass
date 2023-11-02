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
            <h1 class="m-0">Assignment Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Assignment</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addAssignmentModal">
			Add Assignment
       </button>
		<div class="card">
              <div class="card-body">
                <table id="assignmentTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Batch</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Description</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($assignments) && $assignments)
							@foreach($assignments as $assignment)
								<tr>
									<td>{{$assignment->id}}</td>
									<td>{{$assignment->batch_id}}</td>
									<td>{{$assignment->subject_id}}</td>
									<td>{{$assignment->assigndate}}</td>
									<td>{{$assignment->assigndescription}}</td>
									<td>{{$assignment->createdby}}</td>
									<td>
									@if($assignment->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeAssignmentStatus" data-id="{{ $assignment->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeAssignmentStatus" data-id="{{ $assignment->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclickassignment" data-toggle="modal" data-target="#editAssignmentModal" data-id="{{ $assignment->id }}" data-batch="{{ $assignment->batch_id }}"  data-subject="{{ $assignment->subject_id }}" data-assigndate="{{ $assignment->assigndate }}" data-assigndescription="{{ $assignment->assigndescription }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deleteAssignmentclick" data-toggle="modal" data-target="#deleteAssignmentModal" id="deleteAssignmentclick" data-id="{{ $assignment->id }}"><i class="fas fa-trash"></i></a>
										  </div>
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Batch</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Description</th>
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

