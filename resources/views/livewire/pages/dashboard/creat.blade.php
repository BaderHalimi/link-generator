<div class="max-w-3xl mx-auto mt-12 p-8 bg-white/70 shadow-2xl rounded-3xl border-t-4 border-orange-500 ring-1 ring-orange-100 backdrop-blur-xl transition-all duration-500">

    <!-- العنوان -->
    <h2 class="text-3xl font-bold text-orange-500 mb-8 flex items-center gap-3">
        <i class="ri-link text-3xl"></i>
        <span>إنشاء رابط</span>
    </h2>

    <!-- شريط الخطوات -->
    <div class="flex items-center justify-between mb-10">
        @foreach([1=>'الرابط',2=>'تفاصيل الرابط',3=>'معاينة'] as $step => $label)
            <div class="flex-1 text-center relative">
                <div class="mx-auto flex items-center justify-center w-10 h-10 rounded-full {{ $currentStep === $step ? 'bg-orange-500 text-white shadow-lg shadow-orange-300' : 'bg-orange-100 text-orange-400' }} font-bold transition-all duration-300">
                    <i class="{{ $step === 1 ? 'ri-link' : ($step === 2 ? 'ri-settings-3-line' : 'ri-eye-line') }}"></i>
                </div>
                <div class="text-sm mt-2 {{ $currentStep === $step ? 'text-orange-600 font-semibold' : 'text-orange-300' }}">{{ $label }}</div>
                @if ($step < 3)
                    <div class="absolute top-5 right-0 w-1/2 h-px bg-orange-200"></div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- الخطوة الأولى -->
    @if ($currentStep === 1)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <label class="block md:col-span-2">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-link text-lg"></i> الرابط الأصلي</span>
            <input wire:model.defer="url" type="text" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" placeholder="https://example.com" />
        </label>
    </div>

    <!-- الخطوة الثانية -->
    @elseif ($currentStep === 2)
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-hashtag"></i> الكود المخصص</span>
            <input wire:model.defer="code" readonly type="text" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" placeholder="my-code" />
        </label>

        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-edit-2-line"></i> عنوان الرابط</span>
            <input wire:model.defer="title" type="text" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" placeholder="مثال: صفحتي" />
        </label>

        <label class="block md:col-span-2">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-chat-smile-line"></i> وصف الرابط</span>
            <textarea wire:model.defer="description" rows="2" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" placeholder="نبذة قصيرة عن الرابط..."></textarea>
        </label>

        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-image-line"></i> تحميل صورة</span>
            <input wire:model="image" type="file" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" />
        </label>

        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-bar-chart-line"></i> مستوى الإعلان</span>
            <select wire:model.defer="level_ads" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg">
                <option value="">اختر المستوى</option>
                <option value="1">صفحة واحدة</option>
                <option value="2">صفحتين</option>
                <option value="3">ثلاث صفحات</option>
            </select>
        </label>

        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-time-line"></i> مدة الإعلان</span>
            <select wire:model.defer="time_in_level" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg">
                <option value="">اختر المدة</option>
                <option value="10">10 ثوان</option>
                <option value="15">15 ثانية</option>
                <option value="20">20 ثانية</option>
            </select>
        </label>

        <label class="block">
            <span class="text-orange-600 font-medium flex items-center gap-2"><i class="ri-calendar-line"></i> تاريخ الانتهاء</span>
            <input wire:model.defer="expire_date" type="date" class="mt-2 w-full rounded-xl border-orange-200 shadow focus:ring-orange-500 focus:border-orange-500 px-4 py-3 bg-white/40 backdrop-blur-lg" />
        </label>
    </div>

    <!-- الخطوة الثالثة -->
    @elseif ($currentStep === 3)
    <div class="bg-orange-50 border border-orange-200 rounded-2xl p-6 shadow-inner text-orange-800 space-y-4 backdrop-blur-lg">
        <p class="font-semibold text-orange-500 text-lg flex items-center gap-2"><i class="ri-star-smile-line text-xl"></i> تأكيد البيانات:</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
            <div><i class="ri-link"></i> <strong>الرابط:</strong> {{ $url }}</div>
            <div><i class="ri-hashtag"></i> <strong>الكود:</strong> {{ $code }}</div>
            <div><i class="ri-edit-2-line"></i> <strong>العنوان:</strong> {{ $title }}</div>
            <div><i class="ri-chat-smile-line"></i> <strong>الوصف:</strong> {{ $description }}</div>
            <div><i class="ri-bar-chart-line"></i> <strong>مستوى الإعلان:</strong> {{ $level_ads }}</div>
            <div><i class="ri-time-line"></i> <strong>المدة:</strong> {{ $time_in_level }} ثانية</div>
            <div><i class="ri-calendar-line"></i> <strong>تاريخ الانتهاء:</strong> {{ $expire_date }}</div>
            <div class="md:col-span-2">
                <strong><i class="ri-image-line"></i> الصورة:</strong>
                @if ($image)
                    <div class="mt-2">
                        @if (is_string($image))
                            <img src="{{ $image }}" alt="الصورة" class="h-24 w-24 rounded-lg shadow object-cover">
                        @else
                            <img src="{{ $image->temporaryUrl() }}" alt="الصورة" class="h-24 w-24 rounded-lg shadow object-cover">
                        @endif
                    </div>
                @else
                    <span class="text-orange-300">لا يوجد</span>
                @endif
            </div>
            <div class="md:col-span-2">
                <strong><i class="ri-links-line"></i> الرابط الجديد:</strong>
                <span class="text-orange-500 font-bold">{{ request()->getSchemeAndHttpHost() }}/{{ $code }}</span>
            </div>
        </div>
        <button wire:click="create" class="mt-6 bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-black font-semibold px-6 py-3 rounded-full shadow-xl shadow-orange-300 transition-all">
            <i class="ri-magic-line mr-1"></i> إنشاء الرابط الآن
        </button>
    </div>
    @endif

    <!-- أزرار التنقل -->
    <div class="flex justify-between items-center mt-10">
        <button 
            wire:click="prevStep"
            class="text-sm text-orange-300 hover:text-orange-500 transition disabled:opacity-40 disabled:cursor-not-allowed"
            @if ($currentStep === 1) disabled @endif
        >
            <i class="ri-arrow-left-s-line"></i> رجوع
        </button>

        @if ($currentStep < 3)
            <button 
                wire:click="nextStep"
                class="bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-black font-semibold px-6 py-3 rounded-full shadow-xl shadow-orange-300 transition-all flex items-center gap-2"
            >
                التالي <i class="ri-arrow-right-s-line"></i>
            </button>
        
        {{-- <button 
            wire:click="create"
            class="bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-black font-semibold px-6 py-3 rounded-full shadow-xl shadow-orange-300 transition-all flex items-center gap-2"
        >
            <i class="ri-send-plane-2-line"></i> نشر
        </button> --}}
        @endif
    </div>

    <!-- رسالة نجاح -->
    @if (session()->has('success'))
        <div class="mt-6 bg-green-100 border border-green-200 text-green-800 p-4 rounded-2xl shadow backdrop-blur-lg flex items-center gap-2">
            <i class="ri-checkbox-circle-line text-xl text-green-500"></i>
            {{ session('success') }}
        </div>
    @endif
</div>
