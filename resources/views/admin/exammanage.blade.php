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
            <h1 class="m-0">Paper Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paper manage</li>
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
                <table id="paperTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Paper Name</th>
                    <th>Paper Type</th>
                    <th>Batch</th>
                    <th>Total Question</th>
                    <th>Time Duration</th>
                    <th>Negative Marking %</th>
                    <th>Scheduled Date</th>
                    <th>Scheduled Time</th>
					<th>Created By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($papers)
						@foreach($papers as $paper)
							<tr>
								<td>{{$paper->id}}</td>
								<td>{{$paper->paper_name}}</td>
								<td>{{$paper->paper_type}}</td>
								<td>{{$paper->batch_id}}</td>
								<td>{{$paper->number_of_question}}</td>
								<td>{{$paper->time_duration}}</td>
								<td>{{$paper->negative_marketing_value}}</td>
								<td>{{$paper->mocktest_schedule_date}}</td>
								<td>{{$paper->mocktest_schedule_time}}</td>
								<td>{{$paper->createdby}}</td>
								<td>
									@if($paper->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changePaperStatus custom-statusbtn" data-id="{{ $paper->id }}" onclick="getpaperid('{{$paper->id}}')">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changePaperStatus custom-statusbtn" data-id="{{ $paper->id }}" onclick="getpaperid('{{$paper->id}}','changestatus')">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="editpaper/{{$paper->id}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delbatchid" data-toggle="modal" data-target="#deletePaperModal" onclick="getpaperid('{{$paper->id}}','delete')"><i class="fas fa-trash"></i></a>
								
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Paper Name</th>
                    <th>Paper Type</th>
					<th>Batch</th>
                    <th>Total Question</th>
                    <th>Time Duration</th>
                    <th>Negative Marking %</th>
                    <th>Scheduled Date</th>
                    <th>Scheduled Time</th>
					<th>Created By</th>
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

