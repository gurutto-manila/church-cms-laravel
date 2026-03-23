@extends('layouts.admin.layout')
@section('content')

    <div class="flex flex-wrap lg:flex-row justify-between">
        <div class="">
            <h1 class="admin-h1">Widgets</h1>
        </div>
        <div class="relative flex items-center w-1/4 justify-end">
            <div class="flex items-center">
                <a href="{{ url('/admin/widgets/create') }}"
                    class="no-underline text-white px-4  mx-1 flex items-center custom-green py-1 justify-center rounded"
                    target="_blank">
                    <span class="mx-1 text-sm font-semibold">Add</span>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 409.6 409.6"
                        xml:space="preserve" class="w-3 h-3 fill-current text-white">
                        <g>
                            <g>
                                <path
                                    d="M392.533,187.733H221.867V17.067C221.867,7.641,214.226,0,204.8,0s-17.067,7.641-17.067,17.067v170.667H17.067 C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h170.667v170.667c0,9.426,7.641,17.067,17.067,17.067 s17.067-7.641,17.067-17.067V221.867h170.667c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white my-3">
        @include('partials.message')

        @if (count($getWidgets) > 0)

            @php
                $i = ($getWidgets->currentPage() - 1) * $getWidgets->perPage() + 1;
            @endphp

            @foreach ($getWidgets as $widgetData)

                <div class="flex flex-col bg-white border shadow p-3 mb-4">
                    <div class="flex justify-between">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                            <input type="text" name="slug" class="tw-form-control w-full" id="slug_{{ $widgetData->id }}"
                                value="<app-widgets [widgetID]='{{ $widgetData->slug }}'></app-widgets>">
                        </div>
                        <div class="flex items-center">
                            <button onclick="copyClip('{{ $widgetData->id }}')"
                                class="bg-yellow-500 text-xs px-2 py-1 mx-2 text-white rounded">Copy</button>
                            <div class="">
                                <a href="{{ url('admin/widgets/' . $widgetData->id . '/edit') }}"
                                    class="btn btn-primary submit-btn text-white rounded px-3 py-1 text-sm">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="my-2 flex flex">
                        <div class="text-sm">Created By : @if (isset($widgetData->userInfo->name)){{ $widgetData->userInfo->name }}@else - @endif on
                            {{ $widgetData->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="my-2 text-sm">
                        <textarea type="textarea" name="content" class="tw-form-control w-full"
                            id="content_{{ $widgetData->id }}">{{ $widgetData->content }}</textarea>
                    </div>

                </div>
            @endforeach

        @else
            <div class="md:flex bg-white border shadow p-3">
                <div class="my-2 text-sm">
                    No records found
                </div>
            </div>
        @endif


        {{ $getWidgets->links('layouts.pagination', ['search' => $build]) }}
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
        @if (count($getWidgets) > 0)
            @foreach ($getWidgets as $widgetData)
                editor('{{ $widgetData->id }}')
            @endforeach
        @endif

        function editor(id) {
            CodeMirror.fromTextArea(document.getElementById("content_" + id), {
                lineNumbers: true,
                mode: 'htmlmixed'
            });
        }

        function copyClip(id) {
            var copyText = document.getElementById("slug_" + id);
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
    </script>
@endpush
