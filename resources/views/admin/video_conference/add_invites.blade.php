@extends('layouts.admin.layout')
@section('content')
    <div class="">
        <h2 class="admin-h1 my-3 flex items-center">
            <a href="{{ url('/admin/video-conference/manage-invites/' . $conference->id) }}"
                class="rounded-full bg-gray-100 p-2" title="Back">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">Add Invitees</span>
        </h2>
        <div class="bg-white shadow px-4 py-3">
            <add-invitee url="{{ url('/') }}" id="{{ $conference->id }}"></add-invitee>
        </div>
    </div>
@endsection
