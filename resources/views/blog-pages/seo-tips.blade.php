@extends('layouts.welcome')

@section('meta-contents')
    <title>SEO Tips for Church Websites :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="SEO Tips for Church Websites :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>SEO Tips for Church Websites</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/seo.png') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"></p>
            <p class="text-lg leading-loose">Many churches are looking to create a name for themselves online to make it
                easier for current members and potential members to find them. One of the best ways to do this is to create
                a website and then work on increasing the SEO so that website is one of the first ones to show up on a
                search. Some of the steps you can do to help increase your SEO for your church website includes:</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Have a Google My Business Account</h2>
            <p class="text-lg leading-loose">This is a free way to help boost your SEO. Having a Google My Business account
                allows others to find you online. You can include all of the information that you want including reviews,
                your address, and when you are open. Many people who search for you will look through Google and they like
                having easy access to this information. Making this information public will help with your SEO.</p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Update the URL</h2>
            <p class="text-lg leading-loose">If you have something generic for your website pages or you let them
                automatically update, it is time to make some changes. Choose a URL that is easy to read so you can improve
                your rankings too. The more descriptive the URL, the easier it is for others to figure out what is on the
                page and the higher your rankings.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Make the Site Mobile Friendly</h2>
            <p class="text-lg leading-loose">Many of those who search for your church will do their search on their smart
                phone. If your website is not friendly to smartphones and other mobile devices, it is time to update. Not
                only does Google rank website higher when they can work on a PC and a mobile device, but it will make it
                easier for your parishioners to find and use your website.
            </p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Work on Those Keywords
            </h2>

            <p class="text-lg leading-loose">
                Keywords, and keyword phrases, are important to help increase your SEO ranking. You need to focus on the
                content, and high-quality content at that. Focus on the meta descriptions, page titles, and the copy on each
                page. Have the keywords in place on all of these. The keywords and phrases should be anything that your
                parishioners are likely to type in when they look for your website. For example, you should include things
                like your area or city name, denomination, and church to make this easier. Consider adding your keyword to
                image names too.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Use Backlinks
            </h2>
            <p class="text-lg leading-loose">
                To finish up here, you need to gather some good reviews and the best backlinks possible. Ask members to post
                positive reviews on Google, Facebook, and other sites to help with your ranking. If possible, you can use
                backlinks, which are just links that go to your church website from other websites, to help improve your
                ranking. Many search engines and their ranking algorithms will help recognize when some of the credible
                sites links to some other sites. Think about some of the ministries that you partner with and share
                backlinks to help both.
            </p>
            <p class="text-lg leading-loose">
                Even your church website can rank high with the help of SEO. And many of the rules that you follow for SEO
                on a traditional website will still hold true for any church website too. Follow some of the steps above and
                you can rank your church website in no time.
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
