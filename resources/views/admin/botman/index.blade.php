@extends('layouts.admin.layout')
@section('content')
    <div class="">
        <div class="flex justify-between mb-4 items-center">
            <h2 class="text-lg">Botman</h2>
            <a href="{{ url('admin/botman/create') }}" class="btn bg-green-600 text-white px-4 py-2 rounded text-sm">
                Create Bot</a>
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

        @if (count($getBots) > 0)

            @php
                $i = ($getBots->currentPage() - 1) * $getBots->perPage() + 1;
            @endphp

            @foreach ($getBots as $botdata)

                <div class="flex flex-col bg-white border shadow p-3 mb-4">
                    <div class="flex justify-between">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                            @php $display = array();  @endphp @if (count($botdata->tags) > 0)  @foreach ($botdata->tags as $tkey => $tagdata) @php $display[] = $tagdata->name @endphp @endforeach @endif {{ implode(',', $display) }} <span
                                class="mx-3 text-xs bg-indigo-600 text-white p-2 rounded">{{ $botdata->status }}</span>
                        </div>
                        <div class="">
                            <a href="{{ url('admin/botman/' . $botdata->id . '/edit') }}"
                                class="btn bg-green-600 text-white rounded px-3 py-1 text-sm">Edit</a>
                            <a href="javascript:void(0);" class="btn bg-red-600 text-white rounded px-3 py-1 delete text-sm"
                                data-id="{{ $botdata->id }}">Delete</a>
                        </div>
                    </div>
                    <div class="my-2 flex flex">
                        <div class="text-sm">Created By : @if (isset($botdata->userInfo->name)){{ $botdata->userInfo->name }}@else - @endif on
                            {{ $botdata->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="my-2 text-sm">
                        {{ $botdata->answers }}
                    </div>
                    <!-- <div class="flex justify-start">
            <a class="block text-center btn px-4 py-1 rounded bg-green-600 text-white" href="{{ url('admin/botman/show/' . $botdata->id) }}">
                Details
            </a>
        </div> -->
                </div>
            @endforeach

        @else
            <div class="md:flex bg-white border shadow p-3">
                <div class="my-2">
                    No records found
                </div>
            </div>
        @endif


        {{ $getBots->links('layouts.pagination', ['search' => $build]) }}


    </div>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '.delete', function() {
                var r = confirm("Are you sure to delete?");
                if (r == true) {
                    var getid = $(this).data('id');
                    window.location.href = '{{ url('admin/botman/remove') }}/' + getid;
                }
            });
        });
    </script>

@endpush
