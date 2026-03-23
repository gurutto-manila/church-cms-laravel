@extends('layouts.welcome')

@section('content')
    <!-- start -->
    <div class="container-wrapper bg-blue-800 py-12"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container  mx-auto h-full">
            <div
                class="w-full lg:w-2/3 mx-auto text-center flex flex-col justify-center items-center py-5 leading-loose tracking-wider h-full">
                <h1 class="text-white text-5xl">{!! __('policy.privacy_policy') !!}</h1>
                <h2 class="text-base text-white">{!! __('policy.text_1') !!}</h2>
            </div>

        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="bg-gray-200 py-5">
        <div class="container mx-auto">
            <div>

                <div class="my-3 w-full px-3 lg:px-0 md:px-0 lg:w-3/5 mx-auto leading-loose text-justify ">
                    <h2 class="text-xl lg:text-2xl text-gray-800 py-3 font-headings">
                        {!! __('policy.text_2') !!}</h2>
                    <p class="text-sm text-gray-700 py-3">{!! __('policy.text_3') !!}</p>
                    <p class="text-sm text-gray-700 py-3">{!! __('policy.text_4') !!}</p>
                    <p class="text-sm text-gray-700 py-3">{!! __('policy.text_5') !!}</p>
                    <h2 class="text-2xl text-gray-800 py-3 font-headings">{!! __('policy.text_6') !!}</h2>
                    <p class="text-sm text-gray-700 py-3">
                        {!! __('policy.text_7') !!}
                    </p>
                    <p class="text-sm text-gray-700 py-3">
                        {!! __('policy.text_8') !!}
                    </p>
                    <p class="text-sm text-gray-700 py-3">
                        {!! __('policy.text_9') !!}
                    </p>
                    <h2 class="text-xl lg:text-2xl text-gray-800 py-3 font-headings">{!! __('policy.text_10') !!}</h2>
                    <p class="text-sm text-gray-700 py-3">
                        {!! __('policy.text_11') !!}
                    </p>
                    <p class="text-sm text-gray-700 py-3">
                        {!! __('policy.text_12') !!}
                    </p>
                </div>
            </div>
        </div>
        <!-- end -->

    </div>
    <!-- end -->



@endsection
