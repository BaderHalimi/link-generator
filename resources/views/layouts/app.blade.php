@extends('layouts.head')
@section('layout')

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('front.header')
        @yield('content')
    </div>
    @stack('scripts')
</body>
@endsection
