@extends('outer-layout')

@section('title', 'About Us')

@section('context')

<head>
    <style>
        .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 40px;
                background-color: #e7e0e0;
                border-radius: 20px 20px;
                margin-top: 30px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                height: 500px;
                position: relative;
            }

        .img-container {
            padding: 5px;
            border-radius: 20px 20px;
            background-color: #000000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>


<body style="background-image: url('Images/bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style="padding: 200px">
            <div class="flex-grow-1 ms-3" style="margin-right: 100px">
                <ul style="list-style: none;">
                    <li class="list-group-item fs-1 fw-bold" style="color: rgb(207, 100, 0);">SportsBook</li>
                    <li class="list-group-item fs-5 fw-bold" style="color:rgb(85, 82, 82);">We provide the best sports arena booking service!! Easier, better, best quality!!</li>
                </ul>
            </div>
            <div class="img-container">
                <img src="{{ asset('Images/home.png') }}" style="width: 400px; height: auto; border-radius: 20px 20px;">
            </div>
        </div>
    </div>

</body>

@endsection
