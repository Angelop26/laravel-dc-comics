@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title')}}">
            @error('title')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" id="description" name='description' rows="3" ></textarea>
            @error('description')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}" id="thumb" name="thumb">
            @error('thumb')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" name="price">
            @error('price')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{old('series')}}" id="series" name="series">
            @error('series')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date')}}" id="date" name="sale_date">
            @error('sale_date')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}" id="type" name="type">
            @error('type')                
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">invia</button>
    </form>
</div>
    
@endsection