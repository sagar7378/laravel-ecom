      @include('admin.shared.viw_header')	
      <div class="container-fluid page-body-wrapper">
        @include('admin.shared.viw_sidebar')	
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModel">Add Categories</a></h3>
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
                    <h4 class="card-title">Categories List</h4>
                    <div class="alert error_msg"  style="display:none"></div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Categorie name</th>
                          <th>Status</th>
                          <th>Date/Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="categories_data">
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

<!-- Categories Modal -->
<div class="modal fade" id="categoryModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Categorie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="alert error_msg" style="display:none"></div>
        <form action="{{ route('admin/categories/insert') }}" method="post" id="CategoryForm">
        @csrf
            <div class="mb-3">
                <label for="" class="form-label">Categorie Name</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" >
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="submit_btn" >Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- js script -->
<script src="{{ asset('public/admin/assets/js/categories.js')}}"></script>
