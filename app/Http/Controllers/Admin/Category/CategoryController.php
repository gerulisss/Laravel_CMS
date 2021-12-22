<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('categories_access'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $categories = Category::latest()->paginate(10);

        return view('admin.category.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, 'Forbidden');
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        Category::create(array_merge($request->all(), [
            'slug' => Str::slug($request->name, '-'),
        ]));

        return redirect()->back()->with('message', 'Kategorija sekmingai sukurta');
    }

    public function edit(Category $category)
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        return view('admin.category.edit',compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $category->update(array_merge($request->all(), [
        ]));

        return redirect()->back()->with('message', 'Kategorija sekmingai atnaujinta');
    }

    public function destroy(Category $category)
    {
        abort_if(Gate::denies('category_delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $category->delete();
        return redirect()->back();
    }
}
