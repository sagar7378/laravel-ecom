@include('front.shared.viw_header')	
    <!-- !!- ===================================== Main Start ======================== -!! -->
    <style>
        .pagination .hidden {
            display:none;
        }
        .pagination a:hover{
            outline: none;
            color: blue;
            text-decoration: none;
        }
    </style>
    <main id="main">

        <!-- !!- ===================================== Header Start ======================== -!! -->
         <div class="inner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-text">
                            <h4> Shop </h4>
                            <ul class="inner-list">
                                <li class="inner-item"> Home <i class="fa-solid fa-chevron-right"></i> </li>
                                <li class="inner-item"> Shop </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- !!- ===================================== Header Start ======================== -!! -->

        <!-- !!- ===================================== Content-container Start Here ======================== -!! -->
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       
                        <div class="shopping-card-heading">
                            <div class="sch-left">
                                <div class="sl-text">
                                    <h4> Medical Equipment Products </h4>
                                    <p> About 9,620 results (0.62 seconds) </p>
                                </div>
                            </div>
                            <div class="sch-right">
                                <ul class="sr-list">
                                    <!-- <li class="sr-item">
                                        <div class="number-list">
                                            <h4> Per Page</h4>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>13</option>
                                                <option value="1">14</option>
                                                <option value="2">15</option>
                                                <option value="3">16</option>
                                            </select>
                                        </div>
                                    </li> -->
                                    <li class="sr-item">
                                        <div class="teco-list">
                                            <h4> Sort By:</h4>
                                            
                                            <select class="form-select" id="price_filter" aria-label="Default select example">
                                                <option selected>Select</option>
                                                <option value="low">Low To High</option>
                                                <option value="high">High To Low</option>
                                            </select>
                                        </div>
                                    </li>
                                    <!-- <li class="sr-item">
                                        <a href="#"> <i class="fa-solid fa-bars"> </i> </a>
                                    </li> -->
                                    <li class="sr-item">
                                        <a href="#"> <i class="fa-solid fa-list"> </i> </a>
                                    </li>
                                    <li class="sr-item">
                                        <div class="sr-search">
                                            <input type="text" id="product_name" name="product_name" placeholder="Search">
                                            <button> <i class="fa-solid fa-magnifying-glass"></i> </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="shopping-card-lower">
                            <ul class="scl-list products_filter">
                                @include('front/shop/viw_ajax_shop_filter')	
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- !!- ===================================== Content-container End Here ======================== -!! -->

        <!-- !!- ===================================== Pagination Start Here ======================== -!! -->
        <div class="content-container pt-0">
            <div class="container">
                <div class="rwo">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            {{ $products->links() }} <!-- Display pagination links -->
                              
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- !!- ===================================== Pegination End Here ======================== -!! -->
        

        <!-- !!- ===================================== Log In Start ======================== -!! -->
        <div class="content-container ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider">
                            <div class="slide-track">
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                                </div>
                                <div class="slide">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
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
    <script src="{{ asset('public/front/assets/js/cart.js')}}"></script>


