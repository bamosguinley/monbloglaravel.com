<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mon blog laravel</title>
</head>

<body class="antialiased">
    <header>
        <h1>Mon blog laravel</h1>
        <nav>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
              
                <li>
                    <a href="/about">About</a>
                 </li>
                <li>
                    <a href="/contact-us">Contact us</a>
                </li>
                <!-- <li><a href=""></a></li>
                <li><a href=""></a></li> -->
            </ul>
        </nav>
    </header>
    <!-- Le contenu de toutes les pages ici -->
    @yield('content')
    <!-- Le contenu de toutes les pages ici -->
</body>

</html>