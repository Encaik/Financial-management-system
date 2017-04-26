<?php
    if($conn = mysql_connect('localhost:8080','root','root')) {
        if ($sel = mysql_select_db("mydb", $conn)) {
            session_start();
            $user = $_SESSION['username'];
            $str = "select * from admin WHERE adm_id='$user'";
            $result = mysql_query($str);
            $arr = mysql_fetch_row($result);
        }
    }
?>