@extends('layouts.index')

@section('main')
<br>
@include('layouts.SessioView')
<div class="row ">
    <div class="col-sm-12">

        <div class="card mt-5">

            <div class="row justify-content-around m-5">
                <div class="col-md-6">
                    <h3 class="m-3 fs-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="{{ route('placements.index') }}" class="breadcrumb-item"
                                    aria-current="page">Placements</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('placements.create') }}" class=" m-3 float-end"><span
                            class="btn btn-success "> <i class="fa fa-plus "></i> Create </span>
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
                                <th>Designation</th>
                                <th>Company</th>
                                <th>Photo</th>
                                <th>Message</th>
                                {{-- <th>Added By</th> --}}
                                {{-- <th>Extra</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($placements as $placement)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $placement->name }}</td>
                                    <td>{{ $placement->designation }}</td>
                                    <td>{{ $placement->company }}</td>



                                    <td>
                                        <img src="{{ asset('/storage/'. $placement->photo) }}"
                                            width="100px" alt="">
                                    </td>
                                    <td>{{ $placement->message }}</td>
                                    {{-- <td>{{$placement->AddedBy }}</td>--}}
                                    {{-- <td>{{$placement->Extra }}</td>--}}
                                    <td class=" d-flex  text-center">

                                        <button title="Edit"
                                            onclick="window.open('{{ route('placements.edit', $placement->id) }}', '_self')"
                                            class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

                                        <form
                                            action="{{ route('placements.destroy', $placement->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure, you want to delete?')"
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
