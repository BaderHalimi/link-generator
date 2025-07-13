<div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg border-t-4 border-orange-500 space-y-6">

    <!-- عنوان -->
    <h2 class="text-2xl font-bold text-orange-600 text-center">
        إعلان حصري!
    </h2>

    <!-- نص إعلاني -->
    <p class="text-gray-700 text-center">
        احصل على أفضل العروض الحصرية اليوم! لا تفوت الفرصة.
    </p>

    <!-- صورة إعلان أو بانر -->
    <div class="overflow-hidden rounded-lg shadow-md">
        <img src="https://via.placeholder.com/600x200?text=إعلان+هنا" alt="إعلان" class="w-full">
    </div>

    <!-- تايمر عد تنازلي -->
    <div class="flex items-center justify-center space-x-2 text-orange-600 text-3xl font-bold">
        <span id="timer">10</span>
        <span>ثواني متبقية</span>
    </div>

    <!-- زر متابعة أو تخطي -->
    <div class="text-center">
        <a href="{{ route('landing.go2', ['code' => $link->code]) }}">
        
        <button
            id="skipButton"
            disabled
            class="bg-orange-500 text-white px-6 py-2 rounded-full font-semibold shadow hover:bg-orange-600 transition disabled:opacity-50"
        >
            تخطي الإعلان
        </button></a>
    </div>

    <!-- إعلان نصي إضافي -->
    <div class="bg-orange-50 border border-orange-200 p-4 rounded-lg text-center text-orange-700">
        إعلان إضافي: اكتشف أحدث منتجاتنا بأفضل الأسعار!
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let timerElement = document.getElementById('timer');
        let skipButton = document.getElementById('skipButton');
        let countdown = 2;

        const interval = setInterval(() => {
            countdown--;
            timerElement.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                skipButton.disabled = false;
                skipButton.textContent = "تابع الآن";
                skipButton.classList.add('bg-green-500', 'hover:bg-green-600');
                skipButton.classList.remove('bg-orange-500', 'hover:bg-orange-600');
            }
        }, 1000);
    });
</script>
