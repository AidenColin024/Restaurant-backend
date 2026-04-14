@extends('layout')

@section('content')

<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <span class="section-label">Welkom in ons restaurant</span>
            <h2>Welkom bij<br><em>Bella Italia</em></h2>
            <p>Geniet van de echte Italiaanse keuken, bereid met verse ingrediënten en eeuwenoude recepten.</p>
        </div>
        <img src="{{ url('images/l-intro-1643403830.jpg') }}" alt="Bella Italia" class="hero-img">
    </div>
</section>

<section class="about">
    <div class="about-container">
        <span class="section-label">Ons verhaal</span>
        <h2>Over Bella Italia</h2>
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
            Laat je verrassen door onze heerlijke pasta's, knapperige pizza's en verfijnde wijnen
            rechtstreeks uit Italië.
        </p>
    </div>
</section>

<section class="menu-preview">
    <span class="section-label">Wat wij serveren</span>
    <h2>Populaire gerechten</h2>
    <p class="section-sub">Een selectie van onze meest geliefde gerechten</p>

    <div class="menu-grid">
        @forelse($dishes as $dish)
            <div class="menu-item">
                <img src="{{ $dish->image }}" alt="{{ $dish->name }}">
                <div class="menu-item-body">
                    <h3>{{ $dish->name }}</h3>
                    <p class="description">{{ $dish->description }}</p>
                    <p class="price">€{{ $dish->price }}</p>
                </div>
            </div>
        @empty
            <p>Er zijn nog geen gerechten toegevoegd.</p>
        @endforelse
    </div>
</section>

<section class="gallery">
    <h2>Sfeerimpressie</h2>
    <div class="gallery-grid">
        <img src="" alt="Interieur 1">
        <img src="" alt="Interieur 2">
        <img src="" alt="Eten 1">
        <img src="" alt="Eten 2">
    </div>
</section>

<section class="cta">
    <h2>Reserveer een tafel</h2>
    <a href="{{ route('contact') }}" class="btn">Neem contact op</a>
</section>

@endsection