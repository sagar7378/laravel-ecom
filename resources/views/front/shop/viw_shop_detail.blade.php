@include('front.shared.viw_header')	
 <!-- !!- ===================================== Main Start ======================== -!! -->
   <main id="main">

<!-- !!- ===================================== Header Start ======================== -!! -->
<div class="inner-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-text">
                    <h4> Single-Shop </h4>
                    <ul class="inner-list">
                        <li class="inner-item"> Home <i class="fa-solid fa-chevron-right"></i> </li>
                        <li class="inner-item"> Single-Shop </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- !!- ===================================== Header Start ======================== -!! -->

<!-- !!- ===================================== Content Container Start Here  ======================== -!! -->
<div class="content-container">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 product-details">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/app/public/products/images/' . $product_details->image) }}" />
                        </div>
                        <?php foreach($product_gallery as $gallery){ ?>
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/app/public/products/images/' . $gallery->gallery_image) }}" />
                            </div>
                        <?php }?>     
                    </div>
                    <div class="swiper-button-next"> <i class="fa-solid fa-arrow-right"></i> </div>
                    <div class="swiper-button-prev"> <i class="fa-solid fa-arrow-left"></i> </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper mt-2">
                    <?php foreach($product_gallery as $gallery){ ?>
                            <div class="swiper-slide type-2">
                                <img src="{{ asset('storage/app/public/products/images/' . $gallery->gallery_image) }}" />
                            </div>
                        <?php }?>  
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-5">
            <form action="{{ route('admin/foods/add-to-cart') }}" method="post" id="CartForm_1" >
                <div class="product-details-text">
                    <div class="pdt-name"> <h4> <?php echo $product_details->name;?></h4> <span>  $ <?php echo $product_details->price;?> </span> </div>
                    <div class="pdt-star"> <img src="include/images/star-icon.png" alt=""/> <span> (22) </span></div>
                    <p> 
                        <?php echo $product_details->short_descr;?>
                    </p>
                    <div class="pdt-color"> 
                        <span> Color: </span> 
                        <div class="aa" style="background-color:#f99a29;"> </div> 
                        <div class="aa" style="background-color:#07daf2;"> </div> 
                        <div class="aa" style="background-color:#c63dff;"> </div> 
                        <div class="aa" style="background-color:#82b602;"> </div> 
                    </div>
                    <div class="pdt-input">
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button">-</button>
                            <input type="text" name="qty" value="0" required class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button">+</button>
                        </div>
                    </div>
                    <div class="pdt-dd"> <strong> Categories:  </strong> All, Featured, Medical, Covid-19 Mask </div>
                    <div class="pdt-dd"> <strong> Tags: </strong>  Black,Brown,Red,Shoes,$0.00 - $150.00 </div>
                    <div class="pdt-share"> 
                        <strong> Share: </strong> 
                        <ul class="share-icon-list ms-2">
                            <li class="share-icon-item "> <i class="fa-brands fa-facebook-f"></i> </li>
                            <li class="share-icon-item"> <i class="fa-brands fa-instagram"></i> </li>
                            <li class="share-icon-item"> <i class="fa-brands fa-twitter"></i> </li>
                            <li class="share-icon-item"> <i class="fa-brands fa-linkedin-in"></i> </li>
                        </ul>
                    </div>
                    <div class="pdt-btn">
                        <input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
						<input type="hidden" id="food_id" name="food_id" value="<?php echo isset($product_details->id)?$product_details->id:'';?>">
						<input type="hidden" id="food_name" name="food_name" value="<?php echo isset($product_details->name)?$product_details->name:'';?>">
						<input type="hidden" id="food_price" name="food_price" value="<?php echo isset($product_details->price)?$product_details->price:'';?>">
						<input type="hidden" id="food_image" name="food_image" value="<?php echo isset($product_details->image)?$product_details->image:'';?>">
                        <a href="#!" class=" cart_icon_trigger"  id="cart_button_1" data-product-id="1"> Add to Cart </a>
                        <span id="cart_message_1" style="display:none;background: green;color: white;padding: 5px;"> Product Added !</span>

                    </div>
                </div>
            </div>
            </form>	   

        </div>
    </div>
