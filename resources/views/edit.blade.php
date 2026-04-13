@extends('layout')

@section('content')

<div class="form-section">
    <span class="section-label">Menu beheer</span>
    <h1>Gerecht bewerken</h1>
    <p class="form-subtitle">Pas de gegevens aan en sla op.</p>

    <div class="form-card">
        <form method="POST" action="{{ route('menu.update', $dish->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" value="{{ old('name', $dish->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Beschrijving</label>
                <textarea id="description" name="description" required>{{ old('description', $dish->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prijs (€)</label>
                <input type="number" id="price" name="price" step="0.01" min="0"
                    value="{{ old('price', $dish->price) }}" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Opslaan</button>
                <a href="{{ route('menu.index') }}" class="btn btn-ghost">Annuleren</a>
            </div>
        </form>
    </div>
</div>

@endsection