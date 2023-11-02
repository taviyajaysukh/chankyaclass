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
            <h1 class="m-0">Student Progress</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Progress</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
			<!-- Default box -->
		  <div class="card">
			<div class="card-header">
			  <h3 class="card-title">Student Details</h3>
			  <div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				  <i class="fas fa-minus"></i>
				</button>
			  </div>
			</div>
			<div class="card-body p-0">
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
			</div>
		</div>	
      </div>
    </section>
  </div>
  @endsection

