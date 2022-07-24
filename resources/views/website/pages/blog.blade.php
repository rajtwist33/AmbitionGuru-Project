<!doctype html>
<html lang="en">

<head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


</head>
<style>
    h2 {
        height: 44px;
        width: 357px;
        left: 145px;
        top: 448px;
        border-radius: nullpx;
        font-family: Noto Sans;
        font-size: 32px;
        font-weight: 500;
        line-height: 44px;
        letter-spacing: 0em;
        text-align: left;

    }

    .img {
        font-family: Noto Sans;
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        letter-spacing: 0em;
        text-align: left;

    }

    h5 {
        font-family: Noto Sans;
        font-size: 18px;
        font-weight: 500;
        line-height: 29px;
        letter-spacing: 0em;
        text-align: left;
        color: #292929;

    }

    p {
        font-family: Noto Sans;
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        letter-spacing: 0em;
        text-align: left;
        color: #959595;

    }

    .anchor {
        font-family: 'Noto Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        color: #5953A3;
    }

    #i {
        height: 14.00089362244723px;
        width: 9.001262683833149px;
        left: 9.888671875px;
        top: 19.5040283203125px;
        border-radius: 0px;
        color: #5953A3;


    }

</style>

<body>

    <div class="col-12 container">
        <div class="row justify-content-evenly mt-5 mb-5">
            <div class="mt-5 mb-5">
                <h2> Blogs that you may like</h2>
            </div>

            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body ">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href="{{ route('blogshow') }}" class=" nav-link anchor"> Read More <i
                                class="bi bi-arrow-up-right-circle-fill " id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q="
                            class="card-img-top h-50 rounded-top" class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href="{{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <div class=" ">
                        <a href="{{ route('blogshow') }}"> <img
                                src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg"
                                class="card-img-top h-50 rounded-top" class="img" alt="image not found"></a>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://img.freepik.com/free-photo/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg?w=2000"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://img.freepik.com/free-photo/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg?w=2000"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://img.freepik.com/free-photo/beautiful-scenery-road-forest-with-lot-colorful-autumn-trees_181624-30942.jpg?w=2000"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://image.shutterstock.com/image-photo/3d-wallpaper-design-waterfall-sea-260nw-1380925703.jpg"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Shaqi_jrvej.jpg/640px-Shaqi_jrvej.jpg"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzhX25DiiLcOJu3_SR2L38hTT-Qljo2TYlwg&usqp=CAU"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="{{ route('blogshow') }}"> <img
                            src="https://wallpaperaccess.com/full/1131217.jpg" class="card-img-top h-50 rounded-top "
                            class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class=" nav-link anchor"> Read
                            More <i class="bi bi-arrow-up-right-circle-fill" id="id"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div>
                    <a href="http://"> <img src="https://wallpaperaccess.com/full/1131217.jpg"
                            class="card-img-top h-50 rounded-top " class="img" alt="image not found"></a>
                    <div class="card-body">
                        <p class="text-muted mt-3"> 9/4/2022</p>
                        <h5 class="card-title mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                            obcaecati.</h5>
                        <p class=" card-text">Lorem ipsum dolor sit, amet consectsicing elit. Quia voluptas
                            error, ducimus sit voluptatibus dicta corporis molestias vero, amet voluptates esse quo
                            quibusdam sunt officia! Totam reprehenderit sint consectetur adipisci delectus cumque natus
                            quo at possimus sequi, laboriosam itaque recusandae, sit, expedita debitis deleniti enim
                            iure eligendi labore? Ullam, tenetur?</p>
                        <a href=" {{ route('blogshow') }}" class="ml-0  nav-link "><span
                                class=" nav-link anchor"> Read More <i class="bi bi-arrow-up-right-circle-fill" id="id" " ></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                                    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
                                    crossorigin="anonymous">
                                    </script>

                                    <script
                                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                                        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
                                        crossorigin="anonymous">
                                    </script>
</body>

</html>
