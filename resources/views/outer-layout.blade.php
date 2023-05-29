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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: white;">
        <div class="container-fluid" style="background-color: rgb(36, 33, 32)">
          <a class="navbar-brand fw-bold" style="color:rgb(255, 255, 255); margin-left: 20px;" href="/">SportsBook</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link fw-bold" style="color:rgb(255, 255, 255); margin-left: 20px;" href="/login">Login</a>
              <a class="nav-link fw-bold" style="color:rgb(255, 255, 255); margin-left: 20px;" href="/register">Register</a>
              <a class="nav-link fw-bold" style="color:rgb(255, 255, 255); margin-left: 20px;" href="/about-us">About Us</a>
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

<style>
    body {
        background-color: rgb(241, 241, 241);
    }
</style>
</html>
