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
            <h1 class="m-0">Notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notice</li>
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
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNoticeModal">
		Add Notice
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="noticeTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Notice For</th>
                    <th>CretatedBy</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($notices)
						@foreach($notices as $notice)
							<tr>
								<td>{{$notice->id}}</td>
								<td>{{$notice->title}}</td>
								<td>{{$notice->notice}}</td>
								<td>{{$notice->noticefor}}</td>
								<td>{{$notice->createdby}}</td>
								<td>
								
									@if($notice->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeNoticeStatus" data-id="{{ $notice->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeNoticeStatus" data-id="{{ $notice->id }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editnoticeid" data-toggle="modal" data-target="#editNoticeModal" data-id="{{ $notice->id }}" data-noticetitle="{{ $notice->title }}" data-noticefor="{{ $notice->noticefor }}" data-noticedescription="{{ $notice->notice }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delnoticeid" data-toggle="modal" data-target="#deleteNoticeModal" id="deletenoticeid" data-id="{{ $notice->id }}"><i class="fas fa-trash"></i></a>
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Notice For</th>
                    <th>Status</th>
                    <th>CretatedBy</th>
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

