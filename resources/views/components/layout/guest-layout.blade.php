
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    @if ($isLivewire)
        @livewireStyles
    @endif
    @vite('resources/css/app.css')
</head>

<body>

    <x-front.navbar/>

    {{ $slot ?? '' }}

    @vite('resources/js/app.js')

   {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script> --}}

    @if ($isLivewire)
        @livewireScripts
    @endif
    @stack('scripts')
</body>

</html>
