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
                    <h2 class="capitalize text-xl lg:text-3xl md:text-3xl font-semibold text-white mb-0">Charity</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Charity</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- start -->
        <div class="lg:py-5 md:py-5 my-3 lg:my-8 md:my-8">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-between items-center py-4">
                    <div class="w-full lg:w-3/5 py-4 lg:pr-6">
                        <h2 class="text-2xl font-medium custom-txt">About Donation</h2>
                        <p class="text-sm leading-loose text-gray-500 py-2 text-justify">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book. It has survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        <p class="text-sm leading-loose text-gray-500 py-2 text-justify">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text.
                        </p>
                    </div>
                    <div class="w-full lg:w-2/5">
                        <div class="w-full lg:w-11/12 ml-auto" data-aos="fade-left" data-aos-duration="3000">
                            <img src="{{ url('church-template/template1/donation.png') }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end -->
        <!-- Donation start -->
        <div class="mb-16">
            <div class="donation-section container mx-auto h-full">
                <!--  <h1 class="uppercase font-bold text-4xl text-center pt-8">Grace Outreach</h1> -->
                <div class="w-full lg:w-11/12 md:w-11/12 flex flex-wrap items-end h-full mx-auto">
                    <div class="w-full lg:w-1/2 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-white py-3">Help human trafficking survivors</h3>
                        <p class="text-sm text-white pb-3 leading-loose">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                    </div>
                    <div class="w-full lg:w-1/2 md:w-1/2 px-2 lg:px-5" data-aos="fade-up" data-aos-duration="3000">
                        <div class="bg-gray-100 py-2 px-4 rounded-t">
                            <h3 class="text-sm text-gray-800 pt-3"> <span class="text-3xl text-red-600 font-bold mr-3">$
                                    25,000</span> Pledged of $ 15,000 goal </h3>
                            <div class="progress finbyz-fadeinup"
                                style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                                <div class="progress-bar progress-bar-striped progress-bar-animated text-xs"
                                    role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 75%">75%
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-sm pt-2">
                                <p>Backers : <span class="text-red-600 font-semibold">13</span></p>
                                <p>Days Left : <span class="text-red-600 font-semibold">10</span></p>
                            </div>
                            <div class="mb-4 mt-2 bg-red-600 py-2 text-center">
                                <a href="#" class="uppercase  text-white px-5 ">Donate now</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Donation end -->



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
