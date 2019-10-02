<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropzone</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>

    <body>
        <h2>Upload files</h2>

        <div id="dropzone">
            <form class="dropzone needsclick" id="dropzoneForm" action="upload.php">
                <div class="dz-message needsclick">
                    <strong>Arrastre</strong> la factura aquí.<br><br>
                    <span class="note">O haga click para seleccionar el archivo</span>
                </div>
            </form>
        </div>

        <script src="assets/js/main.js"></script>

        <script src="assets/js/dropzone.prototype.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    </body>

</html>