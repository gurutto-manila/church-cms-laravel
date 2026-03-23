@extends('layouts.preacher.layout')
@section('content')
    <div class="w-full">
        <!--  lg:w-11/12 -->
        <div>
            <h1 class="admin-h1 mb-5 flex items-center">
                <a href="{{ url('preacher/sermon') }}" title="Back" class="rounded-full bg-gray-300 p-2">
                    <img src="{{ url('/uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Edit Sermon</span>
            </h1>
        </div>
        @include('partials.message')
        <div class="bg-white shadow px-4 py-3">
            <form method="POST" action="{{ url('/preacher/sermon/edit/' . $sermon->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="my-5">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label for="title" class="tw-form-label">Title</label>
                        </div>
                        <div class="w-full lg:w-2/5 my-2">
                            <input type="text" name="title" value="{{ old('title', $sermon->title) }}" id="title"
                                class="tw-form-control w-full">
                            <span class="text-danger text-xs">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label class="tw-form-label">Description</label>
                        </div>
                        <div class="w-full lg:w-2/5 my-2">
                            <textarea type="textarea" name="description" id="description" class="tw-form-control w-full"
                                rows="3">{{ old('description', $sermon->description) }}</textarea>
                            <span class="text-danger text-xs">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label class="tw-form-label">Cover Image</label>
                        </div>
                        <div class="my-2 w-full lg:w-2/5">
                            <input type="file" name="cover_image" id="cover_image" class="tw-form-control w-full">
                            <span class="text-danger text-xs">{{ $errors->first('cover_image') }}</span>
                        </div>
                    </div>
                </div>
                <div class="my-6">
                    <button class="btn btn-primary blue-bg text-white rounded px-3 py-1 text-sm font-medium"
                        id="create">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
