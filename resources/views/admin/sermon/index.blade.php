@extends('layouts.admin.layout')

@section('content')
    <div class="flex lg:items-center md:items-center justify-between flex-col lg:flex-row md:flex-row">
        <h1 class="admin-h1">Sermon</h1>
        <form method="GET" action="{{ url('/admin/sermons') }}" role="search" enctype="multipart/form-data"
            class="mb-0">
            <div class="">
                <div class="flex lg:justify-end md:justify-end items-center">
                    <div class="search relative w-48">
                        <input type="text" name="q" class="tw-form-control w-full relative" placeholder="Search"
                            value="{{ old('q') }}">
                        <button class="no-underline text-white px-4 mx-1 py-1 absolute right-0 focus:outline-none">
                            <img src="{{ url('uploads/icons/search.svg') }}"
                                class="w-4 h-4 absolute right-0 mt-2 mx-1 top-0">
                        </button>
                    </div>
                    <div class="date-select date-select_none dashboard-reset mx-1 lg:mx-0 md:mx-0">
                        <a href="{{ url('/admin/sermons') }}" id="do-reset"
                            class="text-sm border bg-gray-100 text-grey-darkest py-1 px-4">Reset</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="bg-white flex flex-wrap my-3">
        @foreach ($sermons as $sermon)
            <div class="w-full lg:w-1/4 px-2 my-5 flex h-auto">
                <div class="shadow-md p-3 w-full">
                    <div class="flex">
                        <img class="card-img-top w-16 h-16" src="{{ $sermon->CoverImagePath }}">
                        <div class="px-3">
                            <p class="font-bold text-base text-gray-700 capitalize">
                                <a href="{{ url('/admin/sermon/show/' . $sermon->id) }}">{{ $sermon->title }}</a>
                            </p>
                            <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2"> <img
                                    src="{{ url('uploads/icons/microphone.svg') }}" class="w-4 h-4">
                                <span class="mx-2">
                                    <a
                                        href="{{ url('/admin/preacher/show/' . $sermon->user->name) }}">{{ $sermon->user->FullName }}</a>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="leading-loose mt-3">
                        <p class="text-xs text-gray-700 flex">{{ \Str::limit($sermon->description, 30, '...') }}</p>
                        <p class="text-xs text-gray-700 flex">Links : {{ count($sermon->sermonlinks) }}</p>
                        <div class="flex items-center">
                            <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2 mr-4"> <img
                                    src="{{ url('uploads/icons/like.svg') }}" class="w-4 h-4"><span
                                    class="mx-2">{{ $sermon->sermonlikevote }}</span></p>
                            <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2 mr-4"> <img
                                    src="{{ url('uploads/icons/dislike.svg') }}" class="w-4 h-4"><span
                                    class="mx-2">{{ $sermon->sermonunlikevote }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        @if (count($sermons) == 0)
            <div class="p-2">
                <p class="mx-3">No Records Found</p>
            </div>
        @endif
    </div>
    {{ $sermons->links() }}
@endsection
