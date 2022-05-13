@extends('layouts.main')

@section('main-content')

<div class="row text-center">
    @foreach ($movies as $movie)
    

    <div class="card col-3 m-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">{{$movie->original_title}}</p>
        </div>
    </div>

@endforeach
</div>

@endsection