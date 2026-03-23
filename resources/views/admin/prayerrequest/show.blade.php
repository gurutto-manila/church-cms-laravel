@extends('layouts.admin.layout')

@section('content')
    <div class="w-1/2 lg:mr-8 md:mr-8">
        <div>
            <h1 class="admin-h1 flex items-center">
                <a href="{{ url('/admin/prayerrequests') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Prayer Request Details</span>
            </h1>
        </div>
    </div>
    <div class="bg-white my-3">
        <table class="w-full text-sm">
            <tr class="">
                <td class="py-3 px-2" style="width: 10%;">User Name : </td>
                <td class="py-3 px-2">
                    <a href="{{ url('/admin/member/show/' . $prayer->user->name) }}">{{ $prayer->user->FullName }}</a>
                </td>
            </tr>
            <tr class="">
                <td class="py-3 px-2">Title : </td>
                <td class="py-3 px-2">{{ $prayer->title }}</td>
            </tr>
            <tr class="">
                <td class="py-3 px-2">Description : </td>
                <td class="py-3 px-2">{{ $prayer->description }}</td>
            </tr>
            <tr class="">
                <td class="py-3 px-2">Prayer Date : </td>
                <td class="py-3 px-2">{{ date('d-m-Y H:i:s', strtotime($prayer->date)) }}</td>
            </tr>
            <tr class="">
                <td class="py-3 px-2">Status : </td>
                <td class="py-3 px-2">
                    @if ($prayer->status == 'pending')
                        Pending
                    @elseif($prayer->status == 'approve')
                        Approved
                    @elseif($prayer->status == 'cancel')
                        Cancelled
                    @else
                        Closed
                    @endif
                </td>
            </tr>
            @if ($prayer->publish_at != null)
                <tr class="">
                    <td class="py-3 px-2">Publish On : </td>
                    <td class="py-3 px-2">{{ date('d-m-Y H:i:s', strtotime($prayer->publish_at)) }}</td>
                </tr>
            @endif
            @if ($prayer->approved_at != null)
                <tr class="">
                    <td class="py-3 px-2">Approved On : </td>
                    <td class="py-3 px-2">{{ date('d-m-Y H:i:s', strtotime($prayer->approved_at)) }}</td>
                </tr>
            @endif
            @if ($prayer->expire_at != null)
                <tr class="">
                    <td class="py-3 px-2">Expire Date : </td>
                    <td class="py-3 px-2">{{ date('d-m-Y H:i:s', strtotime($prayer->expire_at)) }}</td>
                </tr>
            @endif
            @if ($prayer->status == 'cancel')
                <tr class="">
                    <td class="py-3 px-2">Comments : </td>
                    <td class="py-3 px-2">{{ $prayer->comments }}</td>
                </tr>
            @endif
            @if ($prayer->image != null)
                <tr class="">
                    <td class="py-3 px-2">Image : </td>
                    <td class="py-3 px-2">
                        <img src="{{ $prayer->ImagePath }}" class="w-20 h-20">
                    </td>
                </tr>
            @endif
        </table>
    </div>
@endsection
