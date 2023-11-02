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
            <h1 class="m-0">Apply Leave</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Apply Leave</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#applyLeaveModal">
			Apply Leave
       </button>
		<div class="card">
              <div class="card-body">
                <table id="applyleaveTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>From Date</th>
                    <th>To date</th>
                    <th>Subject</th>
                    <th>Message</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($applyleaves) && $applyleaves)
							@foreach($applyleaves as $applyleave)
								<tr>
									<td>{{$applyleave->id}}</td>
									<td>{{$applyleave->from_date}}</td>
									<td>{{$applyleave->to_date}}</td>
									<td>{{$applyleave->subject}}</td>
									<td>{{$applyleave->message}}</td>
									<td>{{$applyleave->createdby}}</td>
									<td>
									@if($applyleave->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeApplyleaveStatus" data-id="{{ $applyleave->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeApplyleaveStatus" data-id="{{ $applyleave->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclickapplyleave" data-toggle="modal" data-target="#editApplyleaveModal" data-id="{{ $applyleave->id }}" data-fromdate="{{ $applyleave->from_date }}"  data-todate="{{ $applyleave->to_date }}" data-subject="{{ $applyleave->subject }}" data-message="{{ $applyleave->message }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deleteApplyleaveclick" data-toggle="modal" data-target="#deleteApplyleaveModal" id="deleteApplyleaveclick" data-id="{{ $applyleave->id }}"><i class="fas fa-trash"></i></a>
										  </div>
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>From Date</th>
                    <th>To date</th>
                    <th>Subject</th>
                    <th>Message</th>
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

