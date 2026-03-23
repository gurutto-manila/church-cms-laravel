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
            <ul class="slideshow">
                <li><span>Image 01</span>
                    <div>
                        <h3>We Believe God Change Live</h3>
                    </div>
                </li>
                <li><span>Image 02</span>
                    <div>
                        <h3>God is in nature Love it.</h3>
                    </div>
                </li>
                <li><span>Image 03</span>
                    <div>
                        <h3>We Believe God Change Live</h3>
                    </div>
                </li>
            </ul>
            <div class="absolute top-0 left-0 right-0">
                <header class="header-main">
                    <div
                        class="px-4 lg:px-0 md:px-0 py-3 flex items-center justify-between lg:justify-between md:justify-between">
                        <!--  <a href="#"><img src="images/logo_white.png" class="h-12 mx-auto"></a> -->
                        <a href="#" class="w-auto lg:w-full md:w-full"><img
                                src="{{ url('church-template/template1/church-icon.svg') }}" class="w-16 h-16 mx-auto"
                                style="filter: brightness(0) invert(1);" alt="church icon"></a>

                        <div class="block lg:hidden md:hidden menu-click">
                            <button
                                class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light border">
                                <svg class="fill-current h-3 w-3 text-black" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="bg-white py-2 menu-open hidden lg:block md:block">
                        <!-- header-wrapper -->
                        <!-- <div class="px-10 py-3 bg-black fixed w-full"> -->
                        <div class="px-3 py-2">
                            <div class="container mx-auto flex justify-between flex-col lg:flex-row lg:items-center">
                                <div class="w-full lg:w-1/3 flex justify-between items-center">

                                    <div class="block lg:hidden menu-click hidden">
                                        <button
                                            class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light border">
                                            <svg class="fill-current h-3 w-3 text-black" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title>Menu</title>
                                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2 mx-auto " id="mainnav">
                                    <ul
                                        class="list-reset flex flex-col lg:flex-row md:flex-row lg:items-center text-sm lg:justify-end my-2 lg:my-0 md:my-0 leading-loose lg:leading-normal md:leading-normal">
                                        <li><a href="{{ url('/church-websites/2') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 active-btn">Home</a></li>
                                        <li><a href="{{ url('/church-websites/2/about') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">About</a></li>
                                        <li><a href="{{ url('/church-websites/2/ministry') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Ministry</a></li>
                                        <li><a href="{{ url('/church-websites/2/sermons') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Sermons</a></li>
                                        <!-- <li><a href="gallery.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Gallery</a></li> -->
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
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">FAQ</a></li>
                                        <!--  <li><a href="blog.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Blog</a></li>
      <li><a href="events.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Events</a></li>
      <li><a href="donation.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Charity & Donation</a></li> -->
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Contact</a>
                                        </li>
                                        <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">Login</a></li>
                                        <li><a href="#"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 rounded text-black">Register</a>
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

        <!-- our vision start -->
        <div class="py-10 mt-16 mb-16">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center">
                    <!-- ** -->
                    <div class="w-full lg:w-1/4 md:w-1/3 my-3 lg:my-0 md:my-0">
                        <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mx-auto"
                            data-aos="zoom-in" data-aos-duration="3000">
                            <svg class="w-10 h-10 fill-current custom-txt" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 19.676 19.676" style="enable-background:new 0 0 19.676 19.676;"
                                xml:space="preserve">
                                <g>
                                    <path d="M10.335,0.819c0.051,0.041,0.063,0.145,0.097,0.149c0.038,0.005,0.15-0.01,0.192-0.048
    c0.043-0.038,0.074-0.038,0.074-0.089c0-0.053-0.048-0.116-0.063-0.16c-0.014-0.041-0.174-0.047-0.237-0.047
    c-0.062,0-0.105,0.043-0.105,0.043C10.26,0.684,10.239,0.751,10.335,0.819z M18.799,3.057c-0.098-0.065-0.892,0.03-0.892,0.03
    s0.271-0.126,0.285-0.207c0.016-0.079-0.604,0.112-0.812,0.16c-0.206,0.047-0.442,0.206-0.442,0.206l-0.303,0.08
    c0,0-1.748,0.032-2.289,0.032c-0.539,0-1.462-0.287-2.033-0.493c-0.571-0.208-1.286-0.191-1.286-0.191s-0.112-0.333-0.112-0.459
    c0-0.127-0.016-0.764-0.046-1.479c-0.033-0.715-0.605-0.784-0.959-0.715c-0.577,0.112-0.6,0.714-0.631,1.16
    c-0.03,0.444-0.237,1.476-0.237,1.476s-0.161-0.015-0.557,0c-0.399,0.016-1.02,0.303-1.32,0.239
    c-0.301-0.062-1.018,0.11-1.19,0.174c-0.176,0.064-2.64,0.031-2.812,0.031c-0.178,0-0.398-0.158-0.621-0.267
    C2.32,2.721,1.907,2.738,1.701,2.754C1.494,2.769,1.558,2.943,1.558,2.943s-0.254-0.015-0.415,0C0.986,2.96,0.715,2.992,0.78,3.199
    c0.062,0.208,1.145,0.428,1.508,0.444C2.654,3.66,3.083,3.69,3.083,3.69S3.24,3.976,3.448,4.31C3.652,4.643,4.29,5.248,4.29,5.248
    S4.733,5.185,5.1,5.185c0.367,0,0.668-0.063,0.906,0.049C6.243,5.344,7.58,5.645,7.58,5.645L7.373,8.538
    c0,0,0.254,0.03,0.254,0.222c0,0.19,0.145,0.35,0.145,0.35L7.7,16.332l-0.988,0.277l-0.048,0.555L6.27,17.326l-0.302,2.35h8.378
    l-0.298-2.35l-0.396-0.162l-0.049-0.555l-0.927-0.259l-0.219-2.474l0.221-0.08l-0.031-2.207l0.192-0.192l-0.398-5.734
    c0,0,0.667-0.065,1.24-0.223c0.571-0.161,2.128-0.096,2.128-0.096s0.174-0.032,0.444-0.335c0.271-0.302,0.367-1.08,0.367-1.08
    s0.3-0.079,0.57-0.095c0.27-0.015,1.111-0.174,1.478-0.365C19.035,3.277,18.892,3.119,18.799,3.057z M9.651,0.481
    c0,0,0.09-0.183,0.344-0.214c0.254-0.032,0.532,0.034,0.627,0.134c0.097,0.102,0.124,0.566,0.13,0.656
    c0.005,0.09-0.058,0.573-0.152,0.69c-0.097,0.117-0.227,0.222-0.286,0.19s-0.108-0.116-0.187-0.122
    c-0.081-0.004-0.168,0.006-0.153-0.079c0.016-0.085,0.12-0.291,0.206-0.291c0.084,0,0.117,0,0.148,0.026
    c0.032,0.027,0.095,0.027,0.095,0.027s0.042-0.083-0.02-0.158c-0.066-0.076-0.143-0.112-0.143-0.112s0-0.19-0.055-0.206
    c-0.052-0.017-0.111-0.005-0.111-0.005s0.033-0.307,0.011-0.355c-0.02-0.049-0.02-0.095-0.101-0.101
    c-0.08-0.006-0.186-0.015-0.254,0C9.681,0.577,9.581,0.561,9.651,0.481z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="text-lg font-medium text-center text-gray-600 py-2">Guided by the holy Spirit</h2>
                        <p class="text-sm leading-loose text-gray-500 text-center">Lorem Ipsum is simply dummy text of
                            the printing and typesetting industry.</p>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full lg:w-1/4 md:w-1/3 my-3 lg:my-0 md:my-0">
                        <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mx-auto"
                            data-aos="zoom-in" data-aos-duration="3000">
                            <svg class="w-10 h-10 fill-current custom-txt" height="512pt" viewBox="-95 0 512 512"
                                width="512pt" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m313.804688 239.484375h-33.03125v-22.171875c0-21-23.363282-35.636719-44.332032-35.636719h-12.527344c14.210938-17.484375 23.417969-41.144531 23.761719-61.109375.007813-.054687.039063-.097656.042969-.152344l4.152344-51.078124c0-38.230469-29.410156-69.335938-65.566406-69.335938h-42.289063c-36.152344 0-65.566406 31.105469-65.539063 70.007812l4.128907 50.40625c.003906.050782.035156.09375.039062.144532.34375 19.96875 9.550781 43.632812 23.769531 61.117187h-8.40625c-22.917968 0-48.460937 16.089844-48.460937 39.179688v18.628906h-41.289063c-4.566406 0-8.257812 3.699219-8.257812 8.257813v49.546874c0 4.5625 3.691406 8.261719 8.257812 8.261719h33.03125v198.191407c0 4.5625 3.695313 8.257812 8.261719 8.257812h222.964844c4.566406 0 8.257813-3.695312 8.257813-8.257812v-198.195313h33.035156c4.5625 0 8.257812-3.695313 8.257812-8.257813v-49.546874c0-4.558594-3.695312-8.257813-8.261718-8.257813zm-169.789063-222.96875h42.289063c24.992187 0 45.636718 20.238281 48.652343 45.757813-12.792969-6.476563-31.945312-1.722657-53.882812 3.847656-14.960938 3.804687-30.429688 7.734375-43.292969 7.734375-15.933594 0-25.691406-6.148438-32.152344-10.210938-3.015625-1.902343-6.28125-3.96875-9.726562-4.476562 4.414062-24.273438 24.296875-42.652344 48.113281-42.652344zm-44.917969 69.601563c0-2.878907.03125-5.183594.097656-7.027344 7.484376 4.597656 20 11.28125 38.585938 11.28125 14.925781 0 31.414062-4.1875 47.355469-8.238282 17.441406-4.429687 37.234375-9.46875 43.453125-4.605468 1.75 1.359375 2.636718 4.25 2.636718 8.59375v33.277344c0 16.726562-8.386718 37.96875-20.871093 52.855468-9.15625 10.90625-26.476563 17.683594-45.195313 17.683594s-36.039062-6.777344-45.1875-17.683594c-12.492187-14.890625-20.878906-36.128906-20.878906-52.855468v-33.28125zm-33.03125 134.738281c0-11.433594 15.820313-22.660157 31.941406-22.660157h25.339844c1.082032 0 2.101563-.238281 3.050782-.617187 11.15625 5.671875 24.539062 8.875 38.761718 8.875 13.824219 0 26.839844-3.046875 37.804688-8.421875.28125.027344.523437.164062.808594.164062h32.667968c14.042969 0 27.816406 9.472657 27.816406 19.121094v22.167969h-198.191406zm198.191406 183.789062h-16.515624c-4.5625 0-8.257813 3.699219-8.257813 8.257813 0 4.5625 3.695313 8.257812 8.257813 8.257812h16.515624v74.324219h-206.453124v-16.515625h8.261718c4.5625 0 8.257813-3.699219 8.257813-8.257812 0-4.5625-3.695313-8.261719-8.257813-8.261719h-8.261718v-33.03125h41.292968c4.5625 0 8.257813-3.695313 8.257813-8.257813 0-4.558594-3.695313-8.257812-8.257813-8.257812h-41.292968v-66.066406h24.777343c4.5625 0 8.257813-3.695313 8.257813-8.257813 0-4.558594-3.695313-8.257813-8.257813-8.257813h-24.777343v-24.773437h206.453124zm41.289063-115.613281h-289.03125v-33.03125h289.03125zm0 0" />
                                <path
                                    d="m107.355469 404.644531h24.773437v57.804688h-8.257812c-4.566406 0-8.257813 3.699219-8.257813 8.261719 0 4.558593 3.691407 8.257812 8.257813 8.257812h57.804687c4.566407 0 8.257813-3.699219 8.257813-8.257812v-66.066407h24.777344c4.5625 0 8.257812-3.695312 8.257812-8.257812v-33.03125c0-4.5625-3.695312-8.261719-8.257812-8.261719h-24.777344v-16.511719c0-4.5625-3.691406-8.261719-8.257813-8.261719h-41.289062c-4.566407 0-8.257813 3.699219-8.257813 8.261719v16.511719h-24.773437c-4.566407 0-8.261719 3.699219-8.261719 8.261719v33.03125c.003906 4.5625 3.695312 8.257812 8.261719 8.257812zm8.257812-33.03125h24.773438c4.566406 0 8.257812-3.699219 8.257812-8.257812v-16.515625h24.773438v16.515625c0 4.558593 3.695312 8.257812 8.257812 8.257812h24.773438v16.515625h-24.773438c-4.5625 0-8.257812 3.695313-8.257812 8.257813v66.0625h-24.773438v-66.0625c0-4.5625-3.691406-8.257813-8.257812-8.257813h-24.773438zm0 0" />
                                <path
                                    d="m231.226562 454.195312h-16.515624c-4.566407 0-8.257813 3.695313-8.257813 8.257813 0 4.558594 3.691406 8.257813 8.257813 8.257813h16.515624c4.566407 0 8.257813-3.699219 8.257813-8.257813 0-4.5625-3.695313-8.257813-8.257813-8.257813zm0 0" />
                                <path
                                    d="m214.710938 346.839844h16.515624c4.5625 0 8.257813-3.699219 8.257813-8.257813 0-4.5625-3.695313-8.261719-8.257813-8.261719h-16.515624c-4.566407 0-8.261719 3.699219-8.261719 8.261719.003906 4.558594 3.695312 8.257813 8.261719 8.257813zm0 0" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-medium text-center text-gray-600 py-2">Law demands; grace supplies</h2>
                        <p class="text-sm leading-loose text-gray-500 text-center">Lorem Ipsum is simply dummy text of
                            the printing and typesetting industry.</p>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full lg:w-1/4 md:w-1/3 my-3 lg:my-0 md:my-0">
                        <div class="w-20 h-20 rounded-full bg-gray-100 flex items-center justify-center mx-auto"
                            data-aos="zoom-in" data-aos-duration="3000">
                            <svg class="w-10 h-10 fill-current custom-txt" id="Capa_1"
                                enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="m0 352.619v158.561h125.473v-233.042zm49.966 88.395v-56.213h29.807v56.213z" />
                                    <path
                                        d="m512 352.616-125.563-74.48v233.044h125.563zm-46.877 88.398h-29.807v-56.213h29.807z" />
                                    <path
                                        d="m154.472 511.18h56.771v-102.587c0-24.653 20.057-44.711 44.711-44.711s44.711 20.057 44.711 44.711v102.587h56.771v-291.418l82.784 52.151 15.887-25.22-186.072-117.219v-66.695h32.538v-29.807h-32.538v-32.152h-29.807v32.151h-30.892v29.807h30.892v67.73l-184.43 116.185 15.887 25.22 82.787-52.152zm86.579-282.444h29.807v59.614h-29.807z" />
                                    <path
                                        d="m270.858 408.593c0-8.218-6.685-14.904-14.904-14.904-8.218 0-14.904 6.686-14.904 14.904v102.587h29.807v-102.587z" />
                                </g>
                            </svg>
                        </div>
                        <h2 class="text-lg font-medium text-center text-gray-600 py-2">Christ Occupied</h2>
                        <p class="text-sm leading-loose text-gray-500 text-center">Lorem Ipsum is simply dummy text of
                            the printing and typesetting industry.</p>
                    </div>
                    <!-- ** -->
                </div>
            </div>
        </div>
        <!-- our vision end -->
        <!-- programs and events start -->
        <div class="my-5 programs-section py-5">
            <div class="container mx-auto">
                <h1 class="text-white text-center uppercase text-4xl py-4">Programs & Events</h1>
                <div class="flex flex-wrap justify-center py-5">
                    <div class="w-full lg:w-1/3 md:w-1/3 p-5" data-aos="flip-left" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-full h-56 mx-auto mb-3"
                            alt="Programs & Events">
                        <h2 class="text-white text-center font-medium text-xl py-2">God's irresistable grace</h2>
                        <h6 class="custom-txt text-center italic">Sunday, October 7th</h6>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 p-5" data-aos="flip-right" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-full h-56 mx-auto mb-3"
                            alt="Programs & Events">
                        <h2 class="text-white text-center font-medium text-xl py-2">Weekly meeting & prayer</h2>
                        <h6 class="custom-txt text-center italic">Monday, October 8th</h6>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 p-5" data-aos="flip-left" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-full h-56 mx-auto mb-3"
                            alt="Programs & Events">
                        <h2 class="text-white text-center font-medium text-xl py-2">Show me your faith</h2>
                        <h6 class="custom-txt text-center italic">Tuesday, October 9th</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- programs and events end -->
        <!-- latest bulletins start -->
        <div class="my-5">
            <div class="container mx-auto px-3 lg:px-0 md:px-0">
                <div class="flex flex-wrap py-5">
                    <div class="w-full lg:w-3/4 lg:pr-3">
                        <h1 class="custom-txt uppercase text-2xl py-4">Latest Bulletin</h1>
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4">
                            <div class="bg-gray-100 rounded w-24 lg:w-24 md:w-32 h-24 text-center flex flex-col items-center justify-center"
                                data-aos="zoom-in" data-aos-duration="3000">
                                <h2 class="text-3xl font-medium">29</h2>
                                <p class="text-base mb-0">OCT</p>
                            </div>
                            <div class="lg:mx-2 my-2 lg:my-0 md:my-0 w-full lg:w-1/4 md:w-1/3">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-56 h-40 rounded"
                                    alt="Prayer">
                            </div>
                            <div class="w-full lg:w-2/3 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-2xl font-medium text-gray-800">Perseverance of the Saints</h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-sm custom-txt pt-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4">
                            <div class="bg-gray-100 rounded w-24 lg:w-24 md:w-32 h-24 text-center flex flex-col items-center justify-center"
                                data-aos="zoom-in" data-aos-duration="3000">
                                <h2 class="text-3xl font-medium">30</h2>
                                <p class="text-base mb-0">OCT</p>
                            </div>
                            <div class="lg:mx-2 my-2 lg:my-0 md:my-0 w-full lg:w-1/4 md:w-1/3">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-56 h-40 rounded"
                                    alt="Lord is Sufficient for all of our needs">
                            </div>
                            <div class="w-full lg:w-2/3 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-2xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2">Lorem Ipsum is simply dummy text
                                    of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-sm custom-txt pt-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/4 md:w-1/2">
                        <h1 class="custom-txt uppercase text-2xl py-4">Sermons</h1>
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
                                    alt="Do not be afraid..">
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
        <!-- latest bulletins end -->

        <!-- gallery start -->
        <div class="py-5 mt-5 lg:mt-16 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <h1 class="custom-txt uppercase text-2xl py-4">Gallery</h1>
                <ul class="list-reset flex items-center flex-wrap justify-between">
                    <li class="relative gallery-sec my-2" data-aos="fade-up" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/img1.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-down" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/img2.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-up" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-down" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider1.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-up" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider2.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-down" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider3.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-up" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider4.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec  my-2" data-aos="fade-down" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider1.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec my-2" data-aos="fade-up" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider2.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                    <li class="relative gallery-sec  my-2" data-aos="fade-down" data-aos-duration="3000">
                        <a href="#">
                            <img src="{{ url('church-template/template1/slider4.jpg') }}"
                                class="w-40 lg:w-56 h-40 lg:h-48" alt="Gallery">
                            <div class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                <img src="{{ url('church-template/template1/glass.svg') }}" class="w-8 h-8"
                                    alt="glass">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- gallery end -->
        <!-- donation start -->
        <div class="py-4 my-12">
            <div class="container mx-auto  ">
                <div class="donate-section rounded px-2 lg:px-5 py-5 flex flex-wrap items-center">
                    <div class="w-full lg:w-1/6">
                        <div class="donation-icon w-32 h-32 rounded-full flex items-center justify-center mx-auto"
                            data-aos="zoom-in" data-aos-duration="3000">
                            <svg class="w-16 h-16 text-white fill-current" id="Capa_1"
                                enable-background="new 0 0 512.149 512.149" height="512" viewBox="0 0 512.149 512.149"
                                width="512" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="m413.637 340.91c-66.443-15.765-133.803 9.125-177.926 65.113-14.834-2.527-31.195-6.51-48.872-12.528-37.367-12.724-78.842 4.271-96.474 39.529l-6.709 13.417 67.083 33.541c43.194 21.597 84.132 32.096 125.156 32.096h.139c44.531-.026 80.169-12.608 108.804-22.718 26.877-9.489 46.296-16.345 60.229-9.377l13.417 6.708 53.666-107.331c-7.056-3.16-48.179-26.508-98.513-38.45zm30.524 107.345c-21.204-4.169-43.842 3.824-69.311 12.816-27.858 9.836-59.434 20.984-98.834 21.006-.042 0-.078 0-.12 0-36.255 0-72.812-9.464-111.741-28.929l-38.132-19.066c12.971-13.198 32.85-18.421 51.147-12.189 108.361 36.895 174.994 5.862 177.777 4.523l-12.93-27.071c-17.404 8.204-47.556 11.047-69.537 10.402 36.237-36.108 85.625-51.181 134.231-39.649 20.535 4.872 42.789 12.719 65.072 22.908z" />
                                    <path
                                        d="m256.024 181.078c-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75-33.645-75-75-75zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" />
                                    <path
                                        d="m138.193 176.026c52.961-.002 103.12-24.563 138.139-68.894 14.836 2.527 31.198 6.51 48.877 12.529 37.494 12.767 78.905-4.395 96.474-39.529l6.709-13.417-67.082-33.542c-44.563-22.281-87.437-33.424-127.406-33.095-43.98.354-79.203 13.105-107.504 23.351-26.536 9.606-45.708 16.549-59.317 9.744l-13.417-6.708-53.666 107.331c8.445 3.752 44.068 24.722 97.712 37.449 13.543 3.214 27.098 4.781 40.481 4.781zm-70.186-111.162c20.993 4.009 43.403-4.103 68.604-13.226 27.511-9.96 58.692-21.248 97.534-21.561 35.187-.292 73.463 9.786 113.749 29.929l38.132 19.066c-12.971 13.198-32.85 18.42-51.147 12.189-108.359-36.894-174.993-5.863-177.777-4.523l12.93 27.071c17.376-8.191 47.499-11.043 69.446-10.405-36.101 35.614-85.687 50.313-134.84 38.652-21.811-5.175-43.364-12.54-64.252-21.947z" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="px-5 w-full lg:w-5/6 py-3 lg:py-0 md:py-0">
                        <h2 class="text-xl text-white">Help human trafficking survivors</h2>
                        <p class="text-white text-sm leading-loose py-2">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                        <div class="mb-4 mt-2 donate-btn py-2 text-center w-full lg:w-1/6 rounded">
                            <a href="#" class="uppercase  text-white px-5 ">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- donation end -->
        <!-- bible verses start -->
        <div class="my-8 py-5 lg:py-12 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <div class="flex items-center flex-wrap">
                    <div class="w-full lg:w-1/2" data-aos="fade-left" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/img4.jpg') }}" class="mx-auto"
                            style="width: 400px;" alt="bible verses">
                    </div>
                    <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-duration="3000">
                        <h1 class="custom-txt uppercase text-4xl py-2">Bible Verses</h1>
                        <p class="text-2xl py-2"> For if, by the trespass of the one man, death reigned through that
                            one man, how much more will those who receive God's abundant provision of grace! </p>
                        <p class="text-lg py-2">Romans 5:17 (NIV)</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bible verses end -->
        <!-- newsletter start -->
        <div class="newsletter-section px-3 lg:px-0 md:px-0">
            <div class="container mx-auto flex items-center justify-center h-full">
                <div class="flex flex-wrap items-center w-full">
                    <div class="w-full lg:w-8/12">
                        <h1 class="text-white text-2xl lg:text-5xl">Do You Want To Be New Member?</h1>
                        <p class="text-base text-white">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.</p>
                    </div>
                    <div class="w-full lg:w-4/12 py-4 lg:py-0 md:py-0">
                        <form>
                            <div class="flex items-center border border-white justify-between">
                                <input type="text" name="" class="px-2 py-2 bg-transparent w-4/5 text-white"
                                    placeholder="Enter Email">
                                <div class="w-10 h-10 bg-black flex items-center justify-center">
                                    <a href="#" class="">
                                        <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 334.5 334.5" style="enable-background:new 0 0 334.5 334.5;"
                                            xml:space="preserve">
                                            <path d="M332.797,13.699c-1.489-1.306-3.608-1.609-5.404-0.776L2.893,163.695c-1.747,0.812-2.872,2.555-2.893,4.481
  s1.067,3.693,2.797,4.542l91.833,45.068c1.684,0.827,3.692,0.64,5.196-0.484l89.287-66.734l-70.094,72.1
  c-1,1.029-1.51,2.438-1.4,3.868l6.979,90.889c0.155,2.014,1.505,3.736,3.424,4.367c0.513,0.168,1.04,0.25,1.561,0.25
  c1.429,0,2.819-0.613,3.786-1.733l48.742-56.482l60.255,28.79c1.308,0.625,2.822,0.651,4.151,0.073
  c1.329-0.579,2.341-1.705,2.775-3.087L334.27,18.956C334.864,17.066,334.285,15.005,332.797,13.699z" />
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter end -->
        <!-- our ministries start -->
        <div class="my-6 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <h1 class="custom-txt uppercase text-2xl py-4">Our Ministries</h1>
                <div class="flex flex-wrap ">
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2" data-aos="flip-left" data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider1.jpg') }}" alt="Ministry">
                                    <div class="content-details fadeIn-top">
                                        <h3 class="text-lg">YOU CANNOT, BUT GOD CAN</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                        <div class="mt-3"><a href="#" class="text-white ">Read more
                                                &#8594;</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2" data-aos="flip-right" data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider2.jpg') }}" alt="Ministry">
                                    <div class="content-details fadeIn-top">
                                        <h3 class="text-lg">DELIGHT YOURSELF IN LORD</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                        <div class="mt-3"><a href="#" class="text-white ">Read more
                                                &#8594;</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2" data-aos="flip-left" data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider3.jpg') }}" alt="Ministry">
                                    <div class="content-details fadeIn-top">
                                        <h3 class="text-lg">FAITH DEVELOPS PERSEREVANCE</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                        </p>
                                        <div class="mt-3"><a href="#" class="text-white ">Read more
                                                &#8594;</a></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                </div>
            </div>
        </div>
        <!-- our ministries end -->

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
