@extends('layout')

@section('content')
<h1>Nieuw gerecht</h1>

<form method="POST" action="{{ route('menu.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Naam">
    <input type="text" name="description" placeholder="Beschrijving">
    <input type="text" name="price" placeholder="Prijs">

    <button type="submit">Opslaan</button>
</form>
@endsection