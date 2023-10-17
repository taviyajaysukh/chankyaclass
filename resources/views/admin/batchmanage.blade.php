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
            <h1 class="m-0">Batch manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Batch manage</li>
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
		<a href="addbatch" class="btn btn-default">
		Add batch
       </a>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="batchTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
					<th>Created By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($batches)
						@foreach($batches as $batch)
							<tr>
								<td>{{$batch->id}}</td>
								<td>{{$batch->createdby}}</td>
								<td>
									@if($batch->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeBatchStatus custom-statusbtn" data-id="{{ $batch->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeBatchStatus custom-statusbtn" data-id="{{ $batch->id }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delbatchid" data-toggle="modal" data-target="#deleteBatchModal" id="deletebatchidid" data-id="{{ $batch->id }}"><i class="fas fa-trash"></i></a>
								
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
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

