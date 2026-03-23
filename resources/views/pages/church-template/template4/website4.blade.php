<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.3/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/church-template/style-3.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="overflow-x-hidden">
    <div class="app relative">

        <!-- header start -->
        <header>
            <div class="header-wrapper homebanner-wrapper">
                <!-- <div class="px-10 py-3 bg-black fixed w-full"> -->
                <div class="px-3 py-2 ">
                    <div class="container mx-auto flex justify-center flex-col items-center">
                        <div class="flex justify-between items-center">
                            <div class="">
                                <a href="#"><img src="{{ url('church-template/logowhite.png') }}"
                                        class="h-20 w-auto navbar-logo" alt="Logo"></a>
                            </div>
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

                        <div class="w-full nav py-5 menu-open hidden lg:block md:block" id="mainnav">
                            <ul
                                class="list-reset flex flex-col lg:flex-row md:flex-row lg:items-center md:items-center text-base  lg:justify-center md:justify-center my-2 lg:my-0 md:my-0">
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1 active-btn">Home</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">About</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Ministry</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Sermons</a></li>
                                <li class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">
                                    <div class="dropdown">
                                        <button class="dropbtn text-white">Pages</button>
                                        <div class="dropdown-content">
                                            <ul class="list-reset">
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">Events</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Charity & Donation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="faq.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Faq</a></li>
                                <li><a href="contact.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Contact</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Login</a></li>
                                <li><a href="#" class="px-3 py-2 mx-2 lg:mx-3 md:mx-1">Register</a></li>
                                <li class="mt-4 lg:mt-0 md:mt-0"><a href="#"
                                        class="px-4 py-2 mx-2 lg:mx-3 md:mx-1 custom-bg text-white rounded whitespace-no-wrap">Donate
                                        Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- *** -->
                <div class="container mx-auto h-full">
                    <div class="flex  h-full">
                        <div class="banner-sec w-full lg:w-4/5 my-16 px-3 lg:px-0 md:px-0">
                            <h1
                                class="text-white font-medium  text-5xl lg:text-6xl md:text-6xl uppercase tracking-wide txt-animation">
                                Love God.</h1>
                            <h1
                                class="text-white font-medium  text-5xl lg:text-6xl md:text-6xl uppercase tracking-wide ">
                                Live with Peace</h1>
                            <p class="text-white text-lg leading-loose w-10/12">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s</p>
                            <div class="custom-bg inline-block px-16 my-5 py-2 rounded-full">
                                <a href="#" class="text-white">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *** -->
            </div>

        </header>
        <!--********************-->
        <!-- header end -->

        <!-- church detail start -->
        <div class="-mt-12">
            <div class="container mx-auto px-3 lg:px-0 md:px-0">
                <div class="custom-dark w-full mx-auto">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-1/3 py-6">
                            <div class="flex items-center">
                                <div class="rounded-full mx-3 custom-bg w-16 h-16 flex items-center justify-center">
                                    <svg class="w-5 h-5 fill-current text-white" height="682pt"
                                        viewBox="-119 -21 682 682.66669" width="682pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m216.210938 0c-122.664063 0-222.460938 99.796875-222.460938 222.460938 0 154.175781 222.679688 417.539062 222.679688 417.539062s222.242187-270.945312 222.242187-417.539062c0-122.664063-99.792969-222.460938-222.460937-222.460938zm67.121093 287.597656c-18.507812 18.503906-42.8125 27.757813-67.121093 27.757813-24.304688 0-48.617188-9.253907-67.117188-27.757813-37.011719-37.007812-37.011719-97.226562 0-134.238281 17.921875-17.929687 41.761719-27.804687 67.117188-27.804687 25.355468 0 49.191406 9.878906 67.121093 27.804687 37.011719 37.011719 37.011719 97.230469 0 134.238281zm0 0" />
                                    </svg>
                                </div>
                                <!-- ** -->
                                <div class="mx-3">
                                    <h2 class="text-xl text-white">Church Address</h2>
                                    <p class="text-white text-sm">No 29,Santhome Road,<br />
                                        Mylapore, Chennai</p>
                                </div>
                                <!-- ** -->
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 py-6" style="background-color: #82808069;">
                            <div class="flex items-center">
                                <div class="rounded-full mx-3 custom-bg w-16 h-16 flex items-center justify-center">
                                    <svg class="w-5 h-5 fill-current text-white" height="512" viewBox="0 0 58 58"
                                        width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Page-1" fill="" fill-rule="evenodd">
                                            <g id="003---Call" fill="" fill-rule="nonzero" transform="translate(-1)">
                                                <path id="Shape"
                                                    d="m25.017 33.983c-5.536-5.536-6.786-11.072-7.068-13.29-.0787994-.6132828.1322481-1.2283144.571-1.664l4.48-4.478c.6590136-.6586066.7759629-1.685024.282-2.475l-7.133-11.076c-.5464837-.87475134-1.6685624-1.19045777-2.591-.729l-11.451 5.393c-.74594117.367308-1.18469338 1.15985405-1.1 1.987.6 5.7 3.085 19.712 16.855 33.483s27.78 16.255 33.483 16.855c.827146.0846934 1.619692-.3540588 1.987-1.1l5.393-11.451c.4597307-.9204474.146114-2.0395184-.725-2.587l-11.076-7.131c-.7895259-.4944789-1.8158967-.3783642-2.475.28l-4.478 4.48c-.4356856.4387519-1.0507172.6497994-1.664.571-2.218-.282-7.754-1.532-13.29-7.068z" />
                                                <path id="Shape"
                                                    d="m47 31c-1.1045695 0-2-.8954305-2-2-.0093685-8.2803876-6.7196124-14.9906315-15-15-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2c10.4886126.0115735 18.9884265 8.5113874 19 19 0 1.1045695-.8954305 2-2 2z" />
                                                <path id="Shape"
                                                    d="m57 31c-1.1045695 0-2-.8954305-2-2-.0154309-13.800722-11.199278-24.9845691-25-25-1.1045695 0-2-.8954305-2-2s.8954305-2 2-2c16.008947.01763587 28.9823641 12.991053 29 29 0 .530433-.2107137 1.0391408-.5857864 1.4142136-.3750728.3750727-.8837806.5857864-1.4142136.5857864z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <!-- ** -->
                                <div class="mx-3">
                                    <h2 class="text-xl text-white">Phone & Email</h2>
                                    <p class="text-white text-sm">+91 98765 43210<br />
                                        admin@domain.com</p>
                                </div>
                                <!-- ** -->
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 py-6">
                            <div class="flex items-center">
                                <div class="rounded-full mx-3 custom-bg w-16 h-16 flex items-center justify-center">
                                    <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Capa_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                        xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M256,91c-90.981,0-165,74.019-165,165s74.019,165,165,165s165-74.019,165-165S346.981,91,256,91z M337.68,328.48
      L241,264.027V121h30v126.973l83.32,55.547L337.68,328.48z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M256,0C115.39,0,0,115.39,0,256s115.39,256,256,256s256-115.39,256-256S396.61,0,256,0z M256,451
      c-107.52,0-195-87.48-195-195S148.48,61,256,61s195,87.48,195,195S363.52,451,256,451z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <!-- ** -->
                                <div class="mx-3">
                                    <h2 class="text-xl text-white">Opening Hours</h2>
                                    <p class="text-white text-sm">Mon-Fri : 09am - 02pm<br />
                                        Sat-Sun : 10am - 12.30pm</p>
                                </div>
                                <!-- ** -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- church detail end -->

        <!-- about us start -->
        <div class="py-16">
            <div class="container mx-auto">
                <div class="py-5">
                    <h1 class="text-5xl font-medium custom-dark-txt text-center">About Us</h1>
                    <div class="header-underline"></div>
                </div>
                <div class="flex flex-wrap px-3 lg:px-0 md:px-0">
                    <div class="w-full lg:w-1/2 hidden lg:block md:block">
                        <main>
                            <div class="img-slider" id="slider-a">
                                <div class="img-slider__item">
                                    <img src="{{ url('church-template/template4/img5.png') }}" alt="About us" />
                                </div>
                            </div>
                            <div class="img-slider" id="slider-b">
                                <div class="img-slider__item">
                                    <img src="{{ url('church-template/template4/img2.jpg') }}" alt="About us" />
                                </div>
                            </div>
                            <div class="img-slider" id="slider-c">
                                <div class="img-slider__item">
                                    <img src="{{ url('church-template/template4/img3.jpg') }}" alt="About us" />
                                </div>
                            </div>
                            <div class="img-slider" id="slider-d">
                                <div class="img-slider__item">
                                    <img src="{{ url('church-template/template4/img4.jpg') }}" alt="About us" />
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <p class="text-sm leading-loose">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="text-sm leading-loose py-2">There are many variations of passages of Lorem Ipsum
                            available, but the majority have suffered alteration in some form, by injected humour, or
                            randomised words which don't look even slightly believable.</p>
                        <p class="text-sm leading-loose py-2">But I must explain to you how all this mistaken idea of
                            denouncing pleasure and praising pain was born and I will give you a complete account of the
                            system, and expound the actual teachings of the great explorer of the truth, the
                            master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                            because it is pleasure, but because those who do not know how to pursue pleasure rationally
                            encounter consequences that are extremely painful. </p>
                        <div class="custom-dark px-5 py-2 my-3 inline-block rounded">
                            <a href="#" class="text-white">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about us end -->
        <!-- ministry start -->
        <div class="py-6">
            <div class="flex flex-wrap px-3 lg:px-0 md:px-0">
                <div class="w-full lg:w-1/4 md:w-1/2 ministry-sec my-2 lg:my-0 md:my-0">
                    <img src="{{ url('church-template/template4/img1.jpg') }}" class="w-full h-64"
                        alt="Family Ministry">
                    <div class="ministry-content flex flex-col items-center justify-center">
                        <h2 class="text-3xl text-center text-white">Family Ministry</h2>
                    </div>
                    <div class="ministry-content-2 flex flex-col items-center justify-center">
                        <h2 class="text-2xl text-center text-white">Family Ministry</h2>
                        <p class="text-white text-sm leading-loose py-2 w-10/12 mx-auto">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2 ministry-sec my-2 lg:my-0 md:my-0">
                    <img src="{{ url('church-template/template4/img2.jpg') }}" class="w-full h-64"
                        alt="Mans Ministry">
                    <div class="ministry-content flex flex-col items-center justify-center">
                        <h2 class="text-3xl text-center text-white">Mans Ministry</h2>
                    </div>
                    <div class="ministry-content-2 flex flex-col items-center justify-center">
                        <h2 class="text-2xl text-center text-white">Mans Ministry</h2>
                        <p class="text-white text-sm leading-loose py-2 w-10/12 mx-auto">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2 ministry-sec my-2 lg:my-0 md:my-0">
                    <img src="{{ url('church-template/template4/img3.jpg') }}" class="w-full h-64"
                        alt="Woman's Ministry">
                    <div class="ministry-content flex flex-col items-center justify-center">
                        <h2 class="text-3xl text-center text-white">Woman's Ministry</h2>
                    </div>
                    <div class="ministry-content-2 flex flex-col items-center justify-center">
                        <h2 class="text-2xl text-center text-white">Woman's Ministry</h2>
                        <p class="text-white text-sm leading-loose py-2 w-10/12 mx-auto">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="w-full lg:w-1/4 md:w-1/2 ministry-sec my-2 lg:my-0 md:my-0">
                    <img src="{{ url('church-template/template4/img4.jpg') }}" class="w-full h-64"
                        alt="Global Ministry">
                    <div class="ministry-content flex flex-col items-center justify-center">
                        <h2 class="text-3xl text-center text-white">Global Ministry</h2>
                    </div>
                    <div class="ministry-content-2 flex flex-col items-center justify-center">
                        <h2 class="text-2xl text-center text-white">Global Ministry</h2>
                        <p class="text-white text-sm leading-loose py-2 w-10/12 mx-auto">Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ministry end -->
        <!-- sermons start -->
        <div class="py-5">
            <div class="container mx-auto">
                <div class="py-5">
                    <h1 class="text-5xl font-medium custom-dark-txt text-center">Latest Sermons</h1>
                    <div class="header-underline"></div>
                    <div class="py-5 w-full lg:w-9/12 md:w-full mx-auto px-3 lg:px-0 md:px-0">
                        <!-- *start* -->
                        <div class="flex flex-wrap items-center py-3">
                            <div class="w-full lg:w-2/3 md:w-2/3 flex items-center">
                                <img src="{{ url('church-template/template4/img1.jpg') }}" class="w-20 h-20"
                                    alt="Latest Sermons">
                                <div class="px-3">
                                    <h2 class="text-2xl">Put Your Faith Into Action</h2>
                                    <p class="text-sm">By Admin, Nov 14,2020</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 md:w-1/3 my-3 lg:my-0 md:my-0">
                                <ul class="list-reset flex items-center ">
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" id="Capa_1"
                                            enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                            width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                <path
                                                    d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;"
                                            xml:space="preserve">
                                            <path d="M278.944,17.577c-5.568-2.656-12.128-1.952-16.928,1.92L106.368,144.009H32c-17.632,0-32,14.368-32,32v128
  c0,17.664,14.368,32,32,32h74.368l155.616,124.512c2.912,2.304,6.464,3.488,10.016,3.488c2.368,0,4.736-0.544,6.944-1.6
  c5.536-2.656,9.056-8.256,9.056-14.4v-416C288,25.865,284.48,20.265,278.944,17.577z" />
                                            <path d="M368.992,126.857c-6.304-6.208-16.416-6.112-22.624,0.128c-6.208,6.304-6.144,16.416,0.128,22.656
  C370.688,173.513,384,205.609,384,240.009s-13.312,66.496-37.504,90.368c-6.272,6.176-6.336,16.32-0.128,22.624
  c3.136,3.168,7.264,4.736,11.36,4.736c4.064,0,8.128-1.536,11.264-4.64C399.328,323.241,416,283.049,416,240.009
  S399.328,156.777,368.992,126.857z" />
                                            <path d="M414.144,81.769c-6.304-6.24-16.416-6.176-22.656,0.096c-6.208,6.272-6.144,16.416,0.096,22.624
  C427.968,140.553,448,188.681,448,240.009s-20.032,99.424-56.416,135.488c-6.24,6.24-6.304,16.384-0.096,22.656
  c3.168,3.136,7.264,4.704,11.36,4.704c4.064,0,8.16-1.536,11.296-4.64C456.64,356.137,480,299.945,480,240.009
  S456.64,123.881,414.144,81.769z" />
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- *end* -->
                        <!-- *start* -->
                        <div class="flex flex-wrap items-center py-3">
                            <div class="w-full lg:w-2/3 md:w-2/3 flex items-center">
                                <img src="{{ url('church-template/template4/img2.jpg') }}" class="w-20 h-20"
                                    alt="Put Your Faith Into Action">
                                <div class="px-3">
                                    <h2 class="text-2xl">Put Your Faith Into Action</h2>
                                    <p class="text-sm">By Admin, Nov 14,2020</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 md:w-1/3">
                                <ul class="list-reset flex items-center my-3 lg:my-0 md:my-0">
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" id="Capa_1"
                                            enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                            width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                <path
                                                    d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;"
                                            xml:space="preserve">
                                            <path d="M278.944,17.577c-5.568-2.656-12.128-1.952-16.928,1.92L106.368,144.009H32c-17.632,0-32,14.368-32,32v128
  c0,17.664,14.368,32,32,32h74.368l155.616,124.512c2.912,2.304,6.464,3.488,10.016,3.488c2.368,0,4.736-0.544,6.944-1.6
  c5.536-2.656,9.056-8.256,9.056-14.4v-416C288,25.865,284.48,20.265,278.944,17.577z" />
                                            <path d="M368.992,126.857c-6.304-6.208-16.416-6.112-22.624,0.128c-6.208,6.304-6.144,16.416,0.128,22.656
  C370.688,173.513,384,205.609,384,240.009s-13.312,66.496-37.504,90.368c-6.272,6.176-6.336,16.32-0.128,22.624
  c3.136,3.168,7.264,4.736,11.36,4.736c4.064,0,8.128-1.536,11.264-4.64C399.328,323.241,416,283.049,416,240.009
  S399.328,156.777,368.992,126.857z" />
                                            <path d="M414.144,81.769c-6.304-6.24-16.416-6.176-22.656,0.096c-6.208,6.272-6.144,16.416,0.096,22.624
  C427.968,140.553,448,188.681,448,240.009s-20.032,99.424-56.416,135.488c-6.24,6.24-6.304,16.384-0.096,22.656
  c3.168,3.136,7.264,4.704,11.36,4.704c4.064,0,8.16-1.536,11.296-4.64C456.64,356.137,480,299.945,480,240.009
  S456.64,123.881,414.144,81.769z" />
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- *end* -->
                        <!-- *start* -->
                        <div class="flex flex-wrap items-center py-3">
                            <div class="w-full lg:w-2/3 md:w-2/3 flex items-center">
                                <img src="{{ url('church-template/template4/img3.jpg') }}" class="w-20 h-20"
                                    alt="Put Your Faith Into Action">
                                <div class="px-3">
                                    <h2 class="text-2xl">Put Your Faith Into Action</h2>
                                    <p class="text-sm">By Admin, Nov 14,2020</p>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/3 md:w-1/3">
                                <ul class="list-reset flex items-center my-3 lg:my-0 md:my-0">
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" id="Capa_1"
                                            enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                            width="512" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m482 273.763v-17.763c0-124.072-101.928-225-226-225s-226 100.928-226 225v17.763c-17.422 6.213-30 22.707-30 42.237v120c0 24.814 20.186 45 45 45h60c8.291 0 15-6.709 15-15v-180c0-8.291-6.709-15-15-15h-45v-15c0-107.52 88.48-195 196-195s196 87.48 196 195v15h-45c-8.291 0-15 6.709-15 15v180c0 8.291 6.709 15 15 15h60c24.814 0 45-20.186 45-45v-120c0-19.53-12.578-36.024-30-42.237z" />
                                                <path
                                                    d="m266.624 245.413c-4.129-4.14-10.578-5.647-16.351-3.259-5.648 2.336-9.273 7.873-9.273 13.846v107.763c-4.715-1.681-9.716-2.763-15-2.763-24.814 0-45 20.186-45 45s20.186 45 45 45 45-20.186 45-45v-113.789l34.395 34.395c10.693 10.693 10.693 28.096 0 38.789-14.22 14.22 7.375 35.046 21.211 21.211 22.397-22.383 22.397-58.828 0-81.211z" />
                                            </g>
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;"
                                            xml:space="preserve">
                                            <path d="M278.944,17.577c-5.568-2.656-12.128-1.952-16.928,1.92L106.368,144.009H32c-17.632,0-32,14.368-32,32v128
  c0,17.664,14.368,32,32,32h74.368l155.616,124.512c2.912,2.304,6.464,3.488,10.016,3.488c2.368,0,4.736-0.544,6.944-1.6
  c5.536-2.656,9.056-8.256,9.056-14.4v-416C288,25.865,284.48,20.265,278.944,17.577z" />
                                            <path d="M368.992,126.857c-6.304-6.208-16.416-6.112-22.624,0.128c-6.208,6.304-6.144,16.416,0.128,22.656
  C370.688,173.513,384,205.609,384,240.009s-13.312,66.496-37.504,90.368c-6.272,6.176-6.336,16.32-0.128,22.624
  c3.136,3.168,7.264,4.736,11.36,4.736c4.064,0,8.128-1.536,11.264-4.64C399.328,323.241,416,283.049,416,240.009
  S399.328,156.777,368.992,126.857z" />
                                            <path d="M414.144,81.769c-6.304-6.24-16.416-6.176-22.656,0.096c-6.208,6.272-6.144,16.416,0.096,22.624
  C427.968,140.553,448,188.681,448,240.009s-20.032,99.424-56.416,135.488c-6.24,6.24-6.304,16.384-0.096,22.656
  c3.168,3.136,7.264,4.704,11.36,4.704c4.064,0,8.16-1.536,11.296-4.64C456.64,356.137,480,299.945,480,240.009
  S456.64,123.881,414.144,81.769z" />
                                        </svg>
                                    </li>
                                    <li class="custom-dark p-3 mr-2 rounded">
                                        <svg class="w-6 h-6 fill-current text-white" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
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
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- *end* -->
                    </div>
                </div>
            </div>
        </div>
        <!-- sermons end -->
        <!-- Gallery start -->
        <div class="flex">
            <div class="container mx-auto px-4 lg:px-0 md:px-0 hidden lg:block md:hidden">
                <div class="gallery-sec">
                    <div class="pt-5">
                        <h1 class="text-5xl font-medium custom-dark-txt text-center">Gallery</h1>
                        <div class="header-underline"></div>
                    </div>
                    <ul>
                        <li>
                            <img src="{{ url('church-template/template4/img1.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img2.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img3.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img4.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img5.png') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img1.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img2.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img3.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img4.jpg') }}" alt="Landscape">
                        </li>
                        <li>
                            <img src="{{ url('church-template/template4/img5.png') }}" alt="Landscape">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Gallery end -->
        <!-- Donation start -->
        <div class="py-6">
            <div class="container mx-auto">
                <div class="pt-5">
                    <h1 class="text-5xl font-medium custom-dark-txt text-center">Donation</h1>
                    <div class="header-underline"></div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-1/3 md:w-1/2 p-5">
                        <div class="shadow rounded  p-5 relative">
                            <img src="{{ url('church-template/template4/donate.jpg') }}" class="w-full h-64 rounded"
                                alt="Donation">
                            <h2 class="text-2xl py-2">Education Books for Poor Kids</h2>
                            <p class="text-gray-500 text-sm leading-loose">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.</p>
                            <!-- process bar start -->
                            <div>
                                <div class="wrapper">
                                    <div class="progress-tooltip">
                                        <span class="progress-tooltip-info" style="left: 45%;">45%</span>
                                        <progress class="progress" value="45" max="100">45%</progress>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between my-4">
                                <div class="py-2 text-left">
                                    <p>Raised</p>
                                    <p>$ 10,000</p>
                                </div>
                                <div class="py-2 text-right">
                                    <p>Goal</p>
                                    <p>$ 20,000</p>
                                </div>
                            </div>
                            <!-- process bar end -->
                            <div class="">
                                <div
                                    class="custom-bg py-2 rounded-full w-1/2 text-center mx-auto absolute left-0 right-0">
                                    <a href="#" class="text-white">Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/2 p-5">
                        <div class="shadow rounded p-5 relative">
                            <img src="{{ url('church-template/template4/donate1.jpg') }}" class="w-full h-64 rounded"
                                alt="Help for homeless">
                            <h2 class="text-2xl py-2">Help for homeless</h2>
                            <p class="text-gray-500 text-sm leading-loose">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            <!-- process bar start -->
                            <div>
                                <div class="wrapper">
                                    <div class="progress-tooltip">
                                        <span class="progress-tooltip-info" style="left: 65%;">65%</span>
                                        <progress class="progress" value="65" max="100">65%</progress>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between my-4">
                                <div class="py-2 text-left">
                                    <p>Raised</p>
                                    <p>$ 20,000</p>
                                </div>
                                <div class="py-2 text-right">
                                    <p>Goal</p>
                                    <p>$ 25,000</p>
                                </div>
                            </div>
                            <div class="">
                                <div
                                    class="custom-bg py-2 rounded-full w-1/2 text-center mx-auto absolute left-0 right-0">
                                    <a href="#" class="text-white">Donate</a>
                                </div>
                            </div>
                            <!-- process bar end -->
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/2 p-5">
                        <div class="shadow rounded p-5 relative">
                            <img src="{{ url('church-template/template4/donate2.jpg') }}" class="w-full h-64 rounded"
                                alt="Clean water for kids">
                            <h2 class="text-2xl py-2">Clean water for kids</h2>
                            <p class="text-gray-500 text-sm leading-loose">The standard chunk of Lorem Ipsum used since
                                the 1500s is reproduced below for those interested. </p>
                            <!-- process bar start -->
                            <div>
                                <div class="wrapper">
                                    <div class="progress-tooltip">
                                        <span class="progress-tooltip-info" style="left: 90%;">90%</span>
                                        <progress class="progress" value="90" max="100">90%</progress>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between my-4">
                                <div class="py-2 text-left">
                                    <p>Raised</p>
                                    <p>$ 45,000</p>
                                </div>
                                <div class="py-2 text-right">
                                    <p>Goal</p>
                                    <p>$ 48,000</p>
                                </div>
                            </div>
                            <div class="">
                                <div
                                    class="custom-bg py-2 rounded-full w-1/2 text-center mx-auto absolute left-0 right-0">
                                    <a href="#" class="text-white">Donate</a>
                                </div>
                            </div>
                            <!-- process bar end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donation end -->

        <!-- footer start -->
        <div class="py-3 custom-dark mt-16">
            <div class="container mx-auto px-3 lg:px-0 md:px-0">
                <div class="py-6 mt-6">
                    <h1 class="text-3xl text-white text-center">Follow us For Ferther information</h1>
                    <div class="w-full lg:w-5/12 mx-auto relative mt-5">
                        <form>
                            <input type="text" name="" class="bg-white rounded-full w-full px-4 py-3"
                                placeholder="Enter You Email">
                            <button type="button"
                                class="custom-bg rounded-full px-8 py-3 absolute right-0">Send</button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-8">
                    <div class="w-full lg:w-1/3">
                        <img src="{{ url('church-template/logowhite.png') }}" class="h-20" alt="Logo">
                        <p class="text-base text-white py-2 leading-loose w-10/12">Lorem Ipsum is simply dummy text of
                            the printing and typesetting industry. </p>
                        <ul class="list-reset flex items-center my-5">
                            <li class="mr-5">
                                <a href="#">
                                    <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;"
                                        xml:space="preserve">
                                        <g id="XMLID_834_">
                                            <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
    c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
    V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
    C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
    c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="mr-5">
                                <a href="#">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 -47 512.00203 512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0" />
                                    </svg>
                                </a>
                            </li>
                            <li class="mr-5">
                                <a href="#">
                                    <svg class="w-5 h-5 fill-current text-white" id="Bold"
                                        enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z" />
                                        <path d="m.396 7.977h4.976v16.023h-4.976z" />
                                        <path
                                            d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="mr-5">
                                <a href="#">
                                    <svg class="w-5 h-5 fill-current text-white" height="511pt" viewBox="0 0 511 511.9"
                                        width="511pt" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" />
                                        <path
                                            d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" />
                                        <path
                                            d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <h2 class="text-white text-2xl mt-4">Quick Links</h2>
                        <ul class="list-reset py-3 leading-loose">
                            <li class="py-1"><a href="#" class="text-white">About us</a></li>
                            <li class="py-1"><a href="#" class="text-white">Upcoming Events</a></li>
                            <li class="py-1"><a href="#" class="text-white">Our Ministry</a></li>
                            <li class="py-1"><a href="#" class="text-white">Sermons</a></li>
                            <li class="py-1"><a href="#" class="text-white">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <h2 class="text-white text-2xl mt-4">Contact</h2>
                        <p class="text-base text-white py-2 leading-loose">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. </p>
                        <ul class="list-reset">
                            <li class="flex items-center py-2">
                                <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 511.999 511.999"
                                    style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M409.124,63.426C368.224,22.525,313.843,0,256.001,0S143.777,22.525,102.877,63.426
      c-40.901,40.902-63.426,95.282-63.426,153.123c0,117.012,110.638,214.337,170.077,266.623c8.26,7.266,15.393,13.541,21.076,18.849
      c7.12,6.651,16.259,9.977,25.396,9.977c9.139,0,18.276-3.326,25.397-9.977c5.683-5.309,12.816-11.583,21.076-18.849
      c59.439-52.287,170.077-149.611,170.077-266.623C472.549,158.708,450.025,104.328,409.124,63.426z M282.663,460.654
      c-8.441,7.425-15.73,13.838-21.74,19.451c-2.761,2.577-7.085,2.578-9.847,0c-6.009-5.615-13.299-12.027-21.74-19.452
      c-55.88-49.155-159.895-140.654-159.895-244.103c0-102.868,83.689-186.557,186.558-186.557
      c102.868,0,186.557,83.689,186.557,186.557C442.557,319.999,338.543,411.498,282.663,460.654z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256.001,112.938c-52.621,0-95.431,42.809-95.431,95.43s42.81,95.43,95.431,95.43s95.43-42.809,95.43-95.43
      S308.622,112.938,256.001,112.938z M256.001,273.805c-36.083,0-65.439-29.356-65.439-65.438s29.356-65.438,65.439-65.438
      s65.438,29.356,65.438,65.438S292.084,273.805,256.001,273.805z" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="mx-3 text-sm text-white">Akshya Nagar 1st Block 1st Cross,</span>
                            </li>
                            <li class="flex items-center py-2">
                                <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                d="M511.576,402.975c-3.495-36.288-45.168-65.404-49.7-68.45c-4.483-3.209-44.825-31.284-80.563-31.284
      c-15.102,0-27.727,4.708-37.921,14.381l-0.974,1.05c-11.765,13.773-35.557,34.151-49.256,34.151c-0.917,0-1.7-0.105-2.411-0.337
      c-7.754-5.701-46.081-34.235-71.453-59.617c-20.388-20.388-53.266-63.131-59.879-71.792c-3.447-11.116,16.969-37.357,34.11-52.178
      l0.96-0.945C232.82,127.465,179.63,53.19,177.562,50.354C176.187,48.301,143.409,0,103.931,0C90.352,0,78.091,5.29,68.14,15.126
      c-4.608,3.782-112.091,94.081-47.169,226.941c3.242,6.666,7.291,13.379,12.734,21.143c15.933,22.756,57.205,79.89,96.286,118.966
      c37.104,37.109,95.193,79.356,118.446,95.79c7.979,5.646,14.902,9.826,21.797,13.188C298.686,504.991,327.392,512,355.553,512
      c82.941,0,133.968-59.435,140.959-68.097C507.818,432.205,513.027,418.063,511.576,402.975z M482.202,430.572l-0.678,0.561
      c-4.975,6.255-50.779,60.901-125.971,60.901h-0.019c-25.162,0-50.984-6.145-76.743-18.674c-5.916-2.874-11.97-6.45-19.061-11.464
      c-22.842-16.148-79.871-57.549-115.911-93.598c-37.987-37.988-78.458-94-94.095-116.335c-4.846-6.904-8.394-12.763-11.178-18.483
      C-18.683,116.357,70.217,38.718,81.199,29.653c6.914-6.799,14.348-10.099,22.732-10.099c24.189,0,49.619,30.09,57.592,41.989
      c12.896,17.743,41.406,69.045,18.827,92.908c-2.13,1.843-52.049,45.436-38.441,75.507l1.127,1.891
      c4.035,5.3,40.065,52.484,62.434,74.848c27.769,27.77,69.992,58.843,74.719,62.3l1.676,0.983
      c3.452,1.595,7.257,2.397,11.307,2.397c28.758,0,62.687-39.334,64.052-40.938c6.054-5.739,14.157-8.642,24.089-8.642
      c30.157,0,67.615,26.509,69.41,27.789c0.387,0.258,38.704,26.423,41.382,54.26C493.026,414.424,489.789,422.837,482.202,430.572z" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="mx-3 text-sm text-white">+91 98765 43210</span>
                            </li>
                            <li class="flex items-center py-2">
                                <svg class="w-5 h-5 fill-current text-white" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M485.743,85.333H26.257C11.815,85.333,0,97.148,0,111.589V400.41c0,14.44,11.815,26.257,26.257,26.257h459.487
      c14.44,0,26.257-11.815,26.257-26.257V111.589C512,97.148,500.185,85.333,485.743,85.333z M475.89,105.024L271.104,258.626
      c-3.682,2.802-9.334,4.555-15.105,4.529c-5.77,0.026-11.421-1.727-15.104-4.529L36.109,105.024H475.89z M366.5,268.761
      l111.59,137.847c0.112,0.138,0.249,0.243,0.368,0.368H33.542c0.118-0.131,0.256-0.23,0.368-0.368L145.5,268.761
      c3.419-4.227,2.771-10.424-1.464-13.851c-4.227-3.419-10.424-2.771-13.844,1.457l-110.5,136.501V117.332l209.394,157.046
      c7.871,5.862,17.447,8.442,26.912,8.468c9.452-0.02,19.036-2.6,26.912-8.468l209.394-157.046v275.534L381.807,256.367
      c-3.42-4.227-9.623-4.877-13.844-1.457C363.729,258.329,363.079,264.534,366.5,268.761z" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="mx-3 text-sm text-white">admin@domain.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 px-3 lg:px-0 md:px-0" style="background-color: #5d5c5c;">
            <div class="container mx-auto">
                <p class="text-white text-sm">&copy; All Rights Reserved, 2020</p>
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


    <!-- sticky js -->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.nav').addClass('sticky')
            } else {
                $('.nav').removeClass('sticky')
            }
        });
    </script>
    <!-- sticky js -->

</body>

</html>
