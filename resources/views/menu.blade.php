@extends('layout')

@section('content')
<h1>Menu</h1>

<a href="{{ route('menu.create') }}">Nieuw gerecht</a>

@foreach($dishes as $dish)
    <div>
        <h2>{{ $dish->name }}</h2>
        <p>{{ $dish->description }}</p>
        <p>€{{ $dish->price }}</p>

        <a href="{{ route('menu.edit', $dish->id) }}">Bewerken</a>

        <form action="{{ route('menu.destroy', $dish->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Verwijderen</button>
        </form>
    </div>
@endforeach

@endsection