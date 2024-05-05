<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Categorie;
use App\Models\Products;

class ProductController extends Controller
{
        public function index(){
                return view('admin/product/viw_products');
        }

        /*********************** Add Product************************* */
        public function add_product(){
                $data['categories'] = Categorie::getCategory();
                return view('admin/product/viw_add_product',$data);
        }

        /*********************** Insert Product************************* */
        public function insert_product(Request $req){
                $post_data = $req->input();
                $json = array();
                // echo '<pre>';print_r($post_data);
                $category_id = isset($post_data['category_id'])?$post_data['category_id']:'';
                $product_name = isset($post_data['product_name'])?$post_data['product_name']:'';
                $price = isset($post_data['price'])?$post_data['price']:'';
                $protein = isset($post_data['protein'])?$post_data['protein']:'';
                $calories = isset($post_data['calories'])?$post_data['calories']:'';
                $carboidrates = isset($post_data['carboidrates'])?$post_data['carboidrates']:'';
                $fat = isset($post_data['fat'])?$post_data['fat']:'';
                $size = isset($post_data['size'])?$post_data['size']:'';
                $short_descr = isset($post_data['short_descr'])?$post_data['short_descr']:'';
                $descr = isset($post_data['descr'])?$post_data['descr']:'';

                if(empty($category_id) || empty($product_name) || empty($price) || empty($short_descr)) {
                        $json['message']       =  'Please fill all required fields';        
                        $json['alert_class']   =  'alert-danger';        
                }else{
                        $originalImageName = '';
                        $imagePath = '';
                        $gallery_image_name = '';

                        if ($req->hasFile('image') || $req->file('gallery_image')) {
                        $originalImageName = $req->file('image')->getClientOriginalName();
                        $imagePath = $req->file('image')->storeAs("products/images", $originalImageName, 'public');
                        $gallery_image_name = $req->file('gallery_image');
                        }
                       
                        $product_data = [
                                'category_id'           =>  $category_id,
                                'product_name'          =>  $product_name,
                                'price'                 =>  $price,
                                'protein'               =>  $protein,
                                'calories'              =>  $calories,
                                'fat'                   =>  $fat,
                                'carboidrates'          =>  $carboidrates,
                                'size'                  =>  $size,
                                'short_descr'           =>  $short_descr,
                                'descr'                 =>  $descr,
                                'image'                 =>  $originalImageName,
                        ];
                        
                        if ($gallery_image_name && (is_array($gallery_image_name) || $gallery_image_name instanceof Traversable)) {
                                $gallery_images = array();
                                foreach ($gallery_image_name as $gallery_image) {
                                    // Your existing code here
                                    $gallery_name             = $gallery_image->getClientOriginalName();
                                    $gallery_imagePath        = $gallery_image->storeAs("products/images",$gallery_name, 'public');
                                    $gallery_images[]         = isset($gallery_name)?$gallery_name:'';
                                }
                        }

                         if(!empty($gallery_images)){
                                $result = Products::ProductInsert($product_data,$gallery_images);
                         }else{
                                $result = Products::ProductInsert($product_data);
                         }       
                        
                        if($result){
                                $json['message']       =  'Product added successfully !';        
                                $json['alert_class']   =  'alert-success';  
                        }else{
                                $json['message']       =  'Technical error occured for product adding..!';        
                                $json['alert_class']   =  'alert-danger';  
                        }
                }       

                return response()->json($json);

                // echo $originalImageName;die;
        }

        /*********************** Food Listing ************************* */
        public function get_foods(){
                $data['foods'] = Products::GetFoods();
                return view('admin/product/viw_ajax_foods',$data);
        }
        
        /*********************** edit foods************************* */
        public function edit_food($id){
                $foods = Products::getFoodsWithGallery($id);   
                $data['categories'] = Categorie::getCategory();
                $data['food_info'] = isset($foods[0])?$foods[0]:'';
                return view('admin/product/viw_edit_food',$data);
        }

