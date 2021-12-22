{{-- {{$product->subcategory->category->name}} /
{{$product->subcategory->category->name}} /
{{$product->subcategory->name}} /
{{$product->name}} - {{ $product->subcategory->name}}
<h4>{{$product->name}} / {{ $product->subcategory->name}} </h4> --}}
@extends('layouts.frontend')
@section('title', 'Product Page')
@section('content')
<div class="container dark-grey-text mt-5">

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <img src="/uploads/products/{{ $product->image }}" class="img-fluid" alt="" width="450px">

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!--Content-->
        <div class="p-4">
            <h2>{{$product->name}}</h2>
                @can('product_edit')
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a><br/>
            @endcan
            <span>Sub Category: {{ $product->subcategory->name}}</span>
          <p class="lead font-weight-bold">Description</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
            sint voluptatibus!
            Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>
{{--            <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://www.zmfood.rokasm.lt/produkcija/', 'pop', 'width=600', 'height=400', 'scrollbars=no');">Share</a>--}}
                           <a class="share btn btn-info" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://www.zmfood.rokasm.lt/')">Share </a>
            <button onclick="window.print()" class="print btn btn-info"><i class="fas fa-download"></i></button>

        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->
</div>
@endsection
