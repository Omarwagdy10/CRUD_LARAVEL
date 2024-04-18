<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

  </head>
<body>
  
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">All products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">Log in</a>
          </li>


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>



    <div>@yield('index')</div>
    <div>@yield('create_product')</div>

    <div>@yield('user_index')</div>
    <div>@yield('user_form')</div>
    <div>@yield('show_product')</div>


<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>