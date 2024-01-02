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
            <h1 class="m-0">Enquiry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enquiry</li>
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
                <table id="studentPaymentHistoryTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Mobile</th>
					<th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Mobile</th>
					<th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </section>
  </div>
  @endsection

