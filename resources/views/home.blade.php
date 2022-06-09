<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC Comics</title>
        <link rel="stylesheet" href="{{'css/app.css'}}">
    </head>

    <body>
        <header>
            @include('partials.header')
        </header>
        <main>
            @include('partials.main')
            @include('partials.cardNav')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
        
        <!-- ========== Start SCRIPT ========== -->
        <script src="{{asset('js/app.js')}}"></script>
        <!-- ========== End SCRIPT ========== -->
    </body>
</html>