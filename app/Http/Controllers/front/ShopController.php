<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Wishlists;
use Illuminate\Support\Facades\Auth;

use DB;

class ShopController extends Controller
{
    public function index(){
        $data['products'] = Products::paginate(8); // Paginate with 10 items per page
        // echo '<pre>';print_r($products);die;
        // $data['products'] = Products::GetAllFoods();
        return view('front/shop/viw_shop_list',$data);
    }

    public function product_filters(Request $request)
    {
        $option = $request->option;

        if ($option === 'low') {
            $items = Products::orderBy('price', 'asc')->paginate(8);
        } elseif ($option === 'high') {
            $items = Products::orderBy('price', 'desc')->paginate(8);
        } else {
            $items = Products::all();
        }

        return view('front/shop/viw_ajax_shop_filter', ['products' => $items]);
    }

    public function product_search_filters(Request $request){
        $post_data = $request->post();
        $items = Products::where('name', 'like', '%' . $post_data['search'] . '%')->paginate(8);
        return view('front/shop/viw_ajax_shop_filter', ['products' => $items]);
    }

    public function product_detail($id){
        $product_details = Products::where('id', $id)->first();
        $product_gallery =  DB::table('products_gallery')->where('product_id',$id)->get();
        // echo '<pre>';print_r($product_gallery);die;
        return view('front/shop/viw_shop_detail', ['product_details' => $product_details,'product_gallery' => $product_gallery]);
    }

    /**************************Wishlist code here********************** */
    public function add_wishlist(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        if (!empty($user_id)) {
            $product_id = $request->input('product_id');
    
            // Check if the product is already in the wishlist for the user
            $wishlistItem = Wishlists::where('product_id', $product_id)
                                    ->where('user_id', $user_id)
                                    ->first();
    
            $json = [];
     
            if (!$wishlistItem) {
                // Product doesn't exist in the wishlist, create a new entry
                $wishlistItem = Wishlists::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'is_wishlist' => 1,
                ]);
                $json['msg'] = 'Product added to wishlist';
                $json['alert'] = 'success';
            } else {
                // Product already exists in the wishlist
                // If it's already in the wishlist, delete it
                $wishlistItem->delete();
                $json['msg'] = 'Product removed from wishlist';
                $json['alert'] = 'success';

            }
        } else {
            // User is not logged in, redirect to login/register page
            $json['redirect'] = url('login-register');
        }
    
        return response()->json($json);
    }
    
    
}