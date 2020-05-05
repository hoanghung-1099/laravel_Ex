<html>

<head>
    <title>@yield('head.title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    @yield('head.css')
</head>

<body>

    @include ('partials.navbar')
    @yield('body.content')
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    @yield('body.script')
</body>

</html>