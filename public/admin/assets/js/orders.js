$(document).ready(function(){
    var base_url = $('#base_url').val();
    // Get orders data ajax
    get_orders();
    function get_orders(){
        $.ajax({
            url		    : base_url + 'admin/orders-list',
            type		: 'get',
            dataType	: 'html',
            beforeSend: function () {
                // $("#submit_btn").html('Please wait...');
                // $("#submit_btn").prop('disabled', true);
            },
            success : function(response) 
            {
                console.log(response);
                $("#orders_data").html(response);
               
            },
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
    }

});
