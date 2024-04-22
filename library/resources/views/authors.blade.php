@extends('layouts')

@section('title', 'Автори')
@section('titleBody', 'Автори')


@section('content')
<div class="cards-author">
    @foreach ($authors as $author)
    <div class="author-card">
        <h5 class="author-name">{{$author->name}}</h5>
        <p class="author-country">{{$author->country->name}}</p>
    </div>
    @endforeach
</div>
@endsection