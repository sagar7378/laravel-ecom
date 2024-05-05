<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CheckoutController extends Controller
{
    public function index(){
        // if(session()->has('user_name')){
            $customer_id            = session('user_id');
            $data['cart_details']   = session()->get('cart', []);
            // echo '<pre>';print_r($data['cart_details']);die;
            $data['customer_info']  = Customer::where('customer_id',$customer_id)->first();
            return view('front/checkout/viw_checkout_form',$data);
        // }else{
        //     return redirect('customer-login');
        // }
    }
}