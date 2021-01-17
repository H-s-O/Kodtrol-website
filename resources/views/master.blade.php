<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kodtrol</title>
        <style>
            body { font-family: Helvetica, sans-serif; font-size: 0.9em; }
            body * { box-sizing: border-box; }
            .site-title { margin:0; float: left; position: relative; }
            .site-title small { color: grey; margin-left: 0.2em; }
            .alpha { color: darkred; }
            .gh-right { float:right; position: relative; }
            small { color: grey; }
            header { clear:both; margin: 1em 0 2em 0; height: 35px; }
            footer { padding: 1em; color: grey; text-align: center; }
        </style>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        @stack('head')
    </head>
    <body>
        <header>
            <h1 class="site-title">Kodtrol<small>show control app <span class="alpha">[alpha]</span></small></h1>
            <div class="gh-right">
                <a class="github-button" href="https://github.com/H-s-O/Kodtrol" data-size="large" aria-label="View H-s-O/Kodtrol on GitHub">View on GitHub</a>
            </div>
        </header>
        @yield('content')
        <footer>
            An app by <a href="https://tekunika.ca" aria-label="TEKUNIKA" target="_blank">TEKUNIKA</a>
        </footer>
        @stack('body')
    </body>
</html>
