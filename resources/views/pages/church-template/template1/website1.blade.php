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
                                    class="flex items-center px-3 py-2 border rounded text-teal-lighter border-black">
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
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black active-btn">Home</a></li>
                                <li><a href="{{ url('/church-websites/1/about') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black ">About</a></li>
                                <li><a href="{{ url('/church-websites/1/ministry') }}"
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Ministry</a></li>
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
                                <li><a href="faq-new.html" class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black">Faq</a>
                                </li>
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

        <!-- slider start -->
        <!-- Images from Unsplash -->
        <div class="slider-container">

            <div class="slide flex items-center justify-center"
                style="background-image: url('/church-template/template1/slider1.jpg')">
                <h1 class="uppercase">God is in nature<br />
                    Love it.</h1>
            </div>

            <div class="slide flex items-center justify-center"
                style="background-image: url('/church-template/template1/slider2.jpg')">
                <h1 class="uppercase">Love the Lord Your<br />
                    God.</h1>
            </div>

            <div class="slide flex items-center justify-center"
                style="background-image: url('/church-template/template1/slider3.jpg')">
                <h1 class="uppercase">God is in nature<br />
                    Love it.</h1>
            </div>

            <div class="controls-container">
                <div class="control"></div>
                <div class="control"></div>
                <div class="control"></div>
            </div>
        </div>
        <!-- slider end -->
        <!-- start -->
        <div class="bg-red-600 py-3">
            <div class="container">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full lg:w-2/4 md:w-2/3">

                        <p class="text-2xl mt-2 font-semibold text-white mb-0 py-1">"The Law Demands, but Grace
                            Supplies"</p>
                        <div class="flex items-center py-1">
                            <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195
      C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15
      C481,444.833,460.745,395.539,423.966,358.195z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="text-base text-white mx-3"> Paster J.P.</span>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 md:w-1/3">
                        <div class="flex items-center py-1">
                            <svg class="w-4 h-4 fill-current text-white" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 29.121 29.121" style="enable-background:new 0 0 29.121 29.121;"
                                xml:space="preserve">
                                <g>
                                    <path style="" d="M21.706,6.146c1.116,0,2.02-0.898,2.02-2.016V2.02c0-1.119-0.903-2.02-2.02-2.02
    s-2.019,0.9-2.019,2.02v2.111C19.688,5.248,20.59,6.146,21.706,6.146z" />
                                    <path style="" d="M28.882,3.494h-4.066v1.027c0,1.695-1.377,3.076-3.075,3.076c-1.7,0-3.074-1.381-3.074-3.076V3.494
    h-8.205v1.027c0,1.695-1.379,3.076-3.076,3.076s-3.075-1.38-3.075-3.076V3.494L0.208,3.443v25.678H2.26h24.604l2.049-0.006
    L28.882,3.494z M26.862,27.076H2.26V10.672h24.604v16.404H26.862z" />
                                    <path style="" d="M7.354,6.146c1.116,0,2.021-0.898,2.021-2.016V2.02C9.375,0.9,8.47,0,7.354,0S5.336,0.9,5.336,2.02
    v2.111C5.336,5.248,6.237,6.146,7.354,6.146z" />
                                    <rect x="10.468" y="12.873" style="" width="3.231" height="2.852" />
                                    <rect x="15.692" y="12.873" style="" width="3.234" height="2.852" />
                                    <rect x="20.537" y="12.873" style="" width="3.231" height="2.852" />
                                    <rect x="10.468" y="17.609" style="" width="3.231" height="2.85" />
                                    <rect x="15.692" y="17.609" style="" width="3.234" height="2.85" />
                                    <rect x="20.537" y="17.609" style="" width="3.231" height="2.85" />
                                    <rect x="10.468" y="22.439" style="" width="3.231" height="2.85" />
                                    <rect x="5.336" y="17.609" style="" width="3.229" height="2.85" />
                                    <rect x="5.336" y="22.439" style="" width="3.229" height="2.85" />
                                    <rect x="15.692" y="22.439" style="" width="3.234" height="2.85" />
                                    <rect x="20.537" y="22.439" style="" width="3.231" height="2.85" />
                                </g>
                            </svg>
                            <span class="text-base mx-3 text-white italic">Monday, 11:00 Am</span>
                        </div>
                        <div class="flex items-center py-1">
                            <svg class="w-4 h-4 fill-current text-white" enable-background="new 0 0 24 24" height="512"
                                viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                            </svg>
                            <span class="text-base text-white mx-3">Madurai</span>
                        </div>

                    </div>
                    <div class="w-full lg:w-1/4 md:w-1/3">
                        <div class="py-2">
                            <a href="#"
                                class="px-4 py-2 text-white  text-base uppercase inline-block hover:no-underline"
                                style="border:2px solid #fff;">
                                <div class="flex items-center">
                                    Program Details
                                    <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                        class="w-3 h-3 ml-3" alt="right-arrow">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- start -->
        <div class="py-6 container mx-auto">
            <div class="flex flex-wrap pt-5">
                <!-- ** -->
                <div class="w-full lg:w-1/3 md:w-1/3 text-center p-4" data-aos="fade-up" data-aos-duration="3000">
                    <svg class="w-16 h-16 fill-current text-red-600 mx-auto" id="bible"
                        enable-background="new 0 0 300 300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="m119.171 46.828c.782.781 1.805 1.172 2.829 1.172s2.047-.391 2.828-1.172c1.562-1.562 1.562-4.094 0-5.656l-12-12c-1.562-1.562-4.094-1.562-5.656 0s-1.562 4.094 0 5.656z" />
                            <path
                                d="m154 48c1.023 0 2.047-.391 2.828-1.172l12-12c1.562-1.562 1.562-4.094 0-5.656s-4.094-1.562-5.656 0l-12 12c-1.562 1.562-1.562 4.094 0 5.656.781.781 1.804 1.172 2.828 1.172z" />
                            <path
                                d="m138 48c2.209 0 4-1.791 4-4v-16c0-2.209-1.791-4-4-4s-4 1.791-4 4v16c0 2.209 1.791 4 4 4z" />
                            <path
                                d="m77.504 107.988 12.496 1.562v38.45c0 2.209 1.791 4 4 4s4-1.791 4-4v-37.45l11.504 1.438c.168.021.336.031.502.031 1.986 0 3.711-1.48 3.963-3.504.273-2.191-1.281-4.191-3.473-4.465l-12.496-1.561v-10.489c0-2.209-1.791-4-4-4s-4 1.791-4 4v9.489l-11.504-1.438c-2.18-.283-4.193 1.279-4.465 3.473-.274 2.191 1.281 4.191 3.473 4.464z" />
                            <path
                                d="m136.369 235.727c-1.561-1.568-4.096-1.568-5.656-.012l-4.529 4.512-4.51-4.527c-1.559-1.568-4.094-1.568-5.656-.012-1.566 1.559-1.57 4.092-.012 5.656l4.512 4.529-4.527 4.51c-1.566 1.559-1.57 4.092-.012 5.656.781.785 1.809 1.178 2.834 1.178 1.021 0 2.043-.389 2.822-1.166l4.529-4.512 4.51 4.527c.781.785 1.809 1.178 2.834 1.178 1.021 0 2.043-.389 2.822-1.166 1.566-1.559 1.57-4.092.012-5.656l-4.512-4.529 4.527-4.51c1.566-1.559 1.57-4.092.012-5.656z" />
                            <path
                                d="m265.879 195.494c-.27-1.066-.967-1.975-1.926-2.512l-21.953-12.281v-95.65c0-7.512-4.996-14.061-12.053-16.238v-18.665c0-1.928-1.377-3.582-3.273-3.934-49.205-9.089-79.577 11.974-88.674 19.598-9.102-7.626-39.495-28.7-88.726-19.598-1.897.352-3.274 2.005-3.274 3.934v18.682c-7.029 2.192-12 8.728-12 16.221v109.898c0 9.403 7.648 17.051 17.05 17.051h86.98c4.612 9.147 14.264 21.323 34.239 27.98.387.129.826.197 1.232.205.058 0 5.306.175 11.786 4.172l-3.184 4.824c-1.182 1.789-.742 4.191.996 5.447l28.559 20.615c.688.494 1.508.756 2.342.756.252 0 .504-.023.754-.072 1.082-.207 2.031-.852 2.621-1.781l48-75.529c.591-.928.773-2.056.504-3.123zm-31.879-110.443v91.29c-1.406-.553-2.942-.273-4.053.707v-99.516c2.455 1.641 4.053 4.426 4.053 7.519zm-12.053-31.531v116.939c-1.28-3.341-1.994-6.908-1.994-10.572 0-6.094-.977-12.117-2.904-17.904l-9.463-28.385c-2.771-8.318-11.346-13.281-19.936-11.568-4.895.979-9.139 4.016-11.646 8.334-2.506 4.318-3.037 9.51-1.459 14.248l10.414 31.24-1.111 1.391c-5.67 7.086-7.739 15.882-7.334 24.404-12.978 3.055-24.586 7.584-34.513 13.629v-122.335c5.825-5.123 33.62-26.767 79.946-19.421zm-167.947 0c46.187-7.305 74.15 14.33 80 19.432v122.324c-25.627-15.623-56.096-18.047-72.531-18.047-2.992 0-5.521.08-7.469.176zm-12 141.429v-109.898c0-3.068 1.575-5.833 4-7.479v104.12c0 1.131.479 2.209 1.318 2.969.84.756 1.963 1.119 3.086 1.012.49-.053 47.954-4.551 82.385 18.328h-81.739c-4.99-.001-9.05-4.062-9.05-9.052zm132.289 37.27c-20.648-7.063-28.29-20.646-31.031-28.224 9.648-6.415 21.171-11.253 34.34-14.427 1.051 4.569 2.765 8.86 4.983 12.51.752 1.238 2.07 1.922 3.422 1.922.707 0 1.424-.188 2.074-.582 1.887-1.146 2.488-3.607 1.34-5.496-5.832-9.598-7.578-25.367.678-35.684l2.471-3.09c.846-1.059 1.1-2.477.67-3.764l-11.102-33.303c-.854-2.562-.566-5.369.789-7.703s3.65-3.977 6.297-4.506c4.627-.926 9.275 1.756 10.775 6.254l9.463 28.385c1.654 4.969 2.494 10.143 2.494 15.375 0 10.162 4.141 19.801 11.362 26.852l-33.618 50.937c-7.133-4.463-13.308-5.308-15.407-5.456zm38.611 34.054-22.008-15.887 42.953-65.082 22.51 12.594z" />
                            <path
                                d="m208 246.293c-2.047 0-3.707 1.66-3.707 3.707s1.659 3.707 3.707 3.707 3.707-1.659 3.707-3.707-1.66-3.707-3.707-3.707z" />
                            <path
                                d="m64 234.293c-2.047 0-3.707 1.66-3.707 3.707s1.659 3.707 3.707 3.707c2.047 0 3.707-1.659 3.707-3.707s-1.66-3.707-3.707-3.707z" />
                        </g>
                    </svg>
                    <h4 class="uppercase text-lg font-semibold mt-4 py-2 mb-0">GUIDED BY THE HOLY SPIRIT</h4>
                    <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader will
                        be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <!-- ** -->
                <!-- ** -->
                <div class="w-full lg:w-1/3 md:w-1/3 text-center p-4" data-aos="fade-down" data-aos-duration="3000">
                    <svg class="w-16 h-16 fill-current text-red-600 mx-auto" height="512pt"
                        viewBox="-15 0 512 512.00134" width="512pt" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m476.398438 100.609375c-3.96875-6.113281-9.347657-10.917969-15.457032-14.015625 15.609375-11.207031 19.917969-32.800781 9.355469-49.078125-10.882813-16.777344-33.386719-21.554687-50.144531-10.675781l-15.285156 9.917968c.105468-6.941406-1.757813-13.988281-5.8125-20.234374-5.269532-8.125-13.390626-13.707032-22.863282-15.722657-9.464844-2.003906-19.15625-.21875-27.28125 5.046875l-102 66.191406c-17.496094-14.976562-32.398437-24.972656-40.347656-29.921874-2.320312-1.445313-4.917969-2.328126-7.59375-2.742188-12.078125-20.691406-37.078125-31.40625-61.101562-24.414062-10.082032 2.941406-15.890626 13.539062-12.949219 23.617187l8.8125 30.203125c11.757812 40.289062 12.140625 51.742188-10.449219 81.449219l-26.4375 33.839843-.9375-1.449218c-2.425781-3.726563-7.40625-4.796875-11.144531-2.371094l-81.089844 52.621094c-1.792969 1.164062-3.050781 2.988281-3.496094 5.082031-.445312 2.085937-.039062 4.265625 1.121094 6.058594l109.636719 168.9375c1.539062 2.378906 4.125 3.671875 6.761718 3.671875 1.503907 0 3.027344-.421875 4.378907-1.300782l52.164062-33.851562c12.816407 13.238281 50.253907 47.714844 99.347657 57.535156v24.664063c0 4.445312 3.605468 8.054687 8.054687 8.054687h16.109375v32.222656c0 4.449219 3.609375 8.054688 8.058594 8.054688h32.222656c4.445312 0 8.054688-3.605469 8.054688-8.054688v-32.222656h16.109374c4.449219 0 8.058594-3.605468 8.058594-8.054687v-32.222657c0-4.449218-3.609375-8.054687-8.058594-8.054687h-16.109374v-16.113281c0-1.359375-.421876-2.582032-1.015626-3.703125 14.253907-46.488281 17.941407-88.535157 14.410157-126.09375l79.433593-51.546875c7.222657-4.6875 12.1875-11.90625 13.972657-20.320313 1.796875-8.421875.199219-17.03125-4.488281-24.253906-3.199219-4.929687-7.644532-8.703125-12.78125-11.238281l34.214843-22.035156c14.5-9.410157 17.445313-30.710938 6.566407-47.476563zm-47.476563-60.257813c9.324219-6.035156 21.820313-3.375 27.859375 5.933594 6.042969 9.308594 3.382812 21.804688-5.933594 27.851563l-19.414062 12.601562c-.34375.203125-.726563.308594-1.066406.53125-.199219.128907-.304688.335938-.488282.480469l-109.378906 70.980469c-7.101562-12.011719-14.746094-23.117188-22.644531-33.324219l90.523437-58.742188zm-71.242187-20.992187c4.515624-2.925781 9.90625-3.925781 15.15625-2.804687 5.261718 1.121093 9.777343 4.226562 12.703124 8.738281 6.042969 9.3125 3.382813 21.808593-5.933593 27.855469l-91.972657 59.683593c-9.480468-11.128906-19.070312-21.035156-28.285156-29.660156zm-124.882813 61.835937-14.007813 9.089844-10.382812-27.664062c6.710938 4.625 15.074219 10.8125 24.390625 18.574218zm-96.753906 78.871094c26.011719-34.207031 26.183593-51.15625 13.152343-95.800781l-8.808593-30.207031c-.453125-1.550782.445312-3.179688 1.996093-3.632813 19.753907-5.75 40.542969 5.628907 46.496094 25.960938l18.34375 48.9375c.859375 2.285156 2.707032 4.058593 5.023438 4.824219 2.320312.769531 4.863281.441406 6.910156-.894532l26.242188-17.03125c38.636718 35.394532 85.851562 94.417969 96.734374 177.304688l-70.488281 45.742187c-12.753906 8.28125-28.691406 9.484375-42.617187 3.238281-2.496094-1.121093-5.394532-.902343-7.679688.59375l-25.949218 16.835938-89.273438-137.570312zm-15.980469 237.351563-100.859375-155.417969 67.574219-43.847656 100.855468 155.417968zm234.082031 42.082031v16.109375h-16.113281c-4.445312 0-8.054688 3.609375-8.054688 8.058594v32.222656h-16.109374v-32.222656c0-4.449219-3.609376-8.058594-8.058594-8.058594h-16.109375v-16.109375h16.109375c4.449218 0 8.058594-3.605469 8.058594-8.054688v-16.113281h16.109374v16.113281c0 4.449219 3.605469 8.054688 8.054688 8.054688zm-24.585937-40.277344h-23.75c-4.449219 0-8.058594 3.605469-8.058594 8.054688v16.113281h-16.109375c-.710937 0-1.351563.230469-2.011719.40625-43.082031-7.570313-77.792968-37.734375-91.542968-51.3125l15.074218-9.785156c3.734375-2.421875 4.796875-7.410157 2.375-11.140625l-1.363281-2.101563 22.429687-14.558593c17.90625 6.515624 37.71875 4.328124 53.816407-6.109376l63.460937-41.183593c2.125 33.589843-1.757812 70.773437-14.320312 111.617187zm51.667968-193.636718 31.378907-20.199219c3.605469-2.339844 7.917969-3.140625 12.121093-2.246094 4.210938.898437 7.816407 3.378906 10.160157 6.992187 2.34375 3.609376 3.144531 7.917969 2.246093 12.125-.898437 4.207032-3.378906 7.816407-6.988281 10.160157l-72.882812 47.296875c-1.882813-11.886719-4.527344-23.242188-7.703125-34.164063l29.933594-19.28125c.585937-.207031 1.191406-.332031 1.734374-.683593zm79.859376-71.035157-116.667969 75.136719c-4.640625-13.019531-10.035157-25.332031-16.046875-36.859375l111.75-72.519531c3.015625-1.566406 6.6875-1.839844 10.527344-.636719 4.804687 1.507813 9.148437 4.957031 12.230468 9.710937 5.945313 9.15625 5.113282 20.6875-1.792968 25.167969zm0 0" />
                        <path
                            d="m78.273438 238.101562c-8.707032-1.851562-17.261719 3.699219-19.113282 12.40625-1.851562 8.703126 3.699219 17.257813 12.402344 19.109376 8.703125 1.855468 17.261719-3.695313 19.113281-12.402344 1.851563-8.703125-3.703125-17.257813-12.402343-19.113282zm0 0" />
                    </svg>
                    <h4 class="uppercase text-lg font-semibold mt-4 py-2 mb-0">GUIDED BY THE HOLY SPIRIT</h4>
                    <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader will
                        be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <!-- ** -->
                <!-- ** -->
                <div class="w-full lg:w-1/3 md:w-1/3 text-center p-4" data-aos="fade-up" data-aos-duration="3000">
                    <svg class="w-16 h-16 fill-current text-red-600 mx-auto" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256,215.773c-25.265,0-45.819,20.555-45.819,45.82c0,25.265,20.554,45.818,45.819,45.818
      c25.265,0,45.819-20.554,45.819-45.819C301.819,236.327,281.265,215.773,256,215.773z M256,287.333
      c-14.193,0-25.741-11.547-25.741-25.741c0-14.194,11.547-25.742,25.741-25.742c14.193,0,25.741,11.547,25.741,25.742
      C281.741,275.786,270.193,287.333,256,287.333z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M488.323,361.404L350.63,297.027v-96.926c0-2.566-0.983-5.035-2.745-6.898l-81.846-86.537V51.381h14.185
      c5.544,0,10.039-4.496,10.039-10.039s-4.496-10.039-10.039-10.039h-14.185V10.039C266.039,4.496,261.544,0,256,0
      c-5.545,0-10.039,4.496-10.039,10.039v21.263h-14.185c-5.545,0-10.039,4.496-10.039,10.039s4.495,10.039,10.039,10.039h14.185
      v55.287l-81.845,86.536c-1.763,1.863-2.746,4.332-2.746,6.898v96.926L23.677,361.403c-5.023,2.348-7.191,8.323-4.843,13.346
      c2.349,5.024,8.323,7.19,13.346,4.842l19.25-9v131.37c0,5.544,4.495,10.039,10.039,10.039h109.94h48.821h71.55h48.811H450.53
      c5.544,0,10.039-4.496,10.039-10.039V370.592l19.25,9c5.026,2.349,10.999,0.18,13.346-4.842
      C495.514,369.727,493.346,363.752,488.323,361.404z M161.371,491.922h-35.078v-63.528c0-5.544-4.495-10.039-10.039-10.039
      c-5.545,0-10.039,4.496-10.039,10.039v63.528H71.509V361.204l89.862-42.013V491.922z M281.741,491.922H230.27v-86.096
      c0-14.194,11.543-25.742,25.731-25.742c6.882,0,13.343,2.676,18.2,7.541c4.863,4.862,7.54,11.325,7.54,18.2V491.922z
       M330.551,303.416v188.505h-28.732v-86.096c0-12.237-4.767-23.743-13.415-32.393c-8.646-8.658-20.153-13.426-32.404-13.426
      c-25.26,0-45.809,20.555-45.809,45.82v86.095h-28.742V303.415v-99.318h0.001L256,125.272l74.551,78.825V303.416z M440.491,491.922
      h-34.705v-42.496c0-5.544-4.496-10.039-10.039-10.039c-5.544,0-10.039,4.496-10.039,10.039v42.496h-35.077v-172.73l89.86,42.013
      V491.922z" />
                            </g>
                        </g>
                    </svg>
                    <h4 class="uppercase text-lg font-semibold mt-4 py-2 mb-0">GUIDED BY THE HOLY SPIRIT</h4>
                    <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader will
                        be distracted by the readable content of a page when looking at its layout. </p>
                </div>
                <!-- ** -->
            </div>
        </div>
        <!-- end -->
        <!-- programs & Events start -->
        <div class="py-3">
            <div class="container mx-auto">
                <h1 class="uppercase font-bold text-3xl text-center pt-8">Programs & Events</h1>
                <div class="flex flex-col pt-5 lg:pt-10 md:pt-10">
                    <!-- ** -->
                    <div class="w-full flex flex-wrap py-8">
                        <div class="w-full lg:w-1/6 md:w-1/6" data-aos="fade-left" data-aos-duration="3000">
                            <img src="{{ url('church-template/template1/img2.jpg') }}"
                                class="w-48 h-48 lg:h-48 md:h-24" alt="programs & events">
                        </div>
                        <div class="w-full lg:w-5/6 md:w-5/6 lg:px-4 md:px-4 flex justify-between" data-aos="fade-right"
                            data-aos-duration="3000">
                            <div class="w-full lg:w-9/12">
                                <h2 class="text-2xl lg:text-3xl font-bold">Weekly meeting & prayer</h2>
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
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" enable-background="new 0 0 24 24"
                                        height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                    </svg>
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Madurai</p>
                                </div>
                                <p class="text-sm leading-loose text-gray-700">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s.</p>
                            </div>
                            <div class="py-2">
                                <a href="#" class="px-4 py-2 bg-red-600 text-white rounded text-xs inline-block">
                                    <div class="flex items-center">
                                        Details
                                        <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                            class="w-3 h-3 ml-3" alt="right arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full flex flex-wrap py-8">
                        <div class="w-full lg:w-1/6 md:w-1/6" data-aos="fade-left" data-aos-duration="3000">
                            <img src="{{ url('church-template/template1/img1.jpg') }}"
                                class="w-48 h-48 lg:h-48 md:h-24" alt="weekly meeting prayer">
                        </div>
                        <div class="w-full lg:w-5/6 md:w-5/6 lg:px-4 md:px-4 flex justify-between" data-aos="fade-right"
                            data-aos-duration="3000">
                            <div class="w-full lg:w-9/12">
                                <h2 class="text-2xl lg:text-3xl font-bold">Weekly meeting & prayer</h2>
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
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Saturday, 01.30 PM</p>
                                </div>
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" enable-background="new 0 0 24 24"
                                        height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                    </svg>
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Madurai</p>
                                </div>
                                <p class="text-sm leading-loose text-gray-700">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s.</p>
                            </div>
                            <div class="py-2">
                                <a href="#" class="px-4 py-2 bg-red-600 text-white rounded text-xs inline-block">
                                    <div class="flex items-center">
                                        Details
                                        <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                            class="w-3 h-3 ml-3" alt="right arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                    <!-- ** -->
                    <div class="w-full flex flex-wrap py-8">
                        <div class="w-full lg:w-1/6 md:w-1/6" data-aos="fade-left" data-aos-duration="3000">
                            <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                class="w-48 h-48 lg:h-48 md:h-24" alt="weekly meeting prayer">
                        </div>
                        <div class="w-full lg:w-5/6 md:w-5/6 lg:px-4 md:px-4 flex justify-between"
                            data-aos="fade-right" data-aos-duration="3000">
                            <div class="w-full lg:w-9/12">
                                <h2 class="text-2xl lg:text-3xl font-bold">Weekly meeting & prayer</h2>
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
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Monday, 10.00 AM</p>
                                </div>
                                <div class="my-3 flex items-center">
                                    <svg class="w-4 h-4 fill-current text-red-600" enable-background="new 0 0 24 24"
                                        height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12 0c-4.962 0-9 4.066-9 9.065 0 7.103 8.154 14.437 8.501 14.745.143.127.321.19.499.19s.356-.063.499-.189c.347-.309 8.501-7.643 8.501-14.746 0-4.999-4.038-9.065-9-9.065zm0 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z" />
                                    </svg>
                                    <p class="italic mx-2 mb-0 text-sm text-gray-600">Madurai</p>
                                </div>
                                <p class="text-sm leading-loose text-gray-700">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s.</p>
                            </div>
                            <div class="py-2">
                                <a href="#" class="px-4 py-2 bg-red-600 text-white rounded text-xs inline-block">
                                    <div class="flex items-center">
                                        Details
                                        <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                            class="w-3 h-3 ml-3" alt="right arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- ** -->
                </div>
            </div>
        </div>
        <!-- programs & Events end -->

        <!-- Bible verses start -->
        <div class="bible-section py-3 lg:py-8 md:py-8">
            <div class="container mx-auto">
                <h1 class="uppercase font-bold text-2xl lg:text-4xl text-center pt-2 lg:pt-5 md:pt-5">Bible Verses</h1>
                <svg class="w-10 h-10 fill-current text-red-600 mx-auto my-8" id="Capa_1"
                    enable-background="new 0 0 409.294 409.294" height="512" viewBox="0 0 409.294 409.294" width="512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m0 204.647v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941v-58.471c-96.728 0-175.412 78.684-175.412 175.412z" />
                    <path
                        d="m409.294 87.706v-58.471c-96.728 0-175.412 78.684-175.412 175.412v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941z" />
                </svg>
                <h2 class="font-bold text-xl lg:text-3xl text-center">When I called, you answered me; you made me bold
                    and stouthearted</h2>
                <h3 class="font-bold text-2xl text-center pt-2 lg:pt-5 md:pt-5">- Psalm 138:3</h3>
            </div>
        </div>
        <!-- Bible verses end -->
        <!-- Gallery start -->
        <div class="py-3">
            <div class="container mx-auto">
                <h1 class="uppercase font-bold text-3xl text-center pt-8">Gallery</h1>
                <div class="flex flex-wrap py-8 w-full lg:w-10/12 md:w-full mx-auto">
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img1.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-up" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/img2.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-1/2 lg:w-1/4 md:w-1/4 p-3 gallery-sec" data-aos="fade-down" data-aos-duration="3000">
                        <div class="relative">
                            <a href="#">
                                <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-56 h-32 lg:h-48"
                                    alt="gallery">
                                <div
                                    class="absolute top-0 w-full h-full flex items-center justify-center gallery-hover">
                                    <img src="{{ url('church-template/template1/image-gallery.svg') }}"
                                        class="w-8 h-8">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery end -->
        <!-- Donation start -->
        <div class="donation-section">
            <div class="container mx-auto h-full">
                <!--  <h1 class="uppercase font-bold text-4xl text-center pt-8">Grace Outreach</h1> -->
                <div class="w-full lg:w-11/12 md:w-full flex flex-wrap items-end h-full mx-auto">
                    <div class="w-full lg:w-1/2 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-white py-3">Help human trafficking survivors</h3>
                        <p class="text-sm text-white pb-3 leading-loose">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                            a type specimen book.</p>
                    </div>
                    <div class="w-full lg:w-1/2 md:w-1/2 px-5" data-aos="fade-up" data-aos-duration="3000">
                        <div class="bg-gray-100 py-2 px-4 rounded-t">
                            <h3 class="text-sm text-gray-800 pt-3"> <span
                                    class="text-3xl text-red-600 font-bold mr-3">$ 25,000</span> Pledged of $ 15,000
                                goal </h3>
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
        <!--  ministries start -->
        <div class="py-3">
            <div class="container mx-auto">
                <h1 class="uppercase font-bold text-3xl text-center pt-8">Our Ministries</h1>
                <div class="flex flex-wrap py-4">
                    <div class="w-full lg:w-1/3 md:w-1/3 p-3">
                        <img src="{{ url('church-template/template1/prayer.jpg') }}" class="w-full h-40 mb-2"
                            alt="delight yourself in lord">
                        <h4 class="uppercase text-lg font-semibold py-2 mb-0">DELIGHT YOURSELF IN LORD</h4>
                        <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader
                            will be distracted by the readable content of a page when looking at its layout. </p>
                        <a href="#" class="text-red-600 text-sm">Read more</a>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 p-3">
                        <img src="{{ url('church-template/template1/donation.png') }}" class="w-full h-40 mb-2"
                            alt="delight yourself in lord">
                        <h4 class="uppercase text-lg font-semibold py-2 mb-0">DELIGHT YOURSELF IN LORD</h4>
                        <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader
                            will be distracted by the readable content of a page when looking at its layout. </p>
                        <a href="#" class="text-red-600 text-sm">Read more</a>
                    </div>
                    <div class="w-full lg:w-1/3 md:w-1/3 p-3">
                        <img src="{{ url('church-template/template1/slider1.jpg') }}" class="w-full h-40 mb-2"
                            alt="delight yourself in lord">
                        <h4 class="uppercase text-lg font-semibold py-2 mb-0">DELIGHT YOURSELF IN LORD</h4>
                        <p class="text-sm text-gray-600 leading-loose mb-0">It is a long established fact that a reader
                            will be distracted by the readable content of a page when looking at its layout. </p>
                        <a href="#" class="text-red-600 text-sm">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ministries end -->
        <!-- sermons start -->
        <div class="py-3">
            <div class="container mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-3/4 md:w-full">
                        <h2 class="uppercase font-bold text-3xl py-2">Latest Bulletins</h2>
                        <div class="flex flex-col">
                            <!-- ** -->
                            <div class="w-full flex flex-wrap py-8">
                                <div class="w-full lg:w-1/5 md:w-1/5">
                                    <img src="{{ url('church-template/template1/img2.jpg') }}"
                                        class="w-48 h-40 lg:h-40 md:h-32" alt="bulletins">
                                </div>
                                <div class="w-full lg:w-4/5 md:w-4/5 lg:px-4 md:px-4">
                                    <div class="">
                                        <h2 class="text-xl font-bold">Perseverance of the Saints</h2>
                                        <div class="my-2 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="488.152px" height="488.152px" viewBox="0 0 488.152 488.152"
                                                style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z"></path>
                                                        <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z"></path>
                                                        <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z"></path>
                                                        <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z"></path>
                                                        <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z"></path>
                                                        <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z"></path>
                                                        <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z"></path>
                                                        <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z"></path>
                                                        <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <p class="italic mx-2 mb-0 text-sm text-gray-600">Friday, 12.00 PM by <span
                                                    class="text-red-600">Vincent John</span></p>
                                        </div>
                                        <p class="text-sm leading-loose text-gray-700 mb-0">Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s.</p>
                                        <div class="py-2">
                                            <a href="#"
                                                class="px-4 py-2 bg-red-600 text-white rounded text-xs inline-block">
                                                <div class="flex items-center">
                                                    Details
                                                    <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                                        class="w-3 h-3 ml-3" alt="right arrow">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                            <!-- ** -->
                            <div class="w-full flex flex-wrap py-8">
                                <div class="w-full lg:w-1/5 md:w-1/5">
                                    <img src="{{ url('church-template/template1/prayer.jpg') }}"
                                        class="w-48 h-40 lg:h-40 md:h-32" alt="prayer">
                                </div>
                                <div class="w-full lg:w-4/5 md:w-4/5 lg:px-4 md:px-4">
                                    <div class="">
                                        <h2 class="text-xl font-bold">Perseverance of the Saints</h2>
                                        <div class="my-2 flex items-center">
                                            <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="488.152px" height="488.152px" viewBox="0 0 488.152 488.152"
                                                style="enable-background:new 0 0 488.152 488.152;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M177.854,269.311c0-6.115-4.96-11.069-11.08-11.069h-38.665c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.665c6.12,0,11.08-4.956,11.08-11.079V269.311L177.854,269.311z"></path>
                                                        <path d="M274.483,269.311c0-6.115-4.961-11.069-11.069-11.069h-38.67c-6.113,0-11.074,4.954-11.074,11.069v38.66
      c0,6.123,4.961,11.079,11.074,11.079h38.67c6.108,0,11.069-4.956,11.069-11.079V269.311z"></path>
                                                        <path d="M371.117,269.311c0-6.115-4.961-11.069-11.074-11.069h-38.665c-6.12,0-11.08,4.954-11.08,11.069v38.66
      c0,6.123,4.96,11.079,11.08,11.079h38.665c6.113,0,11.074-4.956,11.074-11.079V269.311z"></path>
                                                        <path d="M177.854,365.95c0-6.125-4.96-11.075-11.08-11.075h-38.665c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.665c6.12,0,11.08-4.956,11.08-11.074V365.95L177.854,365.95z"></path>
                                                        <path d="M274.483,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.113,0-11.074,4.95-11.074,11.075v38.653
      c0,6.119,4.961,11.074,11.074,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95z"></path>
                                                        <path d="M371.117,365.95c0-6.125-4.961-11.075-11.069-11.075h-38.67c-6.12,0-11.08,4.95-11.08,11.075v38.653
      c0,6.119,4.96,11.074,11.08,11.074h38.67c6.108,0,11.069-4.956,11.069-11.074V365.95L371.117,365.95z"></path>
                                                        <path d="M440.254,54.354v59.05c0,26.69-21.652,48.198-48.338,48.198h-30.493c-26.688,0-48.627-21.508-48.627-48.198V54.142
      h-137.44v59.262c0,26.69-21.938,48.198-48.622,48.198H96.235c-26.685,0-48.336-21.508-48.336-48.198v-59.05
      C24.576,55.057,5.411,74.356,5.411,98.077v346.061c0,24.167,19.588,44.015,43.755,44.015h389.82
      c24.131,0,43.755-19.889,43.755-44.015V98.077C482.741,74.356,463.577,55.057,440.254,54.354z M426.091,422.588
      c0,10.444-8.468,18.917-18.916,18.917H80.144c-10.448,0-18.916-8.473-18.916-18.917V243.835c0-10.448,8.467-18.921,18.916-18.921
      h327.03c10.448,0,18.916,8.473,18.916,18.921L426.091,422.588L426.091,422.588z"></path>
                                                        <path d="M96.128,129.945h30.162c9.155,0,16.578-7.412,16.578-16.567V16.573C142.868,7.417,135.445,0,126.29,0H96.128
      C86.972,0,79.55,7.417,79.55,16.573v96.805C79.55,122.533,86.972,129.945,96.128,129.945z"></path>
                                                        <path d="M361.035,129.945h30.162c9.149,0,16.572-7.412,16.572-16.567V16.573C407.77,7.417,400.347,0,391.197,0h-30.162
      c-9.154,0-16.577,7.417-16.577,16.573v96.805C344.458,122.533,351.881,129.945,361.035,129.945z"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <p class="italic mx-2 mb-0 text-sm text-gray-600">Friday, 12.00 PM by <span
                                                    class="text-red-600">Vincent John</span></p>
                                        </div>
                                        <p class="text-sm leading-loose text-gray-700 mb-0">Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s.</p>
                                        <div class="py-2">
                                            <a href="#"
                                                class="px-4 py-2 bg-red-600 text-white rounded text-xs inline-block">
                                                <div class="flex items-center">
                                                    Details
                                                    <img src="{{ url('church-template/template1/right-arrow.svg') }}"
                                                        class="w-3 h-3 ml-3" alt="right arrow">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ** -->
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 md:w-2/5" data-aos="flip-left" data-aos-duration="3000">
                        <div class="bg-red-100 px-2 py-2">
                            <h2 class="uppercase font-bold text-xl px-3 py-2">Recent Sermons</h2>
                            <img src="{{ url('church-template/template1/prayer.png') }}"
                                class="w-56 h-40 mx-3 lg:mx-auto" alt="sermons">
                            <ul class="list-reset px-3">
                                <li class="py-2 border-b">
                                    <h6 class="text-base mb-1">Fruit of the Spirit</h6>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 477.867 477.867"
                                            style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
      C477.726,107.033,370.834,0.141,238.933,0z M238.933,443.733c-113.108,0-204.8-91.692-204.8-204.8s91.692-204.8,204.8-204.8
      s204.8,91.692,204.8,204.8C443.611,351.991,351.991,443.611,238.933,443.733z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M238.933,85.333c-9.426,0-17.067,7.641-17.067,17.067v119.467H102.4c-9.426,0-17.067,7.641-17.067,17.067
      S92.974,256,102.4,256h136.533c9.426,0,17.067-7.641,17.067-17.067V102.4C256,92.974,248.359,85.333,238.933,85.333z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="text-sm mx-1">24:10 mins</span>
                                    </div>
                                </li>
                                <li class="py-2 border-b">
                                    <h6 class="text-base mb-1">Fruit of the Spirit</h6>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 477.867 477.867"
                                            style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
      C477.726,107.033,370.834,0.141,238.933,0z M238.933,443.733c-113.108,0-204.8-91.692-204.8-204.8s91.692-204.8,204.8-204.8
      s204.8,91.692,204.8,204.8C443.611,351.991,351.991,443.611,238.933,443.733z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M238.933,85.333c-9.426,0-17.067,7.641-17.067,17.067v119.467H102.4c-9.426,0-17.067,7.641-17.067,17.067
      S92.974,256,102.4,256h136.533c9.426,0,17.067-7.641,17.067-17.067V102.4C256,92.974,248.359,85.333,238.933,85.333z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="text-sm mx-1">24:10 mins</span>
                                    </div>
                                </li>
                                <li class="py-2 border-b">
                                    <h6 class="text-base mb-1">Fruit of the Spirit</h6>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 477.867 477.867"
                                            style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
      C477.726,107.033,370.834,0.141,238.933,0z M238.933,443.733c-113.108,0-204.8-91.692-204.8-204.8s91.692-204.8,204.8-204.8
      s204.8,91.692,204.8,204.8C443.611,351.991,351.991,443.611,238.933,443.733z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M238.933,85.333c-9.426,0-17.067,7.641-17.067,17.067v119.467H102.4c-9.426,0-17.067,7.641-17.067,17.067
      S92.974,256,102.4,256h136.533c9.426,0,17.067-7.641,17.067-17.067V102.4C256,92.974,248.359,85.333,238.933,85.333z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="text-sm mx-1">24:10 mins</span>
                                    </div>
                                </li>
                                <li class="py-2 border-b">
                                    <h6 class="text-base mb-1">Fruit of the Spirit</h6>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current text-red-600" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 477.867 477.867"
                                            style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
      C477.726,107.033,370.834,0.141,238.933,0z M238.933,443.733c-113.108,0-204.8-91.692-204.8-204.8s91.692-204.8,204.8-204.8
      s204.8,91.692,204.8,204.8C443.611,351.991,351.991,443.611,238.933,443.733z" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M238.933,85.333c-9.426,0-17.067,7.641-17.067,17.067v119.467H102.4c-9.426,0-17.067,7.641-17.067,17.067
      S92.974,256,102.4,256h136.533c9.426,0,17.067-7.641,17.067-17.067V102.4C256,92.974,248.359,85.333,238.933,85.333z" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="text-sm mx-1">24:10 mins</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sermons end -->
        <!-- subscribe start -->
        <div class="py-5 bg-red-600 email-subscribe">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row lg:items-center">
                    <h1 class="uppercase font-bold text-3xl text-white mb-0">Subscribe <span class="font-thin">to
                            our newsletter</span></h1>
                    <div class="lg:ml-10 w-full lg:w-1/2 mt-3 lg:mt-0">
                        <form>
                            <div class="flex items-center">
                                <input type="text" name="" class="px-2 py-2 bg-red-500 w-4/5 text-white"
                                    placeholder="Enter Email">
                                <div class="w-10 h-10 bg-red-500 mx-3 flex items-center justify-center">
                                    <a href="#" class="">
                                        <svg class="w-5 h-5 fill-current text-red-600" version="1.1" id="Capa_1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 334.5 334.5" style="enable-background:new 0 0 334.5 334.5;"
                                            xml:space="preserve">
                                            <path d="M332.797,13.699c-1.489-1.306-3.608-1.609-5.404-0.776L2.893,163.695c-1.747,0.812-2.872,2.555-2.893,4.481
  s1.067,3.693,2.797,4.542l91.833,45.068c1.684,0.827,3.692,0.64,5.196-0.484l89.287-66.734l-70.094,72.1
  c-1,1.029-1.51,2.438-1.4,3.868l6.979,90.889c0.155,2.014,1.505,3.736,3.424,4.367c0.513,0.168,1.04,0.25,1.561,0.25
  c1.429,0,2.819-0.613,3.786-1.733l48.742-56.482l60.255,28.79c1.308,0.625,2.822,0.651,4.151,0.073
  c1.329-0.579,2.341-1.705,2.775-3.087L334.27,18.956C334.864,17.066,334.285,15.005,332.797,13.699z" />
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe end -->
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
