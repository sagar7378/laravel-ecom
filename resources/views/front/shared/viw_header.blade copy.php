<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Foores - Single Restaurant Version">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Ansonika">
    <title>Foores - Single Restaurant Version</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('public/front/assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/front/assets/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('public/front/assets/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('public/front/assets/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('public/front/assets/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <!-- BASE CSS -->
    <link href="{{ asset('public/front/assets/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/assets/css/shop.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('public/front/assets/css/flex_slider.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/assets/css/wizard.css') }}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <!-- <link href="{{ asset('public/front/assets/css/custom_style.css') }}" rel="stylesheet"> -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
    <!-- /Page Preload -->
	
	<header class="header clearfix element_to_stick">
		<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
		<div class="container-fluid">
		<div id="logo">
			<a href="{{ route('main') }}">
				<img src="{{ asset('public/front/assets/img/logo.svg') }}" width="140" height="35" alt="" class="logo_normal">
				<img src="{{ asset('public/front/assets/img/logo_sticky.svg') }}" width="140" height="35" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#0" class="search-overlay-menu-btn"></a></li>
			<li>
				<div class="dropdown dropdown-cart">
				    <a href="#" class="cart_bt"><strong class="food_count">0</strong></a>
				    <div class="dropdown-menu" id="cart-container">
					<ul class="cart_details">
					</ul>
					<div class="total_drop">
						<div class="clearfix add_bottom_15"><strong>Total</strong><span class="total">Rs 0</span></div>
						<a href="{{ route('front/foods/cart-details') }}" class="btn_1 outline">View Cart</a><a href="{{ route('front/foods/checkout-form') }}" class="btn_1">Checkout</a>
					</div>
				    </div>
				</div>
				<!-- /dropdown-cart-->
			</li>
		</ul>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
		    <div id="header_menu">
		        <a href="#0" class="open_close">
		            <i class="icon_close"></i><span>Menu</span>
		        </a>
		        <a href=""><img src="{{ asset('public/front/assets/img/logo.svg') }}" width="140" height="35" alt=""></a>
		    </div>
		    <ul>
		        <!-- <li class="submenu">
		            <a href="#0" class="show-submenu">Home</a>
		            <ul>
		                <li><a href="index.html">Slider 1</a></li>
		                <li><a href="index-2.html">Slider 2</a></li>
		                <li><a href="index-6.html">Slider 3</a></li>
		                <li><a href="index-3.html">Video Background</a></li>
		                <li><a href="index-5.html">Text Rotator</a></li>
		                <li><a href="index-4.html">GDPR Cookie Bar EU Law</a></li>
		            </ul>
		        </li>
		        <li class="submenu">
		            <a href="#0" class="show-submenu">Menu</a>
		            <ul>
		                <li><a href="menu-1.html">Menu 2 Column</a></li>
		                <li><a href="menu-2.html">Menu Add To Cart</a></li>
		                <li><a href="menu-3.html">Menu With Tabs</a></li>
		                <li><a href="menu-4.html">Menu Grid</a></li>
		                <li><a href="menu-of-the-day.html">Menu of the Day <span class="badge badge-danger">HOT</span></a></li>
		                <li><a href="order-food.html">Order Food</a></li>
		                <li><a href="confirm.html">Confirm</a></li>
		            </ul>
		        </li>
		        <li class="submenu">
		            <!-- <a href="#0" class="show-submenu">Other Pages</a> -->
		            <ul>
		            	<li><a href="about.html">About</a></li>
		                <li><a href="blog.html">Blog</a></li>
		                <li><a href="gallery.html">Gallery</a></li>
		                <li><a href="gallery-2.html">Gallery Masonry</a></li>
		                <li><a href="modal-advertise.html">Modal Advertise</a></li>
		                <li><a href="modal-newsletter.html">Modal Newsletter</a></li>
		                <li><a href="404.html">404 Error page</a></li>
		                <li><a href="coming-soon.html" target="_blank">Coming Soon</a></li>
		                <li><a href="leave-review.html">Leave a review</a></li>
		                <li><a href="contacts.html">Contacts</a></li>
		                <li><a href="icon-pack-1.html">Icon Pack 1</a></li>
		                <li><a href="icon-pack-2.html">Icon Pack 2</a></li>
		            </ul>
		        <!-- </li>
		         <li class="submenu">
		            <a href="#0" class="show-submenu">Shop</a>
		            <ul>
		                <li><a href="shop-1.html">Shop Grid</a></li>
		                <li><a href="shop-2.html">Shop Rows</a></li>
		                <li><a href="shop-single.html">Product Single</a></li>
		                <li><a href="shop-cart.html">Cart Page</a></li>
		                <li><a href="shop-checkout.html">Checkout</a></li>
		            </ul>
		        </li>  -->
		        <!-- <li><a href="reservations.html" class="btn_top">Reservations</a></li> -->
				<?php if(session()->has('user_name')){?>
					<li><a href="{{ route('customer-details') }}" class="btn_top">Hello {{ session('user_name') }} </a></li>
				<?php
				}else {?>
					<li><a href="{{ route('customer-login') }}" class="btn_top">Login</a></li>
				<?php }?>
		    </ul>
		</nav>
	</div>
	<!-- Search -->
	<div class="search-overlay-menu">
	    <span class="search-overlay-close"><span class="closebt"><i class="icon_close"></i></span></span>
	    <form role="search" id="searchform" method="get">
	        <input value="" name="q" type="search" placeholder="Search...">
	        <button type="submit"><i class="icon_search"></i></button>
	    </form>
	</div><!-- End Search -->
	</header>
	<!-- /header -->