<!DOCTYPE html>
@extends('app')

@section('content')

<head>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" type="text/javascript"></script>
    <style>
        /* Center the bordered container horizontally and vertically */
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh; /* Set a fixed height for the container */
            width: 20vw; /* Set a fixed width for the container */
            border: 2px solid #333; /* Border styles */
            border-radius: 10px; /* Optional: for rounded corners */
            overflow: hidden; /* Hide overflowing video */
        }

        /* Style the video to fit inside the container */
        #preview {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the video covers the entire container */
        }
    </style>
</head>

<div class="rightside bg-grey-100">
    <div class="page-head bg-grey-100 padding-top-15 no-padding-bottom">
        <h1 class="page-title no-line-height">Scanner de QR</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="panel no-border">
                    <div class="panel-title bg-blue-grey-50">
                        <!-- Your search and filter elements go here -->
                        <p>Escanea el código QR del miembro para ver su información.</p>
                    </div>

                    <div class="panel-body bg-white">
                        <!-- Your table or content goes here -->
                        <div class="video-container">
                            <video id="preview"></video>
                        </div>
                        <script>
                            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
                            scanner.addListener('scan', function (content) {
                                // Redirect to the member's show page
                                window.location.href = content;
                            });

                            Instascan.Camera.getCameras().then(function (cameras) {
                                if (cameras.length > 0) {
                                    scanner.start(cameras[0]);
                                } else {
                                    console.error('No cameras found.');
                                }
                            }).catch(function (e) {
                                console.error(e);
                            });
                        </script>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

@stop
