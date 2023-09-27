<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html">Chankya Acadmy</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Please Register To Continue</p>

      <form action="{{ route('register') }}" method="POST" id="registerForm">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		  
        </div>
		@error('name')
			<div class="alert alert-danger">{{ $message }}</div>
		  @enderror
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		@error('email')
			<div class="alert alert-danger">{{ $message }}</div>
		  @enderror
		<div class="input-group mb-3">
          <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		@error('mobile')
			<div class="alert alert-danger">{{ $message }}</div>
		  @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		@error('password')
			<div class="alert alert-danger">{{ $message }}</div>
		  @enderror
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		  
        </div>
		@error('password_confirmation')
			<div class="alert alert-danger">{{ $message }}</div>
		  @enderror
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
				<a href="/login" class="text-center">Login Now</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('assets')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/dist/js/adminlte.min.js"></script>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function (form) {
      form.submit()
    }
  });
  $('#registerForm').validate({
    rules: {
	  name: {
        required: true,
        minlength: 5
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
	  password_confirmation: {
        required: true,
        minlength: 5,
		equalTo: "#password"
      },
      mobile: {
        required: true,
        minlength: 5
      },
    },
    messages: {
	  name: {
        required: "Please provide a name",
        minlength: "Your name must be at least 5 characters long"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
	  password_confirmation: {
        required: "Please provide a confirm password",
        minlength: "Your confirm password must be at least 5 characters long"
      },
	  mobile: {
        required: "Please provide a mobile",
        minlength: "Your mobile must be at least 5 characters long"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
