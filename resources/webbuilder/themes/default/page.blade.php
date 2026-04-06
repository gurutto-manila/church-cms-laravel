@extends('theme::layout')

@section('title', $page->page_name)
@section('meta_description', Str::limit(strip_tags($page->description), 160))

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    @if($page->cover_image)
        <img src="{{ \Storage::url($page->cover_image) }}" alt="{{ $page->page_name }}" class="w-full h-64 object-cover rounded-lg mb-8">
    @endif

    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $page->page_name }}</h1>

    <div class="prose max-w-none text-gray-700">
        {!! $page->description !!}
    </div>

    <div class="mt-10">
        <a href="{{ route('web.pages') }}" class="text-indigo-600 hover:underline text-sm">&larr; Back to Pages</a>
    </div>
</div>
@endsection
