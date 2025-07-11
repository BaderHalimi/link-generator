@extends('layouts.app')
@section('content')


<!-- ✅ البانر الرئيسي -->
<section class="bg-orange-50 text-center sm:px-[5%] h-[70vh] flex items-center">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-orange-600 mb-4">اختصر روابطك، وحقق أقصى تأثير!</h2>
        <p class="text-lg mb-6">أنشئ صفحة وسيطة جذابة، تابع الإحصائيات، واستخدم عداد الانتظار للتفاعل الأفضل.</p>
        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full shadow">
            ابدأ الآن مجانًا
        </a>
    </div>
</section>

<!-- ✅ لماذا تختارنا -->
<section class="py-20 bg-white sm:px-[5%]">
    <div class="container mx-auto px-6">
        <h3 class="text-3xl font-bold text-center text-orange-600 mb-12">لماذا منصتنا؟</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 shadow rounded-lg text-center">
                <div class="text-orange-500 text-4xl mb-4">🔒</div>
                <h4 class="font-bold text-lg mb-2">روابط محمية</h4>
                <p>نظام حماية متقدم ضد البوتات والتكرار لضمان أمان الزوار.</p>
            </div>
            <div class="bg-white p-6 shadow rounded-lg text-center">
                <div class="text-orange-500 text-4xl mb-4">📊</div>
                <h4 class="font-bold text-lg mb-2">إحصائيات تفصيلية</h4>
                <p>تتبع الزيارات والمصادر والمتصفحات والموقع الجغرافي.</p>
            </div>
            <div class="bg-white p-6 shadow rounded-lg text-center">
                <div class="text-orange-500 text-4xl mb-4">⚡</div>
                <h4 class="font-bold text-lg mb-2">سرعة توجيه عالية</h4>
                <p>تجربة مستخدم سلسة وسريعة للتوجيه بدون تأخير غير ضروري.</p>
            </div>
        </div>
    </div>
</section>

<!-- ✅ خطط الأسعار -->
<section class="py-20 bg-gray-50 sm:px-[5%]" id="pricing">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-orange-600 mb-12">خطط الاشتراك</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- الخطة المجانية -->
            <div class="bg-white p-6 rounded-lg shadow text-center border border-gray-200">
                <h3 class="text-xl font-bold mb-2">الخطة المجانية</h3>
                <p class="text-gray-500 mb-4">للاستخدام الشخصي</p>
                <p class="text-3xl font-bold text-orange-500 mb-4">0$</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 10 بطاقات شهريًا</li>
                    <li>⏱ 15 ثانية انتظار</li>
                    <li>🎨 تخصيص محدود</li>
                    <li>📊 بدون إحصائيات</li>
                    <li>❌ لا يوجد دعم فني</li>
                </ul>
                <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">ابدأ الآن</a>
            </div>

            <!-- الخطة المميزة -->
            <div class="bg-white p-6 rounded-lg shadow text-center border-2 border-orange-500">
                <h3 class="text-xl font-bold mb-2 text-orange-600">الخطة المميزة</h3>
                <p class="text-gray-500 mb-4">للمسوقين والمبدعين</p>
                <p class="text-3xl font-bold text-orange-500 mb-4">5$ / شهريًا</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 100 بطاقة شهريًا</li>
                    <li>⚡ توجيه فوري</li>
                    <li>🎨 تخصيص متقدم (صورة + عنوان)</li>
                    <li>📈 إحصائيات الزيارات</li>
                    <li>📧 دعم عبر البريد</li>
                </ul>
                <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">اشترك الآن</a>
            </div>

            <!-- الخطة الاحترافية -->
            <div class="bg-white p-6 rounded-lg shadow text-center border border-gray-200">
                <h3 class="text-xl font-bold mb-2">الخطة الاحترافية</h3>
                <p class="text-gray-500 mb-4">للشركات والفِرق</p>
                <p class="text-3xl font-bold text-orange-500 mb-4">15$ / شهريًا</p>
                <ul class="text-sm text-gray-700 mb-6 space-y-2 text-right rtl:text-right">
                    <li>🔗 عدد غير محدود من البطاقات</li>
                    <li>⚡ توجيه فوري بدون تأخير</li>
                    <li>🎨 تخصيص كامل (ألوان، روابط CTA)</li>
                    <li>📊 تقارير مفصّلة</li>
                    <li>🎧 دعم فني مباشر</li>
                </ul>
                <a href="#" class="bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">تواصل معنا</a>
            </div>
        </div>
    </div>
</section>


<!-- ✅ دعوة للعمل -->
<section class="py-20 bg-orange-500 text-center text-white sm:px-[5%]">
    <h3 class="text-3xl font-bold mb-4">هل أنت جاهز للانطلاق معنا؟</h3>
    <p class="mb-6">انضم لآلاف المستخدمين الذين يختصرون روابطهم بذكاء.</p>
    <a href="#" class="bg-white text-orange-600 font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition">ابدأ الآن مجانًا</a>
</section>

<!-- ✅ الفوتر -->
<footer class="bg-gray-900 text-gray-300 py-10 sm:px-[5%]">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8 text-sm text-center md:text-right">
        <div>
            <h5 class="font-bold text-white mb-2">روابط سريعة</h5>
            <ul>
                <li><a href="#" class="hover:text-white">الرئيسية</a></li>
                <li><a href="#" class="hover:text-white">الأسعار</a></li>
                <li><a href="#" class="hover:text-white">الدخول</a></li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-white mb-2">الدعم</h5>
            <ul>
                <li>البريد: support@yourlink.com</li>
                <li>واتساب: +970 599 XXX XXX</li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-white mb-2">منصة رابطك</h5>
            <p>نظام ذكي لاختصار الروابط وتحسين تجربة المستخدم.</p>
        </div>
    </div>
</footer>
@endsection
