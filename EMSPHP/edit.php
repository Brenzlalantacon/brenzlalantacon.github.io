
<?php
include "db.php"; 
$id = mysqli_real_escape_string($conn, $_GET['id']);

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $da = $_POST['da'];

    $sql = "UPDATE `CRUD` SET `first_name`='$first_name',`last_name`='$last_name',
    `age`='$age',`gender`='$gender',`da`='$da' WHERE id=$id";

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

    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" 
        style="background-color:skyblue;">
        Employee Management System  
    </nav>

    <div class="container">
        <div class="text-center mb-5">
                <h3> Edit Employee Information </h3>
                <p class="text-muted" style="color:blue;">Click "Update" after Changing Information</p>  
        </div>

        <?php
        $sql = "SELECT * FROM `CRUD` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name"
                        value="<?php echo $row['first_name']?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name"
                        value="<?php echo $row['last_name'] ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input type="number" min=18 class="form-control" name="age"
                    value="<?php echo $row['age'] ?>" >
                </div>

                <div class="mb-3">
                    <label class="form-label">Department Assigned:</label>
                    <input type="text" min=18 class="form-control" name="da"
                    value="<?php echo $row['da'] ?>">
                </div>

                <div class="formgroups mb-3">
                    <label>Gender:</label>&nbsp;
                    <input class="fs-2" type="radio" class="form-check-input" name="gender" id="male" value="male"
                    <?php echo ($row['gender'] == 'male') ? "checked" : ""; ?>>
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input class="fd-2" type="radio" class="form-check-input" name="gender" id="female" value="female"
                    <?php echo ($row['gender'] == 'female') ? "checked" : ""; ?>>
                    <label for="female" class="form-input-label">Female</label>

                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit" 
                    style="background-color:skyblue;">Update</button>
                    <a href="list.php" class="btn btn-danger">Cancel</a>
                </div>

            </form>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
    crossorigin="anonymous"></script>
    <br><br><br>
    <nav class="navbar navbar-light" 
        style="background-color:skyblue;" mb-5>.
    </nav>
    <nav class="navbar navbar-light" 
        style="background-color:skyblue;" mb-5>.
    </nav>

    

</body>
</html>