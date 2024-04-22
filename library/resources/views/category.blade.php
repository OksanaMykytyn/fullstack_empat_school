@extends('layouts')

@section('title', 'Пошук за категорією')
@section('titleBody', 'Пошук за категорією')


@section('content')
<div class="cards">
@foreach ($books as $book)
<div class="card">
    <img class="card-img-top" src="https://picsum.photos/200" alt="Обкладинка книги">
    <div class="card-body">
        <h5 class="card-title">{{$book->title}} <span class="card-age-rating">{{ $name }}</span></h5>
        <p class="card-text">{{$book->description}}</p>
        <div class="card-rating">
            <span>Рейтинг {{$book->rating}}</span>
        </div>
        <div class="card-genres">
            @foreach ($book->genres as $genre)
            <span>{{$genre->name}}</span>
            @endforeach
        </div>
        <p class="card-author">
            @foreach ($book->authors as $author)
            <span>{{$author->name}} ,</span>
            @endforeach
        </p>
        <p class="card-year">{{$book->year_of_publishing}}</p>
    </div>
</div>
@endforeach
</div>
@endsection
