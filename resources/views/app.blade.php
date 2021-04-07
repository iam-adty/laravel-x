<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @if (env('VUE_DEVTOOLS_HOST') !== false)
        <script>
            window.__VUE_DEVTOOLS_HOST__ = '{{ env("VUE_DEVTOOLS_HOST") }}';
            window.__VUE_DEVTOOLS_PORT__ = '8098';
        </script>
        <script src="http://{{ env('VUE_DEVTOOLS_HOST') }}:8098"></script>
        @endif
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia

        @if (app()->isLocal())
            <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
        @endif
    </body>
</html>
