<?php
if($conn = mysql_connect('localhost:8080','root','root')) {
    if ($sel = mysql_select_db("mydb", $conn)) {
        $str = "select * from teacher";
        $result = mysql_query($str);
        $arr = mysql_fetch_row($result);
    }
}
?>