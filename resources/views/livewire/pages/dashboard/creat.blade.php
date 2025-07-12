<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <title>إنشاء رابط مختصر</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-xl rounded-lg border-t-4 border-orange-500">
        <h2 class="text-2xl font-bold text-orange-600 mb-4 flex items-center gap-2">
            <i class="ri-link text-2xl"></i> إنشاء رابط مختصر
        </h2>

        <!-- Steps Navigation -->
        <div class="flex items-center justify-between mb-6">
            <div class="flex-1 text-center">
                <div class="text-sm font-semibold text-orange-600">١</div>
                <div class="text-xs text-gray-500">الرابط الأصلي</div>
            </div>
            <div class="flex-1 text-center">
                <div class="text-sm font-semibold text-gray-400">٢</div>
                <div class="text-xs text-gray-400">الإعدادات</div>
            </div>
            <div class="flex-1 text-center">
                <div class="text-sm font-semibold text-gray-400">٣</div>
                <div class="text-xs text-gray-400">معاينة</div>
            </div>
        </div>

        <!-- Slides Container -->
        <div class="relative h-60 overflow-hidden">
            <!-- Slide 1 -->
            <div class="absolute inset-0 transition-all duration-500" style="transform: translateX(0%)">
                <div class="space-y-4">
                    <label class="block">
                        <span class="text-gray-700 font-medium">الرابط الأصلي</span>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" placeholder="https://example.com" />
                    </label>

                    <label class="block">
                        <span class="text-gray-700 font-medium">عنوان الصفحة</span>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" placeholder="مثال: موقعي الشخصي" />
                    </label>
                </div>
            </div>

            <!-- Slide 2 (مخفية مبدئياً) -->
            <div class="absolute inset-0 transition-all duration-500 opacity-0 pointer-events-none" style="transform: translateX(100%)">
                <div class="space-y-4">
                    <label class="block">
                        <span class="text-gray-700 font-medium">تاريخ انتهاء الرابط</span>
                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" />
                    </label>

                    <label class="block">
                        <span class="text-gray-700 font-medium">تعطيل الرابط مؤقتًا؟</span>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
                            <option>لا</option>
                            <option>نعم</option>
                        </select>
                    </label>
                </div>
            </div>

            <!-- Slide 3 (مخفية مبدئياً) -->
            <div class="absolute inset-0 transition-all duration-500 opacity-0 pointer-events-none" style="transform: translateX(200%)">
                <div class="text-center text-gray-700">
                    <p class="mb-4">هل أنت متأكد من إنشاء الرابط؟</p>
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded shadow transition">إنشاء الرابط الآن</button>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex justify-between items-center mt-6">
            <button class="text-sm text-gray-500 hover:text-orange-500 transition" disabled>الرجوع</button>
            <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-4 py-2 rounded shadow transition">التالي</button>
        </div>
    </div>

</body>
</html>
