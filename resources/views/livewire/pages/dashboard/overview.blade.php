<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>لوحة تحكم - Overview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="min-h-screen p-6 bg-gray-100">
        <!-- Page Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-orange-600">نظرة عامة (Overview)</h1>
            <p class="text-gray-600">لوحة التحكم لموقع اختصار الروابط</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow rounded-lg p-6 border-t-4 border-orange-500">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <i class="ri-link text-3xl text-orange-500"></i>
                    <div>
                        <h2 class="text-xl font-bold">1200 رابط مختصر</h2>
                        <p class="text-gray-500">إجمالي الروابط</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-t-4 border-orange-500">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <i class="ri-bar-chart-2-line text-3xl text-orange-500"></i>
                    <div>
                        <h2 class="text-xl font-bold">35000 نقرة</h2>
                        <p class="text-gray-500">إجمالي النقرات</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-t-4 border-orange-500">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <i class="ri-money-dollar-circle-line text-3xl text-orange-500"></i>
                    <div>
                        <h2 class="text-xl font-bold">$1500</h2>
                        <p class="text-gray-500">إجمالي الأرباح</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-2xl font-bold text-orange-600 mb-4">آخر الروابط المختصرة</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-orange-200">
                    <thead class="bg-orange-500 text-white">
                        <tr>
                            <th class="text-right px-4 py-2">الرابط الأصلي</th>
                            <th class="text-right px-4 py-2">الرابط المختصر</th>
                            <th class="text-right px-4 py-2">النقرات</th>
                            <th class="text-right px-4 py-2">التاريخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-orange-50">
                            <td class="px-4 py-2 border-b">https://example.com/very/long/link/1</td>
                            <td class="px-4 py-2 border-b text-orange-600">https://sho.rt/abc123</td>
                            <td class="px-4 py-2 border-b">120</td>
                            <td class="px-4 py-2 border-b">2025-07-10</td>
                        </tr>
                        <tr class="hover:bg-orange-50">
                            <td class="px-4 py-2 border-b">https://example.com/very/long/link/2</td>
                            <td class="px-4 py-2 border-b text-orange-600">https://sho.rt/xyz456</td>
                            <td class="px-4 py-2 border-b">85</td>
                            <td class="px-4 py-2 border-b">2025-07-09</td>
                        </tr>
                        <tr class="hover:bg-orange-50">
                            <td class="px-4 py-2">https://example.com/very/long/link/3</td>
                            <td class="px-4 py-2 text-orange-600">https://sho.rt/lmn789</td>
                            <td class="px-4 py-2">65</td>
                            <td class="px-4 py-2">2025-07-08</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
