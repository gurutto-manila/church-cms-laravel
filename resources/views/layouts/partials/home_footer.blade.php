 <footer class="border-t">
     <div class="bg-white">
         <div class="container mx-auto flex flex-wrap justify-between py-8">
             <!-- grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 -->

             <div class="px-4 lg:px-0 w-full lg:w-1/4 md:w-1/3">
                 <div class="mb-4"><a href="https://gegosoft.com"><img
                             src="https://gegosoft.com/wp-content/uploads/2016/11/gegosoft_logo_web.png" alt="GegoSoft"
                             class="h-12 object-contain "></a></div>
                 <p class="text-sm text-justify leading-loose font-navigation">ChurchCMS is developed, marketed and
                     maintained by <a href="https://gegosoft.com">GegoSoft</a>. GegoSoft is a global technology
                     solutions provider,
                     based in Madurai, Tamilnadu. India.</p>
             </div>
             <div class="col-span-2 px-4 lg:px-0 w-full lg:w-2/4 md:w-2/3">
                 <div class="flex flex-wrap mt-8 font-navigation">
                     <!-- grid grid-cols-3 gap:3 -->
                     <ul class="list-disc text-base pl-4 leading-loose w-full lg:w-1/3 md:w-1/3">
                         <li><a href="{{ route('about') }}">About Us</a></li>
                         <li><a href="{{ route('features') }}">Features</a></li>
                         <li><a href="{{ route('getting-started') }}">Getting Started</a></li>
                         <li><a href="{{ route('resources') }}">Resources</a></li>
                         <li><a href="{{ route('church-website-templates') }}">Church Website Templates</a></li>
                     </ul>
                     <ul class="list-disc text-base pl-4 leading-loose w-full lg:w-1/3 md:w-1/3">
                         <li><a href="{{ url('pricing') }}">Pricing</a></li>
                         <li><a href="{{ route('faq') }}">FAQ</a></li>
                         <li><a href="{{ route('self-hosted') }}">Hosted Edition</a></li>
                         <li><a href="{{ route('free-license') }}">Free License</a></li>
                     </ul>
                     <ul class="list-disc text-base pl-4 leading-loose w-full lg:w-1/3 md:w-1/3">
                         <li><a href="{{ route('downloads') }}">Downloads</a></li>
                         <li><a href="{{ route('contact') }}">Contact us</a></li>
                         <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                         <li><a href="{{ route('tos') }}">Terms of Service</a></li>
                         <li><a href="{{ route('cookie-policy') }}">Cookie Policy</a></li>
                     </ul>
                 </div>
             </div>

             <div class="mt-8 px-4 lg:px-0 w-full lg:w-1/5 md:w-1/3">
                 <p class="text-sm text-justify mb-4 font-navigation">E: <a
                         href="mailto:info@churchcms.app">info@churchcms.app</p>
                 <p class="text-sm text-justify mb-4 font-navigation">M: <a href="tel:919843033406">+91 9843033406</p>
                 @include('layouts.partials.__social')

             </div>

         </div>
     </div>
     <div class="py-2 bg-gray-400">
         <div class="container mx-auto text-sm font-navigation">
             &copy; 2024. GegoSoft. All Rights Reserved.
         </div>
     </div>
 </footer>
