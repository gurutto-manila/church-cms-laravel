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
            <div class="gallery-section">
                <div>
                    <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full mb-24">Blog
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

        <!-- Blog Start -->
        <!-- latest bulletins start -->
        <div class="my-5">
            <div class="container mx-auto">
                <div class="flex flex-wrap py-5 justify-between">
                    <div class="w-full lg:w-3/4 lg:pr-3 md:pr-3 pl-3 lg:pl-0 md:pl-0">
                        <h2 class="custom-txt uppercase text-2xl py-4">Blog</h2>
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-2">
                            <div class="flex">
                                <div class="bg-gray-100 rounded w-24 h-24 text-center flex flex-col items-center justify-center"
                                    data-aos="zoom-in" data-aos-duration="3000">
                                    <h2 class="text-3xl font-medium">29</h2>
                                    <p class="text-base mb-0">OCT</p>
                                </div>
                                <div class="mx-2 w-8/12">
                                    <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                        class="w-56 h-48 lg:h-48 md:h-32 rounded" alt="perseverance of the saints">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <h2 class="text-2xl font-medium text-gray-800">Perseverance of the Saints</h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-2">
                            <div class="flex">
                                <div class="bg-gray-100 rounded w-24 h-24 text-center flex flex-col items-center justify-center"
                                    data-aos="zoom-in" data-aos-duration="3000">
                                    <h2 class="text-3xl font-medium">30</h2>
                                    <p class="text-base mb-0">OCT</p>
                                </div>
                                <div class="mx-2 w-8/12">
                                    <img src="{{ url('church-template/template1/img2.jpg') }}"
                                        class="w-56 h-48 lg:h-48 md:h-32 rounded"
                                        alt="Lord is Sufficient for all of our needs">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <h2 class="text-2xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                        <!-- ** -->
                        <div class="flex flex-col lg:flex-row md:flex-row w-full py-4 my-2">
                            <div class="flex">
                                <div class="bg-gray-100 rounded w-24 h-24 text-center flex flex-col items-center justify-center"
                                    data-aos="zoom-in" data-aos-duration="3000">
                                    <h2 class="text-3xl font-medium">31</h2>
                                    <p class="text-base mb-0">OCT</p>
                                </div>
                                <div class="mx-2 w-8/12">
                                    <img src="{{ url('church-template/template1/rosary.jpg') }}"
                                        class="w-56 h-48 lg:h-48 md:h-32 rounded"
                                        alt="Lord is Sufficient for all of our needs">
                                </div>
                            </div>
                            <div class="w-full lg:w-2/3 px-3">
                                <h2 class="text-2xl font-medium text-gray-800">Lord is Sufficient for all of our needs
                                </h2>
                                <p class="text-sm text-gray-500 leading-relaxed py-2 mb-3">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="text-sm active-btn px-2 py-2">Read more </a>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/5 px-3 lg:px-0 md:px-0">
                        <div class="bg-gray-100 py-3 px-3 rounded my-3">
                            <h2 class="text-gray-700 uppercase text-xl">About</h2>
                            <p class="text-sm text-gray-500 leading-loose">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s.</p>
                        </div>
                        <div class="py-3 rounded my-3">
                            <h2 class="custom-txt text-xl">Blog archives</h2>
                            <ul class="list-reset leading-loose text-sm text-gray-500 my-2">
                                <li class="py-2">
                                    <a href="#" class="flex items-center justify-between">
                                        <span>June 2020</span>
                                        <span
                                            class="bg-gray-100 inline-block rounded-full w-6 h-6 text-gray-800 text-xs flex item-center justify-center">23</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="flex items-center justify-between">
                                        <span>July 2020</span>
                                        <span
                                            class="bg-gray-100 inline-block rounded-full w-6 h-6 text-gray-800 text-xs flex item-center justify-center">6</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="flex items-center justify-between">
                                        <span>August 2020</span>
                                        <span
                                            class="bg-gray-100 inline-block rounded-full w-6 h-6 text-gray-800 text-xs flex item-center justify-center">10</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="flex items-center justify-between">
                                        <span>September 2020</span>
                                        <span
                                            class="bg-gray-100 inline-block rounded-full w-6 h-6 text-gray-800 text-xs flex item-center justify-center">15</span>
                                    </a>
                                </li>
                                <li class="py-2">
                                    <a href="#" class="flex items-center justify-between">
                                        <span>October 2020</span>
                                        <span
                                            class="bg-gray-100 inline-block rounded-full w-6 h-6 text-gray-800 text-xs flex item-center justify-center">22</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="my-3">
                            <ul class="list-reset flex flex-wrap text-xs">
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Catholic</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Bulletin</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Programs</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Events</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Church</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Charity</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Website</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">Template</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">non-profit</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">belief</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">ministry</a></li>
                                <li class="mr-1 my-2"><a href="#"
                                        class="custom-bg px-2 py-1 text-white">sermon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest bulletins end -->
        <!-- Blog End -->

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
