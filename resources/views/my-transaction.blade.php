@extends('layout')

@section('title', 'My Transaction')

@section('context')


<style>
    #body{
        background-color: #ffffff;
        width:100%
    }
    
    .gray1{
        background-color: #ececec;
    }

    .container {
        height: 100%;
        width: 100%;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td{
        padding: 8px;
        text-align: left;
    }

    th{ 
        border-top: 1px solid #ddd;
        border-top: 1px solid #ddd;
    }
</style>

<body>
    <div class="container">
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
                    <td>{{ $loop->index +1 }}</td>
                    {{-- <td>{{ $transaction->transaction_date }}</td> --}}
                    <td>{{ $transaction->booking_date }}</td>
                    <td>{{ $transaction->booking_time_start }}</td>
                    <td>{{ $transaction->user->name}}</td>
                    <td></td>
                    <td></td>
                    {{-- <td>{{ $transaction->arena->arena_name }}</td>
                    <td>{{ $transaction->arena->category->name }}</td> --}}
                    <td>{{ $transaction->arena_price }}</td>
                    <td>{{ $transaction->qty_time }}</td>
                    <td>{{ $transaction->total_price }}</td>
                </tr>
            @endforeach
        </table>
        </div>
</body>

@endsection
