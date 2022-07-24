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
                                    <a href="{{route('courses.index')}}" class="breadcrumb-item"
                                       aria-current="page">Courses</a>
                                    <a class="breadcrumb-item active" aria-current="page">Edit</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    @include('error')
                    <form action="{{route('courses.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" value="{{$course->name}}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="short_desc" class="form-label">Short Description</label>
                            <textarea name="short_desc" class="form-control @error('short_desc') is-invalid @enderror"
                                      id="short_desc" rows="3">{{$course->short_desc}}</textarea>
                            @error('short_desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <img id="imgPreview" src="{{asset('/storage/'. $course->cover_pic)}}" width="200px" alt=""
                             class="mb-2">
                        <div class="mb-3">
                            <label for="cover_pic" class="form-label">Cover Pic</label>
                            <input name="cover_pic" class="form-control @error('cover_pic') is-invalid @enderror"
                                   type="file" id="cover_pic" onchange="preview()">
                            @error('cover_pic')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duration_hrs" class="form-label">Duration(Hrs.)</label>
                            <input name="duration_hrs" type="number"
                                   class="form-control @error('duration_hrs') is-invalid @enderror" id="duration_hrs"
                                   value="{{$course->duration_hrs}}">
                            @error('duration_hrs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="shift" class="form-label">Shift</label>
                            <input name="shift" type="text" class="form-control @error('shift') is-invalid @enderror"
                                   id="shift" value="{{$course->shift}}">
                            @error('shift')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="syllabus" class="form-label">Syllabus</label>
                            <textarea name="syllabus" class="form-control @error('syllabus') is-invalid @enderror"
                                      id="syllabus">{{$course->shift}}</textarea>
                            @error('syllabus')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

{{--                        <div class="mb-3">--}}
{{--                            <select name="status" class="form-select @error('status') is-invalid @enderror"--}}
{{--                                    aria-label="status">--}}
{{--                                <option value="1" @if($course->status==1) selected @endif>Active</option>--}}
{{--                                <option value="0" @if($course->status==0) selected @endif>Inactive</option>--}}
{{--                            </select>--}}
{{--                            @error('status')--}}
{{--                            <div class="invalid-feedback">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                        <div class="text-end mt-5">
                            <a href="{{route('courses.index')}}" class="me-2"><span
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
