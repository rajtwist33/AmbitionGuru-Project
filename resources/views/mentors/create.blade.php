@extends('layouts.index')
@section('main')
<div class="row ">
    <div class="col-sm-12">
        <div class="card mt-5">
            <div class="row m-5">
                <div class="col-md-6 d-flex">
                    <h3 class="m-3 fs-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="{{ route('mentors.index') }}" class="breadcrumb-item"
                                    aria-current="page">Mentors</a>
                                <a class="breadcrumb-item active" aria-current="page">Create</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('mentors.store') }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form theme-form projectcreate">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Name</label>
                                                    <input class="form-control" name="name" type="text"
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
                                                    <label>Mobile Number</label>
                                                    <input class="form-control" name="mobile_number" type="number"
                                                        class="@error('mobile_number') is-invalid @enderror"
                                                        value="{{ old('mobile_number') }}" />
                                                    @error('mobile_number')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Position</label>
                                                    <input class="form-control" name="position" type="text"
                                                        class="@error('position') is-invalid @enderror"
                                                        value="{{ old('position') }}" />
                                                    @error('position')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" type="email"
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
                                                <img id="imgPreview" src="" width="200px" alt="" class="mb-2">
                                                <div class="mb-3 mt-3">
                                                    <label>Photo</label>
                                                    <input class="form-control" onchange="preview()" name="photo"
                                                        type="file" class="@error('photo') is-invalid @enderror"
                                                        value="{{ old('photo') }}" id="imgInp" />
                                                    @error('photo')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label>Date Of Join</label>
                                                    <input class="form-control" name="date" type="date"
                                                        class="@error('date') is-invalid @enderror"
                                                        value="{{ old('date') }}" />
                                                    @error('date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end mt-5">
                                        <a href="{{ route('mentors.index') }}" class="me-2"><span
                                                class="btn btn-danger"> Cancel </span>
                                        </a>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('custom_scripts')
<script>
    function preview() {
        imgPreview.src = URL.createObjectURL(event.target.files[0]);
    }

</script>
@endsection
@endsection
