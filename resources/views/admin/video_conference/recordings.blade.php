@extends('layouts.admin.layout')
@section('content')
    <div class="py-3">
        <h2 class="text-lg my-2">{{ $conference->name }}</h2>
        <video controls>
            <source src="{{ asset('uploads/live-stream/' . $conference->compose_id . '.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
@endsection
