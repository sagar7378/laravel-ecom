<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;



class LoginController extends Controller
{
        public function index(){
            $data['action']     =  'vailid-login';
            return view('front/viw_login',$data);
        }

        /************************************* Valid Login check***************************************** */

        public function vailid_login(Request $req){

            $email = $req->l_email;
            $password = $req->l_password;
            $json = [];
    
            if($email == '' || $password == ''){
                $json['message'] = 'Please fill required fields';
                $json['alert_class'] = 'alert-danger';
                return response()->json($json);
            }
            // Use case-insensitive comparison for email
            $admin = Customer::where('email',$email)->first();
            // Check if admin exists
                // Check if password is correct
                if ($admin && Hash::check($password, $admin->password)) {
                    Auth::login($admin);
                    $req->session()->put('user_name', $admin->name);
                    $req->session()->put('user_id', $admin->customer_id);
                    $json['message'] = 'Login successful, redirecting to your dashboard....';
                    $json['alert_class'] = 'alert-success';
                    $json['redirect_url'] = url('/');
                } else {
                    $json['message'] = 'Incorrect email or password';
                    $json['alert_class'] = 'alert-danger';
                }
    
            // Use response() instead of echo json_encode()
            return response()->json($json);

        }

        public function logout(){
            session()->flush();
            Auth::logout();
            return redirect(url('/'));
        }

        /*************************************** Register Route*************************************** */
        public function register(){
            $data['register_action']     =  'register-form';
            $data['login_action']        =  'vailid-login';
            return view('front/viw_login_register',$data);
        }

        /**************************************** customer register ****************************************** */
        public function register_form(Request $req){
            $name           =  $req->r_name;
            $email          =  $req->r_email;
            $password       =  $req->r_password;
            $phone          =  $req->r_mobile;
            
            $json           = array();
            if(empty($name) || empty($email) || empty($password)){
                $json['alert_class']        =  'alert-danger';
                $json['message']            =  'Please fill all required fields';
            }else{
                Customer::create([
                    'name'          => $name,
                    'email'         => $email,
                    'password'      => Hash::make($password),
                    'phone'         => $phone,
                    // Add more columns as needed
                ]);
                $json['alert_class']        =  'alert-success';
                $json['message']            =  'Rediecting to your Website please wail.....';
                $json['redirect_url']       = url('/');
            }
            return response()->json($json);

        }
}
?>