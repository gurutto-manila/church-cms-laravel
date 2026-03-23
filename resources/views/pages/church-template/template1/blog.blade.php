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
                    <h2 class="capitalize text-3xl font-semibold text-white mb-0">Blog</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->


        <!-- Blog Start -->
        <!-- latest bulletins start -->
        <div class="my-5">
            <div class="container mx-auto">
                <div class="flex flex-wrap lg:py-5 md:py-5 justify-between">
                    <div class="w-full lg:w-3/4 pr-3">
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-2 lg:py-4 md:py-4 my-2">
                            <div class="mx-2 w-full lg:w-1/4 md:w-1/4">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                    class="w-56 h-48 lg:h-48 md:h-40 rounded" alt="prayer">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-2xl font-medium text-gray-800">Perseverance of the Saints</h2>
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
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
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Friday, 12.00 PM</p>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-2 lg:py-4 md:py-4 my-2">
                            <div class="mx-2 w-full lg:w-1/4 md:w-1/4">
                                <img src="{{ url('church-template/template1/img2.jpg') }}"
                                    class="w-56 h-48 lg:h-48 md:h-40 rounded"
                                    alt="lord is suficient for all of our needs">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-2xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
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
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Friday, 12.00 PM</p>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-2 lg:py-4 md:py-4 my-2">
                            <div class="mx-2 w-full lg:w-1/4 md:w-1/4">
                                <img src="{{ url('church-template/template1/rosary.jpg') }}"
                                    class="w-56 h-48 lg:h-48 md:h-40 rounded"
                                    alt="lord is sufficient for all of our needs">
                            </div>
                            <div class="w-full lg:w-2/3 md:w-2/3 px-3 py-2 lg:py-0 md:py-0">
                                <h2 class="text-2xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
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
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Friday, 12.00 PM</p>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/4">
                        <h1 class="custom-txt uppercase text-2xl">Recent Post</h1>
                        <div class="">
                            <!-- ** -->
                            <div class="py-3 flex items-end">
                                <img src="{{ url('church-template/template1/donation.png') }}" class="w-12 h-12"
                                    alt="prayer & petition">
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
                            <div class="py-3 flex items-end">
                                <img src="{{ url('church-template/template1/prayer.png') }}" class="w-12 h-12"
                                    alt="fruit of the spirit">
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
                            <div class="py-3 flex items-end">
                                <img src="{{ url('church-template/template1/bible.jpeg') }}" class="w-12 h-12"
                                    alt="fruit of the spirit">
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
                            <div class="py-3 flex items-end">
                                <img src="{{ url('church-template/template1/slider4.jpg') }}" class="w-12 h-12"
                                    alt="do not be afraid..">
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
                            <div class="py-3 flex items-end">
                                <img src="{{ url('church-template/template1/slider1.jpg') }}" class="w-12 h-12"
                                    alt="heavens and the earth">
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
        <!-- Blog End -->


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
