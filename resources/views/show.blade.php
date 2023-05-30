@extends('layout.app')

@section('content')
    <h2 class="text-center">show</h2>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">{{$comic->title}}</li>
            <li class="list-group-item">{{$comic->description}}</li>
            <li class="list-group-item">{{$comic->price}}</li>
            <li class="list-group-item"> {{$comic->sale_date}} </li>
            <li class="list-group-item"> {{$comic->type}} </li>
            <li class="list-group-item"> {{$comic->series}} </li>
        </ul>
        <a href="{{route('comics.index')}}" class="btn btn-dark">torna alla home</a>
    </div>
@endsection