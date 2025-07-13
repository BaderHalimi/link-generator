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
                        <h2 class="text-xl font-bold">{{$links->count() ?? "--"}} رابط مختصر</h2>
                        <p class="text-gray-500">إجمالي الروابط</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-t-4 border-orange-500">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <i class="ri-bar-chart-2-line text-3xl text-orange-500"></i>
                    <div>
                        <h2 class="text-xl font-bold">{{$views->count() ?? "--" }} نقرة</h2>
                        <p class="text-gray-500">إجمالي النقرات</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6 border-t-4 border-orange-500">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <i class="ri-money-dollar-circle-line text-3xl text-orange-500"></i>
                    <div>
                        <h2 class="text-xl font-bold">--</h2>
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
                        <tbody>
                            @if ($links->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center py-8 text-orange-500 bg-orange-50 border rounded-lg">
                                        <div class="flex flex-col items-center space-y-2">
                                            <i class="ri-link-unlink text-4xl"></i>
                                            <p class="text-lg font-semibold">لا يوجد روابط حتى الآن</p>
                                            <p class="text-sm text-gray-500">ابدأ بإضافة روابطك المختصرة لتظهر هنا.</p>
                                        </div>
                                    </td>
                                </tr>
                            @else
                                @foreach($links as $link)
                                    <tr class="hover:bg-orange-50">
                                        <td class="px-4 py-2 border-b truncate max-w-xs">{{ $link->url }}</td>
                                        <td class="px-4 py-2 border-b text-orange-600">
                                            {{ request()->getSchemeAndHttpHost() }}/{{ $link->code }}
                                        </td>
                                        <td class="px-4 py-2 border-b">{{ get_views($link->id) }}</td>
                                        <td class="px-4 py-2 border-b">{{ $link->created_at->translatedFormat('d F Y') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
