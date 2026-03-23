@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS :: Downloads Page </title>
    <meta name="description" content="Download the marketing materials of ChurchCMS and media kit">
    <meta property="og:url" content="https://churchcms.app/contact /">
    <meta property=" og:title" content="ChurchCMS :: Downloads Page" />
    <meta property="og:description" content="Download the marketing materials of ChurchCMS and media kit" />
@endsection


@section('content')
    <div class="bg-blue-800"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto py-16 text-center text-white">
            <div class="w-full lg:w-1/2 mx-auto px-8">
                <h1 class="text-5xl font-bold">Downloads</h1>
                <p class="text-white my-3 leading-loose">Download our brochure and media kit.</p>
            </div>
        </div>
    </div>
    <div class="min-h-screen container mx-auto my-16">
        <div class="w-full lg:w-2/3 flex mx-auto bg-white p-8 shadow">
            <img src="{{ asset('images/churchcms_brochure_cover.png') }}" class="w-auto h-64 object-contain border">
            <div class="pl-8">
                <h2 class="font-bold">ChurchCMS Brochure</h2>
                <p>Document Type : PDF</p>
                <p>No. of Pages : 4</p>
                <p class="mb-6">Size : approx 15 MB</p>
                <a href="{{ asset('uploads/church_cms_brochure.pdf') }}"
                    class="button bg-blue-600 text-xs rounded-lg uppercase text-white tracking-wide px-5 py-3 "
                    download>Download</a>
            </div>
        </div>
    </div>
@endsection
