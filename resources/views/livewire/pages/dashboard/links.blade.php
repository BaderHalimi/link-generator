<div class="max-w-4xl mx-auto mt-12 space-y-6">

    <div class="flex items-center justify-between">
        <h2 class="text-2xl font-bold text-orange-500 flex items-center gap-2">
            <i class="ri-links-line text-3xl"></i>
            روابطك المختصرة
        </h2>
        <a href="{{ route('dashboard', ['step' => 2]) }}"
              wire:navigate
            class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-full shadow shadow-orange-300 flex items-center gap-2 transition">
            <i class="ri-add-line"></i> إنشاء جديد
        </a>
    </div>

    @forelse($links as $link)
        <div class="relative flex bg-white/60 backdrop-blur-xl rounded-2xl border border-orange-100 shadow-xl overflow-hidden hover:shadow-2xl transition-all">

            {{-- صورة الرابط على اليسار --}}
            <div class="w-40 flex-shrink-0">
                @if ($link->image)
                    <img src="{{ Storage::url($link->image) }}" alt="صورة الرابط"
                         class="w-40 h-full object-cover rounded-s-2xl">
                @else
                    <div class="w-40 h-full bg-orange-100 flex items-center justify-center text-orange-300 text-4xl">
                        <i class="ri-image-off-line"></i>
                    </div>
                @endif
            </div>

            {{-- المحتوى أمام الصورة --}}
            <div class="flex-1 p-5 flex flex-col justify-between">
                <div class="space-y-1">
                    <h3 class="text-lg font-semibold text-orange-600 flex items-center gap-2">
                        <i class="ri-link text-lg"></i> {{ $link->title ?? 'رابط بدون عنوان' }}
                    </h3>

                    <p class="text-sm text-gray-500 break-all flex items-center gap-2">
                        <i class="ri-global-line"></i> {{ $link->url }}
                    </p>

                    <div class="bg-orange-50 border border-orange-100 rounded-xl px-4 py-2 flex items-center justify-between mt-2">
                        <span class="text-orange-600 font-medium break-all" id="link-{{ $link->id }}">
                            {{ request()->getSchemeAndHttpHost() . '/' . $link->code }}
                        </span>
                        <button onclick="copyToClipboard('{{ request()->getSchemeAndHttpHost() . '/' . $link->code }}', {{ $link->id }})"
                                class="text-orange-500 hover:text-orange-600 transition" title="نسخ الرابط">
                            <i class="ri-file-copy-line text-xl"></i>
                        </button>
                    </div>
                    <span id="copied-{{ $link->id }}" class="text-green-600 text-sm hidden">✅ تم النسخ!</span>
                </div>

                <div class="mt-3 text-xs text-gray-400 flex flex-wrap items-center gap-4">
                    <span class="flex items-center gap-1"><i class="ri-calendar-line"></i> {{ $link->created_at->format('Y-m-d') }}</span>
                    <span class="flex items-center gap-1"><i class="ri-eye-line"></i> {{ get_views($link->id) }} زيارة</span>
                </div>
            </div>

            {{-- أدوات التحكم --}}
            <div class="absolute top-3 left-3 flex gap-2">
                <button wire:click="delete({{ $link->id }})"
                        class="text-red-400 hover:text-red-600 transition" title="حذف الرابط">
                    <i class="ri-delete-bin-line text-2xl"></i>
                </button>
                <a href="{{ route('dashboard', ['step' => 2,'link_id' => $link->id]) }}"
                wire:navigate
                    class="text-black hover:text-red-600 transition" title="تعديل الرابط">
                <i class="ri-pencil-line text-2xl"></i>
                </a>
            </div>
        </div>
    @empty
        <div class="bg-orange-50 border border-orange-100 text-orange-400 p-4 rounded-xl text-center">
            <i class="ri-information-line text-xl"></i> لا توجد روابط حتى الآن.
        </div>
    @endforelse
</div>

<script>
    function copyToClipboard(text, id) {
        navigator.clipboard.writeText(text).then(() => {
            let msg = document.getElementById('copied-' + id);
            msg.classList.remove('hidden');
            msg.classList.add('inline-block');
            setTimeout(() => {
                msg.classList.add('hidden');
            }, 2000);
        });
    }
</script>
