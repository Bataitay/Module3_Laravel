<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $categories = Category::all();
        // dd($categories);
        $products = Product::all();
        return view('admin.dashboard', compact('categories', 'products'));
    }
}
