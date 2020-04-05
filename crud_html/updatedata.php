<?php
$stu_id=$_GET['sid'];
$stu_name =$_GET['sname'];
$stu_class =$_GET['sclass'];
$stu_phone =$_GET['sphone'];
$stu_address =$_GET['saddress'];

include "config.php";
$sql= "UPDATE student SET sname = '{$stu_name}', sclass = '{$stu_class}', sphone = '{$stu_phone}', saddress = '{$stu_address}'  WHERE sid={$stu_id}";
$result= mysqli_query($conn,$sql) or die("invalid Query");

header('location:http://localhost/crud_html/crud_html/index.php');
mysqli_close($conn);
?>