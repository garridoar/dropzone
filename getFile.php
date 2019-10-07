<?php

    $file_path = "./files/" . $_GET["file_name"];
    var_dump($file_path);
    die();
    
    if (file_exists($file_path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        echo readfile($file_path);
    }
    else {
        echo new Error("File not found");
    }

?>