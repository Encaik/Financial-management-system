<?php
    if($conn = mysql_connect('localhost:8080','root','root')){
        echo "1111</br>";
    };
    if($sel = mysql_select_db("mydb",$conn)){
        echo "2222</br>";
    };
    $str = "select * from users";
    $result = mysql_query($str);
    while($arr = mysql_fetch_row($result)){
        echo "id:".$arr[0]."</br>";
        echo "name:".$arr[1]."</br>";
        echo "pwd:".$arr[2]."</br>";
	if($arr[3]==1){
		echo "身份:学生"."</br>";	
	}else if($arr[3]==2){
		echo "身份:教师"."</br>";	
	}else{
		echo "身份:管理员"."</br>";	
	}
        echo "</br>";
    }
    $arry = mysql_num_rows($result);
    echo $arry;
    ?>