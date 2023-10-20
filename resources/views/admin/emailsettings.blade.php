@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Email settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Email setting</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
		  <div class="card-body">
				<form action="updateemailsettings" id="updateemailsettings" method="POST">
				@csrf
				<div class="row">
					<input type="hidden" name="emailsettingid" value="{{@$emailsettings->id}}">
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Server Type</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if(isset($emailsettings->servertype) && $emailsettings->servertype == 'servermail')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="servertype" id="servermail" autocomplete="off" value="servermail">Server Mail (Default)
							  </label>
							@else  
								<label class="btn btn-secondary">
								<input type="radio" name="servertype" id="servermail" autocomplete="off" value="servermail">Server Mail (Default)
							  </label>
							@endif
							@if(isset($emailsettings->servertype) && $emailsettings->servertype == 'smtpserver')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="servertype" id="smtpserver" autocomplete="off" value="smtpserver">SMTP Server
							  </label>
							@else
							   <label class="btn btn-secondary">
								<input type="radio" name="servertype" id="smtpserver" autocomplete="off" value="smtpserver">SMTP Server
							  </label>
							@endif		
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">SMTP Encryption</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if(isset($emailsettings->smtpencrypted) && $emailsettings->smtpencrypted == 'tlc')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="smtpencrypted" id="tlc" autocomplete="off" value="tlc">TLC
							  </label>
							@else
							   <label class="btn btn-secondary">
								<input type="radio" name="smtpencrypted" id="tlc" autocomplete="off" value="tlc">TLC
							  </label>	
							@endif
							@if(isset($emailsettings->smtpencrypted) && $emailsettings->smtpencrypted == 'ssl')	
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="smtpencrypted" id="ssl" autocomplete="off" value="ssl">SSL
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="smtpencrypted" id="ssl" autocomplete="off" value="ssl">SSL
							  </label>
							@endif		
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">SMTP Username</label>
							<input type="text" name="smtpusername" id="smtpusername" class="form-control" placeholder="xyz" value="{{@$emailsettings->smtpusername}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">SMTP Password</label>
							<input type="text" name="smtppassword" id="smtppassword" class="form-control" placeholder="xyz" value="{{@$emailsettings->smtppassword}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">SMTP Host</label>
							<input type="text" name="smtphost" id="smtphost" class="form-control" placeholder="xyz" value="{{@$emailsettings->smtphost}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">SMTP Port</label>
							<input type="text" name="smtpport" id="smtpport" class="form-control" placeholder="xyz" value="{{@$emailsettings->smtpport}}">
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

