@extends('layout.app')

@section('content')
    <h2>comics</h2>
    <div class="container">
        <ul class="list-group mb-2">
            @foreach ($comics as $comic)        
                <li class="list-group-item d-flex align-items-center">
                    <img src="{{$comic->thumb}}" alt="">
                    <h4>{{$comic->title}}</h4>
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-warning">view</a>
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">edit</a>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-danger">del</button>   
                    </form>
                </li>

            @endforeach
        </ul>
        <a href="{{route('comics.create')}}" class="btn btn-dark">create</a>
    </div>
@endsection
