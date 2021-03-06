<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <title>{{ config('app.name', 'Code with Chahal') }}</title>
        {{-- Bootstrap --}}
        @vite(['resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('chahal/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('chahal/css/style.css') }}">
        @livewireStyles
    </head>
<body>
    <div id="app">
        @include('layouts.header')
        <div id="main">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    {{-- Javascript --}}
	<script src="{{ asset('chahal/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('chahal/js/theme.js') }}"></script>
    @livewireScripts
</body>

</html>
