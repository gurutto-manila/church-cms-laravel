@extends('layouts.admin.layout')

@section('content')
    <div class="w-1/2 lg:mr-8 md:mr-8">
        <div>
            <h1 class="admin-h1 mb-5 flex items-center">
                <a href="{{ url('/admin/prayerrequests') }}" title="Back" class="rounded-full bg-gray-100 p-2">
                    <img src="{{ url('uploads/icons/back.svg') }}" class="w-3 h-3">
                </a>
                <span class="mx-3">Prayer Audio</span>
            </h1>
        </div>

        <div class="bg-white">
            <form method="POST" action="{{ url('/admin/prayerrequest/audio/store/' . $prayer->id) }}"
                enctype="multipart/form-data" id="prayer" class="px-3 py-3">
                @csrf
                <div>
                    <div class="mb-2">
                        <label for="select_audio" class="tw-form-label">Audio Type</label>
                    </div>
                    <div class="flex">
                        <div class="w-1/3 flex items-center tw-form-control lg:mr-8 md:mr-8">
                            <input type="radio" name="select_audio" id="attachaudio" value="attachaudio"
                                {{ old('select_audio') == 'attachaudio' ? 'checked' : '' }}>
                            <span class="text-sm mx-1">Attach</span>
                        </div>
                        <div class="w-1/3 flex items-center tw-form-control lg:mr-8 md:mr-8">
                            <input type="radio" name="select_audio" id="recordaudio" value="recordaudio"
                                {{ old('select_audio') == 'recordaudio' ? 'checked' : '' }}>
                            <span class="text-sm mx-1">Record</span>
                        </div>
                    </div>
                    <span class="text-danger text-xs">{{ $errors->first('select_audio') }}</span>
                </div>

                <div id="attach">
                    <div class="my-6">
                        <div class="w-full items-center">
                            <input type="file" name="audio" class="tw-form-control w-3/4">
                        </div>
                        <span class="text-danger text-xs">{{ $errors->first('audio') }}</span>
                    </div>
                    <div class="my-6">
                        <input type="submit" value="Submit" name="submit" dusk="submit"
                            class="btn btn-primary submit-btn cursor-pointer">
                    </div>
                </div>
            </form>
        </div>

        <div id="record" class="hidden" style="max-width: 28em;">
            <div style="max-width: 28em; display:none;">
                <!-- Do not remove this div.If removed recording won't work -->
                <p>Convert recorded audio to:</p>
                <select id="encodingTypeSelect" style="display:none">
                    <option value="mp3">MP3 (MPEG-1 Audio Layer III) (.mp3)</option>
                    <option value="wav">Waveform Audio (.wav)</option>
                    <option value="ogg">Ogg Vorbis (.ogg)</option>
                </select>
                <div id="formats" style="display:none"></div>
                {{-- <pre>Log</pre> --}}
                <pre id="log" style="display:none"></pre>
            </div>
            <div class="my-6">
                <div class="w-full lg:w-1/4">
                    <label class="tw-form-label">Record<span class="text-red-500">*</span></label>
                </div>
                <div id="controls">
                    <button id="recordButton">Record</button>
                    <button id="stopButton" disabled>Stop</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <link href="{{ url('css/audio-style.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('audio/WebAudioRecorder.min.js') }}"></script>
    <script src="{{ url('audio/app.js') }}"></script>
    <script type="text/javascript">
        var url = "{{ url('/') }}";
        var posturl = $('#prayer').attr('action');

        $('#attachaudio').on('click', function() {
            if ($('#attach').hasClass('hidden')) {
                $('#attach').removeClass('hidden').addClass('block');
                $('#record').removeClass('block').addClass('hidden');
            }
        });

        $('#recordaudio').on('click', function() {
            if ($('#record').hasClass('hidden')) {
                $('#record').removeClass('hidden').addClass('block');
                $('#attach').removeClass('block').addClass('hidden');
            }
        });

        $(document).ready(function() {
            var attachaudio = document.getElementById("select_audio");
            if (attachaudio.checked) {
                $('#attachaudio').removeClass('hidden').addClass('block');
                $('#recordaudio').removeClass('block').addClass('hidden');
            }
        });
    </script>
@endpush
