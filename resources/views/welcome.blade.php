<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Athena</title>
    <script src="https://kit.fontawesome.com/28670fc814.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">

</head>
<body>

    <div class="background">

        <div class="conatiner ms-5 w-75 justify-content-center" style="color:#ff0000c7;">
            <div class="row justify-content-center text-center" style="margin-left: 250px;">
                <div class="head" style="margin-top:-20px;">
                    <h1 class=" display-1 w-75" style="pointer-events:none; font-weight:bolder; background-image:url(/images/headtext.jpeg); background-size:cover;color:transparent; -webkit-background-clip:text;">ATHENA</h1>
                </div>
                <div class="slogan">
                    <h5>Shop everything in one place with a reasonable price</h5>
                </div>
        </div>

        <div class="ads">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="text-warning"><i class="fa-solid fa-explosion"></i> Special Discount</h4>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <p class="text-center text-warning h6">10% Off for every Samsung Products</p>
                </div>
                <div class="card-footer text-end" style="background-color: #0D0D47">
                    <a href="{{ route('products.index') }}" class="text-end text-warning"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-left: 150px">
            <div class="row justify-content-around">

                <div class=" bg-transparent" style="width: 29%; margin-top:60px;">
                    <div class="panels">
                        <li>
                            <div class="front">
                                <img src="{{ asset('/images/laptops.jpeg') }}" alt="">
                            </div>
                            <div class="back">
                                <img src="{{ asset('/images/laptops.jpeg') }}" alt="">
                            </div>
                        </li>
                    </div>
                    <p class="label text-danger text-center h5">Laptops for your life with the best qualities</p>
                </div>

                <div class="mt-4 bg-transparent" style="width: 29%;">
                    <div class="panels">
                        <li>
                            <div class="front">
                                <img src="{{ asset('/images/phones.jpeg') }}" alt="">
                            </div>
                            <div class="back">
                                <img src="{{ asset('/images/phones.jpeg') }}" alt="">
                            </div>
                        </li>
                    </div>
                    <p class="label text-center text-danger h5">Global smart phones with special offers</p>
                </div>

                <div class=" bg-transparent" style="width: 29%; margin-top:60px;">
                    <div class="panels">
                        <li>
                            <div class="front">
                                <img src="{{ asset('/images/cameras.jpeg') }}" alt="">
                            </div>
                            <div class="back">
                                <img src="{{ asset('/images/cameras.jpeg') }}" alt="">
                            </div>
                        </li>
                    </div>
                    <p class="label text-danger text-center h5">Cameras to capture the memories of your life</p>
                </div>

            </div>
        </div>

        <div class="container-fluid mt-3" style="margin-top:-40px">
            <div class="row">
                <div class="text-center text-lg" style="margin-left: 130px">
                    <div class="h-50">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-success text-decpration-none">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class=" btn btn-primary text-decoration-none">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary ml-2 text-decoration-none">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-4 text-center text-primary" style="margin-left: 127px">

                <a href="https://www.facebook.com/zwe.zarni.94651" class="text-decoration-none h5"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://www.instagram.com/v.a.d.d.s.h.a.h" class="text-decoration-none h5 ms-3"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
        <div class="container mt-2" style="color:#ff0000c7;margin-left: 110px">
            <div class="row justify-content-around">
                <div class="col-6 text-center">
                    <p>Conditions of Use
                        Privacy Notice Interest-Based Ads © 1996-2022, Athena.com, Inc. or its affiliates</p>
                </div>
            </div>
        </div>



    </div>
</body>
</html>
