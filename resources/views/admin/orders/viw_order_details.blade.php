@include('admin.shared.viw_header')	
      <div class="container-fluid page-body-wrapper">
        @include('admin.shared.viw_sidebar')	
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <!-- <h3 class="page-title"><a href="{{ route('admin/products/add-product') }}" class="btn btn-primary">Add Products</a></h3> -->
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">dsdf</li>
                </ol>
              </nav> -->
            </div>
            <section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;"><?php echo $customer_details[0]->name;?></span>!</h5>
          </div>
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
            </div>
            <?php foreach($order_item_detail as $item_info){?>
                <div class="card shadow-0 border mb-4">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('storage/app/public/products/images/' . $item_info->image) }}"
                        class="img-fluid" alt="Phone">
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0"><?php echo $item_info->name;?></p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small"><?php echo $item_info->size;?></p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small">Qty: <?php echo $item_info->quantity;?></p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small"><?php echo $item_info->price;?></p>
                    </div>
                    <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                        <p class="text-muted mb-0 small"><?php echo $item_info->subtotal;?></p>
                    </div>
                    </div>
                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                    <div class="row d-flex align-items-center">
                    <div class="col-md-2">
                        <p class="text-muted mb-0 small">Track Order</p>
                    </div>
                    <div class="col-md-10">
                        <div class="progress" style="height: 6px; border-radius: 16px;">
                        <div class="progress-bar" role="progressbar"
                            style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-around mb-1">
                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                        <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            <?php }?>
            <!-- <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
                      class="img-fluid" alt="Phone">
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0">iPad</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Pink rose</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Capacity: 32GB</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Qty: 1</p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">$399</p>
                  </div>
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text-muted mb-0 small">Track Order</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div class="progress-bar" role="progressbar"
                        style="width: 20%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="20"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="d-flex justify-content-between pt-2">
              <p class="fw-bold mb-0">Order Details</p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> <?php echo $order_item_detail[0]->subtotal;?></p>
            </div>

            <div class="d-flex justify-content-between pt-2">
              <p class="text-muted mb-0">Razorpay Order Id : <?php echo $customer_details[0]->razorpay_order_id;?></p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
            </div>

            <div class="d-flex justify-content-between">
              <p class="text-muted mb-0">Order Date :<?php echo $customer_details[0]->order_date;?></p>
              <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
            </div>
          </div>
          <div class="card-footer border-0 px-4 py-5"
            style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
              paid: <span class="h2 mb-0 ms-2">$1040</span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


          </div>
          <!-- content-wrapper ends -->
          @include('admin.shared.viw_footer')	
        </div>

<!-- js script -->
<script src="{{ asset('public/admin/assets/js/orders.js')}}"></script>
