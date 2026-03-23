@extends('layouts.welcome')

@section('meta-contents')
    <title>Metrics for Church Websites :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Metrics for Church Websites :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Metrics for Church Websites</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/metrics.png') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"></p>
            <p class="text-lg leading-loose">You have spent a lot of time working on your website, getting the right SEO
                tactics in place and seeing how many people you can reach with that website. Everything is looking good, but
                how are you able to tell what is working on your website and what is not? How do you figure out the best
                KPIs or Key Performance Indicators, should you follow? Some of the best KPIs to follow include:</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Most Viewed Pages</h2>
            <p class="text-lg leading-loose">This statistic helps you see what your visitors are interested in on the page.
                So, if you see that many of your followers are heading straight to the small group finder, this is a sign
                that they come to your website to find others to connect with. If they spend most of the time watching
                videos on the site, they are interested in knowing more about your services. When you know what pages are
                viewed the most, it is easier to focus your efforts where they most matter.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Conversion Rates</h2>
            <p class="text-lg leading-loose">Your website should have some kind of call to action button, or one that has the
                viewer complete a specific task. You can then take a look at how many conversions you get from this button.
                For a church website, it could be as easy as getting someone to sign up for the weekly or monthly
                newsletter. If you have a low conversion rate, you may have the right CTA, a CTA that no one can find, or
                you need wording that is easier to understand.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Traffic</h2>
            <p class="text-lg leading-loose">You should also take a look at the amount of traffic that is going through your
                website. This helps you know the number of visitors to the website, where they have been directed to the
                site, and how long they stay there. This is broad one, but there are a few places to separate it out to save
                time. You may find that many of your visitors are from social media or referrals for example. Pick where you
                want to view your traffic from and look at that metric the most.
            </p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Online Giving
            </h2>

            <p class="text-lg leading-loose">
                Another metric that may be useful for a church website is online giving. This is a pretty easy KPI to
                measure as well. It will let you have a clear picture of when the various members are giving, how many times
                during the year they give, and the dollar amount that they give. This will make it easier to set up goals
                around your online giving. You can even work to encourage your members to use the online giving platform
                more.
            </p>

            <p class="text-lg leading-loose">
                It is always a good idea to keep up with some of the best KPI measurements along the way once you create
                your website. This helps you know whether your original plan worked well or if you need to make some changes
                to see better results. With some of these metrics in place, you can really reach your members where they
                need you and find the best ways to make your church more efficient as well.
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
