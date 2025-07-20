<div class="h-screen overflow-y-auto">
    <div wire:key="route-{{ $currentRoute }}-{{ $counter }}">
        @switch($currentRoute)
            @case(1)
                @livewire('pages.dashboard.overview')
                @break
            @case(2)
                @livewire('pages.dashboard.creat')
                @break
            @case(3)
                @livewire('pages.dashboard.links')
                @break
            @case(4)
                @livewire('pages.dashboard.analytics')
                @break
            @case(5)
                @livewire('pages.dashboard.customization')
                @break
            @case(6)
                @livewire('pages.dashboard.settings')
                @break
            @case(7)
                <a id="redirectLink" href="{{ route('support.index') }}" wire:navigate class="hidden">Go</a>
                <script>
                    document.getElementById('redirectLink').click();
                </script>
                @break

        @endswitch
    </div>
</div>
