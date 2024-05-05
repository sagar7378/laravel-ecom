<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\DB;


class RazorpayPaymentController extends Controller
{
    public function createOrder(Request $request)
    {
        // $post_data  = $request->post();
        $api = new Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));
        $json = array();
        // Step 1: Create a customer
        if(empty($request->name) || empty($request->email) || empty($request->phone) || empty($request->address) || empty($request->city)){
            $alert_class    =  'alert-danger';
            $message        =  'Please Enter Required Fields !';
            return response()->json(['alert_class' => $alert_class, 'message' => $message]);
        }
        // $customer_id = session('user_id');
        // // Step 2: If the customer is created, proceed to create an order
        // if ($customer_id) {
            // Create an order in the Razorpay system
            $orderData = [
                'receipt' => 'order_rcptid_' . time(),
                'amount' => $request->amount * 100, // amount in paise
                'currency' => 'INR',
            ];

            $razorpayOrder = $api->order->create($orderData);
            // Step 3: Insert order details into the 'orders' table
            $order_id = DB::table('orders')->insertGetId([
                'customer_id'       => $customer_id,
                'razorpay_order_id' => $razorpayOrder->id,
                'delivery_address'  => $request->address,
                'payment_method'    => 'Online',
            ]);

            // Step 4: If the order is created, proceed to insert order items
            if ($order_id) {
                // Insert order items into the 'order_items' table
                $order_items = DB::table('order_items')->insert([
                    'order_id'      => $order_id,
                    'food_id'       => $request->food_id, // Assuming 'food_id' is a foreign key and can be null
                    'quantity'      => $request->qty,
                    'subtotal'      => $request->amount,
                ]);

                // Step 5: Check if order items are inserted successfully
                if ($order_items) {
                    session()->forget('cart');
                    return response()->json(['razorpayOrder_id' => $razorpayOrder->id, 'customer_id' => $customer_id, 'order_id' => $order_id]);
                } else {
                    return response()->json(['error' => 'Failed to insert order items'], 500);
                }
            } else {
                return response()->json(['error' => 'Failed to create order'], 500);
            }
        // }
        //  else {
        //     return response()->json(['error' => 'Failed to create customer'], 500);
        // }
    }

    public function save_payment_id(Request $request){
        $orderId = $request->input('order_id');
        $razorpayPaymentId = $request->input('razorpay_payment_id');

        DB::table('orders')->where('order_id', $orderId)->update([
            'razorpay_payment_id' => $razorpayPaymentId,
        ]);
    
        return response()->json(['message' => 'Payment ID saved successfully']);

    }
    /*********************** Testing payment ********************************** */
    public function payment_form(){

        return view('front/viw_payment_form');
    }
}
