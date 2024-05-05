$(document).ready(function(){
    var base_url = $('#base_url').val();
    $('#ProductForm').submit(function(e){
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
                        // $('#categoryModel').modal('hide');
                        // get_categories();
                        // window.location.href = response.redirect_url;
                        location.reload();
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

      /********************* food list*************************** */
      get_foods();
    function get_foods(){
        $.ajax({
            url		    : base_url + 'admin/foods/food-lists',
            type		: 'get',
            dataType	: 'html',
            beforeSend: function () {
                // $("#submit_btn").html('Please wait...');
                // $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                // console.log(response);
                $("#products_data").html(response);
               
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
    }

    /*********************** Update food****************************** */
    $('#UpdateFoodForm').submit(function(e){
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
                        // $('#categoryModel').modal('hide');
                        // get_categories();
                        // window.location.href = response.redirect_url;
                        location.reload();
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

      /********************** delete food**************************** */
      $(document).on('click','#btn_delete',function(e) {
        e.preventDefault();
        // alert('dfgdf');
        var del_id = $(this).attr('del-id');
        // alert(del_id);
        $.ajax({
            url		    : base_url + 'admin/foods/delete/'+del_id,
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
                        get_foods()
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
