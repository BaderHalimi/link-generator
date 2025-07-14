@extends('layouts.dashboard')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow border border-orange-200 mt-6">
    <h2 class="text-2xl font-bold text-orange-600 mb-4 text-center">إنشاء تذكرة جديدة</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-50 border border-red-200 text-red-700 p-3 rounded">
            <ul class="text-sm space-y-1">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('support.store') }}" class="space-y-4">
        @csrf

        <!-- Subject -->
        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">الموضوع</label>
            <input type="text" name="title" id="subject" value="{{ old('subject') }}"
                   class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:border-orange-500 text-sm">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">الوصف</label>
            <textarea name="description" id="description" rows="4"
                      class="block w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:border-orange-500 text-sm">{{ old('description') }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg shadow-sm text-sm">
                إرسال التذكرة
            </button>
        </div>
    </form>
</div>
@endsection
