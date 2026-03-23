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
                                        class="px-3 py-2 mx-2 lg:mx-3 md:mx-3 text-black ">Ministry</a></li>
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
                    <h2 class="capitalize text-3xl font-semibold text-white mb-0">Gallery</h2>
                    <ul class="list-reset text-base flex items-center text-white mb-0">
                        <li><a href="#" class="text-white font-semibold">Home</a></li>
                        <li class="mx-2">/</li>
                        <li class="opacity-50"> Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- banner end -->


        <!-- gallery start -->
        <div class="work px-3 lg:px-0 md:px-0">
            <div class="category-buttons">
                <a href="#" class="active all" data-group="all">All</a>
                <a href="#" data-group="charity">Charity</a>
                <a href="#" data-group="church">Church</a>
                <a href="#" data-group="community">Community</a>
                <a href="#" data-group="events">Events</a>
            </div>

            <div id="grid" class="grid">
                <a class="card" href="#" data-groups="charity,">
                    <img src="{{ url('church-template/template1/img1.jpg') }}" />
                    <!-- <div class="title">Project Title test me more please do this for me please dood.</div> -->
                </a>
                <a class="card" href="#" data-groups="charity,">
                    <img src="{{ url('church-template/template1/img2.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="community,">
                    <img src="{{ url('church-template/template1/church.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="chruch,charity,">
                    <img src="{{ url('church-template/template1/event1.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="events,community,">
                    <img src="{{ url('church-template/template1/event2.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="church,charity,">
                    <img src="{{ url('church-template/template1/event3.jpg') }}" />
                    <!-- <div class="title">Project Title wow this is so sext</div> -->
                </a>
                <a class="card" href="#" data-groups="events,community,">
                    <img src="{{ url('church-template/template1/slider1.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="chruch,charity,">
                    <img src="{{ url('church-template/template1/slider2.jpg') }}" />
                    <!-- <div class="title">Project Title test me please dood wow this could be better</div> -->
                </a>
                <a class="card" href="#" data-groups="community,events,">
                    <img src="{{ url('church-template/template1/slider3.jpg') }}" />
                    <!-- <div class="title">Project Title</div> -->
                </a>
                <a class="card" href="#" data-groups="community,charity">
                    <img src="{{ url('church-template/template1/prayer.jpg') }}" />
                    <!--  <div class="title">Project Title</div> -->
                </a>
                <div class="guide"></div>
            </div>
        </div>
        <!-- gallery end -->


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


    <!-- gallery start -->
    <script>
        $(document).ready(function() {
            var projects = $('.card');
            var filteredProjects = [];
            var selection = "all";
            var running = false;
            window.setTimeout(function() {
                $('.all').trigger('click');
            }, 150);

            $(window).resize(function() {
                buildGrid(filteredProjects);
            });

            $('.category-buttons a').on('click', function(e) {
                e.preventDefault();
                if (!running) {
                    running = true;
                    selection = $(this).data('group');
                    $('.category-buttons a').removeClass('active');
                    $(this).addClass('active');
                    filteredProjects = [];
                    for (i = 0; i < projects.length; i++) {
                        var project = projects[i];
                        var dataString = $(project).data('groups');
                        var dataArray = dataString.split(',');
                        dataArray.pop();
                        if (selection === 'all') {
                            $(project).addClass('setScale').queue(function(next) {
                                filteredProjects.push(project);
                                next();
                            }).queue(function(next) {
                                $(this).removeClass('setScale');
                                next();
                            }).queue(function(next) {
                                $(this).addClass('animating show')
                                next();
                            }).delay(750).queue(function() {
                                running = false;
                                $(this).removeClass('animating').dequeue();
                            });
                        } else {
                            if ($.inArray(selection, dataArray) > -1) {
                                $(project).addClass('setScale').queue(function(next) {
                                    filteredProjects.push(project);
                                    next();
                                }).queue(function(next) {
                                    $(this).removeClass('setScale');
                                    next();
                                }).queue(function(next) {
                                    $(this).addClass('animating show')
                                    next();
                                }).delay(750).queue(function() {
                                    running = false;
                                    $(this).removeClass('animating').dequeue();
                                });
                                /*$(project).css({
                                  '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
                                  'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
                                  '-webkit-transform': 'scale(' + 1 + ')',
                                  '-ms-transform': 'scale(' + 1 + ')',
                                  'transform': 'scale(' + 1 + ')',
                                  'opacity': 1
                                });*/
                            } else {
                                $(project).queue(function(next) {
                                    $(this).addClass('animating');
                                    next();
                                }).queue(function(next) {
                                    $(this).removeClass('show');
                                    next();
                                }).delay(750).queue(function() {
                                    $(this).removeClass('animating').dequeue();
                                });

                                /*$(project).css({
                                  '-webkit-transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1)',
                                  'transition': 'all 750ms cubic-bezier(0.175, 0.885, 0.32, 1.1);',
                                  '-webkit-transform': 'scale(' + 0 + ')',
                                  '-webkit-transform': 'scale(' + 0 + ')',
                                  '-ms-transform': 'scale(' + 0 + ')',
                                  'transform': 'scale(' + 0 + ')',
                                  'opacity': 0
                                });*/
                            }
                        }
                    }
                    buildGrid(filteredProjects);
                }
            })

            function buildGrid(projects) {
                var left = 0;
                var top = 0;
                var totalHeight = 0;
                var largest = 0;
                var heights = [];
                for (i = 0; i < projects.length; i++) {
                    $(projects[i]).css({
                        height: 'auto'
                    });
                    heights.push($(projects[i]).height());
                }
                var maxIndex = 0;
                var maxHeight = 0;

                for (i = 0; i <= heights.length; i++) {
                    if (heights[i] > maxHeight) {
                        maxHeight = heights[i];
                        maxIndex = i;
                        $('.guide').height(maxHeight);
                    }
                    if (i === heights.length) {
                        for (i = 0; i < projects.length; i++) {
                            $(projects[i]).css({
                                position: 'absolute',
                                left: left + '%',
                                top: top
                            });
                            left = left + ($('.guide').width() / $('#grid').width() * 100) + 2;

                            if (i === maxIndex) {
                                $(projects[i]).css({
                                    height: 'auto'
                                });
                            } else {
                                $(projects[i]).css({
                                    height: maxHeight
                                });
                            }
                            if ((i + 1) % 3 === 0 && projects.length > 3 && $(window).width() >= 700) {
                                top = top + $('.guide').height() + 20;
                                left = 0;
                                totalHeight = totalHeight + $('.guide').height() + 20;

                            } else if ((i + 1) % 2 === 0 && projects.length > 2 && $(window).width() < 700 && $(
                                    window).width() >= 480) {
                                top = top + $('.guide').height() + 20;
                                left = 0;
                                totalHeight = totalHeight + $('.guide').height() + 20;

                            } else if ((i + 1) % 1 === 0 && projects.length > 1 && $(window).width() < 480) {
                                top = top + $('.guide').height() + 20;
                                left = 0;
                                totalHeight = totalHeight + $('.guide').height() + 20;
                            }
                            $('#grid').height(totalHeight + $('.guide').height());
                        }
                    }
                }
            }
        })
    </script>
    <!-- gallery end -->
</body>

</html>
