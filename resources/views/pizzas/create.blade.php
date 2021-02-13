@extends('layouts.app')

@section('content')    
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="post">
     @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Choose pizza type:</label>
    <select name="type" id="type">
    <option value="diavola">Diavola</option>
    <option value="capricciosa">Capricciosa</option>    
    <option value="margherita">Margherita</option>
        <option value="marinara">Marinara</option>
        <option value="quattro formaggi">Quattro Formaggi</option>
    </select> 
    <label for="type">Choose base type:</label>
    <select name="base" id="base">
    <option value="Cheesy Crust">Cheesy Crust</option>
    <option value="Garlic Crust">Garlic Crust</option>    
    <option value="Thin & Crispy">Thin & Crispy</option>
     <option value="Thick">Thick</option>
    </select>     
    <fieldset>
        <label>Extra Toppings:<label>
            <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers"> peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic"> garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives"> olives<br/>
    </fieldset>
    <input type="submit" value="Order Pizza">
    </form> 
</div>
@endsection


