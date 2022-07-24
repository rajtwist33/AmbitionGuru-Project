@extends('layouts.index')

@section('icons')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@endsection
@section('main')
<div class="row ">
    <div class="col-sm-12">

        <div class="card mt-5">

            <div class="row m-5">
                <div class="col-md-6 d-flex">
                    <h3 class="m-3 fs-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="{{route('permissions.index')}}" class="breadcrumb-item" aria-current="page">Permissions</a>
                                <a class="breadcrumb-item active" aria-current="page">Create</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="roles" class="form-label">Display_Name</label>
                        <input type="text" name="display_name" class="form-control"
                            value="{{ old('display_name') }}">
                    </div>
                    @error('display_name')
                        <span class="text-danger">{{ $message }}</span>

                    @enderror

                    <div class="mb-3">
                        <label for="roles" class="form-label">name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>

                    @enderror


                    <div class="text-end mt-5">
                        <a href="{{route('permissions.index')}}" class="me-2"><span
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
