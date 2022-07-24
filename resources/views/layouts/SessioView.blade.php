<!-- @if(session('toast_success'))
    {{ session('toast_success') }}
    <!-- <div class="row ">
        <div class="alert alert-success ">{{ session('toast_success') }}
        </div>
    </div> -->

<!-- @endif -->

@if(session('exists'))
    <div class="alert alert-warning rounded-pill col-md-6">
        <p class="text-light fs-5">{{ session('exists') }} <span class="text-dark fs-5"> Already
                existed</span>
        </p>
    </div>

@endif
@if(session('delete'))
    <div class="alert alert-danger rounded-pill text-center col-md-3 fs-5">
        {{ session('delete') }}</div>

@endif
