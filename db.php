<?php
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname ="employee";

$connect = new mysqli($servername,$username,$password,$dbname);

if ($connect->connect_error){
     die("Connect faild: ".$connect->connect_error);
}
?>
