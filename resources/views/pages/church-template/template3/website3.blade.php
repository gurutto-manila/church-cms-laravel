<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.3/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('css/church-template/style-2.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
</head>

<body class="overflow-x-hidden">
    <div class="app relative">

        <!-- header start -->
        <header>
            <div class="header-wrapper">
                <!-- <div class="px-10 py-3 bg-black fixed w-full"> -->
                <div class="px-3 py-2">
                    <div class="container mx-auto flex justify-between flex-col lg:flex-row lg:items-center">
                        <div class="w-full lg:w-1/3 flex justify-between items-center">
                            <div class="">
                                <a href="#"><img src="{{ url('church-template/logo.png') }}" class="w-16 h-auto"
                                        alt="logo"></a>
                            </div>
                            <div class="block lg:hidden menu-click">
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

                        <div class="w-full lg:w-1/3 menu-open hidden lg:block md:hidden" id="mainnav">
                            <ul
                                class="list-reset flex flex-col lg:flex-row md:flex-col lg:items-center text-sm lg:justify-end my-2 lg:my-0 md:my-0">
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black active-btn">Home</a>
                                </li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black ">About</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Ministry</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Sermons</a></li>
                                <li>
                                    <a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black flex items-center">
                                        <span>Pages</span>
                                        <svg class="w-2 h-2 fill-current m-3" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512.011 512.011"
                                            style="enable-background:new 0 0 512.011 512.011;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M505.755,123.592c-8.341-8.341-21.824-8.341-30.165,0L256.005,343.176L36.421,123.592c-8.341-8.341-21.824-8.341-30.165,0
      s-8.341,21.824,0,30.165l234.667,234.667c4.16,4.16,9.621,6.251,15.083,6.251c5.462,0,10.923-2.091,15.083-6.251l234.667-234.667
      C514.096,145.416,514.096,131.933,505.755,123.592z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="submenu mt-4">
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Charity & Donation</a></li>
                                        <li><a href="#">Prayer</a></li>
                                        <li><a href="#">Video Gallery</a></li>
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
        <!-- header end -->

        <!-- slider start -->
        <!-- Images from Unsplash -->
        <div>
            <div class="slider stick-dots">
                <div class="slide">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="{{ url('church-template/template3/banner1.jpg') }}"
                            class="full-image animated" data-animation-in="zoomInImage" /
                            alt="A Church that loves God and People">
                    </div>
                    <div class="slide__content">
                        <div class="slide__content--headings">
                            <h2 class="animated" data-animation-in="fadeInUp">A Church that loves God and People
                            </h2>
                            <p class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="{{ url('church-template/template3/banner2.jpg') }}"
                            class="full-image animated" data-animation-in="zoomInImage" alt="We Beleive in Huminity" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__content--headings">
                            <h2 class="animated" data-animation-in="fadeInRight">We Beleive in Huminity</h2>
                            <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2">Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide__img">
                        <img src="" alt="" data-lazy="{{ url('church-template/template3/banner3.jpg') }}"
                            class="full-image animated" data-animation-in="zoomInImage"
                            alt="Loving God, Loving Others & The World" />
                    </div>
                    <div class="slide__content">
                        <div class="slide__content--headings">
                            <h2 class="animated" data-animation-in="fadeInRight">Loving God, Loving Others & The
                                World</h2>
                            <p class="animated" data-animation-in="fadeInRight" data-delay-in="0.2">Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
        <!-- upcoming events start -->
        <div class="lg:my-16 md:my-16">
            <div class="container mx-auto">
                <h1 class="text-3xl font-medium text-center">Upcoming Events</h1>
                <p class="text-gray-600 py-2 text-center text-sm">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <div class="flex flex-wrap pt-12 pb-6 px-3 lg:px-0 md:px-0">
                    <div class="w-full lg:w-1/3 py-3">
                        <h6 class="text-lg font-medium">Weekly meeting & prayer</h6>
                        <!-- start -->
                        <div class="flex my-3">
                            <!-- ** -->
                            <div class="flex my-3 w-2/5">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 426.667 426.667"
                                    style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M213.227,0C95.36,0,0,95.467,0,213.333s95.36,213.333,213.227,213.333s213.44-95.467,213.44-213.333S331.093,0,213.227,0z
       M213.333,384c-94.293,0-170.667-76.373-170.667-170.667S119.04,42.667,213.333,42.667S384,119.04,384,213.333
      S307.627,384,213.333,384z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="224,218.667 224,106.667 192,106.667 192,234.667 303.893,301.867 320,275.627    " />
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>Nov 06th, 2020</p>
                                    <p class="py-1">10am - 11am</p>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="flex my-3">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="425.963px" height="425.963px" viewBox="0 0 425.963 425.963"
                                    style="enable-background:new 0 0 425.963 425.963;" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
    c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
    c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
    C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
    c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z" />
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>Holy Cross Church</p>
                                    <p class="py-1">Chennai</p>
                                </div>
                            </div>
                            <!-- ** -->
                        </div>
                        <!-- end -->
                    </div>
                    <div class="w-full lg:w-1/3 py-3">
                        <h6 class="text-lg font-medium">Weekly meeting & prayer</h6>
                        <!-- start -->
                        <div class="flex my-3">
                            <!-- ** -->
                            <div class="flex my-3 w-2/5">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 426.667 426.667"
                                    style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M213.227,0C95.36,0,0,95.467,0,213.333s95.36,213.333,213.227,213.333s213.44-95.467,213.44-213.333S331.093,0,213.227,0z
       M213.333,384c-94.293,0-170.667-76.373-170.667-170.667S119.04,42.667,213.333,42.667S384,119.04,384,213.333
      S307.627,384,213.333,384z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="224,218.667 224,106.667 192,106.667 192,234.667 303.893,301.867 320,275.627    " />
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>Nov 06th, 2020</p>
                                    <p class="py-1">10am - 11am</p>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="flex my-3">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="425.963px" height="425.963px" viewBox="0 0 425.963 425.963"
                                    style="enable-background:new 0 0 425.963 425.963;" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
    c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
    c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
    C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
    c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z" />
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>Church 233 Main st,</p>
                                    <p class="py-1">Chennai</p>
                                </div>
                            </div>
                            <!-- ** -->
                        </div>
                        <!-- end -->
                    </div>
                    <div class="w-full lg:w-1/3 py-3">
                        <h6 class="text-lg font-medium">Weekly meeting & prayer</h6>
                        <!-- start -->
                        <div class="flex my-3">
                            <!-- ** -->
                            <div class="flex my-3 w-2/5">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 426.667 426.667"
                                    style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M213.227,0C95.36,0,0,95.467,0,213.333s95.36,213.333,213.227,213.333s213.44-95.467,213.44-213.333S331.093,0,213.227,0z
       M213.333,384c-94.293,0-170.667-76.373-170.667-170.667S119.04,42.667,213.333,42.667S384,119.04,384,213.333
      S307.627,384,213.333,384z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="224,218.667 224,106.667 192,106.667 192,234.667 303.893,301.867 320,275.627    " />
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>Nov 08th, 2020</p>
                                    <p class="py-1">10am - 11am</p>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="flex my-3">
                                <svg data-aos="zoom-out" data-aos-duration="3000"
                                    class="w-4 h-4 fill-current custom-txt mt-1" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="425.963px" height="425.963px" viewBox="0 0 425.963 425.963"
                                    style="enable-background:new 0 0 425.963 425.963;" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M213.285,0h-0.608C139.114,0,79.268,59.826,79.268,133.361c0,48.202,21.952,111.817,65.246,189.081
    c32.098,57.281,64.646,101.152,64.972,101.588c0.906,1.217,2.334,1.934,3.847,1.934c0.043,0,0.087,0,0.13-0.002
    c1.561-0.043,3.002-0.842,3.868-2.143c0.321-0.486,32.637-49.287,64.517-108.976c43.03-80.563,64.848-141.624,64.848-181.482
    C346.693,59.825,286.846,0,213.285,0z M274.865,136.62c0,34.124-27.761,61.884-61.885,61.884
    c-34.123,0-61.884-27.761-61.884-61.884s27.761-61.884,61.884-61.884C247.104,74.736,274.865,102.497,274.865,136.62z" />
                                    </g>
                                </svg>
                                <div class="text-xs text-gray-500 mx-2">
                                    <p>CSI Church</p>
                                    <p class="py-1">Madurai</p>
                                </div>
                            </div>
                            <!-- ** -->
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- upcoming events end -->
        <!-- start -->
        <div class="my-10 bg-gray-100 py-6 lg:py-20 md:py-20">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-center">
                    <!-- *** -->
                    <div class="w-full lg:w-1/3 md:w-1/3 my-3 text-center px-4 feature-section">
                        <div class="border p-3 w-20 h-20 mx-auto border-gray-200 home-icon bg-white">
                            <svg data-aos="zoom-in" data-aos-duration="3000"
                                class="w-12 h-12 fill-current custom-txt mx-auto" id="bile2"
                                enable-background="new 0 0 300 300" height="512" viewBox="0 0 300 300" width="512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m241.946 110v-21.181l-3.272-.605c-49.201-9.101-79.576 11.97-88.675 19.598-9.103-7.626-39.497-28.694-88.726-19.598l-3.273.605v21.181h-20v144h224v-144zm-8-14.481v123.886c-12.645-.621-49.676-.596-79.946 17.868v-122.33c2.615-2.3 9.627-7.916 20.607-12.717 12.487-5.46 32.748-10.919 59.339-6.707zm-167.946 0c46.169-7.31 74.15 14.329 80 19.432v122.324c-25.627-15.622-56.097-18.045-72.532-18.045-2.992 0-5.52.081-7.468.176zm-20 22.481h12v105.691l.002 4.422 4.4-.443c.491-.048 48.018-4.513 82.396 18.329h-98.798zm208 128h-98.8c34.356-22.841 81.856-18.379 82.342-18.329l4.405.448v-110.119h12.053z" />
                                <path
                                    d="m207.171 68.829c.782.78 1.805 1.171 2.829 1.171s2.047-.391 2.829-1.171c1.562-1.562 1.562-4.095 0-5.657l-12-12c-1.562-1.562-4.095-1.562-5.657 0s-1.562 4.095 0 5.657z" />
                                <path
                                    d="m242 70c1.024 0 2.047-.391 2.829-1.171l12-12c1.562-1.562 1.562-4.095 0-5.657s-4.095-1.562-5.657 0l-12 12c-1.562 1.562-1.562 4.095 0 5.657.781.78 1.804 1.171 2.828 1.171z" />
                                <path
                                    d="m226 70c2.209 0 4-1.791 4-4v-16c0-2.209-1.791-4-4-4s-4 1.791-4 4v16c0 2.209 1.791 4 4 4z" />
                                <path
                                    d="m89.504 149.989 12.496 1.562v38.449c0 2.209 1.791 4 4 4s4-1.791 4-4v-37.449l11.504 1.438c.168.021.335.031.501.031 1.988 0 3.711-1.481 3.964-3.504.274-2.192-1.281-4.191-3.473-4.465l-12.496-1.563v-10.488c0-2.209-1.791-4-4-4s-4 1.791-4 4v9.488l-11.504-1.438c-2.196-.274-4.191 1.281-4.465 3.473s1.281 4.192 3.473 4.466z" />
                            </svg>
                        </div>
                        <p class="text-lg font-medium my-3 pt-2">Guided by the Holy Spirit</p>
                        <p class="text-xs text-gray-500 leading-loose w-11/12 mx-auto mb-0">It is a long established
                            fact that a reader will be distracted by the readable content of a page when looking at its
                            layout. </p>
                    </div>
                    <!-- *** -->
                    <!-- *** -->
                    <div class="w-full lg:w-1/3 md:w-1/3 my-3 text-center px-4 feature-section">
                        <div class="border p-3 w-20 h-20 mx-auto border-gray-200 home-icon bg-white">
                            <svg data-aos="zoom-in" data-aos-duration="3000"
                                class="w-12 h-12 fill-current custom-txt mx-auto" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 466.002 466.002" style="enable-background:new 0 0 466.002 466.002;"
                                xml:space="preserve">
                                <path d="M465.451,317.234c-12.17-31.123-30.336-59.4-53.586-83.713c22.997-24.738,40.819-53.413,52.549-84.871
  c1.543-4.14-0.562-8.747-4.701-10.291c-4.139-1.542-8.748,0.561-10.291,4.701c-11.042,29.615-27.868,56.319-49.044,79.154
  c-10.955-10.151-22.869-19.497-35.664-27.94c-47.319-31.226-103.063-47.548-161.249-47.183
  c-38.872,0.385-76.404,8.184-111.554,23.182C58,184.74,27.853,205.205,2.305,231.098c-1.493,1.514-2.323,3.56-2.305,5.686
  c0.018,2.126,0.881,4.158,2.4,5.646c25.927,25.406,56.398,45.314,90.568,59.172c35.383,14.351,73.016,21.48,111.838,21.162
  c58.221-0.432,113.777-17.542,160.663-49.481c12.6-8.582,24.313-18.046,35.067-28.294c21.408,22.442,38.558,48.776,50.012,78.071
  c1.235,3.158,4.255,5.089,7.453,5.089c0.969,0,1.954-0.177,2.911-0.551C465.028,325.989,467.059,321.349,465.451,317.234z
   M204.683,306.765c-70,0.536-135.397-24.297-185.173-70.146c49.093-46.793,114.142-72.837,184.082-73.529
  c70.802-0.481,137.105,26.014,185.442,70.592C341.358,278.907,275.464,306.24,204.683,306.765z" />
                            </svg>
                        </div>
                        <p class="text-lg font-medium my-3 pt-2">Guided by the Holy Spirit</p>
                        <p class="text-xs text-gray-500 leading-loose w-11/12 mx-auto mb-0">It is a long established
                            fact that a reader will be distracted by the readable content of a page when looking at its
                            layout. </p>
                    </div>
                    <!-- *** -->
                    <!-- *** -->
                    <div class="w-full lg:w-1/3 md:w-1/3 my-3 text-center px-4 feature-section">
                        <div class="border p-3 w-20 h-20 mx-auto border-gray-200 home-icon bg-white">
                            <svg data-aos="zoom-in" data-aos-duration="3000" class="w-12 h-12 fill-current custom-txt"
                                version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.674 59.674"
                                style="enable-background:new 0 0 59.674 59.674;" xml:space="preserve">
                                <g>
                                    <path d="M33.837,47.513l3.399-1.929c0.48-0.272,0.648-0.883,0.376-1.363l-2.425-4.272c-0.131-0.231-0.349-0.401-0.606-0.471
    c-0.256-0.07-0.53-0.036-0.761,0.097l-3.352,1.922l-1.94-3.418c-0.271-0.479-0.879-0.649-1.359-0.378l-4.322,2.428
    c-0.232,0.13-0.402,0.348-0.474,0.604s-0.038,0.53,0.094,0.762l1.942,3.422l-3.402,1.932c-0.48,0.272-0.648,0.883-0.376,1.363
    l2.425,4.272c0.131,0.23,0.348,0.4,0.604,0.47c0.255,0.071,0.529,0.038,0.759-0.094l3.402-1.932l4.28,7.54
    c0.314,0.554,0.825,0.952,1.439,1.122c0.21,0.058,0.424,0.086,0.637,0.086c0.407,0,0.809-0.105,1.173-0.312l1.901-1.079
    c0.555-0.315,0.953-0.828,1.122-1.444c0.168-0.615,0.086-1.259-0.231-1.813L33.837,47.513z M36.445,56.313
    c-0.016,0.057-0.06,0.164-0.18,0.232l-1.901,1.079c-0.12,0.069-0.234,0.053-0.291,0.036c-0.057-0.016-0.163-0.06-0.231-0.18
    l-4.774-8.41c-0.131-0.23-0.348-0.4-0.604-0.47c-0.087-0.024-0.177-0.036-0.266-0.036c-0.171,0-0.342,0.044-0.494,0.13
    l-3.402,1.932l-1.438-2.533l3.402-1.932c0.48-0.272,0.648-0.883,0.376-1.363l-1.94-3.418l2.578-1.448l1.945,3.426
    c0.131,0.231,0.349,0.401,0.606,0.471c0.255,0.069,0.531,0.035,0.761-0.098l3.351-1.922l1.436,2.529l-3.402,1.931
    c-0.231,0.131-0.401,0.349-0.471,0.605c-0.07,0.257-0.036,0.531,0.097,0.761l4.805,8.385C36.476,56.141,36.46,56.255,36.445,56.313
    z" />
                                    <path d="M25.337,8c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S23.132,8,25.337,8z M25.337,2c1.103,0,2,0.897,2,2s-0.897,2-2,2
    s-2-0.897-2-2S24.234,2,25.337,2z" />
                                    <path d="M34.337,9c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S32.132,9,34.337,9z M34.337,3c1.103,0,2,0.897,2,2s-0.897,2-2,2
    s-2-0.897-2-2S33.234,3,34.337,3z" />
                                    <path d="M43.337,11c2.206,0,4-1.794,4-4s-1.794-4-4-4c-2.206,0-4,1.794-4,4S41.132,11,43.337,11z M43.337,5c1.103,0,2,0.897,2,2
    s-0.897,2-2,2c-1.103,0-2-0.897-2-2S42.234,5,43.337,5z" />
                                    <path d="M48.337,10c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S50.543,10,48.337,10z M48.337,16c-1.103,0-2-0.897-2-2
    s0.897-2,2-2s2,0.897,2,2S49.44,16,48.337,16z" />
                                    <path d="M45.337,18c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S47.543,18,45.337,18z M45.337,24c-1.103,0-2-0.897-2-2
    s0.897-2,2-2s2,0.897,2,2S46.44,24,45.337,24z" />
                                    <path d="M38.337,24c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S40.543,24,38.337,24z M38.337,30c-1.103,0-2-0.897-2-2
    s0.897-2,2-2s2,0.897,2,2S39.44,30,38.337,30z" />
                                    <path d="M27.337,34c0,2.206,1.794,4,4,4s4-1.794,4-4s-1.794-4-4-4S27.337,31.794,27.337,34z M33.337,34c0,1.103-0.897,2-2,2
    s-2-0.897-2-2s0.897-2,2-2S33.337,32.897,33.337,34z" />
                                    <path d="M17.337,11c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S15.132,11,17.337,11z M17.337,5c1.103,0,2,0.897,2,2
    s-0.897,2-2,2s-2-0.897-2-2S16.234,5,17.337,5z" />
                                    <path d="M12.337,18c2.206,0,4-1.794,4-4s-1.794-4-4-4s-4,1.794-4,4S10.132,18,12.337,18z M12.337,12c1.103,0,2,0.897,2,2
    s-0.897,2-2,2s-2-0.897-2-2S11.234,12,12.337,12z" />
                                    <path d="M15.337,23c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S15.337,25.206,15.337,23z M9.337,23c0-1.103,0.897-2,2-2
    s2,0.897,2,2s-0.897,2-2,2S9.337,24.103,9.337,23z" />
                                    <path d="M17.337,32c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S17.337,34.206,17.337,32z M11.337,32c0-1.103,0.897-2,2-2
    s2,0.897,2,2s-0.897,2-2,2S11.337,33.103,11.337,32z" />
                                    <path d="M17.337,36c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S19.543,36,17.337,36z M17.337,42c-1.103,0-2-0.897-2-2
    s0.897-2,2-2s2,0.897,2,2S18.44,42,17.337,42z" />
                                </g>
                            </svg>
                        </div>
                        <p class="text-lg font-medium my-3 pt-2">Guided by the Holy Spirit</p>
                        <p class="text-xs text-gray-500 leading-loose mb-0 w-11/12 mx-auto">It is a long established
                            fact that a reader will be distracted by the readable content of a page when looking at its
                            layout. </p>
                    </div>
                    <!-- *** -->
                </div>
            </div>
        </div>
        <!-- end -->

        <!-- our ministry start -->
        <div class="my-20">
            <div class="container mx-auto">
                <h1 class="text-3xl font-medium text-center">Our Ministry</h1>
                <p class="text-gray-600 py-2 text-center text-sm">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <div class="flex flex-wrap my-10">
                    <div class="w-full lg:w-1/2 p-3" data-aos="fade-right" data-aos-duration="3000">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-col lg:flex-row md:flex-row ministry-section">
                                <div class="w-full lg:w-2/5 md:w-2/5 relative">
                                    <img src="{{ url('church-template/template3/img1.jpg') }}" class="w-full h-40"
                                        alt="Ministry">
                                    <div class="ministry-img w-full h-40 absolute p-3">
                                        <div class="border border-white h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 fill-current text-white mx-auto" version="1.1"
                                                id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 428.232 428.232"
                                                style="enable-background:new 0 0 428.232 428.232;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M214.116,149.691c-18.086,0-32.801,14.713-32.801,32.799c0,18.085,14.715,32.799,32.801,32.799
      c18.086,0,32.799-14.713,32.799-32.799C246.915,164.405,232.202,149.691,214.116,149.691z M214.116,200.29
      c-9.815,0-17.801-7.984-17.801-17.799c0-9.815,7.986-17.799,17.801-17.799c9.814,0,17.799,7.984,17.799,17.799
      C231.915,192.305,223.93,200.29,214.116,200.29z" />
                                                        <path d="M407.52,413.232h-26.281v-90.572c0-2.914-1.689-5.566-4.332-6.797l-47.768-22.268v-29.936c0-2.84-1.605-5.438-4.146-6.708
      l-46.453-23.225v-75.481c0-1.712-0.586-3.373-1.66-4.707l-55.264-68.569V39.246h15.055c4.143,0,7.5-3.358,7.5-7.5
      c0-4.142-3.357-7.5-7.5-7.5h-15.055V7.5c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v16.746h-15.057
      c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h15.057v45.724l-55.264,68.569c-1.074,1.333-1.66,2.994-1.66,4.707v75.481
      l-46.453,23.225c-2.541,1.27-4.146,3.868-4.146,6.708v29.936l-47.771,22.268c-2.641,1.23-4.33,3.883-4.33,6.797v90.572H20.711
      c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5H407.52c4.143,0,7.5-3.357,7.5-7.5S411.663,413.232,407.52,413.232z
       M366.239,413.232h-37.1V310.146l37.1,17.293V413.232z M99.092,413.232H61.991v-85.793l37.102-17.293V413.232z M196.315,413.232
      v-68.393c0-4.449,7.613-9.426,17.801-9.426c10.187,0,17.799,4.977,17.799,9.426v68.393H196.315z M314.139,413.232h-67.225v-68.393
      c0-13.695-14.406-24.426-32.799-24.426c-18.393,0-32.801,10.73-32.801,24.426v68.393h-67.223V268.296l46.453-23.227
      c2.541-1.27,4.146-3.868,4.146-6.708v-77.47l49.424-61.323l49.424,61.323v77.47c0,2.841,1.605,5.438,4.146,6.708l46.453,23.227
      V413.232z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:3/5 md:w-3/5 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">DELIGHT YOURSELF IN LORD</h2>
                                    <p class="text-xs text-gray-600 leading-loose py-3">Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's ...</p>
                                    <a href="#" class="custom-txt underline text-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/2 p-3" data-aos="fade-left" data-aos-duration="3000">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-col lg:flex-row md:flex-row  ministry-section">
                                <div class="w-full lg:w-2/5 md:w-2/5 relative">
                                    <img src="{{ url('church-template/template3/img2.jpg') }}" class="w-full h-40"
                                        alt="Ministry">
                                    <div class="ministry-img w-full h-40 absolute p-3">
                                        <div class="border border-white h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 fill-current text-white mx-auto" version="1.1"
                                                id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 428.232 428.232"
                                                style="enable-background:new 0 0 428.232 428.232;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M214.116,149.691c-18.086,0-32.801,14.713-32.801,32.799c0,18.085,14.715,32.799,32.801,32.799
      c18.086,0,32.799-14.713,32.799-32.799C246.915,164.405,232.202,149.691,214.116,149.691z M214.116,200.29
      c-9.815,0-17.801-7.984-17.801-17.799c0-9.815,7.986-17.799,17.801-17.799c9.814,0,17.799,7.984,17.799,17.799
      C231.915,192.305,223.93,200.29,214.116,200.29z" />
                                                        <path d="M407.52,413.232h-26.281v-90.572c0-2.914-1.689-5.566-4.332-6.797l-47.768-22.268v-29.936c0-2.84-1.605-5.438-4.146-6.708
      l-46.453-23.225v-75.481c0-1.712-0.586-3.373-1.66-4.707l-55.264-68.569V39.246h15.055c4.143,0,7.5-3.358,7.5-7.5
      c0-4.142-3.357-7.5-7.5-7.5h-15.055V7.5c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v16.746h-15.057
      c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h15.057v45.724l-55.264,68.569c-1.074,1.333-1.66,2.994-1.66,4.707v75.481
      l-46.453,23.225c-2.541,1.27-4.146,3.868-4.146,6.708v29.936l-47.771,22.268c-2.641,1.23-4.33,3.883-4.33,6.797v90.572H20.711
      c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5H407.52c4.143,0,7.5-3.357,7.5-7.5S411.663,413.232,407.52,413.232z
       M366.239,413.232h-37.1V310.146l37.1,17.293V413.232z M99.092,413.232H61.991v-85.793l37.102-17.293V413.232z M196.315,413.232
      v-68.393c0-4.449,7.613-9.426,17.801-9.426c10.187,0,17.799,4.977,17.799,9.426v68.393H196.315z M314.139,413.232h-67.225v-68.393
      c0-13.695-14.406-24.426-32.799-24.426c-18.393,0-32.801,10.73-32.801,24.426v68.393h-67.223V268.296l46.453-23.227
      c2.541-1.27,4.146-3.868,4.146-6.708v-77.47l49.424-61.323l49.424,61.323v77.47c0,2.841,1.605,5.438,4.146,6.708l46.453,23.227
      V413.232z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:3/5 md:w-3/5 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">DELIGHT YOURSELF IN LORD</h2>
                                    <p class="text-xs text-gray-600 leading-loose py-3">Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's ...</p>
                                    <a href="#" class="custom-txt underline text-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/2 p-3" data-aos="fade-right" data-aos-duration="3000">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-col lg:flex-row md:flex-row ministry-section">
                                <div class="w-full lg:w-2/5 md:w-2/5 relative">
                                    <img src="{{ url('church-template/template3/img3.jpg') }}" class="w-full h-40"
                                        alt="Ministry">
                                    <div class="ministry-img w-full h-40 absolute p-3">
                                        <div class="border border-white h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 fill-current text-white mx-auto" version="1.1"
                                                id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 428.232 428.232"
                                                style="enable-background:new 0 0 428.232 428.232;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M214.116,149.691c-18.086,0-32.801,14.713-32.801,32.799c0,18.085,14.715,32.799,32.801,32.799
      c18.086,0,32.799-14.713,32.799-32.799C246.915,164.405,232.202,149.691,214.116,149.691z M214.116,200.29
      c-9.815,0-17.801-7.984-17.801-17.799c0-9.815,7.986-17.799,17.801-17.799c9.814,0,17.799,7.984,17.799,17.799
      C231.915,192.305,223.93,200.29,214.116,200.29z" />
                                                        <path d="M407.52,413.232h-26.281v-90.572c0-2.914-1.689-5.566-4.332-6.797l-47.768-22.268v-29.936c0-2.84-1.605-5.438-4.146-6.708
      l-46.453-23.225v-75.481c0-1.712-0.586-3.373-1.66-4.707l-55.264-68.569V39.246h15.055c4.143,0,7.5-3.358,7.5-7.5
      c0-4.142-3.357-7.5-7.5-7.5h-15.055V7.5c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v16.746h-15.057
      c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h15.057v45.724l-55.264,68.569c-1.074,1.333-1.66,2.994-1.66,4.707v75.481
      l-46.453,23.225c-2.541,1.27-4.146,3.868-4.146,6.708v29.936l-47.771,22.268c-2.641,1.23-4.33,3.883-4.33,6.797v90.572H20.711
      c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5H407.52c4.143,0,7.5-3.357,7.5-7.5S411.663,413.232,407.52,413.232z
       M366.239,413.232h-37.1V310.146l37.1,17.293V413.232z M99.092,413.232H61.991v-85.793l37.102-17.293V413.232z M196.315,413.232
      v-68.393c0-4.449,7.613-9.426,17.801-9.426c10.187,0,17.799,4.977,17.799,9.426v68.393H196.315z M314.139,413.232h-67.225v-68.393
      c0-13.695-14.406-24.426-32.799-24.426c-18.393,0-32.801,10.73-32.801,24.426v68.393h-67.223V268.296l46.453-23.227
      c2.541-1.27,4.146-3.868,4.146-6.708v-77.47l49.424-61.323l49.424,61.323v77.47c0,2.841,1.605,5.438,4.146,6.708l46.453,23.227
      V413.232z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:3/5 md:w-3/5 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">DELIGHT YOURSELF IN LORD</h2>
                                    <p class="text-xs text-gray-600 leading-loose py-3">Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's ...</p>
                                    <a href="#" class="custom-txt underline text-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <div class="w-full lg:w-1/2 p-3" data-aos="fade-left" data-aos-duration="3000">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-col lg:flex-row md:flex-row  ministry-section">
                                <div class="w-full lg:w-2/5 md:w-2/5 relative">
                                    <img src="{{ url('church-template/template3/img4.jpg') }}" class="w-full h-40"
                                        alt="Ministry">
                                    <div class="ministry-img w-full h-40 absolute p-3">
                                        <div class="border border-white h-full flex items-center justify-center">
                                            <svg class="w-10 h-10 fill-current text-white mx-auto" version="1.1"
                                                id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 428.232 428.232"
                                                style="enable-background:new 0 0 428.232 428.232;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M214.116,149.691c-18.086,0-32.801,14.713-32.801,32.799c0,18.085,14.715,32.799,32.801,32.799
      c18.086,0,32.799-14.713,32.799-32.799C246.915,164.405,232.202,149.691,214.116,149.691z M214.116,200.29
      c-9.815,0-17.801-7.984-17.801-17.799c0-9.815,7.986-17.799,17.801-17.799c9.814,0,17.799,7.984,17.799,17.799
      C231.915,192.305,223.93,200.29,214.116,200.29z" />
                                                        <path d="M407.52,413.232h-26.281v-90.572c0-2.914-1.689-5.566-4.332-6.797l-47.768-22.268v-29.936c0-2.84-1.605-5.438-4.146-6.708
      l-46.453-23.225v-75.481c0-1.712-0.586-3.373-1.66-4.707l-55.264-68.569V39.246h15.055c4.143,0,7.5-3.358,7.5-7.5
      c0-4.142-3.357-7.5-7.5-7.5h-15.055V7.5c0-4.142-3.357-7.5-7.5-7.5c-4.143,0-7.5,3.358-7.5,7.5v16.746h-15.057
      c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h15.057v45.724l-55.264,68.569c-1.074,1.333-1.66,2.994-1.66,4.707v75.481
      l-46.453,23.225c-2.541,1.27-4.146,3.868-4.146,6.708v29.936l-47.771,22.268c-2.641,1.23-4.33,3.883-4.33,6.797v90.572H20.711
      c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5H407.52c4.143,0,7.5-3.357,7.5-7.5S411.663,413.232,407.52,413.232z
       M366.239,413.232h-37.1V310.146l37.1,17.293V413.232z M99.092,413.232H61.991v-85.793l37.102-17.293V413.232z M196.315,413.232
      v-68.393c0-4.449,7.613-9.426,17.801-9.426c10.187,0,17.799,4.977,17.799,9.426v68.393H196.315z M314.139,413.232h-67.225v-68.393
      c0-13.695-14.406-24.426-32.799-24.426c-18.393,0-32.801,10.73-32.801,24.426v68.393h-67.223V268.296l46.453-23.227
      c2.541-1.27,4.146-3.868,4.146-6.708v-77.47l49.424-61.323l49.424,61.323v77.47c0,2.841,1.605,5.438,4.146,6.708l46.453,23.227
      V413.232z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:3/5 md:w-3/5 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">DELIGHT YOURSELF IN LORD</h2>
                                    <p class="text-xs text-gray-600 leading-loose py-3">Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's ...</p>
                                    <a href="#" class="custom-txt underline text-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                </div>
            </div>
        </div>
        <!-- our ministry end -->
        <!-- donation start -->
        <div class="my-8 custom-bg py-16">
            <div class="container mx-auto px-4 lg:px-0 md:px-0">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full lg:w-1/2">
                        <h1 class="text-2xl lg:text-4xl italic font-medium text-white">Help human trafficking survivors
                        </h1>
                        <p class="text-white text-sm leading-loose py-3">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                        <div class="bg-white w-full lg:w-2/5 flex items-center my-4"
                            style="background-color: #c3f4fb7d;">
                            <div class="w-1/5 p-2 bg-white">
                                <svg class="w-5 h-5 fill-current custom-txt mx-auto" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M503.65,248.93c-7.445-11.263-18.838-18.888-32.094-21.483c-13.247-2.595-26.673,0.17-37.816,7.796l-73.397,50.201
      c3.357,3.717,6.152,7.956,8.247,12.565c2.174,4.77,3.607,9.95,4.138,15.381c0.16,1.593,0.24,3.217,0.24,4.85
      c0,27.024-21.984,49.008-49.008,49.008H215.853v-30.06h19.89l88.217,30.06l-88.215-30.06h88.215c0.982,0,1.934-0.07,2.876-0.22
      h0.01c8.798-1.343,15.611-8.758,16.042-17.826c0.01-0.301,0.02-0.601,0.02-0.902c0-0.862-0.06-1.713-0.181-2.545
      c-0.24-1.864-0.762-3.637-1.513-5.28c-1.393-3.056-3.567-5.681-6.273-7.605c-3.096-2.215-6.884-3.517-10.982-3.517h-80.982
      l-3.908-6.834c-1.513-2.034-16.443-20.351-60.291-20.351c-45.02,0-62.054,17.365-63.708,19.179l-0.551,0.741l-0.361,0.271
      l-2.535,2.595l0.002,0.001l70.29,132.293h154.85l154.22-110.021C512.999,301.466,518.56,271.485,503.65,248.93z M340.853,316.156
      l0.381,0.561l-0.521,0.251C340.763,316.697,340.813,316.427,340.853,316.156z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="72.756,285.805 0,323.79 88.387,493.091 162.366,454.483     " />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M377.597,18.91H162.115c-20.1,0-36.453,16.353-36.453,36.453v26.443H414.05V55.363
      C414.05,35.263,397.697,18.91,377.597,18.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M125.662,111.865v71.363c0,20.11,16.353,36.463,36.453,36.463h215.482c20.1,0,36.453-16.353,36.453-36.463v-71.363
      H125.662z M217.806,179h-47.094v-30.06h47.094V179z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <a href="#" class="text-sm text-white w-4/5 text-center font-medium">Donate & Change
                                Life</a>
                        </div>
                    </div>
                    <div class="w-full lg:w-2/5" data-aos="fade-down" data-aos-duration="3000">
                        <img src="{{ url('church-template/template3/church.png') }}" class="mx-auto"
                            alt="Donate & Change Life">
                    </div>
                </div>
            </div>
        </div>
        <!-- donation end -->
        <!-- latest sermons start -->
        <div class="my-16 py-6">
            <div class="container mx-auto">
                <h1 class="text-3xl font-medium text-center">latest Sermons</h1>
                <p class="text-gray-600 py-2 text-center text-sm">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <div class="flex flex-wrap my-10">
                    <!-- start -->
                    <div class="w-full lg:w-1/2 md:w-1/2 p-3">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-wrap">
                                <div class="w-2/5 lg:w-1/3 flex items-center justify-center mt-3 lg:mt-0">
                                    <img src="{{ url('church-template/template3/img5.png') }}"
                                        class="w-24 h-24 mx-auto rounded-full" data-aos="flip-left"
                                        data-aos-duration="3000" alt="Perseverance of the Saints">
                                </div>
                                <div class="w-full lg:2/3 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">Perseverance of the Saints</h2>
                                    <ul class="list-reset flex items-center py-3">
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" id="Layer_4"
                                                enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m21 3h-1v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-10v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-1c-1.654 0-3 1.346-3 3v15c0 1.654 1.346 3 3 3h18c1.654 0 3-1.346 3-3v-15c0-1.654-1.346-3-3-3zm1 18c0 .551-.449 1-1 1h-18c-.551 0-1-.449-1-1v-10.96h20z" />
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Nov 01,2020</span>
                                        </li>
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 416 416" style="enable-background:new 0 0 416 416;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="208" cy="96" r="96" />
                                                            <path
                                                                d="M394.4,291.872c-108-90.656-264.832-90.656-372.832,0C18.048,294.848,16,299.2,16,303.84c0,15.456,0,52.832,0,80.192
        C16,401.696,30.336,416,48,416h320c17.664,0,32-14.304,32-31.968v-73.92C400,299.2,397.952,294.848,394.4,291.872z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Vincent John</span>
                                        </li>
                                    </ul>
                                    <ul class="list-reset flex items-center py-2  sermon-icons">
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" id="Capa_1"
                                                    enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                        <path
                                                            d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M469.777,122.01c-5.031-3.111-11.315-3.395-16.606-0.751l-111.838,55.927v-40.653c0-28.277-22.923-51.2-51.2-51.2H51.2
      c-28.277,0-51.2,22.923-51.2,51.2v204.8c0,28.277,22.923,51.2,51.2,51.2h238.933c28.277,0,51.2-22.923,51.2-51.2v-40.653
      l111.838,56.013c8.432,4.213,18.682,0.794,22.896-7.638c1.198-2.397,1.815-5.043,1.8-7.722v-204.8
      C477.87,130.617,474.809,125.122,469.777,122.01z M307.2,341.333c0,9.426-7.641,17.067-17.067,17.067H51.2
      c-9.426,0-17.067-7.641-17.067-17.067v-204.8c0-9.426,7.641-17.067,17.067-17.067h238.933c9.426,0,17.067,7.641,17.067,17.067
      V341.333z M443.733,313.72l-102.4-51.2v-47.172l102.4-51.2V313.72z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,170.667c-37.703,0-68.267,30.564-68.267,68.267s30.564,68.267,68.267,68.267s68.267-30.564,68.267-68.267
      S208.369,170.667,170.667,170.667z M170.667,273.067c-18.851,0-34.133-15.282-34.133-34.133c0-18.851,15.282-34.133,34.133-34.133
      s34.133,15.282,34.133,34.133C204.8,257.785,189.518,273.067,170.667,273.067z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" height="512pt"
                                                    viewBox="0 -36 512 512" width="512pt"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m194 122c0 16.566406-13.429688 30-30 30-16.566406 0-30-13.433594-30-30 0-16.570312 13.433594-30 30-30 16.570312 0 30 13.429688 30 30zm147.589844 51.65625-106.09375 106.09375 34.234375 34.234375 33.84375-33.84375c11.332031-11.332031 26.398437-17.574219 42.425781-17.574219s31.09375 6.242188 42.425781 17.574219l45.71875 45.71875c7.808594 7.808594 7.808594 20.472656 0 28.28125-7.8125 7.8125-20.476562 7.8125-28.285156 0l-45.714844-45.714844c-3.78125-3.777343-8.800781-5.859375-14.144531-5.859375-5.339844 0-10.363281 2.082032-14.140625 5.859375l-47.984375 47.984375c-3.90625 3.90625-9.023438 5.859375-14.144531 5.859375-5.117188 0-10.234375-1.953125-14.140625-5.859375l-98.984375-98.984375c-3.777344-3.777343-8.800781-5.859375-14.140625-5.859375-5.34375 0-10.367188 2.082032-14.144532 5.859375l-88.320312 88.320313v14.253906c0 22.054688 17.945312 40 40 40h352c22.054688 0 40-17.945312 40-40 0-11.046875 8.953125-20 20-20s20 8.953125 20 20c0 44.113281-35.886719 80-80 80h-352c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80v187.5c0 8.089844-4.871094 15.382812-12.347656 18.476562-7.472656 3.097657-16.074219 1.386719-21.792969-4.332031l-107.988281-107.988281c-3.777344-3.777344-8.796875-5.855469-14.140625-5.855469-5.339844 0-10.363281 2.078125-14.140625 5.855469zm-28.285156-28.285156c11.332031-11.332032 26.398437-17.570313 42.425781-17.570313 16.027343 0 31.09375 6.238281 42.425781 17.570313l73.84375 73.84375v-139.214844c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v209.175781l60.035156-60.035156c11.332032-11.332031 26.398438-17.574219 42.425782-17.574219 16.027343 0 31.09375 6.242188 42.425781 17.574219l22.324219 22.324219zm0 0" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M439.301,0h-283.34c-17.131,0-31.068,13.937-31.068,31.068V397.67c0,17.131,13.937,31.068,31.068,31.068h283.34
      c17.131,0,31.068-13.937,31.068-31.068V31.068C470.369,13.937,456.432,0,439.301,0z M433.087,391.456H162.175V37.282h270.913
      V391.456z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M329.942,118.68H265.32c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h64.628
      c10.296,0,18.635-8.345,18.635-18.641C348.583,127.024,340.238,118.68,329.942,118.68z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,201.942H233.01c-10.296,0-18.641,8.345-18.641,18.641s8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641S378.762,201.942,368.466,201.942z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,278.99H233.01c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641C387.107,287.335,378.762,278.99,368.466,278.99z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M356.039,410.097v64.621H78.913V114.33h64.621V77.049H72.699c-17.131,0-31.068,13.937-31.068,31.068v372.815
      c0,17.131,13.937,31.068,31.068,31.068h289.553c17.131,0,31.068-13.937,31.068-31.068v-70.835H356.039z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/2 md:w-1/2 p-3">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-wrap">
                                <div class="w-2/5 lg:w-1/3 flex items-center justify-center mt-3 lg:mt-0">
                                    <img src="{{ url('church-template/template3/img6.jpg') }}"
                                        class="w-24 h-24 mx-auto rounded-full" data-aos="flip-left"
                                        data-aos-duration="3000" alt="Perseverance of the Saints">
                                </div>
                                <div class="w-full lg:2/3 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">Perseverance of the Saints</h2>
                                    <ul class="list-reset flex items-center py-3">
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" id="Layer_4"
                                                enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m21 3h-1v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-10v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-1c-1.654 0-3 1.346-3 3v15c0 1.654 1.346 3 3 3h18c1.654 0 3-1.346 3-3v-15c0-1.654-1.346-3-3-3zm1 18c0 .551-.449 1-1 1h-18c-.551 0-1-.449-1-1v-10.96h20z" />
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Nov 03,2020</span>
                                        </li>
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 416 416" style="enable-background:new 0 0 416 416;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="208" cy="96" r="96" />
                                                            <path
                                                                d="M394.4,291.872c-108-90.656-264.832-90.656-372.832,0C18.048,294.848,16,299.2,16,303.84c0,15.456,0,52.832,0,80.192
        C16,401.696,30.336,416,48,416h320c17.664,0,32-14.304,32-31.968v-73.92C400,299.2,397.952,294.848,394.4,291.872z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Vincent John</span>
                                        </li>
                                    </ul>
                                    <ul class="list-reset flex items-center py-2  sermon-icons">
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" id="Capa_1"
                                                    enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                        <path
                                                            d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M469.777,122.01c-5.031-3.111-11.315-3.395-16.606-0.751l-111.838,55.927v-40.653c0-28.277-22.923-51.2-51.2-51.2H51.2
      c-28.277,0-51.2,22.923-51.2,51.2v204.8c0,28.277,22.923,51.2,51.2,51.2h238.933c28.277,0,51.2-22.923,51.2-51.2v-40.653
      l111.838,56.013c8.432,4.213,18.682,0.794,22.896-7.638c1.198-2.397,1.815-5.043,1.8-7.722v-204.8
      C477.87,130.617,474.809,125.122,469.777,122.01z M307.2,341.333c0,9.426-7.641,17.067-17.067,17.067H51.2
      c-9.426,0-17.067-7.641-17.067-17.067v-204.8c0-9.426,7.641-17.067,17.067-17.067h238.933c9.426,0,17.067,7.641,17.067,17.067
      V341.333z M443.733,313.72l-102.4-51.2v-47.172l102.4-51.2V313.72z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,170.667c-37.703,0-68.267,30.564-68.267,68.267s30.564,68.267,68.267,68.267s68.267-30.564,68.267-68.267
      S208.369,170.667,170.667,170.667z M170.667,273.067c-18.851,0-34.133-15.282-34.133-34.133c0-18.851,15.282-34.133,34.133-34.133
      s34.133,15.282,34.133,34.133C204.8,257.785,189.518,273.067,170.667,273.067z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" height="512pt"
                                                    viewBox="0 -36 512 512" width="512pt"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m194 122c0 16.566406-13.429688 30-30 30-16.566406 0-30-13.433594-30-30 0-16.570312 13.433594-30 30-30 16.570312 0 30 13.429688 30 30zm147.589844 51.65625-106.09375 106.09375 34.234375 34.234375 33.84375-33.84375c11.332031-11.332031 26.398437-17.574219 42.425781-17.574219s31.09375 6.242188 42.425781 17.574219l45.71875 45.71875c7.808594 7.808594 7.808594 20.472656 0 28.28125-7.8125 7.8125-20.476562 7.8125-28.285156 0l-45.714844-45.714844c-3.78125-3.777343-8.800781-5.859375-14.144531-5.859375-5.339844 0-10.363281 2.082032-14.140625 5.859375l-47.984375 47.984375c-3.90625 3.90625-9.023438 5.859375-14.144531 5.859375-5.117188 0-10.234375-1.953125-14.140625-5.859375l-98.984375-98.984375c-3.777344-3.777343-8.800781-5.859375-14.140625-5.859375-5.34375 0-10.367188 2.082032-14.144532 5.859375l-88.320312 88.320313v14.253906c0 22.054688 17.945312 40 40 40h352c22.054688 0 40-17.945312 40-40 0-11.046875 8.953125-20 20-20s20 8.953125 20 20c0 44.113281-35.886719 80-80 80h-352c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80v187.5c0 8.089844-4.871094 15.382812-12.347656 18.476562-7.472656 3.097657-16.074219 1.386719-21.792969-4.332031l-107.988281-107.988281c-3.777344-3.777344-8.796875-5.855469-14.140625-5.855469-5.339844 0-10.363281 2.078125-14.140625 5.855469zm-28.285156-28.285156c11.332031-11.332032 26.398437-17.570313 42.425781-17.570313 16.027343 0 31.09375 6.238281 42.425781 17.570313l73.84375 73.84375v-139.214844c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v209.175781l60.035156-60.035156c11.332032-11.332031 26.398438-17.574219 42.425782-17.574219 16.027343 0 31.09375 6.242188 42.425781 17.574219l22.324219 22.324219zm0 0" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M439.301,0h-283.34c-17.131,0-31.068,13.937-31.068,31.068V397.67c0,17.131,13.937,31.068,31.068,31.068h283.34
      c17.131,0,31.068-13.937,31.068-31.068V31.068C470.369,13.937,456.432,0,439.301,0z M433.087,391.456H162.175V37.282h270.913
      V391.456z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M329.942,118.68H265.32c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h64.628
      c10.296,0,18.635-8.345,18.635-18.641C348.583,127.024,340.238,118.68,329.942,118.68z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,201.942H233.01c-10.296,0-18.641,8.345-18.641,18.641s8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641S378.762,201.942,368.466,201.942z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,278.99H233.01c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641C387.107,287.335,378.762,278.99,368.466,278.99z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M356.039,410.097v64.621H78.913V114.33h64.621V77.049H72.699c-17.131,0-31.068,13.937-31.068,31.068v372.815
      c0,17.131,13.937,31.068,31.068,31.068h289.553c17.131,0,31.068-13.937,31.068-31.068v-70.835H356.039z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/2 md:w-1/2 p-3">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-wrap">
                                <div class="w-2/5 lg:w-1/3 flex items-center justify-center mt-3 lg:mt-0">
                                    <img src="{{ url('church-template/template3/img7.png') }}"
                                        class="w-24 h-24 mx-auto rounded-full" data-aos="flip-left"
                                        data-aos-duration="3000" alt="Perseverance of the Saints">
                                </div>
                                <div class="w-full lg:2/3 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">Perseverance of the Saints</h2>
                                    <ul class="list-reset flex items-center py-3">
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" id="Layer_4"
                                                enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m21 3h-1v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-10v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-1c-1.654 0-3 1.346-3 3v15c0 1.654 1.346 3 3 3h18c1.654 0 3-1.346 3-3v-15c0-1.654-1.346-3-3-3zm1 18c0 .551-.449 1-1 1h-18c-.551 0-1-.449-1-1v-10.96h20z" />
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Nov 05,2020</span>
                                        </li>
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 416 416" style="enable-background:new 0 0 416 416;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="208" cy="96" r="96" />
                                                            <path
                                                                d="M394.4,291.872c-108-90.656-264.832-90.656-372.832,0C18.048,294.848,16,299.2,16,303.84c0,15.456,0,52.832,0,80.192
        C16,401.696,30.336,416,48,416h320c17.664,0,32-14.304,32-31.968v-73.92C400,299.2,397.952,294.848,394.4,291.872z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Vincent John</span>
                                        </li>
                                    </ul>
                                    <ul class="list-reset flex items-center py-2  sermon-icons">
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" id="Capa_1"
                                                    enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                        <path
                                                            d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M469.777,122.01c-5.031-3.111-11.315-3.395-16.606-0.751l-111.838,55.927v-40.653c0-28.277-22.923-51.2-51.2-51.2H51.2
      c-28.277,0-51.2,22.923-51.2,51.2v204.8c0,28.277,22.923,51.2,51.2,51.2h238.933c28.277,0,51.2-22.923,51.2-51.2v-40.653
      l111.838,56.013c8.432,4.213,18.682,0.794,22.896-7.638c1.198-2.397,1.815-5.043,1.8-7.722v-204.8
      C477.87,130.617,474.809,125.122,469.777,122.01z M307.2,341.333c0,9.426-7.641,17.067-17.067,17.067H51.2
      c-9.426,0-17.067-7.641-17.067-17.067v-204.8c0-9.426,7.641-17.067,17.067-17.067h238.933c9.426,0,17.067,7.641,17.067,17.067
      V341.333z M443.733,313.72l-102.4-51.2v-47.172l102.4-51.2V313.72z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,170.667c-37.703,0-68.267,30.564-68.267,68.267s30.564,68.267,68.267,68.267s68.267-30.564,68.267-68.267
      S208.369,170.667,170.667,170.667z M170.667,273.067c-18.851,0-34.133-15.282-34.133-34.133c0-18.851,15.282-34.133,34.133-34.133
      s34.133,15.282,34.133,34.133C204.8,257.785,189.518,273.067,170.667,273.067z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" height="512pt"
                                                    viewBox="0 -36 512 512" width="512pt"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m194 122c0 16.566406-13.429688 30-30 30-16.566406 0-30-13.433594-30-30 0-16.570312 13.433594-30 30-30 16.570312 0 30 13.429688 30 30zm147.589844 51.65625-106.09375 106.09375 34.234375 34.234375 33.84375-33.84375c11.332031-11.332031 26.398437-17.574219 42.425781-17.574219s31.09375 6.242188 42.425781 17.574219l45.71875 45.71875c7.808594 7.808594 7.808594 20.472656 0 28.28125-7.8125 7.8125-20.476562 7.8125-28.285156 0l-45.714844-45.714844c-3.78125-3.777343-8.800781-5.859375-14.144531-5.859375-5.339844 0-10.363281 2.082032-14.140625 5.859375l-47.984375 47.984375c-3.90625 3.90625-9.023438 5.859375-14.144531 5.859375-5.117188 0-10.234375-1.953125-14.140625-5.859375l-98.984375-98.984375c-3.777344-3.777343-8.800781-5.859375-14.140625-5.859375-5.34375 0-10.367188 2.082032-14.144532 5.859375l-88.320312 88.320313v14.253906c0 22.054688 17.945312 40 40 40h352c22.054688 0 40-17.945312 40-40 0-11.046875 8.953125-20 20-20s20 8.953125 20 20c0 44.113281-35.886719 80-80 80h-352c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80v187.5c0 8.089844-4.871094 15.382812-12.347656 18.476562-7.472656 3.097657-16.074219 1.386719-21.792969-4.332031l-107.988281-107.988281c-3.777344-3.777344-8.796875-5.855469-14.140625-5.855469-5.339844 0-10.363281 2.078125-14.140625 5.855469zm-28.285156-28.285156c11.332031-11.332032 26.398437-17.570313 42.425781-17.570313 16.027343 0 31.09375 6.238281 42.425781 17.570313l73.84375 73.84375v-139.214844c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v209.175781l60.035156-60.035156c11.332032-11.332031 26.398438-17.574219 42.425782-17.574219 16.027343 0 31.09375 6.242188 42.425781 17.574219l22.324219 22.324219zm0 0" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M439.301,0h-283.34c-17.131,0-31.068,13.937-31.068,31.068V397.67c0,17.131,13.937,31.068,31.068,31.068h283.34
      c17.131,0,31.068-13.937,31.068-31.068V31.068C470.369,13.937,456.432,0,439.301,0z M433.087,391.456H162.175V37.282h270.913
      V391.456z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M329.942,118.68H265.32c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h64.628
      c10.296,0,18.635-8.345,18.635-18.641C348.583,127.024,340.238,118.68,329.942,118.68z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,201.942H233.01c-10.296,0-18.641,8.345-18.641,18.641s8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641S378.762,201.942,368.466,201.942z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,278.99H233.01c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641C387.107,287.335,378.762,278.99,368.466,278.99z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M356.039,410.097v64.621H78.913V114.33h64.621V77.049H72.699c-17.131,0-31.068,13.937-31.068,31.068v372.815
      c0,17.131,13.937,31.068,31.068,31.068h289.553c17.131,0,31.068-13.937,31.068-31.068v-70.835H356.039z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/2 md:w-1/2 p-3">
                        <!-- ** -->
                        <div class="border border-gray-200">
                            <div class="flex flex-wrap">
                                <div class="w-2/5 lg:w-1/3 flex items-center justify-center mt-3 lg:mt-0">
                                    <img src="{{ url('church-template/template3/img8.jpg') }}"
                                        class="w-24 h-24 mx-auto rounded-full" data-aos="flip-left"
                                        data-aos-duration="3000" alt="Perseverance of the Saints">
                                </div>
                                <div class="w-full lg:2/3 py-3 px-5">
                                    <h2 class="text-lg font-medium py-1">Perseverance of the Saints</h2>
                                    <ul class="list-reset flex items-center py-3">
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" id="Layer_4"
                                                enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24"
                                                width="512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m21 3h-1v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-10v-2c0-.552-.448-1-1-1h-1c-.552 0-1 .448-1 1v2h-1c-1.654 0-3 1.346-3 3v15c0 1.654 1.346 3 3 3h18c1.654 0 3-1.346 3-3v-15c0-1.654-1.346-3-3-3zm1 18c0 .551-.449 1-1 1h-18c-.551 0-1-.449-1-1v-10.96h20z" />
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Nov 06,2020</span>
                                        </li>
                                        <li class="mr-3 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-gray-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 416 416" style="enable-background:new 0 0 416 416;"
                                                xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle cx="208" cy="96" r="96" />
                                                            <path
                                                                d="M394.4,291.872c-108-90.656-264.832-90.656-372.832,0C18.048,294.848,16,299.2,16,303.84c0,15.456,0,52.832,0,80.192
        C16,401.696,30.336,416,48,416h320c17.664,0,32-14.304,32-31.968v-73.92C400,299.2,397.952,294.848,394.4,291.872z" />
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="text-gray-600 mx-3 text-sm">Vincent John</span>
                                        </li>
                                    </ul>
                                    <ul class="list-reset flex items-center py-2 sermon-icons">
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" id="Capa_1"
                                                    enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path
                                                            d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                        <path
                                                            d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 477.867 477.867"
                                                    style="enable-background:new 0 0 477.867 477.867;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M469.777,122.01c-5.031-3.111-11.315-3.395-16.606-0.751l-111.838,55.927v-40.653c0-28.277-22.923-51.2-51.2-51.2H51.2
      c-28.277,0-51.2,22.923-51.2,51.2v204.8c0,28.277,22.923,51.2,51.2,51.2h238.933c28.277,0,51.2-22.923,51.2-51.2v-40.653
      l111.838,56.013c8.432,4.213,18.682,0.794,22.896-7.638c1.198-2.397,1.815-5.043,1.8-7.722v-204.8
      C477.87,130.617,474.809,125.122,469.777,122.01z M307.2,341.333c0,9.426-7.641,17.067-17.067,17.067H51.2
      c-9.426,0-17.067-7.641-17.067-17.067v-204.8c0-9.426,7.641-17.067,17.067-17.067h238.933c9.426,0,17.067,7.641,17.067,17.067
      V341.333z M443.733,313.72l-102.4-51.2v-47.172l102.4-51.2V313.72z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M170.667,170.667c-37.703,0-68.267,30.564-68.267,68.267s30.564,68.267,68.267,68.267s68.267-30.564,68.267-68.267
      S208.369,170.667,170.667,170.667z M170.667,273.067c-18.851,0-34.133-15.282-34.133-34.133c0-18.851,15.282-34.133,34.133-34.133
      s34.133,15.282,34.133,34.133C204.8,257.785,189.518,273.067,170.667,273.067z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" height="512pt"
                                                    viewBox="0 -36 512 512" width="512pt"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m194 122c0 16.566406-13.429688 30-30 30-16.566406 0-30-13.433594-30-30 0-16.570312 13.433594-30 30-30 16.570312 0 30 13.429688 30 30zm147.589844 51.65625-106.09375 106.09375 34.234375 34.234375 33.84375-33.84375c11.332031-11.332031 26.398437-17.574219 42.425781-17.574219s31.09375 6.242188 42.425781 17.574219l45.71875 45.71875c7.808594 7.808594 7.808594 20.472656 0 28.28125-7.8125 7.8125-20.476562 7.8125-28.285156 0l-45.714844-45.714844c-3.78125-3.777343-8.800781-5.859375-14.144531-5.859375-5.339844 0-10.363281 2.082032-14.140625 5.859375l-47.984375 47.984375c-3.90625 3.90625-9.023438 5.859375-14.144531 5.859375-5.117188 0-10.234375-1.953125-14.140625-5.859375l-98.984375-98.984375c-3.777344-3.777343-8.800781-5.859375-14.140625-5.859375-5.34375 0-10.367188 2.082032-14.144532 5.859375l-88.320312 88.320313v14.253906c0 22.054688 17.945312 40 40 40h352c22.054688 0 40-17.945312 40-40 0-11.046875 8.953125-20 20-20s20 8.953125 20 20c0 44.113281-35.886719 80-80 80h-352c-44.113281 0-80-35.886719-80-80v-280c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80v187.5c0 8.089844-4.871094 15.382812-12.347656 18.476562-7.472656 3.097657-16.074219 1.386719-21.792969-4.332031l-107.988281-107.988281c-3.777344-3.777344-8.796875-5.855469-14.140625-5.855469-5.339844 0-10.363281 2.078125-14.140625 5.855469zm-28.285156-28.285156c11.332031-11.332032 26.398437-17.570313 42.425781-17.570313 16.027343 0 31.09375 6.238281 42.425781 17.570313l73.84375 73.84375v-139.214844c0-22.054688-17.945312-40-40-40h-352c-22.054688 0-40 17.945312-40 40v209.175781l60.035156-60.035156c11.332032-11.332031 26.398438-17.574219 42.425782-17.574219 16.027343 0 31.09375 6.242188 42.425781 17.574219l22.324219 22.324219zm0 0" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="mr-3">
                                            <a href="#">
                                                <svg class="w-5 h-5 fill-current text-gray-500" version="1.1"
                                                    id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M439.301,0h-283.34c-17.131,0-31.068,13.937-31.068,31.068V397.67c0,17.131,13.937,31.068,31.068,31.068h283.34
      c17.131,0,31.068-13.937,31.068-31.068V31.068C470.369,13.937,456.432,0,439.301,0z M433.087,391.456H162.175V37.282h270.913
      V391.456z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M329.942,118.68H265.32c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h64.628
      c10.296,0,18.635-8.345,18.635-18.641C348.583,127.024,340.238,118.68,329.942,118.68z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,201.942H233.01c-10.296,0-18.641,8.345-18.641,18.641s8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641S378.762,201.942,368.466,201.942z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M368.466,278.99H233.01c-10.296,0-18.641,8.345-18.641,18.641c0,10.296,8.345,18.641,18.641,18.641h135.456
      c10.296,0,18.641-8.345,18.641-18.641C387.107,287.335,378.762,278.99,368.466,278.99z" />
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M356.039,410.097v64.621H78.913V114.33h64.621V77.049H72.699c-17.131,0-31.068,13.937-31.068,31.068v372.815
      c0,17.131,13.937,31.068,31.068,31.068h289.553c17.131,0,31.068-13.937,31.068-31.068v-70.835H356.039z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ** -->
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
        <!-- latest sermons end -->
        <!-- subscribe start -->
        <div class="py-5 custom-bg email-subscribe">
            <div class="container mx-auto px-3 lg:px-0 md:px-0">
                <div class="flex flex-wrap items-center">
                    <div class="w-full lg:w-1/3 md:w-1/3">
                        <h1 class="text-base text-white mb-0 font-medium">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry.</h1>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 text-white">
                        <div class="w-full lg:w-9/12 mx-auto border-l border-r px-8 my-2 lg:my-0">
                            <p class="text-base font-semibold">Email</p>
                            <p class="">yourdomain@gmail.com</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 px-3 lg:px-0 md:px-0">
                        <div class="w-full lg:w-2/5 flex items-center my-4 py-2 px-6"
                            style="background-color: #c3f4fb7d;">
                            <svg class="w-5 h-5 fill-current text-white" id="Capa_1"
                                enable-background="new 0 0 465.882 465.882" height="512" viewBox="0 0 465.882 465.882"
                                width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m465.882 0-465.882 262.059 148.887 55.143 229.643-215.29-174.674 235.65.142.053-.174-.053v128.321l83.495-97.41 105.77 39.175z" />
                            </svg>
                            <a href="#" class="text-sm text-white mx-3 text-center font-medium">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe end -->
        <!-- Our Pastors start -->
        <div class="my-16 py-5">
            <div class="container mx-auto">
                <h1 class="text-3xl font-medium text-center">Our Pastors</h1>
                <p class="text-gray-600 py-2 text-center text-sm">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.</p>
                <div class="flex flex-wrap my-16">
                    <!-- start -->
                    <div class="w-full lg:w-1/4 md:w-1/3 p-3" data-aos="fade-up" data-aos-duration="3000">
                        <div class="border">
                            <img src="{{ url('church-template/template3/img5.png') }}" class="h-48 w-full"
                                alt="Pastors">
                            <div class="p-3">
                                <h2 class="text-center custom-txt font-thin pt-2 text-lg italic">James Curtis</h2>
                                <p class="text-center text-gray-500 py-1 text-xs">Pastor</p>
                                <p class="text-xs text-gray-500 leading-loose py-2 text-justify px-2">Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/4 md:w-1/3 p-3" data-aos="fade-down" data-aos-duration="3000">
                        <div class="border">
                            <img src="{{ url('church-template/template3/img6.jpg') }}" class="h-48 w-full"
                                alt="Pastors">
                            <div class="p-3">
                                <h2 class="text-center custom-txt font-thin pt-2 text-lg italic">Mason Tilley</h2>
                                <p class="text-center text-gray-500 py-1 text-xs">Pastor</p>
                                <p class="text-xs text-gray-500 leading-loose py-2 text-justify px-2">Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/4 md:w-1/3 p-3" data-aos="fade-up" data-aos-duration="3000">
                        <div class="border">
                            <img src="{{ url('church-template/template3/img7.png') }}" class="h-48 w-full"
                                alt="Pastors">
                            <div class="p-3">
                                <h2 class="text-center custom-txt font-thin pt-2 text-lg italic">Dunkan Webb</h2>
                                <p class="text-center text-gray-500 py-1 text-xs">Pastor</p>
                                <p class="text-xs text-gray-500 leading-loose py-2 text-justify px-2">Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <!-- start -->
                    <div class="w-full lg:w-1/4 md:w-1/3 p-3" data-aos="fade-down" data-aos-duration="3000">
                        <div class="border">
                            <img src="{{ url('church-template/template3/img8.jpg') }}" class="h-48 w-full"
                                alt="Pastors">
                            <div class="p-3">
                                <h2 class="text-center custom-txt font-thin pt-2 text-lg italic">Vincent</h2>
                                <p class="text-center text-gray-500 py-1 text-xs">Pastor</p>
                                <p class="text-xs text-gray-500 leading-loose py-2 text-justify px-2">Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                    industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
        <!-- Our Pastors end -->
        <!-- footer start -->
        <div class="bg-gray-100 py-3 text-sm">
            <div class="container mx-auto px-3 lg:px-0 md:px-0">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/3 py-4">
                        <p class="text-lg font-semibold">About the Church</p>
                        <p class="text-sm  py-3 leading-loose">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s. </p>
                    </div>
                    <div class="w-1/2 lg:w-1/3 py-4 lg:px-16">
                        <p class="text-lg font-semibold">Quick Links</p>
                        <ul class="list-reset leading-loose py-3">
                            <li class="py-1"><a href="#" class="">Upcoming events</a></li>
                            <li class="py-1"><a href="#" class="">Ministries</a></li>
                            <li class="py-1"><a href="#" class="">Sermons</a></li>
                            <li class="py-1"><a href="#" class="">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="w-1/2 lg:w-1/3 py-4 ">
                        <p class="text-lg font-semibold">Our Address</p>
                        <ul class="list-reset leading-loose py-3">
                            <li class="py-1">Akshya Nagar 1st Block 1st Cross,<br /> Rammurthy nagar,
                                <br />Bangalore-560016
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-gray-00" style="opacity: 0.9;">
<div class="container mx-auto">
  <p class="text-white py-3">&copy; 2020. All rights reserved</p>
</div>
</div> -->
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
        $('.slider').slick({
            autoplay: true,
            speed: 800,
            lazyLoad: 'progressive',
            arrows: false,
            dots: true,
        }).slickAnimation();
    </script>
    <!-- slider js -->
</body>

</html>
