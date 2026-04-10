@extends('layout')

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
    <div class="hero-text">
        <h2>Welkom bij Bella Italia</h2>
        <p>Geniet van de echte Italiaanse keuken</p>
    </div>
        <!-- HERO IMAGE -->
        <img src="{{ asset('images/l-intro-1643403830.jpg') }}" alt="Hero afbeelding" class="hero-img">
    </div>
</section>

<section class="about">
    <div class="about-container">
        <div class="about-text">
            <h2>Over ons</h2>
            <p>
                Welkom bij Bella Italia, een plek waar de authentieke Italiaanse keuken tot leven komt.
                Onze gerechten worden bereid met verse ingrediënten en traditionele recepten die
                generaties lang zijn doorgegeven.
            </p>

            <p>
                Of je nu komt voor een romantisch diner, een gezellige avond met vrienden of een
                familiebijeenkomst — bij ons staat gastvrijheid altijd centraal.
            </p>

            <p>
                Laat je verrassen door onze heerlijke pasta’s, knapperige pizza’s en verfijnde wijnen
                rechtstreeks uit Italië.
            </p>
        </div>

    </div>
</section>

<section class="menu-preview">
    <h2>Populaire gerechten</h2>

    <div class="menu-grid">
        @forelse($dishes as $dish)
            <div class="menu-item">
                
                <!-- IMAGE -->
                <img src="{{ $dish->image ?? '' }}" alt="{{ $dish->name }}">

                <!-- NAAM -->
                <h3>{{ $dish->name }}</h3>

                <!-- PRIJS -->
                <p>€{{ $dish->price }}</p>

            </div>
        @empty
            <p>Er zijn nog geen gerechten toegevoegd.</p>
        @endforelse
    </div>
</section>

<!-- GALERIJ -->
<section class="gallery">
    <h2>Sfeerimpressie</h2>

    <div class="gallery-grid">
        <img src="" alt="Interieur 1">
        <img src="" alt="Interieur 2">
        <img src="" alt="Eten 1">
        <img src="" alt="Eten 2">
    </div>
</section>

<!-- CONTACT CTA -->
<section class="cta">
    <h2>Reserveer of neem contact op</h2>
    <a href="{{ route('contact') }}" class="btn">Contact</a>
</section>

@endsection