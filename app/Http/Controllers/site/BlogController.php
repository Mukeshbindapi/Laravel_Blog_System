<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Post::with('gallery')->get();
        return view('site.index', compact('blogs'));
    }

    public function OpenSingleBlog($id){
        $blog = Post::with('gallery')->find($id);

        if(!$blog){
            abort(404);
        }

        return view('site.single', compact('blog'));
    }
}
