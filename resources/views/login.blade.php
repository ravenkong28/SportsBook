@extends('outer-layout')

@section('title', 'Login')

@section('context')

<head>
    <style>
        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #ececec;
            border-radius: 20px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 500px;
            overflow: hidden;
        }
    </style>
    <style>
        .form-container-2 {
            display: flex;
            align-items: center;
        }

        .form-container-2 .form-check {
            margin-right: 10px;
            padding: 10px;
        }
    </style>
    <style>
        .btn-primary {
            display: flex;
            align-items: center;
            justify-content: center;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form action="/home" method="POST">
                @csrf
                <div class="d-flex mt justify-content-center align-items-center" style="padding: 20px">
                    <h3>Login</h3>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label @error('user_name') is-invalid @enderror">Your Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label @error('user_password') is-invalid @enderror">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-container-2">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        <small>New here?<a href="/login" class="card-link">Sign up here!</a></small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

@endsection
