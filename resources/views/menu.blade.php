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

    @forelse($dishes as $dish)
        <div class="dish-row">
            <div class="dish-info">
                <h2>{{ $dish->name }}</h2>
                <p class="description">{{ $dish->description }}</p>
                <p class="price">€{{ number_format($dish->price, 2, ',', '.') }}</p>
            </div>
            <div class="dish-actions">
                <a href="{{ route('menu.edit', $dish->id) }}" class="btn-ghost btn">Bewerken</a>
            </div>
            <div class="dish-actions">
                <form action="{{ route('menu.destroy', $dish->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-danger"
                        onclick="return confirm('Weet je zeker dat je dit gerecht wilt verwijderen?')">
                        Verwijderen
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class="empty-state">
            <p>Er zijn nog geen gerechten. <a href="{{ route('menu.create') }}" style="color: var(--accent);">Voeg het eerste gerecht toe →</a></p>
        </div>
    @endforelse
</div>

@endsection