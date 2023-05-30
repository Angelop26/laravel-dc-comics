@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea class="form-control" id="description" name='description' rows="3"> {{$comic->description}} </textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">date</label>
            <input type="text" class="form-control" id="date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-success">invia</button>
    </form>
</div>
    
@endsection