@extends('layouts.welcome')

@section('meta-contents')
    <title>How to Make Your Church More Automated :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Best Five ways to engage the Visitors to Church Website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>How to Make Your Church <br /> More Automated</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/church-automation.png') }}"
                    alt="Track ChurchCMS Attendance with the Attendance Card" class="w-full"></p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">How to Make Your Church More Automated</h2>
            <p class="text-lg leading-loose">It's Monday morning, and you're getting ready to begin contacting new guests to
                your church.</p>
            <p class="text-lg leading-loose py-4">But then there's...</p>
            <p class="text-lg leading-loose">When the phone rings, you are led away. You return to your seat an hour later to
                hear the doorway bell sound. A church member dropped off some donations and wants assistance unloading them.
                After 30 minutes, you return to your desk and begin entering data from the weekend.</p>
            <p class="text-lg leading-loose py-4">"If only I had more time to do everything," you think to yourself.</p>
            <p class="text-lg leading-loose">ChurchCMS Processes can help you automate your church. With Processes, you can
                shorten the time you spend in your church database from hours to minutes. Tasks that used to take 5 minutes
                can now be performed in as little as 5 seconds!</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">What exactly is Church Automation, and how does it
                function?</h2>
            <p class="text-lg leading-loose py-2">Automation, at its most fundamental, is the concept of "if this happens,
                then that happens." In the application development world, this is referred to as "If this, then that."
                Believe it or not, many of us are currently utilising ChurchCMS on a regular basis and aren't even aware of
                it!</p>
            <p class="text-lg leading-loose py-2">On a Sunday morning, you're getting ready to travel for church. You look
                down at your phone, and it immediately tells you how much traffic there is on the way to church, as well as
                the weather prediction... all without you having to launch an app. That's how automation works!</p>
            <p class="text-lg leading-loose py-2">When it comes to church automation, you'll need to know a lot more than
                the current traffic situation or the weather forecast. You're frequently using your church CMS to complete
                tasks such as noting a person's profile, sending emails or texts, amending information, and so on.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Help automate your church with Process</h2>
            <p class="text-lg leading-loose">To automate your church with Events, you'll need actions within a Procedure. We
                propose creating a single Process Step that captures all of the events that occur when that step is
                completed. Among these procedures are the following:</p>
            <ul class="list-reset text-gray-600 px-8 py-3 leading-loose">
                <li>Send an email message to a user.</li>
                <li>Send an email to this person.</li>
                <li>Create a new message.</li>
                <li>Tags can be added or removed. Make a new Task. Change a Field</li>
                <li>Text a Message to a User</li>
                <li>Here's an example of a follow-up method that we automated…</li>
            </ul>
            <p class="text-lg leading-loose">You can start your automated procedure on a member in your church database once
                you've finished creating it. To do so, choose the person you want to start a process on, then select their
                processes before selecting the process you want to start.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Methods for automating your church</h2>
            <p class="text-lg leading-loose">In ChurchCMS, the procedures in the following follow-up example would have
                taken 3-5 minutes to complete manually. It now takes two seconds. Literally! You can construct a variety of
                different Automated Processes to assist you in reducing your church administration responsibilities. Here
                are a few examples:
            </p>
            <ul class="list-reset text-gray-600 px-8 py-3 leading-loose">
                <li>Introducing a new member class.</li>
                <li>Checking your background</li>
                <li>Requests for prayer</li>
                <li>Visitation and outreach</li>
                <li>Counsel</li>
            </ul>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Have you tried ChurchCMS yet?
            </h2>

            <p class="text-lg leading-loose">
                Software for Church Management as a Service is the only Church CRM Software that includes Church Automation,
                Online Giving, Church Accounting, Child Check-In, and even a Church App! Begin your free trial today and see
                why hundreds of churches have already switched to GegoSoft.
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
