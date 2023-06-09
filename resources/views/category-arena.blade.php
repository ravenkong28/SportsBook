@extends('layout')

@section('title', 'Venues')

@section('context')

<div class="p-3">
    @foreach ($categories as $category)
        <div class="d-flex mt" style="background-color: rgb(243, 210, 61); border-radius: 20px 20px;">
            <h3 class="fw-bold" style="margin-left: 30px; padding: 15px;">{{ $category->category_name }}</h3>
        </div>
    @endforeach

    @foreach ($arenas as $arena)
    <div class="row justify-content-left align-items-left" style="padding: 20px; border-radius: 20px 20px;">
            <div class="card border-dark mb-3" style="width: 80%; height: auto">
                <div class="row g-0 justify-content-center align-items-center">
                  <div class="col-md-4">
                    <img class="img-fluid rounded-start justify-content-center align-items-center" style="width: 100%; height: 180px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}">
                  </div>
                  <div class="col-md-8">
                        <div class="card-body">
                            <ul style="list-style: none;">
                                <li class="list-group-item; fs-2"><b>{{ $arena->arena_name }} {{ $arena->arena_type }}</b></li>
                                <li class="list-group-item" style="margin-top: 20px;"><b>{{ $arena->arena_address }}</b></li>
                                <li class="list-group-item" style="color: rgb(146, 0, 0)"><b>{{ $arena->arena_phone }}</b></li>
                                <li class="list-group-item"><b>Rating: {{ $arena->arena_rating }}/5</b></li>
                                <form action="{{ route('addbooking',['id'=>$arena->arena_id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" value ="1" name = "qty_time">
                                    <input type="submit" value ="Book now" class="button-link fw-bold" style="background-color: rgb(84, 199, 84)">
                                </form>
                                <a href="/arena-detail/{{ $arena->arena_id }}" class="button-link fw-bold" style="margin-left: 20px;">Detail</a>
                            </ul>
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
    </div>
    @endforeach
</div>

@endsection
