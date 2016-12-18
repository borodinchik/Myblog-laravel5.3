<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function  index(){
        $posts = Post::get();
        return view('index')->with('posts', $posts);//вывод постов на главную страницу
    }
}
