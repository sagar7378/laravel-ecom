$(document).ready(function(){
    var base_url = $('#base_url').val();

    $('.cart_icon_trigger').click(function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        var form_data = new FormData($('#CartForm_' + productId)[0]);
        form_data.append('_token', $('#csrf_token').val());
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
                $('#cart_message_'+productId).show();
                setTimeout(function() {
                    $('#cart_message_'+productId).hide();

                }, 2000); // Hide the tooltip after 2 seconds (adjust as needed)
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
        $.ajax({
            url:base_url+'admin/foods/delete-food/'+food_id,
            method:"get",
            dataType:"html",
            success:function(response)
           {
                console.log(response);
                location.reload();
           }
          });

    });


    //Price fileter
    $('#price_filter').change(function() {
        var selectedOption = $(this).val();
        filterItems(selectedOption);
    });


    function filterItems(option) {
        $.ajax({
            url: base_url+'front/product-filter', // Replace with your Laravel route for filtering
            type: 'GET',
            data: { option: option },
            success: function(response) {
                console.log(response)
                $('.products_filter').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }

    $('#product_name').on('input', function() {
        var input_val = $(this).val();
        // alert(input_val);
        $.ajax({
            url: base_url+'front/product-search-filter', // Replace with your Laravel route for filtering
            type: 'GET',
            data: { search: input_val },
            success: function(response) {
                console.log(response)
                $('.products_filter').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
    
  


    /************************* Cart updation through ajax************************** */
    // $('.inc').click(function(){
    //     // alert('code');
    //     var qty = $(this).attr('data-qty');
    //     alert(qty);
    // });


    /********************************* Wishlist code here********************************************* */

    $(document).on('click', '.wishlist_btn', function(e) {
        e.preventDefault();
        
        // Check if the button is already in a loading state
        if ($(this).hasClass('loading')) {
            return;
        }
    
        var product_id = $(this).attr('wishlist-product-id');
        var csrf_token = $('meta[name="csrf-token"]').attr('content'); // Retrieve CSRF token from meta tag
        
        // Add loading class to prevent multiple clicks
        $(this).addClass('loading');
        
        $.ajax({
            url: base_url + 'front/add-wishlist',
            type: 'post',
            data: {
                product_id: product_id,
                _token: csrf_token // Include CSRF token in the data with Laravel's convention
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.alert == 'success') 
                {
                    $('#wishlist_msg_' + product_id).show();
                    $('#wishlist_msg_' + product_id).text(response.msg);
                    setTimeout(function() {
                        $('#wishlist_msg_' + product_id).hide(response.msg);
                    }, 2000); // Hide the tooltip after 2 seconds (adjust as needed)
                }
                if (response.redirect) {
                    window.location.href = response.redirect;
                }           
             },
            error: function(xhr, status, error) {
                console.log('errrrr');
                console.error(xhr.responseText);
            },
            complete: function() {
                // Remove loading class after AJAX request is complete
                $('.wishlist_btn').removeClass('loading');
            }
        });
    });
    
    
    

});


