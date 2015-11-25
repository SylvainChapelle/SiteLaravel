<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre','Link')</title>
</head>
<body>
    <ul>
        <!-- li*2>a-->
        <li><a href="{{route('listLink')}}">Liste</a></li>
        <li><a href="{{route('addLink')}}">Ajout</a></li>
    </ul>
    @yield('titrePage','Page par défaut')
    @yield('contenu')
</body>
</html>