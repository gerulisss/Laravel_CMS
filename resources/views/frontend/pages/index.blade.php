@extends('layouts.frontend' , ['title' => __('Home')])
{{-- @section('meta_title', 'Home Page') --}}
@section('content')
      @include('frontend.slider.slider')
      <!-- End your project here-->
      <div class="container">
        <!--Section: Content-->
        <br>
        <section class="text-center">
{{--            <h4 class="mb-5"><strong>{{ __('messages.Production') }}</strong></h4>--}}
          <h4 class="mb-5"><strong>{{ __('Production') }}</strong></h4>
          <div class="row">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
{{--                    <a href="{{ route('production.index.page') }}">--}}
                    <a href="{{ route('category-view', $item->slug) }}">
{{--                  <a href="{{ LaravelLocalization::localizeUrl('produkcija') }}">--}}
{{--                    <a href="{{ route('category-view', [app()->getLocale(), $item->slug]) }}">--}}
{{--                    <a href="{{ url(app()->getLocale(), $item->slug) }}">--}}
{{--          <a href="{{ route(__('production.index.page', [app()->getLocale()])) }}">--}}

                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
{{--                      <h5 class="text-white mb-0">{{$item->name}}</h5>--}}
                            <h5 class="text-white mb-0"> {{ __('Production') }}</h5>
                    </div>
                    </div>
                  </a>
                </div>
              </div>
{{--                <div class="fb-share-button" data-href="http://zmfood.test/{{$item->slug}}" data-layout="button_count"></div>--}}
{{--                <a class="btn" href="https://www.facebook.com/sharer/sharer.php?u=zmfood.test/{{$item->slug}}&display=popup">share</a>--}}
{{--                <a class="btn" href="javascript:fbShare('http://zmfood.test/{{$item->slug}}', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">Share</a>--}}
{{--               <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;">Share </a>--}}
{{--                <a href="https://www.instagram.com/?url=http://zmfood.test/{{$item->slug}}" target="_blank" rel="noopener">--}}
{{--                    Share--}}
{{--                </a>--}}
{{--            </div>--}}
            @endforeach
          </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
      @endsection
