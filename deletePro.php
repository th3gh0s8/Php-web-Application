<?php
include './dbconn.php';
include './error_handlling.php';

$proId= $_GET['productId'];

$sql = "DELETE FROM product WHERE productId='".$proId."'";
$isdeleted= mysqli_query($connection, $sql);
if($isdeleted){
    
    echo 'user deleted successfully';
}else{
    
    echo 'error !';
}

?>

<a href="userManager.php">back</a>