<?php
$stu_name =$_POST['sname'];
$stu_class =$_POST['class'];
$stu_phone =$_POST['sphone'];
$stu_address =$_POST['saddress'];

include "config.php";
$sql= "INSERT INTO student(sname,sclass,sphone,saddress) VALUES('{$stu_name}', '{$stu_class}','{$stu_phone}','{$stu_address}')";
$result= mysqli_query($conn,$sql) or die("invalid Query");

header('location:http://localhost/crud_html/crud_html/index.php');
mysqli_close($conn);
?>