@extends('layouts.welcome')

@section('meta-contents')
    <title>Track ChurchCMS Attendance with the Attendance Card :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Best Five ways to engage the Visitors to Church Website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Track ChurchCMS Attendance <br /> with the Attendance Card</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/attendance.png') }}"
                    alt="Track ChurchCMS Attendance with the Attendance Card" class="w-full"></p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Did you know that your church can use Church CMS to track
                their own attendance? </h2>
            <p class="text-lg leading-loose">Your church may record their attendance immediately from their cell phone using
                the Enrollment Card in Church Connect faster than you can say.... whooaaaa that's awesome. Here's how you
                can do it:</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Step 1: Make a list of the people you'd like to identify.
            </h2>
            <p class="text-lg leading-loose">Tags are similar to labels that can be applied to people. They're utilised for
                planning, organising, and, most importantly, keeping track of attendance. Start with creating an attendance
                tag and identifying all of the people for whom you want to keep track of attendance.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Step 2: Make an Attendance Event and assign Tags to it.</h2>
            <p class="text-lg leading-loose">You must add the Identifier (or Tags) that are linked with an event in order to
                track attendance. For example, if you're tracking attendance with a "Sunday Worship" Badge, you'd add it to
                the event.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Step 3: In Church Link, make an attendance card.</h2>
            <p class="text-lg leading-loose">The Attendance Card only needs to be added to Church Connect once, as it is
                designed to show on your Join Page on the day of the event. This gathering could be for worship, Sunday
                school, a small group, or something else entirely. This is based on the number of Attendance Events
                scheduled for that day.
            </p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Step 4: Have your people keep track of their time.
            </h2>

            <p class="text-lg leading-loose">
                Your church can now use Church Connect to log in and track their participation. But grasp on! There's more
                to come...
            </p>
            <p class="text-lg leading-loose">
                Not only can your people keep track of their own attendance, but they can also keep track of their entire
                family's participation. Because membership tracking isn't geo-restricted, your audience at home who are
                viewing the live broadcast can also record their presence!
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Take-out
            </h2>
            <p class="text-lg leading-loose">
                Keeping track of church attendance has never been easier than with Church Connect. Using a smartphone, you
                may track church attendance or Sunday school attendance in a matter of seconds.
            </p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Are you not keeping track of your church's attendance?</h2>
            <p class="text-lg leading-loose">
                It shouldn't be difficult to keep track of your church's attendance. Start your Free Trial today and see why
                thousands of churches rely on Church CMS to manage church attendance, create a church website, and more.
            </p>
        </div>

    </div>

    <!-- <div class="container mx-auto mb-16">
            <div class="bg-white p-4 lg:px-8 lg:py-4 shadow">
                <h3 class=" text-blue-700 text-lg font-medium capitalize mt-4 mb-2">Popularly Searched For </h3>
                <p class="text-sm leading-loose">Church Communication App, Church Community App, Church Whatsapp group Alternative, Church Facebook Group alterbative, Church Social App, Church Telegram Group Alternative, Church Social Mobile App, Church Messaging App, Church Mass Messaging App</p>
            </div>
        </div> -->
@endsection
