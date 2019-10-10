document.addEventListener("DOMContentLoaded", function () {

    Dropzone.autoDiscover = false;
    const dropzone = new Dropzone("#dropzoneForm", {
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

    let downloadBtn = document.getElementById("download-btn");
    let downloadTarget = document.getElementById("download-target");

    downloadBtn.addEventListener('click', function () {
        let id = 174;
        $.getJSON(`getTransfer.php?id=${id}`, function (transferFileData, status) {
            if (status == 'success') {
                downloadTarget.href = `getFile.php?file_name=${transferFileData.file_name}`;
                downloadTarget.click();
            }
            else {
                throw new Error('Transfer file data havent been found');
            }
        });
    });


    MicroModal.init();

    // dropzone.on("addedfile", function () {
    //     document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    //     });
    // });

    // document.querySelector(".dz-preview").addEventListener("mouseover", function () {
    //         document.getElementById("dropzone").classList.add("animated", "bounce", "delay-1s");
    // });

});