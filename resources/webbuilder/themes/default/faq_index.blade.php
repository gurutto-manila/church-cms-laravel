@extends('theme::layout')

@section('title', 'FAQ')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Frequently Asked Questions</h1>

    @forelse($categories as $category)
    <div class="mb-8">
        <h2 class="text-xl font-semibold text-indigo-700 mb-3">{{ $category->name }}</h2>

        @foreach($category->faq as $item)
        <details class="bg-white border border-gray-200 rounded-lg mb-2 group">
            <summary class="flex justify-between items-center px-5 py-4 cursor-pointer text-gray-800 font-medium list-none hover:bg-gray-50">
                {{ $item->question }}
                <span class="text-indigo-500 group-open:rotate-180 transition-transform">&#9660;</span>
            </summary>
            <div class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                {!! $item->answer !!}
            </div>
        </details>
        @endforeach
    </div>
    @empty
    <p class="text-gray-500">No FAQs available.</p>
    @endforelse
</div>
@endsection
