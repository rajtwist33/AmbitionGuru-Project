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
                <div class="col-md-6 d-flex">
                    <h3 class="m-3 fs-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <a href="{{ route('mentors.index') }}" class="breadcrumb-item"
                                    aria-current="page">Mentors</a>
                            </ol>
                        </nav>
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('mentors.create') }}" class=" m-3 float-end"><span
                            class="btn btn-success"> <i class="fa fa-plus"></i> Create </span>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="display" id="basic-2">
                        <thead>
                            <tr>
                                <th>Mentor Name</th>
                                <th>Mobile Number</th>
                                <th>Position </th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Date of Join</th>
                                <th>Last Updated </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mentors as $mentor)
                                <tr>

                                    <td>{{ $mentor->name }}</td>
                                    <td>{{ $mentor->mobile_number }}</td>
                                    <td>{{ $mentor->position }}</td>
                                    <td>{{ $mentor->email }}</td>

                                    <td><img src=" {{ asset('photo/'. $mentor->photo) }}"
                                            width="100px" height="80px" /></td>
                                    <td>{{ $mentor->date_of_join }}</td>
                                    <td>{{ $mentor->updated_at->diffForHumans() }}</td>
                                    <td class=" d-flex">

                                        <button title="Edit"
                                            onclick="window.open('{{ route('mentors.edit',$mentor->id) }}','_self')"
                                            class="btn btn-primary me-2" type="submit"><i class="fa fa-edit"></i>
                                        </button>

                                        <!-- <a href="{{ route('mentors.edit',$mentor->id) }}"
                                            class="btn btn-primary me-2"><i class="fa fa-edit"></i> </a> -->

                                        <a onclick="event.preventDefault();
                                         if(confirm('Do you want do delete?')){
                                         document.getElementById('form-delete-{{ $mentor->id }}').submit()}">
                                            <button type="submit" class="btn btn-danger me-2"><i
                                                    class="fa fa-trash"></i> </button>
                                        </a>
                                        <form style="display:none"
                                            id="{{ 'form-delete-'.$mentor->id }}"
                                            action=" {{ route('mentors.destroy', $mentor->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
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
