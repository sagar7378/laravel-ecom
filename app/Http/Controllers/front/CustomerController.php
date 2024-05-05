<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
        public function index(){
            // echo 'working';
            return view('front/account/account_details');
        }
}