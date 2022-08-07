@extends('layouts.frontend' , ['title' => "{$category->name}"])
@section('content')
<div class="container">
    <br>
    <section class="text-center">
      <h4 class="mb-5"><strong>{{$category->name}}</strong></h4>
      <div class="row">
        @foreach ($subcategories as $subcategory)
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="bg-image ripple" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
              <a href="{{ url($subcategory->category->slug.'/'.$subcategory->slug) }}">
                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                  <h5 class="text-white mb-0">{{$subcategory->name}}</h5>
                </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
  </div>
  @endsection
