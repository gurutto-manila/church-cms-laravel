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
                    <h2 class="text-3xl font-bold uppercase text-white absolute bottom-0 text-center w-full mb-24">
                        Donation</h2>
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

        <!-- about donation start -->
        <div class="my-5 px-3 lg:px-0 md:px-0">
            <div class="container mx-auto">
                <div class="py-5 flex flex-col lg:flex-row md:flex-row items-center">
                    <div class="w-full lg:w-2/3 pr-10">
                        <h2 class="custom-txt uppercase text-2xl">About Donation</h2>
                        <p class="text-gray-500 text-sm leading-loose">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.</p>
                        <div class="pt-4">
                            <p class="text-gray-500 text-sm leading-loose py-2">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its layout.
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                                letters, as opposed to using 'Content here, content here', making it look like readable
                                English.</p>
                            <p class="text-gray-500 text-sm leading-loose py-2">At vero eos et accusamus et iusto odio
                                dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos
                                dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                                sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        </div>
                        <p class="text-gray-500 text-sm leading-loose">Pastor <span class="custom-txt mx-2">John
                                Anderson</span></p>
                    </div>
                    <div class="w-full lg:w-1/3" data-aos="zoom-in" data-aos-duration="3000">
                        <img src="{{ url('church-template/template1/charity.png') }}" alt="charity">
                    </div>
                </div>
            </div>
        </div>
        <!-- about donation end -->

        <!-- donation start -->
        <div class="py-4 my-5 px-3 lg:p-0 md:px-0">
            <div class="container mx-auto">
                <div class="donate-section rounded px-5 py-5 flex flex-col lg:flex-row md:flex-row items-center">
                    <div class="w-full lg:w-1/6 md:w-1/6">
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
                    <div class="px-2 lg:px-5 md:px-5 w-full lg:w-5/6 md:w-5/6">
                        <h2 class="text-xl text-white">Help human trafficking survivors</h2>
                        <p class="text-white text-sm leading-loose py-2">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                        <div class="mb-4 mt-2 donate-btn py-2 text-center w-full lg:w-1/6 md:w-1/3 rounded">
                            <a href="#" class="uppercase  text-white px-5 ">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- donation end -->

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
