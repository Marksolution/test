<?php
require('db.php');
$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$job = $_POST['job'];
$sql = "UPDATE employee SET name='$name',lastname='$lastname',job='$job' WHERE id=$id";
$result = mysqli_query($connect,$sql);
if($result){
    header("location:index.php");
}
else{
    echo"ผิดพลาด";
}
?>
