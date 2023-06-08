@extends('outer-layout')

@section('title', 'About Us')

@section('context')

<body>
    <div class="d-flex align-items-center justify-content-center" style="padding: 200px">
        <div class="flex-grow-1 ms-3">
            <ul style="list-style: none;">
                <li class="list-group-item fw-bold fs-1" style="color: rgb(85, 82, 82)">SportsBook</li>
                <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82)">We provide the best sports arena booking service!!</li>
            </ul>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ asset('Images/Home.png') }}" style="width: 400px; height: auto;">
        </div>

    </div>
</body>

@endsection
