@extends('layouts.admin.layout')
@section('content')
    <div class="flex flex-row justify-between">
        <div class="w-1/2">
            <h1 class="admin-h1 ">SEO Settings</h1>
        </div>
    </div>
    <div class="bg-white my-3">
        @include('partials.message')
        <!-- @include('admin.settings.seodetail_settings') -->
        <seo-tab url="{{ url('/') }}"></seo-tab>
        <portal-target name="seo_tab"></portal-target>
    </div>
@endsection
