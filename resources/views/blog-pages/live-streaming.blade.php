@extends('layouts.welcome')

@section('meta-contents')
    <title>How to setup Church Live Streaming? :: ChurchCms.App Blog</title>
    <meta name="description" content="Learn about how to set up live streaming for Churches using Modern Cloud Technology ">
    <meta property="og:url" content="{{ url('/resources/live-streaming-for-churches') }}">
    <meta property=" og:title" content="How to setup Church Live Streaming? :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Learn about how to set up live streaming for Churches using Modern Cloud Technology." />

@endsection

@section('content')

    <x-blog-header>How to use Live Streaming for <br />your Church Services & Events</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/live_stream_for_churches.jpg') }}"
                    alt="Church Mobile App to grow church and increase engagements" class="w-full"></p>



            <p class="text-lg leading-loose mb-3">People have been regularly attending church services, such as group singing
                or praying, to be closer to God. But modern technology is changing. Sometimes it becomes so unpredictable
                that people can't physically attend a ceremony — but they might not want to miss it, even being in another
                city or country. </p>

            <p class="text-lg leading-loose">This situation become simply solvable nowadays through the power of the
                Internet, which permits for streaming live church services online and lets churches get closer to their
                followers, despite any distance. </p>

            <p class="text-lg leading-loose mb-3">More importantly the Churches all over the world actively use digital
                technologies and communicate with their congregations through websites, Facebook, Twitter, and Instagram,
                which are known as the most important communication channels, surpassing email, events, print, etc.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Major Advantages of Live broadcasting include:
            </h2>

            <ul class="list-disc pl-8 leading-loose">
                <li>Highly possibility to engage people who cannot attend worship personally.</li>
                <li>Being closer to the members of your parish and offering support wherever they are and whatever they
                    experience in their lives.</li>
                <li>Sharing inspiring live videos easily and encouraging more people to join your community.</li>
                <li>Also bringing church to more people's lives.</li>
            </ul>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Selecting the right gear for a church live stream
            </h2>
            <p class="text-lg leading-loose mb-3">
                Primarily the first step is, of course, a nice camera that will help you make videos of good quality. There
                is a rich assortment of church live streaming equipment from which you can choose either more affordable or
                high-budget solutions. </p>

            <p class="text-lg leading-loose mb-3">To get the sermon across, you basically need a camera recording in HD and
                featuring an HDMI output. This is enough if you have a relatively small amount of money for planned spending
                or don’t strive for super-professional quality of BBC level. If you plan to go with high-end video
                production, we suggest considering one of the top camcorders that capture video in UHD 4K up to 30 fps.</p>

            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Software
            </h2>

            <p class="text-lg leading-loose mb-3">If you wish to buy the standalone software, then you can stream to
                YouTube, Facebook, and many other platforms that you may want to use. You can then embed your live stream
                from YouTube or Facebook to your church website for free and do not have to have the expense of storing the
                video on your site or pay for the bandwidth used when people watch it.</p>

            <p class="text-lg leading-loose mb-3">In ChurchCMS - we are achiveing the <a href="{{ route('features') }}"
                    class="underline">Church Live Streaming</a> with WebRTC Technology</p>
        </div>

    </div>

    <div class="container mx-auto mb-16">
        <div class="bg-white p-4 lg:px-8 lg:py-4 shadow">
            <h3 class=" text-blue-700 text-lg font-medium capitalize mt-4 mb-2">Popularly Searched For </h3>
            <p class="text-sm leading-loose">Live Streaming for Churches, Church Boardcasting Software, Church Streaming
                Software, Church Events Live, How to Boardcast Church Events to Facebook Live, How to Boardcast Church
                Events in YouTube Live, How to stream Video through WebRTC, Low Cost Streaming Solutions, Cheap Streaming
                Solutions</p>

        </div>
    </div>
@endsection
