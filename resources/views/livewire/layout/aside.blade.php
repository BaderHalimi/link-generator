@php
$menuItems = [
    1 => [
        'title' => 'الرئيسية', 
        'desc' => 'الصفحة الرئيسية للموقع', 
        'icon' => 'ri-home-4-line',
        'url' => '/dashboard'
    ],
    2 => [
        'title' => 'إنشاء رابط', 
        'desc' => 'إنشاء روابط مختصرة جديدة', 
        'icon' => 'ri-links-line',
        'url' => '/links/create'
    ],
    3 => [
        'title' => 'روابطي', 
        'desc' => 'عرض جميع الروابط المختصرة', 
        'icon' => 'ri-list-check',
        'url' => '/links'
    ],
    4 => [
        'title' => 'التحليلات', 
        'desc' => 'إحصائيات زيارات الروابط', 
        'icon' => 'ri-bar-chart-line',
        'url' => '/analytics'
    ],
    5 => [
        'title' => 'التخصيص', 
        'desc' => 'تخصيص الروابط والمظهر', 
        'icon' => 'ri-paint-brush-line',
        'url' => '/customization'
    ],
    6 => [
        'title' => 'الإعدادات', 
        'desc' => 'إعدادات الحساب والموقع', 
        'icon' => 'ri-settings-3-line',
        'url' => '/settings'
    ],
    7 => [
        'title' => 'الدعم الفني', 
        'desc' => 'مساعدة ودعم فني', 
        'icon' => 'ri-customer-service-2-line',
        'url' => '/support'
    ],
];

@endphp

<aside class="w-64 bg-orange-500 text-white flex flex-col h-screen shadow-xl">

    
    
    <nav class="flex-1 flex flex-col py-4" x-data="{ step: @entangle('currentRoute') }">
        @foreach ($menuItems as $step => $data)
        <a 
        href="{{ url()->current() }}?step={{ $step }}"
        wire:navigate

        class="{{ (request()->query('step', 1) == $step) ? 'bg-orange-600 text-white' : 'bg-orange-500 hover:bg-orange-600 text-white' }} flex items-center px-6 py-4 transition-colors duration-200"

     >
     
            <i class="{{ $data['icon'] }} text-xl mr-3"></i> 
            <div>
                <span class="block font-semibold text-lg">{{ $data['title'] }}</span>
            </div>
        </a>
        @endforeach
    </nav>
    
    <div class="px-6 py-4 border-t border-orange-600">
        <p class="text-sm">جميع الحقوق محفوظة &copy; {{ date('Y') }}</p>
</aside>


{{-- <div class="flex-1 p-4">
    @if ($currentRoute === 1)
        @livewire('pages.dashboard.overview')

    @elseif ($currentRoute === 2)
        @livewire('pages.dashboard.creat')
    @endif
    
</div> --}}
