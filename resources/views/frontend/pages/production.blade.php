@extends('layouts.frontend' , ['title' => __('Production')])
{{--@section('title', 'Production page')--}}
@section('content')
     {{-- <!-- Start your project here-->
     <div class="container">
      </div>
      <!-- End your project here-->
      <section>
        <div class="container">
          <div class="row">
                @foreach ($categories as $item)
                <div class="col-lg-3 col-md-6 mb-4">
                    <a href="{{ url($item->slug) }}"><h5>{{$item->name}}</h5>
                    </a>
                    </div>
                @endforeach
          </div>
        </div>
      </section> --}}
      <br>
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>{{ __('Production') }}</strong></h4>
          <div class="row">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                  <a href="{{ url($item->slug) }}">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
                      <h5 class="text-white mb-0">{{$item->name}}</h5>
                    </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
{{--            {!! $categories->links() !!}--}}
        </section>
        <!--Section: Content-->
      </div>

  <!-- Main layout -->
        @endsection
