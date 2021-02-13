@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/italian-pizza.png" alt="Italian Pizza logo">
        <div class="title m-b-md">
            Best Pizzas
        </div>
        <p style="color: #6FC42D; font-size: 12pt" class="mssg">{{ session('mssg') }}</p>
        <a style="color: #fff"; href="/pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection
