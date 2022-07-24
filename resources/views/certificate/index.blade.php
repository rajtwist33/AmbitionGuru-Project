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
                                    <a href="{{route('certificates.index')}}" class="breadcrumb-item"
                                       aria-current="page">Certificates</a>
                                </ol>
                            </nav>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('certificates.create')}}" class=" m-3 float-end"><span
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
                                <th>Course</th>
                                <th>Name</th>
                                <th>Reference No.</th>
                                <th>Duration</th>
                                <th>Last Updated</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        @if(!empty($certificate->course))
                                            {{$certificate->course->name}}
                                        @endif
                                    </td>
                                    <td>{{$certificate->name}}</td>
                                    <td>{{$certificate->reference_no}}</td>
                                    <td>{{$certificate->duration}}</td>
                                    <td>{{$certificate->updated_at->diffForHumans()}}</td>
                                    <td class="d-flex  text-center">

                                        <button title="Edit"
                                                onclick="window.open('{{route('certificates.edit', $certificate->id)}}','_self')"
                                                class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

                                        <form action="{{route('certificates.destroy', $certificate->id)}}"
                                              method="POST">
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
@endsection
