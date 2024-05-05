$(document).ready(function(){
    $('.CartForm').submit(function(e){
        e.preventDefault()
        var form_data = new FormData(this);    
        form_data.append('_token', $('#csrf_token').val());

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
               //  $(".login_btn").html('Please wait...');
               //  $(".login_btn").prop('disabled', true);
            },
            success: function(response) {
                console.log(response);
                var cartContainer = $('#cart-container');
            
                // Clear existing content
                cartContainer.empty();
            
                // Start the list
                var html = '<ul>';
                var image_path = $('#image_path').val();
            
                // Iterate through the cart data and append it to the container
                $.each(response, function(foodId, foodDetails) {
                    html += '<li>';
                    html += '<figure><img src="'+ image_path + '/'+ foodDetails.food_image+'" data-src="'+ image_path + '/'+ foodDetails.food_image+'" alt="'+ foodDetails.food_name +'" width="50" height="50" class="lazy"></figure>';
                    html += '<strong><span>' + foodDetails.food_qty + 'x' + foodDetails.food_name + '</span>' +'Rs'+ foodDetails.food_price + '</strong>';
                    html += '<a href="#0" class="action"><i class="icon_trash_alt"></i></a>';
                    html += '</li>';
                });
            
                // End the list

                html += '</ul>';
                html += '<div class="total_drop">';
                html += '<div class="clearfix add_bottom_15"><strong>Total</strong><span>$32.00</span></div>';
                html += '<a href="shop-cart.html" class="btn_1 outline">View Cart</a><a href="shop-checkout.html" class="btn_1">Checkout</a>';
                html += '</div>';
            
                // Append the entire list to the container
                cartContainer.append(html);
            },
            
            error:	function(response) 
            {
                console.log(response);
            }
        }); 
      });
});


