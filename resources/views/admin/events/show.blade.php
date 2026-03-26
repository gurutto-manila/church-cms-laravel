@extends('layouts.admin.layout')

@section('content')
    <div class="">
        <div>
            <h1 class="admin-h1 mb-3 flex items-center">
                <a href="{{ url('/admin/events') }}" class="rounded-full bg-gray-100 p-2" title="Back">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Event Details</span>
            </h1>
        </div>
        <div class="flex flex-col lg:flex-row md:flex-row">
            <div class="w-full lg:w-1/5 md:w-1/5 py-3">
                <div>
                    <img src="{{ $event->ImagePath }}" class="h-40">
                </div>
            </div>
            <input type="hidden" name="event_id" value="{{ $event->id }}" id="event_id">
            <div class="w-full lg:w-4/5 md:w-4/5 lg:mx-6 md:mx-6 relative">
                <div>
                    <h3 class="font-semibold text-3xl text-gray-700">{{ $event->title }}</h3>
                    <div class="">
                        <div class="flex items-start mt-5">
                            <div class="py-1">
                                <img src="{{ url('uploads/icons/microphone.svg') }}" class="w-4 h-4">
                            </div>
                            <div class="text-sm mx-2 flex items-center">
                                <div class="w-24">
                                    <p class="text-gray-700 font-semibold">Organised By:</p>
                                </div>
                                <div class="text-sm tracking-wider">
                                    <p class="text-gray-600">{{ $event->organised_by }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start mt-5">
                            <div class="py-1">
                                <img src="{{ url('uploads/icons/event-clock.svg') }}" class="w-4 h-4">
                            </div>
                            <div class="text-sm mx-2 flex items-center">
                                <div class="w-20">
                                    <p class="text-gray-700 font-semibold">Start Date:</p>
                                    <p class="text-gray-700 font-semibold">End Date:</p>
                                </div>
                                <div class="text-sm tracking-wider">
                                    <p class="text-gray-600">{{ date('d-m-Y h:i A', strtotime($event->start_date)) }}</p>
                                    <p class="text-gray-600">{{ date('d-m-Y h:i A', strtotime($event->end_date)) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start mt-5">
                            <div class="py-1">
                                <img src="{{ url('uploads/icons/event-location.svg') }}" class="w-4 h-4">
                            </div>
                            <div class="text-sm mx-2">
                                <p class="text-gray-600">{{ $event->location }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 flex text-xs justify-end absolute top-0 right-0">
                    <a href="#" onclick="editevent()" id="edit" title="Edit"
                        class="text-white text-xs flex items-center blue-bg rounded px-2 py-1 ml-2 font-medium">
                        <span class="mx-1">Edit</span>
                    </a>
                    <form id="delete-event-form" action="{{ url('/admin/events/delete/' . $event->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Delete" onclick="return confirm('Are you sure you want to delete this event?')"
                            class="text-white text-xs flex items-center blue-bg rounded px-2 py-1 ml-2 font-medium border-0 cursor-pointer">
                            <span class="mx-1">Delete</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white shadow my-5">
            <event-tab url="{{ url('/') }}" id="{{ $event->id }}" event_id="{{ $event->event_id }}"
                entity_id="{{ $event->id }}" entity_name="event" church_id="{{ $event->church_id }}"
                expired="{{ $expired }}"></event-tab>
            <portal-target name="events"></portal-target>
        </div>
    </div>
    <edit-event url="{{ url('/') }}"></edit-event>
@endsection

@push('scripts')
    <script>
        function editevent() {
            $('#edit-event-modal').click();
        }
    </script>
@endpush
