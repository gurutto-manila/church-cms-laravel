@extends('layouts.preacher.layout')
@section('content')
    <edit-preacher url="{{ url('/') }}" name="{{ $user->name }}" mode="preacher"></edit-preacher>
@endsection
