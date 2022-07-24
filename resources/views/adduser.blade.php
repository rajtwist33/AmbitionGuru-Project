@extends('layouts.index')
@section('main')
<div class="container-fluid">

    @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <form action="{{ Route('createaccount') }}" method="POST">

        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="fs-2 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="{{ route('usermanagement') }}" class="breadcrumb-item"
                                        aria-current="page">Users</a>
                                    <a class="breadcrumb-item active" aria-current="page">Create</a>
                                </ol>
                            </nav>
                        </h3>
                        <div class="form theme-form projectcreate">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input class="form-control" name="name" type="text" placeholder="User Name *"
                                            class="@error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" />
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Email Id</label>
                                        <input class="form-control" name="email" type="email" placeholder="Email Id *"
                                            class="@error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" />
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password"
                                            class="@error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" />
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Conform Password</label>
                                        <input class="form-control" name="conf_password" type="password"
                                            class="@error('conf_password') is-invalid @enderror"
                                            value="{{ old('conf_password') }}" />
                                        @error('conf_password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-5">
                                <label for="user"> Roles </label>
                                <select class="form-select" name="roll" aria-label="Default select example">
                                    @foreach($roles as $role )
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach

                                </select>

                            </div>

                        </div>


                        <div class="text-end mt-5">
                            <a href="{{ route('usermanagement') }}" class="me-2"><span
                                    class="btn btn-danger"> Cancel </span>
                            </a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>


    </form>
</div>
</div>
</div>

</div>
@endsection
