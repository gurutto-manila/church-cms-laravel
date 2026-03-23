<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.3/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/church-template/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="overflow-x-hidden">
    <div class="app relative">
        <header>
            <div class="header-wrapper">
                <!-- <div class="px-10 py-3 bg-black fixed w-full"> -->
                <div class="px-3 py-2">
                    <div class="container mx-auto flex justify-between flex-col lg:flex-row lg:items-center">
                        <div class="w-full lg:w-1/3 flex justify-between items-center">
                            <div class="">
                                <a href="#"><img src="{{ url('church-template/logo.png') }}" class="w-20 h-auto"
                                        alt="logo"></a>
                            </div>
                            <div class="block lg:hidden menu-click">
                                <button
                                    class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light border-black">
                                    <svg class="fill-current h-3 w-3 text-black" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <title>Menu</title>
                                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/3 menu-open hidden lg:block md:hidden" id="mainnav">
                            <ul
                                class="list-reset flex flex-col lg:flex-row md:flex-col lg:items-center text-sm lg:justify-end my-2 lg:my-0 md:my-0 leading-loose lg:leading-normal md:leading-loose">
                                <li><a href="{{ url('/church-websites/1') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Home</a></li>
                                <li><a href="{{ url('/church-websites/1/about') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">About</a></li>
                                <li><a href="{{ url('/church-websites/1/ministry') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Ministry</a></li>
                                <li><a href="{{ url('/church-websites/1/sermons') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black active-btn">Sermons</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Pages</a>
                                    <ul class="submenu mt-1">
                                        <li><a href="{{ url('/church-websites/1/gallery') }}">Gallery</a></li>
                                        <li><a href="{{ url('/church-websites/1/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/church-websites/1/events') }}">Events</a></li>
                                        <li><a href="{{ url('/church-websites/1/donation') }}">Charity & Donation</a>
                                        </li>
                                        <li><a href="{{ url('/church-websites/1/prayer') }}">Prayer</a></li>
                                        <li><a href="{{ url('/church-websites/1/video-gallery') }}">Video Gallery</a>
                                        </li>
                                    </ul><!-- /.submenu -->
                                </li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Faq</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Contact</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Login</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Register</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--********************-->

        <!-- banner start -->
        <div class="custom-bg">
            <div class="container py-4">
                <div class="flex items-center justify-between">
                    <h2 class="capitalize text-3xl font-semibold text-white mb-0">Sermons</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Sermons</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- start -->
        <div class="py-2 lg:py-5 md:py-5 my-8">
            <div class="container mx-auto">
                <div class="">
                    <div class="w-full lg:pr-3 md:pr-3 flex flex-wrap">
                        <!--  <h2 class="custom-txt uppercase text-2xl py-4">Sermons</h2> -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">

                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-full h-48"
                                    alt="prayer">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Perseverance of the Saints</h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-1">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. </p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">
                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-full h-48"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">
                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/bible.jpeg') }}" class="w-full h-48"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">
                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-full h-48"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">
                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-full h-48"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="w-full lg:w-1/3 md:w-1/2 py-2 lg:py-4 md:py-4 px-3">
                            <div class="" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/event4.jpg') }}" class="w-full h-48"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="py-2">
                                <h2 class="text-xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center mt-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z M256,240
      c-57.897,0-105-47.103-105-105c0-57.897,47.103-105,105-105c57.897,0,105,47.103,105,105C361,192.897,313.897,240,256,240z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M297.833,301h-83.667C144.964,301,76.669,332.951,31,401.458V512h450V401.458C435.397,333.05,367.121,301,297.833,301z
       M451.001,482H451H61v-71.363C96.031,360.683,152.952,331,214.167,331h83.667c61.215,0,118.135,29.683,153.167,79.637V482z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p class="text-base custom-txt leading-relaxed mx-2">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-3">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M238.933,0C107.036,0.151,0.151,107.036,0,238.933v187.733c0,28.277,22.923,51.2,51.2,51.2h68.267
      c9.426,0,17.067-7.641,17.067-17.067V290.133c0-9.426-7.641-17.067-17.067-17.067H51.2c-5.828,0.062-11.602,1.13-17.067,3.157
      v-37.291c0-113.108,91.692-204.8,204.8-204.8s204.8,91.692,204.8,204.8v37.291c-5.465-2.027-11.239-3.095-17.067-3.157H358.4
      c-9.426,0-17.067,7.641-17.067,17.067V460.8c0,9.426,7.641,17.067,17.067,17.067h68.267c28.277,0,51.2-22.923,51.2-51.2V238.933
      C477.716,107.036,370.83,0.151,238.933,0z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 320.001 320.001"
                                                    style="enable-background:new 0 0 320.001 320.001;"
                                                    xml:space="preserve">
                                                    <path d="M295.84,146.049l-256-144c-4.96-2.784-11.008-2.72-15.904,0.128C19.008,5.057,16,10.305,16,16.001v288
  c0,5.696,3.008,10.944,7.936,13.824c2.496,1.44,5.28,2.176,8.064,2.176c2.688,0,5.408-0.672,7.84-2.048l256-144
  c5.024-2.848,8.16-8.16,8.16-13.952S300.864,148.897,295.84,146.049z" />
                                                    <g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-10 h-10 rounded-full flex items-center justify-center about-icon">
                                                <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width=""
                                                    height="" viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                    xml:space="preserve">
                                                    <g>
                                                        <path d="M448.608,351.791c-18.444,0-33.4,14.952-33.4,33.396v52.055H96.788v-52.055c0-18.443-14.952-33.396-33.396-33.396
    s-33.396,14.952-33.396,33.396v85.451c0,18.443,14.952,33.4,33.396,33.4h385.217c18.443,0,33.396-14.957,33.396-33.4v-85.451
    C482.005,366.743,467.052,351.791,448.608,351.791z" />
                                                        <path d="M245.918,387.325c5.563,5.559,14.6,5.559,20.157,0l117.039-117.038c3.41-3.41,4.423-8.532,2.579-13
    c-1.844-4.45-6.18-7.351-11.012-7.351h-54.954V34.024c0-14.402-11.661-26.063-26.06-26.063h-75.323
    c-14.398,0-26.06,11.66-26.06,26.063v215.912h-54.973c-4.827,0-9.163,2.9-11.007,7.351c-1.844,4.468-0.83,9.59,2.575,13
    L245.918,387.325z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>

                </div>
            </div>
        </div>
        <!-- end -->





        <!-- footer start -->
        <div class="custom-dark py-3 text-sm">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row md:flex-row">
                    <div class="w-full lg:w-1/3 md:w-1/3 py-4">
                        <p class="text-lg text-white font-semibold">About the Church</p>
                        <p class="text-sm text-white py-3 leading-loose">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s. </p>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 lg:py-4 md:py-4 lg:px-16">
                        <p class="text-lg text-white font-semibold">Quick Links</p>
                        <ul class="list-reset leading-loose text-white py-3">
                            <li class="py-1"><a href="#" class="text-white">Upcoming events</a></li>
                            <li class="py-1"><a href="#" class="text-white">Ministries</a></li>
                            <li class="py-1"><a href="#" class="text-white">Sermons</a></li>
                            <li class="py-1"><a href="#" class="text-white">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 lg:py-4 md:py-4">
                        <p class="text-lg text-white font-semibold">Our Address</p>
                        <ul class="list-reset leading-loose text-white py-3">
                            <li class="py-1">Akshya Nagar 1st Block 1st Cross,<br /> Rammurthy nagar,
                                <br />Bangalore-560016
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-dark" style="opacity: 0.9;">
            <div class="container mx-auto">
                <p class="text-white py-3">&copy; 2020. All rights reserved</p>
            </div>
        </div>
        <!-- footer end -->
    </div>

    <script>
        $(document).ready(function() {
            $(".menu-click").click(function() {
                $(".menu-open").toggle();

            });
        });
    </script>
    <script>
        AOS.init();
    </script>


    <!-- slider js -->
    <script>
        const slides = document.querySelectorAll('.slide');
        const controls = document.querySelectorAll('.control');
        let activeSlide = 0;
        let prevActive = 0;

        changeSlides();
        let int = setInterval(changeSlides, 4000);

        function changeSlides() {
            slides[prevActive].classList.remove('active');
            controls[prevActive].classList.remove('active');

            slides[activeSlide].classList.add('active');
            controls[activeSlide].classList.add('active');

            prevActive = activeSlide++;

            if (activeSlide >= slides.length) {
                activeSlide = 0;
            }

            console.log(prevActive, activeSlide);
        }

        controls.forEach(control => {
            control.addEventListener('click', () => {
                let idx = [...controls].findIndex(c => c === control);
                activeSlide = idx;

                changeSlides();

                clearInterval(int);
                int = setInterval(changeSlides, 4000);
            });
        });
    </script>
    <!-- slider js -->
</body>

</html>
