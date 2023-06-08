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
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex mt justify-content-center align-items-center" style="padding: 20px">
                    <h3 style="color: rgb(118, 0, 122);">Register</h3>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Your Name</label>
                    <input name ="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" required placeholder="Enter Your Name" value = {{ old('name') }}>
                    @error('name')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Email address</label>
                    <input name ="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" required placeholder="Enter Your Email" value = {{ old('email') }}>
                    @error('email')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Password</label>
                    <input name ="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" required placeholder="Enter Your Password">
                    @error('password')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Phone</label>
                    <input name ="phone" type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" required placeholder="Enter Your Phone" value = {{ old('phone') }}>
                    @error('phone')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Age</label>
                    <input name ="age" type="number" class="form-control @error('age') is-invalid @enderror" id="age" required placeholder="Enter Your Age" value = {{ old('age') }}>
                    @error('age')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Address</label>
                    <input name ="address" type="text" class="form-control @error('address') is-invalid @enderror" id="address" required placeholder="Enter Your Address" value = {{ old('address') }}>
                    @error('address')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color: rgb(118, 0, 122); margin-left: 5px;">Region</label>
                    <input name ="region" type="text" class="form-control @error('region') is-invalid @enderror" id="region" required placeholder="Enter Your Region" value = {{ old('region') }}>
                    @error('region')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="fw-bold" for="image" style="color: rgb(118, 0, 122); margin-left: 5px;">Profile Picture</label>
                    <input type="file" class="custom-file-input form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class = "invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <small>Already have an account?<a href="/login" class="card-link" style="margin-left: 50px;">Log in here!</a></small>
                </div>

                <button type="submit" class="btn btn-primary" value="Register">Submit</button>
            </form>
        </div>
    </div>
</body>

@endsection
