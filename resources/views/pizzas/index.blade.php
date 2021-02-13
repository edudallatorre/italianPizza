@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
    <a href="/pizzas/{{ $pizza->id }}"><img src="/img/pizza.png" alt="pizza icon">
       <h4>{{ $pizza->name }} - <b style="font-size: 12pt;">Waiting</b></a></h4> 
    </div>
  @endforeach

</div>
@endsection