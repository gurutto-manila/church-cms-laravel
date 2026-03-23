@extends('layouts.welcome')

@section('meta-contents')
    <title>Questions to ask, when building Church Website :: ChurchCms.App Blog</title>
    <meta name="description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps.">
    <meta property="og:url" content="{{ url('resources/dedicated-mobile-app-for-churches') }}">
    <meta property=" og:title" content="Questions to ask, when building Church Website :: ChurchCms.App Blog" />
    <meta property="og:description"
        content="Here are some reasons your church should consider having a dedicated mobile app for Church and not use Whats app & other social apps." />
    <meta property="og:image" content="{{ asset('images/blog/OG-Image-Church-Website-Builder.jpg') }}" />
@endsection

@section('content')

    <x-blog-header>Questions to ask, <br /> when building Church Website</x-blog-header>
    <div class="container mx-auto my-16">
        <div class="bg-white p-4 lg:p-8 shadow">
            <p class="mb-8"><img src="{{ asset('images/blog/questions.png') }}"
                    alt="Church Website Builder Solutions and Church Website Design and Development Services"
                    class="w-full"></p>
            <p class="text-lg leading-loose">While you may be able to make your own church website, many churches decide to
                hire the work out and have a contractor help them get the work done. This can help the website look more
                professional and gets it done faster. When you are looking for a contractor to do the work, it is important
                to ask the right questions to make sure you get the right contractor. Some of the questions you should ask
                include:</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Have You Ever Worked with a Church Like This One ?</h2>
            <p class="text-lg leading-loose">Each church is a little bit different so it is important to make sure the
                contractor you talk with will be able to handle it. Ask them some specifics about each church they handled
                and even look at their portfolio to see whether they can handle the unique challenges that come with
                creating a website for your business. </p>


            <h2 class="text-xl font-medium capitalize mt-4 mb-2">Will You Work with My Team and Stay for the Long Term ?</h2>
            <p class="text-lg leading-loose">You may wish to find the good in others, but when you need to find a contractor
                who will help you build up the website for your church, you need to be careful about those contractors who
                just want to come in and make money. When you have someone who does this work, you need them to work with
                the entire team and for them to stick around and make any necessary changes as they come up, even if it is
                far in the future. Ask questions to see if this is the contractor you have found.</p>
            <h2 class="text-xl font-medium capitalize mt-4 mb-2">What are the Costs ?</h2>
            <p class="text-lg leading-loose">Always look into the amount that the person will charge. You need to be able to
                fit this into your budget and knowing ahead of time how much this will cost for the overall project, or how
                much you will pay a month, can be important. Get a good idea of the costs on this project, check them with a
                few different contractors as well, and see where you can get the best value for your money.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                How Well Can You Meet a Deadline ?
            </h2>

            <p class="text-lg leading-loose">
                If you have important deadlines to meet, you want to work with someone who can meet all of the deadlines
                that you set ahead of time. Ask questions to see whether they have had trouble meeting any deadlines in the
                past and how they will work with you if things start to fall behind in the process.
            </p>

            <h2 class="text-xl font-medium capitalize mt-4 mb-2">
                What If We Need to Make Changes Later ?
            </h2>

            <p class="text-lg leading-loose">
                Your website will need to be changed over time. You may need to make updates, add in some new videos and
                more. You should make sure that the person who helps with your website is flexible and willing to make these
                changes as necessary. If they refuse to do changes later, then this is a sign that you should not work with
                them.
            </p>

            <p class="text-lg leading-loose">
                If you are looking to hire out to have someone create your website, then it is important that you pick the
                right person. Asking these questions can often make the decision a little bit easier.
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
