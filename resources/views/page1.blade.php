<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elegant Ad Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- الصفحة كاملة مقسومة -->
  <div class="min-h-screen flex flex-col md:flex-row">

    <!-- إعلان جانبي يسار -->
    <aside class="hidden md:flex w-1/4 bg-orange-50 border-r border-orange-200 items-center justify-center p-4">
      <div class="text-orange-700 text-center space-y-2">
        <h3 class="font-bold text-lg">إعلان جانبي</h3>
        <img src="https://via.placeholder.com/160x600?text=Ad+Left" alt="Ad Left" class="rounded shadow">
        <p class="text-sm">أفضل العروض هنا</p>
      </div>
    </aside>

    <!-- المحتوى الأساسي -->
    <main class="flex-1 flex items-center justify-center p-4">
      <div class="bg-white rounded-lg shadow-lg border-t-4 border-orange-500 max-w-xl w-full p-6 space-y-6">

        <!-- عنوان -->
        <h2 class="text-3xl font-bold text-orange-600 text-center">إعلان حصري!</h2>

        <!-- نص -->
        <p class="text-gray-700 text-center">استفد من عروضنا المميزة الآن، لا تضيع الفرصة!</p>

        <!-- صورة بانر -->
        <div class="overflow-hidden rounded-lg shadow-md">
          <img src="https://via.placeholder.com/600x200?text=إعلان+هنا" alt="إعلان" class="w-full">
        </div>

        <!-- المرحلة + زر -->
        <div class="text-center space-y-2">
          <div class="text-orange-600 font-semibold text-lg">
            المرحلة: 1
          </div>
          <a href="{{ route('landing.go2', ['code' => $link->code]) }}">
            <button
              id="skipButton"
              disabled
              class="w-full bg-orange-500 text-white px-6 py-3 rounded-full font-semibold shadow hover:bg-orange-600 transition disabled:opacity-50 cursor-not-allowed text-lg"
            >
              انتظر (<span id="timer">10</span> ثواني)
            </button>
          </a>
        </div>

        <!-- إعلان نصي إضافي -->
        <div class="bg-orange-50 border border-orange-200 p-4 rounded-lg text-center text-orange-700">
          إعلان إضافي: اكتشف منتجاتنا الجديدة بأفضل الأسعار!
        </div>

      </div>
    </main>

    <!-- إعلان جانبي يمين -->
    <aside class="hidden md:flex w-1/4 bg-orange-50 border-l border-orange-200 items-center justify-center p-4">
      <div class="text-orange-700 text-center space-y-2">
        <h3 class="font-bold text-lg">إعلان جانبي</h3>
        <img src="https://via.placeholder.com/160x600?text=Ad+Right" alt="Ad Right" class="rounded shadow">
        <p class="text-sm">فرص مميزة في انتظارك</p>
      </div>
    </aside>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      let timerElement = document.getElementById('timer');
      let skipButton = document.getElementById('skipButton');
      let countdown = 10;

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
