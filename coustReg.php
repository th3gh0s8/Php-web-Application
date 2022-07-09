<?php

include './dbconn.php';
include './error_handlling.php';

$id = $_POST['inid'];

$uame = $_POST['inUsername'];

$tpno = $_POST['inTpno'];

$email = $_POST['inEmail'];

$password = $_POST['inPassword'];



$sqliq = "INSERT INTO customer(id,usename,tpno,email,password) VALUES ('".$id."','".$uame."','".$tpno."','".$email."','".$password."')";

$isSaved = mysqli_query($connection, $sqliq);
if ($isSaved) {
    echo 'saved';
} else {
    echo 'error' . $connection->error;
}

mysqli_close($connection)
?>

