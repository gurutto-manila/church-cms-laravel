@extends('layouts.admin.layout')
@section('content')
    <div class="w-full">
        <!-- lg:w-11/12 -->
        <div>
            <h1 class="admin-h1  flex items-center">
                <a href="{{ url('/admin/gallery') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Edit Gallery Album</span>
            </h1>
        </div>
        <div class="bg-white shadow px-2 py-2 my-3">
            <form method="POST" action="{{ url('/admin/gallery/edit/' . $gallery->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="my-3 px-2 py-1">
                    <div class="">
                        <div class="w-full lg:w-1/4">
                            <label for="name" class="tw-form-label">Gallery Name<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="w-full lg:w-2/5 my-2">
                            <input type="text" name="name" id="name" class="tw-form-control w-full"
                                placeholder="Gallery Name" value="{{ $gallery->name }}">
                            <span class="text-danger text-xs">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                </div>

                <div class="my-3 px-2 py-1">
                    <div class="">
                        <img src="{{ $gallery->FullPath }}" class="img-responsive w-32 h-32">
                        <div class="">
                            <label class="tw-label cursor-pointer text-xs text-gray-600"> Change Cover Image
                                <input type="file" name="path" id="path">
                            </label>
                        </div>
                    </div>
                    <span class="text-red-500 text-xs font-semibold">{{ $errors->first('path') }}</span>
                </div>

                <div class="my-6 px-2">
                    <button class="btn btn-primary blue-bg text-white rounded px-3 py-1 text-sm font-medium">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')

    <style>
        .tw-label {
            color: #3492e2;
        }

        .tw-label input[type="file"] {
            display: none;
        }

    </style>

@endpush
