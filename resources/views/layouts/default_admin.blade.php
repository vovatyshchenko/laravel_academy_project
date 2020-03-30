<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/css/common.css') }}">
    <title>
    @yield('title_admin', 'TITLE')
</title>
</head>
<body class="sb-nav-fixed">
    @include('layouts.blocks.admin.nav.index')
    @yield('content_admin')
    @include('layouts.blocks.admin.footer.index')
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>
