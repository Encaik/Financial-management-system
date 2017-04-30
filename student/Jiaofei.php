<?php
include "student.php";
$title = $_POST['title'];
$price = $_POST['price'];
$str = "INSERT INTO stu".$arr[2]." (title,price) VALUES ('$title','$price')";
mysql_query($str);
header("Location:yun_studenthome.php");
?>