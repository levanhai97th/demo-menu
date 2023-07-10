<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::where('parent_id', 0)->get();
        return view('menu', compact('categories'));
    }
}
