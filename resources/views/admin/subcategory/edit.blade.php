@extends('layouts.admin')
@section('title', 'Edit Sub-Category')
@section('content')
<div class="container pt-4">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Sub category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('subcategories.index') }}"> Back</a>
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

<form action="{{ route('subcategories.update',$subcategory->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <select name="category_id" class="form-control">
                <option value="">Select</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" @if($category->id == $subcategory->category_id) selected @endif>{{$category->name}}</option>
                @endforeach
                </select>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="Name">
            </div>
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   <br>
</form>
</div>

@endsection
