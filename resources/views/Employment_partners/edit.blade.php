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
                                    <a href="{{route('employment_partners.index')}}" class="breadcrumb-item"
                                       aria-current="page">Employment Partners</a>
                                    <a class="breadcrumb-item active" aria-current="page">Edit</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
    <form action="{{ route('employment_partners.update',$employment_partners->id) }}"
        method="POST" enctype="multipart/form-data">

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
                                        <input class="form-control" name="name" type="text" placeholder=" Name *"
                                            class="@error('name') is-invalid @enderror"
                                            value="{{ $employment_partners->name }}" />
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img id="imgPreview" src="{{ asset('logo/'.$employment_partners->logo) }}" width="200px" alt="" class="mb-2">
                                    <div class="mb-3 mt-3">
                                        <label>Logo</label>
                                        <input class="form-control" onchange="preview()"  name="logo" type="file" placeholder="Logo *"
                                            class="@error('logo') is-invalid @enderror" id="imgInp" />
                                        @error('logo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input class="form-control" name="address" type="text" placeholder="Address *"
                                            class="@error('address') is-invalid @enderror"
                                            value="{{ $employment_partners->address }}" />
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Website</label>
                                        <input class="form-control" name="website" type="text"
                                            placeholder=" website Link *" class="@error('website') is-invalid @enderror"
                                            value="{{ $employment_partners->website }}" />
                                        @error('website')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-5">
                            <a href="{{route('employment_partners.index')}}" class="me-2"><span
                                    class="btn btn-danger"> Cancel </span>
                            </a>
                            <button type="submit" class="btn btn-primary">Update</button>
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
