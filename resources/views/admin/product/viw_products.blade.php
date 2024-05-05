@include('admin.shared.viw_header')	
      <div class="container-fluid page-body-wrapper">
        @include('admin.shared.viw_sidebar')	
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"><a href="{{ route('admin/products/add-product') }}" class="btn btn-primary">Add Products</a></h3>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">dsdf</li>
                </ol>
              </nav> -->
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product List</h4>
                    <div class="alert error_msg"  style="display:none"></div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Category</th>
                          <th>Food Name</th>
                          <th>price</th>
                          <th>Image</th>
                          <th colspan=2>Action</th>
                        </tr>
                      </thead>
                      <tbody id="products_data">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          @include('admin.shared.viw_footer')	
        </div>

<!-- js script -->
<script src="{{ asset('public/admin/assets/js/product.js')}}"></script>
