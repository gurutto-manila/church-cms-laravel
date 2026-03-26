@extends('layouts.preacher.layout')
@section('content')
    <create-series sermons_id="{{ $sermon_id->id }}"></create-series>
    <edit-series></edit-series>
    <input type="hidden" id="edit_sermon_id" value="">
    <div class="custom-table overflow-x-auto">
        <table class="w-full ">
            <thead class="bg-grey-light">
                <tr class="border-t-2 border-b-2">
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Sermon Name</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Type</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Location</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Date</th>
                    <th class="text-left text-sm px-2 py-2 text-grey-darker">Url</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sermons as $sermon)
                    <tr>
                        <td class="p-1">{{ $sermon->sermons->title }}</td>
                        <td class="p-1">{{ ucwords($sermon->type) }}</td>
                        <td class="p-1">{{ $sermon->location }}</td>
                        <td class="p-1">{{ date('d-m-Y', strtotime($sermon->date)) }}</td>
                        <td>
                            @if ($sermon->type != 'document')
                                <a href="{{ $sermon->url }}" id="url">Click here</a>
                            @else
                                <a href="{{ \Storage::url($sermon->url) }}">Click here</a>
                            @endif
                        </td>
                        <td class="flex items-center">
                            <a href="#" onclick="editSeries({{ $sermon->id }})" title="Edit"
                                class="text-white text-xs blue-bg rounded px-2 py-1 ml-2 font-medium">
                                <span class="mx-1">Edit</span>
                            </a>
                            <a href="#" rel="{{ url('/preacher/links/delete/' . $sermon->id) }}" title="Delete"
                                class=" text-white text-xs blue-bg rounded px-2 py-1 ml-2 font-medium delete-chapter"
                                id="delete">
                                <span class="mx-1">Delete</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $sermons->links() }}
@endsection

@push('scripts')
    <script>
        function editSeries(id) {
            $('#edit_sermon_id').val(id);
            $('#edit-series-modal').click();
        }
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete-chapter').on('click', function() {
                var link = $(this).attr('rel');
                //alert(link);
                swal({
                    icon: "info",
                    text: "Do you want to delete this chapter ?",
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
                                    text: "Sermonlink deleted",
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
