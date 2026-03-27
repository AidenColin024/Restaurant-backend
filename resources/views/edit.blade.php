@extends('layout')

@section('content')
<h1>Bewerk gerecht</h1>

<form method="POST" action="{{ route('menu.update', $dish->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $dish->name }}">
    <input type="text" name="description" value="{{ $dish->description }}">
    <input type="text" name="price" value="{{ $dish->price }}">

    <button type="submit">Opslaan</button>
</form>
@endsection