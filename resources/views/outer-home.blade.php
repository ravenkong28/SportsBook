@extends('outer-layout')

@section('title', 'Outer Home')

@section('context')

<head>
    <style>

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #ececec;
            border-radius: 20px 20px;
            margin-top: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 500px;
            position: relative;
        }

        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-container img {
            width: 150%;
            height: 150%;
            object-fit: contain;
        }

        .img-container .text-overlay {
            position: absolute; /* Position the text absolutely */
            top: 50%; /* Position the text vertically in the middle */
            left: 50%; /* Position the text horizontally in the middle */
            transform: translate(-50%, -50%); /* Center the text precisely */
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

    </style>
</head>
<body style="background-image: url('Images/bg.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="img-container">
            <img src="{{ asset('Images/home.png') }}">
            <div class="text-overlay text-white justify-content-center align-items-center fw-bold fs-1" style="color: black">
                Welcome to SportsBook!!
            </div>
        </div>
    </div>
</body>
@endsection

