@extends('layout')

@section('title', 'Home')

@section('context')

<body>
    @foreach ($arenas as $arena)
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="860" src="{{ asset('Images/'.$arena->arena_name.$arena->arena_type.'.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="50%" fill="var(--bs-secondary-color)"/></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                        <h4>Weekdays 09.00 - 22.00</h4>
                        <h4>Weekends 08.00 - 21.00</h4>
                        <h4>Special Price!! <h4 class = text-danger>Rp200.000 -> Rp140.000</h4></h4>
                        <p><a class="btn btn-lg btn-primary" href="#">Book Now!!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="860" src="{{ asset('Images/'.$arena->arena_name.$arena->arena_type.'.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="50%" fill="var(--bs-secondary-color)"/></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                        <h4>Weekdays 10.00 - 21.00</h4>
                        <h4>Weekends 09.00 - 21.00</h4>
                        <h4>Special Price!! <h4 class = text-danger>Rp200.000 -> Rp140.000</h4></h4>
                        <p><a class="btn btn-lg btn-primary" href="#">Book Now!!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="860" src="{{ asset('Images/'.$arena->arena_name.$arena->arena_type.'.jpg') }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="50%" fill="var(--bs-secondary-color)"/></img>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                        <h4>Weekdays 09.00 - 22.00</h4>
                        <h4>Weekends 08.00 - 21.00</h4>
                        <h4>Special Price!! <h4 class = text-danger>Rp200.000 -> Rp140.000</h4></h4>
                        <p><a class="btn btn-lg btn-primary" href="#">Book Now!!</a></p>
                    </div>
                </div>
            </div>
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
    @endforeach
    <div class="p-3">
        <div class="d-flex mt-3 justify-content-center align-items-center" style="background-color: rgb(243, 210, 61)">
            <h3>Top Arenas</h3>
        </div>
        <div class="row justify-content-center align-items-center" style="padding: 20px">
            @foreach ($arenas as $arena)
                <div class="col-3">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="{{ asset('Images/'.$arena->arena_name.$arena->arena_type.'.jpg') }}">
                        <li class="list-group-item fw-bold"><b>{{ $arena->arena_type }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_name }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_address }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_phone }}</b></li>
                        <li class="list-group-item"><b>{{ $arena->arena_rating }}/5</b></li>
                        <div class="card-body">
                        <a href="" class="button-link">Detail</a>
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
                <style>
                    .d-flex {
                        padding: 10px;
                    }
                </style>
                <style>
                    .banner {
                      max-width: 100%;
                      overflow: hidden;
                    }
                    .banner img {
                      width: 100%;
                      height: 100px;
                    }
                  </style>

            @endforeach
        </div>
    </div>
</body>

@endsection
