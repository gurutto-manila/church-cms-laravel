@extends('layouts.preacher.layout')

@section('content')
    <div class="flex lg:items-center md:items-center justify-between flex-col lg:flex-row md:flex-row">
        <h1 class="admin-h1 my-3">Sermon</h1>
        <form method="GET" action="{{ url('/preacher/sermon') }}" role="search" enctype="multipart/form-data">
            <div class="">
                <div class="flex lg:justify-end md:justify-end items-center">
                    <div class="search relative w-48 lg:mx-2 md:mx-2">
                        <input type="text" name="q" class="tw-form-control w-full relative" placeholder="Search"
                            value="{{ old('q') }}">
                        <button class="no-underline text-white px-4 mx-1 py-1 absolute right-0 focus:outline-none">
                            <img src="{{ url('uploads/icons/search.svg') }}"
                                class="w-4 h-4 absolute right-0 mt-2 mx-1 top-0">
                        </button>
                    </div>
                    <div class="date-select date-select_none dashboard-reset my-1 mx-1 lg:mx-0 md:mx-0">
                        <a href="{{ url('/preacher/sermon') }}" id="do-reset"
                            class="text-xs border bg-gray-400 text-grey-darkest py-1 px-4">Reset</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @include('partials.message')
    <div class="bg-white shadow">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/6 md:w-2/5 px-2 my-3 lg:my-5 md:my-5">
                <a href="{{ url('/preacher/sermon/create') }}" id="create">
                    <div class="border border-dashed border-gray-300 flex items-center h-40">
                        <img src="{{ url('uploads/icons/add-gallery.svg') }}" class="w-8 h-8 mx-auto">
                    </div>
                </a>
                <div>
                    <p class="text-sm font-semibold my-2 text-gray-800">
                        <a href="{{ url('/preacher/sermon/create') }}">New Chapter</a>
                    </p>
                </div>
            </div>
            @foreach ($sermon as $sermons)
                <div class="w-full lg:w-1/6 md:w-2/5 px-2 my-3 lg:my-5 md:my-5 flex h-auto">
                    <div class="shadow-md p-3 w-full">
                        <div class="flex">
                            <img class="card-img-top w-16 h-16" src="{{ $sermons->CoverImagePath }}">
                            <div class="px-3">
                                <p class="font-bold text-base text-gray-700 capitalize">
                                    <a href="{{ url('/preacher/links/' . $sermons->id) }}">{{ $sermons->title }}</a>
                                </p>
                                <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2">
                                    <img src="{{ url('uploads/icons/microphone.svg') }}" class="w-4 h-4">
                                    <span class="mx-2">{{ $sermons->user->FullName }}</span>
                                </p>
                                <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2">
                                    <a href="{{ url('/preacher/sermon/edit/' . $sermons->id) }}">Edit</a>
                                </p>
                                <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2">
                                    <a rel="{{ url('/preacher/sermon/delete/' . $sermons->id) }}" class="delete-group"
                                        id="delete_group" style="cursor:pointer">Delete</a>
                                </p>
                            </div>
                        </div>
                        <div class="leading-loose mt-3">
                            <p class="text-xs text-gray-700 flex">
                                <span class="mx-2">{{ \Str::limit($sermons->description, 30, '...') }}</span>
                            </p>
                            <p class="text-xs text-gray-700 flex">
                                <span class="mx-2">Links : {{ count($sermons->sermonlinks) }}</span>
                            </p>
                            <div class="flex items-center">
                                <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2 mr-4"> <img
                                        src="{{ url('uploads/icons/like.svg') }}" class="w-4 h-4">
                                    <span class="mx-2">{{ $sermons->sermonlikevote }}</span>
                                </p>
                                <p class="font-medium text-sm text-gray-600 capitalize flex items-center py-2 mr-4"> <img
                                        src="{{ url('uploads/icons/dislike.svg') }}" class="w-4 h-4">
                                    <span class="mx-2">{{ $sermons->sermonunlikevote }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $sermon->links() }}
@endsection
@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete-group').on('click', function() {
                var link = $(this).attr('rel');
                //var status = $(this).attr('value');
                //alert(status);
                swal({
                    icon: "info",
                    text: "Do you want to delete this sermon?",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    },
                    allowOutsideClick: false,
                }).then((willChange) => {
                    if (willChange) {
                        $.ajax({
                            url: link,
                            //data: { status: status },
                            type: "GET",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                //alert(ans);
                                swal({
                                    icon: "success",
                                    text: "Sermon Deleted Successfully",
                                }).then(function() {
                                    window.location.href = '/preacher/sermon';
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
