<?php

use Illuminate\Support\Facades\Route;
/******************************Admin Controllers********************************** */
use App\Http\Controllers\admin\Login;
use App\Http\Controllers\admin\Categories;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\Order;

/******************************Front Controllers********************************** */
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\CheckoutController;
use App\Http\Controllers\front\RazorpayPaymentController;
use App\Http\Controllers\front\LoginController;
use App\Http\Controllers\front\CustomerController;
use App\Http\Controllers\front\OrdersController;
use App\Http\Controllers\front\ShopController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/************************************** Admin Routes************************************************* */

/************************************** Login Routes************************************************* */
Route::middleware(['guest'])->group(function () {

Route::view('admin','admin.viw_login')->name('admin');
Route::post('admin/valid-auth',[Login::class,'valid_auth'])->name('admin/valid-auth');
});

Route::middleware(['auth'])->group(function () {
Route::get('admin/dashboard',[Login::class,'dashboard'])->name('admin/dashboard');
Route::get('admin/logout',[Login::class,'logout'])->name('admin/logout');

/************************************** Categories Routes************************************************* */
Route::get('admin/categories',[Categories::class,'get_categories'])->name('admin/categories');
Route::post('admin/categories/insert',[Categories::class,'insert_categories'])->name('admin/categories/insert');
Route::get('admin/categories/list',[Categories::class,'categories_list'])->name('admin/categories/list');
Route::get('admin/categories/delete/{id}',[Categories::class,'categories_delete'])->name('admin/categories/delete');
Route::get('admin/categories/edit/{id}',[Categories::class,'categories_edit'])->name('admin/categories/edit');
Route::post('admin/categories/update',[Categories::class,'categories_update'])->name('admin/categories/update');

/************************************** Foods Routes************************************************* */
Route::get('admin/products',[ProductController::class,'index'])->name('admin/products');
Route::get('admin/products/add-product',[ProductController::class,'add_product'])->name('admin/products/add-product');
Route::post('admin/products/insert-product',[ProductController::class,'insert_product'])->name('admin/products/insert-product');
Route::get('admin/foods/food-lists',[ProductController::class,'get_foods'])->name('admin/foods/food-lists');
Route::get('admin/foods/edit/{id}',[ProductController::class,'edit_food'])->name('admin/foods/edit');
Route::post('admin/foods/update',[ProductController::class,'update_food'])->name('admin/foods/update');
Route::get('admin/foods/delete/{id}',[ProductController::class,'delete_food'])->name('admin/foods/delete');

/************************************** Orders Routes************************************************* */
Route::get('admin/orders',[Order::class,'index'])->name('admin/orders');
Route::get('admin/orders-list',[Order::class,'get_ajax_orders'])->name('admin/orders-list');
Route::get('admin/orders-details/{id}',[Order::class,'get_order_detail'])->name('admin/get-order-details');

});



/************************************** Front Routes************************************************* */
Route::get('/',[HomeController::class,'index'])->name('main');

/************************************** Login Register Routes************************************************* */

/******************************** Food single page******************************************** */
Route::get('admin/foods/detail/{id}',[HomeController::class,'food_detail'])->name('admin/foods/detail');

/******************************** Cart page******************************************** */
Route::post('admin/foods/add-to-cart',[CartController::class,'add_to_cart'])->name('admin/foods/add-to-cart');
Route::get('admin/foods/load-cart',[CartController::class,'load_cart']);
Route::get('admin/foods/delete-food/{id}',[CartController::class,'delete_cart'])->name('admin/foods/delete-food');
Route::get('front/foods/cart-details',[CartController::class,'cart_details'])->name('front/foods/cart-details');


/******************************** checkout route******************************************** */
Route::get('front/foods/checkout-form',[CheckoutController::class,'index'])->name('front/foods/checkout-form');


/*********************************** Shop routes***************************************** */
Route::get('front/product-list',[ShopController::class,'index'])->name('front/product-list');
Route::get('front/product-filter',[ShopController::class,'product_filters'])->name('front/product-filter');
Route::get('front/product-search-filter',[ShopController::class,'product_search_filters'])->name('front/product-search-filter');
Route::get('front/product-detail/{id}',[ShopController::class,'product_detail'])->name('front/product-detail');

/*********************************** Wishlist routes***************************************** */
Route::any('front/add-wishlist',[ShopController::class,'add_wishlist'])->name('front/add-wishlist');



/******************************** Razorpay route******************************************** */
Route::post('payment', [RazorpayPaymentController::class, 'createOrder'])->name('payment');
Route::post('/payment/callback', [RazorpayPaymentController::class, 'paymentCallback']);
Route::post('/save-payment-id', [RazorpayPaymentController::class, 'save_payment_id']);

Route::post('payment-form', [RazorpayPaymentController::class, 'payment_form']);

/******************************** Login route******************************************** */
Route::get('customer-login', [LoginController::class, 'index'])->name('customer-login');
Route::get('login-register', [LoginController::class, 'register'])->name('login-register');
Route::post('register-form', [LoginController::class, 'register_form'])->name('register-form');
Route::post('vailid-login', [LoginController::class, 'vailid_login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


/******************************** Customern details route******************************************** */
Route::get('customer-details', [CustomerController::class, 'index'])->name('customer-details');


/*********************************** Orders history routes***************************************** */
Route::get('front/orders',[OrdersController::class,'index'])->name('front/orders');

/*********************************** Orders Confirm routes***************************************** */
Route::get('front/order-confirm',[OrdersController::class,'order_confirm']);

