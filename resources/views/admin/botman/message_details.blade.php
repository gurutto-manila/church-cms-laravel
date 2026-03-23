@extends('layouts.admin.layout')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="py-3">
        <div class="flex justify-between mb-4 items-center">
            <h2 class="text-lg">Botman Messages</h2>
        </div>
        <div class="container">
            <!-- Content wrapper start -->
            <div class="content-wrapper">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card m-0">
                            <!-- Row start -->
                            <div class="row no-gutters">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                    <div class="chat-container">
                                        <ul class="chat-box chatContainerScroll">
                                            @if (count($query) > 0)
                                                @foreach ($query as $result)
                                                    @if ($result['message'] != '')
                                                        <li class="chat-left">
                                                            <div class="chat-text">{!! $result['message'] !!}</div>
                                                            <div class="chat-hour">08:55 <span
                                                                    class="fa fa-check-circle"></span></div>
                                                        </li>
                                                    @endif
                                                    @if ($result['reply'] != '')
                                                        <li class="chat-right">
                                                            <div class="chat-hour">08:56 <span
                                                                    class="fa fa-check-circle"></span></div>
                                                            <div class="chat-text">{!! $result['reply'] !!}</div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>

                    </div>
                    <!-- Row end -->

                </div>
                <!-- Content wrapper end -->

            </div>

        </div>
    @endsection
