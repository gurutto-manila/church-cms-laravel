@foreach ($plans as $plan)
    <div class="w-full lg:w-1/4 md:w-1/4 lg:mx-3 my-2 lg:my-0">
        <div class=" hover:shadow-lg">
            <div class="text-center py-3 bg-white">
                <p class="uppercase text-black font-bold tracking-widest">{{ $plan->display_name }}</p>
                <div class="flex justify-center items-center">
                    <img src="{{ url('uploads/icons/rupee-indian.svg') }}" class="w-4 h-4">
                    <h1 class="text-5xl font-bold pricing-amount">{{ $plan->amount }}</h1>
                </div>
                <span class="font-light text-base capitalize">per month</span>
            </div>
            <div class="bg-white border-t border-b">
                <div class="py-2 text-center text-sm  mx-auto leading-loose px-10">
                    <p class="text-gray-700 font-medium flex items-center py-1">
                        <img src="{{ url('uploads/icons/check.svg') }}" class="w-3 h-3">
                        <span class="mx-2">0 - {{ $plan->no_of_members }} Members</span>
                    </p>
                    <p class="text-gray-700 font-medium flex items-center py-1">
                        <img src="{{ url('uploads/icons/check.svg') }}" class="w-3 h-3">
                        <span class="mx-2">Unlimited Download</span>
                    </p>
                    <p class="text-gray-700 font-medium flex items-center py-1">
                        <img src="{{ url('uploads/icons/check.svg') }}" class="w-3 h-3">
                        <span class="mx-2">100 Messages, 30 Mails</span>
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center py-5 bg-white py-1">
                <a href="{{ url('/admin/payment/index/' . $plan->id) }}"
                    class="capitalize border rounded border-gray-400 py-1 px-16 font-semibold pricing-buy">buy</a>
            </div>
        </div>
    </div>
@endforeach
