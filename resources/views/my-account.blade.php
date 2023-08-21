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

@can('admin')
    <body>
        <div class="p-3">
            <h3>My Admin Store</h3>
        </div>
        <div class="p-3">
            @foreach($users as $user)
                <div class="text-container">
                    <ul style="list-style: none;">
                        <img class = "rounded-circle mx-auto d-block" src="{{ asset('storage/'.$user->image) }}" width="225" heigth = "225">
                        <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Name Account: {{ $user->name }}</li>
                        
                        <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Email: {{ $user->email }}</li>
                        {{-- <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Password: {{ $user->password }}</li> --}}
                        <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Phone number: {{ $user->phone }}</li>
                        <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Age: {{ $user->age }}</li>
                    </ul>
                    <a href="/my-account/{{ $user->id }}/edit" class="button-link" style="background-color: rgb(83, 83, 250)">Edit Profile</a>
                    <form action="/my-account/{{ $user->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <a href="" class="button-link" style="background-color: red;">Delete Account</a>
                    </form>
                </div>
            @endforeach
        </div>
    </body>
@else
    <body>
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close"></button>
            </div>
        @endif
        <div class="p-3">
            <div class="d-flex mt" style="background-color: rgb(243, 210, 61); padding: 20px">
                <h3>Welcome, {{ $user->name }}!!</h3>
                
            </div>
            <div class="text-container">
                
                <ul style="list-style: none;">
                    <img class = "rounded-circle mx-auto d-block" src="{{ asset('storage/'.$user->image) }}" width="225" heigth = "225">
            
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Email: {{ $user->email }}</li>
                    {{-- <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Password: {{ $user->password }}</li> --}}
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Phone number: {{ $user->phone }}</li>
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Age: {{ $user->age }}</li>
                </ul>
                <a href="/my-account/{{ $user->id }}/edit" class="button-link" style="background-color: rgb(83, 83, 250)">Edit Profile</a>
            </div>
        </div>
        
    </body>
@endcan


@endsection
