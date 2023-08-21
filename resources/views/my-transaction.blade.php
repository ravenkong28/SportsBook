@extends('layout')

@section('title', 'My Transaction')

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
    @endif
    <div class = "mb-5">
        <h4 class="list-group-item; fs-2" style="padding: 20px;"><b>Finished Payment</b></h4>
        @foreach ($transactions as $transaction)
            @if($transaction->status_payment == 1)
                <div class= "p-3">
                    <div class="row justify-content-left align-items-left" style="padding: 20px; border-radius: 20px 20px;">
                        <div class="card mb-3" style="width: 100%; height: auto">
                            <div class="row g-0 justify-content-center align-items-center">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 300px;" src="{{ asset('Images/'.$transaction->arena->arena_name.' '.$transaction->arena->category->category_name.'.jpg') }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li class="list-group-item; fs-2"><b>{{ $transaction->arena->arena_name }} {{ $transaction->arena->category->category_name }}</b></li>
                                        <li class="list-group-item;"><b>Store Name : {{ $transaction->arena->store_name }}</b></li>
                                        <li class="list-group-item" style="margin-top: 20px;"><b>{{ $transaction->arena->arena_address }}</b></li>
                                        <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $transaction->arena->arena_phone }}</b></li>
                                        <li class="list-group-item"><b>Rating: {{ $transaction->arena->arena_rating }}/5</b></li>
                                        <li class="list-group-item"><b>Price per hour: Rp. {{ $transaction->arena->arena_price }}</b></li>
                                        <li class="list-group-item"><b>Start Date: {{ $transaction->booking_date }}</b></li>
                                        <li class="list-group-item"><b>Start Time: {{ $transaction->booking_time_start }}</b></li>
                                        <li class="list-group-item"><b>End Time: {{ $transaction->booking_time_end }}</b></li>
                                        <li class="list-group-item"><b>Duration: {{ $transaction->qty_time }}Hour(s)</b></li>
                                        <br>
                                        <h5 class="list-group-item"><b>Total Price: Rp. {{ $transaction->total_price }}</b></h5>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(61, 243, 85)">
                                <h3>Payment Success !</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>               
            @endif
        @endforeach
    </div>
    <div class = "mb-5">
        <h4 class="list-group-item; fs-2" style="padding: 20px;"><b>Need Payment</b></h4>
        @foreach ($transactions as $transaction)
            @if($transaction->status_payment == 0)
                <div class= "p-3">
                    <div class="row justify-content-left align-items-left" style="padding: 20px; border-radius: 20px 20px;">
                        <div class="card mb-3" style="width: 100%; height: auto">
                            <div class="row g-0 justify-content-center align-items-center">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 300px;" src="{{ asset('Images/'.$transaction->arena->arena_name.' '.$transaction->arena->category->category_name.'.jpg') }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul style="list-style: none;">
                                        <li class="list-group-item; fs-2"><b>{{ $transaction->arena->arena_name }} {{ $transaction->arena->category->category_name }}</b></li>
                                        <li class="list-group-item;"><b>Store Name : {{ $transaction->arena->store_name }}</b></li>
                                        <li class="list-group-item" style="margin-top: 20px;"><b>{{ $transaction->arena->arena_address }}</b></li>
                                        <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $transaction->arena->arena_phone }}</b></li>
                                        <li class="list-group-item"><b>Rating: {{ $transaction->arena->arena_rating }}/5</b></li>
                                        <li class="list-group-item"><b>Price per hour: Rp. {{ $transaction->arena->arena_price }}</b></li>
                                        <li class="list-group-item"><b>Start Date: {{ $transaction->booking_date }}</b></li>
                                        <li class="list-group-item"><b>Start Time: {{ $transaction->booking_time_start }}</b></li>
                                        <li class="list-group-item"><b>End Time: {{ $transaction->booking_time_end }}</b></li>
                                        @if ($transaction->qty_time > 1)
                                            <li class="list-group-item"><b>Duration: {{ $transaction->qty_time }} Hour(s)</b></li>
                                        @else
                                            <li class="list-group-item"><b>Duration: {{ $transaction->qty_time }} Hour</b></li>
                                        @endif
                                        <br>
                                        <h5 class="list-group-item"><b>Total Price: Rp. {{ $transaction->total_price }}</b></h5>
                                        <div class="fw-bold mb-4 ">
                                            <a href ="{{ route('confirmpayment',['id'=>$transaction->id]) }}" class="button-link fw-bold btn-lg" type ="submit" style="background-color: rgb(84, 149, 199)">Pay</a>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            @endif
        @endforeach
    </div>
    
    {{-- <div class="container">
        <h1 class="text-center mb-4 text-info">Transaction History</h1>   
        <table class = "mb-4 table table-hover">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Booking Date</th>
                    <th>Start Time</th>
                    <th>Username</th>
                    <th>Arena Name</th>
                    <th>Arena Category</th>
                    <th>Price</th>
                    <th>Hour(s)</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->transaction_date }}</td>
                    <td>{{ $transaction->booking_date }}</td>
                    <td>{{ $transaction->booking_time_start }}</td>
                    <td>{{ $transaction->user->name}}</td>
                    <td></td>
                    <td></td>
                    <td>{{ $transaction->arena->arena_name }}</td>
                    <td>{{ $transaction->arena->category->category_name }}</td>
                    <td>{{ $transaction->arena_price }}</td>
                    <td>{{ $transaction->qty_time }}</td>
                    <td>{{ $transaction->total_price }}</td>
                </tr>
            @endforeach
        </table>
    </div> --}}
</body>

@endsection
