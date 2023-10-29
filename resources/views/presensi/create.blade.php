@extends('layouts.master')
@section('title', 'Presensi')

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        .webcam-presensi,
        .webcam-presensi video {
            display: inline-block;
            width: 100% !important;
            margin: auto;
            height: auto !important;
            border-radius: 20px;
        }

        #map {
            height: 400px;
        }
    </style>
@endpush

@section('content')
    {{-- app header --}}
    <div class="appHeader bg-primary">
        <div class="left">
            <a href="{{ route('dashboard') }}" class="headerButton goBack">
                <i class="icon fa-solid fa-chevron-left"></i>
            </a>
        </div>
        <div class="pageTitle">Presensi</div>
        <div class="right"></div>
    </div>
    {{-- end app header --}}
    <div class="row">
        <div class="col" style="margin-top: 70px">
            <input type="hidden" id="lokasi">
            <div class="webcam-presensi"></div>
        </div>
    </div>
    <div class="row mx-auto">
        <button id="takeAbsen" class="btn btn-primary btn-block">
            <i class="fa-solid fa-camera me-2"></i>Absen Masuk</button>
    </div>
    <div class="row mt-2" style="margin-bottom: 100px">
        <div class="col">
            <div id="map"></div>
        </div>
    </div>
@endsection

@push('customJS')
    {{-- plugins --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    {{-- Script Webcam --}}
    <script>
        Webcam.set({
            height: 480,
            widht: 640,
            image_format: 'jpeg',
            jpeg_quality: 80
        });

        Webcam.attach('.webcam-presensi');

        const lokasi = document.getElementById('lokasi');
        // check position
        if (navigator.geolocation) {
            // callback condition
            navigator.geolocation.getCurrentPosition(getPosition, error)
        }

        function getPosition(position) {
            // position location
            lokasi.value = position.coords.latitude + "," + position.coords.longitude;
            // maps
            const map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 18);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            // location marker
            const marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
            marker.bindPopup()
            // circle/m
            var circle = L.circle([position.coords.latitude, position.coords.longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 20
            }).addTo(map);
        }

        function error() {
            let msg = "";
            console.log("error.message = " + error.message);

            switch (error.code) {
                case error.PERMISSION_DENIED:
                    msg = "User does not want to display location.";
                    break;
                case error.POSITION_UNAVAILABLE:
                    msg = "Can't determine user's location.";
                    break;
                case error.TIMEOUT:
                    msg = "The request for geolocation info timed out.";
                    break;
                case error.UNKNOWN_ERROR:
                    msg = "An unknown error occurred.";
                    break;
            }
            displayError(msg);
        }

        // Take Absen Button
        $("#takeAbsen").click(function(e) {
            Webcam.snap(function(uri) {
                image = uri;
            });
            alert(image);
        });
    </script>
@endpush
