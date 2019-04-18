<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kodtrol</title>
        <style>
            body { font-family: Helvetica, sans-serif; }
            h1 small { color: grey; margin-left: 0.2em; }
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
