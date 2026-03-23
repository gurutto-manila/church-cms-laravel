@extends('layouts.welcome')

@section('content')
    <!-- start -->
    <div class="container-wrapper bg-blue-800"
        style="background-image: url('{{ asset('images/pattern-bg.svg') }}'); background-repeat: repeat no-repeat; background-position:bottom;">
        <div class="container mx-auto">
            <div class="text-center flex flex-col justify-center items-center py-16 tracking-wider ">
                <img src="{{ url('uploads/icons/information.svg') }}" class="w-12 h-12">
                <h1 class="text-white text-5xl uppercase font-bold">Faq</h1>
                <h2 class="text-white text-xl py-1">{!! __('faq.faq_heading') !!}</h2>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="bg-gray-100 py-5">
        <div class="container mx-auto">
            <div class="flex flex-col justify-center items-center py-3">
                <faq></faq>
            </div>
        </div>
    </div>
    <!-- end -->
@endsection
