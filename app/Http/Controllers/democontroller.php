<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\demomodel;
use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function userlogin()
    {
        return view('user_login');
    }
    public function userregister()
    {
        return view('user_register');
    }
    public function register(Request $request)
    {
        $data = new demomodel;
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->mobile_no = $request->input('mobile_no');
        $data->gender = $request->input('gender');
        $data->dob = $request->input('dob');
        $data->username = $request->input('username');
        $data->password = $request->input('password');
        $data->save();
        echo '<script language="javascript">alert("Register Added successfully")
        </script>';
        echo '<meta http-equiv="refresh" content="0;url=http://localhost:8000/" />';
    }


    public function login(Request $request)
    {
       
        $email = $request->input('email');
        $password = $request->input('password');
        $userData = demomodel::getuserData($email, $password);
        if (count($userData) > 0) {
            $request->session()->put('id',  $userData[0]->id);
            $request->session()->put('first_name',  $userData[0]->first_name);
            //echo 'login';
            echo '<script language="javascript">alert("Login successfully")
   </script>';
            echo '<meta http-equiv="refresh" content="0;url=user_profile" />';
        } else {
            echo '<script language="javascript">alert(" Invalid Login")
               </script>';
            echo '<meta http-equiv="refresh" content="0;url=http://localhost:8000/" />';
        }
    }

    public function userprofile(Request $request)
    {

        $id = $request->session()->get('id');
        $data = demomodel::getuserdetail($id);
        return view('user_profile')->with('data', $data);
    }
    public function userlogout(Request $request)
    {
        Session::flush();
        echo '<script language="javascript">alert("User Logout")
    </script>';
        echo '<meta http-equiv="refresh" content="0;url=http://localhost:8000/" />';
    }
    public function friendlist(Request $request)
    {
        $first_name = $request->session()->get('first_name');
        $id = $request->session()->get('id');
        $data = demomodel::getview($id);
        return view('friend_list')->with('data', $data);
    }
8110838191
}
