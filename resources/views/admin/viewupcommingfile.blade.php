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
            <h1 class="m-0">Upcomming Exams File</h1>
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
		<div class="card">
              <div class="card-body">
			  @php
			    if($uploadfile !=''){
				 $fileext = explode('.',$uploadfile);
				 $extimage = array('jpg','jpeg','png');
				 $extfile = array('pdf','doc','docs');
				 if(in_array($fileext[1],$extimage)){
			 @endphp
			    <img src="{{ asset('uploads') }}/{{ $uploadfile }}" alt="imagename" style="max-width:100%;width:100%;max-height:500px;height:auto;">
			 @php 	
				 }
				 if(in_array($fileext[1],$extfile)){
			 @endphp
			 <embed
				src="http://infolab.stanford.edu/pub/papers/google.pdf#toolbar=0&navpanes=0&scrollbar=0"
				frameBorder="0"
				scrolling="auto"
				height="400"
				width="100%"
			></embed>
			 @php	
				 }
				}
			  @endphp
              </div>
            </div>
      </div>
    </section>
  </div>
  @endsection

