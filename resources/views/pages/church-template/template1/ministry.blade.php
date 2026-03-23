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

                        <div class="w-full lg:w-1/3 menu-open hidden lg:block md:block" id="mainnav">
                            <ul
                                class="list-reset flex flex-col lg:flex-row md:flex-col lg:items-center text-sm lg:justify-end my-2 lg:my-0 md:my-0 leading-loose lg:leading-normal md:leading-loose">
                                <li><a href="{{ url('/church-websites/1') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Home</a></li>
                                <li><a href="{{ url('/church-websites/1/about') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">About</a></li>
                                <li><a href="{{ url('/church-websites/1/ministry') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black active-btn">Ministry</a></li>
                                <li><a href="{{ url('/church-websites/1/sermons') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Sermons</a></li>
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
                    <h2 class="capitalize text-3xl font-semibold text-white mb-0">Ministry</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Ministry</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->


        <!-- ministries start -->
        <div class="my-10">
            <div class="container mx-auto">
                <!-- <h2 class="custom-txt capitalize text-4xl pb-4 text-center font-semibold">Ministries</h2> -->
                <div class="flex flex-wrap ">
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-left"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider1.jpg') }}">
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
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-right"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider2.jpg') }}">
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
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-left"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ url('church-template/template1/img1.jpg') }}">
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
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-left"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/slider3.jpg') }}">
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
                    <!-- ** -->
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-left"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ url('church-template/template1/img2.jpg') }}">
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
                    <div class="w-full lg:w-1/3 md:w-1/2 lg:pr-3 md:pr-3 my-2" data-aos="flip-left"
                        data-aos-duration="3000">
                        <div class="ministries-section">
                            <div class="content">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="content-image"
                                        src="{{ url('church-template/template1/ministry.jpg') }}">
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
                </div>
            </div>
        </div>
        <!-- ministries end -->


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
