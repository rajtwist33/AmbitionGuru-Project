@extends('layouts.index')

@section('icons')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@endsection
@section('main')
    <div class="row  ">
        <div class="col-sm-12">

            <div class="card mt-5">

                <div class="row m-5">
                    <div class="col-md-6 d-flex">
                        <h3 class="m-3 fs-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="{{route('roles.index')}}" class="breadcrumb-item"
                                       aria-current="page">Roles</a>
                                    <a class="breadcrumb-item active" aria-current="page">Create</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="roles" class="form-label">Display_Name</label>
                            <input type="text" name="display_name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="roles" class="form-label">name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                @foreach($permissions as $value)
                                    <div class="col-2 col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="permission[]" type="checkbox"
                                                   value="{{ $value-> id }}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ $value-> name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="text-end mt-5">
                                <a href="{{route('roles.index')}}" class="me-2"><span
                                        class="btn btn-danger"> Cancel </span>
                                </a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
