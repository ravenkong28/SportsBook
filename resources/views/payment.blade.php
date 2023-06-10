@extends('layout')

@section('title', 'My Account')

@section('context')

<style>
    .text-container {
        margin-top: 20px;
    }
    .button-link {
                display: inline-block;
                padding: 10px 20px;
                color: white;
                text-decoration: none;
                border-radius: 4px;
                transition: all 0.3s ease-in-out;
                margin-top: 20px;
                margin-left: 20px;
            }

            .button-link:hover {
                background-color: #efff91;
            }
</style>

<body>
    <div class="p-3">
        <div class="text-center mb-4">
            <h3 class = "mb-2 ">Scan QR barcode to confirm payment</h3>
            <img class="mb-2 img-fluid rounded-start justify-content-center align-items-center" style="width: 25%; height: 10%;" src="{{ asset('Images/qris.png') }}">
            <br>
            <img class="mb-2 img-fluid rounded-start justify-content-center align-items-center" style="width: 20%; height: 20%;" src="{{ asset('Images/qr_code.png') }}">
        </div>
        <div class="text-container">
            <ul style="list-style: none;">
                <h5 class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Transaction Information :</h5>
                <li class="list-group-item;"><b>{{ $transaction->arena->arena_name }} {{ $transaction->arena->arena_type }}</b></li>
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
            </ul>
            <form action="{{ route('donepayment', ['id'=>$transaction->id]) }}" method ="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row-md-4 fw-bold mb-4">
                    <button class="button-link fw-bold btn-lg" type ="submit" style="background-color: rgb(84, 149, 199)">Done Payment</button>
                </div>
            </form>
        </div>
    </div>
</body>

@endsection