</div>
<!-- !!- ===================================== Content Container End Here  ======================== -!! -->

<!-- !!- ===================================== Content Container Start Here  ======================== -!! -->
<div class="content-container" style="background-color: #f2f5f7;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active ms-0" id="nav-home-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                            aria-selected="true">Description</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Additional Info </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Reviews</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-lable" type="button" role="tab" aria-controls="nav-lable"
                            aria-selected="false">Video</button>
                    </div>
                </nav>
                <div class="tab-content bg-light" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <div class="tab-inner-content">
                            <h4> Viverra a Consectetur </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, totam maxime
                                nostrum a nam esse mollitia corporis voluptas deserunt, ea excepturi enim hic
                                ratione perferendis aliquid necessitatibus. Veritatis, autem voluptatum! Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. In nostrum nobis repellendus
                                quasi praesentium cumque, facere, voluptatem aspernatur quaerat, explicabo
                                suscipit esse magni qui nihil eius dolorem possimus sapiente ipsum! </p>
                            <h4> More Details </h4>
                            <ul class="tab-list">
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="tab-inner-content">
                            <h4> Viverra a Consectetur </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, totam maxime
                                nostrum a nam esse mollitia corporis voluptas deserunt, ea excepturi enim hic
                                ratione perferendis aliquid necessitatibus. Veritatis, autem voluptatum! Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. In nostrum nobis repellendus
                                quasi praesentium cumque, facere, voluptatem aspernatur quaerat, explicabo
                                suscipit esse magni qui nihil eius dolorem possimus sapiente ipsum! </p>
                            <h4> More Details </h4>
                            <ul class="tab-list">
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                        aria-labelledby="nav-contact-tab">
                        <div class="tab-inner-content">
                            <h4> Viverra a Consectetur </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, totam maxime
                                nostrum a nam esse mollitia corporis voluptas deserunt, ea excepturi enim hic
                                ratione perferendis aliquid necessitatibus. Veritatis, autem voluptatum! Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. In nostrum nobis repellendus
                                quasi praesentium cumque, facere, voluptatem aspernatur quaerat, explicabo
                                suscipit esse magni qui nihil eius dolorem possimus sapiente ipsum! </p>
                            <h4> More Details </h4>
                            <ul class="tab-list">
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-lable" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="tab-inner-content">
                            <h4> Viverra a Consectetur </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, totam maxime
                                nostrum a nam esse mollitia corporis voluptas deserunt, ea excepturi enim hic
                                ratione perferendis aliquid necessitatibus. Veritatis, autem voluptatum! Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. In nostrum nobis repellendus
                                quasi praesentium cumque, facere, voluptatem aspernatur quaerat, explicabo
                                suscipit esse magni qui nihil eius dolorem possimus sapiente ipsum! </p>
                            <h4> More Details </h4>
                            <ul class="tab-list">
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li class="tab-item"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- !!- ===================================== Content Container End Here  ======================== -!! -->

<!-- !!- ===================================== Content Container Start Here  ======================== -!! -->
<div class="content-container pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-heading">
                    <h4> Featured Products </h4>
                </div>
                <div class="swiper product-slider">
                    <ul class="swiper-wrapper pppp-list">
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                        <li class="scl-item swiper-slide">
                            <div class="scl-box">
                                <div class="scl-img">
                                    <span> Sale </span>
                                    <img src="include/images/shop-img.png" alt="" />
                                    <ul class="sll-icon-list">
                                        <li class="sll-icon-item"> <i class="fa-solid fa-cart-shopping"></i>
                                        </li>
                                        <li class="sll-icon-item"> <i class="fa-regular fa-heart"></i> </li>
                                        <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="scl-text">
                                    <h4> Antiseptic Spray </h4>
                                    <p> $38.00 <span> $45.00 </span> </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button-next" > <i class="fa-solid fa-arrow-right"></i> </div>
                    <div class="swiper-button-prev"> <i class="fa-solid fa-arrow-left"></i> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- !!- ===================================== Content Container End Here  ======================== -!! -->

<!-- !!- ===================================== Log In Start ======================== -!! -->
<div class="content-container ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                                width="250" alt="" />
                        </div>
                        <div class="slide">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                                width="250" alt="" />
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
