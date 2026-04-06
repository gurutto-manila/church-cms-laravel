@extends('theme::layout')

@section('title', 'Events')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

    {{-- Upcoming Events --}}
    <section class="mb-14">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <span class="inline-block w-3 h-3 rounded-full bg-green-500"></span>
            Upcoming Events
        </h2>

        @if($upcoming->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($upcoming as $event)
            <a href="{{ route('web.event', $event->id) }}" class="block bg-white rounded-lg shadow hover:shadow-md overflow-hidden transition">
                @if($event->image)
                    <img src="{{ \Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full h-44 object-cover">
                @else
                    <div class="w-full h-44 bg-green-50 flex items-center justify-center text-green-300 text-5xl">&#128197;</div>
                @endif
                <div class="p-4">
                    @if($event->category)
                        <span class="text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded-full">{{ $event->category }}</span>
                    @endif
                    <h3 class="font-semibold text-gray-800 mt-2">{{ $event->title }}</h3>
                    @if($event->location)
                        <p class="text-xs text-gray-400 mt-1">&#128205; {{ $event->location }}</p>
                    @endif
                    <p class="text-xs text-indigo-600 mt-1">
                        @if($event->allDay)
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }} (All Day)
                        @else
                            {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y, g:i A') }}
                        @endif
                    </p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-8">{{ $upcoming->appends(request()->except('upcoming_page'))->links() }}</div>
        @else
            <p class="text-gray-500">No upcoming events.</p>
        @endif
    </section>

    {{-- Completed Events --}}
    <section>
        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <span class="inline-block w-3 h-3 rounded-full bg-gray-400"></span>
            Completed Events
        </h2>

        @if($completed->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($completed as $event)
            <a href="{{ route('web.event', $event->id) }}" class="block bg-white rounded-lg shadow hover:shadow-md overflow-hidden transition opacity-80">
                @if($event->image)
                    <img src="{{ \Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full h-44 object-cover grayscale">
                @else
                    <div class="w-full h-44 bg-gray-100 flex items-center justify-center text-gray-300 text-5xl">&#128197;</div>
                @endif
                <div class="p-4">
                    @if($event->category)
                        <span class="text-xs bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full">{{ $event->category }}</span>
                    @endif
                    <h3 class="font-semibold text-gray-600 mt-2">{{ $event->title }}</h3>
                    @if($event->location)
                        <p class="text-xs text-gray-400 mt-1">&#128205; {{ $event->location }}</p>
                    @endif
                    <p class="text-xs text-gray-400 mt-1">
                        {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}
                    </p>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-8">{{ $completed->appends(request()->except('completed_page'))->links() }}</div>
        @else
            <p class="text-gray-500">No completed events.</p>
        @endif
    </section>

</div>
@endsection
