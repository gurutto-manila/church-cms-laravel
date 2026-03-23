@extends('layouts.admin.layout')
@section('content')
    <div class="w-full">
        <div>
            <h1 class="admin-h1 flex items-center">
                <a href="{{ url('/admin/gallery') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Create Gallery Album</span>
            </h1>
        </div>
        <div class="bg-white shadow px-3 my-3">
            <form method="POST" action="{{ url('/admin/gallery/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="py-3 px-2">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label for="name" class="tw-form-label">Gallery Name<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="w-full lg:w-2/5 my-2">
                            <input type="text" name="name" id="name" class="tw-form-control w-full"
                                placeholder="Gallery Name">
                            <span class="text-danger text-xs">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                </div>

                <div class="py-3 px-2">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label class="tw-form-label">Cover Image<span class="text-red-500">*</span></label>
                        </div>
                        <div class="my-2 w-full lg:w-2/5">
                            <input type="file" name="path" id="path" class="tw-form-control w-full">
                            <span class="text-danger text-xs">{{ $errors->first('path') }}</span>
                        </div>
                    </div>
                </div>
                <div class="pt-3 px-2 pb-4">
                    <button class="btn btn-primary blue-bg text-white rounded px-3 py-1 text-sm font-medium"
                        id="create">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
