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
            @foreach ($arenas as $arena)
                <div class="img-container">
                    <img style="width: 100%; height: 200px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}">
                </div>
                <div class="text-container">
                    <ul style="list-style: none;">
                        <li class="list-group-item; fs-2"><b>{{ $arena->arena_name }} {{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_address }}</b></li>
                        <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $arena->arena_phone }}</b></li>
                        <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="container-2">
            <div class="text-container-2">
                <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
                    <h3>Book Here !!</h3>
                </div>
            </div>
            <div class="row">
                <form class="form-container" action="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                            <label>Choose your date!!</label>
                            <div class="mt-1">
                                <input class="form-control" type="datetime-local" name="date">
                            </div>
                        </div>
                        <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                            <label>Choose the time!!</label>
                            <div class="time-icon">
                                <input type="time" class="form-control" id="datetimepicker3" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119); margin-top: 20px;">
                        <label class="form-label">Number of Fields</label>
                        <div class="mt-1">
                            <input class="form-control" name="number_of_fields">
                        </div>
                    </div>
                </form>
                <div class="text-container-3">
                    <li class="list-group-item"><b>Total Price : </b></li>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px;" value="Save">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
