<div>
<header class="bg-white shadow border-b-2 border-orange-500 ml-72">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" wire:navigate>
            <h1 class="text-2xl font-bold text-orange-500">{{ config('app.name') }}</h1>
        </a>
        <nav class="space-x-6 rtl:space-x-reverse">
            <a href="#" class="text-gray-700 hover:text-orange-500">الرئيسية</a>
            <a href="#" class="text-gray-700 hover:text-orange-500">الأسعار</a>
            <a href="{{ route('login') }}" wire:navigate class="text-gray-700 hover:text-orange-500">تسجيل الدخول</a>
        </nav>
    </div>
</header>
</div>