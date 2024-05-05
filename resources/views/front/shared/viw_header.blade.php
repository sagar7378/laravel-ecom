<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  Tasam | Home</title>
    <link href="{{ asset('public/front/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/front/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/db98e7ed59.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- !!- ===================================== Header Start ======================== -!! -->
    <header id="header">
        <div class="cart-label">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="cl-list">
                            <li class="cl-item"> <img src="{{ asset('public/front/assets/images/car-icon.svg')}}" alt=""/> Hello {{ session('user_name') }} </li>
                            @if(!empty(session('user_name')))
                            <li class="cl-item"> <a href="{{ route('login-register') }}"><img src="{{ asset('public/front/assets/images/person-icon.svg')}}" alt=""/> My Account</a> </li>
                                <!-- If user is logged in -->
                                <li class="cl-item"> <a href="{{ route('logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                    </svg> Logout</a> 
                                </li>

                            @else
                                <!-- If user is not logged in -->
                                <li class="cl-item"> <a href="{{ route('login-register') }}"><img src="{{ asset('public/front/assets/images/person-icon.svg')}}" alt=""/> Login/Register</a> </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-inco">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-inner">
                            <div class="logo"> 
                                <a href="{{ route('main') }}"> <img src="{{ asset('public/front/assets/images/logo.png')}}" alt=""/> </a> 
                            </div>
                            <div class="call-inco"> 
                                <img src="{{ asset('public/front/assets/images/call-icon.svg')}}" alt=""/> 
                                <h4> Phone Order </h4>
                                <p> +01 2222 3456 88 </p>
                            </div>
                            <div class="search-box">
                                <img src="{{ asset('public/front/assets/images/search-icon.svg')}}" alt=""/>
                                <input type="text" placeholder="Search products…">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <a href="#!"> Search </a>
                            </div>    
                            <div class="call-inco"> 
                                <img src="{{ asset('public/front/assets/images/descount-icon.svg')}}" alt=""/> 
                                <h4> Phone Order </h4>
                                <p> +01 2222 3456 88 </p>
                            </div>
                            <div class="inco-tag">
                                <ul class="inco-tag-list">
                                @if(!empty(session('user_name')))
                                    <li class="inco-tag-item"> <img src="{{ asset('public/front/assets/images/heart-icon.png')}}" alt=""/> </li>  
                                @endif   
                                    <a href="{{ route('front/foods/cart-details') }}"><li class="inco-tag-item "> <img src="{{ asset('public/front/assets/images/delete-icon.png')}}" alt=""/>  <span class="food_count"> 0 </span><span class="total"> $0.00</span> </li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-xl">
            <div class="container container1">
                <div class="nav-inside d-flex align-items-center ">
                    <div class="navbar-brand">
                        <img class="menu-arrow" src="{{ asset('public/front/assets/images/menu-icon.svg')}}" alt=""/> 
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Departments</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <img class="down-arrow" src="{{ asset('public/front/assets/images/down-arrow.svg')}}" alt=""/>
                    </div>
                    <button class="navbar-toggler collapsed d-flex align-items-center justify-content-start d-xl-none"
                        type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="mainNav">
                        <div class="navbar-inside">
                            <ul class="navbar-nav">
                                <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle show data" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">About Us </a>
                                    <ul class="dropdown-menu show" data-bs-popper="static">
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">About Us</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaStdV.html">Canada Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austStdV.html">Australia Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/ukStudyVisa.html">UK Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/USstudyV.html">US Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/newzStdV.html">Newzealand Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/EuropeStdV.html">Europe Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaStdV.html">Singapore Study Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Tourist
                                                Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austTouristV.html">Australia Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaTouristV.html">Canada Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkTourist.html">UK Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UsaTouristV.html">USA Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/SchengenTourist.html">Schengen Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaTourist.html">Singapore Tourist Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item" href="#" data-bs-target="dropdown"> Spouse Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkSpouseV.html">UK Spouse Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austSpouseV.html">Australia Spouse Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="parmanet.html">Parmanent Residency</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="openWork.html">Open  Work Permit : Canada</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle show data" href="{{ route('front/product-list') }}"> Shop </a>
                                    <!-- <ul class="dropdown-menu show" data-bs-popper="static">
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Study Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaStdV.html">Canada Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austStdV.html">Australia Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/ukStudyVisa.html">UK Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/USstudyV.html">US Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/newzStdV.html">Newzealand Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/EuropeStdV.html">Europe Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaStdV.html">Singapore Study Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Tourist
                                                Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austTouristV.html">Australia Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaTouristV.html">Canada Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkTourist.html">UK Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UsaTouristV.html">USA Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/SchengenTourist.html">Schengen Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaTourist.html">Singapore Tourist Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item" href="#" data-bs-target="dropdown"> Spouse Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkSpouseV.html">UK Spouse Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austSpouseV.html">Australia Spouse Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="parmanet.html">Parmanent Residency</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="openWork.html">Open  Work Permit : Canada</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle show data" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"> Page </a>
                                    <ul class="dropdown-menu show" data-bs-popper="static">
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Study Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaStdV.html">Canada Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austStdV.html">Australia Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/ukStudyVisa.html">UK Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/USstudyV.html">US Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/newzStdV.html">Newzealand Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/EuropeStdV.html">Europe Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaStdV.html">Singapore Study Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Tourist
                                                Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austTouristV.html">Australia Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaTouristV.html">Canada Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkTourist.html">UK Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UsaTouristV.html">USA Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/SchengenTourist.html">Schengen Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaTourist.html">Singapore Tourist Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item" href="#" data-bs-target="dropdown"> Spouse Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkSpouseV.html">UK Spouse Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austSpouseV.html">Australia Spouse Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="parmanet.html">Parmanent Residency</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="openWork.html">Open  Work Permit : Canada</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle show data" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true"> Blog </a>
                                    <ul class="dropdown-menu show" data-bs-popper="static">
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Study Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaStdV.html">Canada Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austStdV.html">Australia Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/ukStudyVisa.html">UK Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/USstudyV.html">US Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/newzStdV.html">Newzealand Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/EuropeStdV.html">Europe Study Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaStdV.html">Singapore Study Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item dd-link" href="#" data-bs-target="dropdown">Tourist
                                                Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austTouristV.html">Australia Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/canadaTouristV.html">Canada Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkTourist.html">UK Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UsaTouristV.html">USA Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/SchengenTourist.html">Schengen Tourist Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/singaTourist.html">Singapore Tourist Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown dropend">
                                            <a class="nav-link dropdown-item" href="#" data-bs-target="dropdown"> Spouse Visa</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/UkSpouseV.html">UK Spouse Visa</a>
                                                </li>
                                                <li class="dropdown-item dd-link">
                                                    <a href="./dropend/austSpouseV.html">Australia Spouse Visa</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="parmanet.html">Parmanent Residency</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-item dd-link" href="openWork.html">Open  Work Permit : Canada</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="hot-link">
                        <ul class="hl-list">
                           <li class="hl-item"> <img src="{{ asset('public/front/assets/images/new-icon.svg')}}" alt=""/> New </li>
                           <li class="hl-item"> <img src="{{ asset('public/front/assets/images/hot-icon.svg')}}" alt=""/> Hot </li>
                           <li class="hl-item"> <img src="{{ asset('public/front/assets/images/sale-icon.svg')}}" alt=""/> Sale </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- !!- ===================================== Header End ======================== -!! -->
