$(document).ready(function(){
    $('.cart_icon_trigger').click(function(e) {
        e.preventDefault();
        
        // var form_data = new FormData(this);
        var productId = $(this).data('product-id');
        // var form_data = new FormData($('#CartForm')[0]);
        var form_data = new FormData($('#CartForm_' + productId)[0]);

        form_data.append('_token', $('#csrf_token').val());
    
        // var action_url = $(this).attr('action');
        // var action_url = $('#CartForm').attr('action');
        var action_url = $('#CartForm_' + productId).attr('action');


    
        $.ajax({
            url: action_url,
            type: 'post',
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                // $(".login_btn").html('Please wait...');
                // $(".login_btn").prop('disabled', true);
            },
            success: function(response) {
                console.log(response);
                load_cart_data();
            },
            error: function(response) {
               
            }
        });
    });
    


    /********************** Load cart data***************************** */
    load_cart_data();
    function load_cart_data(){
        var base_url = $('#base_url').val();
        // alert(base_url);return false;
        $.ajax({
            url:base_url+'admin/foods/load-cart',
            method:"get",
            dataType:"json",
            success:function(response)
           {
            console.log(response);
            // $('.cart_details').html(response[0].output);
            $('.total').html(response[1].total);
            $('.food_count').html(response[2].food_count);
           }
          });
    }

    /********************** Delete cart***************************** */
    $(document).on('click','.delete_cart',function(){
        var food_id = $(this).attr('food-id');
        var base_url = $('#base_url').val();

        // alert(food_id);
        $.ajax({
            url:base_url+'admin/foods/delete-food/'+food_id,
            method:"get",
            dataType:"json",
            success:function(response)
           {
                console.log(response);
                load_cart_data();
           }
          });

    });

    /************************* Cart updation through ajax************************** */
    // $('.inc').click(function(){
    //     // alert('code');
    //     var qty = $(this).attr('data-qty');
    //     alert(qty);
    // });

});


