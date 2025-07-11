<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()??config('app.locale')) }}" @if (app()->getLocale()=='ar' || config('app.locale')=='ar')
dir="rtl"
@endif>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Link Generator') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles()
    @livewireScripts()
    @stack('styles')
</head>
@yield('layout')

</html>
