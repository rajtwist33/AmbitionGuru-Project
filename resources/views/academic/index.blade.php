@extends('layouts.index')


<!-- tap on top starts-->
@section('icons')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@endsection


@section('main')
<br>
@include('layouts.SessioView')
<div class="row ">
    <div class="col-sm-12">

        <div class="card mt-5">

            <div class="row justify-content-around m-5">
                <div class="col-md-6">
                    <h3 class="m-3 fs-2"> Academic Collaboration </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ Route('academics.create') }}" class=" m-3 float-end"><span
                            class="btn btn-success "> <i class="bi bi-plus "></i> Create </span>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="display" id="basic-2">
                        <thead>
                            <tr>
                                <th>Academy Name</th>
                                <th>Website</th>
                                <th>Logo </th>
                                <th>Last Updated </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($academic_collaboration as $academic)
                                <tr>

                                    <td>{{ $academic->academy_name }}</td>
                                    <td>{{ $academic->website_url }}</td>
                                    <td><img src=" {{ asset('logo/'. $academic->logo) }}"
                                            width="100px" height="80px" /></td>


                                    <td>{{ $academic->updated_at->diffForHumans() }}</td>
                                    <td class=" d-flex">

                                        <button title="Edit"
                                            onclick="window.open('{{ route('academics.edit',$academic->id) }}','_self')"
                                            class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

                                        <form
                                            action="{{ route('academics.destroy', $academic->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button title="Delete"
                                                onclick="return confirm('Are you sure, you want to delete?')"
                                                class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>
                                            </button>
                                        </form>





                                    </td>

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
