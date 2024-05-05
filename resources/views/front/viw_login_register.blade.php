@include('front.shared.viw_header')	
    <!-- !!- ===================================== Main Start ======================== -!! -->
    <main id="main">
        <!-- !!- ===================================== Header Start ======================== -!! -->
         <div class="inner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-text">
                            <h4> Login </h4>
                            <ul class="inner-list">
                                <li class="inner-item"> Home <i class="fa-solid fa-chevron-right"></i> </li>
                                <li class="inner-item"> Login </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- !!- ===================================== Header Start ======================== -!! -->

        <!-- !!- ===================================== Content-container Start ======================== -!! -->
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form-content">
                            <div class="lfc-left">
                                <div class="lfc-left-box">
                                    <div class="ir-heading">
                                        <h4> Log In </h4>
                                        <p>  Please login using account details bellow </p> 
                                    </div> 
                                    <div id="login_error_msg" class="alert"></div>
                                    <form action="{{ $login_action }}" method="post" id="LoginForm">
                                    @csrf <!-- Include CSRF token -->                                        
                                    <div class="fr-input-box">
                                            <input type="text" class="form-control" id="l_email" name="l_email" placeholder="Your Email*">
                                        </div>
                                        <div class="fr-input-box">
                                            <input type="text" class="form-control" id="l_password" name="l_password" placeholder="Your Password*">
                                            <!-- <div id="emailHelp" class="form-text mt-2">Forget Your Password ?</div> -->
                                        </div>
                                        <div class="fr-input-box-2">
                                        <button type="submit" class="fr-btn">  Sign In </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="lfc-right">
                                 <div class="lfc-right-box">
                                    <div class="ir-heading">
                                        <h4> Register  </h4>
                                        <p>  Don,t have an account? Register </p> 
                                    </div> 
                                    <div id="error_msg" class="alert"></div>
                                    <form action="{{ $register_action }}" method="post" id="RegisterForm">
                                    @csrf <!-- Include CSRF token -->
                                        <div class="fr-input-box">
                                            <input type="text" class="form-control" id="r_email" name="r_email" placeholder="Email Address*">
                                        </div>
                                         <div class="fr-input-box">
                                            <input type="text" class="form-control" id="r_password" name="r_password" placeholder="Create Password*">
                                         </div>
                                         <div class="fr-input-box">
                                           <input type="text" class="form-control" id="r_name" name="r_name" placeholder="Name*">
                                         </div>
                                         <div class="fr-input-box">
                                            <input type="text" class="form-control" id="r_mobile" name="r_mobile" placeholder="Phone Number*">
                                         </div>
                                         <div class="fr-input-box-2">
                                           <button type="submit" class="fr-btn"> Create Account </button>
                                         </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <!-- !!- ===================================== Content-container End ======================== -!! -->

        <!-- !!- ===================================== Log In Start ======================== -!! -->
        <div class="content-container">
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
<script src="{{ asset('public/front/assets/js/login.js') }}"></script>
