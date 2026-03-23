<ul class="list-reset tracking-wide font-navigation text-xs">
    <li class="py-2 px-2 {{ Request::segment('2') == 'dashboard' ? 'active' : '' }}">
        <a href="{{ url('preacher/dashboard') }}" class="flex items-center">
            <img src="{{ url('uploads/icons/dashboard.svg') }}" class="w-4 h-4">
            <span class="mx-3">Dashboard</span>
        </a>
    </li>

    <li class="py-2 px-2 {{ Request::segment('2') == 'sermon' ? 'active' : '' }}">
        <a href="{{ url('preacher/sermon') }}" class="flex items-center">
            <img src="{{ url('uploads/icons/sermon.svg') }}" class="w-4 h-4">
            <span class="mx-3">Sermons</span>
        </a>
    </li>

    <li class="py-2 px-3 {{ Request::segment('2') == 'video-conference' ? 'active' : '' }}">
        <a href="{{ url('/preacher/video-conference') }}" class="flex items-center">
            <!--<img src="{{ url('uploads/icons/video_room.svg') }}" class="w-4 h-4"
                style="filter: brightness(0) invert(1);"> -->
            <img src="{{ url('uploads/icons/videocall.svg') }}" class="w-4 h-4"
                style="filter: brightness(0) invert(1);">
            <span class="mx-3 whitespace-no-wrap">Video Chat Room</span>
        </a>
    </li>

    <li class="py-2 px-2 {{ Request::segment('2') == 'activity' ? 'active' : '' }}">
        <a href="{{ url('/preacher/activity') }}" class="flex  items-center">
            <img src="{{ url('uploads/icons/activitylog.svg') }}" class="w-4 h-4">
            <span class="mx-3">Activity Log</span>
        </a>
    </li>

    <!--  <li class="py-2 px-2">
         <a href="{{ url('preacher/preacher') }}" class="flex items-center">
  <img src="{{ url('uploads/icons/ministry.svg') }}" class="w-4 h-4">
  <span class="mx-3">Preacher</span>
  </a>
  </li> -->
</ul>
