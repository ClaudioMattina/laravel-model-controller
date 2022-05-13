@extends('layouts.main')

@section('main-content')
@foreach ($movies as $movie)
    

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">{{$movie->original_title}}</p>
        </div>
    </div>

@endforeach
@endsection