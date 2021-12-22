@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>

                        <a data-toggle="modal" id="smallButton" data-target="#smallModal{{ $user->id }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg">{{$user->name}}</i>
                        </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @foreach ($users as $user)
    <!-- small modal -->
    <div class="modal fade" id="smallModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>vardas</th>
                                <th>pastas</th>
                                <th>Role</th>
                            </tr>
                            <tr>
                                <td>{{$user->id}}</td>
                               <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role->title}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
