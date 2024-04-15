@use('App\Models\Product')
@use('App\Http\Controllers\MyController')

@extends('layout')

@section('title', 'Замовити')
@section('titleBody', 'Замовити')

@section('content')
<form action="/order/send" method="POST" class="order">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Повідомлення:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit" value="on" name="submit">Надіслати</button>
  </form>
@endsection