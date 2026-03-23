@extends('layouts.admin.layout')
@section('content')
    <div class="">
        <div class="flex flex-wrap lg:flex-row justify-between">
            <h1 class="admin-h1">Video Room</h1>

            <div class="relative flex items-center w-1/3 lg:justify-end md:justify-end">
                <form method="GET" action="{{ url('/admin/video-conference') }}" role="search"
                    enctype="multipart/form-data" class="mb-0">
                    <div class="px-4 mx-1">
                        <div class="flex lg:justify-end md:justify-end items-center">
                            <div class="search relative w-48">
                                <!-- lg:mx-2 md:mx-2 -->
                                <input type="text" name="search" class="tw-form-control w-full relative" placeholder="Search"
                                    value="{{ \Request('search') }}">
                                <button class="no-underline text-white px-4 mx-1 py-1 absolute right-0 focus:outline-none">
                                    <img src="{{ url('uploads/icons/search.svg') }}"
                                        class="w-4 h-4 absolute right-0 mt-2 mx-1 top-0">
                                </button>
                            </div>
                            <div class="date-select date-select_none dashboard-reset my-1 mx-1 lg:mx-0 md:mx-0">
                                <a href="{{ url('/admin/video-conference') }}" id="do-reset"
                                    class="text-sm border bg-gray-100 text-grey-darkest py-1 px-4">Reset</a>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="flex items-center" dusk="add-button">
                    <a href="{{ url('admin/video-conference/create') }}"
                        class="no-underline text-white px-4 mx-1 flex items-center custom-green py-1 justify-center rounded">
                        <span class="mx-1 text-sm font-semibold rounded">Add</span>
                        <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3">
                    </a>
                </div>
            </div>
        </div>
        @include('partials.message')

        @if (count($getStream) > 0)
            @php
                $i = ($getStream->currentPage() - 1) * $getStream->perPage() + 1;
            @endphp

            @foreach ($getStream as $stream)
                <div class="flex flex-col bg-white border shadow p-3 my-3">
                    <div class="flex">
                        <div class="uppercase tracking-wide text-xl text-gray-900 font-bold">
                            {{ $stream->name }}
                        </div>
                        <div>
                            <div class="mx-3 text-xs font-light bg-yellow-600 text-white px-3 py-1 rounded">
                                {{ $stream->status }}
                            </div>
                        </div>

                        <div class="ml-auto">
                            @if ($stream->user_id == Auth::user()->id && $stream->status != 'stop')
                                <a href="{{ url('admin/video-conference/edit/' . $stream->id) }}"
                                    class="btn bg-green-600 text-xs text-white rounded px-3 py-1">Edit</a>

                                <a href="#" rel="{{ url('admin/video-conference/remove/' . $stream->id) }}"
                                    class="btn bg-red-600 text-xs text-white rounded px-3 py-1 delete"
                                    data-id="{{ $stream->id }}">Delete</a>
                            @endif
                        </div>
                    </div>
                    <div class="mb-2 flex">
                        <div class="text-xs">Created By : @if (isset($stream->userInfo->FullName)){{ $stream->userInfo->FullName }}@else -
                            @endif on {{ $stream->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="mb-4 p-0">
                        {{ $stream->description }}
                    </div>

                    <div class="mb-4 p-0">
                        @if ($stream->joining_date != null && $stream->joining_date != '')
                            {{ date('d-m-Y h:i A', strtotime($stream->joining_date)) }} -
                        @endif
                        @if ($stream->duration != null && $stream->duration != '')
                            {{ $stream->duration }} Minutes
                        @endif
                    </div>

                    <div class="flex justify-start border-t pt-2">
                        @if ($stream->status != 'stop')
                            <a class="block text-sm text-center btn px-4 py-1 rounded bg-green-600 text-white"
                                href="{{ url('admin/video-conference/' . $stream->slug) }}">Go to Room</a>
                        @endif
                        @if ($stream->compose_status == 'available')
                            <a class="block text-sm text-center btn px-4 py-1 rounded bg-green-600 text-white"
                                href="{{ url('admin/video-conference/recordings/' . $stream->id) }}">Go to Recordings</a>
                        @endif
                        @if ($stream->status != 'stop')
                            <a class="ml-4 text-sm block text-center btn px-4 py-1 rounded bg-green-600 text-white"
                                href="{{ url('admin/video-conference/manage-invites/' . $stream->id) }}">Manage
                                Invitees</a>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <div class="md:flex bg-white border shadow p-3 my-3">
                <div class="my-2 text-sm">
                    No records found
                </div>
            </div>
        @endif
        {{ $getStream->links() }}
    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        /*$(function() {
                $(document).on('click', '.delete', function() {
                    var r = confirm("Are you sure to delete?");
                    if (r == true) {
                        var getid = $(this).data('id');
                        window.location.href = "{{ url('admin/video-conference/remove') }}/" + getid;
                    }
                });
            });*/

        $(document).ready(function() {
            $('.delete').on('click', function() {
                var link = $(this).attr('rel');
                //alert(status);
                swal({
                    icon: "info",
                    text: "Do you want to delete this video room ?",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    },
                    allowOutsideClick: false,
                }).then((willChange) => {
                    if (willChange) {
                        $.ajax({
                            url: link,
                            data: {
                                status: status
                            },
                            type: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                //alert(ans);
                                swal({
                                    icon: "success",
                                    text: "Video Room Deleted Successfully",
                                }).then(function() {
                                    window.location.reload();
                                });
                            }
                        })
                    } else {
                        swal("Cancelled");
                    }
                });
            });
        });
    </script>
@endpush
