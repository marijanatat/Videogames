<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Video games') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- Styles -->
    <livewire:styles>

</head>

<body class="bg-gray-900 text-white">

    <header class="border-b border-gray-900">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex items-center flex-col lg:flex-row ">
                <a href="/">
                    <img src="/images/laracasts-logo.svg" alt="logo" class="w-32 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 mt-6 lg:mt-0 space-x-8">
                    <li><a href="" class="hover:text-gray-400">Games</a></li>
                    <li><a href="" class="hover:text-gray-400 ">Reviews</a></li>
                    <li><a href="" class="hover:text-gray-400 ">Coming soon</a></li>
                </ul>
            </div>
            <div class="flex mt-6 lg:mt-0 items-center ">
                <div class="relative">
                    <input type="text"
                        class="pl-8 bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline "
                        placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="fill-current text-gray-400 w-4 " viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                </div>
                <div class="ml-6">
                    <a href=""><img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8"></img></a>
                </div>

            </div>
        </nav>

    </header>
    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="mx-auto px-4 py-6">
            Powered by <a href="" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>
    <livewire:scripts>

</body>

</html>