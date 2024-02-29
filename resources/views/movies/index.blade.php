@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    Movies
</h1>

<div class="row">
    @foreach($movies as $movie)
    <div class='col-12 col-sm-3 mb-3'>
        {{$movie->title}}
    </div>
    @endforeach
</div>
@endsection