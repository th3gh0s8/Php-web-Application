<?php
include './dbconn.php';
include './error_handlling.php';

$id = $_POST['productId'];

$name = $_POST['name'];

$price = $_POST['price'];

$img = $_POST['img'];

$url = $_POST['url'];

$cat =  $_POST['cat'];

//echo $id."<br> ".$name." <br>".$birthday."<br> ".$email."";

$sql="UPDATE product SET productId='".$id."',name='".$name."',price='".$price."',img='".$img."',url='".$url."',cat='".$cat."' WHERE productId='".$id."'";
$isSaved= mysqli_query($connection, $sql);
if($isSaved){
    
    echo 'user update successfully';
}else{
    
    echo 'error !'.$connection->error;
}
mysqli_close($connection);
?>
<a href="userManager.php">back</a>
