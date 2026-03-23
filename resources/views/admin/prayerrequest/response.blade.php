@extends('layouts.admin.layout')

@section('content')
    <div class="flex flex-row justify-between">
        <div class="w-1/2">
            <h1 class="admin-h1 flex items-center">
                <a href="{{ url('/admin/prayerrequests') }}" class="rounded-full bg-gray-100 p-2" title="Back">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Prayer Responses ( {{ $count }} )</span>
            </h1>
        </div>
    </div>
    @include('partials.message')
    <div class="relative my-3">
        <div class="flex flex-row justify-between bg-white custom-table p-2">
            <table class="w-full">
                <thead class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">User Name</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Date</th>
                    </tr>
                </thead>
                @if (count($responses) == 0)
                    <tr class="border-t-2 border-b-2">
                        <td colspan="2" style="text-align: center;"> No records found </td>
                    </tr>
                @else
                    <tbody class="bg-grey-light">
                        @foreach ($responses as $response)
                            <tr class="border-t-2 border-b-2">
                                <td class="py-3 px-2">
                                    <a
                                        href="{{ url('/admin/member/show/' . $response->user->name) }}">{{ $response->user->FullName }}</a>
                                </td>
                                <td class="py-3 px-2">{{ date('d-m-Y', strtotime($response->created_at)) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
    </div>
@endsection
