@extends('layout')

@section('content')

<div class="form-section">
    <span class="section-label">Stuur ons een bericht</span>
    <h1>Contact</h1>
    <p class="form-subtitle">Vragen, reserveringen of feedback? We horen graag van je.</p>

    <div class="form-card">
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <div class="form-row">
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" placeholder="Jouw naam" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" name="email" placeholder="jouw@email.nl" required>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Bericht</label>
                <textarea id="message" name="message" placeholder="Schrijf hier je bericht..." required></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Verstuur bericht</button>
            </div>
        </form>
    </div>
</div>

@endsection