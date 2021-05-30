<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="icon" href="{{ asset('/images/favicon.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    @inertia
    <div class="py-12 hidden" id="bld">
        @include('folders.index',['folders'=>Auth::user()->folders])
    </div>
    <script>
        window.onload = function() {
            const content = document.getElementById('bld').innerHTML;
            let inertia = document.getElementById('iner');
            inertia.style.display = "block";
            inertia.innerHTML = content;
        }

    </script>
</body>

</html>
