<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kodtrol</title>
        <style>
            body { font-family: Helvetica, sans-serif; }
            body * { box-sizing: border-box; }
            .site-title small { color: grey; margin-left: 0.2em; }
            small { color: grey; }
        </style>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        @stack('head')
    </head>
    <body>
        <h1 class="site-title">Kodtrol<small>show control app</small></h1>
        <p><a class="github-button" href="https://github.com/H-s-O/Kodtrol" data-size="large" aria-label="View H-s-O/Kodtrol on GitHub">View on GitHub</a></p>
        @yield('content')
        @stack('body')
    </body>
</html>
