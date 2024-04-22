@extends('layouts')

@section('title', 'Жанри')
@section('titleBody', 'Жанри')


@section('content')
<div class="card-genres">
    @foreach ($genres as $genre)
    <a href="#" class="card-genre">{{$genre->name}}</a>
    @endforeach
</div>
@endsection