<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Artesaos\SEOTools\Facades\SEOMeta;
//use Artesaos\SEOTools\Facades\SEOTools;
//use Artesaos\SEOTools\Facades\OpenGraph;
// use JsonLd;
// use Twitter;
use App\Models\Category;
use App\Models\Subcategory;

class IndexController extends Controller
{
    public function index()
    {
//        SEOMeta::setTitle('ZMFOOD');
//        SEOMeta::setDescription('Moderni, tačiau ir senas tradicijas puoselėjanti gamybos kompanija siūlo itin platų  užkandžių bei dražė asortimentą.');
//        SEOMeta::setCanonical('https://zmfood.eu/');
//
//        OpenGraph::setDescription('Moderni, tačiau ir senas tradicijas puoselėjanti gamybos kompanija siūlo itin platų  užkandžių bei dražė asortimentą.');
//        OpenGraph::setTitle('ZMFOOD');
//        OpenGraph::setUrl('https://zmfood.eu/');
////        OpenGraph::addProperty('type', 'articles');
//
//         Twitter::setTitle('HackTheStuff - Homepage');
//         Twitter::setSite('@HackTheStuff');
//
//         JsonLd::setTitle('HackTheStuff - Homepage');
//         JsonLd::setDescription('One destination for all stuff');
//         JsonLd::addImage('https://hackthestuff.com/frontTheme/img/logo.png');

        $categories = Category::latest()->paginate(5);
//        $categories = Category::get();
        $subcategories = Subcategory::latest()->paginate(5);

        return view('frontend.pages.index',compact('categories', 'subcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5)
//                return view('frontend.pages.index',compact('categories', 'subcategories'));
//        return view('frontend.pages.index')
            ->with('categories', $categories)
            ->with('subcategories', $subcategories);
    }


}
