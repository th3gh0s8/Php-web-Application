<?php 
include './error_handlling.php';

$uname = "root";

$pword = "pasindu12236";

$dname = "vivaPro";

$url= "localhost";

$port= 3307 ;

$connection = new mysqli($url, $uname, $pword, $dname, $port) ;

if ($connection -> connect_error) {
    
    echo 'error,not connected'.$connection -> connect_error;
    
} else {
    //echo 'connected';
}




?>