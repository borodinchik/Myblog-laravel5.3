<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//Достаем посты из БД
class PostController extends Controller
{

    public function getPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
//     dd($post);
        //указываем путь к view show.blade.php
        return view('posts.show', compact('post'));
    }
}
