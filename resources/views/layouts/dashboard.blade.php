@extends('layouts.head')
@section('layout')

<body class="font-sans antialiased h-screen overflow-hidden bg-gray-100">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->

        <!-- Sidebar + Main Content -->
        <div class="flex flex-1">

            <!-- Sidebar (aside) -->
            <aside class="hidden md:flex flex-col w-64 bg-white shadow h-full">
                @livewire('layout.aside')
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-4 bg-gray-100 min-h-screen overflow-y-scroll">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'نجاح',
            text: "{{ session('success') }}",
            confirmButtonText: 'حسناً'
        });
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'خطأ',
            text: "{{ session('error') }}",
            confirmButtonText: 'حسناً'
        });
    </script>
    @endif

</body>
@endsection
