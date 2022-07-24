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
                                    <a href="{{route('certificates.index')}}" class="breadcrumb-item" aria-current="page">Certificates</a>
                                    <a class="breadcrumb-item active" aria-current="page">Create</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    @include('error')
                    <form action="{{route('certificates.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="course_id" class="form-label">Course</label>
                            <select name="course_id" class="form-select @error('course_id') is-invalid @enderror"
                                    aria-label="course_id">
                                <option selected value="">--- Select Course ---</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            @error('course_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Reference No.</label>
                            <input name="reference_no" type="text" class="form-control @error('reference_no') is-invalid @enderror"
                                   id="reference_no" value="{{old('reference_no')}}">
                            @error('reference_no')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" value="{{old('name')}}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input name="duration" type="number"
                                   class="form-control @error('duration') is-invalid @enderror" id="duration"
                                   value="{{old('duration')}}">
                            @error('duration')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end mt-5">
                            <a href="{{route('certificates.index')}}" class="me-2"><span
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