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
            <h1 class="m-0">Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addGalleryModal">
		Add gallery
       </button>
		<div class="card">
              <div class="card-body">
                <table id="galleryTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Type</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($galleries) && $galleries)
							@foreach($galleries as $gallery)
								<tr>
									<td>{{$gallery->id}}</td>
									<td>{{$gallery->title}}</td>
									<td>{{$gallery->type}}</td>
									<td>{{$gallery->createdby}}</td>
									<td>
									@if($gallery->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeGalleryStatus" data-id="{{ $gallery->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeGalleryStatus" data-id="{{ $gallery->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclickgallery" data-toggle="modal" data-target="#editGalleryModal" data-id="{{ $gallery->id }}" data-title="{{ $gallery->title }}" data-type="{{ $gallery->type }}" data-image="{{ $gallery->image }}" data-source="{{ $gallery->source }}" data-url="{{ $gallery->url }}" data-video="{{ $gallery->video }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deletegalleryclick" data-toggle="modal" data-target="#deleteGalleryModal" id="deletegalleryclick" data-id="{{ $gallery->id }}"><i class="fas fa-trash"></i></a>
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
                    <th>Type</th>
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

