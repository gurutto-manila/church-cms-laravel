@extends('layouts.welcome')

@section('meta-contents')
    <title>Advantages of Mobile App for Churches :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Read through the article published by ChurchCMS editorial team and learn about the advantages of having a dedicated Custom Mobile App for Church.">
    <meta property="og:url" content="{{ url('resources/church-mobile-app') }}">
    <meta property=" og:title" content="Advantages of Mobile App for Churches :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Read through the article published by ChurchCMS editorial team and learn about the advantages of having a dedicated Custom Mobile App for Church. " />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Mobile-App.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Advantages of having a <br />Custom Mobile App for your church?</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/dedicated_church_mobile_app.jpg') }}"
                    alt="Church Mobile App to grow church and increase engagements" class="w-full"></p>
            <p class="text-lg leading-loose">In modern world of app technologies the <a href="{{ url('/') }}"
                    class="underline">church mobile
                    app</a> would be powerful tool that brings with it immense benefits. When your focus is on proclaiming
                the
                Gospel, connecting with your congregation and encouraging your flock, you’ll actually benefit heavily
                from having a mobile app. There are many golden possibilities and are all possible with Church Mobile
                App. </p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Important Reasons Your Church Must Have a Church Mobile App
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <img src="{{ asset('images/blog/Church-Mobile-App.png') }}" alt="Mobile App for Churches">
                <ul class="list-disc pl-6 py-4 mt-16 leading-loose">
                    <li>You can communicate to your target audience more effectively and directly. It is 200% better than
                        Email, Facebook, WhatsApp, Print mailings, Print handouts.</li>
                    <li>Best to increase giving opportunities</li>
                    <li>Develop some excitement within your church</li>
                    <li>It is the one simple place to keep sermon and teaching resources</li>
                    <li>You can get volunteers to actually respond to you</li>
                    <li>Opportunity to reduce other costs in your budget</li>
                    <li>Increased engagement between member and church ministry</li>
                </ul>
            </div>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Get Instant Communication with Your Congregation through
                Push Notifications
            </h2>
            <p class="text-lg leading-loose">Get use of push notifications are like advance-text-messages. They are an
                immediate and powerful way to communicate with your congregation. Instead of writing it in a bulletin or
                newsletter or waiting to announce upcoming events on Sunday, you would simply send reminders or updates
                using push notifications.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">High Increase in Tithing and Donations
            </h2>
            <p class="text-lg leading-loose">Primarily your congregation does not have to wait for Sundays to place an
                offering in the box when they can tithe at any time using the church mobile app. Imagine combining your
                tithing option with a notification and taking up a special offering for a specific need.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Quality and more in-depth and powerful Bible study model
            </h2>
            <p class="text-lg leading-loose">It is best to take your congregation on an incredible Bible study journey by
                using your Mobile App to combine your blog and sermon audio/video as a unified study tool. If you are, for
                example, teaching through the Book of Romans, your weekly/daily blog posts can educate/teach and further
                encourage users in addition to the teaching on Sundays.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Custom Church Mobile App Development
            </h2>
            <p class="text-lg leading-loose">We have well developed source code for android mobile app that interacts with
                ChurchCMS - <a href="{{ route('features') }}" class="underline">Church Management Software</a>. We
                redesign the app based on your
                Church Branding and color preference. A fully functional android mobile app will be ready in a day.
                Contact our support team for more details.</p>
        </div>

    </div>

    <div class="container mx-auto mb-16">
        <div class="bg-white p-4 lg:px-8 lg:py-4 shadow">
            <h3 class=" text-blue-700 text-lg font-medium capitalize mt-4 mb-2">Popularly Searched For </h3>
            <p class="text-sm leading-loose">free church mobile app, church mobile app template, church mobile app,
                mobile
                app for churches, church mobile app, church community builder mobile app, church tithe mobile app,
                church
                mobile app builder, church mobile app design, top church app providers, free church message app, apps
                for
                group messages church, Church Mobile Application, Church Android application</p>

        </div>
    </div>
@endsection
