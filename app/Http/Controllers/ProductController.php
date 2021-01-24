<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);

        return view('pro.index', compact('products'));
    }


    
    public function remove ($id) {
        Product::destroy($id);
        return redirect(route('pro.index'));
    }
}
