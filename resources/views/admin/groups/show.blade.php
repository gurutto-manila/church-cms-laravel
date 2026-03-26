@extends('layouts.admin.layout')

@section('content')
    <div class="group-show">
        <h1 class="admin-h1 mb-5 flex items-center">
            <a href="{{ url('/admin/groups') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">{{ $group->name }}</span>
        </h1>
    </div>
    @include('partials.message')

    <div class="bg-white shadow border  p-5">
        <div class="flex text-xs justify-between flex-col lg:flex-row">
            <h1 class="admin-h1 flex items-center">Group Details</h1>
            <div class="my-2 lg:my-0 flex flex-wrap">
                <a href="{{ url('/admin/group/addMember/' . $group->id) }}" id="add_member"
                    class="capitalize text-white custom-green rounded px-2 py-1 mr-2 font-medium my-1 lg:my-0 md:my-0 flex items-center">
                    <span class="mx-1">add member</span>
                    <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3"></a>

                @if (count($grouplinks) != '')
                    <!-- <a href="{{ url('/admin/group/sendMessage/' . $group->id) }}" class="capitalize text-white blue-bg rounded px-2 py-1 mr-2 font-medium">send message</a> -->
                    <a href="#"
                        class="capitalize text-white blue-bg rounded px-2 py-1 mr-2 font-medium send_sms my-1 lg:my-0 md:my-0">send
                        message</a>
                @endif

                <a href="{{ url('/admin/group/messages/' . $group->id) }}"
                    class="capitalize text-white blue-bg rounded px-2 py-1 mr-2 font-medium my-1 lg:my-0 md:my-0">message
                    lists</a>

                <a href="{{ url('/admin/group/edit/' . $group->id) }}" id="edit"
                    class="capitalize text-white blue-bg rounded px-2 py-1 mr-2 font-medium my-1 lg:my-0 md:my-0">edit
                    group</a>

                <a href="#" rel="{{ url('/admin/group/delete/' . $group->id) }}" id="delete_group"
                    class="capitalize text-white bg-red-600 rounded px-2 py-1 mr-2 font-medium delete-group my-1 lg:my-0 md:my-0">delete
                    group</a>
            </div>
        </div>
        <div class="flex my-3 flex-col lg:flex-row">
            <div class="w-full lg:w-1/5 md:w-1/5 my-1">
                <img src="{{ $group->CoverImagePath }}" class="h-46 w-full">
            </div>
            <div class="leading-loose lg:px-5 w-full lg:w-4/5 md:w-4/5">
                <ul class="list-reset">
                    <li class="flex pb-2 flex-col">
                        <p class="font-semibold text-base text-gray-700 capitalize">Category </p>
                        <p class="font-medium text-sm text-gray-600 capitalize flex items-center">
                            {{ $group->groupCategory->name }}</p>
                    </li>
                    <li class="flex pb-2 flex-col">
                        <p class="font-semibold text-base text-gray-700 capitalize">Group Type</p>
                        <p class="font-medium text-sm text-gray-600 capitalize flex items-center">
                            {{ ucwords(str_replace('_', ' ', $group->group_type)) }}</p>
                    </li>
                    <li class="flex pb-2 flex-col">
                        <p class="font-semibold text-base text-gray-700 capitalize">Total No. of Members</p>
                        <p class="font-medium text-sm text-gray-600 capitalize flex items-center">{{ $memberCount }}</p>
                    </li>
                    <li class="flex pb-2 flex-col">
                        <p class="font-semibold text-base text-gray-700 capitalize">Description</p>
                        <p class="font-medium text-sm text-gray-600 capitalize flex items-center">
                            {{ $group->description }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bg-white shadow my-5 hidden" id="sms_div">
        <send-message url="{{ url('/') }}" name="{{ $group->id }}" tab="1" type="group"></send-message>
    </div>

    <div class="bg-white my-5 px-3 py-2">
        <h1 class="admin-h1 mb-3 flex items-center">Group Members ({{ $memberCount }})</h1>
        <div class="flex flex-wrap">
            @foreach ($grouplinks as $grouplink)
                <div class="w-full lg:w-1/3 md:w-1/2 my-2 px-1">
                    <div class="shadow-md">
                        <div class="flex p-2">
                            <img class="card-img-top w-16 h-16" src="{{ $grouplink->user->userprofile->AvatarPath }}"
                                alt="{{ $grouplink->user->FullName }}">
                            <div class="px-3 w-full">
                                <div class="flex justify-between items-center">
                                    <p class="font-bold text-base text-gray-700 capitalize">
                                        <a
                                            href="{{ url('/admin/member/show/' . $grouplink->user->name) }}">{{ $grouplink->user->FullName }}</a>
                                    </p>
                                    <div class="flex items-center">
                                        <a href="{{ url('/admin/group/editMember/' . $grouplink->id) }}"
                                            id="edit_permission" class="left-auto" title="Edit Permission">
                                            <img src="{{ url('/uploads/icons/edit.svg') }}" class="w-3 h-3 mx-1">
                                        </a>
                                        <a href="#" rel="{{ url('/admin/group/removeMember/' . $grouplink->id) }}"
                                            id="remove_member" class="left-auto delete-member">
                                            <img src="{{ url('/uploads/icons/cancel.svg') }}" class="w-3 h-3 mx-1">
                                        </a>
                                    </div>
                                </div>
                                <p class="font-bold text-base text-gray-700 capitalize">
                                    <span
                                        class="font-medium text-sm text-gray-600 capitalize flex items-center py-2">{{ $grouplink->user->email }}</span>
                                </p>
                                <p class="font-bold text-base text-gray-700 capitalize">
                                    <span
                                        class="font-medium text-sm text-gray-600 capitalize flex items-center py-2">{{ $grouplink->role }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $grouplinks->links() }}
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete-group').on('click', function() {
                var link = $(this).attr('rel');
                var status = $(this).attr('value');
                //alert(status);
                swal({
                    icon: "info",
                    text: "Do you want to delete this group ?",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    },
                    allowOutsideClick: false,
                }).then((willChange) => {
                    if (willChange) {
                        $.ajax({
                            url: link,
                            type: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                //alert(ans);
                                swal({
                                    icon: "success",
                                    text: "Group Deleted Successfully",
                                }).then(function() {
                                    window.location.href = '/admin/groups';
                                });
                            }
                        })
                    } else {
                        swal("Cancelled");
                    }
                });
            });
        });


        $(document).ready(function() {
            $('.delete-member').on('click', function() {
                var link = $(this).attr('rel');
                //alert(link);
                swal({
                    icon: "info",
                    text: "Do you want to remove the user from this group ?",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    },
                    allowOutsideClick: false,
                }).then((willChange) => {
                    if (willChange) {
                        $.ajax({
                            url: link,
                            type: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                //alert(ans);
                                swal({
                                    icon: "success",
                                    text: "Member Removed from this group",
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

        $(document).ready(function() {
            $('.send_sms').on('click', function() {
                if ($('#sms_div').hasClass('hidden')) {
                    $('#sms_div').addClass('block').removeClass('hidden');
                }
            });
        });
    </script>
@endpush
