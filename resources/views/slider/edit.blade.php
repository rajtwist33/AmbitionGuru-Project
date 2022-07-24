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
                                    <a href="{{route('sliders.index')}}" class="breadcrumb-item"
                                       aria-current="page">Sliders</a>
                                    <a class="breadcrumb-item active" aria-current="page">Edit</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @include('error')
                    <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <img id="imgPreview" src="{{asset('/storage/'. $slider->image)}}" width="200px" alt="" class="mb-2">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input name="image" class="form-control @error('image') is-invalid @enderror"
                                   type="file" id="image" onchange="preview()" >
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

{{--                        <div class="mb-3">--}}
{{--                            <select name="status" class="form-select @error('status') is-invalid @enderror"--}}
{{--                                    aria-label="status">--}}
{{--                                <option value="1" @if($slider->status==1) selected @endif>Active</option>--}}
{{--                                <option value="0" @if($slider->status==0) selected @endif>Inactive</option>--}}
{{--                            </select>--}}
{{--                            @error('status')--}}
{{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                        <div class="mb-3">
                            <label for="from_date" class="form-label">From Date</label>
                            <input name="from_date" type="date" class="form-control @error('from_date') is-invalid @enderror"
                                   id="from_date" value="{{$slider->from_date}}">
                            @error('from_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="to_date" class="form-label">To Date</label>
                            <input name="to_date" type="date" class="form-control @error('to_date') is-invalid @enderror"
                                   id="to_date" value="{{$slider->to_date}}">
                            @error('to_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end mt-5">
                            <a href="{{route('sliders.index')}}" class="me-2"><span
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
                imgPreview.src = URL.createObjectURL(event.target.files[0]);
            }
        </script>
    @endsection
@endsection
