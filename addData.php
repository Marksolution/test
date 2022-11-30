<?php
require('db.php');
$sql ="SELECT *FROM employee";
$result = mysqli_query($connect,$sql);
?>
<!doctype html>
<html lang ="en">
    <head>
        <meta charset="utd-8">
        <meta name="viewport" content="width=device-width,initail-scale=1">
        <title>Employees</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar  bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" style="color:white; margin-left:20px">Employee</a>
        </div>
    </nav>

    <div style="margin-top:30px;" class="container">
    <h3>เพิ่มข้อมูล</h3>
    <form action="" method="POST">
        <?php if($_SERVER["REQUEST_METHOD"]=="POST"):?>
        <?php require('db.php');
        $name = mysqli_real_escape_string($connect,$_POST["name"]);
        $lastname = mysqli_real_escape_string($connect,$_POST["lastname"]);
        $job = mysqli_real_escape_string($connect,$_POST["job"]);
        $sql ="INSERT INTO employee(name,lastname,job) VALUES ('$name','$lastname','$job');";
        $result=mysqli_query($connect,$sql);
        ?>
    <?php endif; ?>
    <div class="mb-3">
        <label for="" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="" placeholder="" name="name">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="" placeholder="" name="lastname">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">ตำแหน่งงาน</label>
        <input type="text" class="form-control" id="" placeholder="" name="job">
        <button style="margin-top:20px" class="btn btn-success" type="submit">บันทึกข้อมูล</button>
       <a  style="margin-top:20px" class="btn btn-secondary" href="index.php">กลับหน้าแรก</a>
    </div>
    </div>
    </form>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
    </body>
    
</html>
