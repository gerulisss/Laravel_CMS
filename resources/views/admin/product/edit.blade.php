@extends('layouts.admin')
@section('title', 'Edit Product')
@section('content')
<div class="container pt-4">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
        <br>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Sub Category:</strong>
            <select name="sub_category_id" class="form-control">
                <option value="">Select</option>
                @foreach ($subcategories as $subcategory)
                <option value="{{$subcategory->id}}" @if($subcategory->id == $product->sub_category_id) selected @endif>{{$subcategory->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" placeholder="Name">
            </div>
            <br>
        </div>
     </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
            <br/>
            <img src="{{asset('/uploads/products/'.$product->image) }}" width="150px">
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
   <br>
</form>
</div>
@endsection
