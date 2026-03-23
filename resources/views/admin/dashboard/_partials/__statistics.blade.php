<div class="w-full">
    <div>
        <h1 class="text-sm uppercase text-gray-800 font-semibold mb-2">Statistics</h1>
    </div>
    <div class="bg-white shadow rounded px-3 py-3 my-2 dashboard-content">
        <div class="flex justify-between flex-col py-2">
            <div class="leading-relaxed flex justify-between">
                <p class="text-xs text-black font-semibold">
                    <a href="{{ url('/admin/members') }}" target="_blank">Members</a>
                </p>
                <p class="text-xs text-gray-500">
                    {{ $dashboard['subscription']['plan']['no_of_members'] - $dashboard['memberCount'] }}/{{ $dashboard['subscription']['plan']['no_of_members'] }}
                </p>
            </div>
            <div class="progress w-1/2 my-1">
                <div class="bar" style="width:{{ $dashboard['memberCount'] }}%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="flex justify-between flex-col py-2">
            <div class="leading-relaxed flex justify-between">
                <p class="text-xs text-black font-semibold">
                    <a href="{{ url('/admin/events') }}" target="_blank">Events</a>
                </p>
                <p class="text-xs text-gray-500">
                    {{ $dashboard['subscription']['plan']['no_of_events'] - $dashboard['eventCount'] }}/{{ $dashboard['subscription']['plan']['no_of_events'] }}
                </p>
            </div>
            <div class="progress w-1/2 my-1">
                <div class="bar" style="width:{{ $dashboard['eventCount'] }}%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="flex justify-between flex-col py-2">
            <div class="leading-relaxed flex justify-between">
                <p class="text-xs text-black font-semibold">Files ( Audios,Bulletins,Gallery,Videos )</p>
                <p class="text-xs text-gray-500">
                    {{ $dashboard['subscription']['plan']['no_of_files'] - $dashboard['fileCount'] + $dashboard['subscription']['plan']['no_of_bulletins'] - $dashboard['bulletinCount'] + $dashboard['subscription']['plan']['no_of_folders'] - $dashboard['galleryCount'] }}/{{ $dashboard['subscription']['plan']['no_of_files'] + $dashboard['subscription']['plan']['no_of_bulletins'] + $dashboard['subscription']['plan']['no_of_folders'] }}
                </p>
            </div>
            <div class="progress w-1/2 my-1">
                <div class="bar"
                    style="width:{{ $dashboard['fileCount'] + $dashboard['galleryCount'] + $dashboard['bulletinCount'] }}%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
        <div class="flex justify-between flex-col py-2">
            <div class="leading-relaxed flex justify-between">
                <p class="text-xs text-black font-semibold">
                    <a href="{{ url('/admin/groups') }}" target="_blank">Groups</a>
                </p>
                <p class="text-xs text-gray-500">
                    {{ $dashboard['subscription']['plan']['no_of_groups'] - $dashboard['groupCount'] }}/{{ $dashboard['subscription']['plan']['no_of_groups'] }}
                </p>
            </div>
            <div class="progress w-1/2 my-1">
                <div class="bar" style="width:{{ $dashboard['groupCount'] }}%">
                    <p class="percent"></p>
                </div>
            </div>
        </div>
    </div>
</div>
