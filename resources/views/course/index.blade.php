@extends('layouts.index')

@section('main')

    @include('layouts.SessioView')
    <div class="row ">
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="row justify-content-around m-5">
                    <div class="col-md-6 d-flex">
                        <h3 class="m-3 fs-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <a href="{{route('courses.index')}}" class="breadcrumb-item" aria-current="page">Courses</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('courses.create')}}" class=" m-3 float-end"><span
                                class="btn btn-success"> <i class="fa fa-plus"></i> Create </span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-2">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Cover Pic</th>
                                <th>Status</th>
                                <th>Shift</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>
                                        <img src="{{asset('/storage/'. $course->cover_pic)}}" width="100px" alt="">
                                    </td>
                                    <td>
                                        <input type="checkbox" data-id="{{ $course->id }}" name="status"
                                               class="js-switch" {{ $course->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td>{{$course->shift}}</td>
                                    <td>{{$course->updated_at->diffForHumans()}}</td>
                                    <td class=" d-flex  text-center">

                                        <button title="Edit" onclick="window.location.href='{{route('courses.edit', $course->id)}}'"
                                           class="btn btn-primary me-2"><i class="fa fa-edit"></i></button>
                                        <form action="{{route('courses.destroy', $course->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Delete"
                                                    onclick="return confirm('Are you sure, you want to delete?')"
                                                    class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
       @include('partials.course-toggle')
@endsection
