@extends('layouts.welcome')

@section('meta-contents')
    <title>ChurchCMS :: Contact Form and Contact Points </title>
    <meta name="description"
        content="Contact ChurchCMS :: Contact our team. Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions.">
    <meta property="og:url" content="https://churchcms.app/contact /">
    <meta property=" og:title" content="ChurchCMS :: Contact Form and Contact Points" />
    <meta property="og:description"
        content="Contact ChurchCMS :: Contact our team. Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions." />
@endsection


@section('content')
    <div class="bg-blue-800"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto py-16 text-center text-white">
            <div class="w-full lg:w-1/2 mx-auto px-8">
                <h1 class="text-5xl font-bold">Contact Us</h1>
                <p class="text-white my-3 leading-loose">Whether you have a question about features, trials, pricing, need a
                    demo, or
                    anything else, our team is ready to answer all your questions.</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto w-full flex flex-col lg:flex-row py-16 px-8 lg:px-8  space-y-6 lg:space-y-0 lg:space-x-6">
        <div class="w-full lg:w-3/5 p-5 bg-white shadow">
            <h2 class="font-headings text-xl mb-5">Contact Form</h2>
            <div id="wufoo-zg56em80yqbbku"> Fill out my <a href="https://amp2.wufoo.com/forms/zg56em80yqbbku">online
                    form</a>. </div>
        </div>
        <div class="w-full lg:w-2/5 px-8 py-5 bg-white shadow">
            <div class="flex flex-col">
                <div class="mb-8">
                    <h3 class="font-headings text-xl mb-4 font-bold">Email</h3>
                    <p class="leading-loose mb-4">We'd love to help answer any questions you might have. Shoot us an email
                        and
                        we'll
                        be glad to help.</p>
                    <a href="mailto:info@churchcms.app"
                        class="button uppercase tracking-wide bg-blue-600 text-white teaching-wide px-6 py-3 rounded-md">info@churchcms.app</a>
                </div>
                <div class="mb-8">
                    <h3 class="font-headings text-xl mb-4 font-bold">Phone</h3>
                    <p class="leading-loose mb-4">Have a question about ChurchCMS that you'd like to talk through? Give us a
                        call
                        and we'd love to help.</p>
                    <a href="tel:+919843033406"
                        class="button uppercase tracking-wide bg-blue-600 text-white teaching-wide px-6 py-3 rounded-md">+91
                        9843033406</a>
                </div>
                <div class="mb-8">
                    <h3 class="font-headings text-xl mb-4 font-bold">Visit us</h3>
                    <img src="{{ asset('images/india_flag.svg') }}" class="mb-3">
                    <p class="text-lg font-bold">GegoSoft</p>
                    <p>8-6/8, Vaigai Nathi Street</p>
                    <p>Mahathma Gandhi Nagar</p>
                    <p>Madurai - 625014 </p>
                    <p>Tamilnadu. INDIA</p>
                </div>
                <div class="mb-8">
                    <h3 class="font-headings text-xl mb-4 font-bold">Social</h3>
                    <p class="leading-loose mb-4">Follow us or reach us through official social media channels.</p>
                    @include('layouts.partials.__social')

                </div>
            </div>
        </div>
    </div>
@endsection
@push('wufoo-form')
    <script type="text/javascript">
        var zg56em80yqbbku;
        (function(d, t) {
            var s = d.createElement(t),
                options = {
                    'userName': 'amp2',
                    'formHash': 'zg56em80yqbbku',
                    'autoResize': true,
                    'height': '944',
                    'async': true,
                    'host': 'wufoo.com',
                    'header': 'hide',
                    'ssl': true
                };
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') +
                'secure.wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
                var rs = this.readyState;
                if (rs)
                    if (rs != 'complete')
                        if (rs != 'loaded') return;
                try {
                    zg56em80yqbbku = new WufooForm();
                    zg56em80yqbbku.initialize(options);
                    zg56em80yqbbku.display();
                } catch (e) {}
            };
            var scr = d.getElementsByTagName(t)[0],
                par = scr.parentNode;
            par.insertBefore(s, scr);
        })(document, 'script');
    </script>
@endpush
