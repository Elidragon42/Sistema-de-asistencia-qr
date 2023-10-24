<!DOCTYPE html>

<html>

<head>

    <title>laravel webcam captura de imagen</title>

    <script src="https://rawgit.com/dwa012/html5-qrcode/master/src/html5-qrcode.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style type="text/css">

        #results { padding:20px; border:1px solid; background:#ccc; }

    </style>

</head>

<body>

    

<div class="container">

    <h1 class="text-center">Camara web Laravel</h1>

    

    <form method="POST" action="{{ route('webcam.capture') }}">

        @csrf

        <div class="row">

            <div class="col-md-6">

                <div id="my_camera"></div>

                <br/>

                <input type="button" value=" Capturar" onClick="take_snapshot()">

                
                <input type="hidden" name="image" class="image-tag">
            ÑÑ
                </div>
            
                <div class="col-md-6">

                <div id="results">Tu imagen capturada aparecerá aquí...</div>

                <div id="reader" style="width: 300px;"></div>
            </div>

            <div class="col-md-12 text-center">

                <br/>

                <button class="btn btn-success">Subir</button>

            </div>

        </div>

    </form>

</div>

    

<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 350,

        image_format: 'jpeg',

        jpeg_quality: 90,

        flip_horiz: true,

    });

    

    Webcam.attach( '#my_camera' );

    var scanner = new Html5Qrcode("reader");

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

            scanner.scanFile(data_uri)
                .then(qrCodeMessage =>{
                    console.log(qrCodeMessage);
                })
                .catch(err =>{
                    console,error(err);
                })
        } );

    }

</script>

</body>

</html>