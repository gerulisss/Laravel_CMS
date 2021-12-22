@extends('layouts.frontend' , ['title' => '404 Page'])
@section('content')
    <div class="container">
        <br/>
        <h2 style="font-size: 50px;">404 Page - jusu puslapis nerastas</h2>
        <br/>
        <a href="{{route('home-locale', app()->getLocale())}}" class="btn btn-info">Go to Homepage</a>
        <br/>
        <br/>
    </div>
        @endsection
