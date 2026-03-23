@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS :: Cloud Based Church Management Solution and Messaging Solution </title>
    <meta name="description"
        content="ChurchCMS is a package of tools and services that helps to manage a church effectively and engage church members using mobile technolgy solutions & cloud messaging solutions.">
    <meta property="og:url" content="https://churchcms.app/about />
                    <meta property=" og:title"
        content="ChurchCMS :: Cloud Based Church Management Solution and Messaging Solution" />
    <meta property="og:description"
        content="ChurchCMS is a package of tools and services that helps to manage a church effectively and engage church members using mobile technolgy solutions & cloud messaging solutions." />
@endsection

@section('content')
    <div class="bg-blue-800"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto py-16">
            <div class="px-3 lg:px-16 md:px-16 w-full lg:w-3/5 mx-auto lg:px-0">
                <p class="text-white text-center text-lg uppercase">ChurchCMS is a Next Gen</p>
                <h1 class="text-white text-center text-5xl font-bold">Church Management Software</h1>
                <h2 class="text-white text-center text-md leading-loose">ChurchCMS is a package of tools and services that
                    helps to manage
                    a church effectively and engage church members using mobile technolgy solutions & cloud messaging
                    solutions.</h2>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container mx-auto py-16 px-2 lg:px-0 md:px-0">
            <div class="w-full lg:w-4/5 mx-auto grid lg:grid-cols-2 gap-16">
                <div class="p-4 border shadow">
                    <h2 class="font-headings text-xl font-bold text-gray-900 mb-4">Improving Worship Experiences </h2>
                    <p class="text-base text-justify leading-loose">Our primary goal is to improve worship experiences in
                        churches. Be it
                        a
                        subscribed church member or a visting guest or a travelling member; by serving the rightful
                        information
                        at right time, we can create bigger attention and improve the worship experiences.</p>
                </div>
                <div class="p-4 border shadow">
                    <h2 class="font-headings text-xl font-bold text-gray-900 mb-4">Organising Data </h2>
                    <p class="text-base text-justify leading-loose">Modern server and database technologies made it easy
                        to Organize the Church Members Data. Our solution make it easy to store, retrive, search, export
                        the data as required. All data are secure and well protected by encryption technology. Auto
                        backup policies are in place to prevent data loss. </p>
                </div>
                <div class="p-4 border shadow">
                    <h2 class="font-headings text-xl font-bold text-gray-900 mb-4">Leveraging Technology </h2>
                    <p class="text-base text-justify leading-loose">By leveraging technology, we developed the tools that
                        help live stream the church services. Live streaming services for churches have brought new
                        potential to all houses of worship and other religious services. Live streaming for churches lets
                        pastors broadcast their sermon remotely to people around the world from anywhere. </p>
                </div>
                <div class="p-4 border shadow">
                    <h2 class="font-headings text-xl font-bold text-gray-900 mb-4">Engage Better </h2>
                    <p class="text-base text-justify leading-loose">The implement of messaging technology and in use of
                        Mobile Applications, let the Church ministry to engage the members effectively. E-Prayers and Online
                        Donations are the most liked features. Mobile app also serve as a great tool to improve enagement
                        and communication
                        between Volunteer groups. </p>
                </div>

            </div>
        </div>
    </div>

@endsection
