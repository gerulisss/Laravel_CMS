<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;

class ProductController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $products = Product::latest()->paginate(10);

        return view('admin.product.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        abort_if(Gate::denies('product_create'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $subcategories = Subcategory::latest()->paginate(5);
        return view('admin.product.create')
            ->with('subcategories', $subcategories);
    }

    public function store(Request $request)
    {

//        $products = new Product();
//        $products->sub_category_id = $request->input('sub_category_id');
//        $products->name = $request->input('name');
//        $products->slug    = Str::slug($request->input('name'), "-");
//        $products->save();
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/products/';
//            $file_extension = $request->file('image')->extension();
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
//            $productImage = $request->file('image')->getClientOriginalName();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }
        Product::create(array_merge($input, [
            'slug' => Str::slug($request->name, '-'),
        ]));
//        Product::create(array_merge($request->all(), [
//            'slug' => Str::slug($request->name, '-'),
//        ]));
        return redirect()->back()->with('status', 'Produktas sekmingai sukurtas');
    }

    public function edit(Product $product)
    {
        abort_if(Gate::denies('product_edit'), Response::HTTP_FORBIDDEN, 'Forbidden');

        $subcategories = Subcategory::find($product);
        return view('admin.product.edit')
        ->with('product', $product)
        ->with('subcategories', $subcategories);
    }

//    public function update(Request $request, $id)
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/products/';
            $productImage = $request->file('image')->getClientOriginalName();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }
        $product->update(array_merge($input, [
            'slug' => Str::slug($request->name, '-'),
        ]));
//        $product = Product::find($id);
//        if($request->file('image'))
//        {
//            $file = $request->file('image');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time(). '.'.$extension;
//            $file->move('uploads/products/', $filename);
//            $product->image = $filename;
//        }
//        $product->save();
//        $product->update(array_merge($request->all(), [
//            'slug' => Str::slug($request->name, '-'),
//        ]));
//        $products = Product::find($id);
//        $products->sub_category_id = $request->input('sub_category_id');
//        $products->name = $request->input('name');
//        $products->slug    = Str::slug($request->input('name'), "-");
//        $products->update();
        return redirect()->back()->with('message', 'produktas sekmingai atnaujinta');
    }

    public function destroy(Product $product)
    {
        abort_if(Gate::denies('product_delete'), Response::HTTP_FORBIDDEN, 'Forbidden');
        $product->delete();
        return redirect()->back();
    }

//    public function show () {
//        $products = Product::all();
//        return view('admin.product.index', compact('products'));
//    }

    public function createPDF(Request $request) {
        abort_if(Gate::denies('export_pdf'), Response::HTTP_FORBIDDEN, 'Forbidden');
        // retreive all records from db
        $data = Product::all();

        // share data to view
        view()->share('products',$data);
        $pdf = PDF::loadView('admin.product.products_pdf', $data);

        // download PDF file with download method
        return $pdf->download('zmfood_products.pdf');
//        $pdf = PDF::loadView('admin.product.products_pdf', $request);
//        return $pdf->download('zmfood_products.pdf');
    }

//    public function pdfIndex()
//    {
//        return view('pdf.index');
//    }
//
//    public function generatePDF(Request $request)
//    {
//        $pdf = PDF::loadView('pdf.pdf', $request);
//        return $pdf->download('download.pdf');
//    }

}
