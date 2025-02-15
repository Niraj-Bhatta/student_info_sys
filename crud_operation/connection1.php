<?php

$servername="localhost";
$username="root";
$password="";
$db="crud";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
echo "Connected successfully";

?>