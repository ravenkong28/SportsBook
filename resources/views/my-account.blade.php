@extends('layout')

@section('title', 'My Account')

@section('context')

<body>
    <div class="p-3">
        @foreach ($users as $user)
            <div class="d-flex mt" style="background-color: rgb(243, 210, 61); padding: 20px">
                <h3>Welcome, {{ $user->name }}!!</h3>
            </div>
            <div class="text-container">
                <ul style="list-style: none;">
                    {{-- user image --}}
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Email: {{ $user->email }}</li>
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Password: {{ $user->password }}</li>
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Phone number: {{ $user->phone }}</li>
                    <li class="list-group-item fw-bold" style="color:rgb(85, 82, 82); margin-top: 10px;">Age: {{ $user->age }}</li>
                </ul>
                <a href="/edit-profile" class="button-link" style="background-color: rgb(83, 83, 250)">Edit Profile</a>
                <a href="" class="button-link" style="background-color: red;">Delete Account</a>
            </div>
        @endforeach
    </div>
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
</body>

@endsection
