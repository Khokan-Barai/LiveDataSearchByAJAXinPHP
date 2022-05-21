<?php 

$db = mysqli_connect("localhost","root","","test");

if(!$db){
    echo "Connection Failed".mysqli_connect_error();
}



?>