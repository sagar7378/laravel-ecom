@include('front.shared.viw_header')	
<main class="pattern_2">
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-xl-6 col-lg-8">
		        	<div class="box_booking_2 style_2">
					    <div class="head">
					        <div class="title">
					            <h3>Personal Details</h3>
					        </div>
					    </div>
					    <!-- /head -->
						<div class="alert" id="error_msg"></div>
					    <div class="main">
						<form action="{{ route('payment') }}" method="POST" id="paymentForm">	
					        <div class="form-group">
					            <label>First and Last Name</label>
					            <input class="form-control" name="name" id="name" placeholder="First and Last Name" value="<?php echo isset($customer_info->name)?$customer_info->name:'';?>" >
					        </div>
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Email Address</label>
					                    <input class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo isset($customer_info->email)?$customer_info->email:'';?>">
					                </div>
					            </div>
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>Phone</label>
					                    <input class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo isset($customer_info->phone)?$customer_info->phone:'';?>">
					                </div>
					            </div>
					        </div>
					        <div class="form-group">
					            <label>Delivery Address</label>
					            <input class="form-control" name="address" id="address" placeholder="Full Address" value="<?php echo isset($customer_info->address)?$customer_info->address:'';?>">
					        </div>
					        <div class="row">
					            <div class="col-md-6">
					                <div class="form-group">
					                    <label>City</label>
					                    <input class="form-control" name="city" id="city" placeholder="City" value="<?php echo isset($customer_info->city)?$customer_info->city:'';?>">
					                </div>
					            </div>
					            <div class="col-md-3">
					                <div class="form-group">
					                    <label>Pin Code</label>
					                    <input class="form-control" name="pincode" id="pincode" placeholder="0123" value="<?php echo isset($customer_info->pincode)?$customer_info->pincode:'';?>">
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
					<!-- /box_booking -->
		            <div class="box_booking_2 style_2">
					    <div class="head">
					        <div class="title">
					            <h3>Payment Method</h3>
					        </div>
					    </div>
					    <!-- /head -->
					    <div class="main">
					        <!--End row -->
					        <div class="payment_select" id="paypal">
					            <label class="container_radio">Pay with Razorpay
					                <input type="radio" value="Online" name="payment_method" checked>
					                <span class="checkmark"></span>
					            </label>
					        </div>
					        <!-- <div class="payment_select">
					            <label class="container_radio">Pay with Cash
					                <input type="radio" value="" name="payment_method">
					                <span class="checkmark"></span>
					            </label>
					            <i class="icon_wallet"></i>
					        </div> -->
					    </div>
					</div>
					<!-- /box_booking -->
		        </div>
		        <!-- /col -->
		        <div class="col-xl-4 col-lg-4" id="sidebar_fixed">
		            <div class="box_booking">
		                <div class="head">
		                    <h3>Order Summary</h3>
		                </div>
		                <!-- /head -->
		                <div class="main">
		                	<ul class="clearfix">
                              <?php 
                              $total_price = 0;
                              foreach($cart_details as $details){?>
		                		<li><a href="#0"><?php echo isset($details['food_qty'])?$details['food_qty']:'-'?>x <?php echo isset($details['food_name'])?$details['food_name']:'-'?></a><span>Rs <?php echo isset($details['food_price'])?$details['food_price']:'-'?></span></li>
                             <?php 
                                $total_price = $total_price + ($details["food_qty"] * $details["food_price"]);
                            }?>   
		                	</ul>
		                	
		                	<ul class="clearfix">
		                		<li>Subtotal<span>Rs <?php echo isset($total_price)?$total_price:0?></span></li>
		                		<li>Delivery fee<span>Rs 100</span></li>
								<input type="hidden" name="food_id" id="food_id" value="<?php echo isset($details['food_id'])?$details['food_id']:'0';?>">
								<input type="hidden" name="amount" id="amount" value="<?php echo isset($total_price)?$total_price:'0';?>">
								<input type="hidden" name="qty" id="qty" value="<?php echo isset($details['food_qty'])?$details['food_qty']:'0';?>">
		                		<li class="total">Total<span>Rs <?php echo isset($total_price)?$total_price + 100 :0?></span></li>
		                	</ul>
								<br>
								<button type="submit" class="btn_1 full-width mb_5">Pay Now</button>
							</form>
		                    <!-- <a href="confirm.html" class="btn_1 full-width mb_5">Order Now</a> -->
		                    <div class="text-center"><small>Or Call Us at <strong>0432 48432854</strong></small></div>
		                </div>
		            </div>
		            <!-- /box_booking -->
		        </div>

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->	
	</main>
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
            "name": "Foodie Point",
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
