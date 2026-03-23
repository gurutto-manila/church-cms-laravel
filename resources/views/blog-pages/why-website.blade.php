@extends('layouts.welcome')

@section('meta-contents')
    <title>Why your church needs a Website :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Read through the article published by ChurchCMS editorial team and know about the need of having a Church Website. A useful article to read for Church Pastor and Ministry People.">
    <meta property="og:url" content="{{ url('/contact') }}">
    <meta property=" og:title" content="Why your church needs a Website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Read through the article published by ChurchCMS editorial team and know about the need of having a Church Website. A useful article to read for Church Pastor and Ministry People." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Why your church needs a Website?</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/church_website_builder.jpg') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"></p>
            <p class="text-lg leading-loose">It is learnt that about 95% of pastors use computers at church and many use
                modern
                technologies during their sermons, not that many primarily have a church website. Eventually this can prove
                problematic since millions of church-goers and prospective church-goers search the Internet and their own
                place
                of worship’s website each day.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Keeps Your Congregation Engaged and Active</h2>
            <p class="text-lg leading-loose">If you comprise valuable details such as community bulletins, event calendars,
                volunteer sign-up forms, blog posts, podcasts, recorded sermons, social media links, etc. on your church’s
                website, you provide great opportunities for members of your congregation to stay well-informed</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Allocates a Central Location to Share Up-to-Date Events
                Calendars, Service Programs, and Bulletins</h2>
            <p class="text-lg leading-loose">So instead of spending tons of money printing out calendars, information about
                programs, and bulletins, and then mailing them each month or every few weeks, you can simply upload them and
                share them on your website. </p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Actively Introduces the Public to Your Leadership and
                Programs</h2>
            <p class="text-lg leading-loose">
                On your church’s website, users can develop a page that includes bios of your pastors and co-pastors, youth
                pastors, staff, etc. This way, the public will know their backgrounds and what they’re zeal about before
                stepping foot in your church.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Welcome Outsiders to Your Congregation and Ministry
            </h2>

            <p class="text-lg leading-loose">
                Interestingly you can use your church’s website as a space to extend an open invitation to prospective
                members and those who are seeking spiritual guidance. You can also consider designing a home page that is
                positive and extends open arms and portrays a message of community and hope.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                A Church Website Is Easily Promoted Through Location-Based SEO
            </h2>

            <p class="text-lg leading-loose">
                Do you know that it’s easy to promote your church’s website online and across search engines through
                location-based SEO? And that including location-based SEO on your church website will help more people in
                your
                neighbourhood or local community find your church online.
            </p>




            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                Final Thoughts of why you need Church Management Software?
            </h2>

            <p class="text-lg leading-loose"> ChurchCMS is a package of tools and services that helps to manage a church
                effectively and engage church members using mobile technology solutions & cloud messaging solutions. Using
                ChurchCMS - <a href="{{ url('/') }}">Church Management Software </a>, you could easily manage your
                church
                members and membership simply and also manage the Events, activities and Church Website.
        </div>

    </div>

    <div class="container mx-auto mb-16">
        <div class="bg-white p-4 lg:px-8 lg:py-4 shadow">
            <h3 class=" text-blue-700 text-lg font-medium capitalize mt-4 mb-2">Popularly Searched For </h3>
            <p class="text-sm leading-loose">best church website builders, free church website builder, best website builder
                for churches, church website templates, free church website templates, free website templates, free css
                website templates, best church websites, bapist church websites builder, lutheran church websites builder,
                catholic church website builder, affordable church websites, modern baptist church website, church video and
                audio website player</p>
        </div>
    </div>
@endsection
