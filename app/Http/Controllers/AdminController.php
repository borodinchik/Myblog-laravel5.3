<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
//Подключили модель Admin и взяли вьюху из папки view/user_admin.register
{
    public  function admin(){
        $register = Admin::get();
        return view('user_admin.register',compact('register'));
    }
    public function getAdmin(){
        $authorization = Admin::get();
        return view('user_admin.sing_in', compact('authorization'));
    }
    public function  profileAdmin(){
        $profile = Admin::get();
        return view('user_admin.profile_admin', compact('profile'));
    }
}
