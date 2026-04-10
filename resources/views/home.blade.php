@extends('layout')

@section('content')

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h2>Welkom bij Bella Italia</h2>
        <p>Geniet van de beste Italiaanse gerechten</p>

        <!-- HERO IMAGE -->
        <img src="{{ asset('images/l-intro-1643403830.jpg') }}" alt="Hero afbeelding" class="hero-img">
    </div>
</section>

<!-- OVER ONS -->
<section class="about">
    <h2>Over ons</h2>
    <div class="about-container">

        <div class="about-text">
            <p>
                Bella Italia is een traditioneel Italiaans restaurant waar kwaliteit en smaak centraal staan.
            </p>
        </div>

        <!-- ABOUT IMAGE -->
        <div class="about-image">
            <img src="{{ asset('images/Italian-Restaurant-Design-Creating-an-Inviting-Ambiance.png') }}" alt="Restaurant afbeelding">
        </div>

    </div>
</section>

<!-- MENU PREVIEW -->
<section class="menu-preview">
    <h2>Populaire gerechten</h2>

    <div class="menu-grid">

        <div class="menu-item">
            <img src="" alt="Pizza">
            <h3>Pizza Margherita</h3>
            <p>Klassieke pizza met tomaat en mozzarella</p>
        </div>

        <div class="menu-item">
            <img src="" alt="Pasta">
            <h3>Pasta Carbonara</h3>
            <p>Romige saus met spek en kaas</p>
        </div>

        <div class="menu-item">
            <img src="" alt="Lasagne">
            <h3>Lasagne</h3>
            <p>Laagjes pasta met gehakt en saus</p>
        </div>

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