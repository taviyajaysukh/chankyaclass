@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Payment setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment setting</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
		  <div class="card-body">
				<form action="updatepaymentsettings" id="updatepaymentsettings" method="POST">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<input type="hidden" name="paymentsettingid" value="{{@$paymentsettings->id}}">
						<div class="form-group">
							<label for="name">Currency</label>
							<select class="form-control" id="paymentcurrency" name="paymentcurrency">
							  <option value="">Select currency</option>
								  @if($currency)
									@foreach($currency as $cunc)
								  <option value="{{@$cunc->name}}" {{ $cunc->name == $paymentsettings->currency ? 'selected' : '' }}>{{@$cunc->name}}</option>
								  @endforeach
								@endif
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Payment Type</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if(isset($paymentsettings->paymenttype) && $paymentsettings->paymenttype == 'razorpay')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="paymenttype" id="razorpay" autocomplete="off" value="razorpay">Razorpay
							  </label>
							@else
							<label class="btn btn-secondary">
								<input type="radio" name="paymenttype" id="razorpay" autocomplete="off" value="razorpay">Razorpay
							  </label>	
							@endif		
							@if(isset($paymentsettings->paymenttype) && $paymentsettings->paymenttype == 'paypal')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="paymenttype" id="paypal" autocomplete="off" value="paypal">Paypal
							  </label>
							@else 
							<label class="btn btn-secondary">
								<input type="radio" name="paymenttype" id="paypal" autocomplete="off" value="paypal">Paypal
							  </label>
							@endif	
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Razorpay Key Id</label>
							<input type="text" name="razorpaykeyid" id="razorpaykeyid" class="form-control" placeholder="xyz" value="{{@$paymentsettings->razorpaykeyid}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Razorpay Secret Key</label>
							<input type="text" name="razorpaysecretkey" id="razorpaysecretkey" class="form-control" placeholder="xyz" value="{{@$paymentsettings->razorpaysecretkey}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Paypal Client Id</label>
							<input type="text" name="paypalclientid" id="paypalclientid" class="form-control" placeholder="xyz" value="{{@$paymentsettings->paypalclientid}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Sandbox Accounts</label>
							<input type="text" name="paypalsandboxaccount" id="paypalsandboxaccount" class="form-control" placeholder="xyz" value="{{@$paymentsettings->paypalsandboxaccount}}">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

