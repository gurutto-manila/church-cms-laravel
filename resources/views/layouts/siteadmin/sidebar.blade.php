<div class="w-full lg:w-40 md:w-40 admin-sidebar">
    <div class="min-h-full header-wrapper-b hidden lg:block md:block ">
        <ul class="list-reset ">
            <li class="py-2 px-2 {{ Request::segment('2') == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('siteadmin/dashboard') }}" class="flex items-center">
                    <img src="{{ url('uploads/icons/dashboard.svg') }}" class="w-4 h-4">
                    <span class="mx-3">Dashboard</span>
                </a>
            </li>
            <li class="py-2 px-2 {{ Request::segment('2') == 'index' ? 'active' : '' }}">
                <a href="{{ url('siteadmin/index') }}" class="flex items-center">
                    <img src="{{ url('uploads/icons/file.svg') }}" class="w-4 h-4">
                    <span class="mx-3">Index</span>
                </a>
            </li>
            <!-- <li class="py-2 px-2 {{ Request::segment('2') == 'settings' ? 'active' : '' }}">
        <a href="{{ url('/siteadmin/settings/generalsettings') }}" class="flex items-center">
          <img src="{{ url('uploads/icons/settings.svg') }}" class="w-4 h-4">
          <span class="mx-3">Settings</span>
        </a>
      </li> -->
            <li class="py-2 px-2 {{ Request::segment('2') == 'contact' ? 'active' : '' }}">
                <a href="{{ url('/siteadmin/contact') }}" class="flex  items-center">
                    <img src="{{ url('uploads/icons/contact.svg') }}" class="w-4 h-4">
                    <span class="mx-3">Contact</span>
                </a>
            </li>
            <li class="py-2 px-2 {{ Request::segment('2') == 'activity' ? 'active' : '' }}">
                <a href="{{ url('/siteadmin/activity') }}" class="flex  items-center">
                    <img src="{{ url('uploads/icons/activitylog.svg') }}" class="w-4 h-4">
                    <span class="mx-3">Activity Log</span>
                </a>
            </li>
        </ul>
    </div>
</div>
