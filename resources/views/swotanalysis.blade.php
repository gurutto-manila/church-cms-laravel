@extends('layouts.app')

@section('content')
    <!-- start -->
    <div class="container-wrapper about-bg">
        <div class="container mx-auto h-full">
            <div class="text-center flex flex-col justify-center items-center py-5 leading-loose tracking-wider h-full">
                <h1 class="text-white text-5xl uppercase font-bold">SWOT Analysis</h1>
                <h2 class="text-xl text-left text-white">{!! __('swotanalysis.text_1') !!}</h2>
            </div>

        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="bg-gray-100 py-5">
        <div class="container mx-auto">
            <!-- <div class="flex flex-col justify-center items-center py-3">
      <img src="{{ url('uploads/icons/information.svg') }}" class="w-12 h-12">
      <h1 class="text-gray-700 text-2xl py-1">{!! __('swotanalysis.text_1') !!}</h1>
     </div> -->
            <div>
                <!-- <h2 class="text-2xl text-gray-800 py-3 italic text-center">What we Believe</h2> -->
                <div class="my-3 w-full lg:w-2/3 mx-auto px-3 lg:px-0 md:px-0">
                    <ul class="list-reset leading-loose flex flex-wrap">
                        <li class="py-3 w-full lg:w-1/2">
                            <h2 class="text-gray-700 text-xl my-3">{!! __('swotanalysis.text_2') !!}</h2>
                            <p class="text-sm text-gray-600 text-justify">
                            <ul class="list-reset">

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>1. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_3') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>2. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_4') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>3.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_5') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_6') !!}</p>
                                </li>

                            </ul>
                            </p>
                        </li>

                        <!-- end -->
                        <!-- start -->

                        <li class="py-3 w-full lg:w-1/2">
                            <h2 class="text-gray-700 text-xl my-3">{!! __('swotanalysis.text_7') !!}</h2>
                            <p class="text-sm text-gray-600 text-justify">
                            <ul class="list-reset">

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>1. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_8') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>2. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_9') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>3.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_10') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_11') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_12') !!}</p>
                                </li>

                            </ul>
                            </p>
                        </li>

                        <!-- end -->
                        <!-- start -->

                        <li class="py-3 w-full lg:w-1/2">
                            <h2 class="text-gray-700 text-xl my-3">{!! __('swotanalysis.text_13') !!}</h2>
                            <p class="text-sm text-gray-600 text-justify">
                            <ul class="list-reset">

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>1. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_14') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>2. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_15') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>3.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_16') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_17') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_18') !!}</p>
                                </li>

                            </ul>
                            </p>
                        </li>


                        <!-- end -->
                        <!-- start -->

                        <li class="py-3 w-full lg:w-1/2">
                            <h2 class="text-gray-700 text-xl my-3">{!! __('swotanalysis.text_19') !!}</h2>
                            <p class="text-sm text-gray-600 text-justify">
                            <ul class="list-reset">

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>1. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_20') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1">
                                    <span>2. </span>
                                    <p class="mx-2"> {!! __('swotanalysis.text_21') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>3.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_22') !!}</p>
                                </li>

                                <li class="text-sm text-gray-600 text-justify flex items-start py-1 ">
                                    <span>4.</span>
                                    <p class="mx-2">{!! __('swotanalysis.text_23') !!}</p>
                                </li>

                            </ul>
                            </p>
                        </li>


                        <!-- end -->
                        <!-- start -->

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection
