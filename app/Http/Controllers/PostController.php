<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user')->latest('id')->get();
        //dd($posts);
        return view('welcome', compact('posts'));
    }
}
