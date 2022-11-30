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

    <div class="container-md" style="margin-top:20px">
    <a  class="btn btn-success" href="addData.php">เพิ่มข้อมูล</a> 
    <form action="" method="POST">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">ชื่อ-นามสกุล</th>
            <th scope="col">ตำแหน่งงาน</th>
            <th scope="col">จัดการข้อมูล</th>
            </tr>
        </thead>
        <?php foreach($result as $data):?>
            <input type="hidden" value="<?php echo $data['id']?>" name="id">
        <tbody>
            <tr>
            <th scope="row"><?php echo $data['id']; ?></th>
            <td><?php echo $data['name']."&nbsp".$data['lastname'] ?></td>
            <td><?php echo $data['job']; ?></td>
            <td><a class="btn btn-warning" href="editData.php?id=<?php echo $data['id']?>">แก้ไข</a>
            <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']?>">ลบ</a>
        </td>
            </tr>
            
        </tbody>
        <?php endforeach ?>
    </table>
    </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
    </body>
</html>