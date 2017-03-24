<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug=null){
        if (empty($slug)){
            $posts=Post::orderBy('created_at','desc')->paginate(10);
            return view('post.post_list',compact('posts'));
        }else{
            $post=Post::whereSlug($slug)->firstOrFail();
            $last_post=Post::all()->take(3);
            return view('post.post_show',compact('post','last_post'));
        }
    }
}
