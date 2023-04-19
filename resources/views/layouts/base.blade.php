<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>

        <meta name="description" content="Beer counting application">

        <link rel="icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" sizes="180x180">
        <link rel="mask-icon" href="/mask-icon.svg" color="#FFFFFF">
        <meta name="theme-color" content="#ffffff">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="manifest" href="/build/manifest.webmanifest">
        <script src="/build/registerSW.js"></script>
    </head>
    <body class="min-h-screen flex flex-col w-full items-center bg-green-900">
        @yield('body')
    </body>
</html>
