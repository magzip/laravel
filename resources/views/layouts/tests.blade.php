<!DOCTYPE html>
<html>
<head>
    <title>Tests layots - @yield('title')</title>
</head>
<body>
<header>
    @section('header')
        Содержимое хеадера
    @show
</header>
<aside>
    @section('aside')
        Содержимое хеадера
    @show
</aside>
<main>
    @yield('content')
</main>
<footer>
    футер
</footer>
</body>
</html>
