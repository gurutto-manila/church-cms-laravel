<div class="w-full">
    <div class="flex justify-between">
        <h1 class="text-sm uppercase text-gray-800 font-semibold mb-2">Upcoming Events</h1>
        <a href="{{ url('/admin/events') }}" class="text-xs underline">See All</a>
    </div>

    <div class="w-full shadow bg-white rounded dashboard-content">
        <dashboard-event url="{{ url('/') }}"></dashboard-event>
    </div>
</div>
