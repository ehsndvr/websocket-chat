<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-box</title>
    <link rel="shortcut icon" href="./assest/source/images/favicon.ico" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <main class="main">
        <x-menu />

        <section class="main-massage__box">
            <div class="massage-box__search">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 18 18">
                    <title>magnifier</title>
                    <g fill="#212121" class="nc-icon-wrapper">
                        <path
                            d="M15.25,16c-.192,0-.384-.073-.53-.22l-3.965-3.965c-.293-.293-.293-.768,0-1.061s.768-.293,1.061,0l3.965,3.965c.293,.293,.293,.768,0,1.061-.146,.146-.338,.22-.53,.22Z"
                            fill="#f6f6f6"></path>
                        <path
                            d="M7.75,13.5c-3.17,0-5.75-2.58-5.75-5.75S4.58,2,7.75,2s5.75,2.58,5.75,5.75-2.58,5.75-5.75,5.75Zm0-10c-2.343,0-4.25,1.907-4.25,4.25s1.907,4.25,4.25,4.25,4.25-1.907,4.25-4.25-1.907-4.25-4.25-4.25Z"
                            fill="#f6f6f6"></path>
                    </g>
                </svg>
                <input type="search" class="search-box" placeholder="Search...">
            </div>

            <div class="massage__add-users">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#f6f6f6"
                        class="bi bi-plus-circle" viewBox="0 0 16 16" onclick="createGroup()">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </span>
            </div>

            {{-- Group --}}
        </section>

        <x-message />

    </main>
</body>

</html>
