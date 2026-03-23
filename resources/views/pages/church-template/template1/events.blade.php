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
                                <a href="#"><img src="{{ url('church-template/logo.png') }}" class="w-20 h-auto"></a>
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
                                class="list-reset flex flex-col lg:flex-row md:flex-col lg:items-center  text-sm lg:justify-end my-2 lg:my-0 md:my-0 leading-loose lg:leading-normal md:leading-loose">
                                <li><a href="{{ url('/church-websites/1') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Home</a></li>
                                <li><a href="{{ url('/church-websites/1/about') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">About</a></li>
                                <li><a href="{{ url('/church-websites/1/ministry') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Ministry</a></li>
                                <li><a href="{{ url('/church-websites/1/sermons') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Sermons</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black active-btn">Pages</a>
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
                    <h2 class="capitalize text-3xl font-semibold text-white mb-0">Events</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Events</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- Latest event start -->
        <div class="my-2 lg:my-5 md:my-5">
            <div class="container mx-auto">
                <div class="lg:py-5 md:py-5">
                    <h1 class="custom-txt uppercase text-2xl py-4">Upcoming Events</h1>
                    <!-- ** -->
                    <div class="flex flex-col lg:flex-row md:flex-col w-full  my-4 shadow">
                        <div class="w-full lg:w-3/5 md:w-full flex py-4">
                            <div class="custom-bg w-24 h-24 text-center flex flex-col p-2">
                                <h2 class="text-xl lg:text-3xl md:text-2xl font-medium italic text-white border-b">22nd
                                </h2>
                                <p class="text-base mb-0 text-white opacity-50 mt-1">Nov, 2020</p>
                            </div>
                            <div class="px-3">
                                <h2 class="text-lg lg:text-2xl md:text-2xl font-medium text-gray-800">Sharing Our Faith
                                    & Love To Children</h2>
                                <!-- start -->
                                <div class="flex items-center py-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" width="488.152px" height="488.152px"
                                        viewBox="0 0 488.152 488.152" style="enable-background:new 0 0 488.152 488.152;"
                                        xml:space="preserve">
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
                                    <span class="italic mx-2 text-gray-500">Thursday 8.00 Am - Thursday 0.00 Am</span>
                                </div>
                                <!-- end -->
                                <!-- start -->
                                <div class="flex items-center py-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" enable-background="new 0 0 24 24"
                                        height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                    </svg>
                                    <span class="italic mx-2 custom-txt">St.HolyCross Church</span>
                                </div>
                                <!-- end -->
                                <!-- start -->
                                <div class="flex items-center py-2">
                                    <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 472.615 472.615"
                                        style="enable-background:new 0 0 472.615 472.615;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M471.197,70.93c-0.284-0.378-0.474-0.757-0.756-1.039c-2.648-3.215-6.996-4.255-10.778-2.741L6.088,239.77
      c-3.97,1.511-6.428,5.389-6.049,9.64c0.284,4.161,3.403,7.657,7.562,8.415l124.029,24.106l26.565,116.184l0.094,0.663
      c0.189,0.754,0.378,1.417,0.756,2.077c0.189,0.379,0.473,0.852,0.756,1.231c0.378,0.567,0.851,1.041,1.229,1.511
      c1.229,1.135,2.741,1.985,4.348,2.271c0.19,0.093,0.473,0.187,0.663,0.187c0.473,0,1.04,0.095,1.512,0.095
      c0.662,0,1.229-0.095,1.89-0.189c0.284-0.093,0.567-0.093,0.945-0.282c0.095,0,0.189,0,0.284-0.096
      c0.567-0.189,1.04-0.376,1.513-0.661h0.095c0.188-0.189,0.473-0.284,0.661-0.473l130.079-91.414l73.548,13.896
      c0.567,0.095,1.23,0.095,1.797,0.095c3.97,0,7.562-2.458,8.886-6.239l84.797-241.538c0.189-0.471,0.284-0.944,0.378-1.417
      c0.189-0.661,0.189-1.417,0.189-2.08C472.615,74.05,472.143,72.347,471.197,70.93z M224.085,282.783
      c-0.567,0.471-1.134,1.133-1.419,1.796c-0.188,0.095-0.283,0.189-0.377,0.378l-50.86,86.404l-21.175-92.928l235.012-143.786
      L224.085,282.783z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="italic mx-2 text-gray-500">Park row, New York, United States,
                                        10028</span>
                                </div>
                                <!-- end -->

                            </div>
                        </div>
                        <div class="custom-bg w-full lg:w-2/5 md:w-full">
                            <div class="text-white flex items-center justify-center h-full">
                                <ul class="list-reset flex items-center justify-center w-full py-2 lg:py-0 md:py-0">
                                    <li class="w-1/5 border-r text-center">
                                        <h1 class="text-4xl">12</h1>
                                        <span>Days</span>
                                    </li>
                                    <li class="w-1/5 border-r text-center">
                                        <h1 class="text-4xl">10</h1>
                                        <span>Hours</span>
                                    </li>
                                    <li class="w-1/5 border-r text-center">
                                        <h1 class="text-4xl">00</h1>
                                        <span>Mins</span>
                                    </li>
                                    <li class="w-1/5 text-center">
                                        <h1 class="text-4xl">00</h1>
                                        <span>Secs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                </div>
                <div class="lg:py-5 md:py-5">
                    <div class="w-full">
                        <h1 class="custom-txt uppercase text-2xl py-4">Latest Events</h1>
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 lg:my-4 md:my-4">
                            <div class="w-full lg:w-1/5 md:w-1/5">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                    class="w-56 h-40 lg:h-40 md:h-32" alt="prayer">
                            </div>
                            <div
                                class="w-full lg:w-4/5 md:w-4/5 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0 flex flex-wrap items-center justify-between">
                                <div>
                                    <h2 class="text-lg lg:text-2xl md:text-2xl font-medium text-gray-800">Sharing Our
                                        Faith & Love To Children</h2>
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
                                        <span class="italic mx-2 text-gray-500">22nd Nov 2020, Thursday 8.00 Am -10.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" enable-background="new 0 0 24 24"
                                            height="512" viewBox="0 0 24 24" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                        </svg>
                                        <span class="italic mx-2 custom-txt">St.HolyCross Church</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 472.615 472.615"
                                            style="enable-background:new 0 0 472.615 472.615;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M471.197,70.93c-0.284-0.378-0.474-0.757-0.756-1.039c-2.648-3.215-6.996-4.255-10.778-2.741L6.088,239.77
      c-3.97,1.511-6.428,5.389-6.049,9.64c0.284,4.161,3.403,7.657,7.562,8.415l124.029,24.106l26.565,116.184l0.094,0.663
      c0.189,0.754,0.378,1.417,0.756,2.077c0.189,0.379,0.473,0.852,0.756,1.231c0.378,0.567,0.851,1.041,1.229,1.511
      c1.229,1.135,2.741,1.985,4.348,2.271c0.19,0.093,0.473,0.187,0.663,0.187c0.473,0,1.04,0.095,1.512,0.095
      c0.662,0,1.229-0.095,1.89-0.189c0.284-0.093,0.567-0.093,0.945-0.282c0.095,0,0.189,0,0.284-0.096
      c0.567-0.189,1.04-0.376,1.513-0.661h0.095c0.188-0.189,0.473-0.284,0.661-0.473l130.079-91.414l73.548,13.896
      c0.567,0.095,1.23,0.095,1.797,0.095c3.97,0,7.562-2.458,8.886-6.239l84.797-241.538c0.189-0.471,0.284-0.944,0.378-1.417
      c0.189-0.661,0.189-1.417,0.189-2.08C472.615,74.05,472.143,72.347,471.197,70.93z M224.085,282.783
      c-0.567,0.471-1.134,1.133-1.419,1.796c-0.188,0.095-0.283,0.189-0.377,0.378l-50.86,86.404l-21.175-92.928l235.012-143.786
      L224.085,282.783z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Park row, New York, United States,
                                            10028</span>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="text-sm read-more px-2 py-2 custom-bg text-white rounded">Read
                                        more </a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->

                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 lg:my-4 md:my-4">

                            <div class="w-full lg:w-1/5 md:w-1/5">
                                <img src="{{ url('church-template/template1/event1.jpg') }}"
                                    class="w-56 h-40 lg:h-40 md:h-32" alt="event">
                            </div>
                            <div
                                class="w-full lg:w-4/5 md:w-4/5 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0 flex flex-wrap items-center justify-between">
                                <div>
                                    <h2 class="text-lg lg:text-2xl md:text-2xl font-medium text-gray-800">Know Jesus
                                        Christ Better Through Lines</h2>
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
                                        <span class="italic mx-2 text-gray-500">23rd Nov 2020, Friday 8.00 Am -10.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" enable-background="new 0 0 24 24"
                                            height="512" viewBox="0 0 24 24" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                        </svg>
                                        <span class="italic mx-2 custom-txt">St.HolyCross Church</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 472.615 472.615"
                                            style="enable-background:new 0 0 472.615 472.615;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M471.197,70.93c-0.284-0.378-0.474-0.757-0.756-1.039c-2.648-3.215-6.996-4.255-10.778-2.741L6.088,239.77
      c-3.97,1.511-6.428,5.389-6.049,9.64c0.284,4.161,3.403,7.657,7.562,8.415l124.029,24.106l26.565,116.184l0.094,0.663
      c0.189,0.754,0.378,1.417,0.756,2.077c0.189,0.379,0.473,0.852,0.756,1.231c0.378,0.567,0.851,1.041,1.229,1.511
      c1.229,1.135,2.741,1.985,4.348,2.271c0.19,0.093,0.473,0.187,0.663,0.187c0.473,0,1.04,0.095,1.512,0.095
      c0.662,0,1.229-0.095,1.89-0.189c0.284-0.093,0.567-0.093,0.945-0.282c0.095,0,0.189,0,0.284-0.096
      c0.567-0.189,1.04-0.376,1.513-0.661h0.095c0.188-0.189,0.473-0.284,0.661-0.473l130.079-91.414l73.548,13.896
      c0.567,0.095,1.23,0.095,1.797,0.095c3.97,0,7.562-2.458,8.886-6.239l84.797-241.538c0.189-0.471,0.284-0.944,0.378-1.417
      c0.189-0.661,0.189-1.417,0.189-2.08C472.615,74.05,472.143,72.347,471.197,70.93z M224.085,282.783
      c-0.567,0.471-1.134,1.133-1.419,1.796c-0.188,0.095-0.283,0.189-0.377,0.378l-50.86,86.404l-21.175-92.928l235.012-143.786
      L224.085,282.783z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Park row, New York, United States,
                                            10028</span>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="text-sm read-more px-2 py-2 custom-bg text-white rounded">Read
                                        more </a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->

                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 lg:my-4 md:my-4">
                            <div class="w-full lg:w-1/5 md:w-1/5">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                    class="w-56 h-40 lg:h-40 md:h-32" alt="prayer">
                            </div>
                            <div
                                class="w-full lg:w-4/5 md:w-4/5 lg:px-3 md:px-3 py-2 lg:py-0 md:py-0 flex flex-wrap items-center justify-between">
                                <div>
                                    <h2 class="text-lg lg:text-2xl md:text-2xl font-medium text-gray-800">Caring About
                                        The Community & Serving</h2>
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
                                        <span class="italic mx-2 text-gray-500">24th Nov 2020, Saturday 8.00 Am -10.00
                                            Am</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" enable-background="new 0 0 24 24"
                                            height="512" viewBox="0 0 24 24" width="512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                        </svg>
                                        <span class="italic mx-2 custom-txt">St.HolyCross Church</span>
                                    </div>
                                    <!-- end -->
                                    <!-- start -->
                                    <div class="flex items-center py-2">
                                        <svg class="w-5 h-5 fill-current custom-txt" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 472.615 472.615"
                                            style="enable-background:new 0 0 472.615 472.615;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M471.197,70.93c-0.284-0.378-0.474-0.757-0.756-1.039c-2.648-3.215-6.996-4.255-10.778-2.741L6.088,239.77
      c-3.97,1.511-6.428,5.389-6.049,9.64c0.284,4.161,3.403,7.657,7.562,8.415l124.029,24.106l26.565,116.184l0.094,0.663
      c0.189,0.754,0.378,1.417,0.756,2.077c0.189,0.379,0.473,0.852,0.756,1.231c0.378,0.567,0.851,1.041,1.229,1.511
      c1.229,1.135,2.741,1.985,4.348,2.271c0.19,0.093,0.473,0.187,0.663,0.187c0.473,0,1.04,0.095,1.512,0.095
      c0.662,0,1.229-0.095,1.89-0.189c0.284-0.093,0.567-0.093,0.945-0.282c0.095,0,0.189,0,0.284-0.096
      c0.567-0.189,1.04-0.376,1.513-0.661h0.095c0.188-0.189,0.473-0.284,0.661-0.473l130.079-91.414l73.548,13.896
      c0.567,0.095,1.23,0.095,1.797,0.095c3.97,0,7.562-2.458,8.886-6.239l84.797-241.538c0.189-0.471,0.284-0.944,0.378-1.417
      c0.189-0.661,0.189-1.417,0.189-2.08C472.615,74.05,472.143,72.347,471.197,70.93z M224.085,282.783
      c-0.567,0.471-1.134,1.133-1.419,1.796c-0.188,0.095-0.283,0.189-0.377,0.378l-50.86,86.404l-21.175-92.928l235.012-143.786
      L224.085,282.783z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="italic mx-2 text-gray-500">Park row, New York, United States,
                                            10028</span>
                                    </div>
                                    <!-- end -->
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="text-sm read-more px-2 py-2 custom-bg text-white rounded">Read
                                        more </a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>

                </div>
            </div>
        </div>
        <!-- latest events end -->



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
