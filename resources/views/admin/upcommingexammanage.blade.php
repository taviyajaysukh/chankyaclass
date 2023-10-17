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
            <h1 class="m-0">Upcomming Exams</h1>
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
        <!-- Small boxes (Stat box) -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addUpexamModal">
		Add Exam
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="upcommingexamTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>End Date</th>
                    <th>Mode</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($upexamp)
						@foreach($upexamp as $upexampdt)
							<tr>
								<td>{{$upexampdt->id}}</td>
								<td>{{$upexampdt->title}}</td>
								<td>{{$upexampdt->description}}</td>
								<td>{{$upexampdt->startdate}}</td>
								<td>{{$upexampdt->enddate}}</td>
								<td>{{$upexampdt->applicationmode}}</td>
								<td>{{$upexampdt->createdby}}</td>
								<td>
								
									@if($upexampdt->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeUpexamStatus custom-statusbtn" data-id="{{ $upexampdt->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeUpexamStatus custom-statusbtn" data-id="{{ $upexampdt->id }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editupexamid" data-toggle="modal" data-target="#editUpexamModal" data-id="{{ $upexampdt->id }}" data-upexamtitle="{{ $upexampdt->title }}" data-upexampdescription="{{ $upexampdt->description }}" data-upexamstartdate="{{ $upexampdt->startdate }}" data-upexamenddate="{{ $upexampdt->enddate }}" data-upexammode="{{ $upexampdt->applicationmode }}" data-upexamuploadfile="{{ $upexampdt->uploadfile }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delupcommexamid" data-toggle="modal" data-target="#deleteUpexamModal" id="deleteupexamid" data-id="{{ $upexampdt->id }}"><i class="fas fa-trash"></i></a>
									<a href="viewupcommingfile/{{ $upexampdt->id }}" class="btn btn-info viewupcommexamid"><i class="fas fa-eye"></i></a>
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
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>End Date</th>
                    <th>Mode</th>
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

