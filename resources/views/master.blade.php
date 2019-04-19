<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kodtrol</title>
        <style>
            body { font-family: Helvetica, sans-serif; }
            body * { box-sizing: border-box; }
            h1 small { color: grey; margin-left: 0.2em; }
        </style>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        @yield('head')
    </head>
    <body>
        <h1>Kodtrol<small>show control software</small></h1>
        <p><a class="github-button" href="https://github.com/H-s-O/Kodtrol" data-size="large" aria-label="View H-s-O/Kodtrol on GitHub">View on GitHub</a></p>
        @yield('content')
    </body>
</html>
