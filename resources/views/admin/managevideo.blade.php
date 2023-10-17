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
            <h1 class="m-0">Video</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Video</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addVideoModal">
		Add video
       </button>
		<div class="card">
              <div class="card-body">
                <table id="videoTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Batch</th>
                    <th>Subject</th>
                    <th>Chapter</th>
                    <th>Source</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($videos) && $videos)
							@foreach($videos as $video)
								<tr>
									<td>{{$video->id}}</td>
									<td>{{$video->title}}</td>
									<td>{{$video->batch}}</td>
									<td>{{$video->subject}}</td>
									<td>{{$video->chapter}}</td>
									<td>{{$video->source}}</td>
									<td>{{$video->createdby}}</td>
									<td>
									@if($video->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeVideoStatus" data-id="{{ $video->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeVideoStatus" data-id="{{ $video->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclickvideo" data-toggle="modal" data-target="#editVideoModal" data-id="{{ $video->id }}" data-title="{{ $video->title }}" data-batch="{{ $video->batch }}" data-subject="{{ $video->subject }}" data-chapter="{{ $video->chapter }}" data-source="{{ $video->source }}" data-url="{{ $video->url }}" data-video="{{ $video->video }}" data-description="{{ $video->description }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deletevideoclick" data-toggle="modal" data-target="#deleteVideoModal" data-id="{{ $video->id }}" id="deletevideoclick"><i class="fas fa-trash"></i></a>
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
                    <th>Chapter</th>
                    <th>Source</th>
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

