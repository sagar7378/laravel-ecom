@include('admin.shared.viw_header')	
      <div class="container-fluid page-body-wrapper">
        @include('admin.shared.viw_sidebar')	
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <h4 class="card-title">Add Product</h4>
                  <!-- <li class="breadcrumb-i col-lg-4tem active" aria-current="page">dsdf</li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="alert error_msg"  style="display:none"></div>
                    <form action="{{ route('admin/products/insert-product') }}" method="post" id="ProductForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-4">
                                <label for="form-control" class="form-label">Product Categorie</label>
                                <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                                    <option selected value="">Select Categorie</option>
                                    <?php foreach($categories as $info){ ?>
                                        <option  value="<?php echo isset($info->id)?$info->id:''?>"><?php echo isset($info->name)?$info->name:''?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3 col-lg-4">
                                <label for="" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" value="">
                            </div>

                            <div class="mb-3 col-lg-4">
                                <label for="" class="form-label">Product Price</label>
                                <input type="text" class="form-control" name="price" id="price" value="">
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-lg-6">
                                <label for="" class="form-label">Size</label>
                                <input type="text" class="form-control" name="size" id="size" value="">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="" class="form-label">Short Description</label>
                                <textarea  class="form-control" name="short_descr" id="short_descr" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-lg-12">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" name="descr" id="descr" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="image" >
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="" class="form-label">Gallery Image</label>
                                <input type="file" class="form-control" name="gallery_image[]" id="gallery_image" multiple>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
                    </form>
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
