<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-box</title>
    <link rel="shortcut icon" href="./assest/source/images/favicon.ico" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @if (session('username'))
        <main class="main">

            @include('components.menu')

            @include('components.group')

            @include('components.message')

        </main>
    @else
        <script>
            window.location = "/login";
        </script>
    @endif

</body>

</html>
