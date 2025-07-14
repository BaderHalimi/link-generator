@extends('layouts.dashboard')
@section("content")
<div class="max-w-6xl mx-auto p-6">

    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-orange-600">التذاكر (Tickets)</h2>
        <a href="{{ route('support.create',"step=7") }}" wire:navigate class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded shadow-sm text-sm">
            + تذكرة جديدة
        </a>
    </div>
    <div class="overflow-x-auto bg-white rounded-lg shadow border">
        <table class="min-w-full divide-y divide-orange-200">
            <thead class="bg-orange-500 text-white">
                <tr>
                    <th class="px-4 py-3 text-right">التاريخ</th>
                    <th class="px-4 py-3 text-right">الموضوع</th>
                    <th class="px-4 py-3 text-right">الوصف</th>
                    <th class="px-4 py-3 text-right">الحالة</th>
                    <th class="px-4 py-3 text-right">الإجراءات</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-orange-100">
                @forelse($schats as $chat)
                    @php
                        $subject = $chat->additional_data['title'] ?? '-';
                        $description = $chat->additional_data['description'] ?? '-';
                        //dd($description,$chat->additional_data['description'] );
                        $status = strtolower($chat->additional_data['status'] ?? 'unknown');
                    @endphp
                    <tr class="hover:bg-orange-50">
                        <td class="px-4 py-2">{{ $chat->created_at->format('Y-m-d H:i') }}</td>
                        <td class="px-4 py-2">{{ $subject }}</td>
                        <td class="px-4 py-2">{{ $description }}</td>
                        <td class="px-4 py-2">
                            <span class="inline-block px-2 py-1 rounded-full text-xs
                                {{ $status === 'open' ? 'bg-green-100 text-green-800' : ($status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                {{ ucfirst($status) }}
                            </span>
                        </td>
                        <td class="px-4 py-2 border-b text-center space-x-2 rtl:space-x-reverse">
                            @if($status === 'open')
<!-- زر عرض -->
<a href="{{ route('support.show', [$chat->id,"step=7"]) }}" wire:navigate
    class="inline-block bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600 text-sm">
     عرض
 </a>

 <form action="{{ route('support.destroy', $chat->id) }}" method="POST" class="inline-block"
       onsubmit="return confirm('هل أنت متأكد من حذف هذه التذكرة؟');">
     @csrf
     @method('DELETE')
     <button type="submit"
             class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
         حذف
     </button>
 </form>
 
                            @elseif($status === 'pending')
                                <a href="{{ route('tickets.show', $chat->id) }}" wire:navigate
                                   class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600 text-sm">
                                    عرض
                                </a>
                            @else
                                <span class="text-gray-400 text-sm">لا يوجد إجراء</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                            لا توجد تذاكر حالياً.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection