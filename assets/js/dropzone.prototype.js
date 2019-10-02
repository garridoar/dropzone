
document.addEventListener("DOMContentLoaded", function () {
    Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "Sólo se permite adjuntar una factura por transfer";
    Dropzone.prototype.defaultOptions.dictFileTooBig = "El archivo es muy grande ({{filesize}}MiB). Tamaño máx permitido: {{maxFilesize}}MiB.";
    Dropzone.prototype.defaultOptions.dictInvalidFileType = "El formato de archivo no es válido. Formatos válidos: pdf";
});