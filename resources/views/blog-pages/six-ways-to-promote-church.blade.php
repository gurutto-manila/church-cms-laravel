@extends('layouts.welcome')

@section('meta-contents')
    <title>Six Ways to Promote your church Website :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Six Ways to Promote your church Website  :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Six Ways to <br /> Promote your church Website</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/promote_church.jpg') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"><!-- style="height: 700px;" -->
            </p>
            <p class="text-lg leading-loose">Once you are done creating a website for your church, it is time for you to find
                a way to get more people to view the website. The best place to get started is with some of your own
                members. If you are looking to promote your website and increase how many people view the website on a
                regular basis, some of the simple steps you can follow include:</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">1. Use SEO</h2>
            <p class="text-lg leading-loose">There are a number of different SEO tactics that you can use to help promote
                your website. These rules do change so you will need to keep up to date on them to see them work well. Some
                of the best steps to help you, at least following the current rules for SEO, include: </p>
            <p class="text-lg leading-loose">Always make sure that the keywords you choose are compatible with a voice
                search.</p>
            <p class="text-lg leading-loose">Use backlinks only when they are high-quality</p>
            <p class="text-lg leading-loose">Include content that is able to inform and engage with your viewers. </p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">2. Create Your Own Google My Business Page</h2>
            <p class="text-lg leading-loose">This does not take too long to set up and really makes it easier for your
                viewers to find you. Many people who search for your website want simple information like your address,
                phone number, and hours of operation. A My Business page from Google will put all of this information front
                and center for you, ensuring that your viewers will find it without getting frustrated.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">3. Use Online Advertising</h2>
            <p class="text-lg leading-loose">Google AdWords is a good option to use. While your church may show up on a
                general search if you are located in a small area, it is much harder if you are located in an area with a
                lot of churches. AdWords will help make sure that you can end up at the top of search lists when you
                purchase ads that relate to your church in that specific area.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                4. Use Email
            </h2>

            <p class="text-lg leading-loose">
                While texting and other options are gaining in popularity, many churches are finding that email is an
                effective way to reach others. You probably already have email addresses for the members of your church so
                it is a great way to share information about your church website with them that they do not know about.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                5. Bring in that social media
            </h2>

            <p class="text-lg leading-loose">
                You may not have time to spend time in all social media websites. So figure out the top ones that your
                members like to get information from. You can then add posts and other important information to the social
                media site with a link to your website to help increase the views to your website.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                6. The importance of the church bulletin
            </h2>

            <p class="text-lg leading-loose">
                There are still some of your members who will enjoy getting the bulletin when they go to the church service.
                They know this is a great way to find out about the church, the different services, the special
                announcements and more. This is also a place where you can promote your website and let others know what is
                going on. Make sure to list the links to your website right in the bulletin to make it easy.
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
