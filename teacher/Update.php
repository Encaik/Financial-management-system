<?php
include "teacher.php";
$tea_name=$_POST['tea_name'];
$tea_sex=$_POST['sex'];
$tea_pwd=$_POST['tea_pwd'];
$tea_xueyuan=$_POST['tea_xueyuan'];
$tea_zhiwu=$_POST['tea_zhiwu'];
$tea_pic=$_POST['tea_pic'];
$str = "update teacher set tea_name='$tea_name',tea_sex='$tea_sex',tea_pwd='$tea_pwd',tea_xueyuan='$tea_xueyuan',tea_zhiwu='$tea_zhiwu',tea_pic='$tea_pic' WHERE tea_id='$arr[1]'";
mysql_query($str);
if (file_exists("../image/" . $tea_pic))
{
    echo $tea_pic . " already exists. ";
}
else
{
    move_uploaded_file($tea_pic,"../image/" . $tea_pic);
    echo "Stored in: " . "../image/" . $tea_pic;
}
header("Location:yun_teacherhome.php");
?>