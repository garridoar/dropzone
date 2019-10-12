<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dropzone</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/bounce.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/micromodal.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
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

        <br><br>

        <!-- <div id="download">
            <button id="download-btn">DESCARGAR FACTURA</button>
            <a id="download-target" href="" style="display:none"></a>
        </div>

        <br><br>

        <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                    <header class="modal__header">
                        <h2 class="modal__title" id="modal-1-title">
                            Micromodal
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                    </header>
                    <main class="modal__content" id="modal-1-content">
                        <p>
                            Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                        </p>
                    </main>
                    <footer class="modal__footer">
                        <button class="modal__btn modal__btn-primary">Continue</button>
                        <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                    </footer>
                </div>
            </div>
        </div>

        <button data-micromodal-trigger="modal-1">Click click</button> -->

        <br><br>
<!-- 
        <div id="myProgress">
            <div id="myBar"></div>
        </div> -->


        <script src="assets/js/main.js"></script>
        <script src="assets/js/dropzone.prototype.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
        <!-- <script src="assets/js/micromodal.js"></script> -->


    </body>

</html>