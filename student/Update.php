<?php
include "student.php";
$stu_name=$_POST['stu_name'];
$stu_sex=$_POST['sex'];
$stu_pwd=$_POST['stu_pwd'];
$stu_xueyuan=$_POST['stu_xueyuan'];
$stu_bianhao=$_POST['stu_bianhao'];
$stu_pic=$_POST['stu_pic'];
$str = "update student set stu_name='$stu_name',stu_sex='$stu_sex',stu_pwd='$stu_pwd',stu_xueyuan='$stu_xueyuan',stu_bianhao='$stu_bianhao',stu_pic='$stu_pic' WHERE stu_id='$arr[2]'";
mysql_query($str);
if (file_exists("../image/" . $stu_pic))
{
    echo $stu_pic . " already exists. ";
}
else
{
    move_uploaded_file($stu_pic,"../image/" . $stu_pic);
    echo "Stored in: " . "../image/" . $stu_pic;
}
header("Location:yun_studenthome.php");
?>