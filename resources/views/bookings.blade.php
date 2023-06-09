@extends('layout')

@section('title', 'Bookings')

@section('context')

<style>
    .container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: left;
    }

    .img-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #ececec;
            border-radius: 20px 20px;
            margin-top: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            border-radius: 20px 20px;
            margin-top: 30px;
            margin-left: 30px;
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f3d427;
            color: #000000;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease-in-out;
            margin-top: 20px;
            margin-right: 10px;
            justify-content: center;
        }

        .button-link:hover {
            background-color: #efff91;
        }

        .form-container {
            margin-top: 20px;
            margin-left: 50px;
        }

        .text-container-3 {
            margin-top: 30px;
            margin-left: 50px;
        }


</style>

<body>
    <div>
        <div class="container">
            {{-- @foreach ($arenas as $arena) --}}
                <div class="img-container">
                    <img style="width: 100%; height: 200px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}">
                    {{-- <img style="width: 500px; height: 400px;" src="{{ asset('Images/Patra Badminton.jpg') }}"> --}}
                </div>
                <div class="text-container">
                    <ul style="list-style: none;">
                        <li class="list-group-item; fs-2"><b>Users : {{ $user->name }}</b></li> 
                        <li class="list-group-item; fs-2"><b>Arena : {{ $arena->arena_name }}</b></li>
                        <li class="list-group-item"><b>Jalan Arena : {{ $arena->arena_address }}</b></li>
                        <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>Notelp Arena : {{ $arena->arena_phone }}</b></li>
                        <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                        <br>
                        <br>
                        <li class="list-group-item"><b>Date: 06/28/2023</b></li>
                        <li class="list-group-item"><b>Time Start: 07.00 PM (2 Hours)</b></li>
                        <h4 class="list-group-item"><b>Total Price: 120000</b></h4>
                    </ul>
                    <div class="row justify-content-end">
                        <div class="form-group col-12"> <button type="submit" class="btn-block btn-success">Check Out</button> </div>
                    </div>
                </div>
                
            {{-- @endforeach --}}
        </div>
    </div>
</body>

@endsection
