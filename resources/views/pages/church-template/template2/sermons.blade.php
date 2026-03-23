<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.3/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/church-template/style-1.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
</head>


<body class="overflow-x-hidden">
    <div class="app ">
        <!-- slider start -->
        <div class="relative">
            <div class="ministry-sec">
                <div>
                    <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full mb-24">
                        Sermons</h2>
                    <!-- <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full">We Believe God Change Live</h2> -->
                </div>
            </div>
            <div class="absolute top-0 left-0 right-0">
                <header class="header-main">
                    <div
                        class="px-4 lg:px-0 md:px-0 py-3 flex items-center justify-between lg:justify-between md:justify-between">
                        <!--  <a href="#"><img src="images/logo_white.png" class="h-12 mx-auto"></a> -->
                        <a href="#" class="w-1/6 lg:w-full md:w-full"><img
                                src="{{ url('church-template/template1/church-icon.svg') }}" class="w-16 h-16 mx-auto"
                                style="filter: brightness(0) invert(1);" alt="church icon"></a>
                        <div class="block lg:hidden md:hidden menu-click">
                            <button
                                class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light border-white">
                                <svg class="fill-current h-3 w-3 text-white" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white py-2 nav menu-open hidden lg:block md:block">
                        <!-- header-wrapper -->
                        <!-- <div class="px-10 py-3 bg-black fixed w-full"> -->
                        <div class="px-3 py-2">
                            <div class="container mx-auto flex justify-between flex-col lg:flex-row lg:items-center">
                                <div class="w-full lg:w-1/3 flex justify-between items-center">


                                </div>

                                <div class="w-full lg:w-1/2 mx-auto" id="mainnav">
                                    <ul
                                        class="list-reset flex flex-col lg:flex-row md:flex-row lg:items-center text-sm lg:justify-end my-2 lg:my-0 md:my-0 leading-loose lg:leading-normal md:leading-loose">
                                        <li><a href="{{ url('/church-websites/2') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Home</a></li>
                                        <li><a href="{{ url('/church-websites/2/about') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">About</a></li>
                                        <li><a href="{{ url('/church-websites/2/ministry') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Ministry</a></li>
                                        <li><a href="{{ url('/church-websites/2/sermons') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black active-btn">Sermons</a>
                                        </li>
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Pages</a>
                                            <ul class="submenu mt-4">
                                                <li><a href="{{ url('/church-websites/2/gallery') }}">Gallery</a></li>
                                                <li><a href="{{ url('/church-websites/2/blog') }}">Blog</a></li>
                                                <li><a href="{{ url('/church-websites/2/events') }}">Events</a></li>
                                                <li><a href="{{ url('/church-websites/2/donation') }}">Charity &
                                                        Donation</a></li>
                                                <li><a href="{{ url('/church-websites/2/prayer') }}">Prayer</a></li>
                                                <li><a href="{{ url('/church-websites/2/video-gallery') }}">Video
                                                        Gallery</a></li>
                                            </ul><!-- /.submenu -->
                                        </li>
                                        <!--  <li><a href="gallery.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Gallery</a></li> -->
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">FAQ</a></li>
                                        <!--  <li><a href="blog.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Blog</a></li>
      <li><a href="events.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Events</a></li>
      <li><a href="donation.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Charity & Donation</a></li> -->
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Contact</a>
                                        </li>
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Login</a></li>
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Register</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!--********************-->
            </div>
        </div>
        <!-- slider end -->

        <!-- start -->
        <div class="py-5 my-8">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-3/4 lg:pr-3 md:pr-3 pl-3 lg:pl-0 md:pl-0">
                        <!--  <h2 class="custom-txt uppercase text-2xl py-4">Sermons</h2> -->
                        <!-- ** -->
                        <div class="w-full flex flex-col lg:flex-row md:flex-row py-4">

                            <div class="w-full lg:w-1/5 md:w-1/5" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-40 h-32 rounded"
                                    alt="prayer">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Perseverance of the Saints
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-1">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. </p>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
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
                                    <p class="text-base custom-txt leading-relaxed mx-3">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-2">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4">
                            <div class="w-full lg:w-1/5 md:w-1/5" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-40 h-32 rounded"
                                    alt="lord is Sufficient for all of our needs">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Lord is Sufficient for all of
                                    our needs</h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center">
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
                                    <p class="text-base custom-txt leading-relaxed mx-3">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-2">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4">
                            <div class="w-full lg:w-1/5 md:w-1/5" data-aos="fade-right" data-aos-duration="3000">
                                <img src="{{ url('church-template/template1/bible.jpeg') }}" class="w-40 h-32 rounded"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Lord is Sufficient for all of
                                    our needs</h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry.</p>
                                <div class="flex items-center">
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
                                    <p class="text-base custom-txt leading-relaxed mx-3">Paul Kovalik </p>
                                </div>
                                <ul class="list-reset flex items-center mt-2">
                                    <li class="mr-3">
                                        <a href="#">
                                            <div
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                                                class="w-8 h-8 rounded-full flex items-center justify-center about-icon">
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
                    <div class="w-full lg:w-1/4 px-3 lg:px-0 md:px-0">
                        <h2 class="custom-txt uppercase text-2xl py-4">Latest Sermons</h2>
                        <div class="bg-gray-100 py-3 px-3">
                            <!-- ** -->
                            <div class="py-3 flex items-end px-3">
                                <img src="{{ url('church-template/template1/donation.png') }}" class="w-12 h-12"
                                    alt="Prayer & Petition">
                                <div class="mx-2">
                                    <p class="text-lg text-gray-700">Prayer and Petition</p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 426.667 426.667"
                                            style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <polygon
                                                            points="170.667,309.333 298.667,213.333 170.667,117.333      " />
                                                        <path d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333
        S331.2,0,213.333,0z M213.333,384c-94.08,0-170.667-76.587-170.667-170.667S119.253,42.667,213.333,42.667
        S384,119.253,384,213.333S307.413,384,213.333,384z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="mx-2 custom-txt">10:30 Mins</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="py-3 flex items-end px-3">
                                <img src="{{ url('church-template/template1/prayer.png') }}" class="w-12 h-12"
                                    alt="Fruit of the Spirit">
                                <div class="mx-2">
                                    <p class="text-lg text-gray-700">Fruit of the Spirit</p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 426.667 426.667"
                                            style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <polygon
                                                            points="170.667,309.333 298.667,213.333 170.667,117.333      " />
                                                        <path d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333
        S331.2,0,213.333,0z M213.333,384c-94.08,0-170.667-76.587-170.667-170.667S119.253,42.667,213.333,42.667
        S384,119.253,384,213.333S307.413,384,213.333,384z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="mx-2 custom-txt">30:00 Mins</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="py-3 flex items-end px-3">
                                <img src="{{ url('church-template/template1/bible.jpeg') }}" class="w-12 h-12"
                                    alt="Fruit of the Spirit">
                                <div class="mx-2">
                                    <p class="text-lg text-gray-700">Fruit of the Spirit</p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 426.667 426.667"
                                            style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <polygon
                                                            points="170.667,309.333 298.667,213.333 170.667,117.333      " />
                                                        <path d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333
        S331.2,0,213.333,0z M213.333,384c-94.08,0-170.667-76.587-170.667-170.667S119.253,42.667,213.333,42.667
        S384,119.253,384,213.333S307.413,384,213.333,384z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="mx-2 custom-txt">30:00 Mins</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="py-3 flex items-end px-3">
                                <img src="{{ url('church-template/template1/slider4.jpg') }}" class="w-12 h-12"
                                    alt="Do not be afraid">
                                <div class="mx-2">
                                    <p class="text-lg text-gray-700">Do not be afraid ..</p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 426.667 426.667"
                                            style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <polygon
                                                            points="170.667,309.333 298.667,213.333 170.667,117.333      " />
                                                        <path d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333
        S331.2,0,213.333,0z M213.333,384c-94.08,0-170.667-76.587-170.667-170.667S119.253,42.667,213.333,42.667
        S384,119.253,384,213.333S307.413,384,213.333,384z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="mx-2 custom-txt">30:00 Mins</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="py-3 flex items-end px-3">
                                <img src="{{ url('church-template/template1/slider1.jpg') }}" class="w-12 h-12"
                                    alt="Heavens and the earth">
                                <div class="mx-2">
                                    <p class="text-lg text-gray-700">Heavens and the earth</p>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 426.667 426.667"
                                            style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <g>
                                                        <polygon
                                                            points="170.667,309.333 298.667,213.333 170.667,117.333      " />
                                                        <path d="M213.333,0C95.467,0,0,95.467,0,213.333s95.467,213.333,213.333,213.333S426.667,331.2,426.667,213.333
        S331.2,0,213.333,0z M213.333,384c-94.08,0-170.667-76.587-170.667-170.667S119.253,42.667,213.333,42.667
        S384,119.253,384,213.333S307.413,384,213.333,384z" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="mx-2 custom-txt">30:00 Mins</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->


        <!-- footer start -->
        <div class="footer py-3 text-sm px-3 lg:p-0 md:px-0">
            <div class="container mx-auto">
                <div class="flex flex-wrap lg:flex-row">
                    <div class="w-full lg:w-1/3 py-4">
                        <p class="text-lg text-white font-semibold">About the Church</p>
                        <p class="text-sm text-white py-3 leading-loose">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s. </p>
                    </div>
                    <div class="w-1/2 lg:w-1/3 py-4 lg:px-16">
                        <p class="text-lg text-white font-semibold">Quick Links</p>
                        <ul class="list-reset leading-loose text-white py-3">
                            <li class="py-1"><a href="#" class="text-white">Upcoming events</a></li>
                            <li class="py-1"><a href="#" class="text-white">Ministries</a></li>
                            <li class="py-1"><a href="#" class="text-white">Sermons</a></li>
                            <li class="py-1"><a href="#" class="text-white">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="w-1/2 lg:w-1/3 py-4 ">
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
        <div class="footer px-3 lg:px-0 md:px-0" style="opacity: 0.9;">
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
    <!-- sticky navbar start -->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.nav').addClass('sticky')
            } else {
                $('.nav').removeClass('sticky')
            }
        });
    </script>
    <!-- sticky navbar end -->
</body>

</html>
