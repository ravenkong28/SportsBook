@extends('layout')

@section('title', 'My Arenas')

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

    <div class="p-3">
        <h3>My Arenas</h3>
    </div>
    <a href="/home/my-arenas/create" class="btn btn-success text-white" style="margin-left: 20px;">Add Arena</a>
    @foreach ($arenas as $arena)
        <div class="row justify-content-left align-items-left" style="padding: 20px; border-radius: 20px 20px;">
            <div class="card border-dark mb-3" style="width: 80%; height: auto">
            <div class="row g-0 justify-content-center align-items-center">
                @if($arena->arena_image)
                <div class="col-md-4">
                    <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 180px;" src="{{ asset('storage/'.$arena->arena_image) }}">
                </div>
                @else
                <div class="col-md-4">
                    <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 180px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->category->category_name.'.jpg') }}">
                </div>
                @endif
                <div class="col-md-8">
                    <div class="card-body">
                        <ul style="list-style: none;">
                            <li class="list-group-item; fs-2"><b>ID: {{ $arena->arena_id }}</b></li>
                            <li class="list-group-item; fs-2"><b>{{ $arena->arena_name }} {{ $arena->category->category_name }}</b></li>
                            <li class="list-group-item" style="margin-top: 20px;"><b>{{ $arena->arena_address }}</b></li>
                            <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $arena->arena_phone }}</b></li>
                            <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                            <a class="btn btn-primary text-white" href="/home/my-arenas/{{ $arena->arena_id }}/edit">Update</a>
                            <form action="route('deleteArena')" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger text-white" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
