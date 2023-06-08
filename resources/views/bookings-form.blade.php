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
        @foreach ($arenas as $arena)
        <div class="container">
                <div class="img-container">
                    <img style="width: 500px; height: 400px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}">
                </div>
                <div class="text-container">
                    <ul style="list-style: none;">
                        <li class="list-group-item; fs-2"><b>User : {{ $name }}</b></li> 
                        <li class="list-group-item; fs-2"><b>Arena : {{ $arena->arena_name }} {{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>Jalan : {{ $arena->arena_address }}</b></li>
                        <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $arena->arena_phone }}</b></li>
                        <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                    </ul>
                </div>
        </div>
        <div class="container-2">
            <div class="text-container-2">
                <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
                    <h3>Book Here !!</h3>
                </div>
            </div>
            <div class="row">
                <form class="/booking/{{ $arena->arena_id }}" action="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <input type="hidden" name = "arena_id" value="{{ $arena->arena_id }}">
                        <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                            <label>Choose your date and time!!</label>
                            <div class="mt-1">
                                <input class="form-control" type="date" name="booking_date">
                            </div>
                        </div>
                        <div clasPs="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                            <label>Choose the Start time!!</label>
                            <div class="mt-1 time-icon">
                                <input type="time" class="form-control" id="datetimepicker3" name="booking_time_start">
                            </div>
                        </div>
                        {{-- <div clasPs="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                            <label>Choose the End time!!</label>
                            <div class="mt-1 time-icon">
                                <input type="time" class="form-control" id="datetimepicker3" name="time_end">
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119); margin-top: 20px;">
                        <label class="form-label" for="qty_time">How many hours do you want to book ?</label>
                        <input type="number" name="qty_time" class="form-control">
                    </div>
                    <button class="button-link fw-bold mb-5" type ="submit" style="background-color: rgb(84, 199, 84)">Finalized Book</button>
                </form>
            </div>
        </div>
        
        @endforeach
    </div>
</body>

@endsection
