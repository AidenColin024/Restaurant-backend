<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Bella Italia</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

<header>
    <div class="header-container">
        <img src="{{ asset('images/ChatGPT Image 17 mrt 2026, 11_39_31.png') }}" alt="Logo" class="logo">
        <h1>Restaurant Bella Italia</h1>
    </div>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <img src="{{ asset('images/Italian-Restaurant-Design-Creating-an-Inviting-Ambiance.png') }}" class="hero-image">

    <div class="hero-text">
        <h2>Welkom bij Bella Italia</h2>
        <p>Authentieke Italiaanse gerechten</p>
    </div>
</section>

<!-- OVER ONS -->
<section class="about">
    <div class="about-container">
        <img src="{{ asset('images/l-intro-1643403830.jpg') }}" alt="Italiaans eten" class="about-image">
        <div class="about-text">
            <h2>Over ons</h2>
            <p>
                Bij Bella Italia geniet je van traditionele recepten, verse ingrediënten
                en een gezellige Italiaanse ambiance.
            </p>
        </div>
    </div>
</section>

<!-- MENU PREVIEW -->
<section class="menu-preview">
    <h2>Populaire gerechten</h2>

    <div class="menu-items">
        <div class="menu-item">
            <img src="{{ asset('images/OIP.webp') }}" alt="Pizza">
            <h3>Pizza Margherita</h3>
        </div>

        <div class="menu-item">
            <img src="{{ asset('images/l-intro-1643403830.jpg') }}" alt="Pasta">
            <h3>Pasta Carbonara</h3>
        </div>

        <div class="menu-item">
            <img src="{{ asset('images/Italian-Restaurant-Design-Creating-an-Inviting-Ambiance.png') }}" alt="Sfeer gerecht">
            <h3>Chef Special</h3>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Restaurant Bella Italia</p>
</footer>

</body>
</html>