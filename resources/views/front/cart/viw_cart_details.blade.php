@include('front.shared.viw_header')	
    <!-- !!- ===================================== Main Start ======================== -!! -->
    <main id="main">

        <!-- !!- ===================================== Header Start ======================== -!! -->
         <div class="inner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-text">
                            <h4> Cart Page </h4>
                            <ul class="inner-list">
                                <li class="inner-item"> Home <i class="fa-solid fa-chevron-right"></i> </li>
                                <li class="inner-item"> Cart Page </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- !!- ===================================== Header Start ======================== -!! -->

        <!-- !!- ===================================== Content-container Start Here ======================== -!! -->
        <div class="content-container">
           <div class="container">
              <div class="row">
                <div class="col-lg-12">


                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                     <div class="pp-content-box">      
                        <div class="pp-left">
                            <ul class="check-out-list">
                                <li class="check-out-item d-md-block d-none">
                                    <div class="check-out-box">
                                        <div class="cob-product"> <h3>  Product </h3> </div>
                                        <div class="cob-total"> <h3>   Price </h3>  </div>
                                        <div class="cob-quantity"> <h3>  Quantity  </h3>  </div>
                                        <div class="cob-total">  <h3>  Total </h3>  </div>   
                                    </div>
                                </li>
								<?php
									$sub_total = 0;    
                                    if(!empty($cart_details)){
									foreach($cart_details as $details) {  
									$sub_total = $sub_total + $details['food_qty'] * $details['food_price'];?>
									<li class="check-out-item">                 
										<div class="check-out-box">
											<div class="cob-product">
												<div class="cobp-img"> 
													<img src="{{ asset('storage/app/public/products/images/' . $details['food_image']) }}" alt=""/> 
													<a href="javascript:void(0);" class="delete_cart" food-id="<?php echo $details['food_id'];?>"><span> + </span></a>
												</div>
												<div class="cobp-text"> 
													<h4> <?php echo isset($details['food_name'])?$details['food_name']:'-'?> </h4>
														<p> Color:Brown </p>
														<p> Quantity:(<?php echo isset($details['food_qty'])?$details['food_qty']:'-'?>pcs) </p>
												</div>
											</div>
											<div class="cob-total"> $ <?php echo isset($details['food_price'])?$details['food_price']:'-'?></div>
											<div class="cob-quantity"> 
												<div class="qty-container">
													<button class="qty-btn-minus btn-light" type="button">-</button>
													<input type="text" name="qty" value="<?php echo isset($details['food_qty'])?$details['food_qty']:0?>" class="input-qty"/>
													<button class="qty-btn-plus btn-light" type="button">+</button>
												</div>
											</div>
											<div class="cob-total"> $<?php echo isset($details['food_qty'])?$details['food_qty'] * $details['food_price']:'-'?> </div>
										</div>
									</li>
								<?php } }else{
                                    ?>
                                    <div class="text-center">
                                        <h2>Cart is Empty !</h2>
                                    </div>
                                    <?php
                                }
                                ?>
                            </ul>
                            <div class="row mt-5">
                                <div class="col-md-5">
                                    <div class="bcb-search-input">
                                        <input type="text" id="fname" name="fname" placeholder="Search For Products">
                                        <button style="width:100px;"> Apply </button>
                                    </div>
                                </div>
                                <div class="col-md-7 mt-4 mt-md-0">
                                    <!-- <div class="rcc-input d-flex justify-content-md-end">
                                        <a href="#!"> Clear Chart </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="pp-right">
                            <h5> Cart Totals </h5>
                            <div class="cb-info-box">
                                <div class="col-lg-12 ">
                                    <div class="fc-info">
                                        <h4> Sub Totals: </h4>
                                        <div class="fci-price"> $<?php echo isset($sub_total)?$sub_total:'-'?> </div>
                                    </div>
                                    <div class="fc-info">
                                        <h4> Totals: </h4>
                                        <div class="fci-price">  $<?php echo isset($sub_total)?$sub_total:'-'?> </div>
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
                                <div class="col-lg-12 mt-5">
                                    <div class="rcc-input">
                                        <a href="{{ route('front/foods/checkout-form') }}"> Procced To Checkout </a>
                                    </div>
                                </div>
                            </div> 
                            <h5>  Calculate Shipping </h5>
                            <div class="cb-info-box">
                                <div class="col-lg-12 ">
                                    <div class="rcc-input">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Bangladesh">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="rcc-input">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mirpur Dohs Dhaka-1200">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="rcc-input">
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <div class="rcc-input">
                                        <a href="#!"> Calculate Shipping </a>
                                    </div>
                                </div>
                            </div>      
                          </div> 
                        </div>
                     </div>

                    

                     
                </div>
              </div>
           </div>
        </div>
        <!-- !!- ===================================== Content-container End Here ======================== -!! -->

        <!-- !!- ===================================== Log In Start ======================== -!! -->
        <div class="content-container pt-0">
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
    <script src="{{ asset('public/front/assets/js/specific_shop.js') }}"></script>

