<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer">

  <title>Employee Management System</title>

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">


</head>
<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
  style="background-color:skyblue;">
      Employee Management System
  </nav>

  <div class="container">
      <?php
      if(isset($_GET['msg'])){
          $msg = $_GET['msg'];
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          '.$msg.'
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      } 
      ?>
      <br><br>
      <a href="add.php" class="btn btn-dark mb-3">Add New</a>
      <a href="login.php" class="btn btn-dark mb-3">Logout</a>
      <table class="table table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Department</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
              <?php 
              include "db.php";
                  $sql = "SELECT * FROM CRUD";
                  $result = mysqli_query($conn, $sql);
                  if (!$result) {
                      die("Query failed: " . mysqli_error($conn));
                  }
                  
                  while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['first_name'] ?></td>     
                        <td><?php echo $row['last_name'] ?></td>
                        <td><?php echo $row['da'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['gender'] ?></td>  
                        <td>
                          <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"
                            onclick="return confirm('Are you sure you want to updates this record?')">
                            Update  <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                          </a>  
                          <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark" 
                            onclick="return confirm('Are you sure you want to delete this record?')">
                            Delete <i class="fa-solid fa-trash fs-5"></i>
                          </a>  
                        </td>
                      </tr>        
                      <?php
                  }
              ?>
        </tbody>
      </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
  crossorigin="anonymous"></script>
  <br><br><br><br><br><br><br>
  <nav class="navbar navbar-light" 
    style="background-color:skyblue;" mb-5>.
    </nav>
  <nav class="navbar navbar-light" 
    style="background-color:skyblue;" mb-5>.
    </nav>

</body>
</html>