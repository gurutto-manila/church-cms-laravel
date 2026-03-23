<nav class="navbar bg-white w-full flex  lg:flex-row px-4 lg:px-8 py-2 justify-between items-center">
    <div class="nav-brand flex items-center">
        @if (\Request::segment('1') == 'preacher')
            <button class=" block lg:hidden md:hidden mr-3" onclick="showsidebar('pre_sidebar')">
                <span class="navbar-toggler-icon">
                    <img src="{{ url('uploads/icons/menu.svg') }}" class="w-6 h-6">
                </span>
            </button>
        @endif

        @if (Auth::user()->ChurchLogo['meta_value'] != '-')
            <a class="object-contain" href="{{ route('dashboard') }}">
                <img src="{{ Auth::user()->ChurchLogoPath }}" style="height:115px;">
            </a>
        @endif
        <a class="text-lg lg:text-3xl font-exo font-medium text-gray-600" href="{{ route('dashboard') }}">
            <strong>{{ ucwords(Auth::user()->church->name) }}</strong>
        </a>
    </div>
    <div class="navbar-menu collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto flex">
        </ul>
    </div>
    <div class="flex items-center">
        <notification url="{{ url('/') }}" mode="admin"></notification>
        <div class="navbar-menu">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto flex items-center font-headings">
                <!-- Authentication Links -->
                <!-- <li class="mx-2 hidden lg:block"><a href="">{{ __('Features') }}</a></li> -->
                <!-- <li class="mx-2 hidden lg:block"><a href="{{ url('/pricing') }}">{{ __('Pricing') }}</a></li> -->
                <!--  <li class="mx-2 hidden lg:block"><a href="">{{ __('Demo') }}</a></li> -->
                @guest
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <!-- start -->
                    <li>
                        <div class="profile-click" dusk="profile-menu">
                            @if (Auth::user()->userprofile->avatar != null)
                                <img src="{{ Auth::user()->userprofile->AvatarPath }}"
                                    class="w-8 h-8 rounded-full cursor-pointer">
                            @else
                                <img src="{{ url('uploads/user/avatar/default-user.jpg') }}"
                                    class="w-8 h-8 rounded-full cursor-pointer">
                            @endif
                            <div class="user-dtl rounded">
                                <ul class="list-reset">
                                    <div class="flex border-b p-2 items-center">
                                        @if (Auth::user()->userprofile->avatar != null)
                                            <img src="{{ Auth::user()->userprofile->AvatarPath }}"
                                                class="w-10 h-10 rounded-full cursor-pointer">
                                        @else
                                            <img src="{{ url('uploads/user/avatar/default-user.jpg') }}"
                                                class="w-10 h-10 rounded-full cursor-pointer">
                                        @endif
                                        <div>
                                            <div>
                                                <a id="navbarDropdown"
                                                    class="nav-link dropdown-toggle text-sm  no-underline text-black px-2"
                                                    href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->FullName }}
                                                    <span class="caret"></span>
                                                </a>
                                            </div>
                                            <div>
                                                <p class="text-sm  no-underline text-black px-2">
                                                    {{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-2 leading-loose">
                                        <li class="hover:bg-gray-200">
                                            <a href="{{ url('/preacher/changepassword/') }}" dusk="password-link"
                                                class="text-sm no-underline text-black px-3">
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200">
                                            <a href="{{ url('/preacher/edit/' . Auth::user()->name) }}"
                                                class="text-sm no-underline text-black px-3">
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="hover:bg-gray-200">
                                            <a href="{{ url('/preacher/changeavatar') }}"
                                                class="text-sm  no-underline text-black px-3">
                                                <span>Change Avatar</span>
                                            </a>
                                        </li>
                                        @if (Auth::user()->isImpersonating())
                                            <li class="hover:bg-gray-200">
                                                <a href="{{ url('/preacher/impersonate/stop') }}"
                                                    class="text-sm no-underline text-black flex px-2 py-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                        x="0px" y="0px" viewBox="0 0 65.518 65.518"
                                                        style="enable-background:new 0 0 65.518 65.518;"
                                                        xml:space="preserve" width="512px" height="512px"
                                                        class="w-4 h-4  mx-2 my-1">
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M32.759,0C14.696,0,0,14.695,0,32.759s14.695,32.759,32.759,32.759s32.759-14.695,32.759-32.759S50.822,0,32.759,0z M6,32.759C6,18.004,18.004,6,32.759,6c6.648,0,12.734,2.443,17.419,6.472L12.472,50.178C8.443,45.493,6,39.407,6,32.759z M32.759,59.518c-5.948,0-11.447-1.953-15.895-5.248l37.405-37.405c3.295,4.448,5.248,9.947,5.248,15.895 C59.518,47.514,47.514,59.518,32.759,59.518z"
                                                                    data-original="#000000" class="active-path"
                                                                    fill="#000000" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span>Stop</span>
                                                </a>
                                            </li>
                                        @else
                                            <li class="hover:bg-gray-200">
                                                <a class="dropdown-item text-sm  no-underline text-black px-3"
                                                    dusk="logout-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endif
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
