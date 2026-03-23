@extends('layouts.welcome')

@section('meta-contents')
    <title>How to convince your team for a new church website :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="How to convince your team for a new church website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>How to convince <br /> your team for a new church website</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/convince-team.jpg') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"></p>
            <p class="text-lg leading-loose">Your church may already have a website in place, but you find it is just not
                doing the job any longer. It is outdated and many members won’t even take a look at it. But how are you
                going to convince your team that it is time to update the church website and go in a new direction? Some of
                the things that you can bring up at a meeting with your team to help them see why a new website is so
                important includes?</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Technology Changes Fast</h2>
            <p class="text-lg leading-loose">Technology is changing all the time. From one year to the next, you will see a
                big difference. However, many churches still have a website that is ten years old or more. This means that
                it may be hard to work with and may not even work with some search engines at all. This can make it hard for
                members to even find the website and you need to do some updated.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Needs to be Mobile Friendly</h2>
            <p class="text-lg leading-loose">Remind your team that most of your members now search for the website through
                their smart phones and other mobile devices. If the website is not mobile friendly, this is the perfect time
                to do an update and turn this around. You may need to change a few things around with your website to make
                it more mobile friendly so you may as well do it all at the same time.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Look at the Data</h2>
            <p class="text-lg leading-loose">If nothing else is working, it is time to take a look at the data. You can use
                several tools, like Heatmap software, to analyze how the people who visit your website are behaving. It is a
                good way to see where, if any, engagement is happening on the website. You can look at a lot of different
                factors to help you figure out the places that are still doing well and which ones are struggling a bit.
            </p>
            <p class="text-lg leading-loose">
                Google Analytics is important here as well. This is a tool that will show you more about the number of
                visitors who come to the website, what the bounce rate is (or how many people click on and then click right
                out), and where the visitors look at when they get to your website. This can help make the decision.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Members Have Asked for a Better Site
            </h2>

            <p class="text-lg leading-loose">
                It is possible that a few of the members on your team have asked when the website is going to be updated.
                When members start to notice that the website is older or that it needs some work, this is usually a big
                sign. If you can list out the members who have mentioned this as a problem, it is much easier to get others
                on the team to agree as well.
            </p>

            <p class="text-lg leading-loose">
                When it is time to create a new website for your church, it is a good idea to have the whole team on your
                side. This will ensure that you are able to get it done well and that everyone is happy with the final
                results.
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
