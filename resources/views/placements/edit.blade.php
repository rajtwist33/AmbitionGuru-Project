@extends('layouts.index')

@section('main')
    <div class="row ">
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <h3 class="m-3 fs-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="{{route('placements.index')}}" class="breadcrumb-item"
                                       aria-current="page">Placements</a>
                                    <a class="breadcrumb-item active" aria-current="page">Edit</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @include('error')
                    <form action="{{route('placements.update',$placement->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" value="{{($placement->name)}}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="designation" class="form-label">Designation</label>
                            <input name="designation" type="text" class="form-control @error('designation') is-invalid @enderror"
                                   id="designation" value="{{($placement->designation)}}">
                            @error('designation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input name="company" type="text" class="form-control @error('company') is-invalid @enderror"
                                   id="company" value="{{$placement->company}}">
                            @error('company')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <img id="photoPreview" src="{{asset('/storage/'. $placement->photo)}}" width="200px" alt="" class="mb-2">
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input name="photo" class="form-control @error('photo') is-invalid @enderror"
                                   type="file" id="photo" onchange="preview()">
                            @error('photo')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                                      id="message" rows="3">{{$placement->message}}</textarea>
                            @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end mt-5">
                            <a href="{{route('placements.index')}}" class="me-2"><span
                                    class="btn btn-danger"> Cancel </span>
                            </a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('custom_scripts')
        <script>
            function preview() {
                photoPreview.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
    @endsection
@endsection
