@extends('layouts.head')
@section('layout')
    <body class="font-sans text-gray-900 antialiased">
        @livewire('front.header')
        <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
                {{ $slot }}
            <!-- </div> -->
        <!-- </div> -->
    </body>
@endsection
