@extends('layouts.admin.layout')

@section('content')
    <div class="relative">
        <div class="flex flex-wrap lg:flex-row justify-between">
            <portal-target name="guest_count"></portal-target>
            <!-- <div class="">
                    <h1 class="admin-h1">Guests ( {{ $count }} )</h1>
                </div> -->
            <div class="w-full lg:w-2/4">
                <portal-target name="search_guest"></portal-target>
                <portal-target name="guestfilter"></portal-target>
            </div>
            <div class="relative flex items-center w-1/4 lg:justify-end">
                <div class="flex items-center" dusk="add-button">
                    <a href="{{ url('/admin/guest/add') }}"
                        class="no-underline text-white  px-4 mx-1 flex items-center custom-green py-1 justify-center rounded">
                        <span class="mx-1 text-sm font-semibold">Add</span>
                        <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3">
                    </a>
                </div>
                <div class="">
                    <a href="{{ url('/admin/exportGuests/?' . $query . '&usergroup_id=5') }}" id="export-button"
                        class="no-underline text-white  px-4 mx-1 flex items-center custom-green py-1 rounded">
                        <span class="mx-1 text-sm font-semibold">Export</span>
                    </a>
                </div>
                <!-- <div class="">
                        <a href="{{ url('/admin/import') }}" id="import-button" class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1">
                            <span class="mx-1 text-sm font-semibold">Import</span>
                        </a> 
                    </div> -->
            </div>
        </div>
        @include('partials.message')
        <guest-list url="{{ url('/') }}" searchquery="{{ $query }}" letter="{{ $alphabet }}"
            type="{{ $type }}"></guest-list>
        <search-filter-guest url="{{ url('/') }}" searchquery="{{ $query }}"></search-filter-guest>
    </div>
@endsection
