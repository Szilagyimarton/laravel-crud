<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  @vite(['resources/js/app.js'])
  <title>Book Database</title>
</head>
<body>
  <header class="bg-success">
  
<nav class="navbar navbar-expand-lg bg-body-success" data-bs-theme="dark">
  <div class="container-fluid">
    <button id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/book/create">Add new</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link "  href="/book/manage">Manage books</a>
        </li>
      </ul>
  
        <a class="nav-link disabled" aria-disabled="true" style="color: rgba(255,255,255,0.8)">Welcome {{auth()->user()->name}}!</a>

      <form method="post" action="/logout" style="display: flex;justify-content:center;" class="d-flex">
        @csrf
        <button class="btn text-uppercase" type="submit" style="color: white">Logout</button>
      </form>

      @else
      <li class="nav-item">
        <a class="nav-link "  href="/register">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="/login">Login</a>
      </li>
      @endauth
    </div>
  </div>
</nav>
  </header>
  <main style="min-height:100vh ">
    <h5 class="mx-auto p-3"  style="color: green">{{session('success')}}</h5>
    @yield('content')
  </main>
  <footer class="bg-success position-absolute-bottom text-center p-3" style="color: white" >Copyright</footer>
</body>
</html>