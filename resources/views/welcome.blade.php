<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Styles -->
    <link
        href="{{ Vite::asset('resources/css/app.css') }}"
        rel="stylesheet"
    >
    <script type="module" src="{{ Vite::asset('resources/js/app.js') }}"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <h1>hello world</h1>
</body>

</html>
