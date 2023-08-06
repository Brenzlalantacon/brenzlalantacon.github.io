
<?php
include "db.php";
$id = $_GET['id'];
$sql = "DELETE FROM `CRUD` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result){
    header("Location: ../EMSPHP/list.php");
} else {
    echo "Failed: " . mysqli_error($conn); 
}
?>
