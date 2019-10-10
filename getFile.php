<?php

    $filepath = "./files/" . $_GET["file_name"];
    
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        echo readfile($filepath);
    }
    else {
        echo new Error("File not found");
    }

?>