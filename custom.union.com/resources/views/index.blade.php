@use('App\Models\Product')
@use('App\Http\Controllers\MyController')

@extends('layout')

@section('title', 'Дизайни')
@section('titleBody', 'Дизайни')


@section('content')
@foreach ($products as $product) 
<div class="card">
    <img src='{{$product->getImagePath()}}' alt="sneakers" class="card__img">
    <div class="card__title">
        <h4><a href="#">{{$product->getName()}}</a></h4>
        <p>Дата виготовлення - {{$product->getProductionTime()}} дні</p>
    </div>
    <div class="card__detail">
        <div class="card__detail__price">
        {{$product->getPrice()}}
            <img src="../icons/ua_money.svg" alt="" class="money">
        </div>
        <img src="../icons/basket.svg" alt="basket" class="card__detail__basket"></img>
    </div>
</div>
    @endforeach 


@endsection

@section('filter') 
@include('filter')
@endsection