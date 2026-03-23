@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS :: Affordable Church Management Software small and medium sized churches </title>
    <meta name="description"
        content="ChurchCMS is a affordable church management software for small and medium sized churches. Our pricing is simple monthly subscription starts from INR 2000 ( 29 USD/ Month )">
    <meta property="og:url" content="https://churchcms.app/pricing/">
    <meta property=" og:title"
        content="ChurchCMS :: Affordable Church Management Software small and medium sized churches" />
    <meta property="og:description"
        content="ChurchCMS is a affordable church management software for small and medium sized churches. Our pricing is simple monthly subscription starts from INR 2000 ( 29 USD/ Month )" />
@endsection


@section('content')
    <div class="container-wrapper bg-blue-800 px-3 lg:px-0 md:px-0"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto">
            <div class="text-center py-10 leading-loose tracking-wider">
                <h1 class="text-white text-2xl lg:text-5xl uppercase font-bold tracking-widest">try free for 60 days</h1>
                <h3 class="text-white text-lg lg:text-2xl font-medium ">Flexible pricing plans to best fit your church.</h3>
                <p class="text-white text-sm font-medium ">* Monthly SaaS Pricing available only to Indian Region</p>
                <div class="pt-12 lg:pb-10">
                    <a href="{{ route('register') }}"
                        class="uppercase text-white border-2 font-semibold px-4 lg:px-8 py-2 lg:py-4 hover:bg-white hover:text-black">start
                        a free trail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-wrapper">
        <div class="container mx-auto py-8">
            <div class="px-8 lg:px-0 grid grid-cols-1 lg:grid-cols-4 gap-2">
                <div class="bg-white border shadow-md rounded-md mt-10" itemscope itemtype="https://schema.org/Product">
                    <div class="bg-gradient-to-tr from-purple-300 to-blue-400 p-4 rounded-t-md">
                        <h2 class="uppercase text-center font-bold" itemprop="name"
                            content="ChurchCMS - Starter Monthly Subscription Plan">Free</h2>
                        <p class="text-4xl text-center">
                            <span itemprop="priceCurrency" content="INR">&#8377;</span>
                            <span itemprop="price" content="0">0</span>
                        </p>
                        <p class="text-base text-center -mt-2 mb-2">per month</p>
                    </div>
                    <ul class="list-reset px-8 leading-loose mt-6">
                        <li class="border-b py-2 mb-2">&#10003; 100 Users</li>
                        <li class="border-b py-2 mb-2">&#10003; CRM Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Membership Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Giving & Donation Module</li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; Ad Supported - ChurchCMS Branded <strong>Mobile
                                App</strong></li>
                        <li class="border-b py-2 mb-2">&#10060; Website Builder </li>
                        <li class="border-b py-2 mb-2">&#10060; Live Stream </li>
                        <li class="border-b py-2 mb-2">&#10060; Video Calls </li>
                        <li class="border-b py-2 mb-2">&#10060; Chat Bots </li>
                        <li class="border-b py-2 mb-2">&#10060; Newsletter Blaster </li>
                        <li class="border-b py-2 mb-2">&#10060; Mass Texting </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; 5 GB Media Space</li>

                        <li class="border-b py-2 mb-2">&#10003; &#42; Push Notifications - 3000 </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; SMS Credits - 100 </li>
                        <li class="border-b py-2 mb-8">&#10003; &#42; Email Credits - 300 </li>
                    </ul>
                </div>
                <div class="bg-white border shadow-md rounded-md mt-10" itemscope itemtype="https://schema.org/Product">
                    <div class="bg-gradient-to-br from-purple-300 to-red-400 p-4 rounded-t-md">
                        <h2 class="uppercase text-center font-bold" itemprop="name"
                            content="ChurchCMS - Starter Monthly Subscription Plan">Starter</h2>
                        <p class="text-4xl text-center">
                            <span itemprop="priceCurrency" content="INR">&#8377;</span>
                            <span itemprop="price" content="2000.00">2000</span>
                        </p>
                        <p class="text-base text-center -mt-2 mb-2">per month</p>
                    </div>
                    <ul class="list-reset px-8 leading-loose mt-6">
                        <li class="border-b py-2 mb-2">&#10003; 500 Users</li>
                        <li class="border-b py-2 mb-2">&#10003; CRM Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Membership Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Giving & Donation Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Branded <strong>Mobile App</strong> (Your church Brand)</li>
                        <li class="border-b py-2 mb-2">&#10060; Website Builder </li>
                        <li class="border-b py-2 mb-2">&#10060; Live Stream </li>
                        <li class="border-b py-2 mb-2">&#10060; Video Calls </li>
                        <li class="border-b py-2 mb-2">&#10060; Chat Bots </li>
                        <li class="border-b py-2 mb-2">&#10003; Newsletter Blaster </li>
                        <li class="border-b py-2 mb-2">&#10003; Mass Texting </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; 5 GB Media Space</li>

                        <li class="border-b py-2 mb-2">&#10003; &#42; Push Notifications - 30000 </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; SMS Credits - 2000 </li>
                        <li class="border-b py-2 mb-8">&#10003; &#42; Email Credits - 10000 </li>
                    </ul>
                </div>
                <div class="bg-white border shadow-md rounded-md mt-10" itemscope itemtype="https://schema.org/Product">
                    <div class="bg-gradient-to-br from-blue-300 to-green-500 p-4 rounded-t-md">
                        <h2 class="uppercase text-center font-bold" itemprop="name"
                            content="ChurchCMS - Extended Monthly Subscription Plan">Extended</h2>
                        <p class="text-4xl text-center">
                            <span itemprop="priceCurrency" content="INR">&#8377;</span>
                            <span itemprop="price" content="5000.00">5000</span>
                        </p>
                        <p class="text-base text-center -mt-2 mb-2">per month</p>
                    </div>
                    <ul class="list-reset px-8 leading-loose mt-6">
                        <li class="border-b py-2 mb-2">&#10003; Unlimited Users</li>
                        <li class="border-b py-2 mb-2">&#10003; CRM Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Membership Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Giving & Donation Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Branded <strong>Mobile App</strong> (Your church Brand)</li>
                        <li class="border-b py-2 mb-2">&#10003; Website Builder </li>
                        <li class="border-b py-2 mb-2">&#10060; Live Stream </li>
                        <li class="border-b py-2 mb-2">&#10060; Video Calls </li>
                        <li class="border-b py-2 mb-2">&#10060; Chat Bots </li>
                        <li class="border-b py-2 mb-2">&#10003; Newsletter Blaster </li>
                        <li class="border-b py-2 mb-2">&#10003; Mass Texting </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; 500 GB Media Space</li>

                        <li class="border-b py-2 mb-2">&#10003; &#42; Push Notifications - 30000 </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; SMS Credits - 5000 </li>
                        <li class="border-b py-2 mb-8">&#10003; &#42; Email Credits - 50000 </li>
                    </ul>
                </div>
                <div class="bg-white border shadow-md rounded-md mt-10" itemscope itemtype="https://schema.org/Product">
                    <div class="bg-gradient-to-br from-blue-400 to-purple-600 p-4 rounded-t-md ">
                        <h2 class="uppercase text-center font-bold" itemprop="name"
                            content="ChurchCMS - Premium Monthly Subscription Plan">Premium</h2>
                        <p class="text-4xl text-center">
                            <span itemprop="priceCurrency" content="INR">&#8377;</span>
                            <span itemprop="price" content="15000.00">15000</span>
                        </p>
                        <p class="text-base text-center -mt-2 mb-2">per month</p>
                    </div>
                    <ul class="list-reset px-8 leading-loose mt-6">
                        <li class="border-b py-2 mb-2">&#10003; Unlimited Users</li>
                        <li class="border-b py-2 mb-2">&#10003; CRM Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Membership Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Giving & Donation Module</li>
                        <li class="border-b py-2 mb-2">&#10003; Branded <strong>Mobile App</strong> (Your church Brand)</li>
                        <li class="border-b py-2 mb-2">&#10003; Website Builder </li>
                        <li class="border-b py-2 mb-2">&#10003; Live Stream </li>
                        <li class="border-b py-2 mb-2">&#10003; Video Calls </li>
                        <li class="border-b py-2 mb-2">&#10003; Chat Bots </li>
                        <li class="border-b py-2 mb-2">&#10003; Newsletter Blaster </li>
                        <li class="border-b py-2 mb-2">&#10003; Mass Texting </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; 500 GB Media Space</li>

                        <li class="border-b py-2 mb-2">&#10003; &#42; Push Notifications - 30000 </li>
                        <li class="border-b py-2 mb-2">&#10003; &#42; SMS Credits - 5000 </li>
                        <li class="border-b py-2 mb-8">&#10003; &#42; Email Credits - 50000 </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-wrapper">
        <div class="bg-white container mx-auto mt-0 mb-6 p-8 shadow-md rounded-md">
            <p class="mb-4">* Android Mobile App: Mobile App will be built using your brand / church logo and
                published in
                Google Play.</p>
            <p class="mb-4">** Dedicated Website : A dedicated website will be designed based on your design
                preferences and
                hosted in our web servers.</p>

            <p class="mb-4">*** Live Broadcasting : Max of One Live broadcasting session with Max of 500
                concurrent
                conections</p>
        </div>
    </div>

    <div class="container-wrapper">
        <div class="bg-white container mx-auto my-8 p-8 shadow-md rounded-md flex items-center">
            <div class="w-1/5">
                <img src="{{ asset('images/self_hosted_church_manager_software.png') }}">
            </div>
            <div class="w-4/5">
                <h2 class="font-bold text-2xl mb-4">Self Hosted Edition</h2>
                <p class="leading-loose">We also offer Self Hosted Editions with developer frindley full source code and
                    Git
                    Access. The Licensing is
                    based on number of domains. The price starts from <strong>USD 799</strong>. For more details, please
                    contact us through Live
                    Chat or Contact Form</p>
                <div class="my-6 flex flex-wrap lg:space-x-4 md:space-x-4">
                    <p class="button px-3 py-2 bg-blue-500 text-white rounded-md text-sm lg:text-base md:text-base">Host on
                        Web Servers / VPS </p>
                    <p
                        class="button px-3 py-2 bg-purple-500 text-white rounded-md text-sm lg:text-base md:text-base my-2 lg:my-0 md:my-0">
                        Host on Private Cloud or Amazon VPC </p>
                </div>
            </div>
        </div>
    </div>

@endsection
