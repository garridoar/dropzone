document.addEventListener("DOMContentLoaded", function() {

    Dropzone.autoDiscover = false;
    var dropzone = new Dropzone("#dropzoneForm", {
        maxFilesize: 2,
        maxFiles: 1,
        acceptedFiles: ".pdf"
    });

    dropzone.on("success", function(file) {
        console.log(`${file.name} agregado satisfactoriamente`);
    });


    dropzone.on("error", function(file, errorMessage) {
        dropzone.removeFile(file);
        console.log("Error message: ", errorMessage);
    });

    // dropzone.on("addedfile", function () {
    //     document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    //     });
    // });

    // document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    // });

});