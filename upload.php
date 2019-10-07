<?php

include('connect.php');


$tmp_name = $_FILES["file"]["tmp_name"];
$filename = $_FILES["file"]["name"];
$destination = "./files/" . $filename;
$file_size = $_FILES["file"]["size"];

$date = date("Y-m-d H:i:s");
$query_file = $date . $filename;

//Hardcored
$uploaded_user_id_hardcore = random_int ( 1 , 5000 );
$transfer_id_hardcore  = random_int(1, 500);
$state_hardcore  = random_int(0, 1);

if (file_exists($destination)) {
    echo "File already exists.";
} else {
    if (move_uploaded_file($tmp_name, $destination)) {
        $sql = "INSERT INTO 
                    ti8xYXbvO3.transfers_files(file_name, transfer_id, state, creation_date, size, uploaded_user_id) 
                VALUES
                    ('$query_file', $transfer_id_hardcore , $state_hardcore, '$date', $file_size, $uploaded_user_id_hardcore )";
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