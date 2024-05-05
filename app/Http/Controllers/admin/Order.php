<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Customer;
use App\Models\Orders;

class Order extends Controller
{
    public function index(){
        return view('admin/orders/viw_orders');
    }
    public function get_ajax_orders(){
        $orders_data = Orders::orders_info();
        $uniqueOrders = [];
        foreach ($orders_data as $order) {
            $orderId = $order->order_id;
            if (!isset($uniqueOrders[$orderId])) {
                $uniqueOrders[$orderId] = $order;
            }
        }

        $data['orders_data'] = array_values($uniqueOrders);
        // echo '<pre>';print_r($data['orders_data']);die;
        return view('admin/orders/viw_ajax_orders',$data);
    }

    /*********************************Get Orders Details******************************************* */
    public function get_order_detail($order_id){
        $order_item_detail = Orders::order_item_detail($order_id);
        $customer_details = Orders::order_with_customer_detail($order_id);
        // echo '<pre>';print_r($order_item_detail);
        // echo '<pre>';print_r($customer_details);die;
        return view('admin/orders/viw_order_details',compact('order_item_detail','customer_details'));
    }
}