@extends('layout')

@section('title', 'Create new Arena')

@section('context')


<style>
    .gray1{
        background-color: #ececec;
    }

    .card{
        padding: 30px 40px;
        margin-top: 60px;
        margin-bottom: 60px;
        border: none !important;
        box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2);
        
    }

    .form-control-label{
        margin-bottom: 0
    }
    
    input, textarea, button{
        padding: 8px 15px;
        border-radius: 5px !important;
        margin: 5px 0px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        font-size: 18px !important;
        font-weight: 300
    }
    
    input:focus, textarea:focus{
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #00BCD4;
        outline-width: 0;
        font-weight: 400
    }
    
    .btn-block{
        text-transform: uppercase;
        font-size: 15px !important;
        font-weight: 400;
        height: 43px;
        cursor: pointer
    }
    
    .btn-block:hover{
        color: #fff !important
    }
    
    button:focus{
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    select.input-group-text{
        background-color: white;
    }

    input{
        background-color: white;
    } */
</style>

<div id="box1" class = "mt-3 mb-2">
    <div class="container">
        <div class="card gray1">
            <h1 class="text-center mb-4 text-info">Update {{ $arena->arena_name }}</h1>
            <form method="post" action="/home/my-arenas/{{ $arena->arena_id }}" class="form-card" enctype="multipart/form-data">
                @method('put')  
                @csrf
                <input type="hidden" id = "store_name" name = "store_name" value =" {{ $user->store_name }}">
                <div class="row justify-content-between text-left">
                    <div class="form-group col-12 flex-column d-flex"> 
                        <label class="form-control-label px-3">Arena Name</label> 
                        <input type="text" class="form-control @error('arena_name') is-invalid @enderror" id="arena_name" name="arena_name" placeholder="Enter Arena Name..." required autofocus value ="{{ old('arena_name',$arena->arena_name) }}"> 
                        @error('arena_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-between text-left">
                    <div class="form-group col-12 flex-column d-flex"> 
                        <label class="form-control-label px-3">Arena Address</label> 
                        <input type="text" class="form-control @error('arena_address') is-invalid @enderror" id="arena_address" name="arena_address" placeholder="Enter Arena Address..." required autofocus value ="{{ old('arena_address',$arena->arena_address) }}"> 
                        @error('arena_address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-between text-left">
                    <div class="form-group col-12 flex-column d-flex"> 
                        <label class="form-control-label px-3">Arena Phone</label> 
                        <input type="text" class="form-control @error('arena_phone') is-invalid @enderror" id="arena_phone" name="arena_phone" placeholder="Enter Arena Phone..." required autofocus value ="{{ old('arena_phone',$arena->arena_phone) }}"> 
                        @error('arena_phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-between text-left">
                    <div class="form-group col-12 flex-column d-flex"> 
                        <label class="form-control-label px-3">Arena Price</label> 
                        <input type="number" class="form-control @error('arena_price') is-invalid @enderror" id="arena_price" name="arena_price" placeholder="Enter Arena Price..." required value ="{{ old('arena_price',$arena->arena_price) }}"> 
                        @error('arena_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group d-flex flex-lg-row"> 
                        <label class="input-group-text border-0"> 
                            <i>Arena Category Type</i>
                        </label>
                        <select class= "form-control input-group-text text-left" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                @if(old('category_id')==$category->category_id)
                                    <option value="{{ $category->category_id }}" selected>{{ $category->category_name }}</option>
                                @else
                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>    
                </div>
                
                <div class="row col mt-3">
                    {{-- <div class="form-group col-sm-5 flex-column d-flex">
                        <img src="" class="img-preview img-fluid d-block">
                    </div> --}}
                    <div class="form-group col-12 flex-column d-flex">
                        <input type="file" class="custom-file-input form-control @error('arena_image') is-invalid @enderror" id="arena_image" name="arena_image" onchange = "previewImage()">
                        @error('arena_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                @if(session()->has('error'))
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div class="row justify-content-end">
                    <div class="form-group col-12"> <button type="submit" class="btn-success">Update Arena</button> </div>
                </div>
                
            </form>
        </div>
    </div>
</div>    

    <script>
        const title =document.querySelector('#title');
        const slug =document.querySelector('#slug');
    
        title.addEventListener('change',function(){
            fetch("/dashboard/checkSlug?title=" + title.value)
                .then(response=>response.json())
                .then(data => slug.value = data.slug)
        });
    
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    

        function previewImage(){
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')
            
            imgPreview.style.display = 'block';
    
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
    
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
    
        }
        
        
    </script>
@endsection
