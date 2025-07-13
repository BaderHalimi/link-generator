@extends('layouts.head')
@section('layout')

<body class="font-sans antialiased bg-gray-100">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        @livewire('front.header')

        <!-- Sidebar + Main Content -->
        <div class="flex flex-1">

            <!-- Sidebar (aside) -->
            <aside class="hidden md:flex flex-col w-64 bg-white shadow h-full">
                @livewire('layout.aside')
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-4 bg-gray-100 min-h-screen">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
@endsection
