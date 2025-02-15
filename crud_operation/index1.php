<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Info System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Student Info System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"> Add new +</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CRUD
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="create.php">Create</a></li>
                <li><a class="dropdown-item" href="edit.php">Update</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="delete.php">Delete</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Table Content -->
    <div class="container my-4">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Roll_no</th>
            <th>Name</th>
            <th>Age</th>
            <th>Semester</th>
            <th>Department</th>
            <th>Enrolled_year</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include "connection1.php";
            $sql = "SELECT * FROM crud1";
            $result = $conn->query($sql);
            if(!$result){
                die("Query failed: " . $conn->error);
            }
            while($row = $result->fetch_assoc()){
              echo "<tr>
                  <td>{$row['Roll_no']}</td>
                  <td>{$row['Name']}</td>
                  <td>{$row['Age']}</td>
                  <td>{$row['Semester']}</td>
                  <td>{$row['Department']}</td>
                  <td>{$row['Enrolled_year']}</td>
                  <td>{$row['Email']}</td>
                  <td>
                    <a class='btn btn-success' href='edit.php?Roll_no={$row['Roll_no']}'>Edit</a>
                    <a class='btn btn-danger' href='delete.php?Roll_no={$row['Roll_no']}'>Delete</a>
                  </td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
      a#home112 {
        color: black;
        border: 1px solid black;
        background-color: blue;
        border-radius: 20px;
        width: 150px;
        display: inline-block;
        text-align: center;
      }
    </style>
  </body>
</html>
