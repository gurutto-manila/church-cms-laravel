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
            <div class="donation-sec">
                <div>
                    <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full mb-24">Prayer
                    </h2>
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
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black ">Sermons</a></li>
                                        <li><a href="#"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black active-btn">Pages</a>
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

        <!-- latest bulletins start -->
        <div class="my-5">
            <div class="container mx-auto">
                <div class="py-5">
                    <div class="w-full">
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-4 px-3 lg:px-0">
                            <div class="flex">
                                <div class="custom-bg w-24 h-24 text-center flex flex-col p-2" data-aos="zoom-in"
                                    data-aos-duration="3000">
                                    <h2 class="text-3xl lg:text-3xl md:text-2xl font-medium italic text-white border-b">
                                        22nd</h2>
                                    <p class="text-base mb-0 text-white opacity-50 mt-1">Nov, 2020</p>
                                </div>
                                <div class="w-8/12">
                                    <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                        class="w-56 h-40 lg:h-40 md:h-32" alt="Prayer">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <div>
                                    <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Prayers for the people of
                                        Mosul</h2>
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="488.152px"
                                            height="488.152px" viewBox="0 0 488.152 488.152"
                                            style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z" />
                                                    <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z" />
                                                    <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z" />
                                                    <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z" />
                                                    <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z" />
                                                    <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z" />
                                                    <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z" />
                                                    <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z" />
                                                    <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Thursday 8.00 Am - Thursday 0.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.999,0c-74.443,0-135,60.557-135,135s60.557,135,135,135s135-60.557,135-135S330.442,0,255.999,0z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M478.48,398.68C438.124,338.138,370.579,302,297.835,302h-83.672c-72.744,0-140.288,36.138-180.644,96.68l-2.52,3.779V512
      h450h0.001V402.459L478.48,398.68z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 custom-txt">Francies George</span>
                                    </div>
                                    <!-- end -->
                                    <p class="text-sm text-gray-500 leading-loose"> Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-4">
                            <div class="flex">
                                <div class="custom-bg w-24 h-24 text-center flex flex-col p-2" data-aos="zoom-in"
                                    data-aos-duration="3000">
                                    <h2 class="text-3xl lg:text-3xl md:text-2xl font-medium italic text-white border-b">
                                        23rd</h2>
                                    <p class="text-base mb-0 text-white opacity-50 mt-1">Nov, 2020</p>
                                </div>
                                <div class="w-8/12">
                                    <img src="{{ url('church-template/template1/donation.png') }}"
                                        class="w-56 h-40 lg:h-40 md:h-32" alt="Donation">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <div>
                                    <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Prayers for the Armed
                                        Forces</h2>
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="488.152px"
                                            height="488.152px" viewBox="0 0 488.152 488.152"
                                            style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z" />
                                                    <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z" />
                                                    <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z" />
                                                    <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z" />
                                                    <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z" />
                                                    <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z" />
                                                    <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z" />
                                                    <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z" />
                                                    <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Thursday 8.00 Am - Thursday 0.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.999,0c-74.443,0-135,60.557-135,135s60.557,135,135,135s135-60.557,135-135S330.442,0,255.999,0z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M478.48,398.68C438.124,338.138,370.579,302,297.835,302h-83.672c-72.744,0-140.288,36.138-180.644,96.68l-2.52,3.779V512
      h450h0.001V402.459L478.48,398.68z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 custom-txt">James Norton</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <p class="text-sm text-gray-500 leading-loose"> Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <!-- ** -->

                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-4">
                            <div class="flex">
                                <div class="custom-bg w-24 h-24 text-center flex flex-col p-2" data-aos="zoom-in"
                                    data-aos-duration="3000">
                                    <h2 class="text-3xl lg:text-3xl md:text-2xl font-medium italic text-white border-b">
                                        25th</h2>
                                    <p class="text-base mb-0 text-white opacity-50 mt-1">Nov, 2020</p>
                                </div>
                                <div class="w-8/12">
                                    <img src="{{ url('church-template/template1/event1.jpg') }}"
                                        class="w-56 h-40 lg:h-40 md:h-32" alt="payer for the financial situation">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <div>
                                    <h2 class="text-xl lg:text-2xl font-medium text-gray-800">Prayers for the financial
                                        situation, debt and redundancy</h2>
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="488.152px"
                                            height="488.152px" viewBox="0 0 488.152 488.152"
                                            style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z" />
                                                    <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z" />
                                                    <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z" />
                                                    <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z" />
                                                    <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z" />
                                                    <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z" />
                                                    <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z" />
                                                    <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z" />
                                                    <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Thursday 8.00 Am - Thursday 0.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.999,0c-74.443,0-135,60.557-135,135s60.557,135,135,135s135-60.557,135-135S330.442,0,255.999,0z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M478.48,398.68C438.124,338.138,370.579,302,297.835,302h-83.672c-72.744,0-140.288,36.138-180.644,96.68l-2.52,3.779V512
      h450h0.001V402.459L478.48,398.68z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 custom-txt">Mark Johns</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <p class="text-sm text-gray-500 leading-loose"> Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <!-- ** -->

                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-4">
                            <div class="flex">
                                <div class="custom-bg w-24 h-24 text-center flex flex-col p-2" data-aos="zoom-in"
                                    data-aos-duration="3000">
                                    <h2 class="text-3xl lg:text-3xl md:text-2xl font-medium italic text-white border-b">
                                        27th</h2>
                                    <p class="text-base mb-0 text-white opacity-50 mt-1">Nov, 2020</p>
                                </div>
                                <div class="w-8/12">
                                    <img src="{{ url('church-template/template1/event2.jpg') }}"
                                        class="w-56 h-40 lg:h-40 md:h-32" alt="A Prayer for peace in gaza">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <div>
                                    <h2 class="text-xl lg:text-2xl font-medium text-gray-800">A Prayer for peace in Gaza
                                    </h2>
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="488.152px"
                                            height="488.152px" viewBox="0 0 488.152 488.152"
                                            style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z" />
                                                    <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z" />
                                                    <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z" />
                                                    <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z" />
                                                    <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z" />
                                                    <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z" />
                                                    <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z" />
                                                    <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z" />
                                                    <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Thursday 8.00 Am - Thursday 0.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M255.999,0c-74.443,0-135,60.557-135,135s60.557,135,135,135s135-60.557,135-135S330.442,0,255.999,0z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path d="M478.48,398.68C438.124,338.138,370.579,302,297.835,302h-83.672c-72.744,0-140.288,36.138-180.644,96.68l-2.52,3.779V512
      h450h0.001V402.459L478.48,398.68z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 custom-txt">Mark Johns</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <p class="text-sm text-gray-500 leading-loose"> Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>

                </div>
            </div>
        </div>
        <!-- latest bulletins end -->
        <!-- add your prayer start -->
        <div class="py-2 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <div>
                    <h2 class="custom-txt uppercase text-2xl mx-2">Add Your Prayer</h2>
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-2/3">
                            <form>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-1/3 my-2 px-2">
                                        <input type="text" name="" class="bg-gray-100 px-3 py-3 w-full"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="w-full lg:w-1/3 my-2 px-2">
                                        <input type="text" name="" class="bg-gray-100 px-3 py-3 w-full"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="w-full lg:w-1/3 my-2 px-2">
                                        <input type="text" name="" class="bg-gray-100 px-3 py-3 w-full"
                                            placeholder="Phone (Optional)">
                                    </div>
                                    <div class="w-full my-2 px-2">
                                        <textarea class="bg-gray-100 px-3 py-3 w-full" rows="5"
                                            placeholder="Your Prayer"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4 mt-2 donate-btn py-2 text-center w-1/3 lg:w-1/6 rounded mx-2">
                                    <a href="#" class="uppercase  text-white px-5 ">Submit</a>
                                </div>
                            </form>
                        </div>
                        <!--  <div class="w-full lg:w-1/3">
       <img src="images/img3.jpg">
     </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- add your prayer end -->

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
        $(document).ready(function() {
            $('.image-popup-vertical-fit').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },

                zoom: {
                    enabled: true,

                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    opener: function(openerElement) {

                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }

            });

        });
    </script>
    <!-- slider js -->
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
