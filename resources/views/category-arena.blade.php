@extends('layout')

@section('title', 'Venues')

@section('context')

<div class="p-3">
    @foreach ($categories as $category)
        <div class="d-flex mt" style="background-color: rgb(243, 210, 61)">
            <h3>{{ $category->category_name }}</h3>
        </div>
    @endforeach

    <div class="row">
        @foreach ($arenas as $arena)
            <div class="col-3">
                <div class="card text-center" style="width: 18rem;">
                    <img src="{{ asset('Images/'.$arena->arena_name.$arena->arena_type.'.png') }}">
                    <div class='d-flex flex-column'>
                        <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_address }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_phone }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_rating }}/5</b></li>
                        <div class="card-body">
                        <a href="" class="button-link">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .button-link {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #f3d427;
                    color: #000000;
                    text-decoration: none;
                    border-radius: 4px;
                    transition: all 0.3s ease-in-out;
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
        @endforeach
    </div>
</div>

@endsection
