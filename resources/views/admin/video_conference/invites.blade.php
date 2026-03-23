@extends('layouts.admin.layout')
@section('content')
    <div class="flex-grow w-full lg:px-4 md:px-4">
        <div class="vue-portal-target ">
            <div class="flex flex-wrap lg:flex-row justify-between items-center">
                <h1 class="admin-h1 mb-3 flex items-center">
                    <a href="{{ url('/admin/video-conference') }}" class="rounded-full bg-gray-100 p-2" title="Back">
                        <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                    </a>
                    <span class="mx-3">Manage Invitees - {{ $conference->name }}</span>
                </h1>
                <div class="relative flex items-center">
                    <!-- w-1/2 lg:w-1/4 md:w-1/4 lg:justify-end -->
                    <div class="flex items-center" dusk="add-button">
                        <a href="{{ url('admin/video-conference/add-invites/' . $conference->id) }}"
                            class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">
                            <span class="mx-1 text-sm font-semibold">Add Invitees</span>
                            <img src="{{ url('uploads/icons/plus.svg') }}" class="w-3 h-3">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative bg-white">
            @include('partials.message')
            <div>
                <div class="flex flex-wrap custom-table my-3 overflow-auto">
                    <table class="w-full">
                        <thead class="bg-grey-light">
                            <tr class="border-b">
                                <th class="text-left text-sm px-2 py-2 text-grey-darker"> S.No </th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker"> Name </th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker"> Email </th>
                                <th class="text-left text-sm px-2 py-2 text-grey-darker"> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($getParticipant) > 0)

                                @php
                                    $i = ($getParticipant->currentPage() - 1) * $getParticipant->perPage() + 1;
                                @endphp
                                @foreach ($getParticipant as $info)
                                    <tr class="border-b">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $info->usersInfo->FullName }}</td>
                                        <td>{{ $info->usersInfo->email }}</td>
                                        <td>
                                            @if ($conference->user_id == Auth::id())
                                                <a href="#"
                                                    rel="{{ url('/admin/video-conference/remove-users/' . $info->id) }}"
                                                    class="btn bg-red-600 text-white rounded px-3 py-1 delete"
                                                    data-id="{{ $info->id }}">Delete</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                            @else
                                <tr class="border-b">
                                    <td colspan="4">
                                        <p class="font-semibold text-s" style="text-align: center;">No Records Found</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        {{ $getParticipant->links() }}
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        /*$(function() {
                $(document).on('click', '.delete', function() {
                    var r = confirm("Are you sure to delete?");
                    if (r == true) {
                        var getid = $(this).data('id');
                        window.location.href = '{{ url('
                                            admin / video - conference / remove - users ') }}/' + getid;
                    }
                });
            });*/

        $(document).ready(function() {
            $('.delete').on('click', function() {
                var link = $(this).attr('rel');
                //alert(status);
                swal({
                    icon: "info",
                    text: "Do you want to delete this invitee ?",
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
                                    text: "Invitee Deleted Successfully",
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
