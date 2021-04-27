<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;

class PostController extends Controller
{
    public function index(){
        return view('bbs',['posts'=>Post::all()]);
    }

    public function create(Request $request){
        Auth::user()->posts()->save(new Post(['body'=>$request->body]));
        // 全く同じ意味
        // $post = new Post;
        // $post->body = $request->body;
        // $post->user_id = Auth::id();
        // $post->save();
        return redirect('/');
    }
}
