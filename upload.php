<?php

header ('Content-type: text/html; charset=utf-8');


$mysqli = new mysqli('192.168.0.42', 'root', '123581321');
$mysqli->set_charset("utf8");


$tmp_name = $_FILES["file"]["tmp_name"];
$filename = $_FILES["file"]["name"];
$destination = "./files/" . $filename;


if (file_exists($destination)) {
    echo "File already exists.";
} else {
    if (move_uploaded_file($tmp_name, $destination)) {
        $sql = "INSERT INTO 
                    utilidades.transfers_files(file_name, transfer_id, state, creation_date, downloads, uploaded_user_id) 
                VALUES
                    ('SecondFile', 2, 1, '2019-8-20 10:47:30', 0, 1492)";
        if (mysqli_query($mysqli, $sql)) {
            echo "File uploaded successfully.";
        }
        else {
            echo "Query failed";
        }
    } else {
        echo "Failed to upload file.";
    }
}

header("Location: index.php");

?>