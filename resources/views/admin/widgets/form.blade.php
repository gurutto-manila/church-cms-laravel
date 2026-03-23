@extends('layouts.admin.layout')
@section('content')
    <div class="w-full">
        <div>
            <h1 class="admin-h1 mb-5 flex items-center">
                <a href="{{ url('/admin/widgets') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Add Widgets</span>
            </h1>
        </div>
        <div class="bg-white shadow my-5">

            <div class="px-3 py-3 mx-2">
                <form method="post" action="{{ url('/admin/widgets/create') }}" id="widgets" enctype="multipart/form-data">
                    @csrf

                    @if (old('content') != '')
                        @php $content = old('content'); @endphp
                    @endif



                    <div class="my-3">
                        <div class="">
                            <div class="w-full lg:w-1/4">
                                <label for="content" class="tw-form-label">Content</label>
                            </div>
                            <div class="w-full lg:w-2/5 my-2">
                                <textarea type="textarea" name="content" id="content"
                                    class="tw-form-control w-full">{{ $content }}</textarea>
                                <span class="text-danger text-xs">{{ $errors->first('content') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 mb-4">
                        <button class="btn btn-primary blue-bg text-white rounded px-3 py-1 text-sm font-medium"
                            id="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <link href="{{ url('css/code_mirror/codemirror.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/code_mirror/material.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/code_mirror/codemirror.js') }}"></script>
    <script src="{{ asset('js/code_mirror/css.js') }}"></script>
    <script src="{{ asset('js/code_mirror/htmlmixed.js') }}"></script>
    <script src="{{ asset('js/code_mirror/javascript.js') }}"></script>
    <script src="{{ asset('js/code_mirror/xml.js') }}"></script>
    <script type="text/javascript">
        var htmlEditor = CodeMirror.fromTextArea(document.getElementById("content"), {
            lineNumbers: true,
            mode: 'htmlmixed',
        });
    </script>
@endpush
