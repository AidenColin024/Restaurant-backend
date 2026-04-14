@extends('layout')

@section('content')

<div class="form-section">
    <span class="section-label">Menu beheer</span>
    <h1>Nieuw gerecht</h1>
    <p class="form-subtitle">Vul de gegevens in om een gerecht toe te voegen aan het menu.</p>

    <div class="form-card">
        <form method="POST" action="{{ route('menu.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" placeholder="bijv. Spaghetti Carbonara">
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <textarea id="description" name="description" placeholder="Korte omschrijving van het gerecht..."></textarea>
            </div>

            <div class="form-group">
                <label for="price">Prijs (€)</label>
                <input type="text" id="price" name="price" placeholder="0.00">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Toevoegen</button>
                <a href="{{ route('menu.index') }}" class="btn btn-ghost">Annuleren</a>
            </div>
        </form>
    </div>
</div>

@endsection