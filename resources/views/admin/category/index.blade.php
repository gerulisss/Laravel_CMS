    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
    @extends('layouts.admin')
    @section('title', 'Category')
    @section('content')

<div class="container pt-4">
  <h2>Categories</h2>
  <a class="btn btn-primary" href="{{ route('categories.create') }}"> Add Category</a>
    <a class="btn btn-primary" href="{{ url('category/deleted-records')}}"> Deleted Records</a>
    <div class="table-responsive">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Url</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)


          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    {{ $categories->links('vendor.pagination.custom') }}
</div>
@endsection
