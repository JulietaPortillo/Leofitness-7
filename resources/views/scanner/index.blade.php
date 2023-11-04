<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" type="text/javascript"></script>
  </head>
  <body>
  <h1>QR Code Scanner</h1>
    <video id="preview"></video>

    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

        scanner.addListener('scan', function (content) {
            // Redirect to the member's show page
            window.location.href = '/members/' + content + '/show';
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
  </body>
</html>