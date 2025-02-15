<?php
include "connection1.php";

if (isset($_GET['Roll_no'])) {
    $Roll_no = mysqli_real_escape_string($conn, $_GET['Roll_no']);
    $sql = "DELETE FROM crud1 WHERE Roll_no='$Roll_no'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    // Redirect back to index page
    header('Location:http://localhost/dbms_pjt/crud_operation/index1.php');
    exit;
}
?>
