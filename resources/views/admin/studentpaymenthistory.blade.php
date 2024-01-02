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
            <h1 class="m-0">Payment History</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment History</li>
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
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label>From date</label>
							<input type="Date" name="student_fromdate" id="student_fromdate" class="form-control student_fromdate" placeholder="From Date">
						  </div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<label>To date</label>
							<input type="Date" name="student_todate" id="student_todate" class="form-control student_todate" placeholder="To Date">
						  </div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<button class="btn btn-success" id="paymenthistory" value="search">Search</button>
						</div>	
					</div>
				</div>
                <table id="studentPaymentHistoryTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Batch</th>
					<th>Mode</th>
                    <th>Transaction Id</th>
                    <th>Amount</th>
                    <th>Payment Date</th>
                  </tr>
                  </thead>
                  <tbody>
						
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Batch</th>
					<th>Mode</th>
                    <th>Transaction Id</th>
                    <th>Amount</th>
                    <th>Payment Date</th>
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

