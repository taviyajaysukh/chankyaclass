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
<script src="{{asset('assets/')}}/plugins/select2/js/select2.full.min.js"></script>
<script src="{{asset('assets/')}}/plugins/select2/js/select2.min.js"></script>
<script src="{{asset('assets/')}}/clocktime/bootstrap-clockpicker.js"></script>
<script src="{{asset('assets/')}}/plugins/ckeditor/ckeditor.js"></script>


<!--<script src="{{asset('assets/')}}/script.js"></script>-->
<script>
//add question ckeditor
let questionval = '';
let questionvala = '';
let questionvalb = '';
let questionvalc = '';
let questionvald = '';
ClassicEditor.create( document.querySelector( '#question' )).then( editor => {
	questionval = editor;
} )
.catch( err => {
} );

ClassicEditor.create( document.querySelector( '#optiona' ) ).then( editor => {
	questionvala = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#optionb' ) ).then( editor => {
	questionvalb = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#optionc' ) ).then( editor => {
	questionvalc = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#optiond' ) ).then( editor => {
	questionvald = editor;
} )
.catch( err => {
} );

//edit question ckeditor
let editquestionval = '';
let editquestionvala = '';
let editquestionvalb = '';
let editquestionvalc = '';
let editquestionvald = '';
ClassicEditor.create( document.querySelector( '#editquestion' )).then( editor => {
	editquestionval = editor;
} )
.catch( err => {
} );

ClassicEditor.create( document.querySelector( '#editoptiona' ) ).then( editor => {
	editquestionvala = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#editoptionb' ) ).then( editor => {
	editquestionvalb = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#editoptionc' ) ).then( editor => {
	editquestionvalc = editor;
} )
.catch( err => {
} );
ClassicEditor.create( document.querySelector( '#editoptiond' ) ).then( editor => {
	editquestionvald = editor;
} )
.catch( err => {
} );
      
