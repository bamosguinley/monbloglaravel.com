<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog laravel</title>
</head>

<body class="antialiased">
    <h1>Mon blog laravel</h1>
    <p><a href="/contact-us">Contactez-nous</a></p>
    <!-- Le contenu de toutes les pages ici -->
    @yield('content')
    <!-- Le contenu de toutes les pages ici -->
</body>

</html>