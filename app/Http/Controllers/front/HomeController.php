<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Wishlists;


class HomeController extends Controller
{
    public function index(Request $request){
        $data['foods'] = Products::GetFoods();
        $user_id = $request->session()->get('user_id');
        $data['wishlist_products'] = Wishlists::where('user_id',$user_id)->get();
        return view('front/viw_index',$data);
    }

    /********************** Food Detail************************************ */
    public function food_detail($food_id){
        $foods = Products::getFoodsWithGallery($food_id);   
        $data['food_detail'] = isset($foods[0])?$foods[0]:'';
        return view('front/foods/viw_food_detail',$data);
    }
}