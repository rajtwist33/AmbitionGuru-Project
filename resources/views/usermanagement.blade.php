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
                                <a href="{{route('usermanagement')}}" class="breadcrumb-item"
                                   aria-current="page">Users</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ Route('adduser') }}" class=" m-3 float-end"><span
                            class="btn btn-success "> <i class="fa fa-plus "></i> Create</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data )
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->roles->first()->display_name }}</td>
                                    <td>{{ $data->updated_at->diffForHumans() }}</td>
                                    <td class="d-flex">

                                        <button title="Edit"
                                                onclick="window.open('{{route('edituser', $data->id)}}','_self')"
                                                class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

{{--                                        <a href="{{ route('edituser', $data->id) }}"--}}
{{--                                            class="btn btn-primary me-2"><i class="fa fa-edit"></i></a>--}}

                                        <a onclick="event.preventDefault();
                                         if(confirm('Do you want do delete?')){
                                         document.getElementById('form-delete-{{ $data->id }}').submit()}">
                                            <button type="submit" class="btn btn-danger me-2"><i class="fa fa-trash"></i></button>
                                        </a>
                                        <form style="display:none"
                                            id="{{ 'form-delete-'.$data->id }}"
                                            action=" {{ route('users.destroy', $data->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
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
