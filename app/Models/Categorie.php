<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{
        // public $timestamps = false;
        protected $table = 'categories';


    public static function insertCategory($post_data)
    {
        return DB::table('categories')->insert([
            'name' => $post_data['name'],
        ]);
    }

    /********************** Get a category data ********************************** */

    public static function getCategory(){
       return DB::table('categories')->select('id', 'name', 'date_added','status')->get();
    }

    /********************** delete a category data ********************************** */
    public static function deleteCategory($del_id){
        return DB::table('categories')->where('id',$del_id)->delete();
    }

    /********************** get a particular category data ********************************** */
    public static function getCategoryId($cat_id){
        return DB::table('categories')->select('id', 'name')->where('id',$cat_id)->first();
     }

    /********************** update category data ********************************** */
    public static function updateCategory($input_data,){
                    return DB::table('categories')
                    ->where('id', $input_data['cat_id'])
                    ->update(['name' => $input_data['cat_name']]);
    }

}
?>
