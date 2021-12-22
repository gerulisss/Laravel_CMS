<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('subcategories_access'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $subcategories = Subcategory::latest()->paginate(10);

        return view('admin.subcategory.index',compact('subcategories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        abort_if(Gate::denies('subcategory_create'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $categories = Category::latest()->paginate(5);
        return view('admin.subcategory.create')
        ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $subcategories = new Subcategory();
        $subcategories->category_id = $request->input('category_id');
        $subcategories->name = $request->input('name');
        $subcategories->slug    = Str::slug($request->input('name'), "-");
        $subcategories->save();

        return redirect()->back()->with('message', 'Sub kategorija sekmingai sukurta');
    }


    public function edit(Subcategory $subcategory)
    {
        abort_if(Gate::denies('subcategory_edit'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $categories = Category::find($subcategory);
        return view('admin.subcategory.edit')
        ->with('categories', $categories)
        ->with('subcategory', $subcategory);
    }

    public function update(Request $request, $id)
    {

        $subcategory = Subcategory::find($id);
        $subcategory->category_id = $request->input('category_id');
        $subcategory->name = $request->input('name');
        $subcategory->slug    = Str::slug($request->input('name'), "-");
        $subcategory->update();

        return redirect()->back()->with('message', 'Kategorija sekmingai atnaujinta');
    }

    public function destroy(Subcategory $subcategory)
    {
        abort_if(Gate::denies('subcategory_delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $subcategory->delete();
        return redirect()->back();
    }
}
