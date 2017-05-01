<?php
    if($conn = mysql_connect('localhost:8080','root','root')) {
        if ($sel = mysql_select_db("mydb", $conn)) {
            session_start();
            $user = $_SESSION['username'];
            $str = "select * from teacher WHERE tea_id='$user'";
            $result = mysql_query($str);
            $arr = mysql_fetch_row($result);
            $str = "create table if not exists teales".$arr[1]."(kemu varchar(100),dizhi varchar(100),jiaoshi varchar(100),day int(10),jie int(10),shichang int(10))";
            mysql_query($str);
            for($i=1;$i<=7;$i++){
                for($j=1;$j<=4;$j++){
                    mysql_query("INSERT INTO teales".$arr[1]." (day,jie) VALUES ($i,$j)");
                }
            }
        }
    }
?>