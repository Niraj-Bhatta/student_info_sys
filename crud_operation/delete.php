<?php
include "connection1.php";
if(isset($_GET['Roll_no'])){
    $Roll_no=$_GET['Roll_no'];
    $sql="DELETE FROM curd1  WHERE Roll_no=$Roll_no";
    $conn->query($sql);
    echo "Record deleted successfully";
}
    header('location:http://localhost/dbms_pjt/crud_operation/index1.php');
    exit;

?>
