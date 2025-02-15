<?php
include "connection1.php";

$Roll_no = "";
$Name = "";
$Age = "";
$Semester = "";
$Department = "";
$Enrolled_year = "";
$Email = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['Roll_no'])) {
        header("location:http://localhost/dbms_pjt/crud_operation/index1.php");
        exit;
    }
    $Roll_no = $_GET['Roll_no'];
    $sql = "SELECT * FROM crud1 WHERE Roll_no=$Roll_no";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:http://localhost/dbms_pjt/crud_operation/index1.php");
        exit;
    }
    $Name = $row["Name"];
    $Age = $row["Age"];
    $Semester = $row["Semester"];
    $Department = $row["Department"];
    $Enrolled_year = $row["Enrolled_year"];
    $Email = $row["Email"];
} else {
    $Roll_no = $_POST['Roll_no'];
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Semester = $_POST['Semester'];
    $Department = $_POST['Department'];
    $Enrolled_year = $_POST['Enrolled_year'];
    $Email = $_POST['Email'];

    $sql = "UPDATE crud1 SET Name='$Name', Age='$Age', Semester='$Semester', Department='$Department', Enrolled_year='$Enrolled_year', Email='$Email' WHERE Roll_no='$Roll_no'";
    $result = $conn->query($sql);

    if ($result) {
        header("location: http://localhost/dbms_pjt/crud_operation/index1.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/dbms_pjt/crud_operation/index1.php">PHP CRUD OPERATION</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/dbms_pjt/crud_operation/index1.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/dbms_pjt/crud_operation/create.php">Add New</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="col-lg-6 m-auto">
    <form method="post">
        <br><br>
        <div class="card">
            <div class="card-header bg-primary">
                <h1 class="text-white text-center">Update Member</h1>
            </div>
            <br>
            <input type="hidden" name="Roll_no" value="<?php echo $Roll_no; ?>" class="form-control"> 

            <label>Roll_no:</label>
            <input type="text" value="<?php echo $Roll_no; ?>" class="form-control" disabled> <br>

            <label>NAME:</label>
            <input type="text" name="Name" value="<?php echo $Name; ?>" class="form-control"> <br>

            <label>Age:</label>
            <input type="text" name="Age" value="<?php echo $Age; ?>" class="form-control"> <br>

            <label>Semester:</label>
            <input type="text" name="Semester" value="<?php echo $Semester; ?>" class="form-control"> <br>

            <label>Department:</label>
            <input type="text" name="Department" value="<?php echo $Department; ?>" class="form-control"> <br>

            <label>Enrolled_year:</label>
            <input type="text" name="Enrolled_year" value="<?php echo $Enrolled_year; ?>" class="form-control"> <br>

            <label>Email:</label>
            <input type="text" name="Email" value="<?php echo $Email; ?>" class="form-control"> <br>

            <button class="btn btn-success" type="submit" name="submit">Update</button><br>
            <a class="btn btn-info" href="index1.php">Cancel</a><br>
        </div>
    </form>
</div>
</body>
</html>
