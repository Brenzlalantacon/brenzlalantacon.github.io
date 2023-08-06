<?php
include "db.php"; 

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $da = $_POST['da'];

    $sql = "INSERT INTO `CRUD` (`id`, `first_name`, `last_name`, `age`, `gender`, `da`) 
    VALUES (NULL, '$first_name', '$last_name', '$age', '$gender', '$da');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../EMSPHP/list.php");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>




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


    <title>PHP Employee Management System</title>
</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-4" 
        style="background-color:skyblue;">
        Employee Management System  
    </nav>

    <div class="container">
        <div class="text-center mb-4">
                <h3> Add New Employee Information </h3>
                <p class="text-muted" style="color:blue;">Click "Add Employee" when you are finished</p>  
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input required type="text" class="form-control" name="first_name"
                        id="first_name" placeholder="">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name:</label>
                        <input required type="text" class="form-control form-opacity-50" name="last_name"
                        id="last_name" placeholder="">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input required type="number" min=18 class="form-control" name="age"
                    id="age" placeholder="" > 
                </div>

                <div class="mb-3">
                    <label class="form-label">Department Assigned:</label>
                    <input type="text" min=18 class="form-control" name="da"
                    id="id" placeholder="">
                </div>

                <div class="formgroup mb-2">
                    <label>Gender:(Optional)   </label>&nbsp;
                    <input class="fd-2" type="radio" class="form-check-input" name="gender" id="male" value="Male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input class="fd-2" type="radio" class="form-check-input" name="gender" id="female" value="Female">
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success link-dark" name="submit" 
                    style="background-color:skyblue;">Add Employee</button>
                    <a href="list.php" class="btn btn-danger ">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
    crossorigin="anonymous"></script>

    <br><br><br><br>
    <nav class="navbar navbar-light" 
        style="background-color:skyblue;" mb-4>.
    </nav>
    <nav class="navbar navbar-light" 
        style="background-color:skyblue;" mb-5>.
    </nav>

    

</body>
</html>