        /*********************** Update foods************************* */
        public function update_food(Request $req){
                $post_data = $req->input();
                $json      = array();
                // echo '<pre>';print_r($post_data);die;
                $category_id         = isset($post_data['category_id'])?$post_data['category_id']:'';
                $food_id             = isset($post_data['food_id'])?$post_data['food_id']:'';
                $product_name        = isset($post_data['product_name'])?$post_data['product_name']:'';
                $price               = isset($post_data['price'])?$post_data['price']:'';
                $protein             = isset($post_data['protein'])?$post_data['protein']:'';
                $calories            = isset($post_data['calories'])?$post_data['calories']:'';
                $carboidrates        = isset($post_data['carboidrates'])?$post_data['carboidrates']:'';
                $fat                 = isset($post_data['fat'])?$post_data['fat']:'';
                $size                = isset($post_data['size'])?$post_data['size']:'';
                $short_descr         = isset($post_data['short_descr'])?$post_data['short_descr']:'';
                $descr               = isset($post_data['descr'])?$post_data['descr']:'';


                if(empty($category_id) || empty($product_name) || empty($price) || empty($short_descr)) {
                        $json['message']       =  'Please fill all required fields';        
                        $json['alert_class']   =  'alert-danger';        
                }else{
                        $food_image = Products::getFoodsWithGallery($food_id);
                        $exitsting_image = isset($food_image[0])?$food_image[0]:'';
                        // echo '<pre>';print_r($exitsting_image);die;
                        $originalImageName = '';
                        $imagePath = '';
                        $gallery_image_name = '';

                        if ($req->hasFile('image')) {
                        $originalImageName = $req->file('image')->getClientOriginalName();
                        $imagePath = $req->file('image')->storeAs("products/images", $originalImageName, 'public');
                        }else{
                                $originalImageName = $exitsting_image->image;  
                        }
                        if($req->file('gallery_image')){
                                $gallery_image_name = $req->file('gallery_image');
                        }else{
                                $gallery_images = $exitsting_image->gallery_images;
                        }
                        // echo '<pre>';print_r($gallery_image_name);die;
                        $product_data = [
                                'category_id'           =>  $category_id,
                                'food_id'               =>  $food_id,
                                'product_name'          =>  $product_name,
                                'price'                 =>  $price,
                                'protein'               =>  $protein,
                                'calories'              =>  $calories,
                                'fat'                   =>  $fat,
                                'carboidrates'          =>  $carboidrates,
                                'size'                  =>  $size,
                                'short_descr'           =>  $short_descr,
                                'descr'                 =>  $descr,
                                'image'                 =>  $originalImageName,
                        ];
                        
                        if ($gallery_image_name && (is_array($gallery_image_name) || $gallery_image_name instanceof Traversable)) {
                                $gallery_images = array();
                                foreach ($gallery_image_name as $gallery_image) {
                                    // Your existing code here
                                    $gallery_name             = $gallery_image->getClientOriginalName();
                                    $gallery_imagePath        = $gallery_image->storeAs("products/images",$gallery_name, 'public');
                                    $gallery_images[]         = isset($gallery_name)?$gallery_name:'';
                                }
                        }
                                // echo '<pre>';print_r($gallery_images);die;
                         if(!empty($gallery_images)){
                                $result = Products::updateFoods($product_data,$gallery_images);
                         }else{
                                $result = Products::updateFoods($product_data);
                         }       
                        if($result >=0 ){
                                $json['message']       =  'Product updated successfully !';        
                                $json['alert_class']   =  'alert-success';  
                        }else{
                                $json['message']       =  'Technical error occured for product updating..!';        
                                $json['alert_class']   =  'alert-danger';  
                        }
                }       

                return response()->json($json);
        }

        /*********************** Delete foods************************* */
        public function delete_food($id){
                $del_id = $id;
                $json = array();
                if(!empty($del_id)){
                        Products::DeleteFood($del_id);
                    $json['message']  = 'Food delete a successfully !';
                    $json['alert_class']  = 'alert-success';
                }else{
                    $json['message']  = 'Technical error occured for delete a food !';
                    $json['alert_class']  = 'alert-danger';
                }
                return response()->json($json);
        }
        
}