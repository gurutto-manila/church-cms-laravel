@extends('layouts.admin.layout')
@section('content')
    <div class="w-full">
        <div>
            <h1 class="admin-h1 mb-5 flex items-center">
                <a href="{{ url('/admin/botman/index') }}" title="Back" class="rounded-full bg-gray-300 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Edit Botman</span>
            </h1>
        </div>
        <div class="bg-white shadow my-5">

            <div class="px-3 py-3 mx-2">
                <form method="post" action="{{ url('/admin/botman/' . $edit->id . '/update') }}" id="botman"
                    enctype="multipart/form-data">
                    @csrf

                    @if (old('tags') != '')
                        @php $tags = old('tags'); @endphp
                    @else
                        @php $tags = $display; @endphp
                    @endif

                    @if (old('description') != '')
                        @php $description = old('description'); @endphp
                    @else
                        @php $description = $edit->answers; @endphp
                    @endif

                    @php
                        $active = 'checked';
                        $in_active = '';
                    @endphp
                    @if (old('status') != '')
                        @if (old('status') == 'active')
                            @php
                                $active = 'checked';
                                $in_active = '';
                            @endphp
                        @elseif(old('status') == 'in-active')
                            @php
                                $in_active = 'checked';
                                $active = '';
                            @endphp
                        @endif
                    @else
                        @if ($edit->status == 'active')
                            @php $active ='checked'; @endphp
                        @elseif($edit->status == 'in-active')
                            @php $in_active ='checked'; @endphp
                        @endif
                    @endif

                    <div class="my-3">
                        <div class="">
                            <div class="w-full lg:w-1/4">
                                <label for="tags" class="tw-form-label">Tag</label>
                            </div>
                            <div class="w-full lg:w-2/5 my-2">
                                <input type="text" name="tags" id="tags" class="tw-form-control w-full"
                                    value="{{ $tags }}">
                                <span class="text-danger text-xs">{{ $errors->first('tags') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <div class="">
                            <div class="w-full lg:w-1/4">
                                <label for="description" class="tw-form-label">Description</label>
                            </div>
                            <div class="w-full lg:w-2/5 my-2">
                                <textarea type="textarea" name="description" id="description"
                                    class="tw-form-control w-full">{{ $description }}</textarea>
                                <span class="text-danger text-xs">{{ $errors->first('description') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="my-3">
                        <div class="">
                            <div class="w-full lg:w-1/4">
                                <label for="description" class="tw-form-label">Status</label>
                            </div>
                            <div class="w-full lg:w-2/5 my-2">
                                <div class="button-boxer clearfix">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="status_active"
                                                value="active" {{ $active }}> Active
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="status_in_active"
                                                value="in-active" {{ $in_active }}> In-active
                                        </label>
                                    </div>
                                </div>
                                <span class="text-danger text-xs">{{ $errors->first('status') }}</span>
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
<style>
    .text-danger {
        color: red;
    }

    .tagsinput {
        width: 100% !important;
    }

</style>
@push('scripts')
    <link href="{{ url('css/jquery.tagsinput.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery.tagsinput.min.js') }}"></script>
    <script type="text/javascript">
        $('#tags').tagsInput();
    </script>
@endpush
