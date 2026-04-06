@extends('theme::layout')

@section('title', 'Pages')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Pages</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($pages as $page)
        <a href="{{ route('web.page', $page->id) }}" class="block bg-white rounded-lg shadow hover:shadow-md overflow-hidden transition">
            @if($page->cover_image)
                <img src="{{ \Storage::url($page->cover_image) }}" alt="{{ $page->page_name }}" class="w-full h-44 object-cover">
            @else
                <div class="w-full h-44 bg-indigo-50 flex items-center justify-center text-indigo-300 text-4xl">&#9741;</div>
            @endif
            <div class="p-4">
                <h2 class="font-semibold text-gray-800 text-base">{{ $page->page_name }}</h2>
                <p class="text-sm text-gray-500 mt-1 line-clamp-2">{{ Str::limit(strip_tags($page->description), 100) }}</p>
            </div>
        </a>
        @empty
        <p class="text-gray-500 col-span-3">No pages found.</p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $pages->links() }}
    </div>
</div>
@endsection
