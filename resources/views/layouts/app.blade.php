@extends('layouts.head')
@section('layout')

<body class="font-sans antialiased">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        @livewire('front.header')

        <!-- Sidebar + Content -->
        <div class="flex flex-1 bg-gray-100">

            @livewire('layout.aside')

            <!-- Main Content -->
            <div class="flex-1 p-4">

                @yield('content')
            </div>
        </div>
    </div>
    @stack('scripts')
</body>
@endsection
