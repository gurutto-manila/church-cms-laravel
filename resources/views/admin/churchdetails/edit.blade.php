@extends('layouts.admin.layout')

@section('content')
    <div class="w-full mx-2">
        <h1 class="admin-h1 mb-3 flex items-center">
            <a href="{{ url('/admin/churchdetails') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                <img src="{{ url('/uploads/icons/back.svg') }}" class="w-3 h-3">
            </a>
            <span class="mx-3">Edit Church Details</span>
        </h1>
        @include('partials.message')
        <div class="bg-white shadow my-5">
            <div class="px-3 py-3 mx-2">
                <form method="POST" action="{{ url('/admin/churchdetails/edit/' . \Auth::user()->church_id) }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="flex items-center">
                                <img src="{{ $churchdetail['church_logo'] }}"
                                    class="img-responsive w-20 h-20 rounded-full">
                                <div class="mx-2">
                                    <label class="tw-label cursor-pointer text-xs text-gray-600"> Change Church Logo
                                        <input type="file" name="church_logo" id="church_logo">
                                    </label>
                                </div>
                            </div>
                            <span class="text-red-500 text-xs font-semibold">{{ $errors->first('church_logo') }}</span>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="short_summary" class="tw-form-label">Short Summary</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <textarea type="textarea" name="short_summary" id="short_summary"
                                        class="tw-form-control w-full"
                                        placeholder="Short Summary">{{ old('short_summary', $churchdetail['short_summary']) }}</textarea>
                                </div>
                                <span
                                    class="text-red-500 text-xs font-semibold">{{ $errors->first('short_summary') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="long_summary" class="tw-form-label">Long Summary</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <textarea type="textarea" name="long_summary" id="long_summary"
                                        class="tw-form-control w-full" rows="3"
                                        placeholder="Long Summary">{{ old('long_summary', $churchdetail['long_summary']) }}</textarea>
                                </div>
                                <span
                                    class="text-red-500 text-xs font-semibold">{{ $errors->first('long_summary') }}</span>
                            </div>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="quotes" class="tw-form-label">Quotes</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <textarea type="textarea" name="quotes" id="quotes" class="tw-form-control w-full"
                                        rows="3"
                                        placeholder="Quotes">{{ old('quotes', $churchdetail['quotes']) }}</textarea>
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('quotes') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="phone" class="tw-form-label">Phone</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="phone" id="phone" class="tw-form-control w-full"
                                        placeholder="Phone" value="{{ old('phone', $churchdetail['phone']) }}">
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="email" class="tw-form-label">Email</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="email" id="email" class="tw-form-control w-full"
                                        placeholder="Email" value="{{ old('email', $churchdetail['email']) }}">
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="address" class="tw-form-label">Address</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2 relative">
                                    <input type="text" name="address" class="tw-form-control w-full" id="address"
                                        value="{{ old('address', $churchdetail['address']) }}"
                                        placeholder="Enter Address" required>
                                    <span class="absolute m-2 top-0 right-0">
                                        <a href="#" onclick="codeAddress(); return false;" dusk="getCords" id="getCords">
                                            <img src="{{ url('/uploads/icons/search.svg') }}" class="w-4 h-4">
                                        </a>
                                    </span>
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('address') }}</span>
                            </div>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="tw-form-group w-full lg:w-3/4">
                                <div class="lg:mr-8">
                                    <div id="map_canvas" class="tw-form-control w-full" style="height: 250px;"></div>
                                </div>
                            </div>
                            <div class="form-group" hidden>
                                <label for="latitude" class="col-md-4 control-label">Latitude</label>
                                <div class="col-md-6">
                                    <input id="latitude" type="text" class="tw-form-control w-1/2" name="latitude"
                                        value="{{ old('latitude', $churchdetail['latitude']) }}">
                                </div>
                            </div>

                            <div class="form-group" hidden>
                                <label for="longitude" class="col-md-4 control-label">Longitude</label>
                                <div class="col-md-6">
                                    <input id="longitude" type="text" class="tw-form-control w-1/2" name="longitude"
                                        value="{{ old('longitude', $churchdetail['longitude']) }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="website" class="tw-form-label">Website</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="website" id="website" class="tw-form-control w-full"
                                        placeholder="Website" value="{{ old('website', $churchdetail['website']) }}">
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('website') }}</span>
                            </div>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="facebook" class="tw-form-label">Facebook</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="facebook" id="facebook" class="tw-form-control w-full"
                                        placeholder="Facebook" value="{{ old('facebook', $churchdetail['facebook']) }}">
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('facebook') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col lg:flex-row">
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="twitter" class="tw-form-label">Twitter</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="twitter" id="twitter" class="tw-form-control w-full"
                                        placeholder="Twitter" value="{{ old('twitter', $churchdetail['twitter']) }}">
                                </div>
                                <span class="text-red-500 text-xs font-semibold">{{ $errors->first('twitter') }}</span>
                            </div>
                        </div>
                        <div class="tw-form-group w-full lg:w-1/2">
                            <div class="lg:mr-8">
                                <div class="mb-2">
                                    <label for="instagram" class="tw-form-label">Instagram</label>
                                </div>
                                <div class="w-full lg:w-3/4 my-2">
                                    <input type="text" name="instagram" id="instagram" class="tw-form-control w-full"
                                        placeholder="Instagram"
                                        value="{{ old('instagram', $churchdetail['instagram']) }}">
                                    <span class="text-danger text-xs">{{ $errors->first('instagram') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-6">
                        <input type="submit" id="submit-btn" value="Submit" name="submit"
                            class="btn btn-primary submit-btn cursor-pointer">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <style>
        .tw-label {
            color: #3492e2;
        }

        .tw-label input[type="file"] {
            display: none;
        }

    </style>

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyBO00niIGAyv2GkZZi-W26Ii6ff3YEyu_w">
    </script>
    <script type="text/javascript">
        var map;

        function initialize() {
            var address = (document.getElementById('address'));
            var autocomplete = new google.maps.places.Autocomplete(address);
            autocomplete.setTypes(['geocode']);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
            });
            longlat(9.9252007, 78.11977539999998);
        }

        function longlat(lat, lng) {
            //Map
            var myLatlng = new google.maps.LatLng(lat, lng);

            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            var marker = new google.maps.Marker({
                draggable: true,
                position: myLatlng,
                map: map,
                title: "Your location"
            });
            google.maps.event.addListener(marker, 'mouseup', function(event) {
                document.getElementById('latitude').value = event.latLng.lat()
                document.getElementById('longitude').value = event.latLng.lng()
            });

            //map
        }

        function codeAddress() {
            geocoder = new google.maps.Geocoder();
            var address = document.getElementById("address").value;
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    //alert("Latitude: "+results[0].geometry.location.lat());
                    // alert("Longitude: "+results[0].geometry.location.lng());
                    document.getElementById('latitude').value = results[0].geometry.location.lat();
                    document.getElementById('longitude').value = results[0].geometry.location.lng();
                    longlat(results[0].geometry.location.lat(), results[0].geometry.location.lng());
                } else {
                    //alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endpush
