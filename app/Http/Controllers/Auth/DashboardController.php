<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\tags;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $postsCount = Post::count();
        $tagsCount = tags::count();
        $categoriesCount = Category::count();
        $usersCount = User::count();
        return view('auth.dashbord',compact('postsCount','tagsCount','categoriesCount','usersCount'));
    }
}
