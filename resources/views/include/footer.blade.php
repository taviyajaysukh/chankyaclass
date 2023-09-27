<footer class="main-footer">
    <strong>Copyright &copy; 2023-2025 <a href="#">Chankya academy</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('assets/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets/')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets/')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets/')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets/')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Toastr -->
<script src="{{asset('assets/')}}/plugins/toastr/toastr.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('assets/')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('assets/')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('assets/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('assets/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('assets/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('assets/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('assets')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('assets')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/')}}/dist/js/adminlte.js"></script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function (form) {
		const formData = new FormData(form);
		$.ajax({
            url: form.action,
            type: form.method,
            data: formData,
			processData: false,
            cache: false,
            contentType: false,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'Save successfully...')	
					form.reset();
					$('.modal').modal('hide')
				}else if(response?.status == "error" && response?.errors.length > 0){
					response?.errors.map((error)=>{
						toastr.error(error || 'Some thing error...')	
					})
				}else{
					toastr.error('Some thing error...')	
				}
            }            
        });
    }
  });
  $('#adduser').validate({
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
      mobile: {
        required: true,
        minlength: 5
      },
	  userImage: {
        required: true,
      }
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
	  mobile: {
        required: "Please provide a mobile",
        minlength: "Your mobile must be at least 5 characters long"
      },
	  userImage:{
		 required: "Please provide image",  
	  }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  
  $('#edituser').validate({
    rules: {
	  name: {
        required: true,
        minlength: 5
      },
      email: {
        required: true,
        email: true,
      },
      mobile: {
        required: true,
        minlength: 5
      }
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
	  mobile: {
        required: "Please provide a mobile",
        minlength: "Your mobile must be at least 5 characters long"
      },
	  
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#edituser').validate({
    rules: {
	  name: {
        required: true,
        minlength: 5
      },
      email: {
        required: true,
        email: true,
      },
      mobile: {
        required: true,
        minlength: 5
      }
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
	  mobile: {
        required: "Please provide a mobile",
        minlength: "Your mobile must be at least 5 characters long"
      },
	  
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });

  $("#getUserTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#getUserTable_wrapper .col-md-6:eq(0)');
	
	//edit user Record
	$('.editid').click(function(){
		let userId = $(this).data('id')
		let username = $(this).data('username')
		let useremail = $(this).data('useremail')
		let usermobile = $(this).data('usermobile')
		let userimage = $(this).data('userimage')
		let userrole = $(this).data('userrole')
		$('#edituserid').val(userId)
		$('#username').val(username)
		$('#useremail').val(useremail)
		$('#usermobile').val(usermobile)
		$('#edituserimage').val(userimage)
		$('#userrole').val(userrole)
	})
	
	//delete user record
	
	$('.delid').click(function(){
		let userId = $(this).data('id')
		$('#deleteid').val(userId)
	})
	$('#deleteuser').click(function(){
		let userid = $('#deleteid').val()
		$.ajax({
            url: '/admin/deleteuser',
            type: 'POST',
            data: {'userId':userid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'Delete record successfully...')	
					$('#deleteUserModal').modal("hide");
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//add category
	
	$('#addcategory').validate({
    rules: {
	  categoryname: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  categoryname: {
        required: "Please provide a category name",
        minlength: "Your category name must be at least 5 characters long"
      },  
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  //add category
	
	$('#updatecategory').validate({
    rules: {
	  categoryname: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  categoryname: {
        required: "Please provide a category name",
        minlength: "Your category name must be at least 5 characters long"
      },  
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  //edit category Record
	$('.editcategoryid').click(function(){
		let cateId = $(this).data('id')
		let categoryname = $(this).data('categoryname')
		$('#editcateid').val(cateId)
		$('#editcategoryname').val(categoryname)
	})
	//status change category Record
	$('.changeStatus').click(function(){
		let cateId = $(this).data('id')
		$.ajax({
            url: '/admin/changecatestatus',
            type: 'POST',
            data: {'cateid':cateId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//delete category Record
	$('.delcateid').click(function(){
		let cateId = $(this).data('id')
		$('#deletecateid').val(cateId)
	})
	$('#deletecategory').click(function(){
		let cateId = $('#deletecateid').val()
		$.ajax({
            url: '/admin/deletecategory',
            type: 'POST',
            data: {'cateid':cateId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete category successfully...')	
					$('.modal').modal('hide')
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
});
</script>
</body>
</html>
