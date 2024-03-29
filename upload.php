<?php

include('connect.php');

$ACTIVE = 1;

$tmp_name = $_FILES["file"]["tmp_name"];
$destination = "./files/";
$file_size = $_FILES["file"]["size"];

$date = date("Y-m-d H:i:s");
$file_name = $date . $_FILES["file"]["name"];

//Hardcored
$uploaded_user_id_hardcore = random_int(1, 5000);
$transfer_id_hardcore  = 174; // random_int(1, 500)

if (file_exists($destination . $file_name)) {
    echo "File already exists.";
} else {
    die();
    if (move_uploaded_file($tmp_name, "$destination/$file_name")) {

        $update_sql = "UPDATE ti8xYXbvO3.transfers_files
                        SET `state` = 0
                        WHERE transfer_id = $transfer_id_hardcore";

        if (mysqli_query($mysqli, $update_sql)) {
            echo "Files updated successfully.";
        } else {
            die(mysqli_error($mysqli));
        }

        $create_sql = "INSERT INTO 
                    ti8xYXbvO3.transfers_files(file_name, transfer_id, `state`, creation_date, size, uploaded_user_id) 
                VALUES
                    ('$file_name', $transfer_id_hardcore , $ACTIVE, '$date', $file_size, $uploaded_user_id_hardcore )";
        if (mysqli_query($mysqli, $create_sql)) {
            echo "File uploaded successfully.";
        } else {
            die(mysqli_error($mysqli));
        }
    } else {
        echo "Failed to upload file.";
    }
}

// header("Location: index.php");
