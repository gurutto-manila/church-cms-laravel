@extends('layouts.admin.layout')

@section('content')
    <portal-target name="add_prayer_request"></portal-target>
    <div class="bg-white my-3">
        @include('partials.message')
        <prayer-tab url="{{ url('/') }}"></prayer-tab>
        <portal-target name="list_prayer"></portal-target>
    </div>
@endsection
