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
            <h1 class="m-0">Doubts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Doubts</li>
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
                <table id="studentLeaveTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>Index</th>
                    <th>Student Name</th>
                    <th>Apply Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Total Dates</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Student Name</th>
                    <th>Apply Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Total Dates</th>
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

