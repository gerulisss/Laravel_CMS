{{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
@extends('layouts.admin')
@section('title', 'Products')
    @section('content')

    <div class="container pt-4">
      <h2>Products</h2>
        @can('product_create')
      <a class="btn btn-primary" href="{{ route('products.create') }}"> Create New Product</a>
        @endcan

        <a class="btn btn-primary" href="{{ route('export.pdf') }}"> Export pdf</a>
{{--        <div>--}}
{{--            Download a PDF: <button type="button" class=" btn-success btn-sm" id="js-download" >Download</button>--}}
{{--        </div>--}}
        @can('product_destroy')
        <button type="button" class="btn btn-primary" href="{{ url('subcategory/deleted-records')}}"> Deleted Records</button>
        @endcan
        <div class="table-responsive">
        <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Url</th>
                <th scope="col">Sub Category Name</th>
                  <th scope="col">Category Name</th>
                  @can('product_edit')
                <th scope="col">Action</th>
                  @endcan
              </tr>
            </thead>
            <tbody>
{{--                @foreach ($products as $product)--}}
                    @forelse ($products as $product)


              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->slug}}</td>
                <td>{{ $product->subcategory->name }}</td>
                  <td>{{ $product->subcategory->category->name }}</td>
{{--                  @can('product-edit')--}}
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @can('product_edit')
                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                        @endcan
                        @csrf
                        @can('product_delete')
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                        @endcan
                    </form>
                </td>
{{--                      @endcan--}}
              </tr>
{{--              @endforeach--}}
                    @empty
                        <br/>
                        <h2>No Products found!</h2>
                    @endforelse
                    <br/>
            </tbody>
          </table>
        </div>
        {{ $products->links('vendor.pagination.custom') }}
    </div>
    @endsection
@section('scripts')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $("#js-download").click(function(){--}}

{{--            let data = '';--}}
{{--            $.ajax({--}}
{{--                type: 'GET',--}}
{{--                url: '/product/exportpdf',--}}
{{--                data: data,--}}
{{--                xhrFields: {--}}
{{--                    responseType: 'blob'--}}
{{--                },--}}
{{--                success: function(response){--}}
{{--                    let blob = new Blob([response]);--}}
{{--                    let link = document.createElement('a');--}}
{{--                    link.href = window.URL.createObjectURL(blob);--}}
{{--                    link.download = "zmfood_products.pdf";--}}
{{--                    link.click();--}}
{{--                },--}}
{{--                error: function(blob){--}}
{{--                    console.log(blob);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
@endsection
