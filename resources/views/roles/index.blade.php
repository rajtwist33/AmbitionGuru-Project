@extends('layouts.index')

@section('icons')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@endsection
@section('main')
<br>
@include('layouts.SessioView')
<div class="row ">
    <div class="col-sm-12">

        <div class="card mt-5">

            <div class="row justify-content-around m-5">
                <div class="col-md-6">
                    <h3 class="m-3 fs-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="{{route('roles.index')}}" class="breadcrumb-item"
                                   aria-current="page">Roles</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ Route('roles.create') }}" class=" m-3 float-end"><span
                            class="btn btn-success ">  <i class="fa fa-plus "></i> Create</span>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="display" id="basic-2">
                        <thead>
                            <tr>
                                <th>Display Name</th>
                                <th>Slug</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>

                                    <td>{{ $role->display_name }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->updated_at->diffForHumans() }}</td>
                                    <td class=" d-flex  text-center">

                                        <button title="Edit"
                                                onclick="window.open('{{route('roles.edit', $role)}}','_self')"
                                                class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

                                        <a onclick="event.preventDefault();
                                         if(confirm('Do you want do delete?')){
                                         document.getElementById('form-delete-{{ $role->id }}').submit()}">
                                            <button type="submit" class="btn btn-danger me-2"><i class="fa fa-trash"></i></button>
                                        </a>
                                        <form style="display:none"
                                            id="{{ 'form-delete-'.$role->id }}"
                                            action=" {{ route('roles.destroy', $role->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>

                                        <!-- <form action="{{ route('roles.destroy', $role->id) }}"
                                            onsubmit="return confirm('Are you sure?');" method="POST" class="">
@csrf
@method('delete')
                                            <button type="login" class="btn btn-danger">Delete</button>
                                            <form> -->

                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection
