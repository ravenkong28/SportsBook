<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 20px;">
        <div class="container-fluid" style="background-color: rgb(255, 238, 144)">
          <a class="navbar-brand" style="color: blue"  href="/home-admin">SportsBook</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Arenas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/category-arena/{{ $categories=1 }}">Badminton</a></li>
                                <li><a class="dropdown-item" href="/category-arena/{{ $categories=2 }}">Futsal</a></li>
                                <li><a class="dropdown-item" href="/category-arena/{{ $categories=3 }}">Basketball</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" style="color: blue"  href="/view-account">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: blue"  href="/view-account">My Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: blue"  href="/view-account">My Cart</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <form class="me-2 d-flex align-items-center" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" style="background-color: rgb(226, 188, 17); color: black" type="submit">Search</button>
                    </form>
                    <ul class="nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/home">My Account</a></li>
                                <li><a class="dropdown-item" href="/home">About Us</a></li>
                                <li><a class="dropdown-item" href="/home">Log Out</a></li>
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
        <div class = "" style = "background-color: white; display: flex; justify-content: center; position: fixed; bottom: 0; width: 100%;">
            <h6 style="color: blue">@2023 SportsBook</h6>
            <h6 style="color: blue">Customer Service: 021 1234 5678</h6>
            <h6 style="color: blue">Email: sportsbook@gmail.com</h6>
        </div>
    </div>
</footer>
</html>
