@extends('layouts.admin.layout')
@section('content')
    <div class="w-full mx-2">
        <h1 class="admin-h1 mb-3 flex items-center">
            <a href="{{ url('/admin/video-conference') }}" class="rounded-full bg-gray-100 p-2" title="Back">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">Edit Room</span>
        </h1>
        @include('partials.message')
        <div class="bg-white shadow px-4 py-3">
            <edit-video-room url="{{ url('/') }}" id="{{ $conference->id }}"></edit-video-room>
        </div>
    </div>
@endsection
