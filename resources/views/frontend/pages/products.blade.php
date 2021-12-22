@extends('layouts.frontend' , ['title' => "{$subcategory->name}"])
@section('content')
<div class="container">
    <!--Section: Content-->
    <br>
    <section class="text-center">
      <h4 class="mb-5"><strong>{{$subcategory->name}}</strong></h4>
      <div class="row">
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-12 mb-4">
{{--          <div class="card">--}}
            <div class="bg-image ripple" data-mdb-ripple-color="light">
              <img src="/uploads/products/{{ $product->image }}" class="img-fluid" alt="zmfood"/>
                <a data-mdb-toggle="modal" data-mdb-target="#exampleModal{{$product->id}}">
{{--              <a href="{{ url($product->subcategory->category->slug.'/'.$product->subcategory->slug.'/'.$product->slug) }}">--}}
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                  <h4 class="text-white mb-0">{{$product->name}}</h4>
                </div>
                </div>
              </a>
            </div>
{{--          </div>--}}
        </div>
        @endforeach
      </div>
        @foreach ($products as $product)
        <div
            class="modal fade"
            id="exampleModal{{$product->id}}"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$product->name}} || Category: {{$product->subcategory->category->name}}</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body"><img src="/uploads/products/{{ $product->image }}" class="img-fluid" alt="zmfood"/></div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
    <!--Section: Content-->
  </div>
  @endsection
