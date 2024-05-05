<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class Login extends Controller
{
    public function valid_auth(Request $req)
    {
        $email = $req->email;
        $password = $req->password;
        $json = [];

        if($email == '' || $password == ''){
            $json['message'] = 'Please fill required fields';
            $json['alert_class'] = 'alert-danger';
            return response()->json($json);
        }
        // Use case-insensitive comparison for email
        $admin = Admin::where('email',$email)->first();

        // Check if admin exists
            // Check if password is correct
            if ($admin && Hash::check($password, $admin->password)) {
                Auth::login($admin);
                $req->session()->put('user_name', $admin->name);
                $req->session()->put('user_id', $admin->id);
                $json['message'] = 'Login successful, redirecting to your dashboard....';
                $json['alert_class'] = 'alert-success';
                $json['redirect_url'] = 'admin/dashboard';
            } else {
                $json['message'] = 'Incorrect email or password';
                $json['alert_class'] = 'alert-danger';
            }

        // Use response() instead of echo json_encode()
        return response()->json($json);
    }

    // dashboard
    public function dashboard(){

        return view('admin/viw_dashboard');
    }
    // logout 
    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect()->route('admin');
    }
}
?>