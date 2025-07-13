<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page - Step 3</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg border-t-4 border-orange-500 space-y-6">

    <!-- المرحلة -->
    <div class="text-orange-600 font-semibold text-lg text-center">
      المرحلة: 3
    </div>

    <!-- عنوان رئيسي -->
    <h2 class="text-3xl font-bold text-orange-600 text-center">
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

    <!-- الزر مع العداد -->
    <div class="text-center space-y-2">
      <a href="{{ route('wait', ['data' => $encrypted]) }}">
        <button
          id="skipButton"
          disabled
          class="w-full bg-orange-500 text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-orange-600 transition disabled:opacity-50 cursor-not-allowed text-lg"
        >
          انتظر (<span id="timer">@json(time_landing_page($link->id))</span> ثواني)
        </button>
      </a>
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
      let countdown = @json(time_landing_page($link->id));

      const interval = setInterval(() => {
        countdown--;
        timerElement.textContent = countdown;

        if (countdown <= 0) {
          clearInterval(interval);
          skipButton.disabled = false;
          skipButton.textContent = "تابع الآن";
          skipButton.classList.remove('cursor-not-allowed');
          skipButton.classList.add('bg-green-500', 'hover:bg-green-600');
          skipButton.classList.remove('bg-orange-500', 'hover:bg-orange-600');
        }
      }, 1000);
    });
  </script>

</body>
</html>
