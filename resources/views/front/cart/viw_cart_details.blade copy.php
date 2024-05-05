@include('front.shared.viw_header')	
<main>
		<div class="hero_single inner_pages background-image" data-background="url(img/hero_menu.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Your orders</h1>
							<p>Order food with home delivery or take away</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame gray"></div>
		</div>
		<!-- /hero_single -->
		
		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <table class="table table-striped cart-list">
		            <thead>
		                <tr>
		                    <th>
		                        Food
		                    </th>
		                    <th>
		                        Price
		                    </th>
		                    <th>
		                        Quantity
		                    </th>
		                    <th>
		                        Subtotal
		                    </th>
		                    <th>
		                    </th>
		                </tr>
		            </thead>
		            <tbody>
                    <?php 
                    $sub_total = 0;    
                    foreach($cart_details as $details) {  
                    $sub_total = $sub_total + $details['food_qty'] * $details['food_price'];?>
		                <tr>
		                    <td>
		                        <div class="thumb_cart">
		                            <img src="{{ asset('storage/app/public/products/images/' . $details['food_image']) }}" data-src="{{ asset('storage/app/public/products/images/' . $details['food_image']) }}" class="lazy" alt="Image">
		                        </div>
		                        <span class="item_cart"><?php echo isset($details['food_name'])?$details['food_name']:'-'?></span>
		                    </td>
		                    <td>
		                        <strong>Rs <?php echo isset($details['food_price'])?$details['food_price']:'-'?></strong>
		                    </td>
		                    <td>
		                        <div class="numbers-row">
		                            <input type="text" value="<?php echo isset($details['food_qty'])?$details['food_qty']:'-'?>" id="quantity_1" class="qty2 qty_val" name="quantity_1">
		                            <div class="inc button_inc" >+</div>
		                            <div class="dec button_inc">-</div>
		                        </div>
		                    </td>
		                    <td>
		                        <strong>Rs <?php echo isset($details['food_qty'])?$details['food_qty'] * $details['food_price']:'-'?> </strong>
		                    </td>
		                    <td class="options">
		                        <a href="#"><i class="ti-trash"></i></a>
		                    </td>
		                </tr>
                    <?php }?>    
		            </tbody>
		        </table>
		        <div class="row add_top_30 flex-sm-row-reverse cart_actions">
		            <div class="col-sm-4 text-right">
		                <button type="button" class="btn_1 outline">Update Cart</button>
		            </div>
		            <div class="col-sm-8">
		                <div class="apply-coupon">
		                    <div class="form-group form-inline">
		                        <input type="text" name="coupon-code" value="" placeholder="Promo code" class="form-control d-inline" style="width: 150px;"><button type="button" class="btn_1 outline">Apply Coupon</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!-- /cart_actions -->
		    </div>
		    <!-- /container -->
		</div>

		<div class="box_cart">
			<div class="container">
			<div class="row justify-content-end">
				<div class="col-xl-4 col-lg-4 col-md-6">
			<ul>
				<li>
					<span>Subtotal</span> Rs <?php echo isset($sub_total)?$sub_total:'-'?>
				</li>
				<li>
					<span>Delivery fee</span> Rs 100
				</li>
				<li>
					<span>Total</span>  <?php echo isset($sub_total)?$sub_total + 100:'-'?>
				</li>
			</ul>
			<a href="{{ route('front/foods/checkout-form') }}" class="btn_1 full-width cart">Proceed to Checkout</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /box_cart -->
		
	</main>
    @include('front.shared.viw_footer')	
    <script src="{{ asset('public/front/assets/js/specific_shop.js') }}"></script>

