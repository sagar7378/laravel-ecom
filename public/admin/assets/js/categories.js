$(document).ready(function(){
    var base_url = $('#base_url').val();
    $('#CategoryForm').submit(function(e){
        e.preventDefault()
        // alert('fdffd');return false;
        var form_data = new FormData(this);
        var action_url = $(this).attr('action');
        $.ajax({
            url		    : action_url,
            type		: 'post',
            data		: form_data,
            dataType	: 'json',
            processData : false,
            contentType : false,
            cache		: false,
            beforeSend: function () {
                $("#submit_btn").html('Please wait...');
                $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                console.log(response);
                $("#submit_btn").html('Save');
                $("#submit_btn").prop('disabled', false);
                $(".error_msg").show();
                $(".error_msg").addClass(response.alert_class);
                $(".error_msg").text(response.message);
                setTimeout(function(){
                    $('.error_msg').fadeOut();
                    if(response.alert_class == 'alert-success'){
                        $('#categoryModel').modal('hide');
                        get_categories();
                        // window.location.href = response.redirect_url;
                    }else{
                        location.reload();
                    }
                },3000);
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
      });

    /********************** Get category data with ajax**************************** */
    get_categories();
    function get_categories(){
        $.ajax({
            url		    : base_url + 'admin/categories/list',
            type		: 'get',
            dataType	: 'html',
            beforeSend: function () {
                // $("#submit_btn").html('Please wait...');
                // $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                // console.log(response);
                $("#categories_data").html(response);
               
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
    }

    /********************** delete category**************************** */
    $(document).on('click','#btn_delete',function(e) {
        e.preventDefault();
        // alert('dfgdf');
        var del_id = $(this).attr('del-id');
        // alert(del_id);
        $.ajax({
            url		    : base_url + 'admin/categories/delete/'+del_id,
            type		: 'get',
            data        : {del_id:del_id},
            dataType	: 'json',
            beforeSend: function () {
                // $("#submit_btn").html('Please wait...');
                // $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                console.log(response);
                $(".error_msg").show();
                $(".error_msg").addClass(response.alert_class);
                $(".error_msg").text(response.message);
                setTimeout(function(){
                    $('.error_msg').fadeOut();
                    if(response.alert_class == 'alert-success'){
                        get_categories();
                    }else{
                        location.reload();
                    }
                },3000);
               
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
    });

    $('#EditCategoryForm').submit(function(e){
        e.preventDefault()
        // alert('fdffd');return false;
        var form_data = new FormData(this);
        var action_url = $(this).attr('action');
        $.ajax({
            url		    : action_url,
            type		: 'post',
            data		: form_data,
            dataType	: 'json',
            processData : false,
            contentType : false,
            cache		: false,
            beforeSend: function () {
                $("#submit_btn").html('Please wait...');
                $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                console.log(response);
                $("#submit_btn").html('Save');
                $("#submit_btn").prop('disabled', false);
                $(".error_msg").show();
                $(".error_msg").addClass(response.alert_class);
                $(".error_msg").text(response.message);
                setTimeout(function(){
                    $('.error_msg').fadeOut();
                    if(response.alert_class == 'alert-success'){
                        // window.location.href = response.redirect_url;
                    }else{
                        location.reload();
                    }
                },3000);
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
      });

});
