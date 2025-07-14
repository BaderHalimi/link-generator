@extends('layouts.app')
@section('content')

<!-- ✅ البانر الرئيسي -->
<section class="bg-orange-50 text-center sm:px-[5%] h-[80vh] flex items-center relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="bg-gradient-to-r from-orange-100 via-white to-orange-100 opacity-30"></div>
    </div>
    <div class="relative z-10 container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-extrabold text-orange-600 mb-4 leading-tight">
            اختصر روابطك وحقق أقصى تأثير!
        </h2>
        <p class="text-lg md:text-xl mb-6 text-gray-700">
            أنشئ صفحات وسيطة جذابة، تابع الإحصائيات، واستخدم عداد الانتظار لزيادة التفاعل.
        </p>
        <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition">
            ابدأ الآن مجانًا
        </a>
    </div>
</section>

<!-- ✅ لماذا تختارنا -->
<section class="py-20 bg-white sm:px-[5%]">
    <div class="container mx-auto px-6">
        <h3 class="text-3xl md:text-4xl font-extrabold text-center text-orange-600 mb-12">
            لماذا تختار منصتنا؟
        </h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 shadow rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-shield-check-line text-5xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">روابط محمية</h4>
                <p class="text-gray-600">نظام حماية متقدم ضد البوتات والتكرار لضمان أمان الزوار.</p>
            </div>
            <div class="bg-white p-6 shadow rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-bar-chart-line text-5xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">إحصائيات تفصيلية</h4>
                <p class="text-gray-600">تتبع الزيارات والمصادر والمتصفحات والموقع الجغرافي بسهولة.</p>
            </div>
            <div class="bg-white p-6 shadow rounded-lg text-center hover:shadow-lg transition">
                <i class="ri-flashlight-line text-5xl text-orange-500 mb-4"></i>
                <h4 class="font-bold text-lg mb-2">توجيه سريع</h4>
                <p class="text-gray-600">تجربة مستخدم سلسة وسريعة للتوجيه بدون تأخير غير ضروري.</p>
            </div>
        </div>
    </div>
</section>

<!-- ✅ خطط الأسعار -->
<section class="py-20 bg-gray-50 sm:px-[5%]" id="pricing">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-center text-orange-600 mb-12">خطط الاشتراك</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- الخطة المجانية -->
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg border border-gray-200 text-center transition">
                <h3 class="text-xl font-bold mb-2">الخطة المجانية</h3>
                <p class="text-gray-500 mb-4">للاستخدام الشخصي</p>
                <p class="text-4xl font-extrabold text-orange-500 mb-4">0$</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 10 روابط شهريًا</li>
                    <li>⏱ 15 ثانية انتظار</li>
                    <li>🎨 تخصيص محدود</li>
                    <li>📊 بدون إحصائيات</li>
                    <li>❌ بدون دعم فني</li>
                </ul>
                <a href="{{route("register","plan=free")}}" class="bg-orange-500 text-white py-2 px-6 rounded-full hover:bg-orange-600 transition">ابدأ الآن</a>
            </div>

            <!-- الخطة المميزة -->
            <div class="bg-white p-8 rounded-lg shadow-lg border-2 border-orange-500 text-center transform scale-105">
                <h3 class="text-xl font-bold mb-2 text-orange-600">الخطة المميزة</h3>
                <p class="text-gray-500 mb-4">للمسوقين والمبدعين</p>
                <p class="text-4xl font-extrabold text-orange-500 mb-4">5$ / شهر</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 100 رابط شهريًا</li>
                    <li>⚡ توجيه فوري</li>
                    <li>🎨 تخصيص متقدم (صورة + عنوان)</li>
                    <li>📈 إحصائيات زيارات</li>
                    <li>📧 دعم عبر البريد</li>
                </ul>
                <a href="{{route("register","plan=pro")}}" class="bg-orange-500 text-white py-2 px-6 rounded-full hover:bg-orange-600 transition">اشترك الآن</a>
            </div>

            <!-- الخطة الاحترافية -->
            <div class="bg-white p-8 rounded-lg shadow hover:shadow-lg border border-gray-200 text-center transition">
                <h3 class="text-xl font-bold mb-2">الخطة الاحترافية</h3>
                <p class="text-gray-500 mb-4">للشركات والفِرق</p>
                <p class="text-4xl font-extrabold text-orange-500 mb-4">15$ / شهر</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 عدد غير محدود من الروابط</li>
                    <li>⚡ توجيه فوري بدون انتظار</li>
                    <li>🎨 تخصيص كامل (ألوان، روابط CTA)</li>
                    <li>📊 تقارير مفصلة</li>
                    <li>🎧 دعم فني مباشر</li>
                </ul>
                <a href="" class="bg-orange-500 text-white py-2 px-6 rounded-full hover:bg-orange-600 transition">تواصل معنا</a>
            </div>
        </div>
    </div>
</section>

<!-- ✅ دعوة للعمل -->
<section class="py-20 bg-orange-500 text-center text-white sm:px-[5%]">
    <div class="container mx-auto px-6">
        <h3 class="text-3xl md:text-4xl font-extrabold mb-4">جاهز للانطلاق؟</h3>
        <p class="mb-6 text-lg">انضم لآلاف المستخدمين الذين يختصرون روابطهم بذكاء وسهولة.</p>
        <a href="{{route("register","plan=free")}}" class="bg-white text-orange-600 font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition">ابدأ الآن مجانًا</a>
    </div>
</section>

<!-- ✅ الفوتر -->
<footer class="bg-gray-900 text-gray-300 py-10 sm:px-[5%]">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8 text-sm text-center md:text-right">
        <div>
            <h5 class="font-bold text-white mb-2">روابط سريعة</h5>
            <ul class="space-y-1">
                <li><a href="#" class="hover:text-white">الرئيسية</a></li>
                <li><a href="#pricing" class="hover:text-white">الأسعار</a></li>
                <li><a href="#" class="hover:text-white">الدخول</a></li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-white mb-2">الدعم</h5>
            <ul class="space-y-1">
                <li><i class="ri-mail-line text-orange-500"></i> support@yourlink.com</li>
                <li><i class="ri-whatsapp-line text-orange-500"></i> +970 599 XXX XXX</li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-white mb-2">عن رابطك</h5>
            <p>نظام ذكي لاختصار الروابط وتحسين تجربة الزوار بذكاء وسهولة.</p>
        </div>
    </div>
</footer>
@endsection
