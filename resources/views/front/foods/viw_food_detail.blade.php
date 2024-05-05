@include('front.shared.viw_header')	
<main>
		<div class="hero_single inner_pages background-image" data-background="url({{ asset('public/front/assets/img/hero_menu.jpg') }})">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Our Shop</h1>
							<p>Order food with home delivery or take away</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame white"></div>
		</div>
		<!-- /hero_single -->

		<div class="container margin_60_40">
			<div class="row">
	            <div class="col-lg-6 magnific-gallery">
                    <p>
	                    <a href="{{ asset('storage/app/public/products/images/' . $food_detail->image) }}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{ asset('storage/app/public/products/images/' . $food_detail->image) }}" alt="" class="img-fluid"></a>
	                </p>
                    <?php foreach($food_detail->gallery_images as $gallery_img) {?>
	                <!-- <p>
	                    <a href="{{ asset('storage/app/public/products/images/' . $gallery_img) }}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{ asset('storage/app/public/products/images/' . $gallery_img) }}" alt="" class="img-fluid"></a>
	                </p> -->
                    <?php }?> 
	            </div>
	            <div class="col-lg-6" id="sidebar_fixed">
	                <div class="prod_info">
	                	<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><em>4 reviews</em></span>
	                    <h1><?php echo isset($food_detail->name)?$food_detail->name:'';?></h1>
	                    <p><?php echo isset($food_detail->short_descr)?$food_detail->short_descr:'';?></p>
	                    <div class="prod_options">
	                        <div class="row">
	                            <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong></label>
	                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
	                                    <select class="wide">
	                                        <option value="" selected="">Small</option>
	                                        <option value="">Medium</option>
	                                        <option value="">Large</option>
	                                        <option value="">Extra Large</option>
	                                        <option value="">Extra Extra Large</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
	                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
	                                <div class="numbers-row">
	                                    <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-lg-5 col-md-6">
	                            <div class="price_main"><span class="new_price">Rs. <?php echo isset($food_detail->price)?$food_detail->price:'';?></span></div>
	                        </div>
	                        <!-- <div class="col-lg-4 col-md-6">
	                            <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
	                        </div> -->

							<form action="{{ route('admin/foods/add-to-cart') }}" method="post" class="CartForm" >
										
										<input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
										<input type="hidden" id="food_id" name="food_id" value="<?php echo isset($food_detail->id)?$food_detail->id:'';?>">
										<input type="hidden" id="food_name" name="food_name" value="<?php echo isset($food_detail->name)?$food_detail->name:'';?>">
										<input type="hidden" id="food_price" name="food_price" value="<?php echo isset($food_detail->price)?$food_detail->price:'';?>">
										<input type="hidden" id="food_image" name="food_image" value="<?php echo isset($food_detail->image)?$food_detail->image:'';?>">
										<div class="add_cart" id="cart_button"><input type="submit" class="btn_1" value="Add to cart"></input></div>
							</form>
	                    </div>
	                </div>
	                <!-- /prod_info -->
	            </div>
	        </div>
	        <!-- /row -->			
		</div>
		<!-- /container -->

		<div class="tabs_product">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Description</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /tabs_product -->
	    <div class="tab_content_wrapper">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Description
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <h3>Details and ingredients</h3>
	                                    <p><?php echo isset($food_detail->descr)?$food_detail->descr:'';?></p>
	                                </div>
	                                <div class="col-md-6">
	                                    <h3>Specifications (100g)</h3>
	                                    <div class="table-responsive">
	                                        <table class="table table-sm table-striped">
	                                            <tbody>
	                                                <tr>
	                                                    <td><strong>Calories</strong></td>
	                                                    <td><?php echo isset($food_detail->calories)?$food_detail->calories:'';?></td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Protein</strong></td>
	                                                    <td><?php echo isset($food_detail->protein)?$food_detail->protein:'';?></td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Carboidrates</strong></td>
	                                                    <td><?php echo isset($food_detail->carboidrates)?$food_detail->carboidrates:'';?></td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Fat</strong></td>
	                                                    <td><?php echo isset($food_detail->fat)?$food_detail->fat:'';?></td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                    <!-- /table-responsive -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                Reviews
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>5.0/5.0</em></span>
	                                            <em>Published 54 minutes ago</em>
	                                        </div>
	                                        <h4>"Commpletely satisfied"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>4.0/5.0</em></span>
	                                            <em>Published 1 day ago</em>
	                                        </div>
	                                        <h4>"Always the best"</h4>
	                                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /row -->
	                            <div class="row justify-content-between">
	                                <div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.5/5.0</em></span>
	                                            <em>Published 3 days ago</em>
	                                        </div>
	                                        <h4>"Outstanding"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>5.0/5.0</em></span>
	                                            <em>Published 4 days ago</em>
	                                        </div>
	                                        <h4>"Excellent"</h4>
	                                        <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- /row -->
	                            <p class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
	                        </div>
	                        <!-- /card-body -->
	                    </div>
	                </div>
	            </div>
	            <!-- /tab-content -->
	        </div>
	    </div>
	</main>
    @include('front.shared.viw_footer')	
