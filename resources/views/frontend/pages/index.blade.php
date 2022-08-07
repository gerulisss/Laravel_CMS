@extends('layouts.frontend' , ['title' => __('Home')])
@section('content')
      @include('frontend.slider.slider')
      <!-- End your project here-->
      <div class="container">
        <!--Section: Content-->
        <br>
        <section class="text-center">
          <h4 class="mb-5"><strong>{{ __('Production') }}</strong></h4>
          <div class="row">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                    <a href="{{ route('category-view', $item->slug) }}">

                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <h5 class="text-white mb-0"> {{ __('Production') }}</h5>
                    </div>
                    </div>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
          </div>
        </section>
      </div>
      @endsection
