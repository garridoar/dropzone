<?php

$file = $_FILES["file"];
$tmp_name = $file["tmp_name"];
$name = $file["name"];
$path = "./files/";

var_dump($path . $name);

if(file_exists($path . $name)) {
    echo "File already exists";
}
else {
    move_uploaded_file($tmp_name, "files/" . $name);
    echo "File successfully created";
}

header("Location: index.php");

?>