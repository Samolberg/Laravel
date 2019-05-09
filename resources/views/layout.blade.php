<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <div class="content">
        <div class="title m-b-md">Laravel</div>
        <p>
            <a href="/">Home</a>
            <a href="/contact">Contact us</a>
            <a href="/alphavantage">API</a>

        </p>
    </div>
</body>
</html>