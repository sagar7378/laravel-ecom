@include('front.shared.viw_header')	
	<main>
		<section class="slider">
			<div id="slider" class="flexslider">
				<ul class="slides">
					<li>
						<img src="{{ asset('public/front/assets/img/flex_slides/slide_1.jpg') }}" alt="">
						<div class="meta">
							<h3>Mixed Thay Vegetables</h3>
							<div class="info">
								<p>Avocado, Mango, Tomatoes</p>
							</div>
							<a href="menu-1.html" class="btn_1">Read more</a>
						</div>
					</li>
					<li>
						<img src="{{ asset('public/front/assets/img/flex_slides/slide_2.jpg') }}" alt="">
						<div class="meta">
							<h3>Salted Fried Eggs</h3>
							<div class="info">
								<p>Crab, Potatoes, Rice, Eggs</p>
							</div>
							<a href="tour-detail.html" class="btn_1">Read more</a>
						</div>
					</li>
					<li>
						<img src="{{ asset('public/front/assets/img/flex_slides/slide_3.jpg') }}" alt="">
						<div class="meta">
							<h3>Fresh Crab Lemon</h3>
							<div class="info">
								<p>Crab, Potatoes, Rice, Eggs</p>
							</div>
							<a href="menu-1.html" class="btn_1">Read more</a>
						</div>
					</li>
					<li>
						<img src="{{ asset('public/front/assets/img/flex_slides/slide_4.jpg') }}" alt="">
						<div class="meta">
							<h3>Pizza Capricciosa</h3>
							<div class="info">
								<p>Cheese, Origano, Tomatoes</p>
							</div>
							<a href="menu-1.html" class="btn_1">Read more</a>
						</div>
					</li>
					<li>
						<img src="{{ asset('public/front/assets/img/flex_slides/slide_5.jpg') }}" alt="">
						<div class="meta">
							<h3>Royal Hamburgher XXL</h3>
							<div class="info">
								<p>Beef, Cheddar, Tomatoes</p>
							</div>
							<a href="menu-1.html" class="btn_1">Read more</a>
						</div>
					</li>
				</ul>
				<div id="icon_drag_mobile"></div>
			</div>
			<div id="carousel_slider_wp">
				<div id="carousel_slider" class="flexslider">
					<ul class="slides">
						<li>
							<img src="{{ asset('public/front/assets/img/flex_slides/slide_1_thumb.jpg') }}" alt="">
							<div class="caption">
								<h3>Mixed Thay<span>Starter</span></h3>
								<small>$12 per person</small>
							</div>
						</li>
						<li>
							<img src="{{ asset('public/front/assets/img/flex_slides/slide_2_thumb.jpg') }}" alt="">
							<div class="caption">
								<h3>Salted Eggs <span>Main Dishes</span></h3>
								<small>$15 per person</small>
							</div>
						</li>
						<li>
							<img src="{{ asset('public/front/assets/img/flex_slides/slide_3_thumb.jpg') }}" alt="">
							<div class="caption">
								<h3>Fresh Crab Lemon <span>Starter</span></h3>
								<small>$10 per person</small>
							</div>
						</li>
						<li>
							<img src="{{ asset('public/front/assets/img/flex_slides/slide_4_thumb.jpg') }}" alt="">
							<div class="caption">
								<h3>Pizza Capricciosa <span>Main Dishes</span></h3>
								<small>$15 per person</small>
							</div>
						</li>
						<li>
							<img src="{{ asset('public/front/assets/img/flex_slides/slide_5_thumb.jpg') }}" alt="">
							<div class="caption">
								<h3>Royal Hamburgher <span>Main Dishes</span></h3>
								<small>$15 per person</small>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="frame white"></div>
		</section>
		<div class="container margin_60_40">
			<div class="row small-gutters">
				<?php foreach($foods as $food) { ?>
					<div class="col-6 col-md-4 col-xl-3" data-cue="slideInUp">
						<div class="grid_item">
							<figure>
								<span class="ribbon off">-30%</span>
								<a href="{{ route('admin/foods/detail', ['id' => $food->id]) }}">
								<img class="img-fluid lazy" src="{{ asset('storage/app/public/products/images/' . $food->image) }}" data-src="{{ asset('storage/app/public/products/images/' . $food->image) }}" alt="">
								</a>
									<form action="{{ route('admin/foods/add-to-cart') }}" method="post" class="CartForm" >
										
										<input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
										<input type="hidden" id="food_id" name="food_id" value="<?php echo isset($food->id)?$food->id:'';?>">
										<input type="hidden" id="food_name" name="food_name" value="<?php echo isset($food->name)?$food->name:'';?>">
										<input type="hidden" id="food_price" name="food_price" value="<?php echo isset($food->price)?$food->price:'';?>">
										<input type="hidden" id="food_image" name="food_image" value="<?php echo isset($food->image)?$food->image:'';?>">
										<div class="add_cart" id="cart_button"><input type="submit" value="Add to cart"></input></div>
									</form>
							</figure>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i></div>
							<a href="{{ route('admin/foods/detail', ['id' => $food->id]) }}">
								<h3><?php echo isset($food->name)?$food->name:''?></h3>
							</a>
							<div class="price_box">
								<span class="new_price">Rs <?php echo isset($food->price)?$food->price:''?></span>
								<!-- <span class="old_price">$18.00</span> -->
							</div>
						</div>
						<!-- /grid_item -->
					</div>				
				<?php }?>	
				</div>
			
				<div class="pattern_2">
				<div class="container margin_120_100 home_intro">
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-lg-5 text-lg-center d-none d-lg-block" data-cue="slideInUp">
							<figure>
								<img src="{{ asset('public/front/assets/img/home_1.jpg') }}" alt="" class="img-fluid">
								<a href="../watch.html?v=MO7Hi_kBBBg" class="btn_play" data-cue="zoomIn" data-delay="500"><span class="pulse_bt"><i class="arrow_triangle-right"></i></span></a>
							</figure>
						</div>
						<div class="col-lg-5 pt-lg-4" data-cue="slideInUp" data-delay="500">
							<div class="main_title">
								<span><em></em></span>
								<h2>Some words about us</h2>
								<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
							</div>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<p><img src="{{ asset('public/front/assets/img/signature.png') }}" alt="" class="mt-3"></p>
						</div>
					</div>
					<!--/row -->
				</div>
				<!--/container -->
			</div>
		</div>	
		<!--/pattern_2 -->

		<div class="bg_gray">
		    <div class="container margin_120_100" data-cue="slideInUp" data-delay="500">
		        <div class="main_title center mb-5">
		            <span><em></em></span>
		            <h2>Our Special Menu</h2>
		        </div>
		        <!-- /main_title -->
		        <div class="tabs_menu homepage add_bottom_25">
		            <ul class="nav nav-tabs" role="tablist">
		                <li class="nav-item">
		                    <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Starters</a>
		                </li>
		                <li class="nav-item">
		                    <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Main Dishes</a>
		                </li>
		                <li class="nav-item">
		                    <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">Desserts</a>
		                </li>
		            </ul>
		            <div class="tab-content" role="tablist">
		                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
		                    <div class="card-header" role="tab" id="heading-A">
		                        <h5>
		                            <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
		                                Starters
		                            </a>
		                        </h5>
		                    </div>
		                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
		                        <div class="card-body">
		                            <div class="banner lazy" data-bg="url({{ asset('public/front/assets/img/banner_bg_2.jpg') }})">
		                                <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
		                                    <div>
		                                        <small>Starters Special Offer</small>
		                                        <h3>Mix Starters Menu $18 only</h3>
		                                        <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
		                                        <a href="reservations.html" class="btn_1">Reserve now</a>
		                                    </div>
		                                    <figure class="d-none d-lg-block"><img src="{{ asset('public/front/assets/img/banner.svg') }}" alt="" width="200" height="200" class="img-fluid"></figure>
		                                </div>
		                                <!-- /wrapper -->
		                            </div>
		                            <!-- /banner -->
		                            <div class="row magnific-gallery add_top_30">
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/1.jpg') }}" title="Soft shell crab" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/1.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Soft shell crab</h3><em>$14</em>
		                                        </div>
		                                        <p>Chicken, Potato, Salad</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/2.jpg') }}" title="Marinated Grilled" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/2.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Marinated Grilled Shrimp</h3><em>$11</em>
		                                        </div>
		                                        <p>Fresh Shrimp, Oive Oil, Tomato Sauce</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/3.jpg') }}" title="Avocado & Mango Salsa" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/3.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Avocado & Mango Salsa</h3><em>$16</em>
		                                        </div>
		                                        <p>Avocado, Mango, Tomatoes</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/4.jpg') }}" title="Baked Potato Skins" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/4.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Baked Potato Skins</h3><em>$10</em>
		                                        </div>
		                                        <p>Potatoes, Oil, Garlic</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/5.jpg') }}" title="Braised Pork Chops" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/5.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Braised Pork Chops</h3><em>$12</em>
		                                        </div>
		                                        <p>Pork chops, Olive oil, Garlic</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/6.jpg') }}" title="Cream of Asparagus" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/6.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Cream of Asparagus</h3><em>$14</em>
		                                        </div>
		                                        <p>Asparagus, Ootato, Celery, Onion</p>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- /row -->
		                        </div>
		                        <!-- /card-body -->
		                    </div>
		                </div>
		                <!-- /tab -->
		                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
		                    <div class="card-header" role="tab" id="heading-B">
		                        <h5>
		                            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
		                                Main Dishes
		                            </a>
		                        </h5>
		                    </div>
		                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
		                        <div class="card-body">
		                            <div class="banner lazy" data-bg="url({{ asset('public/front/assets/img/banner_bg.jpg') }})">
		                                <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
		                                    <div>
		                                        <small>Special Offer</small>
		                                        <h3>Burgher Menu $14 only</h3>
		                                        <p>Hamburgher, Chips, Mix Sausages, Beer, Muffin</p>
		                                        <a href="reservations.html" class="btn_1">Reserve now</a>
		                                    </div>
		                                    <figure class="d-none d-lg-block"><img src="{{ asset('public/front/assets/img/banner.svg') }}" alt="" width="200" height="200" class="img-fluid"></figure>
		                                </div>
		                                <!-- /wrapper -->
		                            </div>
		                            <!-- /banner -->
		                            <div class="row magnific-gallery add_top_30">
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/7.jpg')}}" title="Prime Rib" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/7.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Prime Rib</h3><em>$18</em>
		                                        </div>
		                                        <p>Rib, Rosemary, Black pepper</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/8.jpg') }}" title="Coconut Fried Chicken" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/8.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Coconut Fried Chicken</h3><em>$14</em>
		                                        </div>
		                                        <p>8 chicken pieces, Coconut milk</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/9.jpg') }}" title="Sriracha Beef Skewers" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/9.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Sriracha Beef Skewers</h3><em>$12</em>
		                                        </div>
		                                        <p>Beef, Garlic, Sesame oil</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/10.jpg') }}" title="Chicken with Garlic" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/10.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Chicken with Garlic</h3><em>$10</em>
		                                        </div>
		                                        <p>Chicken, Cherry tomatoes, Olive oil</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/11.jpg') }}" title="Soft shell crab" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/12.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Soft shell crab</h3><em>$14</em>
		                                        </div>
		                                        <p>Chicken, Potato, Salad</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/1.jpg') }}" title="Terrific Turkey Chili" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/1.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Terrific Turkey Chili</h3><em>$18</em>
		                                        </div>
		                                        <p>Turkey, Oregano, Tomato paste</p>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- /row -->
		                        </div>
		                    </div>
		                </div>
		                <!-- /tab -->
		                <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
		                    <div class="card-header" role="tab" id="heading-C">
		                        <h5>
		                            <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
		                                Desserts and Drinks
		                            </a>
		                        </h5>
		                    </div>
		                    <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-C">
		                        <div class="card-body">
		                            <div class="banner lazy" data-bg="url({{ asset('public/front/assets/img/banner_bg_3.jpg') }})">
		                                <div class="wrapper d-flex align-items-center justify-content-between opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
		                                    <div>
		                                        <small>Desserts Special Offer</small>
		                                        <h3>Mix Cakes $12 only</h3>
		                                        <p>Cheese cake, Muffin, Sweet bred</p>
		                                        <a href="reservations.html" class="btn_1">Reserve now</a>
		                                    </div>
		                                    <figure class="d-none d-lg-block"><img src="{{ asset('public/front/assets/img/banner.svg') }}" alt="" width="200" height="200" class="img-fluid"></figure>
		                                </div>
		                                <!-- /wrapper -->
		                            </div>
		                            <!-- /banner -->
		                            <div class="row magnific-gallery add_top_30">
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/3.jpg') }}" title="Summer Berry" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/3.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Summer Berry</h3><em>$8</em>
		                                        </div>
		                                        <p>Raspberries, Blackberries</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/4.jpg') }}" title="Coconut Tart" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/4.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Coconut Tart</h3><em>$10</em>
		                                        </div>
		                                        <p>Blueberries, Graham cracker crumbs</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/5.jpg') }}" title="Pumpkin Cookies" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/5.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Pumpkin Cookies</h3><em>$11</em>
		                                        </div>
		                                        <p>Pumpkin, Sugar, Butter</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/6.jpg') }}" title="Cookies Cream Cheese" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/7.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Cookies Cream Cheese</h3><em>$14</em>
		                                        </div>
		                                        <p>Sugar, Butter, Eggs</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/8.jpg') }}" title="Chocolate Cupcakes" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/8.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Chocolate Cupcakes</h3><em>$14</em>
		                                        </div>
		                                        <p>Chocolate, Eggs, Vanilla</p>
		                                    </div>
		                                </div>
		                                <div class="col-lg-6">
		                                    <div class="menu_item">
		                                        <figure>
		                                            <a href="{{ asset('public/front/assets/img/menu_items/large/9.jpg') }}" title="Chocolate Cupcakes" data-effect="mfp-zoom-in"><img src="{{ asset('public/front/assets/img/menu_items/large/9.jpg') }}" alt=""></a>
		                                        </figure>
		                                        <div class="menu_title">
		                                            <h3>Chocolate Cupcakes</h3><em>$14</em>
		                                        </div>
		                                        <p>Chocolate, Eggs, Vanilla</p>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- /row -->
		                        </div>
		                    </div>
		                </div>
		                <!-- /tab -->
		            </div>
		            <!-- /tab-content -->
		        </div>
		        <!-- /tabs_menu-->
		        <p class="text-center"><a href="#0" class="btn_1 outline" data-cue="zoomIn">Download Menu</a></p>
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="call_section lazy" data-bg="url({{ asset('public/front/assets/img/bg_call_section.jpg') }})">
		    <div class="container clearfix">
		    	<div class="row justify-content-center">
			        <div class="col-lg-5 col-md-6 text-center">
			            <div class="box_1" data-cue="slideInUp">
			                <h2>Celebrate<span>a Special Event with us!</span></h2>
			                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
			                <a href="contacts.html" class="btn_1 mt-3">Contact us</a>
			            </div>
			        </div>
			    </div>
    		</div>
    	</div>
   		<!--/call_section-->

		<div class="pattern_2">
		    <div class="container margin_120_100 pb-0">
		        <div class="row justify-content-center">
		        	<div class="col-lg-6 text-center d-none d-lg-block" data-cue="slideInUp">
		                <img src="{{ asset('public/front/assets/img/chef.png') }}" width="420" height="770" alt="" class="img-fluid">
		            </div>
		            <div class="col-lg-6 col-md-8" data-cue="slideInUp">
		                <div class="main_title">
		                    <span><em></em></span>
		                    <h2>Reserve a table</h2>
		                    <p>or Call us at 0344 32423453</p>
		                </div>
		                <div id="wizard_container">
		                    <form id="wrapped" method="POST">
		                        <input id="website" name="website" type="text" value="">
		                        <!-- Leave for security protection, read docs for details -->
		                        <div id="middle-wizard">
		                            <div class="step">
		                                <h3 class="main_question"><strong>1/3</strong> Please Select a date</h3>
		                                <div class="form-group">
		                                    <input type="hidden" name="datepicker_field" id="datepicker_field" class="required">
		                                </div>
		                                <div id="DatePicker"></div>
		                            </div>
		                            <!-- /step-->
		                            <div class="step">
		                                <h3 class="main_question"><strong>2/3</strong> Select time and guests</h3>
		                                <div class="step_wrapper">
		                                    <h4>Time</h4>
		                                    <div class="radio_select add_bottom_15">
		                                        <ul>
		                                            <li>
		                                                <input type="radio" id="time_1" name="time" value="12.00am" class="required">
		                                                <label for="time_1">12.00</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_2" name="time" value="12.30pm" class="required">
		                                                <label for="time_2">12.30</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_3" name="time" value="1.00pm" class="required">
		                                                <label for="time_3">1.00</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_4" name="time" value="1.30pm" class="required">
		                                                <label for="time_4">1.30</label>
		                                            </li>
		                                             <li>
		                                                <input type="radio" id="time_5" name="time" value="08.00pm" class="required">
		                                                <label for="time_5">8.00</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_6" name="time" value="08.30pm" class="required">
		                                                <label for="time_6">8.30</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_7" name="time" value="09.00pm" class="required">
		                                                <label for="time_7">9.00</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_8" name="time" value="09.30pm" class="required">
		                                                <label for="time_8">9.30</label>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                    <!-- /time_select -->
		                                </div>
		                                <!-- /step_wrapper -->
		                                <div class="step_wrapper">
		                                    <h4>How many people?</h4>
		                                    <div class="radio_select">
		                                        <ul>
		                                            <li>
		                                                <input type="radio" id="people_1" name="people" value="1" class="required">
		                                                <label for="people_1">1</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="people_2" name="people" value="2" class="required">
		                                                <label for="people_2">2</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="people_3" name="people" value="3" class="required">
		                                                <label for="people_3">3</label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="people_4" name="people" value="4" class="required">
		                                                <label for="people_4">4</label>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                    <!-- /people_select -->
		                                </div>
		                                <!-- /step_wrapper -->
		                            </div>
		                            <!-- /step-->
		                            <div class="submit step">
		                                <h3 class="main_question"><strong>3/3</strong> Please fill with your details</h3>
		                                <div class="form-group">
		                                    <input type="text" name="name_reserve" class="form-control required" placeholder="First and Last Name">
		                                </div>
		                                <div class="row">
		                                    <div class="col-lg-6">
		                                        <div class="form-group">
		                                    <input type="email" name="email_reserve" class="form-control required" placeholder="Your Email">
		                                </div>
		                                    </div>
		                                    <div class="col-lg-6">
		                                        <div class="form-group">
		                                    <input type="text" name="telephone_reserve" class="form-control required" placeholder="Your Telephone">
		                                </div>
		                                    </div>
		                                </div>
		                         
		                                <div class="form-group">
		                                    <textarea class="form-control" name="opt_message_reserve" placeholder="Please provide any additional info"></textarea>
		                                </div>
		                                <div class="form-group terms">
		                                    <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a>
		                                        <input type="checkbox" name="terms" value="Yes" class="required">
		                                        <span class="checkmark"></span>
		                                    </label>
		                                </div>
		                            </div>
		                            <!-- /step-->
		                        </div>
		                        <!-- /middle-wizard -->
		                        <div id="bottom-wizard">
		                            <button type="button" name="backward" class="backward">Prev</button>
		                            <button type="button" name="forward" class="forward">Next</button>
		                            <button type="submit" name="process" class="submit">Submit</button>
		                        </div>
		                        <!-- /bottom-wizard -->
		                    </form>
		                </div>
		                <!-- /Wizard container -->
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /pattern_2 -->
	</main>
	<!-- /main -->
@include('front.shared.viw_footer')	
<!-- js script -->
<script src="{{ asset('public/front/assets/js/cart.js')}}"></script>