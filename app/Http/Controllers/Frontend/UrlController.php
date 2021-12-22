<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class UrlController extends Controller
{
    public function categoryview($category_url)
    {
        $category = Category::where('slug', $category_url)->firstorfail();
        $category_id = $category->id;
        $subcategories = Subcategory::where('category_id', $category_id)->get();
        return view('frontend.pages.category')
        ->with('subcategories', $subcategories)
        ->with('category', $category);
    }

    public function subcategoryview($category_url, $subcategory_url)
    {
        $subcategory = Subcategory::where('slug', $subcategory_url)->firstorfail();
        $sub_category_id = $subcategory->id;
        $products = Product::where('sub_category_id', $sub_category_id)->get();
        return view('frontend.pages.products')
        ->with('products', $products)
        ->with('subcategory', $subcategory);
    }

    public function productview($category_url, $subcategory_url, $product_url)
    {
        $product = Product::where('slug', $product_url)->firstorfail();
        return view('frontend.pages.products-view')
        ->with('product', $product);
    }
}
