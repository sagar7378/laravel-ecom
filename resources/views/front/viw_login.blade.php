@include('front.shared.viw_header')	
<main class="pattern_2">
		<div class="container margin_60_40">
		    <div class="row justify-content-center">
		        <div class="col-xl-6 col-lg-8">
		        	<div class="box_booking_2 style_2">
					    <div class="head">
					        <div class="title">
					            <h3>Login</h3>
					        </div>
					    </div>
					    <!-- /head -->
						<div id="error_msg"></div>
					    <div class="main">
						<form action="<?php echo $action;?>" method="POST" id="LoginForm">	
						@csrf
					        <div class="row">
					            <div class="col-md-12">
					                <div class="form-group">
					                    <label>Email Address</label>
					                    <input class="form-control" name="email" id="email" placeholder="Email Address">
					                </div>
					            </div>
					            <div class="col-md-12">
					                <div class="form-group">
					                    <label>Password</label>
					                    <input class="form-control" name="password" id="password" placeholder="Password">
					                </div>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-md-12 text-center">
					                <div class="form-group ">
					                    <input type="submit" class="form-control bg-primary text-light"  name="submit" value="Login">
					                </div>
					            </div>
								<div class="col-md-12 text-center">
					                <div class="form-group ">
					                    <a href="{{ route('customer-register') }}" class="form-control bg-success text-light">Register</a>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
					
		        </div>

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->	
	</main>
@include('front.shared.viw_footer')	
<script src="{{ asset('public/front/assets/js/login.js') }}"></script>
