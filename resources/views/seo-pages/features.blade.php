@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS Features :: Web Based Church Management Software with companion Church Mobile App </title>
    <meta name="description" content="List of features of ChurchCMS - Church Management Software and Church Mobile App.">
    <meta property="og:url" content="https://churchcms.app/contact /">
    <meta property=" og:title"
        content="ChurchCMS Features :: Web Based Church Management Software with companion Church Mobile App" />
    <meta property="og:description"
        content="List of features of ChurchCMS - Church Management Software and Church Mobile App." />
@endsection


@section('content')
    <div class="bg-blue-800"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto py-16 text-center text-white">
            <div class="w-full lg:w-1/2 mx-auto px-8">
                <h1 class="text-5xl font-bold">Features</h1>
                <p class="text-white my-3 leading-loose">A full featured church management software with companion Church
                    Mobile App</p>
            </div>
        </div>
    </div>
    @include('seo-pages._features.crm')
    @include('seo-pages._features.directory')
    @include('seo-pages._features.mobile_app')


@endsection
