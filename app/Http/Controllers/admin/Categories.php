<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class Categories extends Controller
{
    public function get_categories(){

        return view('admin/categories/viw_categories');
    }

    /********************************** Insert Categories ****************************************************** */
    public function insert_categories(Request $req)
    {
        $post_data = $req->input();
        $json = array();
    
        if (empty($post_data['cat_name'])) {
            $json['message'] = 'Please provide a value for the input field';
            $json['alert_class'] = 'alert-danger';
        } else {
            $input_data = [
                'name' => $post_data['cat_name'],
            ];
                Categorie::insertCategory($input_data);
    
            $json['message'] = 'Category inserted successfully';
            $json['alert_class'] = 'alert-success';
        }
            // Return a JSON response
            return response()->json($json);
    }

    /********************************** Get Categories ****************************************************** */
    public function categories_list(){
        $data['category_info'] = Categorie::getCategory();
        // echo '<pre>';print_r($category_info);die;
        return view('admin/categories/viw_ajax_categories',$data);
    }

    /********************************** Delete Categories ****************************************************** */
    public function categories_delete($id){
        $del_id = $id;
        $json = array();
        if(!empty($del_id)){
            Categorie::deleteCategory($del_id);
            $json['message']  = 'categorie delete a successfully !';
            $json['alert_class']  = 'alert-success';
        }else{
            $json['message']  = 'Technical error occured for delete a categorie !';
            $json['alert_class']  = 'alert-danger';
        }
        return response()->json($json);
    }

    /********************************** Edit Categories ****************************************************** */
    public function categories_edit($category_id){
            // echo $category_id;die;
            $data['category_info'] = Categorie::getCategoryId($category_id);
            // echo '<pre>';print_r($category_info);die;
            return view('admin/categories/viw_edit_categories',$data);
    }

    /********************************** Update Categories ****************************************************** */
    public function categories_update(Request $req){
        $post_data = $req->input();
        $json = array();
        $input_data = [
            'cat_id' => $post_data['cat_id'],
            'cat_name' => $post_data['cat_name'],
        ];
        $result =  Categorie::updateCategory($input_data);
        if($result >= 0){
            $json['message']  = 'categorie Update a successfully !';
            $json['alert_class']  = 'alert-success';
            $json['redirect_url']  = 'admin/categories';
        }else{
            $json['message']  = 'Technical error occured for update a categorie !';
            $json['alert_class']  = 'alert-danger';
        }
        return response()->json($json);
    }

    


}