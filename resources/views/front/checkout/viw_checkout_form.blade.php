@include('front.shared.viw_header')	
    <!-- !!- ===================================== Main Start ======================== -!! -->
    <main id="main">
        <!-- !!- ===================================== Header Start ======================== -!! -->
         <div class="inner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-text">
                            <h4> Checkout </h4>
                            <ul class="inner-list">
                                <li class="inner-item"> Home <i class="fa-solid fa-chevron-right"></i> </li>
                                <li class="inner-item"> Checkout </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- !!- ===================================== Header Start ======================== -!! -->

        <!-- !!- ===================================== Content-conntainer Start ======================== -!! -->
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="neco-heading">
                            <h4> Vicodin Demo </h4>
                            <p> Cart/Information/Shipping/Payment </p>
                        </div>

                        <div class="checkout-content-box">
                            <div class="checkout-left">
                                <form action="{{ route('payment') }}" method="POST" id="paymentForm">	

                                <div class="review-chat-contact type-2">
                                    <div class="ccb-heading"> 
                                        <h4> Contact Information </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mt-4">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="name" name="name" placeholder="Name">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-5">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mt-5">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="phone" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-12 mt-4">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="address" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="city" name="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <div class="rcc-input">
                                                <input type="text" required class="form-control" id="pincode" name="pincode" placeholder="Postal Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-5">
										<div class="rcc-input">
                                                <button type="submit" class="btn btn-danger">Pay Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                            <div class="checkout-right">
                               <div class="cart-box">
                                  <ul class="cb-list">
								<?php		
								  $total_price = 0;
                              	  foreach($cart_details as $details){?>
                                     <li class="cb-item">
                                        <div class="cb-box">
                                            <div class="cb-img"> <img src="{{ asset('storage/app/public/products/images/' . $details['food_image']) }}" alt="" /> </div>
                                            <div class="cb-text">
                                                 <h4> <?php echo isset($details['food_name'])?$details['food_name']:'-'?> </h4>
                                                 <p> color: Brown </p>
                                                 <p>Quantity: (<?php echo isset($details['food_qty'])?$details['food_qty']:'-'?>pcs)</p>
                                                 <div class="cb-price"> $<?php echo  $details['food_qty'] * $details['food_price'];?> </div>
                                            </div>
                                        </div>
                                     </li>
                                     <input type="hidden" name="food_id[]" id="food_id" value="<?php echo isset($details['food_id'])?$details['food_id']:'0';?>">
                                     <input type="hidden" name="qty[]" id="qty" value="<?php echo isset($details['food_qty'])?$details['food_qty']:'0';?>">
                                     <input type="hidden" name="price[]" id="price" value="<?php echo isset($details['food_price'])?$details['food_price']:'0';?>">

								<?php 
							             $total_price = $total_price + ($details["food_qty"] * $details["food_price"]);

								}?>	 
                                  </ul>

                                  <div class="cb-info-box">
                                        <div class="col-lg-12 ">
                                            <div class="fc-info">
                                                <h4> Sub Totals: </h4>
                                                <div class="fci-price"> $<?php echo isset($total_price)?$total_price:0?> </div>
                                                <input type="hidden" name="food_id" id="food_id" value="<?php echo isset($details['food_id'])?$details['food_id']:'0';?>">
                                                <input type="hidden" name="amount" id="amount" value="<?php echo isset($total_price)?$total_price:'0';?>">
                                                <input type="hidden" name="qty" id="qty" value="<?php echo isset($details['food_qty'])?$details['food_qty']:'0';?>">
                                            </div>
                                            <div class="fc-info">
                                                <h4> Totals: </h4>
                                                <div class="fci-price">  $<?php echo isset($total_price)?$total_price:0?> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Shiping & taxes calculated at checkout
                                                </label>
                                            </div>
                                        </div>
                                        </form>
                                        <!-- <div class="col-lg-12 mt-5">
                                            <div class="rcc-input">
                                                <a href="#!"> Procced To Checkout </a>
                                            </div>
                                        </div> -->
                                  </div>
                               </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- !!- ===================================== Content-conntainer Start ======================== -!! -->

        <!-- !!- ===================================== Log In Start ======================== -!! -->
        <div class="content-container ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider">
                            <div class="slide-track">
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- !!- ===================================== Log IN Start ======================== -!! -->
        
    </main>
    <!--============================== Main End ==============================-->
@include('front.shared.viw_footer')	
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	$(document).ready(function () {
    $('#paymentForm').submit(function (event) {
        event.preventDefault(); // Stop the form from submitting traditionally

        var amount = $('#amount').val();
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var city = $('#city').val();
        var address = $('#address').val();
        var pincode = $('#pincode').val();
        var qty = $('#qty').val();
        var food_id = $('#food_id').val();
		var base_url = $('#base_url').val();
        // alert(amount);return false;

        // Validate amount as a number
        if (isNaN(amount) || amount <= 0) {
            alert('Invalid amount. Please enter a valid number.');
            return;
        }

        // Convert amount to paise
        // amount = Math.round(parseFloat(amount) * 100);

        $.ajax({
		url: $(this).attr('action'),
		method: 'POST',
		data: {
			amount:amount, 
			name:name, 
			email:email, 
			phone:phone, 
			city:city, 
			address:address, 
			pincode:pincode, 
			qty:qty, 
			food_id:food_id, 
		},
		dataType: 'json',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
    	success: function (data) {
        	var options = {
            "key": "{{ env('RAZORPAY_KEY_ID') }}",
            "amount": amount * 100,
            "currency": data.currency,
            "name": "Tasam Solution",
            "description": "Payment for Order",
            "order_id": data.id,
            "handler": function (response) {
                // Handle the success callback
                console.log(response);
				$.ajax({
                        url: base_url+'save-payment-id',
                        method: 'POST',
                        data: {
                            order_id: data.order_id,
                            razorpay_payment_id: response.razorpay_payment_id
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            console.log(response);
                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                            alert('Error saving payment ID. Please try again.');
                        }
                    });
            },
            "prefill": {
                "name": "Sagar prajapt",
                "email": "sagarprajapt250@gmail.com",
                "contact": "7378159185"
            },
            "notes": {
                "address": "2 jagdish vihar goner road,jaipur"
            },
            "theme": {
                "color": "#3399cc"
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    },
    error: function (xhr, status, error) {
        console.error(error);
        alert('Error initiating payment. Please try again.');
    }
});

    });
});
</script>
<!-- <script src="{{ asset('public/front/assets/js/checkout.js')}}"></script> -->
