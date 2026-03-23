@extends('layouts.admin.layout')

@section('content')
    <div class="flex flex-row justify-between">
        <div class="w-1/2">
            <h1 class="admin-h1">FAQ</h1>
        </div>
        <div class="relative flex items-center w-1/2 justify-end">
            <a href="{{ url('/admin/faq/create') }}" id="upload-btn"
                class="no-underline text-white  px-4  mx-1 flex items-center custom-green py-1 justify-center rounded">
                <span class="mx-1 text-sm font-semibold">Add FAQ</span>
                <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3">
            </a>
        </div>
    </div>

    <div class="bg-white my-3">
        @include('partials.message')
        <faq-list url="{{ url('/') }}"></faq-list>
    </div>
@endsection
