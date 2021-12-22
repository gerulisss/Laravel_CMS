<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;
// use JsonLd;
// use Twitter;
use App\Models\Category;
use App\Models\Subcategory;

class ProductionController extends Controller
{
    public function index()
    {
//        SEOMeta::setTitle('production page');
//        SEOMeta::setDescription('produkcija');
//        SEOMeta::setCanonical('https://hackthestuff.com/');
//        SEOMeta::setKeywords('dsad','dsad','dsad');
//
//        OpenGraph::setDescription('One destination for all stuff');
//        OpenGraph::setTitle('HackTheStuff - Homepage');
//        OpenGraph::setUrl('https://hackthestuff.com/');
//        OpenGraph::addProperty('type', 'articles');
        $subcategories = Subcategory::latest()->paginate(10);
//        $posts = Post::has('comments')->all();
//        $categories = Category::latest()->paginate(10);
//        $subcategories = Subcategory::all();
////        $categories = Category::orderBy('id', 'desc')->take(10)->get();
        $categories = Category::all();
//        $categories = Category::get();

        return view('frontend.pages.production',compact('categories', 'subcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
