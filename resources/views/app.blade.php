<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Beranda') | {{ config('app.name') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
	@stack('styles')
</head>

<body class="flex bg-gray-100">

    @include('app-partials.sidebar')

    <div class="relative flex h-screen w-full flex-col overflow-y-hidden">
        <!-- Desktop Header -->
        @include('app-partials.header-desktop')

        <!-- Mobile Header & Nav -->
        @include('app-partials.header-mobile')

        <div class="flex h-screen w-full flex-col overflow-x-hidden border-t">
            <main class="w-full flex-grow p-6">
                @yield('content')
            </main>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
	@stack('scripts')
</body>

</html>
