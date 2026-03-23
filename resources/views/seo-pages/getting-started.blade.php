@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS :: Getting Started </title>
    <meta name="description" content="Grow your church with powerful Church Management Software">
    <meta property="og:url" content="https://churchcms.app/getting-started/">
    <meta property=" og:title" content="ChurchCMS :: Getting Started" />
    <meta property="og:description" content="Grow your church with powerful Church Management Software" />
@endsection

@section('content')
    <!-- start -->
    <div class="container-wrapper bg-blue-800 py-12 "
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container  mx-auto h-full">
            <div
                class="w-full lg:w-1/2 mx-auto text-center flex flex-col justify-center items-center py-5 leading-loose tracking-wider h-full">
                <h1 class="text-white text-5xl font-bold p-0 mb-1">Getting Started</h1>
                <p class="text-white text-xl font-light">Explore the flexible ways to implement ChurchCMS for your
                    community.</p>
            </div>

        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="container mx-auto py-16">
        <div class="grid grid-cols-2 px-8 lg:px-0 lg:grid-cols-6 gap-10 text-opacity-75">
            <div class="col-span-2 bg-gradient-to-br from-purple-500 to-indigo-500 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">Try Preset Demo</h2>
                <p class="text-white leading-loose font-light">Our team has setup a demo church with 500+ members and
                    testable data
                    for events, files, bulletins and
                    sermons. Checking this demo is a great way to experience our software.</p>
                <a href="{{ route('preset-demo') }}"
                    class="mt-4 bg-indigo-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">View
                    Details</a>
            </div>
            <div class="col-span-2 bg-gradient-to-br from-green-500 to-teal-600 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">Signup for Free Trial</h2>
                <p class="text-white leading-loose font-light">ChurchCMS offers a 60 days Free Trial. You can signup and use
                    it for
                    your real data. No binding contract. No credit card needed. Just signup for Free Trail and explore the
                    tools.</p>
                <a href="{{ route('register') }}"
                    class="mt-4 bg-green-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Signup
                    Free Trial</a>
            </div>
            <div class="col-span-2 bg-gradient-to-br from-yellow-600 to-red-400 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">One-On-One Demo</h2>
                <p class="text-white leading-loose font-light">Our product expert will explain all the features in detail
                    and
                    walk through the working of the software. Book a slot at your convience. It just takes 30 minutes to
                    learn about the church management platform.</p>
                <a href="{{ route('register') }}"
                    class="mt-4 bg-yellow-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Schedule
                    a call</a>
            </div>
            <div class="col-span-2 lg:col-span-3 bg-gradient-to-tr from-purple-500 to-teal-500 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">On-Premises Hosted Edition</h2>
                <p class="text-white leading-loose font-light">If you have a technical team and looking to setup the
                    software on your
                    own cloud infrastruture, we offer the "White Label Self Hosting License" and "Service Agreements for
                    Technical Support". Contact our business development team for pricing details and NDA. </p>
                <a href="{{ route('contact') }}"
                    class="mt-4 bg-red-900 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Contact
                    Sales</a>
            </div>

            <div class="col-span-2 lg:col-span-3 bg-gradient-to-tr from-red-500 to-teal-500 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">Free License</h2>
                <p class="text-white leading-loose font-light">Thanks to our sponsors, we give away free licenses of self
                    hosted version to the selected non profit organisations in India, SriLanka, Nigeria and Ghana. Contact
                    our team to learn more about non-profit licensing and sponsorship program.</p>
                <a href="{{ route('contact') }}"
                    class="mt-4 bg-blue-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Contact
                    Us</a>
            </div>

            <div class="col-span-2 lg:col-span-3 bg-gradient-to-tr from-purple-500 to-green-400 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">Reseller Partner Program</h2>
                <p class="text-white leading-loose font-light">ChurchCMS team is looking forward to work with potential
                    partners to market our Church Management Software. By joining hands with a local partner, we hope we can
                    serve the church community better and reach wider markets. </p>
                <a href="{{ route('contact') }}"
                    class="mt-4 bg-blue-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Apply
                    Now</a>
            </div>
            <div class="col-span-2 lg:col-span-3 bg-gradient-to-tr from-purple-500 to-yellow-500 p-5 rounded-xl">
                <h2 class="text-xl text-white font-headings mb-3">Integration / Development Partners</h2>
                <p class="text-white leading-loose font-light">ChurchCMS team is openly looking for development partners and
                    integration partners. Potential development teams in the technical expertise of Live Streaming, Video
                    Communications, Chat Bot, CRM integrations, ERP integration are invited. </p>
                <a href="{{ route('contact') }}"
                    class="mt-4 bg-blue-800 bg-opacity-50 hover:bg-opacity-75 transition-colors duration-200 rounded-xl font-semibold py-2 px-4 inline-flex text-white">Apply
                    Now</a>
            </div>
        </div>
    </div>
    <!-- end -->



@endsection
