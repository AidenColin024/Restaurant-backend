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
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('menu.index') }}">Menu</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>
</header>

@yield('content')

<footer>
    <p>© 2026 Restaurant Bella Italia</p>
</footer>

</body>
</html>