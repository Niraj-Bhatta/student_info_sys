<?php
    include "connection1.php";
    if(isset($_POST['submit'])){
        $Roll_no = $_POST['Roll_no'];
        $name = $_POST['name'];
        $Age = $_POST['Age'];
        $Semester = $_POST['Semester'];
        $Department = $_POST['Department'];
        $Enrolled_year = $_POST['Enrolled_year'];
        $Email = $_POST['Email'];
        $q = " INSERT INTO `crud1`(`Roll_no`,`Name`, `Age`, `Semester`, `Department`, `Enrolled_year`, `Email`) VALUES ( '$Roll_no','$name', '$Age', '$Semester', '$Department', '$Enrolled_year', '$Email' )" ;
        $query = mysqli_query($conn,$q);

        if($query) {
          header("Location: http://localhost/dbms_pjt/crud_operation/index1.php");
          exit;
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
              <a class="nav-link active" aria-current="page" href="http://localhost/dbms_pjt/crud_operation/index1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/dbms_pjt/crud_operation/create.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> Roll_no: </label>
 <input type="text" name="Roll_no" class="form-control"> <br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Age: </label>
 <input type="text" name="Age" class="form-control"> <br>

 <label> Semester: </label>
 <input type="text" name="Semester" class="form-control"> <br>

 <label> Department: </label>
 <input type="text" name="Department" class="form-control"> <br>

 <label> Enrolled_year: </label>
 <input type="text" name="Enrolled_year" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="Email" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit" > Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index1.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>