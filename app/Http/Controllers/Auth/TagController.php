<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\tags;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function openTagPage(){
        $tags = tags::all();
        return view('auth.tags.index', compact('tags'));
    }
}
