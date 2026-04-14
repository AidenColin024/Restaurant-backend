@extends('layout')

@section('content')

<div class="menu-section">
    <div class="menu-header">
        <div>
            <span class="section-label">Ons aanbod</span>
            <h1>Menu</h1>
        </div>
        <a href="{{ route('menu.create') }}" class="btn">+ Nieuw gerecht</a>
    </div>

    @foreach($dishes as $dish)
        <div class="dish-row">
            <div class="dish-info">
                <h2>{{ $dish->name }}</h2>
                <p class="description">{{ $dish->description }}</p>
                <p class="price">€{{ $dish->price }}</p>
            </div>
            <div class="dish-actions">
                <a href="{{ route('menu.edit', $dish->id) }}" class="btn btn-ghost">Bewerken</a>
            </div>
            <div class="dish-actions">
                <form action="{{ route('menu.destroy', $dish->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger">Verwijderen</button>
                </form>
            </div>
        </div>
    @endforeach

</div>

@endsection