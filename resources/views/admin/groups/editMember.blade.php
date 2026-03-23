@extends('layouts.admin.layout')

@section('content')

    <div class="edit-member">
        <h1 class="admin-h1 mb-5 flex items-center">
            <a href="{{ url('/admin/group/show/' . $members->group_id) }}" title="Back" class="rounded-full bg-gray-100 p-2">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">Edit Permissions Of Member</span>
        </h1>

        @include('partials.message')

        <form method="POST" action="{{ url('/admin/group/editMember/' . $members->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="tw-form-group">
                <div class="mb-2">
                    <label class="tw-form">Permissions</label>
                </div>
                <div class="mb-2">
                    <div class="flex flex-wrap custom-table bg-white shadow p-2">
                        <table class="w-full">
                            <thead class="bg-grey-light">
                                <tr class="border-t-2 border-b-2">
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Modules</th>
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Read</th>
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Create</th>
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Update</th>
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">View</th>
                                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="bg-grey-light">
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Members</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-members" id="read-members"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-members') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-members"
                                            id="create-members" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-members') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-members"
                                            id="update-members" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-members') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Events</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-events" id="read-events"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-events') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-events"
                                            id="create-events" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-events') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-events"
                                            id="update-events" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-events') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Gallery</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-gallery" id="read-gallery"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-gallery') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-gallery"
                                            id="create-gallery" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-gallery') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-gallery"
                                            id="update-gallery" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-gallery') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <!-- <tr class="border-t-2 border-b-2"> 
            <td class="py-3 px-2"><p class="font-semibold text-xs">Files</p></td>
            <td class="py-3 px-2"><input type="checkbox" value="read-files" id="read-files" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-files') checked @endif @endforeach></td>
            <td class="py-3 px-2"><input type="checkbox" value="create-files" id="create-files" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-files') checked @endif @endforeach></td>
                      <td class="py-3 px-2"></td>
            <td class="py-3 px-2"><input type="checkbox" value="view-files" id="view-files" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'view-files') checked @endif @endforeach></td>
                      <td class="py-3 px-2"></td>
          </tr> -->
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Videos</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-videos" id="read-videos"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-videos') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-videos"
                                            id="create-videos" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-videos') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="view-videos" id="view-videos"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'view-videos') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <!-- <tr class="border-t-2 border-b-2"> 
            <td class="py-3 px-2"><p class="font-semibold text-xs">Sermons</p></td>
            <td class="py-3 px-2"><input type="checkbox" value="read-sermons" id="read-sermons" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-sermons') checked @endif @endforeach></td>
           <td class="py-3 px-2"><input type="checkbox" value="create-sermons" id="create-sermons" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-sermons') checked @endif @endforeach></td>
            <td class="py-3 px-2"><input type="checkbox" value="update-sermons" id="update-sermons" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-sermons') checked @endif @endforeach></td>
                      <td class="py-3 px-2"></td>
                      <td class="py-3 px-2"><input type="checkbox" value="delete-sermons" id="delete-sermons" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'delete-sermons') checked @endif @endforeach></td>
          </tr> -->
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Bulletins</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-bulletins"
                                            id="read-bulletins" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-bulletins') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-bulletins"
                                            id="create-bulletins" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-bulletins') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="view-bulletins"
                                            id="view-bulletins" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'view-bulletins') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Groups</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-groups" id="read-groups"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-groups') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-groups"
                                            id="create-groups" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-groups') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-groups"
                                            id="update-groups" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-groups') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="delete-groups"
                                            id="delete-groups" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'delete-groups') checked @endif @endforeach></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Funds</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-funds" id="read-funds"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-funds') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-funds" id="create-funds"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-funds') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-funds" id="update-funds"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-funds') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="view-funds" id="view-funds"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'view-funds') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Quotes</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-quotes" id="read-quotes"
                                            name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-quotes') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-quotes"
                                            id="create-quotes" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-quotes') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="update-quotes"
                                            id="update-quotes" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-quotes') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <!-- <tr class="border-t-2 border-b-2"> 
                      <td class="py-3 px-2"><p class="font-semibold text-xs">Preachers</p></td>
                      <td class="py-3 px-2"><input type="checkbox" value="read-preachers" id="read-preachers" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-preachers') checked @endif @endforeach></td>
                      <td class="py-3 px-2"><input type="checkbox" value="create-preachers" id="create-preachers" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-preachers') checked @endif @endforeach></td>
                      <td class="py-3 px-2"><input type="checkbox" value="update-preachers" id="update-preachers" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-preachers') checked @endif @endforeach></td>
                      <td class="py-3 px-2"></td>
                      <td class="py-3 px-2"></td>
                    </tr> -->
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Reports</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-reports"
                                            id="read-reports" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-reports') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="view-reports"
                                            id="view-reports" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'update-reports') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                                <tr class="border-t-2 border-b-2">
                                    <td class="py-3 px-2">
                                        <p class="font-semibold text-xs">Payments</p>
                                    </td>
                                    <td class="py-3 px-2"><input type="checkbox" value="read-payments"
                                            id="read-payments" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'read-payments') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"><input type="checkbox" value="create-payments"
                                            id="create-payments" name="permissions[]" @foreach ($permissionUsers as $permissionUser) @if ($permissionUser->permission->name == 'create-payments') checked @endif @endforeach></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                    <td class="py-3 px-2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <input type="hidden" name="church_id" value="{{ $members->church_id }}">
            <input type="hidden" name="user_id" value="{{ $members->user_id }}">

            <div class="my-6">
                <input type="submit" id="update-btn" value="Update Permissions"
                    class="btn btn-primary submit-btn cursor-pointer">
            </div>
        </form>
    </div>

@endsection
