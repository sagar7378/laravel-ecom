<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;


class CartController extends Controller
{
    public function add_to_cart(Request $req)
    {
        $post_data = $req->input();
        $json      = array();
        $food_id = $post_data['food_id'];
        $food_name = $post_data['food_name'];
        $food_price = $post_data['food_price'];
        $food_image = $post_data['food_image'];

        if ($food_id === null || $food_name === null || $food_price === null || $food_image === null) {
            // Handle the missing data, e.g., return an error response
            return response()->json(['error' => 'Invalid food data'], 400);
        }

        // Create a product array
        $food_item = [
            'food_id' => $food_id,
            'food_name' => $food_name,
            'food_price' => $food_price,
            'food_image' => $food_image,
            'food_qty' => isset($post_data['qty'])?$post_data['qty']:1, // Assuming initial quantity is 1
        ];

        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$food_id])) {
            // Increment the quantity if the product is already in the cart
            $cart[$food_id]['food_qty']++;
            $json['msg']  = 'same prduct added increase quantity!';
        } else {
            // Add the product to the cart with a quantity of 1
            $cart[$food_id] = $food_item;
            $json['msg']  = 'prduct added !';

        }
        session()->put('cart', $cart);
        return response()->json($json);

    }

    /********************************** load Cart data ****************************** */
    public function load_cart(Request $req){
        $cart_data = $req->session()->get('cart', []);
        $output = '';
        $total_price = 0;
        $food_count = 0;
        $cart_details = $cart_data;
    if(!empty($cart_details)){
        foreach($cart_details as $details){
            $output .= '
            <li>
                <figure><img src="' . asset('storage/app/public/products/images/' . $details['food_image']) . '" data-src="' . asset('storage/app/public/products/images/' . $details['food_image']) . '" alt="" width="50" height="50" class="lazy"></figure>
                <strong><span>' . (isset($details['food_qty']) ? $details['food_qty'] : '') . ' x ' . (isset($details['food_name']) ? $details['food_name'] : '') . '</span>Rs ' . (isset($details['food_price']) ? $details['food_price'] : '') . '</strong>
                <a href="javascript:void(0)" food-id="' . (isset($details['food_id']) ? $details['food_id'] : '') . '" class="action delete_cart"><i class="icon_trash_alt"></i></a>
            </li>
            ';
            $total_price = $total_price + ($details["food_qty"] * $details["food_price"]);
            $food_count = $food_count + $details["food_qty"];

        }
    }else{
        $output .= '
            <li>Your cart is empty</li>
        ';
    }
    
        return response()->json(array(['output' => $output],['total'=>'$'.$total_price],['food_count' => $food_count]));
        // If you want to return a view, uncomment the line below:
        // return view('front.cart.viw_cart_ajax', $data);
    }
    

    /********************************** Delete Cart ****************************** */
    public function delete_cart($id){
        $cart = session()->get('cart', []);
        $json = array();
        if(isset($cart[$id])) {
                unset($cart[$id]);
                session(['cart' => $cart]);
                $json['message'] = 'Product deleted successfully !';
        }else{
                $json['message'] = 'Technical error occured';
        }
                return response()->json($json);
    }

    /********************************** Cart details ****************************** */
    public function cart_details(){
        $data['cart_details'] = session()->get('cart', []);
        return view('front/cart/viw_cart_details',$data);
    }

    

      
}