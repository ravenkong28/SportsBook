<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 20px;">
        <div class="container-fluid" style="background-color: rgb(255, 238, 144);">
          <a class="navbar-brand fw-bold fs-1" style="color: rgb(207, 100, 0); margin-left: 30px;" href="/home">SportsBook</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold fs-5" style="color:rgb(207, 100, 0); margin-right: 30px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Arenas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bold" style="color:rgb(207, 100, 0)" href="/category-arena/{{ $categories=1 }}">Badminton</a></li>
                                <li><a class="dropdown-item fw-bold" style="color:rgb(207, 100, 0)" href="/category-arena/{{ $categories=2 }}">Futsal</a></li>
                                <li><a class="dropdown-item fw-bold" style="color:rgb(207, 100, 0)" href="/category-arena/{{ $categories=3 }}">Basketball</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5" style="color:rgb(207, 100, 0); margin-right: 30px;"  href="/my-bookings">My Bookings</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <form action="/home" class="me-2 d-flex align-items-center" role="search">
                        <input class="form-control me-2" type="text" placeholder="Search" name="Search">
                        <button class="btn btn-outline-success fw-bold" style="background-color: rgb(255, 153, 0); color: black" type="submit">Search</button>
                    </form>
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold fs-5" style="color: black; align-items: center;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item fw-bold" href="/my-account">My Account</a></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type ="submit" class="dropdown-item fw-bold">Log Out</button>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </nav>
      @yield('context')
</body>
<footer>
    <div class="footer">
        <div class = "" style = "background-color: rgb(36, 33, 32); display: flex; align-items: center; justify-content: center; position: fixed; bottom: 0; width: 100%; height: 40px;">
            <h6 style="color: rgb(255, 255, 255)">@2023 Copyright SportsBook | Customer Service: 021 1234 5678 | Email: sportsbook@gmail.com</h6>
        </div>
    </div>
</footer>
</html>
