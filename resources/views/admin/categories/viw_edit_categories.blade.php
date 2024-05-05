@include('admin.shared.viw_header')	
      <div class="container-fluid page-body-wrapper">
        @include('admin.shared.viw_sidebar')	
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
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
                    <h4 class="card-title">Edit Categorie</h4>
                    <div class="alert error_msg"  style="display:none"></div>
                    <form action="{{ route('admin/categories/update') }}" method="post" id="EditCategoryForm">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="cat_id" value="<?php echo isset($category_info->id)?$category_info->id:''?>">
                            <label for="exampleInputEmail1" class="form-label">Categorie Name</label>
                            <input type="text" class="form-control" name="cat_name" id="cat_name" value="<?php echo isset($category_info->name)?$category_info->name:''?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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
<script src="{{ asset('public/admin/assets/js/categories.js')}}"></script>
