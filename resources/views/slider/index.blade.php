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
                                    <a href="{{route('sliders.index')}}" class="breadcrumb-item" aria-current="page">Sliders</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sliders.create')}}" class=" m-3 float-end"><span
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
                                <th>Image</th>
                                <th>Status</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <img src="{{asset('/storage/'. $slider->image)}}" width="100px" alt="">
                                    </td>
                                    <td>
                                        <input type="checkbox" data-id="{{ $slider->id }}" name="status"
                                               class="js-switch" {{ $slider->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td>{{$slider->from_date}}</td>
                                    <td>{{$slider->to_date}}</td>
                                    <td class=" d-flex  text-center">

                                        <button onclick="window.location.href='{{route('sliders.edit', $slider->id)}}'"
                                                title="Edit"
                                                class="btn btn-primary me-2"><i class="fa fa-edit"></i></button>
                                        <form action="{{route('sliders.destroy', $slider->id)}}" method="POST">
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
    @include('partials.slider-toggle')
@endsection
