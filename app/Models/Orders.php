<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{
    public static function get_orders(){
         $customer_id = session('user_id');
         $query = DB::table('orders')
         ->select('orders.order_date', 'orders.razorpay_order_id','order_items.quantity', 'order_items.subtotal', 'products.name','products.image')
         ->leftjoin('order_items', 'orders.order_id', '=', 'order_items.order_id')
         ->leftjoin('products', 'products.id', '=', 'order_items.food_id')
         ->where('orders.customer_id', '=', $customer_id)
         ->get();
     
        if ($query) {
            return $query;
        } else {
            dd(DB::table('orders')->get()); // Dump all orders to see if there are any errors
        }
        
    }

    public static function orders_info(){
        $query = DB::table('orders')
        ->select('customers.name','orders.order_status', 'orders.order_id','orders.delivery_address','orders.payment_method','orders.payment_status','order_items.quantity', 'order_items.subtotal')
        ->leftjoin('customers', 'orders.customer_id', '=', 'customers.customer_id')
        ->leftjoin('order_items', 'orders.order_id', '=', 'order_items.order_id')
        ->get();
       if ($query) {
           return $query;
       } else {
           dd(DB::table('orders')->get()); // Dump all orders to see if there are any errors
       }
    }

    public static function order_item_detail($order_id){
         $query = DB::table('order_items')
         ->select('*')
         ->leftjoin('products', 'products.id', '=', 'order_items.food_id')
         ->where('order_items.order_id', '=', $order_id)
         ->get();
        if ($query) {
            return $query;
        } else {
           echo 'Technical error occured !';
        }
    }

    public static function order_with_customer_detail($order_id){
        $query = DB::table('customers')
        ->select('*')
        ->leftjoin('orders', 'orders.customer_id', '=', 'customers.customer_id')
        ->where('orders.order_id', '=', $order_id)
        ->get();
       if ($query) {
           return $query;
       } else {
          echo 'Technical error occured !';
       }
    }

}