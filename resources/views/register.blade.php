@extends('outer-layout')

@section('title', 'Register')

@section('context')

<head>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            padding: 40px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #ececec;
            border-radius: 20px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 100%;
            width: 90%;
        }
    </style>
</head>

<body style="background-image: url('Images/bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="form-container">
            <form action="/" method="POST">
                @csrf
                <div class="d-flex mt justify-content-center align-items-center" style="padding: 20px">
                    <h3 style="color: rgb(118, 0, 122);">Register</h3>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Your Name</label>
                    <input class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Phone</label>
                    <input class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Age</label>
                    <input class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Address</label>
                    <input class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Region</label>
                    <input class="form-control" name="region">
                </div>
                <div class="mb-3">
                    <p class="fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Profile Picture</p>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <div class="mb-3">
                    <small>Already have an account?<a href="/login" class="card-link" style="margin-left: 50px;">Log in here!</a></small>
                </div>

                <button type="submit" class="btn btn-primary" value="Save">Submit</button>
            </form>
        </div>
    </div>
</body>

@endsection
