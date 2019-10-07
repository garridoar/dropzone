document.addEventListener("DOMContentLoaded", function () {

    Dropzone.autoDiscover = false;
    var dropzone = new Dropzone("#dropzoneForm", {
        maxFilesize: 2,
        maxFiles: 1,
        acceptedFiles: ".pdf"
    });

    dropzone.on("success", function (file) {
        console.log(`${file.name} agregado satisfactoriamente`);
    });


    dropzone.on("error", function (file, errorMessage) {
        dropzone.removeFile(file);
        console.log("Error message: ", errorMessage);
    });

    $.when(
        $.getJSON('./getTransfer.php')
    ).done(function (a0) {
        data = a0[0];
        var mockFile = {
            name: data.file_name,
            size: data.size
        };
        dropzone.emit("addedfile", mockFile);
        dropzone.emit("complete", mockFile);
        dropzone.emit("maxfilesreached", mockFile);
    });

    // $.getJSON('./getTransfer.php', function (data, status) {
    //     if (status == "success") {
    //         console.log(data);
    //         var mockFile = {
    //             name: data.file_name,
    //             size: data.size
    //         };
    //         dropzone.emit("addedfile", mockFile);
    //         dropzone.emit("complete", mockFile);
    //         dropzone.emit("maxfilesreached");
    //     }
    // });


    // function mockFileFunction(data) {
    //     console.log("DEntro: " , data);
    //     var mockFile = {
    //         name: data.file_name,
    //         size: data.size
    //     };
    //     // dropzone.emit("addedfile", mockFile);
    //     // dropzone.emit("complete", mockFile);

    //     $.get(`getFile.php?file_name=${data.file_name}`, null, function(data) {
    //         console.log("File received", data);
    //     });
    //     dropzone.accept(file, function(err) {
    //         if(err)
    //             console.error("No file found. ", err);
    //     }); 

    // }


    // dropzone.on("addedfile", function () {
    //     document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    //     });
    // });

    // document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    // });

});