<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>

		<link rel="manifest" href="site.webmanifest">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="min-h-screen flex flex-col w-full items-center bg-green-900">
        @yield('body')
    </body>
</html>
