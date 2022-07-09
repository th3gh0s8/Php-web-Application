<?php

include './dbconn.php';
include './error_handlling.php';

$id = $_POST['id'];

$name = $_POST['name'];

$price = $_POST['price'];

$img = $_POST['img'];

$url = $_POST['url'];

$cat =  $_POST['catg'];

$sqliq = "INSERT INTO product(productId,name,price,img,url,cat) VALUES ('".$id."','".$name."','".$price."','".$img."','".$url."','".$cat."')";

$isSaved = mysqli_query($connection, $sqliq);
if ($isSaved) {
    echo 'saved';
    
}else{
    echo 'error'. $connection -> error;
}

mysqli_close($connection)

?>

