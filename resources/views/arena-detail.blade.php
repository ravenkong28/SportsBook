@extends('layout')

@section('title', 'Arena Detail')

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
                        <form action="{{ route('addbooking',['id'=>$arena->arena_id]) }}" method="POST">
                            @csrf
                            <input type="hidden" value ="1" name = "qty_time">
                            <input type="submit" value ="Book now" class="button-link fw-bold" style="background-color: rgb(84, 199, 84)">
                        </form> 
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="container-2">
            @foreach ($arenas as $arena)
            <div class="text-container-2">
                <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
                    <h3>Details</h3>
                </div>
                <ul style="list-style: none;">
                    <li class="list-group-item; fs-4" style="margin-bottom: 10px; margin-top: 10px"><b>Price:</b></li>
                    <li class="list-group-item"><b>Price Monday-Sunday, 09:00 AM - 09:00 PM</li>
                    <li class="list-group-item" style="color: rgb(153, 0, 0)"><b>Rp {{ $arena->arena_price }},-</li>
                    <li class="list-group-item"><b>Jumlah Lapangan : {{ $arena->number_of_fields }}</b></li>
                </ul>
                {{-- <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
                    <h3>Reviews</h3>
                </div> --}}
            </div>
            @endforeach
        </div>
    </div>
</body>

@endsection
