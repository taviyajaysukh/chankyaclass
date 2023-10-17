$(function () {
	//select 2
	$('.js-example-basic-single').select2();
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
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {'subcateid':subcateId,"_token": "{{ csrf_token() }}"},
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
	$('.delsubcateid').click(function(){
		let subcateId = $(this).data('id')
		$('#deletesubcateid').val(subcateId)
	})
	$('#deletesubcategory').click(function(){
		let subcateId = $('#deletesubcateid').val()
		$.ajax({
            url: '/admin/deletesubcategory',
            type: 'POST',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {'subcateid':subcateId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subcategory successfully...')	
					$('.modal').modal('hide')
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
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {'noticeid':noticeId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'status change successfully...')	
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
	
	//delete notice record
	$('#deletenotice').click(function(){
		let noticeId = $('#deletenoticeid').val()
		$.ajax({
            url: '/admin/deletenotice',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            data: {'noticeid':noticeId,"_token": "{{ csrf_token() }}"},
            success: function(response) {
                if(response?.status == "success"){
					toastr.success(response?.message || 'delete subcategory successfully...')	
					$('.modal').modal('hide')
				}else{
					toastr.error(response?.message || 'Record not found!');
				}
            }            
        });
	})
});

