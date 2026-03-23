@extends('layouts.welcome')

@section('meta-contents')
    <title>Is there a demand for sermon video content in your church? :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Best Five ways to engage the Visitors to Church Website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Is there a demand for <br /> sermon video content in your church?</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/sermons-video.png') }}"
                    alt="Is there a demand for sermon video content in your church?" class="w-full"></p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Is there a demand for sermon video content in your church?
            </h2>
            <p class="text-lg leading-loose py-4">Every time a church member enters the church, they expect to hear the word.
                Many people are eager to hear the pastor begin the sermon lesson. Members may desire more than what is
                provided at a Saturday or Sunday event. Many churches still employ outdated techniques like audio or video
                recordings of sermons on CDs. After the meeting, the member can pick up the CD within a few hours. For any
                ministry, this can be time consuming and costly.</p>
            <p class="text-lg leading-loose py-4">Many churches have switched to a new method of delivering sermon media. An
                app for the church. Advances in mobile technology allow us to receive sermon media in the matter of seconds.
            </p>



            <p class="text-lg leading-loose py-3">Church apps can deliver media to your phone in a variety of ways. To begin,
                video can be freely uploaded to a hosting partner such as YouTube. Then, via an RSS feed, it was integrated
                into the church app. </p>
            <p class="text-lg leading-loose py-3">The second category is sermon audios. Consider listening to your favourite
                pastor while preparing food, at a little league football game, mowing the yard, or at any other time when
                you are not physically present at church. </p>



            <p class="text-lg leading-loose py-3">This also helps a member to convert a stressful situation into a time of
                good encouragement. Live streaming video is the final form of sermon choice. </p>
            <p class="text-lg leading-loose py-3">That's correct! Many churches are creating something similar to live
                broadcasting with their church apps. It's actually a step forward.</p>

            <p class="text-lg leading-loose py-3">Members are not supposed to watch advertisements or search for on-demand
                channel recordings. At the moment of the streaming live service, they can simply press one button and Wow!
            </p>

            <p class="text-lg leading-loose py-3">
                As you can see, sermon media delivered via church CMS app is the latest way to give and receive sermon
                media. Your church is missing out if it doesn't have an app.
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
