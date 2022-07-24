@extends('layouts.index')
@section('main')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="mb-3">
                        <label><a href="{{ route('academics.index') }}"> Academic
                                Collaboration</a>/</label><span>Edit</span>
                    </h2>
                    <form action="{{ route('academics.update',$academics->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf


                        <div class="form theme-form projectcreate">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Academy Name</label>
                                        <input class="form-control" name="academy_name" type="text"
                                            class="@error('academy_name') is-invalid @enderror"
                                            value="{{ $academics-> academy_name }}" />
                                        @error('academy_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Website</label>
                                        <input class="form-control" name="website_url" type="text"
                                            class="@error('website_url') is-invalid @enderror"
                                            value="{{ $academics-> website_url }}" />
                                        @error('website_url')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('logo/'.$academics->logo) }}" alt=""
                                        width="200px;" height="100px;" id="blah">
                                    <div class="mb-3 mt-3">
                                        <label>Logo</label>
                                        <input class="form-control" name="logo" type="file" placeholder="logo *"
                                            class="@error('logo') is-invalid @enderror" id="imgInp" />
                                        @error('logo')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <script>
                                var imgInp = document.getElementById('imgInp');
                                imgInp.onchange = evt => {
                                    const [file] = imgInp.files
                                    if (file) {
                                        blah.src = URL.createObjectURL(file)
                                    }
                                }

                            </script>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ route('academics.index') }}"
                                        class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary me-3"> Add</button>


                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
@endsection
