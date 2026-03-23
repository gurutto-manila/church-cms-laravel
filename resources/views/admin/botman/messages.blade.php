@extends('layouts.admin.layout')
@section('content')
    <div class="py-3">
        <div class="flex justify-between mb-4 items-center">
            <h2 class="text-lg">Botman Messages</h2>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success flex flex-col">
                <strong>Success!</strong>
                {!! Session::get('message') !!}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger flex flex-col">
                <strong>Error!</strong>
                {!! Session::get('error') !!}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @if (count($unionBy) > 0)
                    @php
                        $i = ($unionBy->currentPage() - 1) * $unionBy->perPage() + 1;
                    @endphp
                    @foreach ($unionBy as $botdata)
                        @if (isset($botdata->userInfo->name))
                            @php
                                $nameX = $botdata->userInfo->name;
                                $type = 'user';
                                $userIds = $botdata->userInfo->id;
                            @endphp
                        @else
                            @php
                                $nameX = $botdata->bot_id;
                                $type = 'code';
                                $userIds = $nameX;
                            @endphp
                        @endif
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $nameX }}</td>
                            <td>{{ $botdata->created_at }}</td>
                            <td><a href="{{ url('admin/botman/details/' . $userIds . '/' . $type) }}">Details</a></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No records found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        {{ $unionBy->links('layouts.pagination', ['search' => $build]) }}
    </div>
@endsection
