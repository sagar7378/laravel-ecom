$(document).ready(function(){
    $('#LoginForm').submit(function(e){
     e.preventDefault()
    //  alert('fdffd');return false;
     var form_data = new FormData(this);
     var action_url = $(this).attr('action');
     $.ajax({
         url		: action_url,
         type		: 'post',
         data		: form_data,
         dataType	: 'json',
         processData : false,
         contentType : false,
         cache		: false,
         beforeSend: function () {
            //  $(".login_btn").html('Please wait...');
            //  $(".login_btn").prop('disabled', true);
         },
         success : function(response) 
         {
             console.log(response);
            //  return false;
             $("#login_error_msg").show();
             $("#login_error_msg").addClass(response.alert_class);
             $("#login_error_msg").text(response.message);
             setTimeout(function(){
                 $('#login_error_msg').fadeOut();
                 if(response.alert_class == 'alert-success'){
                     window.location.href = response.redirect_url;
                 }else{
                     location.reload();
                 }
             },3000);
         },
         error:	function(data) 
         {
             console.log(response);
         }
     }); 
   });


   /*********************** Register *************************** */
   $('#RegisterForm').submit(function(e){
    e.preventDefault()
    // alert('fdffd');return false;
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    var form_data = new FormData(this);
    form_data.append('_token', csrfToken);
    var action_url = $(this).attr('action');
    $.ajax({
        url		: action_url,
        type		: 'post',
        data		: form_data,
        dataType	: 'json',
        processData : false,
        contentType : false,
        cache		: false,
        beforeSend: function () {
           //  $(".login_btn").html('Please wait...');
           //  $(".login_btn").prop('disabled', true);
        },
        success : function(response) 
        {
            console.log(response);
           //  return false;
            $("#error_msg").show();
            $("#error_msg").addClass(response.alert_class);
            $("#error_msg").text(response.message);
            setTimeout(function(){
                $('#error_msg').fadeOut();
                if(response.alert_class == 'alert-success'){
                    window.location.href = response.redirect_url;
                }else{
                    location.reload();
                }
            },3000);
        },
        error:	function(data) 
        {
            console.log(response);
        }
    }); 
  });
 });