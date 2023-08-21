@extends('layout')

@section('title', 'Bookings')

@section('context')

<style>
    .button-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f3d427;
        color: #000000;
        text-decoration: none;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
        margin-top: 20px;
    }

    .button-link:hover {
        background-color: #efff91;
    }
</style>
<style>
    .card-link {
        color: rgb(233, 128, 29);
        text-decoration: none;
    }

    .card-link:hover {
        color: rgb(255, 210, 113);
        text-decoration: underline;
    }
</style>

<body>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close"></button>
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close"></button>
        </div>
    @endif
    <div class= "p-3">
        <div class="row justify-content-left align-items-left" style="padding: 20px; border-radius: 20px 20px;">
            <div class="card border-dark mb-3" style="width: 100%; height: auto">
                <div class="row g-0 justify-content-center align-items-center">
                <div class="col-md-4">
                    <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 180px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->category->category_name.'.jpg') }}">
                </div>
                <div class="col-md-8">
                        <div class="card-body">
                            <ul style="list-style: none;">
                                <li class="list-group-item; fs-2"><b>{{ $arena->arena_name }} {{ $arena->category->category_name }}</b></li>
                                <li class="list-group-item" style="margin-top: 20px;"><b>{{ $arena->arena_address }}</b></li>
                                <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $arena->arena_phone }}</b></li>
                                <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                                <li class="list-group-item"><b>Price per hour: Rp. {{ $booking->arena_price }}</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container-2">
                    <div class="text-container-2">
                        <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
                            <h3>Book Here !!</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('finalizebooking',['id'=>$booking->id]) }}" method="POST" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                {{-- <div class="row col-md-4 fw-bold mb-2" style="color: rgb(143, 0, 119);">
                                    <label>Choose your date and time!!</label>
                                    <div class="mt-1">
                                        <input placeholder = "dd/mm/yyyy Example : 30/06/2023" class="form-control" type="text" name="booking_date" id="booking_time_start">
                                    </div>
                                </div>
                                <div class="row col-md-4 fw-bold mb-2" style="color: rgb(143, 0, 119);">
                                    <label>Choose the Start time!!</label>
                                    <div class="mt-1">
                                        <input placeholder = "HH:MM AM/PM Example 07:00 PM" class="form-control" type="text" name="booking_time_start" id="booking_time_start">
                                    </div>
                                </div> --}}
                                <div class="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                                    <label>Choose your start date and time!!</label>
                                    <div class="mt-1">
                                        <input class="form-control @error('booking_date') is-invalid @enderror" type="date" name="booking_date" value ="{{ old('booking_date') }}">
                                        @error('booking_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div clasPs="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                                    <label>Choose the Start time!!</label>
                                    <div class="mt-1 time-icon">
                                        <input type="time" class="form-control @error('booking_time_start') is-invalid @enderror" id="datetimepicker3" name="booking_time_start" value ="{{ old('booking_time_start') }}">
                                        @error('booking_time_start')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div clasPs="col-md-4 fw-bold" style="color: rgb(143, 0, 119);">
                                    <label>Choose the End time!!</label>
                                    <div class="mt-1 time-icon">
                                        <input type="time" class="form-control @error('booking_time_end') is-invalid @enderror" id="datetimepicker3" name="booking_time_end" value ="{{ old('booking_time_end') }}">
                                        @error('booking_time_end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row-md-4 fw-bold">
                                    <button class="button-link fw-bold" type ="submit" style="background-color: rgb(84, 199, 84)">Finalize Book</button>
                                </div>
                            </form>
                            <div class="row-md-4 fw-bold mb-4">
                                <form action="{{ route('deletebooking', ['id' => $booking->id]) }}" method = "POST">
                                    @method('delete')
                                    @csrf
                                    <button class="button-link fw-bold" type ="submit" style="background-color: rgb(199, 84, 84)">Delete Book</button>
                                </form>
                            </div>
                                
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
