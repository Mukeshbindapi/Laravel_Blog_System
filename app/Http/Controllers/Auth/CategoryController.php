<?php

namespace App\Http\Controllers\Auth;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function openCategoriesPage(){
        $Categoris = Category::all();
        return view('auth.categories.index', compact('Categoris'));
    }
}
