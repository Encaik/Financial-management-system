<?php
include "student.php";
$por_name=$_POST['por_name'];
$por_sex=$_POST['por_sex'];
$por_mingzu=$_POST['por_mingzu'];
$por_jiguan=$_POST['por_jiguan'];
$por_zhengzhi=$_POST['por_zhengzhi'];
$por_idcard=$_POST['por_idcard'];
$por_zhuzhi=$_POST['por_zhuzhi'];
$por_shouru=$_POST['por_shouru'];
$por_jianshu=$_POST['por_jianshu'];
$str = "INSERT INTO porstu (stu_id,por_name,por_sex,por_mingzu,por_jiguan,por_zhengzhi,por_idcard,por_zhuzhi,por_shouru,por_jianshu) VALUES ('$arr[2]','$por_name','$por_sex','$por_mingzu','$por_jiguan','$por_zhengzhi','$por_idcard','$por_zhuzhi','$por_shouru','$por_jianshu')";
mysql_query($str);
$str = "update student set stu_por='1' WHERE stu_id='$arr[2]'";
mysql_query($str);
header("Location:yun_studenthome.php");
?>