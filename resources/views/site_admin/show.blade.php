@extends('layouts.siteadmin.layout')

@section('content')
    <div class="relative">
        @include('partials.message')
        <div class="flex flex-row justify-between">
            <form method="post" action="{{ url('/siteadmin/index/show/' . $subscriptions->id) }}" class="mb-0">
                {{ csrf_field() }}
                @if ($membership == 'guest')
                    <input type="hidden" name="membership_type" value="member">
                    <a>
                        <button type="submit"
                            class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">Click
                            To Activate
                        </button>
                    </a>
                @else
                    <input type="hidden" name="membership_type" value="guest">
                    <a>
                        <button type="submit"
                            class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">Click
                            to Deactivate
                        </button>
                    </a>
                @endif
            </form>
        </div>
        <div class="flex flex-row justify-between">
            <table class="w-full">
                <caption>
                    <h1 class="admin-h1 mb-6">Statistics</h1>
                </caption>
                <thead class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Modules</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Total Available Count</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Remaining Count</th>
                    </tr>
                </thead>
                <tbody class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <td class="py-3 px-2"> Total Number of Members </td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->no_of_members }}</td>
                        <td class="py-3 px-2">
                            @if ($membercount >= $subscriptions->plan->no_of_members)
                                <a href="{{ url('/pricing') }}">
                                    <button type="submit"
                                        class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">
                                        Upgrade Plan to Add More Members
                                    </button>
                                </a>
                            @else
                                {{ $subscriptions->plan->no_of_members - $membercount }}
                            @endif
                        </td>
                    </tr>
                    <tr class="border-t-2 border-b-2">
                        <td class="py-3 px-2"> Total Number of Events </td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->no_of_events }}</td>
                        <td class="py-3 px-2">
                            @if ($eventcount >= $subscriptions->plan->no_of_events)
                                <a>
                                    <button type="submit"
                                        class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">
                                        Upgrade Plan to Add More Events
                                    </button>
                                </a>
                            @else
                                {{ $subscriptions->plan->no_of_events - $eventcount }}
                            @endif
                        </td>
                    </tr>
                    <tr class="border-t-2 border-b-2">
                        <td class="py-3 px-2"> Total Number of Folders </td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->no_of_folders }}</td>
                        <td class="py-3 px-2">
                            @if ($gallerycount >= $subscriptions->plan->no_of_folders)
                                <a>
                                    <button type="submit"
                                        class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">
                                        Upgrade Plan to Add More Folders
                                    </button>
                                </a>
                            @else
                                {{ $subscriptions->plan->no_of_folders - $gallerycount }}
                            @endif
                        </td>
                    </tr>
                    <tr class="border-t-2 border-b-2">
                        <td class="py-3 px-2"> Total Number of Files </td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->no_of_files }}</td>
                        <td class="py-3 px-2">
                            @if ($filecount >= $subscriptions->plan->no_of_files)
                                <a>
                                    <button type="submit"
                                        class="no-underline text-white  px-4 my-3 mx-1 flex items-center custom-green py-1 justify-center">
                                        Upgrade Plan to Add More Files
                                    </button>
                                </a>
                            @else
                                {{ $subscriptions->plan->no_of_files - $filecount }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex flex-row justify-between">
            <table class="w-full">
                <caption>
                    <h1 class="admin-h1 mb-6">Subscription History</h1>
                </caption>
                <thead class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">ID</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Church ID</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">User ID</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Plan</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Amount</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Status</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Subscription Start Date</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Subscription End Date</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <td class="py-3 px-2">{{ $subscriptions->id }}</td>
                        <td class="py-3 px-2">{{ ucwords($subscriptions->church->name) }}</td>
                        <td class="py-3 px-2">{{ ucwords($subscriptions->user->name) }}</td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->cycle }}days</td>
                        <td class="py-3 px-2">{{ $subscriptions->plan->amount }}</td>
                        <td class="py-3 px-2">{{ ucwords($subscriptions->status) }}</td>
                        <td class="py-3 px-2">
                            @if ($subscriptions->payment_details['addedon'] == '')
                                --
                            @else
                                {{ date('d-m-Y', strtotime($subscriptions->payment_details['addedon'])) }}
                            @endif
                        </td>
                        <td class="py-3 px-2">{{ date('d-m-Y', strtotime($subscriptions->end_date)) }}</td>
                        <td class="py-3 px-2"><a
                                href="{{ url('/siteadmin/index/subscription_details/' . $subscriptions->id) }}">View
                                Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
