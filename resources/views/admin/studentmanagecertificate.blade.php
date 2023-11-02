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
            <h1 class="m-0">Certificate</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificate</li>
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
                <table id="studentAttendaceTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Batch Name</th>
                    <th>Certificate</th>
					<th>View</th>
                  </tr>
                  </thead>
                  <tbody>
						<tr>
							<td>1</td>
							<td>abc</td>
							<td>
								<a href="javascript:void(0)" class="btn btn-success">
									Assign Certificate
								</a>		
							</td>
							<td>
								<a href="javascript:void(0)" class="btn btn-default">
									<i class="fas fa-eye"></i>
								</a>		
							</td>
						</tr>	
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Batch Name</th>
                    <th>Certificate</th>
					<th>View</th>
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

