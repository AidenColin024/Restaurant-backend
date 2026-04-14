<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Bella Italia</title>
    <link rel="stylesheet" href="{{ url('css/home.css') }}">
</head>

<body>

<header>
    <div class="header-container">
        <div class="header-brand">
            <img src="{{ url('images/ChatGPT Image 17 mrt 2026, 11_39_31.png') }}" alt="Logo" class="logo">
            <h1>Restaurant Bella Italia</h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('menu.index') }}">Menu</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <p>© 2026 Restaurant Bella Italia — Alle rechten voorbehouden</p>
</footer>

</body>
</html>