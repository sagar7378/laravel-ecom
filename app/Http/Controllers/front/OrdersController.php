<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;


class OrdersController extends Controller
{
    public function index(){
        $data['orders_info'] = Orders::get_orders();
        return view('front/account/viw_orders',$data);
    }

    /************************* Order confirm******************************* */
    public function order_confirm(){
        return view('front/checkout/viw_confirm_order');
    }
}