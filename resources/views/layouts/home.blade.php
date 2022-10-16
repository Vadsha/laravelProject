<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/28670fc814.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Righteous&display=swap");

        body {
            font-family: monospace;
            background-color: #a9c9ff;
            background-image: linear-gradient(180deg, #a9c9ff 0%, #ffbbec 100%);
            }

    </style>

</head>
<body>

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-transparent">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline" style="margin-left: 180px">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search "></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="{{ url('http://127.0.0.1:8000') }}" class="text-decoration-none text-dark"><i class="fa-sharp fa-solid fa-xmark"></i></a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-white-primary elevation-4">
    <!-- Brand Logo -->
        <h1 class="mt-1 display-4 ms-3" style="font-weight:bolder; background-image:url(/images/headtext.jpeg); background-size:cover;color:transparent; -webkit-background-clip:text;">ATHENA</h1>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info d-block font-italic text-dark text-decoration-none h5">
            <strong>{{ Auth::user()->name }}</strong>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin') }}" class=" btn nav-link bg-info active text-center">
                    <i class="fa-regular fa-pen-to-square"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item text-primary mt-2">
                <a href="{{ route('categories.index') }}" class="nav-link text-dark ms-5">
                    <i class="fa-sharp fa-solid fa-list"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item  text-primary mt-2">
                <a href="{{ route('brands.index') }}" class="nav-link text-dark ms-5">
                    <i class="fa-sharp fa-solid fa-tags"></i>
                  <p>Brands</p>
                </a>
              </li>
              <li class="nav-item text-primary mt-2">
                <a href="{{ route('products.index') }}" class="nav-link text-dark ms-5">
                    <i class="fa-brands fa-shopify"></i>
                  <p>Products</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item  mt-2">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn text-danger text-lg w-100"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
            </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <div class="content-wrapper bg-transparent">
        @yield('content')
    </div>


</body>
</html>
