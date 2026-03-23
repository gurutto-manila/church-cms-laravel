@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCms.App :: Blog :: Useful Resources to Grow Your Church</title>
    <meta name="description"
        content="Checkout the regularly updated resources section of ChurchCMS and find the helpful articles about Church Management, Worship, Community and Growth.">
    <meta property="og:url" content="{{ url('/resources') }}">
    <meta property=" og:title" content="ChurchCms.App :: Blog :: Useful Resources to Grow Your Church" />
    <meta property="og:description"
        content="Checkout the regularly updated resources section of ChurchCMS and find the helpful articles about Church Management, Worship, Community and Growth." />

@endsection

@section('content')
    <div class="bg-blue-800 py-24"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container w-full lg:w-2/3 mx-auto">
            <h1 class="text-2xl font-headings text-white font-bold text-center capitalize">
                Helpful church management and ministry resources
            </h1>
            <p class="text-lg text-white font-light text-center">We post articles that provide helpful tips
                for
                managing the day-to-day operations of a church!</p>
        </div>
    </div>
    <div class="container mx-auto my-16">
        <div class="flex flex-wrap">
            <!-- grid grid-cols-1 lg:grid-cols-3 gap-10 -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('connect-with-your-church-community-anywhere-with-our-mobile-app') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church-community-app.jpg') }}"
                        alt="Welcome speech to delight worshipers in the online church" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Connect with Your Church Community Anywhere with Our Mobile App</h2>
                    <p class="text-sm ">With our mobile app, connecting with your church community is now easier than ever. Our app allows you to stay connected and engaged with your church no matter where you are. </p>
                </a>
            </div>
            <!-- end -->

            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('6-powerful-prayers-to-strengthen-the-church') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church-prayers.jpg') }}"
                        alt="Welcome speech to delight worshipers in the online church" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">6 Powerful Prayers to Strengthen the Church</h2>
                    <p class="text-sm ">Praying for the Church is an important part of our spiritual journey. With powerful prayers, we can seek God's favor and protection for the Church, its members, and its mission. </p>
                </a>
            </div>
            <!-- end -->

            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('how-it-can-streamline-your-church-organization') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/streamline.png') }}"
                        alt="Welcome speech to delight worshipers in the online church" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">How It Can Streamline Your Church Organization</h2>
                    <p class="text-sm">Church software can help churches save time and manage their operations. Church management software helps with tracking, donations, and events. This guide will give an overview of what it is. </p>
                </a>
            </div>
            <!-- end -->

            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('welcome-speech-to-delight-worshipers-in-the-online-church') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/speech.jpg') }}"
                        alt="Welcome speech to delight worshipers in the online church" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Welcome speech to delight worshipers in the online church</h2>
                    <p class="text-sm">An online churchcms welcome script can go a long way toward making guests feel at ease during a service.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('church-devotees-app-panel-features') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/devotees.jpg') }}"
                        alt="Sermon Preparation Time with ChurchCMS Management Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Church Devotees App Panel Features</h2>
                    <p class="text-sm">Church management tools are a collection of digital solutions for managing people, events, attendance, groups, contributions, and more. It helps you to reach out to your audience in a fresh way.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('how-to-create-a-mobile-church-management-app-for-pastors-and-churches') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/pastors-churches.png') }}"
                        alt="Sermon Preparation Time with ChurchCMS Management Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">How to Create a Mobile Church Management App for Pastors and Churches</h2>
                    <p class="text-sm">Let's face it: we all need a little heavenly inspiration now and then, and what better way to obtain it than on a regular basis? With a churchcms app, ministries and spiritual leaders can now reach out to their congregations to provide spiritual healing and support on a timely basis. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('sermon-preparation-time-with-churchcms-management-software') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/sermon-preparation.webp') }}"
                        alt="Sermon Preparation Time with ChurchCMS Management Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Sermon Preparation Time with ChurchCMS Management Software</h2>
                    <p class="text-sm">While preaching the Gospel is the major emphasis of most senior pastors, you have a lot more on your schedule than preparing a sermon for Sunday services. Pastors don't just work on Sundays; they also oversee a church staff, attend church board meetings, and more. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('15-most-inspiring-bible-verses-to-inspire-you') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/bible-verses.jpg') }}"
                        alt="15 Most Inspiring Bible Verses to Inspire You" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">15 Most Inspiring Bible Verses to Inspire You</h2>
                    <p class="text-sm">Bible Verses that Will Inspire and Strengthen Your Faith - These Bible verses that are encouraging and uplifting will give you hope in times of doubt, anxiety, and dread. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('How-to-Start-an-Online-Church-Service-the-Right-Way') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/online-church-service.jpg') }}"
                        alt="How to Start an Online Church Service the Right Way" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">How to Start an Online Church Service the Right Way</h2>
                    <p class="text-sm">Managing an online church service may appear challenging, but it does not have to be. We've spent years researching the most efficient virtual church services. In reality, the digital technology market is expanding.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('organize-your-prayer-meeting-using-worship-planning-software') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/prayer-meeting.webp') }}"
                        alt="Organize Your Prayer Meeting Using Worship Planning Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Organize Your Prayer Meeting Using Worship Planning Software</h2>
                    <p class="text-sm">Worship may be powerful, but those involved in directing music, playing instruments, and singing know that it can be time-consuming and hard to prepare, especially when numerous services and volunteers are involved.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('why-a-parish-need-church-management-system') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/parish-church.jpg') }}"
                        alt="Why a Parish Need Church Management System" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Why a Parish Need Church Management System?</h2>
                    <p class="text-sm">Every parish priest aspires to be the best he or she can be. However, if you're bogged down with paperwork, this can be difficult. Here's how the Parish Churchcms management system stands out.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('The-Need-of-Best-Church-Management-Software') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/churchmanagementsoftware.jpg') }}"
                        alt="The Need of Best Church Management Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">The Need of Best Church Management Software</h2>
                    <p class="text-sm">Church management software is primarily a tool for churches, although it is an extremely useful tool. It doesn't change lives, but it is necessary for churches to guarantee that they are on solid ground. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('Is-it-necessary-to-use-online-church-charity-software') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church-charity-software.webp') }}"
                        alt="Is It Necessary to Use Online Church Charity Software" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Is It Necessary to Use Online Church Charity Software?</h2>
                    <p class="text-sm">We'll look at the various reasons that churches require donations software. Charitable contributions, it goes without saying, are the church's principal source of income.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('software-for-live-streaming-your-worship-and-events') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/software-for-live-streaming.png') }}"
                        alt="Software for Live Streaming Your Worship & Events" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">Software for Live Streaming Your Worship & Events</h2>
                    <p class="text-sm">With Churchcms live streaming software, you may broadcast your event in real time to your audience.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('The-Top-10-Advantages-of-Hosting-Church-Services-Live') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/hosting-church-services.jpg') }}"
                        alt="The Top 10 Advantages of Hosting Church Services Live" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">The Top 10 Advantages of Hosting Church Services Live</h2>
                    <p class="text-sm">We'll look at ten specific advantages of live streaming church services, such as increased web presence, cost, and other advantages. Keep scrolling.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('How-to-create-a-volunteer-registration-form') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/volunteer-form.jpg') }}"
                        alt="How-to-create-a-volunteer-registration-form" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">How to Create a Volunteer Registration Form</h2>
                    <p class="text-sm">To quickly gather the information you require, use our church volunteer application form. Add a volunteer application form to your church's website. Guide new believers</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('The-Ultimate-Guide-to-Online-Giving-Sermons-to-a-Large-Audience') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/ultimate-guide-to-online-sermons.png') }}"
                        alt="The-Ultimate-Guide-to-Online-Giving-Sermons-to-a-Large-Audience" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">The Ultimate Guide to Online Giving Sermons to a Large Audience</h2>
                    <p class="text-sm">During social isolation, internet preaching to your audience is essential. Get inspired for Sunday by visiting the most popular Sermon Ideas, Topics, and Illustrations for Preaching.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('The-top-10-features-for-a-successful-church-in-ChurchCMS') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/features-for-a-successful-church.jpg') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">The top 10 features for a successful church in ChurchCMS</h2>
                    <p class="text-sm">GegoSoft provides the greatest digital engagement tools.  Let's talk about how your church can expand its reach and better engage your community.</p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('A-Guide-to-Using-Church-Database-Software-for-More-Effective-Ministry') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church_management_software.jpg') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">A Guide to Using Church Database Software for More Effective Ministry</h2>
                    <p class="text-sm">ChurchCMS database software is a cloud-based technology that enables church administration to collect, store, and organise information. Schedule a free demo. </p>
                </a>
            </div>
            <!-- end -->
            
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('church-website-builder') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church_website_builder_thumbnail.jpg') }}"
                        alt="Why Your Church Needs A Website?" class="mb-4 w-full">
                    <h2 class="font-headings text-2xl">Why Your Church Needs A Website?</h2>
                    <p class="text-sm">Read through the article published by ChurchCMS editorial team and know about
                        the need of
                        having a Church
                        Website. A useful article to read for Church Pastor and Ministry People.</p>
                </a>
            </div>
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('church-mobile-app') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/Church-Mobile-App_thumbnail.jpg') }}"
                        alt="Custom Mobile App For Your Church" class="mb-4 w-full">

                    <h2 class="font-headings text-2xl">Advantages Of Having A Custom Mobile App For Your Church?</h2>
                    <p class="text-sm">Learn about the advantages of having a dedicated Custom Mobile App for your
                        Church. </p>
                </a>
            </div>
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('membership-management') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church_membership_management_software_thumbnail.jpg') }}"
                        alt="Church Membership Management Software - Requirements" class="mb-4 w-full">

                    <h2 class="font-headings text-2xl">Church Membership Management Software -
                        What It Means In Cloud Era ?</h2>
                    <p class="text-sm">List of key requirements for the Modern Day Church Memebership Management
                        Software.</p>
                </a>
            </div>
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('dedicated-mobile-app') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/dedicated_church_mobile_app_thumbnail.jpg') }}"
                        alt="Dedicated Mobile App not Whatsapp" class="mb-4 w-full">

                    <h2 class="font-headings text-2xl">Why you need dedicated mobile app for Church and not use Whats app &
                        other social apps ?</h2>
                    <p class="text-sm">here are some reasons your church should consider having a dedicated mobile
                        app for Church and not use Whats app & other social apps.</p>
                </a>
            </div>
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('cloud-storage') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/cloud_storage_for_churches_thumbnail.jpg') }}" alt="How To Use Cloud Storage For
    Church Videos, Audios & Bulletins" class="mb-4 w-full">

                    <h2 class="font-headings text-2xl">How To Use Cloud Storage For
                        Church Videos, Audios & Bulletins ?</h2>
                    <p class="text-sm">Take the advnatage of cloud storage and store all your church's Event Photos,
                        Books, Graphic Assets and Video in cloud.</p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('live-streaming') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/live_stream_for_churches_thumbnail.jpg') }}"
                        alt="How to use Live Streaming for your Church Services and Events ?" class="mb-4 w-full">

                    <h2 class="font-headings text-2xl">How to use Live Streaming for <br />your Church Services and Events ?
                    </h2>
                    <p class="text-sm">Learn about how to set up live streaming for Churches using Modern Cloud
                        Technology.</p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('six-ways-to-promote-your-church') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/promote_church_thumbnail.png') }}"
                        alt="Six Ways to Promote your church Website" class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">Six Ways to Promote your church Website</h2>
                    <p class="text-sm">Once you are done creating a website for your church, it is time for you to
                        find a way to get more people to view the website. </p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('questions-to-ask') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/questions.png') }}"
                        alt="Questions to ask, when building Church Website" class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">Questions to ask, when building Church Website</h2>
                    <p class="text-sm">While you may be able to make your own church website, many churches decide to
                        hire the work out and have a contractor help them get the work done. </p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('convince-your-team-for-church') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/convince-team.jpg') }}"
                        alt="How to convince your team for a new church website" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">How to convince your team for a new church website</h2>
                    <p class="text-sm">Your church may already have a website in place, but you find it is just not
                        doing the job any longer. It is outdated and many members won’t even take a look at it. </p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('SEO-tips-for-church') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/seo.png') }}" alt="SEO Tips for Church Websites"
                        class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">SEO Tips for Church Websites</h2>
                    <p class="text-sm">Many churches are looking to create a name for themselves online to make it
                        easier for current members and potential members to find them. </p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('metrics-for-church') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/metrics.png') }}" alt="Metrics for Church Websites"
                        class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">Metrics for Church Websites</h2>
                    <p class="text-sm">You have spent a lot of time working on your website, getting the right SEO
                        tactics in place and seeing how many people you can reach with that website. </p>
                </a>
            </div>

            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('five-ways-to-engage') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/engage.png') }}"
                        alt="Best Five ways to engage the Visitors to Church Website" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">Best Five ways to engage the Visitors to Church Website</h2>
                    <p class="text-sm">Once you get members and others to come visit your website, it is important to
                        have some ways to engage with them while they are there. </p>
                </a>
            </div>

            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('track-churchcms-attendance') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/attendance.png') }}"
                        alt="Track ChurchCMS Attendance with the Attendance Card" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">Track ChurchCMS Attendance with the Attendance Card</h2>
                    <p class="text-sm">Your church may record their attendance immediately from their cell phone
                        using the Enrollment Card in Church Connect faster than you can say.... whooaaaa that's awesome.
                    </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('how-to-make-your-church-more-automated') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church-automation.png') }}"
                        alt="How to Make Your Church More Automated" class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">How to Make Your Church More Automated</h2>
                    <p class="text-sm">Automation, at its most fundamental, is the concept of "if this happens, then
                        that happens." In the application development world, this is referred to as "If this, then that."
                    </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('should-my-church-have-a-facebook-group') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/facebook-group.png') }}"
                        alt="Should my Church have a Facebook Group?" class="mb-4 w-full" style="height: 208px;">

                    <h2 class="font-headings text-2xl">Should my Church have a Facebook Group?</h2>
                    <p class="text-sm">We'll highlight why Facebook Groups are such a valuable tool for churches, as
                        well as how you can utilise them to increase interaction with your church. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('Is-there-a-demand-for-sermon-video-content-in-your-church') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/sermons-video.png') }}"
                        alt="Is-there-a-demand-for-sermon-video-content-in-your-church" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">Is there a demand for sermon video content in your church?</h2>
                    <p class="text-sm">Every time a church member enters the church, they expect to hear the word.
                        Many people are eager to hear the pastor begin the sermon lesson. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('Top-important-things-to-look-for-in-a-church-app') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/church-app.jpg') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">Top important things to look for in a church app! </h2>
                    <p class="text-sm">A mobile app can help both the church and the community it serves in a variety
                        of ways. </p>
                </a>
            </div>
            <!-- end -->

            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('Features-of-Church-App-Panel') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/dedicated_church_mobile_app.jpg') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">Features of Church App Panel </h2>
                    <p class="text-sm">This section is where the church owners keep track of all accounting-related
                        information. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('How-to-Create-a-Church-Mobile-App') }}" class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/mobile-app.png') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">

                    <h2 class="font-headings text-2xl">How to Create a Church Mobile App </h2>
                    <p class="text-sm">First, a meeting with the client is scheduled to gain a thorough
                        understanding of their app requirements so that specific results can be delivered. </p>
                </a>
            </div>
            <!-- end -->
            <!-- start -->
            <div class="w-full lg:w-1/3 md:w-1/2 p-4">
                <a href="{{ route('The-10-Best-Church-App-Features-you-Need') }}"
                    class="p-3 block bg-white shadow h-full">
                    <img src="{{ asset('images/blog/mobile-features.png') }}"
                        alt="Top-important-things-to-look-for-in-a-church-app" class="mb-4 w-full"
                        style="height: 208px;">
                    <h2 class="font-headings text-2xl">The 10 Best Church App Features you Need </h2>
                    <p class="text-sm">Mobile app technology has become a necessity for the majority of people. Our
                        phones have revolutionised the way we shop, surf the internet, get directions, read books and
                        magazines, and simply stay informed. </p>
                </a>
            </div>
            <!-- end -->
           
        </div>

    </div>


@endsection
