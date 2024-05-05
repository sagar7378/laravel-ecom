@include('front.shared.viw_header')	
<section class="inner-banner pt-190  pb-190">
	<div class="container">
		<div class="row">
			<div class="smbanner-text d-flex justify-content-center align-items-center flex-column  text-center">
				<h2 class="inner-banner-title text-white">My Account</h2>
				<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
					<ol class="breadcrumb mb-0">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">My Account</li>
						<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('logout') }}">Logout</a></li>
					</ol>
				</nav>
			</div>
		</div>
        <div class="row">
           <div class="col-lg-4 bg-primary text-light">
           <a href="#"><h2>Profile</h2></a>
            </div>
            <div class="col-lg-4 bg-warning text-light">
                <a href="{{ route('front/orders') }}"><h2>Orders</h2></a>
            </div>
            <div class="col-lg-4 bg-success text-light">
                <a href=""><h2>Favroite Orders</h2></a>
            </div>
        </div>
	</div>
</section>
@include('front.shared.viw_footer')	
