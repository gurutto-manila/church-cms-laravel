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
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2">Home</a></li>
                                        <li><a href="{{ url('/church-websites/2/about') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black">About</a></li>
                                        <li><a href="{{ url('/church-websites/2/ministry') }}"
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2 text-black active-btn">Ministry</a>
                                        </li>
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
                                                class="px-3 py-2 mx-2 lg:mx-3 md:mx-2  rounded text-black">Register</a>
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
        <div class="py-5 my-8 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <div class="w-full lg:w-2/5">
                    <div class="w-full lg:w-11/12" data-aos="zoom-in" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/ministry-img.jpg') }}" alt="Ministry">
                    </div>
                </div>

                <div class="w-full py-4 lg:pr-6">
                    <h2 class="text-2xl font-medium custom-txt pt-3">Curabitur blandit tempus porttitor. Nullam quis
                        risus eget urna mollis ornare vel eu leo.</h2>
                    <p class="text-sm leading-loose text-gray-500 py-2 text-justify">Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                        type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages.</p>
                    <p class="text-sm leading-loose text-gray-500 py-2 text-justify">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.
                    </p>
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- ministries start -->
        <div class="my-3 lg:my-6 md:my-6 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <h2 class="custom-txt uppercase text-2xl pb-4">Related Ministries</h2>
                <div class="flex flex-wrap ">
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2" data-aos="flip-left" data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider1.jpg') }}"
                                        alt="You cannot but god can">
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
                                        src="{{ url('church-template/template1/slider2.jpg') }}"
                                        alt="Delight yourself in lord">
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
                                        src="{{ url('church-template/template1/slider3.jpg') }}"
                                        alt="Faith develops Perserevance">
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
        <!-- ministries end -->

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
</body>

</html>
