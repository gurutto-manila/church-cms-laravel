@extends('layouts.welcome')
@section('meta-contents')
    <title>Mobile Responsive HTML5 Templates for your Church Website :: ChurchCms.App</title>
    <meta name="description"
        content="Read through the article published by ChurchCMS editorial team and learn about the advantages of having a dedicated Custom Mobile App for Church.">
    <meta property="og:url" content="{{ url('church-website-builder') }}">
    <meta property=" og:title" content="Mobile Responsive HTML5 Templates for your Church Website :: ChurchCms.App " />
    <meta property="og:description"
        content="Read through the article published by ChurchCMS editorial team and learn about the advantages of having a dedicated Custom Mobile App for Church. " />
    {{-- <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Mobile-App.jpg') }}" /> --}}
@endsection


@section('content')
    <x-blog-header>
        Church Website Builder<br />
        <small class="text-lg">Mobile Responsive HTML5 Templates for your Church Website</small>
    </x-blog-header>
    <div class="py-3">
        <div class="container mx-auto">
            <h1 class="text-3xl my-3 mx-5 text-gray-800 capitalize">Build your church website with ChurchCMS</h1>
            <p class="text-md my-3 mx-5 text-gray-800">ChurchCMS website builder is Custom Add-on Design Service. We design &
                develop your Church Website and make it LIVE. You can select any one of the pre-built church web templates
                or order a Custom Template. All the templates are integrated with <a href="{{ url('/') }}"
                    class="underline">ChurchCMS Church Management Software</a></p>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <!-- <iframe frameborder="0" scrolling="no" width="130" height="198" src="{{ url('images/school-website/1.png') }}" name="imgbox" id="imgbox"></iframe> -->
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/1') }}" target="_blank">
                            <img src="{{ url('church-template/1.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                    <!-- <div class="iframe-container">
                            <iframe src="{{ url('images/school-website/1.png') }}" allowfullscreen></iframe>
                        </div> -->
                </div>
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/2') }}" target="_blank">
                            <img src="{{ url('church-template/2.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/3') }}" target="_blank">
                            <img src="{{ url('church-template/3.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/4') }}" target="_blank">
                            <img src="{{ url('church-template/4.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/5') }}" target="_blank">
                            <img src="{{ url('church-template/5.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3 md:w-1/3">
                    <div class="px-5 py-5 h-full">
                        <a href="{{ url('/church-websites/6') }}" target="_blank">
                            <img src="{{ url('church-template/6.jpg') }}" class="modal-hover-opacity border">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <style>
        .modal-hover-opacity {
            opacity: 1;
            filter: alpha(opacity=100);
            max-width: 100%;
            min-height: 100%;
            cursor: pointer;
        }

        .modal-hover-opacity:hover {
            opacity: 0.60;
            filter: alpha(opacity=60);
        }

    </style>
@endpush
