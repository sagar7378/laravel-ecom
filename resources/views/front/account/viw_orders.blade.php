@include('front.shared.viw_header')	
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
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Id</th>
      <th scope="col">Image</th>
      <th scope="col">Food Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <?php $count = 1;foreach($orders_info as $orders){?>
   <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo isset($orders->razorpay_order_id)?$orders->razorpay_order_id:'-';?></td>
        <td><img src="{{ asset('storage/app/public/products/images/' . $orders->image) }}" alt="" width="50px" height="50px" ></td>
        <td><?php echo isset($orders->name)?$orders->name:'-';?></td>
        <td><?php echo isset($orders->quantity)?$orders->quantity:'-';?></td>
        <td><?php echo isset($orders->subtotal)?$orders->subtotal:'-';?></td>
   </tr>
   <?php }?>
  </tbody>
</table>
</div>
@include('front.shared.viw_footer')	
