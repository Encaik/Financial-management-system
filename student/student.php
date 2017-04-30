<?php
    if($conn = mysql_connect('localhost:8080','root','root')) {
        if ($sel = mysql_select_db("mydb", $conn)) {
            session_start();
            $user = $_SESSION['username'];
            $str = "select * from student WHERE stu_id='$user'";
            $result = mysql_query($str);
            $arr = mysql_fetch_row($result);
            $str = "create table if not exists stu".$arr[2]."(title varchar(100),price varchar(50),time timestamp)";
            mysql_query($str);
        }
    }
?>