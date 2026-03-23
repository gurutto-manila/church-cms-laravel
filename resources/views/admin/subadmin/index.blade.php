@extends('layouts.admin.layout')

@section('content')
    <div class="relative">
        <div class="flex flex-wrap lg:flex-row justify-between">
            <portal-target name="sub_admin_count"></portal-target>
            <!-- <div class="">
                    <h1 class="admin-h1">Sub Admins ( {{ $count }} )</h1>
                </div> -->
            <div class="w-full lg:w-2/4">
                <portal-target name="subadminsearch"></portal-target>
                <portal-target name="subadminfilter"></portal-target>
            </div>
            <div class="relative flex items-center w-1/4 lg:justify-end">
                <div class="flex items-center" dusk="add-button">
                    <a href="{{ url('/admin/subadmin/add/') }}"
                        class="no-underline text-white  px-4  mx-1 flex items-center custom-green py-1 justify-center rounded">
                        <span class="mx-1 text-sm font-semibold">Add</span>
                        <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3">
                    </a>
                </div>
                <!-- <div class="">
                        <a href="{{ url('/admin/exportUsers/?' . $query . '&usergroup_id=4') }}" id="export-button" class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1">
                            <span class="mx-1 text-sm font-semibold">Export</span>
                        </a> 
                    </div>
                    <div class="">
                        <a href="{{ url('/admin/import') }}" id="import-button" class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1">
                            <span class="mx-1 text-sm font-semibold">Import</span>
                        </a> 
                    </div> -->
            </div>
        </div>
        @include('partials.message')
        <sub-admin-list url="{{ url('/') }}" searchquery="{{ $query }}" letter="{{ $alphabet }}"
            type="{{ $type }}"></sub-admin-list>
        <filter-subadmin url="{{ url('/') }}" searchquery="{{ $query }}"></filter-subadmin>
    </div>
@endsection
