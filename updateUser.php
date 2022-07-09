<?php
include './dbconn.php';
include './error_handlling.php';

$id=$_POST['id'];
$tpno=$_POST["tpno"];
//$birthday=$_POST["birthday"];
$email=$_POST["email"];  
//$type=$_POST["type"];
$username=$_POST["username"];
$password=$_POST["password"];

//echo $id."<br> ".$name." <br>".$birthday."<br> ".$email."";

$sql="UPDATE customer SET tpno='".$tpno."',email='".$email."',usename='".$username."',password='".$password."' WHERE id='".$id."'";
$isSaved= mysqli_query($connection, $sql);
if($isSaved){
    
    echo 'user update successfully';
}else{
    
    echo 'error !'.$connection->error;
}
mysqli_close($connection);
?>
<a href="userManager.php">back</a>



