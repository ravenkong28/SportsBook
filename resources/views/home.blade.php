@extends('layout')

@section('title', 'Home')

@section('context')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
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
    .card-link {
        color: rgb(233, 128, 29);
        text-decoration: none;
    }

    .card-link:hover {
        color: rgb(255, 210, 113);
        text-decoration: underline;
    }

    .d-flex {
        padding: 10px;
    }

    .banner {
      max-width: 100%;
      overflow: hidden;
    }
    .banner img {
        width: 100%;
        height: 100px;
    }
</style>


<body>
    {{-- @auth
        @can('admin')
        
        <h1> Hello admin</h1>
        @else
        
        <h1> Hello customer</h1>
        @endcan
    @endauth --}}

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close"></button>
        </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close"></button>
        </div>
    @endif

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @if ($arenas->count())
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="860" src="{{ asset('Images/'.$arenas[0]->arena_name.' '.$arenas[0]->arena_type.'.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="50%" fill="var(--bs-secondary-color)"/></img>
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <li class="list-group-item fw-bold"><b>{{ $arenas[0]->arena_type }}</b></li>
                            <li class="list-group-item "><b>{{ $arenas[0]->arena_name }}</b></li>
                            <h4>Weekdays 09.00 - 22.00</h4>
                            <h4>Weekends 08.00 - 21.00</h4>
                            <h4>Special Price!! <h4 class = text-danger>Rp200.000 -> Rp140.000</h4></h4>
                            <p><a class="btn btn-lg btn-primary" href="#">Book Now!!</a></p>
                        </div>
                    </div>
                </div>
                @foreach ($arenas->skip(1) as $arena)
                    <div class="carousel-item">
                        <img class="bd-placeholder-img" width="100%" height="860" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="50%" fill="var(--bs-secondary-color)"/></img>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                                <li class="list-group-item "><b>{{ $arena->arena_name }}</b></li>
                                <h4>Weekdays 09.00 - 22.00</h4>
                                <h4>Weekends 08.00 - 21.00</h4>
                                <h4>Special Price!! <h4 class = text-danger>Rp200.000 -> Rp140.000</h4></h4>
                                <p><a class="btn btn-lg btn-primary" href="#">Book Now!!</a></p>
                            </div>
                        </div>
                    </div>    
                @endforeach
            @endif  
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="p-3">
        <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
            <h3>Top Arenas</h3>
        </div>
        <div class="row justify-content-center align-items-center" style="padding: 20px">
            @foreach ($arenas2 as $arena)
                <div class="col-3">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" style="width: 100%; height: 200px;" src="{{ asset('Images/'.$arena->arena_name.' '.$arena->arena_type.'.jpg') }}">
                        <div class="card-body">
                            <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                            <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                            <li class="list-group-item"><b>{{ $arena->arena_address }}</b></li>
                            <li class="list-group-item" style="color: rgb(255, 144, 54)"><b>{{ $arena->arena_phone }}</b></li>
                            <li class="list-group-item" style="color: rgb(29, 29, 170)"><b>Rating: {{ $arena->arena_rating }}/5</b></li>

                            {{-- @can('admin')
                                <a href="/home/{{ $arena->arena_id }}/edit" class="button-link fw-bold" style="background-color: rgb(84, 199, 84)">Update</a>
                                <form action="/home/{{ $arena->arena_id }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="button-link fw-bold">Delete</button>
                                </form>
                            @else --}}
                                {{-- <form action="/create-booking/{{ $arena->arena_id }}" method ="POST">
                                    @csrf
                                    <input type="hidden" name = "arena_id" value="{{ $arena->arena_id }}">
                                    <button class="button-link fw-bold" style="background-color: rgb(84, 199, 84)">Book Now</button>
                                </form>  --}}
                            <form action="{{ route('addbooking',['id'=>$arena->arena_id]) }}" method="POST">
                                @csrf
                                <input type="hidden" value ="1" name = "qty_time">
                                <input type="submit" value ="Book now" class="button-link fw-bold" style="background-color: rgb(84, 199, 84)">
                            </form>
                                <a href="/arena-detail/{{ $arena->arena_id }}" class="button-link fw-bold">Detail</a>
                            {{-- @endcan --}}
                            
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $arenas2->links() }}
            </div>    
        </div>
    </div>
</body>

@endsection
