<?php
include "admin.php";
$adm_name=$_POST['adm_name'];
$adm_pwd=$_POST['adm_pwd'];
$adm_bumen=$_POST['adm_bumen'];
$adm_pic=$_POST['adm_pic'];
$str = "update admin set adm_name='$adm_name',adm_pwd='$adm_pwd',adm_bumen='$adm_bumen',adm_pic='$adm_pic' WHERE adm_id='$arr[1]'";
mysql_query($str);
header("Location:yun_adminhome.php");
?>