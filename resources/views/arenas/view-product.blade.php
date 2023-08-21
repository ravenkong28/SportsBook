@extends('layouts.main')

@section('header')
    @include('partials.navbar')
@endsection

<style>
    #div{
        background-color: #ffffff;
    }
    img.mx-auto{
        width:100%;
        height:225;
    }
</style>

@section('content')
    {{-- @can('admin') --}}
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role = "alert">
                {{ session('success') }}
                <button type = "button" class="btn-close" data-bs-dismiss="alert" arta-label="Close">
                </button>
            </div>
        @endif    
    {{-- @endcan --}}

    <h1 class="text-info text-center">Our Products</h1>    
    @can('admin')
        <div class="text-center">
            <a class="btn btn-success mt-2" href="/home/view-products/create">
                Add Product
            </a>
        </div>
    @endcan
    
    @if($items->count())
        <div class="album py-5 bg-body">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($items as $item)
                        <div class="col mb-3">
                            <div class="card shadow-sm">
                                <img class = "rounded mx-auto d-block" src="{{ asset('storage/'.$item->arena_image) }}" width="100%" heigth = "225">
                                <div class="card-body">
                                    <a href="/home/view-products/{{ $item->slug }}">{{ $item->name }}</a>
                                    <p class="card-price text-warning mt-auto">{{ $item->price }}</p>
                                    <p></p>
                                    <p class="card-desc">{{ $item->desc }}</p>
                                    @can('admin')
                                        <a class="btn btn-primary text-white" href="/home/view-products/{{ $item->slug }}/edit">Update</a>
                                        <form action="/home/view-products/{{ $item->slug }}" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger text-white" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    @else
                                        <a class="btn btn-info text-Pwhite" href="#">Add to cart
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="d-flex justify-content-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    @else
    <div class="album py-lg-5 bg-body">
        <p class = "text-center fs-4">No Items Found</p>
    </div>
        
    @endif

@endsection

@section('footer')
    @include('partials.footer')
@endsection