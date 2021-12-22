 {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
 @extends('layouts.admin')
 @section('title', 'Sub-Category')
    @section('content')

    <div class="container pt-4">
      <h2>Sub Categories</h2>
      <a class="btn btn-primary" href="{{ route('subcategories.create') }}"> Create New Sub Category</a>
        <a class="btn btn-primary" href="{{ url('subcategory/deleted-records')}}"> Deleted Records</a>
        <div class="table-responsive">
        <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Url</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory)


              <tr>
                <td>{{$subcategory->id}}</td>
                <td>{{$subcategory->name}}</td>
                <td>{{$subcategory->slug}}</td>
                <td>{{ $subcategory->category->name }}</td>
                <td>
                    <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('subcategories.edit',$subcategory->id) }}">Edit</a>

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
        {{ $subcategories->links('vendor.pagination.custom') }}
    </div>
    @endsection
