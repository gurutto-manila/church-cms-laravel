@extends('layouts.admin.layout')
@section('content')
    <div class="">
        <h1 class="admin-h1 mb-3 flex items-center">
            <a href="{{ url('/admin/sermons') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">{{ $sermon->title }}</span>
        </h1>
    </div>
    <div class="custom-table py-3 bg-white shadow px-3">
        <table class="w-full">
            <thead class="bg-grey-light">
                <tr class="border-t-2 border-b-2">
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Type</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Location</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Date</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Url</th>
                </tr>
            </thead>
            @foreach ($sermonlinks as $sermonlink)
                <tr>
                    <td>{{ ucwords($sermonlink->type) }}</td>
                    <td>{{ $sermonlink->location }}</td>
                    <td>{{ date('d-m-Y', strtotime($sermonlink->date)) }}</td>
                    <td>
                        @if ($sermonlink->type == 'audio')
                            <a href="{{ $sermonlink->UrlPath }}" target="_blank">Click here</a>
                        @elseif($sermonlink->type == 'video')
                            <a href="{{ $sermonlink->url }}" target="_blank">Click here</a>
                        @else
                            <!-- <a href="{{ url('/admin/download/sermon/' . $sermonlink->id) }}">Click here</a> -->
                            <a href="{{ \Storage::url($sermonlink->url) }}" target="_blank">Click here</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $sermonlinks->links() }}
@endsection
