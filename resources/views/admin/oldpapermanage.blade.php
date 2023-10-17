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
            <h1 class="m-0">Old paper</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Oldparer</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addOldpaperModal">
		Add old paper
       </button>
		<div class="card">
              <div class="card-body">
                <table id="oldpaperTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Batch</th>
                    <th>Subject</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($oldpapers) && $oldpapers)
							@foreach($oldpapers as $oldpaper)
								<tr>
									<td>{{$oldpaper->id}}</td>
									<td>{{$oldpaper->title}}</td>
									<td>{{$oldpaper->batch}}</td>
									<td>{{$oldpaper->subject}}</td>
									<td>{{$oldpaper->createdby}}</td>
									<td>
									@if($oldpaper->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeOldpaperStatus" data-id="{{ $oldpaper->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeOldpaperStatus" data-id="{{ $oldpaper->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclicoldpaper" data-toggle="modal" data-target="#editOldpaperModal" data-id="{{ $oldpaper->id }}" data-title="{{ $oldpaper->title }}" data-batch="{{ $oldpaper->batch }}"  data-subject="{{ $oldpaper->subject }}" data-oldpaperfile="{{ $oldpaper->oldpaperfile }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deleteoldpaperclick" data-toggle="modal" data-target="#deleteOldpaperModal" id="deleteoldpaperclick" data-id="{{ $oldpaper->id }}"><i class="fas fa-trash"></i></a>
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
                    <th>Batch</th>
                    <th>Subject</th>
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

