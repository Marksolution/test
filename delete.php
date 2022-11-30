<?php
require('db.php');
$id = $_GET['id'];
$sql = "DELETE FROM employee WHERE id=$id";
$result = mysqli_query($connect,$sql);
if($result){
    header("location:index.php");
}else{
    echo"ผิดพลาด";
}
?>