$(function () {
	//datatable 
	$("#getUserTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#getUserTable_wrapper .col-md-6:eq(0)');
	$("#categoryTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#categoryTable_wrapper .col-md-6:eq(0)');
	$("#subCategoryTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#subCategoryTable_wrapper .col-md-6:eq(0)');
	
	$("#noticeTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#noticeTable_wrapper .col-md-6:eq(0)');
	$("#subjectTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#subjectTable_wrapper .col-md-6:eq(0)');
	
	$("#upcommingexamTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#upcommingexamTable_wrapper .col-md-6:eq(0)');
	$("#studentTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#studentTable_wrapper .col-md-6:eq(0)');
	$("#extraClassesTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#extraClassesTable_wrapper .col-md-6:eq(0)');
	$("#teacherTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#teacherTable_wrapper .col-md-6:eq(0)');
	$("#bookTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#bookTable_wrapper .col-md-6:eq(0)');
	
	$("#noteTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#noteTable_wrapper .col-md-6:eq(0)');
	
	$("#oldpaperTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#oldpaperTable_wrapper .col-md-6:eq(0)');
	
	$("#galleryTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#galleryTable_wrapper .col-md-6:eq(0)');
	
	$("#videoTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#videoTable_wrapper .col-md-6:eq(0)');
	
	$("#batchTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#batchTable_wrapper .col-md-6:eq(0)');
	
	$("#questionTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#questionTable_wrapper .col-md-6:eq(0)');
	
	$("#doubtClassTable").DataTable();
	$("#practiceResultTable").DataTable();
	$("#studentPaymentHistoryTable").DataTable();
	$("#studentLeaveTable").DataTable();
	$("#studentDoubtTable").DataTable();
	$("#studentNoticeTable").DataTable();
	$("#createPaperTable").DataTable();
	$("#studentAttendaceTable").DataTable();
	$("#paperTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#paperTable_wrapper .col-md-6:eq(0)');
	$("#assignmentTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#assignmentTable_wrapper .col-md-6:eq(0)');
	$("#applyleaveTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#applyleaveTable_wrapper .col-md-6:eq(0)');
	
	
	//end datatable
	//select 2
	$('.js-example-basic-single').select2();
	$('.extraclassbatch').select2({
		placeholder: "Select Batch"
	});
	$('.moduleaccess').select2({
		placeholder: "Select module"
	});
	$('.teachersubject').select2({
		placeholder: "Select subject"
	});
	// batch select box
	$('#batch_category').select2({
		placeholder: "Select category",
		ajax: { 
          url: "{{route('getcategoty')}}",
          type: "get",
          dataType: 'json',
          processResults: function (response) {
            return {
              results:response
            };
          },
          cache: true
        }	
	});
	//add new inputbox
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
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
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
  //validator for start dat not greterthen enddate
$.validator.addMethod("greaterStart", function (value, element, params) {
	return this.optional(element) || new Date(value) >= new Date($(params).val());
},'Must be greter than start date.');

  $('#adduser').validate({
    rules: {
	  name: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 3
      },
      mobile: {
        required: true,
        minlength: 10,
		phoneUS: true
      },
	  userImage: {
        required: true,
		extension: "jpg|jpeg|png|gif"
      }
    },
    messages: {
	  name: {
        required: "Please provide a name",
        minlength: "Your name must be at least 3 characters long"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 3 characters long"
      },
	  mobile: {
        required: "Please provide a mobile",
        minlength: "Your mobile must be at least 10 characters long"
      },
	  userImage:{
		 required: "Please provide image jpg,jpeg,png,gif format",  
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
        minlength: 10,
		phoneUS: true
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
		$('.edituserimagetext').text(userimage)
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
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
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
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
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
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//sub category manage
	
	//add category
	
	$('#addsubcategory').validate({
    rules: {
	  subcategoryname: {
        required: true,
        minlength:1
      },
	  categoryid: {
        required: true,
      },
    },
    messages: {
	  subcategoryname: {
        required: "Please provide a subcategory name",
        minlength: "Your subcategory name must be at least 5 characters long"
      },
      categoryid: {
        required: "Please select category",
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
	
	$('#updatesubcategory').validate({
    rules: {
	  subcategoryname: {
        required: true,
        minlength:1
      },
	  categoryid: {
        required: true,
      },
    },
    messages: {
	  subcategoryname: {
        required: "Please provide a subcategory name",
        minlength: "Your subcategory name must be at least 5 characters long"
      }, 
	categoryid: {
        required: "Please select category",
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
	$('.editsubcategoryid').click(function(){
		let subcateId = $(this).data('id')
		let subcategoryname = $(this).data('subcategoryname')
		let categoryid = $(this).data('categoryid')
		
		$('#editsubcateid').val(subcateId)
		$('#editsubcategoryname').val(subcategoryname)
		//$('#editddsubcategoryid').val("5")
		$("#editddsubcategoryid").select2("val",`${categoryid}`);

	})
	//status change category Record
	$('.changesubcateStatus').click(function(){
		let subcateId = $(this).data('id')
		$.ajax({
            url: '/admin/changesubcatestatus',
            type: 'POST',
            data: {'subcateid':subcateId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//delete category Record
	$('.delsubcateid').click(function(){
		let subcateId = $(this).data('id')
		$('#deletesubcateid').val(subcateId)
	})
	$('#deletesubcategory').click(function(){
		let subcateId = $('#deletesubcateid').val()
		$.ajax({
            url: '/admin/deletesubcategory',
            type: 'POST',
            data: {'subcateid':subcateId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subcategory successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//Notice manage
	
	 //add notice
	
	$('#addnotice').validate({
    rules: {
	  title: {
        required: true,
        minlength:1
      },
	  notice: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a notice title",
        minlength: "Your notice title must be at least 5 characters long"
      }, 
	notice: {
        required: "Please select category",
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
  
  // add student Notice
  
	$('#addstudentnotice').validate({
    rules: {
	  title: {
        required: true,
        minlength:1
      },
	  notice: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a notice title",
        minlength: "Your notice title must be at least 5 characters long"
      }, 
	notice: {
        required: "Please select category",
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
	//add notice
	
	$('#updatenotice').validate({
    rules: {
	  title: {
        required: true,
        minlength:1
      },
	  notice: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a notice title",
        minlength: "Your notice title must be at least 5 characters long"
      }, 
	notice: {
        required: "Please select category",
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
	//edit notice Record
	$('.editnoticeid').click(function(){
		let noticeId = $(this).data('id')
		let noticetitle = $(this).data('noticetitle')
		let noticefor = $(this).data('noticefor')
		let noticedescription = $(this).data('noticedescription')
		
		$('#editnoticeid').val(noticeId)
		$('#editnoticetitle').val(noticetitle)
		$('#editnoticedescription').val(noticedescription)
		$('#editnoticefor').val(noticefor)
	})
	
	//status change notice Record
	$('.changeNoticeStatus').click(function(){
		let noticeId = $(this).data('id')
		$.ajax({
            url: '/admin/changenoticestatus',
            type: 'POST',
            data: {'noticeid':noticeId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$('.delnoticeid').click(function(){
		let subcateId = $(this).data('id')
		$('#deletenoticeid').val(subcateId)
	})
	//delete notice record
	$('#deletenotice').click(function(){
		let noticeId = $('#deletenoticeid').val()
		$.ajax({
            url: '/admin/deletenotice',
            type: 'POST',
            data: {'noticeid':noticeId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subcategory successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//Notice manage
	
	 //add notice
	
	$('#addsubject').validate({
    rules: {
	  subjectname: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  subjectname: {
        required: "Please provide a subject name",
        minlength: "Your subject name must be at least 1 characters long"
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
	//add notice
	
	$('#updatesubject').validate({
    rules: {
	  subjectname: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  subjectname: {
        required: "Please provide a Subject name",
        minlength: "Your subject name must be at least 1 characters long"
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
	//edit notice Record
	$('.editsubjectid').click(function(){
		let subjectId = $(this).data('id')
		let subjectname = $(this).data('subjectname')
		
		$('#editsubjectid').val(subjectId)
		$('#editsubjectname').val(subjectname)
		
	})
	
	//status change notice Record
	$('.changeSubjectStatus').click(function(){
		let subjectId = $(this).data('id')
		$.ajax({
            url: '/admin/changesubjectstatus',
            type: 'POST',
            data: {'subjectid':subjectId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$('.delsubjectid').click(function(){
		let subjectId = $(this).data('id')
		$('#deletesubjectid').val(subjectId)
	})
	//delete subject record
	$('#deletesubject').click(function(){
		let subjectId = $('#deletesubjectid').val()
		$.ajax({
            url: '/admin/deletesubject',
            type: 'POST',
            data: {'subjectid':subjectId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$('.addchapterids').click(function(){
		let subjectchapterId = $(this).data('id')
		$('#chaptersubjectid').val(subjectchapterId)
	})
	// add subject chapter 
	$('#addsubjectchapter').validate({
    rules: {
	  subjectchaptername: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  subjectchaptername: {
        required: "Please provide a Subject chapter name",
        minlength: "Your subject chapter name must be at least 1 characters long"
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
  
  //edit subject chaptername
  $('.editChapterName').click(function(){
	  let chapterid = $(this).data('id')
	  let subjectid = $(this).data('sid')
	  let chaptername = $(this).data('chaptername')
	  $('#editchapterid').val(chapterid)
	  $('#editchaptersubjectid').val(subjectid)
	  $('#editsubjectchaptername').val(chaptername)
	  $('#editChapterModal').modal('show')
  })
   // add subject chapter 
	$('#editsubjectchapter').validate({
    rules: {
	  subjectchaptername: {
        required: true,
        minlength:1
      },
    },
    messages: {
	  subjectchaptername: {
        required: "Please provide a Subject chapter name",
        minlength: "Your subject chapter name must be at least 1 characters long"
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
   //delete subject chaptername
  $('.deleteChapterName').click(function(){
	  let chapterid = $(this).data('id')
	  let subjectid = $(this).data('sid')
	  $('#deletechapterid').val(chapterid)
	  $('#deletechaptersubjectid').val(subjectid)
	  $('#deleteChapterModal').modal('show')
  })
   //delete subject record
	$('#deletesubjectchapters').click(function(){
		let chapterid = $('#deletechapterid').val()
		$.ajax({
            url: '/admin/deletesubjectchapter',
            type: 'POST',
            data: {'chapterid':chapterid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})	
	
	//add upcomming exam 
	
	$('#addupexam').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      description: {
        required: true,
        minlength: 10
      },
      startdate: {
        required: true,
      },
      enddate: {
        required: true,
		greaterStart: "#upexamstartdate"
      },
	  applicationmode: {
        required: true,
      },
	  upexamfile: {
        required: true,
		extension: "jpg|jpeg|png|pdf|doc|docx"
      }
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      upexamdescription: {
        required: "Please enter a description"
      },
      startdate: {
        required: "Please provide a start date",
      },
	  enddate: {
        required: "Please provide a end date",
      },
	  upexamfile:{
		 required: "Please provide jpg,jpeg,png,pdf,doc and docx type file", 
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
	//edit subject chaptername
  $('.editupexamid').click(function(){
	  let upexamid = $(this).data('id')
	  let upexamtitle = $(this).data('upexamtitle')
	  let upexampdescription = $(this).data('upexampdescription')
	  let upexamstartdate = $(this).data('upexamstartdate')
	  let upexamenddate = $(this).data('upexamenddate')
	  let upexammode = $(this).data('upexammode')
	  let upexamuploadfile = $(this).data('upexamuploadfile')
	  $('#upexamid').val(upexamid)
	  $('#upexamuploadfile').val(upexamuploadfile)
	  $('#editupexamtitle').val(upexamtitle)
	  $('#editupexamdescription').val(upexampdescription)
	  $('#editupexamstartdate').val(upexamstartdate)
	  $('#editupexamenddate').val(upexamenddate)
	  $('#editapplicationmode').val(upexammode)
  })	
	//edit upcomming exam 
	
	$('#updateupexam').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      description: {
        required: true,
        minlength: 10
      },
      startdate: {
        required: true,
      },
      enddate: {
        required: true,
		greaterStart: "#editupexamstartdate"
      },
	  applicationmode: {
        required: true,
      }
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      upexamdescription: {
        required: "Please enter a description"
      },
      startdate: {
        required: "Please provide a start date",
      },
	  enddate: {
        required: "Please provide a end date",
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
	//delete upcomming exam record
	$('.delupcommexamid').click(function(){
	  let upexamid = $(this).data('id')
	  $('#deleteupexamid').val(upexamid)
	})
	$('#deleteupcommingexam').click(function(){
		let upexamid = $('#deleteupexamid').val()
		$.ajax({
            url: '/admin/deleteupexam',
            type: 'POST',
            data: {'upexamid':upexamid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//status change upcomming exam Record
	$('.changeUpexamStatus').click(function(){
		let upexamid = $(this).data('id')
		$.ajax({
            url: '/admin/changeupexamstatus',
            type: 'POST',
            data: {'upexamid':upexamid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//student manage
	
	//add student
	$('#addstudent').validate({
    rules: {
	  student_name: {
        required: true,
        minlength: 3
      },
	  gender: {
        required: true,
      },
	  dateofbirth: {
        required: true,
      },
	  email: {
        required: true,
		email:true,
      },
	  contactnumber: {
        required: true,
      },
	  batch: {
        required: true,
      },
    },
    messages: {
	  student_name: {
        required: "Please provide a student name",
        minlength: "Your student name must be at least 3 characters long"
      },
	  gender: {
        required: "Please provide a gender",
	  },
	  dateofbirth: {
        required: "Please provide a date of birth",
	  },
	  email: {
        required: "Please provide a email",
	  },
	  contactnumber: {
        required: "Please provide a contact number",
	  },
	  batch: {
        required: "Please provide a batch",
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
  
	//edit student
	$('#editstudent').validate({
    rules: {
	  student_name: {
        required: true,
        minlength: 3
      },
	  gender: {
        required: true,
      },
	  dateofbirth: {
        required: true,
      },
	  email: {
        required: true,
		email:true,
      },
	  contactnumber: {
        required: true,
      },
	  batch: {
        required: true,
      },
    },
    messages: {
	  student_name: {
        required: "Please provide a student name",
        minlength: "Your student name must be at least 3 characters long"
      },
	  gender: {
        required: "Please provide a gender",
	  },
	  dateofbirth: {
        required: "Please provide a date of birth",
	  },
	  email: {
        required: "Please provide a email",
	  },
	  contactnumber: {
        required: "Please provide a contact number",
	  },
	  batch: {
        required: "Please provide a batch",
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
  
	//edit student
	$('#changestudentpassword').validate({
    rules: {
	  studentnewpassword: {
        required: true,
      },
	  studentconfpassword: {
        required: true,
		equalTo:"#studentnewpassword"
      },
	
    },
    messages: {
	  studentnewpassword: {
        required: "Please provide a student new password",
      },
	  studentconfpassword: {
        required: "Please provide a valid confirm password",
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
  
	//change studennt password
	$('.changebtnpass').click(function(){
	  let studentid = $(this).data('id');
	  $("#changepassstudentid").val(studentid);
	  $('#studentChangepasswordModal').modal('show')
	})
	//delete student record
	$('.deletestudentrecord').click(function(){
	  let studentid = $(this).data('id')
	  $('#deletestudentid').val(studentid)
	  $('#deleteStudentModal').modal('show')
	})
	//deletestudent
	$('#deletestudent').click(function(){
		let studentid = $('#deletestudentid').val()
		$.ajax({
            url: '/admin/deletestudent',
            type: 'POST',
            data: {'studentid':studentid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//status change upcomming exam Record
	$('.changeStudentStatus').click(function(){
		let studentid = $(this).data('id')
		$.ajax({
            url: '/admin/changestudentstatus',
            type: 'POST',
            data: {'studentid':studentid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//add extra classes
	$('#addextraclasses').validate({
    rules: {
	  teacher: {
        required: true,
      },
	  batch: {
        required: true,
      },
	  date: {
        required: true,
      },
	  starttime: {
        required: true,
      },
	  endtime: {
        required: true,
      },
	  description: {
        required: true,
		minlength:10
      },
    },
    messages: {
	  teacher: {
        required: "Please provide a teacher",
      },
	  batch: {
        required: "Please provide a batch",
      },
	  date: {
        required: "Please provide a date",
      },
	  starttime: {
        required: "Please provide a start time",
      },
	  endtime: {
        required: "Please provide a endtime",
      },
	  description: {
        required: "Please provide a description",
        minlength: "Your description must be at least 10 characters long"
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
  //edit extra classes
	$('#editextraclasses').validate({
    rules: {
	  teacher: {
        required: true,
      },
	  batch: {
        required: true,
      },
	  date: {
        required: true,
      },
	  starttime: {
        required: true,
      },
	  endtime: {
        required: true,
      },
	  description: {
        required: true,
		minlength:10
      },
    },
    messages: {
	  teacher: {
        required: "Please provide a teacher",
      },
	  batch: {
        required: "Please provide a batch",
      },
	  date: {
        required: "Please provide a date",
      },
	  starttime: {
        required: "Please provide a start time",
      },
	  endtime: {
        required: "Please provide a endtime",
      },
	  description: {
        required: "Please provide a description",
        minlength: "Your description must be at least 10 characters long"
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
	$(".editclickextclass").click(function(){
		let extclassid = $(this).data('id')
		let extclassteacher = $(this).data('teacher')
		let extclassbatch = $(this).data('batch')
		let extclassdate = $(this).data('date')
		let extclassstarttime = $(this).data('starttime')
		let extclassendtime = $(this).data('endtime')
		let extclassenddescription = $(this).data('description')
		
		$("#editextclassid").val(extclassid)
		$("#editextclassteacher").val(extclassteacher)
		$("#editextclassbatch").val(extclassbatch)
		$("#editextclassdate").val(extclassdate)
		$("#editextclassstarttime").val(extclassstarttime)
		$("#editextclassendtime").val(extclassendtime)
		$("#editextclassenddescription").val(extclassenddescription)
	})
	//delete extra class
	$(".deleteextraclassclick").click(function(){
		let extraclassid = $(this).data('id')
		$("#deleteextraclassid").val(extraclassid)
	})
	$('#deleteextraclass').click(function(){
		let deletextraclassid = $('#deleteextraclassid').val()
		$.ajax({
            url: '/admin/deleteextraclass',
            type: 'POST',
            data: {'deletextraclassid':deletextraclassid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})

	$('.changeExtraClassStatus').click(function(){
		let extclassid = $(this).data('id')
		$.ajax({
            url: '/admin/changeextraclassstatus',
            type: 'POST',
            data: {'extclassid':extclassid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//add teacher by admin
	$('#addteacher').validate({
    rules: {
	  name: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 3
      },
      gender: {
        required: true,
      },
	  teacherImage: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  moduleaccess: {
        required: true,
      }
    },
    messages: {
	  name: {
        required: "Please provide a name",
        minlength: "Your name must be at least 3 characters long"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 3 characters long"
      },
	  gender: {
        required: "Please provide a gender",
      },
	  teacherImage:{
		 required: "Please provide image",  
	  },
	  subject:{
		 required: "Please provide subject",  
	  },
	  moduleaccess:{
		 required: "Please provide module access",  
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
  
	$('.editClickTeacher').click(function(){
		let teacherid = $(this).data('id')
		let teachername = $(this).data('name')
		let teachergender = $(this).data('gender')
		let teacheremail = $(this).data('email')
		let teachereduation = $(this).data('eduation')
		let teacherteacherimage = $(this).data('image')
		let teachersubject = $(this).data('subject')
		let teachermoduleaccess = $(this).data('moduleaccess')
		
		$("#teacherid").val(teacherid)
		$("#editteacherimage").val(teacherteacherimage)
		$("#editteachername").val(teachername)
		$("#editteachergender").val(teachergender)
		$("#editteacheremail").val(teacheremail)
		$("#editeducation").val(teachereduation)
		$("#editteachersubject").val(teachersubject)
		$("#editmoduleaccess").val(teachermoduleaccess)
		
	})
	//add teacher by admin
	$('#updateteacher').validate({
    rules: {
	  name: {
        required: true,
        minlength: 3
      },
      email: {
        required: true,
        email: true,
      },
      gender: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  moduleaccess: {
        required: true,
      }
    },
    messages: {
	  name: {
        required: "Please provide a name",
        minlength: "Your name must be at least 3 characters long"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
	  gender: {
        required: "Please provide a gender",
      },
	  subject:{
		 required: "Please provide subject",  
	  },
	  moduleaccess:{
		 required: "Please provide module access",  
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
  //delete teacher
  $(".deletestudentrecord").click(function(){
	  let teacherid = $(this).data('id')
	  $("#modeldeleteteacherid").val(teacherid)
  })
  
  $('#deleteteacherbtn').click(function(){
		let teacherid = $('#modeldeleteteacherid').val()
		$.ajax({
            url: '/admin/deleteteacher',
            type: 'POST',
            data: {'teacherid':teacherid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subject successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change teacher status
	$('.changeTeacherStatus').click(function(){
		let teacherid = $(this).data('id')
		$.ajax({
            url: '/admin/changeteacherstatus',
            type: 'POST',
            data: {'teacherid':teacherid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//add book
	
	$('#addbook').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  bookfile: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
      },
	  bookfile:{
		 required: "Please select book file",  
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
  
   //edit book 
   
   $(".editclicbook").click(function(){
	   
	   let bookid = $(this).data('id')
	   let booktitle = $(this).data('title')
	   let bookbatch = $(this).data('batch')
	   let booksubject = $(this).data('subject')
	   let bookfile = $(this).data('bookfile')
	   
	   $("#bookid").val(bookid)
	   $("#editbooktitle").val(booktitle)
	   $("#editbookbatch").val(bookbatch)
	   $("#editbooksubject").val(booksubject)
	   $("#editbookfile").val(bookfile)
   })
   
   //update book
   $('#updatebook').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
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
  
	//delete book
  $(".deletebookclick").click(function(){
	  let bookid = $(this).data('id')
	  $("#deletebookid").val(bookid)
  })
  
  $('#deletebookbtn').click(function(){
		let bookid = $('#deletebookid').val()
		$.ajax({
            url: '/admin/deletebook',
            type: 'POST',
            data: {'bookid':bookid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete book successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change book status
	$('.changeBookStatus').click(function(){
		let bookid = $(this).data('id')
		$.ajax({
            url: '/admin/changebookstatus',
            type: 'POST',
            data: {'bookid':bookid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	
	//notes
	
	//add note
	
	$('#addnote').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  chapter: {
        required: true,
      },
	  notefile: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
      },
	  chapter: {
        required: "Please select chapter",
      },
	  notefile:{
		 required: "Please select note file",  
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
  
   //edit note 
		$("#notesubject").change(function(){
		var subjectid = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':subjectid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#notechapter').empty()
                if(response){
					response.map((ite)=>{
						$('#notechapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$("#editnotesubject").change(function(){
		var subjectid = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':subjectid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editnotechapter').empty()
                if(response){
					response.map((ite)=>{
						$('#editnotechapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
   $(".editclicnote").click(function(){
	   
	   let noteid = $(this).data('id')
	   let notetitle = $(this).data('title')
	   let notebatch = $(this).data('batch')
	   let notesubject = $(this).data('subject')
	   let notechapter = $(this).data('chapter')
	   let notefile = $(this).data('notefile')
	   
	   $("#noteid").val(noteid)
	   $("#editnotetitle").val(notetitle)
	   $("#editnotebatch").val(notebatch)
	   $("#editnotesubject").val(notesubject)
	   $("#editnotechapter").val(notechapter)
	   $("#editnotefile").val(notefile)
   })
   
   //update note
   $('#updatenote').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  chapter: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
      },
	  chapter: {
        required: "Please select chapter",
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
  
	//delete note
  $(".deletenoteclick").click(function(){
	  let noteid = $(this).data('id')
	  $("#deletenoteid").val(noteid)
  })
  
  $('#deletenotebtn').click(function(){
		let noteid = $('#deletenoteid').val()
		$.ajax({
            url: '/admin/deletenote',
            type: 'POST',
            data: {'noteid':noteid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete book successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change note status
	$('.changeNoteStatus').click(function(){
		let noteid = $(this).data('id')
		$.ajax({
            url: '/admin/changenotestatus',
            type: 'POST',
            data: {'noteid':noteid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	
	//
	//add oldpaper
	
	$('#addoldpaper').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  bookfile: {
        required: true,
      },
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
      },
	  bookfile:{
		 required: "Please select book file",  
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
  
   //edit old paper
   $(".editclicoldpaper").click(function(){	   
	   let oldpaperid = $(this).data('id')
	   let oldpapertitle = $(this).data('title')
	   let oldpaperbatch = $(this).data('batch')
	   let oldpapersubject = $(this).data('subject')
	   let oldpaperfile = $(this).data('oldpaperfile')
	   
	   $("#oldpaperid").val(oldpaperid)
	   $("#editoldpapertitle").val(oldpapertitle)
	   $("#editoldpaperbatch").val(oldpaperbatch)
	   $("#editoldpapersubject").val(oldpapersubject)
	   $("#editoldpaperfile").val(oldpaperfile)
   })
   
   //update old paper
   $('#updateoldpaper').validate({
    rules: {
	  title: {
        required: true,
        minlength: 3
      },
      batch: {
        required: true,
      },
	  subject: {
        required: true,
      },
	  
    },
    messages: {
	  title: {
        required: "Please provide a title",
        minlength: "Your title must be at least 3 characters long"
      },
      batch: {
        required: "Please select batch",
      },
      subject: {
        required: "Please select subject",
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
  
	//delete old paper
  $(".deleteoldpaperclick").click(function(){
	  let oldpaperid = $(this).data('id')
	  $("#deleteoldpaperid").val(oldpaperid)
  })
  
  $('#deleteoldpaperbtn').click(function(){
		let oldpaperid = $('#deleteoldpaperid').val()
		$.ajax({
            url: '/admin/deleteoldpaper',
            type: 'POST',
            data: {'oldpaperid':oldpaperid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete old paper successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change old paper status
	$('.changeOldpaperStatus').click(function(){
		let oldpaperid = $(this).data('id')
		$.ajax({
            url: '/admin/changeoldpaperstatus',
            type: 'POST',
            data: {'oldpaperid':oldpaperid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//gallery manage
	$(".videosourcediv").css({'display':'none','visibility':'hidden'})
	$(".youtubevideodiv").css({'display':'none','visibility':'hidden'})
	$(".youtubeurldiv").css({'display':'none','visibility':'hidden'})
	//add gallery
	$('input[name=galleryImage]').change(function (e) {
		let imagename = e.target.files[0].name;
		$("#galleryimagename").val(imagename)
	});
	$('input[name=galleryVideo]').change(function (e) {
		let videoname = e.target.files[0].name;
		$("#galleryvideoname").val(videoname)
	});
	$("#gallerytype").change(function(){
		let gtype = $(this).find(":selected").val();
		let gallerytsource = $("#gallerysource").find(":selected").val();
		if(gtype == 'video'){
			$(".galleryimagediv").css({'display':'none','visibility':'hidden'})
			$(".videosourcediv").css({'display':'block','visibility':'visible'})
			$(".youtubevideodiv").css({'display':'block','visibility':'visible'})
			if(gallerytsource == 'file'){
				$(".youtubeurldiv").css({'display':'none','visibility':'hidden'})
				$(".youtubevideodiv").css({'display':'block','visibility':'visible'})
			}else{
				$(".youtubeurldiv").css({'display':'block','visibility':'visible'})
				$(".youtubevideodiv").css({'display':'none','visibility':'hidden'})
			}
		}else{
			$(".galleryimagediv").css({'display':'block','visibility':'visible'})
			$(".videosourcediv").css({'display':'none','visibility':'hidden'})
			$(".youtubevideodiv").css({'display':'none','visibility':'hidden'})
			$(".youtubeurldiv").css({'display':'none','visibility':'hidden'})
		}
	})
	$("#gallerysource").change(function(){
		let gsource = $(this).find(":selected").val();
		if(gsource == 'url'){
			$(".youtubeurldiv").css({'display':'block','visibility':'visible'})
			$(".youtubevideodiv").css({'display':'none','visibility':'hidden'})
		}else{
			$(".youtubeurldiv").css({'display':'none','visibility':'hidden'})
			$(".youtubevideodiv").css({'display':'block','visibility':'visible'})
		}
	})
	$("#submitGallery").click(function(){
		let gtitle = $("#gallerytitle").val()
		let gtype = $('#gallerytype').find(":selected").val();
		let gallerysource = $('#gallerysource').find(":selected").val();
		let gimagename = $("#galleryimagename").val()
		let gvideoname = $("#galleryvideoname").val()
		let youtubeurl = $("#youtubeurl").val()
		let isTrue = true
		if(gtitle ==''){
			toastr.error('please enter valid title')
			isTrue = false
		}else if(gtype == 'image' && gimagename ==''){
			toastr.error('please select image')
			isTrue = false
		}else if(gtype == 'video' && gallerysource == 'file' && gvideoname == ''){
			toastr.error('please select video')
			isTrue = false
		}else if(gtype == 'video' && gallerysource == 'url' && youtubeurl == ''){
			toastr.error('please enter video url')
			isTrue = false
		}
		if(isTrue){
			let gtype = $('#gallerytype').find(":selected").val();
			let gallerdysource = $('#gallerysource').find(":selected").val();
			let file_image = $("#galleryImage").prop("files")[0];
			let file_video = $("#galleryVideo").prop("files")[0];
			var form_data = new FormData();
			form_data.append("title",gtitle)
			form_data.append("gimage",file_image)
			form_data.append("gvideo",file_video)
			form_data.append("type",gtype)
			form_data.append("source",gallerdysource)
			form_data.append("youtubeurl",youtubeurl)
			form_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/addgallery',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: form_data,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					$("#gallerytitle").val('')	
				    $("#youtubeurl").val('')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	})
	
	//edit gallery
	
	$(".editvideosourcediv").css({'display':'none','visibility':'hidden'})
	$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
	$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
	//edit gallery
	$('input[name=editgalleryImage]').change(function (e) {
		let editimagename = e.target.files[0].name;
		$("#editgalleryimagename").val(editimagename)
	});
	$('input[name=editgalleryVideo]').change(function (e) {
		let editvideoname = e.target.files[0].name;
		$("#editgalleryvideoname").val(editvideoname)
	});
	$("#editgallerytype").change(function(){
		let editgtype = $(this).find(":selected").val();
		let editgallerytsource = $("#editgallerysource").find(":selected").val();
		if(editgtype == 'video'){
			$(".editgalleryimagediv").css({'display':'none','visibility':'hidden'})
			$(".editvideosourcediv").css({'display':'block','visibility':'visible'})
			$(".edityoutubevideodiv").css({'display':'block','visibility':'visible'})
			if(editgallerytsource == 'file'){
				$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
				$(".edityoutubevideodiv").css({'display':'block','visibility':'visible'})
			}else{
				$(".edityoutubeurldiv").css({'display':'block','visibility':'visible'})
				$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
			}
		}else{
			$(".editgalleryimagediv").css({'display':'block','visibility':'visible'})
			$(".editvideosourcediv").css({'display':'none','visibility':'hidden'})
			$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
			$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
		}
	})
	$("#editgallerysource").change(function(){
		let editgsource = $(this).find(":selected").val();
		if(editgsource == 'url'){
			$(".edityoutubeurldiv").css({'display':'block','visibility':'visible'})
			$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
		}else{
			$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
			$(".edityoutubevideodiv").css({'display':'block','visibility':'visible'})
		}
	})
	$(".editclickgallery").click(function(e){
		$("#editgalleryid").val('')
		$("#editgallerytitle").val('')
		$("#editgallerytype").val('')
		$("#editgallerysource").val('')
		$("#edityoutubeurl").val('')
		$("#editsgalleryimagename").val('')
		$("#editsgalleryvideoname").val('')
		let galleryid = $(this).data('id')
		let gallerytitle = $(this).data('title')
		let gallerytype = $(this).data('type')
		let galleryimage = $(this).data('image')
		let gallerysource = $(this).data('source')
		let galleryurl = $(this).data('url')
		let galleryvideo = $(this).data('video')
		$("#editgalleryid").val(galleryid)
		$("#editgallerytitle").val(gallerytitle)
		$("#editgallerytype").val(gallerytype)
		$("#editgallerysource").val(gallerysource)
		$("#edityoutubeurl").val(galleryurl)
		$("#editsgalleryimagename").val(galleryimage)
		$("#editsgalleryvideoname").val(galleryvideo)
		if(gallerytype == 'video'){
			$(".editvideosourcediv").css({'display':'block','visibility':'visible'})
			$(".editgalleryimagediv").css({'display':'none','visibility':'hidden'})
			$(".editvideosourcediv").css({'display':'block','visibility':'visible'})
			if(gallerysource == 'file'){
				$(".edityoutubevideodiv").css({'display':'block','visibility':'visible'})	
				$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
			}else{
				$(".edityoutubeurldiv").css({'display':'block','visibility':'visible'})
				$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
			}
		}else{
			$(".editgalleryimagediv").css({'display':'block','visibility':'visible'})
			$(".edityoutubeurldiv").css({'display':'none','visibility':'hidden'})
			$(".edityoutubevideodiv").css({'display':'none','visibility':'hidden'})
			$(".editvideosourcediv").css({'display':'none','visibility':'hidden'})
		}
	})
	
	$("#submitEditGallery").click(function(){
		let editgtitle = $("#editgallerytitle").val()
		let editgtype = $('#editgallerytype').find(":selected").val();
		let editgallerysource = $('#editgallerysource').find(":selected").val();
		let editgimagename = $("#editgalleryimagename").val()
		let editgvideoname = $("#editgalleryvideoname").val()
		let edityoutubeurl = $("#edityoutubeurl").val()
		
		let galleryid = $("#editgalleryid").val()
		let gallerytitle = $("#editgallerytitle").val()
		let galleryimage = $("#editsgalleryimagename").val()
		let galleryvideo = $("#editsgalleryvideoname").val()
		
		let isTrue = true
		if(editgtitle ==''){
			toastr.error('please enter valid title')
			isTrue = false
		}else if(editgtype == 'image' && editgimagename =='' && galleryimage ==''){
			toastr.error('please select image')
			isTrue = false
		}else if(editgtype == 'video' && editgallerysource == 'file' && editgvideoname == '' && galleryvideo == ''){
			toastr.error('please select video')
			isTrue = false
		}else if(editgtype == 'video' && editgallerysource == 'url' && edityoutubeurl == ''){
			toastr.error('please enter video url')
			isTrue = false
		}
		if(isTrue){
			let editgtype = $('#editgallerytype').find(":selected").val();
			let editgallerdysource = $('#editgallerysource').find(":selected").val();
			let editfile_image = $("#editgalleryImage").prop("files")[0] || '';
			let editfile_video = $("#editgalleryVideo").prop("files")[0] || '';
			var editform_data = new FormData();
			editform_data.append("galleryid",galleryid)
			editform_data.append("title",editgtitle)
			editform_data.append("gimage",editfile_image)
			editform_data.append("gvideo",editfile_video)
			editform_data.append("galleryimage",galleryimage)
			editform_data.append("galleryvideo",galleryvideo)
			editform_data.append("type",editgtype)
			editform_data.append("source",editgallerdysource)
			editform_data.append("youtubeurl",edityoutubeurl)
			editform_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/updategallery',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: editform_data,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					$("#editgallerytitle").val('')	
				    $("#edityoutubeurl").val('')
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	})
	
	$(".deletegalleryclick").click(function(){
		let galleryid = $(this).data('id')
		$("#deletegalleryid").val(galleryid)
	})
	$('#deletegallerybtn').click(function(){
		let galleryid = $('#deletegalleryid').val()
		$.ajax({
            url: '/admin/deletegallery',
            type: 'POST',
            data: {'galleryid':galleryid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete gallery successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change gallery status
	$('.changeGalleryStatus').click(function(){
		let galleryid = $(this).data('id')
		$.ajax({
            url: '/admin/changegallerystatus',
            type: 'POST',
            data: {'galleryid':galleryid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//video manage
	$(".youtubevdvideodiv").css({'display':'none','visibility':'hidden'})
	
	$('input[name=videosource]').change(function (e) {
		if ($(this).is(":checked")){
            let videosource = $(this).val();
			if(videosource == 'upload'){
				$(".youtubevdvideodiv").css({'display':'block','visibility':'visible'})
				$(".vdyoutubeurldiv").css({'display':'none','visibility':'hidden'})
			}else{
				$(".youtubevdvideodiv").css({'display':'none','visibility':'hidden'})
				$(".vdyoutubeurldiv").css({'display':'block','visibility':'visible'})
			}
        }
	});
	
	$(".edityoutubevdvideodiv").css({'display':'none','visibility':'hidden'})
	
	$('input[name=editvideosource]').change(function (e) {
		if ($(this).is(":checked")){
            let editvideosource = $(this).val();
			if(editvideosource == 'upload'){
				$(".edityoutubevdvideodiv").css({'display':'block','visibility':'visible'})
				$(".editvdyoutubeurldiv").css({'display':'none','visibility':'hidden'})
			}else{
				$(".edityoutubevdvideodiv").css({'display':'none','visibility':'hidden'})
				$(".editvdyoutubeurldiv").css({'display':'block','visibility':'visible'})
			}
        }
	});
	
	//video add
	$("#submitVideo").click(function(){
		let title = $("#videotitle").val()
		let batch = $('#videobatch').find(":selected").val();
		let subject = $('#videosubject').find(":selected").val();
		let chapter = $('#videochapter').find(":selected").val();
		let videourl = $('#videourl').val();
		let videosource = $("input[name='videosource']:checked").val();
		let videodescription = $('#videodescription').val();
		let videofile = $("#vdoVideo").prop("files")[0] || '';
		let isvalid = true
		if(title == ''){
			toastr.error("Please enter valid title")
			isvalid = false
		}else if(batch == ''){
			toastr.error("Please select batch")
			isvalid = false
		}else if(subject == ''){
			toastr.error("Please select subject")
			isvalid = false
		}else if(chapter == ''){
			toastr.error("Please select chapter")
			isvalid = false
		}else if(videosource == 'upload' && videofile.length == 0){
			toastr.error("Please select video file")
			isvalid = false
		}else if(videosource != 'upload' && videourl == ''){
			toastr.error("Please enter valid url")
			isvalid = false
		}	
		if(isvalid){
			var videoform = new FormData();
			videoform.append("title",title)
			videoform.append("batch",batch)
			videoform.append("subject",subject)
			videoform.append("chapter",chapter)
			videoform.append("source",videosource)
			videoform.append("url",videourl)
			videoform.append("video",videofile)
			videoform.append("description",videodescription)
			videoform.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/addvideo',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: videoform,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					$('.modal').modal('hide')
					$("#videotitle").val('')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	})
	
	//edit video
	$(".editclickvideo").click(function(){
		let videoid = $(this).data('id');
		let videotitle = $(this).data('title');
		let videobatch = $(this).data('batch');
		let videosubject = $(this).data('subject');
		let videochapter = $(this).data('chapter');
		let videosource = $(this).data('source');
		let videourl = $(this).data('url');
		let videovideo = $(this).data('video');
		let description = $(this).data('description');
		if(videosource == 'upload'){
			$(".edityoutubevdvideodiv").css({'display':'block','visibility':'visible'})
			$(".editvdyoutubeurldiv").css({'display':'none','visibility':'hidden'})
		}else{
			$(".edityoutubevdvideodiv").css({'display':'none','visibility':'hidden'})
			$(".editvdyoutubeurldiv").css({'display':'block','visibility':'visible'})
		}
		$("input[name='editvideosource']").each(function(ele){
			let currval = $(this).val()
			if(currval == videosource){
				$(this).trigger('click')
			}
		})
		$('#editvdvideoid').val(videoid)
		$('#editvdvideoname').val(videovideo)
		$('#editvideotitle').val(videotitle)
		$('#editvideobatch').val(videobatch)
		$('#editvideosubject').val(videosubject)
		$('#editvideochapter').val(videochapter)
		$('#editvideourl').val(videourl)
		$('#editvideodescription').val(description)
	})
	$("#editsubmitVideo").click(function(){
		let videoid = $("#editvdvideoid").val()
		let title = $("#editvideotitle").val()
		let batch = $('#editvideobatch').find(":selected").val();
		let subject = $('#editvideosubject').find(":selected").val();
		let chapter = $('#editvideochapter').find(":selected").val();
		let videourl = $('#editvideourl').val();
		let videosource = $("input[name='editvideosource']:checked").val();
		let videodescription = $('#editvideodescription').val();
		let videofile = $("#editvdoVideo").prop("files")[0] || '';
		let editvdvideoname = $("#editvdvideoname").val()
		let isvalid = true

		if(title == ''){
			toastr.error("Please enter valid title")
			isvalid = false
		}else if(batch == ''){
			toastr.error("Please select batch")
			isvalid = false
		}else if(subject == ''){
			toastr.error("Please select subject")
			isvalid = false
		}else if(chapter == ''){
			toastr.error("Please select chapter")
			isvalid = false
		}else if(videosource == 'upload' && videofile.length == 0 && editvdvideoname == ''){
			toastr.error("Please select video file")
			isvalid = false
		}else if(videosource != 'upload' && videourl == ''){
			toastr.error("Please enter valid url")
			isvalid = false
		}	
		if(isvalid){
			var videoform = new FormData();
			videoform.append("videoid",videoid)
			videoform.append("editvdvideoname",editvdvideoname)
			videoform.append("title",title)
			videoform.append("batch",batch)
			videoform.append("subject",subject)
			videoform.append("chapter",chapter)
			videoform.append("source",videosource)
			videoform.append("url",videourl)
			videoform.append("video",videofile)
			videoform.append("description",videodescription)
			videoform.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/updatevideo',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: videoform,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					$('.modal').modal('hide')
					$("#editvideotitle").val('')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	})
	//delete video
	$(".deletevideoclick").click(function(){
		let videoid = $(this).data('id')
		$("#deletevideoid").val(videoid)
	})
	
	$('#deletevideobtn').click(function(){
		let videoid = $('#deletevideoid').val()
		$.ajax({
            url: '/admin/deletevideo',
            type: 'POST',
            data: {'videoid':videoid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete video successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change video status
	$('.changeVideoStatus').click(function(){
		let videoid = $(this).data('id')
		$.ajax({
            url: '/admin/changevideostatus',
            type: 'POST',
            data: {'videoid':videoid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)	
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//site settings
	$('#updatesitesettings').validate({
    rules: {
	  sitetitle: {
        required: true,
        minlength: 3
      },
	  siteauthorname: {
        required: true,
        minlength: 3
      },
	  sitekeywords: {
        required: true,
        minlength: 3
      },
	  sitedescription: {
        required: true,
        minlength: 3
      },
	  enrollmentword: {
        required: true,
        minlength: 3
      },
	  copyrighttext: {
        required: true,
        minlength: 3
      },
	  timezone: {
        required: true,
      },
    },
    messages: {
	  sitetitle: {
        required: "Please provide a site title",
        minlength: "Your site title must be at least 3 characters long"
      },
      siteauthorname: {
        required: "Please enter a site author name",
        minlength: "Your site author name must be at least 3 characters long"
      },
	  sitekeywords: {
        required: "Please enter a site keywords",
        minlength: "Your site sitekeywords must be at least 3 characters long"
      },
	  sitedescription: {
        required: "Please enter a site description",
        minlength: "Your site description must be at least 3 characters long"
      },
	  enrollmentword: {
        required: "Please enter a site enrollmentword",
        minlength: "Your enrollment word must be at least 3 characters long"
      },
	  copyrighttext: {
        required: "Please enter a copyright text",
        minlength: "Your copyright text must be at least 3 characters long"
      },
	  timezone: {
        required: "Please select timezone",
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
  
  //generate settings
  
  //payment setting
	$('#updatepaymentsettings').validate({
    rules: {
	  paymentcurrency: {
        required: true,
      },
	  razorpaykeyid: {
        required: true,
      },
	  razorpaysecretkey: {
        required: true,
      },
	  paypalclientid: {
        required: true,
      },
	  paypalsandboxaccount: {
        required: true,
      },
    },
    messages: {
	  paymentcurrency: {
        required: "Please select payment currency",
      },
      razorpaykeyid: {
        required: "Please enter a razorpay key id",
      },
	  razorpaysecretkey: {
        required: "Please enter a razorpay secret key",
      },
	  paypalclientid: {
        required: "Please enter a paypal client id",
      },
	  paypalsandboxaccount: {
        required: "Please enter a paypal sandbox account",
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
	
	//email setting
	$('#updateemailsettings').validate({
    rules: {
	  smtpusername: {
        required: true,
      },
	  smtppassword: {
        required: true,
      },
	  smtphost: {
        required: true,
      },
	  smtpport: {
        required: true,
      },
    },
    messages: {
	  smtpusername: {
        required: "Please enter smtp username",
      },
      smtppassword: {
        required: "Please enter a smtp password",
      },
	  smtphost: {
        required: "Please enter a smtp host",
      },
	  smtpport: {
        required: "Please enter a smtp port",
      },
	  paypalsandboxaccount: {
        required: "Please enter a paypal sandbox account",
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
   
   //Certificate setting
	$('#updatecertificatesettings').validate({
    rules: {
	  heading: {
        required: true,
		minlength:3
      },
	  subheading: {
        required: true,
		minlength:3
      },
	  certificatetemplate: {
        required: true,
      },
	  title: {
        required: true,
		minlength:3
      },
	  description: {
        required: true,
		minlength:3
      },
    },
    messages: {
	  heading: {
        required: "Please enter heading",
		minlength: "Your heading must be at least 3 characters long"
      },
      subheading: {
        required: "Please enter a sub heading",
		minlength: "Your sub heading must be at least 3 characters long"
      },
	  certificatetemplate: {
        required: "Please enter a certificate template",
      },
	  title: {
        required: "Please enter a title",
		minlength: "Your title must be at least 3 characters long"
      },
	  description: {
        required: "Please enter a description",
		minlength: "Your description must be at least 3 characters long"
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
  
  //subject batch manage
  // batch select box
	$('#batch_subject').select2({
		placeholder: "Select subject",
		ajax:{ 
          url: "{{route('getsubject')}}",
          type: "get",
          dataType: 'json',
          processResults: function (response) {
            return {
              results:response
            };
          },
          cache: true
        }	
	});
	
	$("#batch_subject").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#batch_chapter').empty()
                if(response){
					response.map((ite)=>{
						$('#batch_chapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$('#batch_chapter').select2({
		placeholder: "Select chapter",
	});
	
	$('#batch_teacher').select2({
		placeholder: "Select teacher",
		ajax:{ 
          url: "{{route('getteacher')}}",
          type: "get",
          dataType: 'json',
          processResults: function (response) {
            return {
              results:response
            };
          },
          cache: true
        }	
	});
	$('input[name=batch_image]').change(function (e) {
		let imagename = e.target.files[0].name;
		$("#batch_imagehidden").val(imagename)
		$("#editbatch_imagehidden").val(imagename)
	});
	$("#submitbatchform").click(function(){
		let batch_category = $("#batch_category").find(":selected").val() || '';
		let batch_subcategory = $("#batch_subcategory").find(":selected").val() || '';
		let batch_subject = $("#batch_subject").find(":selected").val() || '';
		let batch_chapter = $("#batch_chapter").find(":selected").val() || '';
		let batch_teacher = $("#batch_teacher").find(":selected").val() || '';
		let batch_name = $("#batch_name").val() || '';
		let start_date = $("#start_date").val() || '';
		let startdatecom = new Date(start_date).getTime();
		let end_date = $("#end_date").val() || '';
		let enddatecom = new Date(end_date).getTime();
		let start_time = $("#start_time").val() || '';
		let end_time = $("#end_time").val() || '';
		
		let subject_start_date = $("#subject_start_date").val() || '';
		let startsubdatecom = new Date(subject_start_date).getTime();
		let subject_end_date = $("#subject_end_date").val() || '';
		let endsubdatecom = new Date(subject_end_date).getTime();
		let subject_start_time = $("#subject_start_time").val() || '';
		let subject_end_time = $("#subject_end_time").val() || '';
		
		let batch_image = $("#batch_imagehidden").val() || '';
		let issubmitBF = true
		if(batch_category == ''){
			issubmitBF = false;
			toastr.error('Please select category')
		}else if(batch_subcategory == ''){
			issubmitBF = false;
			toastr.error('Please select subcategory')
		}else if(batch_name == ''){
			issubmitBF = false;
			toastr.error('Please enter batch name')
		}else if(start_date == ''){
			issubmitBF = false;
			toastr.error('Please enter start date')
		}else if(end_date == ''){
			issubmitBF = false;
			toastr.error('Please enter end date')
		}else if(startdatecom >= enddatecom){
			issubmitBF = false;
			toastr.error('Start date not greeter than end date')
		}else if(start_time == ''){
			issubmitBF = false;
			toastr.error('Please enter start time')
		}else if(end_time == ''){
			issubmitBF = false;
			toastr.error('Please enter end time')
		}else if(batch_image == ''){
			issubmitBF = false;
			toastr.error('Please select batch image')
		}else if(batch_subject == '' || batch_chapter == '' || batch_teacher == '' || subject_start_date == '' || subject_end_date == '' || subject_start_time=='' || subject_end_time == '' || startsubdatecom >= endsubdatecom){
			issubmitBF = false;
			toastr.error('Please fill related field in subject section')
			$("#subject-validation").css({'border':'1px solid red'})
		}
		if(issubmitBF){
			$("#subject-validation").css({'border':'0px'})
			let batch_type = $('input[name=batch_type]:checked').val();
			let batch_imagefile = $("#batch_image").prop("files")[0];
			let description = $("#description").val()
			let featureheader = $("#featureheader").val()
			let feature = $("#feature").val()
			let batch_form_data = new FormData();
			batch_form_data.append("batch_category",batch_category)
			batch_form_data.append("batch_subcategory",batch_subcategory)
			batch_form_data.append("batch_name",batch_name)
			batch_form_data.append("start_date",start_date)
			batch_form_data.append("start_time",start_time)
			batch_form_data.append("end_date",end_date)
			batch_form_data.append("end_time",end_time)
			batch_form_data.append("batch_type",batch_type)
			batch_form_data.append("batch_image",batch_imagefile)
			batch_form_data.append("description",description)
			batch_form_data.append("featureheader",featureheader)
			batch_form_data.append("feature",feature)
			batch_form_data.append("batch_subject",batch_subject)
			batch_form_data.append("batch_chapter",batch_chapter)
			batch_form_data.append("batch_teacher",batch_teacher)
			batch_form_data.append("subject_start_date",subject_start_date)
			batch_form_data.append("subject_end_date",subject_end_date)
			batch_form_data.append("subject_start_time",subject_start_time)
			batch_form_data.append("subject_end_time",subject_end_time)
			batch_form_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/insertbatch',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: batch_form_data,
            success: function(response) {
				console.log(response)
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
		
	});
	$('.default_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#start_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#end_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#subject_start_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#subject_end_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	
	
	//edit batch id clockpicker
	
	$('#editstart_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#editend_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#editsubject_start_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	$('#editsubject_end_time').clockpicker({
		placement: 'bottom',
		align: 'left',
		autoclose: true,
		twelvehour: true,
		'default': 'now'
	});
	//update batch 
	
	
	$("#editsubmitbatchform").click(function(){
		let batch_category = $("#editbatch_category").find(":selected").val() || '';
		let batch_subcategory = $("#editbatch_subcategory").find(":selected").val() || '';
		let batch_subject = $("#editbatch_subject").find(":selected").val() || '';
		let batch_chapter = $("#editbatch_chapter").find(":selected").val() || '';
		let batch_teacher = $("#editbatch_teacher").find(":selected").val() || '';
		let batch_name = $("#editbatch_name").val() || '';
		let start_date = $("#editstart_date").val() || '';
		let startdatecom = new Date(start_date).getTime();
		let end_date = $("#editend_date").val() || '';
		let enddatecom = new Date(end_date).getTime();
		let start_time = $("#editstart_time").val() || '';
		let end_time = $("#editend_time").val() || '';
		
		let subject_start_date = $("#editsubject_start_date").val() || '';
		let startsubdatecom = new Date(subject_start_date).getTime();
		let subject_end_date = $("#editsubject_end_date").val() || '';
		let endsubdatecom = new Date(subject_end_date).getTime();
		let subject_start_time = $("#editsubject_start_time").val() || '';
		let subject_end_time = $("#editsubject_end_time").val() || '';
		
		let batch_image = $("#editbatch_imagehidden").val() || '';
		let editbatch_imageold = $("#editbatch_imageold").val() || '';
		let issubmitBF = true
		if(batch_category == ''){
			issubmitBF = false;
			toastr.error('Please select category')
		}else if(batch_subcategory == ''){
			issubmitBF = false;
			toastr.error('Please select subcategory')
		}else if(batch_name == ''){
			issubmitBF = false;
			toastr.error('Please enter batch name')
		}else if(start_date == ''){
			issubmitBF = false;
			toastr.error('Please enter start date')
		}else if(end_date == ''){
			issubmitBF = false;
			toastr.error('Please enter end date')
		}else if(startdatecom >= enddatecom){
			issubmitBF = false;
			toastr.error('Start date not greeter than end date')
		}else if(start_time == ''){
			issubmitBF = false;
			toastr.error('Please enter start time')
		}else if(end_time == ''){
			issubmitBF = false;
			toastr.error('Please enter end time')
		}else if(batch_subject == '' || batch_chapter == '' || batch_teacher == '' || subject_start_date == '' || subject_end_date == '' || subject_start_time=='' || subject_end_time == '' || startsubdatecom >= endsubdatecom){
			issubmitBF = false;
			toastr.error('Please fill related field in subject section')
			$("#subject-validation").css({'border':'1px solid red'})
		}
		if(issubmitBF){
			$("#subject-validation").css({'border':'0px'})
			let batch_type = $('input[name=editbatch_type]:checked').val();
			let batch_imagefile = $("#editbatch_image").prop("files")[0];
			let description = $("#editdescription").val()
			let featureheader = $("#editfeatureheader").val()
			let feature = $("#editfeature").val()
			let batchid = $("#batchid").val()
			let batch_form_data = new FormData();
			batch_form_data.append("batch_category",batch_category)
			batch_form_data.append("batch_subcategory",batch_subcategory)
			batch_form_data.append("batch_name",batch_name)
			batch_form_data.append("start_date",start_date)
			batch_form_data.append("start_time",start_time)
			batch_form_data.append("end_date",end_date)
			batch_form_data.append("end_time",end_time)
			batch_form_data.append("batch_type",batch_type)
			batch_form_data.append("batch_image",batch_imagefile)
			batch_form_data.append("editbatch_imageold",editbatch_imageold)
			batch_form_data.append("description",description)
			batch_form_data.append("featureheader",featureheader)
			batch_form_data.append("feature",feature)
			batch_form_data.append("batch_subject",batch_subject)
			batch_form_data.append("batch_chapter",batch_chapter)
			batch_form_data.append("batch_teacher",batch_teacher)
			batch_form_data.append("subject_start_date",subject_start_date)
			batch_form_data.append("subject_end_date",subject_end_date)
			batch_form_data.append("subject_start_time",subject_start_time)
			batch_form_data.append("subject_end_time",subject_end_time)
			batch_form_data.append("batchid",batchid)
			batch_form_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
            url: '/admin/updatebatch',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: batch_form_data,
            success: function(response) {
				console.log(response)
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
		
	});
	
	//Batch delete
	$(".delbatchid").click(function(){
		let batchid = $(this).data('id')
		$("#deletebatchid").val(batchid)
	})
	$('#deletebatchbtn').click(function(){
		let batchid = $('#deletebatchid').val()
		$.ajax({
            url: '/admin/deletebatch',
            type: 'POST',
            data: {'batchid':batchid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete batch successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change Batch status
	$('.changeBatchStatus').click(function(){
		let batchid = $(this).data('id')
		$.ajax({
            url: '/admin/changebatchstatus',
            type: 'POST',
            data: {'batchid':batchid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//edit batch select box
	$('#editbatch_category').select2();
	$('#editbatch_subcategory').select2();
		$("#editbatch_category").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getsubcategoty',
            type: 'POST',
            data: {'cateid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editbatch_subcategory').empty()
                if(response){
					response.map((ite)=>{
						$('#editbatch_subcategory').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	$("#batch_category").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getsubcategoty',
            type: 'POST',
            data: {'cateid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#batch_subcategory').empty()
                if(response){
					response.map((ite)=>{
						$('#batch_subcategory').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$('#batch_subcategory').select2({
		placeholder: "Select subcategory",
	});
	
	$("#editbatch_subject").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editbatch_chapter').empty()
                if(response){
					response.map((ite)=>{
						$('#editbatch_chapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	$("#videosubject").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#videochapter').empty()
                if(response){
					response.map((ite)=>{
						$('#videochapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	$("#editvideosubject").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editvideochapter').empty()
                if(response){
					response.map((ite)=>{
						$('#editvideochapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})	
	//manage question
	//subject question 
		$("#questionsubject").change(function(){
		var subjectid = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':subjectid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#questionchapter').empty()
                if(response){
					response.map((ite)=>{
						$('#questionchapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//edit subject question 
		$("#editquestionsubject").change(function(){
		var subjectid = $(this).val()
		$.ajax({
            url: '/admin/getchapter',
            type: 'POST',
            data: {'subjectid':subjectid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editquestionchapter').empty()
                if(response){
					response.map((ite)=>{
						$('#editquestionchapter').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//add question
	$("#submitquestion").click(function(){
		let questionsubject = $("#questionsubject").find("option:selected").val()
		let questionchapter = $("#questionchapter").find("option:selected").val()
		let addmarks = $("#addmark").val();
		let question = questionval.getData();
		let questiona = questionvala.getData();
		let questionb = questionvalb.getData();
		let questionc = questionvalc.getData();
		let questiond = questionvald.getData();
		let isValid = true;
		if(questionsubject == ''){
			toastr.error('Please select subject')
			isValid = false
		}else if(questionchapter == ''){
			toastr.error('Please select chapter')
			isValid = false
		}else if(question == ''){
			toastr.error('Please enter your question')
			isValid = false
		}else if(questiona == ''){
			toastr.error('Please enter question option A')
			isValid = false
		}else if(questionb == ''){
			toastr.error('Please enter question option B')
			isValid = false
		}else if(questionc == ''){
			toastr.error('Please enter question option C')
			isValid = false
		}else if(questiond == ''){
			toastr.error('Please enter question option D')
			isValid = false
		}else if(addmarks == ''){
			toastr.error('Please enter marks')
			isValid = false
		}
		if(isValid){
			let rightanswer = $("input[name='rightanswer']:checked").val();
			var qform_data = new FormData();
			qform_data.append("subject",questionsubject)
			qform_data.append("chapter",questionchapter)
			qform_data.append("question",question)
			qform_data.append("optiona",questiona)
			qform_data.append("optionb",questionb)
			qform_data.append("optionc",questionc)
			qform_data.append("optiond",questiond)
			qform_data.append("rightanswer",rightanswer)
			qform_data.append("addmarks",addmarks)
			qform_data.append("_token", "{{ csrf_token() }}")
			
			$.ajax({
            url: '/admin/addquestion',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: qform_data,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	});
	
	//edit question
	$("#editsubmitquestion").click(function(){
		let questionsubject = $("#editquestionsubject").find("option:selected").val()
		let questionchapter = $("#editquestionchapter").find("option:selected").val()
		let questionid = $("#questionid").val();
		let addmarks = $("#editaddmark").val();
		let question = editquestionval.getData();
		let questiona = editquestionvala.getData();
		let questionb = editquestionvalb.getData();
		let questionc = editquestionvalc.getData();
		let questiond = editquestionvald.getData();
		let isValid = true;
		if(questionsubject == ''){
			toastr.error('Please select subject')
			isValid = false
		}else if(questionchapter == ''){
			toastr.error('Please select chapter')
			isValid = false
		}else if(question == ''){
			toastr.error('Please enter your question')
			isValid = false
		}else if(questiona == ''){
			toastr.error('Please enter question option A')
			isValid = false
		}else if(questionb == ''){
			toastr.error('Please enter question option B')
			isValid = false
		}else if(questionc == ''){
			toastr.error('Please enter question option C')
			isValid = false
		}else if(questiond == ''){
			toastr.error('Please enter question option D')
			isValid = false
		}else if(addmarks == ''){
			toastr.error('Please enter marks')
			isValid = false
		}
		if(isValid){
			let rightanswer = $("input[name='rightanswer']:checked").val();
			var qform_data = new FormData();
			qform_data.append("questionid",questionid)
			qform_data.append("subject",questionsubject)
			qform_data.append("chapter",questionchapter)
			qform_data.append("question",question)
			qform_data.append("optiona",questiona)
			qform_data.append("optionb",questionb)
			qform_data.append("optionc",questionc)
			qform_data.append("optiond",questiond)
			qform_data.append("rightanswer",rightanswer)
			qform_data.append("addmarks",addmarks)
			qform_data.append("_token", "{{ csrf_token() }}")
			
			$.ajax({
            url: '/admin/updatequestion',
            type: 'POST',
			processData: false,
            cache: false,
            contentType: false,
            data: qform_data,
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'save successfully...')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
		}
	});
	
	//question delete
	$(".deletquestionclick").click(function(){
		let questionid = $(this).data('id')
		$("#deletequestionid").val(questionid)
	})
	$('#deletequestionbtn').click(function(){
		let questionid = $('#deletequestionid').val()
		$.ajax({
            url: '/admin/deletequestion',
            type: 'POST',
            data: {'questionid':questionid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete question successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change question status
	$('.changeQuestionStatus').click(function(){
		let questionid = $(this).data('id')
		$.ajax({
            url: '/admin/changequestionstatus',
            type: 'POST',
            data: {'questionid':questionid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	
	//create paper js
	$("#opencreatepaper").click(function(){
		let countval = $(".countval").val()
		if(countval > 0){
			$("#createPaperModal").modal('show')	
		}else{
			toastr.error('Please select at list one question')
		}
	})
	$(".resetpaper").click(function(){
		$(".createpapercheck").prop('checked',false)
		$(".selectedquestion").text(0+" ")
		$(".countval").val(0)
		$(".totalselectqs").text(0)
	})
	let papercount = 0;
	$('input[name=createpaperallcheck]').change(function(){
		papercount = 0
		if ($(this).is(":checked")){
			$('input[name=createpapercheck]').prop('checked',true)
			$(".qtn_containr").css({'display':'block','visibility':'visible'})
			$('input[name=createpapercheck]').each(function(){
				papercount++;
			})
		}else{
			$('input[name=createpapercheck]').prop('checked',false)
			$(".qtn_containr").css({'display':'none','visibility':'hidden'})
			papercount = 0;
		}
		$(".selectedquestion").text(papercount+" ")
		$(".countval").val(papercount)
		$(".totalselectqs").text(papercount)
	});
	$('input[name=createpapercheck]').change(function (e) {
		$('input[name=createpaperallcheck]').prop('checked',false)
		if ($(this).is(":checked")){
			papercount++
			$(".qtn_containr").css({'display':'block','visibility':'visible'})
		}else{
			if(papercount > 0){
				papercount--
			}
			if(papercount == 0){
				$(".qtn_containr").css({'display':'none','visibility':'hidden'})
			}
		}
		$(".selectedquestion").text(papercount+" ")
		$(".countval").val(papercount)
		$(".totalselectqs").text(papercount)
	})
	$(".ismaking").click(function(){
		if($(this).is(":checked")){
			$(".isnotmaking").prop('checked',false)
			$(".divnegativevalue").css({'display':'block','visibility':'visible'})
		}else{
			$(".divnegativevalue").css({'display':'none','visibility':'hidden'})
		}
	})
	$(".isnotmaking").click(function(){
		if($(this).is(":checked")){
			$(".divnegativevalue").css({'display':'none','visibility':'hidden'})
			$(".ismaking").prop('checked',false)
		}else{
			
			$(".divnegativevalue").css({'display':'block','visibility':'visible'})
		}
	})
	$(".divnegativevalue").css({'display':'none','visibility':'hidden'})
	
	$("#createpaper").click(function(){
		let papertype = $('#papertype').find(":selected").val();
		let paperbatch = $('#paperbatch').find(":selected").val();
		let papername = $("#papername").val()
		let timeduration = $("#timeduration").val()
		let inputnegativevalue = $("#negativevalue").val()
		let mocktest_schedule_date = $("#mocktest_schedule_date").val()
		let mocktest_schedule_time = $("#mocktest_schedule_time").val()
		let totalselectqs = $(".totalselectqs").text()
		let questionids = []
		$('input[name=createpapercheck]:checked').each(function(){
			let qids = $(this).val();
			questionids.push(qids)
		})
		let negativevalue = 0;
		if(!$('.isnotmaking').is(":checked") && !$('.ismaking').is(":checked")){
			negativevalue = 0.25;
		}else if($('.isnotmaking').is(":checked")){
			negativevalue = 0;
		}else if(inputnegativevalue !='' && $('.ismaking').is(":checked")){
			negativevalue = inputnegativevalue
		}
		var paperform_data = new FormData();
		let paperValid = true;
		if(papertype == ''){
			toastr.error('Please select paper type');
			paperValid = false;
		}else if(papertype == 'mocktestpaper' && mocktest_schedule_date == ''){
			toastr.error('Please select schedule date');
			paperValid = false;
		}else if(papertype == 'mocktestpaper' && mocktest_schedule_time == ''){
			toastr.error('Please select schedule time');
			paperValid = false;
		}else if(papername == ''){
			toastr.error('Please enter paper name');
			paperValid = false;
		}else if(timeduration == ''){
			toastr.error('Please enter time duration')
			paperValid = false;
		}else if(paperbatch == ''){
			toastr('Please select batch')
			paperValid = false;
		}
		if(paperValid){
			paperform_data.append("papertype",papertype)
			paperform_data.append("paperbatch",paperbatch)
			paperform_data.append("papername",papername)
			paperform_data.append("mocktest_schedule_date",mocktest_schedule_date)
			paperform_data.append("mocktest_schedule_time",mocktest_schedule_time)
			paperform_data.append("timeduration",timeduration)
			paperform_data.append("negativevalue",negativevalue)
			paperform_data.append("totalselectqs",parseInt(totalselectqs))
			paperform_data.append("questionids",questionids)
			paperform_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/admin/submitcreatepaper',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: paperform_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});	
		}		
	});
	//edit paper 
	$("#editupdatepaper").click(function(){
		let papertype = $('#papertype').find(":selected").val();
		let paperbatch = $('#paperbatch').find(":selected").val();
		let papername = $("#papername").val()
		let paperid = $("#paperid").val()
		let timeduration = $("#timeduration").val()
		let inputnegativevalue = $("#negativevalue").val()
		let mocktest_schedule_date = $("#mocktest_schedule_date").val()
		let mocktest_schedule_time = $("#mocktest_schedule_time").val()
		let totalselectqs = $(".totalselectqs").text()
		let questionids = []
		$('input[name=createpapercheck]:checked').each(function(){
			let qids = $(this).val();
			questionids.push(qids)
		})
		let negativevalue = 0;
		if(!$('.isnotmaking').is(":checked") && !$('.ismaking').is(":checked")){
			negativevalue = 0.25;
		}else if($('.isnotmaking').is(":checked")){
			negativevalue = 0;
		}else if(inputnegativevalue !='' && $('.ismaking').is(":checked")){
			negativevalue = inputnegativevalue
		}
		var paperform_data = new FormData();
		let paperValid = true;
		if(papertype == ''){
			toastr.error('Please select paper type');
			paperValid = false;
		}else if(papertype == 'mocktestpaper' && mocktest_schedule_date == ''){
			toastr.error('Please select schedule date');
			paperValid = false;
		}else if(papertype == 'mocktestpaper' && mocktest_schedule_time == ''){
			toastr.error('Please select schedule time');
			paperValid = false;
		}else if(papername == ''){
			toastr.error('Please enter paper name');
			paperValid = false;
		}else if(timeduration == ''){
			toastr.error('Please enter time duration')
			paperValid = false;
		}else if(paperbatch == ''){
			toastr('Please select batch')
			paperValid = false;
		}
		if(paperValid){
			paperform_data.append("papertype",papertype)
			paperform_data.append("paperbatch",paperbatch)
			paperform_data.append("papername",papername)
			paperform_data.append("mocktest_schedule_date",mocktest_schedule_date)
			paperform_data.append("mocktest_schedule_time",mocktest_schedule_time)
			paperform_data.append("timeduration",timeduration)
			paperform_data.append("paperid",paperid)
			paperform_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/admin/updatepaper',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: paperform_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});	
		}		
	});
	//selectbox change
	$("#papertype").change(function(){
		let paperval =  $(this).find(':selected').val();
		let papertext =  $(this).find(':selected').text();
		if(paperval == 'mocktestpaper'){
			$('.mocktestschedule').css({'display':'block','visibility':'visible'});
		}else{
			$('.mocktestschedule').css({'display':'none','visibility':'hidden'});
		}
	})
  $('#deletepaperbtn').click(function(){
		let paperid = $('#deletepaperid').val()
		$.ajax({
            url: '/admin/deletepaper',
            type: 'POST',
            data: {'paperid':paperid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete paper successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//assignment add process
	$("#assignbatch").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/teacher/getbatchsubject',
            type: 'POST',
            data: {'batchid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#assignsubject').empty()
                if(response){
					response.map((ite)=>{
						$('#assignsubject').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//assignment add process
	$("#editassignbatch").change(function(){
		var val = $(this).val()
		$.ajax({
            url: '/teacher/getbatchsubject',
            type: 'POST',
            data: {'batchid':val,"_token": "{{ csrf_token() }}"},
            success: function(response) {
				$('#editassignsubject').empty()
                if(response){
					response.map((ite)=>{
						$('#editassignsubject').append('<option value="' + ite.id + '">' + ite.text + '</option>');
					})
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})	

	//add assignment
	$("#addassignment").click(function(){
		let batch_id = $("#assignbatch").find(':selected').val();
		let subject_id = $("#assignsubject").find(':selected').val();
		let assigndate = $("#assigndate").val();
		let assigndescription = $("#assigndescription").val();
		let validassign = true;
		if(batch_id == ''){
			validassign = false;
			toastr.error('Please select batch');
		}else if(subject_id == ''){
			validassign = false;
			toastr.error('Please select subject');
		}else if(assigndate == ''){
			validassign = false;
			toastr.error('Please enter valid date');
		}else if(assigndescription == ''){
			validassign = false;
			toastr.error('Please enter description');
		}
		
		if(validassign){
			let ass_data = new FormData();
			ass_data.append("batch_id",batch_id)
			ass_data.append("subject_id",subject_id)
			ass_data.append("assigndate",assigndate)
			ass_data.append("assigndescription",assigndescription)
			ass_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/teacher/addassignment',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: ass_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});	
		}
	});
	//update assignment
	$("#updateassignment").click(function(){
		let batch_id = $("#editassignbatch").find(':selected').val();
		let subject_id = $("#editassignsubject").find(':selected').val();
		let assigndate = $("#editassigndate").val();
		let assignmentid = $("#assignmentid").val();
		let assigndescription = $("#editassigndescription").val();
		let validassign = true;
		if(batch_id == ''){
			validassign = false;
			toastr.error('Please select batch');
		}else if(subject_id == ''){
			validassign = false;
			toastr.error('Please select subject');
		}else if(assigndate == ''){
			validassign = false;
			toastr.error('Please enter valid date');
		}else if(assigndescription == ''){
			validassign = false;
			toastr.error('Please enter description');
		}
		
		if(validassign){
			let ass_data = new FormData();
			ass_data.append("assignmentid",assignmentid)
			ass_data.append("batch_id",batch_id)
			ass_data.append("subject_id",subject_id)
			ass_data.append("assigndate",assigndate)
			ass_data.append("assigndescription",assigndescription)
			ass_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/teacher/updateassignment',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: ass_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});	
		}
	});
	//delete assignment 
	$('.deleteAssignmentclick').click(function(){
		let assignmentid = $(this).data('id');
		$('#deleteassignid').val(assignmentid);
	});
	$('#deleteassignmentbtn').click(function(){
		let assignmentid = $('#deleteassignid').val()
		$.ajax({
            url: '/teacher/deleteassignment',
            type: 'POST',
            data: {'assignmentid':assignmentid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete paper successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change AssignmentStatus status
	$('.changeAssignmentStatus').click(function(){
		let assignmentid = $(this).data('id')
		$.ajax({
            url: '/teacher/changeassignmentstatus',
            type: 'POST',
            data: {'assignmentid':assignmentid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//edit assignment
	$('.editclickassignment').click(function(){
		let assignmentid = $(this).data('id');
		let batch = $(this).data('batch');
		let subject = $(this).data('subject');
		let assigndate = $(this).data('assigndate');
		let assigndescription = $(this).data('assigndescription');
		
		$('#assignmentid').val(assignmentid);
		$('#editassignbatch').val(batch);
		$('#editassignsubject').val(subject);
		$('#editassigndate').val(assigndate);
		$('#editassigndescription').val(assigndescription);
	});
	
	//apply leave
	$("#applyleave").click(function(){
		let apf_fdate = $("#applyleave_fromdate").val(); 
		let apf_tdate = $("#applyleave_todate").val(); 
		let apf_subject = $("#applyleave_subject").val(); 
		let apf_message = $("#applyleave_message").val(); 
		let validcon = true;
		if(apf_fdate == ''){
			validcon = false;
			toastr.error('Please enter from date');
		}else if(apf_tdate == ''){
			validcon = false;
			toastr.error('Please enter to date');
		}else if(apf_tdate < apf_fdate){
			validcon = false;
			toastr.error('To date should be grater than from date');
		}else if(apf_subject == ''){
			validcon = false;
			toastr.error('Please enter subject');
		}else if(apf_message == ''){
			validcon = false;
			toastr.error('Please enter message');
		}
		if(validcon){
			let ass_data = new FormData();
			ass_data.append("apf_fdate",apf_fdate)
			ass_data.append("apf_tdate",apf_tdate)
			ass_data.append("apf_subject",apf_subject)
			ass_data.append("apf_message",apf_message)
			ass_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/teacher/submitapplyleave',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: ass_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});
		}
	});
	
	//edit apply leave procrss
	
	$(".editclickapplyleave").click(function(){
		let applyid = $(this).data('id');
		let fromdate = $(this).data('fromdate');
		let todate = $(this).data('todate');
		let subject = $(this).data('subject');
		let message = $(this).data('message');
		
		$("#applyid").val(applyid);
		$("#editapplyleave_fromdate").val(fromdate);
		$("#editapplyleave_todate").val(todate);
		$("#editapplyleave_subject").val(subject);
		$("#editapplyleave_message").val(message);
	});
	//update apply leave
	$("#editapplyleave").click(function(){
		let apf_fdate = $("#editapplyleave_fromdate").val(); 
		let apf_tdate = $("#editapplyleave_todate").val(); 
		let apf_subject = $("#editapplyleave_subject").val(); 
		let apf_message = $("#editapplyleave_message").val(); 
		let applyid = $("#applyid").val(); 
		let validcon = true;
		if(apf_fdate == ''){
			validcon = false;
			toastr.error('Please enter from date');
		}else if(apf_tdate == ''){
			validcon = false;
			toastr.error('Please enter to date');
		}else if(apf_tdate < apf_fdate){
			validcon = false;
			toastr.error('To date should be grater than from date');
		}else if(apf_subject == ''){
			validcon = false;
			toastr.error('Please enter subject');
		}else if(apf_message == ''){
			validcon = false;
			toastr.error('Please enter message');
		}
		if(validcon){
			let ass_data = new FormData();
			ass_data.append("applyid",applyid)
			ass_data.append("apf_fdate",apf_fdate)
			ass_data.append("apf_tdate",apf_tdate)
			ass_data.append("apf_subject",apf_subject)
			ass_data.append("apf_message",apf_message)
			ass_data.append("_token", "{{ csrf_token() }}")
			$.ajax({
				url: '/teacher/updateapplyleave',
				type: 'POST',
				processData: false,
				cache: false,
				contentType: false,
				data: ass_data,
				success: function(response) {
					if(response?.status == "success"){
						toastr.success(response?.message || 'save successfully...')
						$('.modal').modal('hide')
						setTimeout(()=>{
							window.location = window.location.href
						},2000)
					}else{
						toastr.error(response?.message || 'Record not found!');
					}
				}            
			});
		}
	});
	
	//delete assignment 
	$('.deleteApplyleaveclick').click(function(){
		let applyid = $(this).data('id');
		$('#deleteapplyid').val(applyid);
	});
	$('#deleteapplyleavebtn').click(function(){
		let applyid = $('#deleteapplyid').val()
		$.ajax({
            url: '/teacher/deleteapplyleave',
            type: 'POST',
            data: {'applyid':applyid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete apply successfully...')	
					$('.modal').modal('hide')
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	//change leave apply Status status
	$('.changeApplyleaveStatus').click(function(){
		let applyid = $(this).data('id')
		$.ajax({
            url: '/teacher/changeapplyleavestatus',
            type: 'POST',
            data: {'applyid':applyid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//view student leave applicationmode
	//Batch delete
	$(".viewleaveclick").click(function(){
		let message = $(this).data('message')
		let subject = $(this).data('subject')
		let fromdate = $(this).data('fromdate')
		let todate = $(this).data('todate')
		$(".message-leave").text(message)
		$(".subject-leave").text(subject)
		$(".fromdate-leave").text(fromdate)
		$(".todate-leave").text(todate)
	})
});
function getpaperid(paperid,status){
	if(status == 'delete'){
	  $("#deletepaperid").val(paperid)
	}else{
		$.ajax({
            url: '/admin/changepaperstatus',
            type: 'POST',
            data: {'paperid':paperid,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
					setTimeout(()=>{
						window.location = window.location.href
					},2000)
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	}
}
function addfeature(){
	var list_fieldHTML = '<div class="subfeature"><input type="text" name="feature[]" class="form-control feature" placeholder="feature"><div class="adddeletefeature"><i class="fa fa-plus add_new_feature eb_add_sheading assSubHeading" onclick="addfeature()"></i><i class="fa fa-trash eb_rem_sheading removeSubHeading" onclick="removefeature(this)"></i></div></div>'; 
	$('.featurewrapper').append(list_fieldHTML); //Add field html
}
function removefeature(self){
	self.closest('.subfeature').remove();
}
</script>
</body>
</html>
