<?php

include('connect.php');

    $transfer_id = $_GET["id"];

    //Hardcored
    // $transfer_id = 174;

    $sql = "SELECT * FROM ti8xYXbvO3.transfers_files WHERE transfer_id = $transfer_id AND `state` = 1";
    $result = mysqli_query($mysqli, $sql);

    $file = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    echo json_encode($file[0]);

?>