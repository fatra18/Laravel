<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoryController extends Controller
{
    public function index()

    {
        $categories = Category::all();
        $product = Product::with(['galleries'])->paginate(32);
        return view('pages.category',[
            'categories' => $categories,
            'products' =>$product
        ]);
    }
    public function detail(Request $request, $slug)

    {
        $categories = Category::all();
        $category= Category::where('slug', $slug)->firstOrFail();
        $product = Product::with(['galleries'])->where('categories_id',$category->id)->paginate(32);
        return view('pages.category',[
            'categories' => $categories,
            'products' =>$product
        ]);
    }

}
