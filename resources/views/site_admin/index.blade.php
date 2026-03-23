@extends('layouts.siteadmin.layout')

@section('content')
    <div class="relative">
        <div class="flex flex-row justify-between">
            <table class="w-full">
                <caption>
                    <h1 class="admin-h1 mb-6">Church Statistics</h1>
                </caption>
                <thead class="bg-grey-light">
                    <tr class="border-t-2 border-b-2">
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">ID</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Church Name</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">User Name</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Plan Name</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Status</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">End Date</th>
                        <th class="text-left text-sm px-2 py-2 text-grey-darker">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-grey-light">
                    @foreach ($subscriptions as $subscription)
                        <tr class="border-t-2 border-b-2">
                            <td class="py-3 px-2">{{ $subscription->church->id }}</td>
                            <td class="py-3 px-2">{{ ucwords($subscription->church->name) }}</td>
                            <td class="py-3 px-2">{{ ucwords($subscription->user->name) }}</td>
                            <td class="py-3 px-2">{{ ucwords($subscription->plan->name) }}</td>
                            <td class="py-3 px-2">{{ ucwords($subscription->status) }}</td>
                            <td class="py-3 px-2">{{ $subscription->end_date }}</td>
                            <td class="py-3 px-2"><a href="{{ url('/siteadmin/index/show/' . $subscription->id) }}">View
                                    Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
