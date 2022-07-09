<?php
include './dbconn.php';
include './error_handlling.php';

$userId= $_GET['id'];

$sql = "DELETE FROM customer WHERE id ='".$userId."'";
$isdeleted= mysqli_query($connection, $sql);
if($isdeleted){
    
    echo 'user deleted successfully';
}else{
    
    echo 'error !';
}

?>

<a href="userManager.php">back</a>