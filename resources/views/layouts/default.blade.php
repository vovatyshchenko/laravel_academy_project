<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/app.css">
<title>
    @yield('title', 'MAIN')
</title>
</head>
<body>
    @include('layouts.blocks.nav.index')
    @yield('content')
    @include('layouts.blocks.footer.index')
    <script src="js/app.js"></script>
</body>
</html>