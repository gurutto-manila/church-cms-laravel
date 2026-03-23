@extends('layouts.admin.layout')

@section('content')
    <portal-target name="add_help"></portal-target>
    <div class="bg-white my-3">
        @include('partials.message')
        <help-tab url="{{ url('/') }}"></help-tab>
        <portal-target name="list_help"></portal-target>
    </div>
@endsection
