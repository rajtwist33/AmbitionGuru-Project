@extends('layouts.index')
@section('main')



<div class="row ">
    <div class="col-md-6">
        <h3 class="m-3 fs-2 text-primary">User Profile </h3>
    </div>
    <div class="col-sm-12">

        <div class="card mt-5">

            <div class="row justify-content-around m-5">

                <div class="card-body">



                    <strong class="fs-3">Name : </strong> <span class="fs-5 m-2 "> {{ $data->name }}</span><br>

                    <strong class="fs-3">Email :</strong> <span class="fs-5 m-2 text-primary text-underline">
                        {{ $data->email }}</span><br>

                    <strong class="fs-3">Created At : </strong> <span class="fs-5 m-2">
                        {{ $data->created_at->diffForHumans() }}</span>



                </div>



            </div>
        </div>
    </div>
</div>

@endsection
