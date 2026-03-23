@extends('layouts.admin.layout')
@section('content')
    <div class="w-full mx-2">
        <h1 class="admin-h1 mb-3 flex items-center">
            <a href="{{ url('/admin/preachers') }}" class="rounded-full bg-gray-100 p-2" title="Back">
                <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">Add Preacher</span>
        </h1>
        @include('partials.message')
        <!-- 
            @if ($count < $subscription->plan->no_of_members) -->
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <create-preacher url="{{ url('/') }}"></create-preacher>
        </form>
    <!-- @else
                <a href="{{ url('/pricing') }}"> 
                    <button type="submit" class="no-underline text-white px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">Upgrade Plan to Add More Members</button>
                </a>
            @endif -->
    </div>
@endsection
