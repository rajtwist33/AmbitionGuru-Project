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
                                    <a href="{{route('mentors.index')}}" class="breadcrumb-item"
                                       aria-current="page">Mentors</a>
                                    <a class="breadcrumb-item active" aria-current="page">Edit</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('mentors.update',$mentors->id) }}" method="POST"
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
                                                               placeholder=" Name *"
                                                               class="@error('name') is-invalid @enderror"
                                                               value="{{ $mentors->name }}"/>
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
                                                               placeholder="Mobile Number *"
                                                               class="@error('mobile_number') is-invalid @enderror"
                                                               value="{{ $mentors->mobile_number }}"/>
                                                        @error('mobile')
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
                                                               placeholder="Position"
                                                               class="@error('position') is-invalid @enderror"
                                                               value="{{ $mentors->position }}"/>
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
                                                               placeholder=" email Id *"
                                                               class="@error('email') is-invalid @enderror"
                                                               value="{{ $mentors->email }}"/>
                                                        @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <img id="imgPreview" src="{{ asset('photo/'.$mentors->photo) }}"
                                                         width="200px" alt="" class="mb-2">

                                                    <div class="mb-3 mt-3">
                                                        <label>Photo</label>
                                                        <input class="form-control" onchange="preview()" name="photo"
                                                               type="file"
                                                               placeholder=" Photo *"
                                                               class="@error('photo') is-invalid @enderror" value=""
                                                               id="imgInp"/>
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
                                                               placeholder=" Date of Join *"
                                                               class="@error('date') is-invalid @enderror"
                                                               value="{{ $mentors->date_of_join }}"/>
                                                        @error('date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="text-end mt-5">
                                            <a href="{{route('mentors.index')}}" class="me-2"><span
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
            @section('custom_scripts')
                <script>
                    function preview() {
                        imgPreview.src = URL.createObjectURL(event.target.files[0]);
                    }
                </script>
@endsection

@endsection
