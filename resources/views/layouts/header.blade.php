<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <header>Bienvenue</header>
    <nav>
        <a href="accueil">Accueil</a>
        <a href="contact">Me contacter</a>
        <a href="about">A propos</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>
