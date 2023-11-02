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
            <h1 class="m-0">Student Notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Notice</li>
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
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addStudentNoticeModal">
		Add Notice
       </button>
			<!-- Default box -->
		  <div class="card">
			<div class="card-header">
			  <h3 class="card-title">Student Notice Details</h3>
			  <div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				  <i class="fas fa-minus"></i>
				</button>
			  </div>
			</div>
			<div class="card-body p-2">
				<div class="row">
					<div class="col-md-5">
					<!-- Widget: user widget style 2 -->
					<div class="card card-widget widget-user-2">
					  <!-- Add the bg color to the header using any of the bg-* classes -->
					  <div class="widget-user-header bg-info">
						<div class="widget-user-image">
						  <img class="img-circle elevation-2" src="{{asset('/')}}uploads/student/{{@$students[0]->student_image}}" alt="User Avatar">
						</div>
						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">{{@$students[0]->student_name}}</h3>
						<h5 class="widget-user-desc">{{@$students[0]->gender}}</h5>
					  </div>
					  <div class="card-footer p-0">
						<ul class="nav flex-column">
						  <li class="nav-item">
							<a href="#" class="nav-link">
							  Gender <span class="float-right badge bg-info">{{@$students[0]->gender}}</span>
							</a>
						  </li>
						  <li class="nav-item">
							<a href="#" class="nav-link">
							  Email <span class="float-right badge bg-info">{{@$students[0]->email}}</span>
							</a>
						  </li>
						  <li class="nav-item">
							<a href="#" class="nav-link">
							  Contact Number <span class="float-right badge bg-info">{{@$students[0]->contact_number}}</span>
							</a>
						  </li>
						  <li class="nav-item">
							<a href="#" class="nav-link">
							  Batch Name<span class="float-right badge bg-info">{{@$students[0]->batch}}</span>
							</a>
						  </li>
						  <li class="nav-item">
							<a href="#" class="nav-link">
							  Admission Date<span class="float-right badge bg-info">{{@$students[0]->created_at}}</span>
							</a>
						  </li>
						</ul>
					  </div>
					</div>
					<!-- /.widget-user -->
				  </div>
				</div>
				<table id="studentNoticeTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Added By</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($notices) && $notices)
							@foreach($notices as $notice)
								<tr>
									<td>{{$notice->id}}</td>
									<td>{{$notice->title}}</td>
									<td>{{$notice->notice}}</td>
									<td>{{$notice->createdby}}</td>
									<td>{{$notice->created_at}}</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Added By</th>
                    <th>Date</th>
                  </tr>
                  </tfoot>
                </table>
			</div>
		</div>	
      </div>
    </section>
  </div>
  @endsection

