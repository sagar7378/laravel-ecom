<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    public $timestamps = false;
    public static function ProductInsert($product_data,$gallery_images='')
    {
        $product_id = DB::table('products')->insertGetId([
            'category_id'   => $product_data['category_id'],
            'name'          => $product_data['product_name'],
            'price'         => $product_data['price'],
            'size'          => $product_data['size'],
            'short_descr'   => $product_data['short_descr'],
            'descr'         => $product_data['descr'],
            'image'         => $product_data['image'],
        ]);
        if($product_id){
            DB::table('products_specification')->insert([
                'product_id'    => $product_id,
                'protein'       => $product_data['protein'],
                'calories'      => $product_data['calories'],
                'fat'           => $product_data['fat'],
                'carboidrates'  => $product_data['carboidrates'],
            ]);
            $galleryData = array();
            if(!empty($gallery_images)){
                foreach ($gallery_images as $image) {
                    $galleryData[] = [
                        'product_id'    => $product_id,
                        'gallery_image' => $image,
                    ];
                }
                DB::table('products_gallery')->insert($galleryData);
            }
            
        }
        return $product_id;

    }
    
    /*********************** Get Foods************************* */
    public static function GetFoods() {
        $query =  DB::table('categories')
            ->select('categories.name as cat_name', 'products.name', 'products.id', 'products.short_descr', 'products.price', 'products.size', 'products.image', 'products.status')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->where('products.status', '=', 1) // Replace with your actual column and value
            ->take(4)
            ->get(); // Use get() instead of result()
            return $query;
    }

     /*********************** Get Foods************************* */
     public static function GetAllFoods() {
        $query =  DB::table('categories')
            ->select('categories.name as cat_name', 'products.name', 'products.id', 'products.short_descr', 'products.price', 'products.size', 'products.image', 'products.status')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->where('products.status', '=', 1) // Replace with your actual column and value
            ->get(); // Use get() instead of result()
            return $query;
    }

    /*********************** Get Foods Info************************* */
    public static function getFoodsWithGallery($id) {
        $query =  DB::table('categories')
            ->select(
                'categories.name as cat_name',
                'products.name',
                'products.id',
                'products.short_descr',
                'products.descr',
                'products.price',
                'products.size',
                'products.image',
                'products.status',
                'products_gallery.gallery_image',
                'products_specification.calories',
                'products_specification.protein',
                'products_specification.carboidrates',
                'products_specification.fat',
            )
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->leftJoin('products_gallery', 'products.id', '=', 'products_gallery.product_id')
            ->leftJoin('products_specification', 'products.id', '=', 'products_specification.product_id')
            ->where('products.status', '=', 1)
            ->where('products.id', '=', $id)
            ->get();
    
        $groupedResults = collect($query)->groupBy('id')->map(function ($item) {
            $item[0]->gallery_images = $item->pluck('gallery_image')->toArray();
            unset($item[0]->gallery_image);
            return $item[0];
        })->values();
    
        return $groupedResults;
    }
    
    /*********************** Update Foods Info************************* */
    public static function updateFoods($product_data,$gallery_images=''){
        $product_rows = DB::table('products')
        ->where('id', $product_data['food_id'])
        ->update(
            [
                'category_id'   => $product_data['category_id'],
                'name'          => $product_data['product_name'],
                'price'         => $product_data['price'],
                'size'          => $product_data['size'],
                'short_descr'   => $product_data['short_descr'],
                'descr'         => $product_data['descr'],
                'image'         => $product_data['image'],
            ]);
        if($product_rows >= 0) 
        {   
             DB::table('products_specification')
                ->where('product_id', $product_data['food_id'])
                ->update(
                [
                    'protein'       => $product_data['protein'],
                    'calories'      => $product_data['calories'],
                    'fat'           => $product_data['fat'],
                    'carboidrates'  => $product_data['carboidrates'],
                ]);    
                DB::table('products_gallery')
                ->where('product_id', $product_data['food_id'])
                ->delete();
                $galleryData = array();
                if(!empty($gallery_images)){
                    foreach ($gallery_images as $image) {
                        $galleryData[] = [
                            'product_id'    => $product_data['food_id'],
                            'gallery_image' => $image,
                        ];
                    }
                    
            DB::table('products_gallery')->insert($galleryData);
        }
            }
            return $product_rows;
    }

     /********************** delete a food data ********************************** */
     public static function DeleteFood($del_id){
        return DB::table('products')->where('id',$del_id)->delete();
    }

}