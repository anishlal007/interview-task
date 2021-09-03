<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class demomodel extends Model
{
    protected $table = "register";
    protected $fillable = ['first_name', 'last_name', 'email', 'mobile_no', 'gender', 'dob', 'username', 'password'];
    public static function getuserData($email, $password)
    {
        $status = DB::table('register')->where('email', '=', $email)->orWhere('username', '=', $email)->where('password', '=', $password)->get();
        return $status;
    }
    public static function getview($id)
    {
        $check = DB::table('register')->join('friend_list', 'register.id', '=', 'friend_list.friend_id')->where(['friend_list.user_id' => $id])->orderby('id', 'asc')->get();
        return $check;
    }
    public static function getuserdetail($id)
    {
        $status = DB::table('register')->where(['id' => $id])->get();
        return $status;
    }
}
