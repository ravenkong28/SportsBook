@extends('layout')

@section('title', 'Edit Profile')

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

<body>
    <div class="container">
        <div class="form-container">
            <form action="/" method="POST">
                @csrf
                <div class="d-flex mt justify-content-center align-items-center" style="padding: 20px">
                    <h3>Edit Profile</h3>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label class="form-label">Region</label>
                    <input class="form-control" name="region">
                </div>
                <div class="mb-3">
                    <p>Profile Picture</p>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
                <button type="submit" class="btn btn-primary" value="Save">Save</button>
            </form>
        </div>
    </div>
</body>

@endsection
