@extends('layouts.admin.layout')

@section('content')
    <portal-target name="add_media_file"></portal-target>
    <div class="bg-white my-3">
        @include('partials.message')
        <mediafile-tab url="{{ url('/') }}"></mediafile-tab>
        <portal-target name="list_mediafile"></portal-target>
    </div>
@endsection
