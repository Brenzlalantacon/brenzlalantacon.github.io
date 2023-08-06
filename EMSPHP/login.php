<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'login');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); 

    $query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username; 
        header("Location: ../EMSPHP/list.php");
        exit();
    } else {
        $errors = "Invalid username or password";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        window.onload = function () {
            history.pushState(null, null, location.href);
            window.onpopstate = function () {
                history.go(1);
            };
        };
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">

</head>
<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-4" 
        style="background-color:skyblue;">
        Employee Management System  
    </nav>
    <br><br>
    <div class="text-center mb-4">
        <h3> Welcome Admin! </h3>
    </div>
    <br>
   
    <div class="container d-flex justify-content-center fs-5 mb-5">
    <form action="" method="post" style="width:30vw; min-width:300px;">
        <div class="col">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input required type="text" class="form-control" id="username" name="username" placeholder="admin">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input required type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-success" name="login" style="background-color:green;">LOGIN</button>
        </div>
    </form>
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