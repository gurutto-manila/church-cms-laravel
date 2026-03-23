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
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script>
</head>


<body class="overflow-x-hidden">
    <div class="app ">
        <!-- slider start -->
        <div class="relative">
            <div class="donation-sec">
                <div>
                    <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full mb-24">Video
                        Gallery</h2>
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


        <div class="cont container mx-auto">
            <div class="page-head">
                <div class="demo-gallery">
                    <ul id="lightgallery" class="flex flex-wrap">
                        <li class="video" data-src="https://vimeo.com/3653567"
                            data-poster="{{ url('church-template/template1/event1.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event1.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/event2.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event2.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://vimeo.com/3653567"
                            data-poster="{{ url('church-template/template1/event3.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event3.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://vimeo.com/108785446"
                            data-poster="{{ url('church-template/template1/event4.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event4.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/event5.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event5.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/img1.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/img1.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/img2.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/img2.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/img4.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/img4.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/event1.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/event1.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                        <li class="video" data-src="https://www.youtube.com/watch?v=Pq9yPrLWMyU"
                            data-poster="{{ url('church-template/template1/prayer.jpg') }}">
                            <a href="">
                                <img class="img-responsive" src="{{ url('church-template/template1/prayer.jpg') }}"
                                    alt="video gallery">
                                <div class="demo-gallery-poster">
                                    <img src="{{ url('church-template/template1/play-button.svg') }}"
                                        alt="play button">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- video gallery end -->


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
    </script> -->
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
    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>
</body>

</html>
