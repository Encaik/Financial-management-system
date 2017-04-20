<?php
    if($conn = mysql_connect('localhost:8080','root','root')) {
        if ($sel = mysql_select_db("mydb", $conn)) {
            $name = $_POST['id'];
            $pwd = $_POST['pwd'];
            $yzm = $_POST['yzm'];
            $str = "select * from users";
            $result = mysql_query($str);
            if (isset($_POST['submit1']) && (!empty($_POST['submit1']))) {
                $id = 1;
                while($arr = mysql_fetch_row($result)){
                    if ($id == $arr[3] && $name == $arr[1]) {
                        if ($pwd == $arr[2]) {
                            if ($yzm == "u8c3") {
                                header("Location:student/yun_studenthome.php");
                            } else {
                                echo '<script language="JavaScript">alert("验证码错误，请重新输入！");location.href="yun_login.html";</script>';
                            }
                        } else {
                            echo '<script language="JavaScript">alert("请检查密码是否正确！");location.href="yun_login.html";</script>';
                        }
                    } else {
                        echo '<script language="JavaScript">alert("请检查是否为正确的学生登录账号！");location.href="yun_login.html";</script>';
                    }
                }
            }elseif (isset($_POST['submit2']) && (!empty($_POST['submit2']))){
                $id = 2;
                while($arr = mysql_fetch_row($result)){
                    if ($id == $arr[3] && $name == $arr[1]) {
                        if ($pwd == $arr[2]) {
                            if ($yzm == "u8c3") {
                                header("Location:teacher/yun_teacherhome.php");
                            } else {
                                echo '<script language="JavaScript">alert("验证码错误，请重新输入！");location.href="yun_login.html";</script>';
                            }
                        } else {
                            echo '<script language="JavaScript">alert("请检查密码是否正确！");location.href="yun_login.html";</script>';
                        }
                    } else {
                        echo '<script language="JavaScript">alert("请检查是否为正确的教师登录账号！");location.href="yun_login.html";</script>';
                    }
                }
            }elseif (isset($_POST['submit3']) && (!empty($_POST['submit3']))){
                $id = 3;
                while($arr = mysql_fetch_row($result)){
                    if ($id == $arr[3] && $name == $arr[1]) {
                        if ($pwd == $arr[2]) {
                            if ($yzm == "u8c3") {
                                header("Location:admin/yun_adminhome.php");
                            } else {
                                echo '<script language="JavaScript">alert("验证码错误，请重新输入！");location.href="yun_login.html";</script>';
                            }
                        } else {
                            echo '<script language="JavaScript">alert("请检查密码是否正确！");location.href="yun_login.html";</script>';
                        }
                    } else {
                        echo '<script language="JavaScript">alert("请检查是否为正确的管理员登录账号！");location.href="yun_login.html";</script>';
                    }
                }
            }
        }
    }
?>