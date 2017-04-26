<?php
    if($conn = mysql_connect('localhost:8080','root','root')) {
        if ($sel = mysql_select_db("mydb", $conn)) {
            if (isset($_POST['submit1']) && (!empty($_POST['submit1']))) {
                $name = $_POST['id'];
                $pwd = $_POST['pwd'];
                $yzm = $_POST['yzm'];
                $str = "select * from student WHERE stu_id='$name'";
                $result = mysql_query($str);
                if ($arr = mysql_fetch_row($result)) {
                    if ($pwd == $arr[3]) {
                        session_start();
                        $code = $_SESSION['yzm'];
                        if ($yzm == $code) {
                            session_start();
                            $username = $arr[2];
                            $_SESSION['username'] = $username;
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
            }elseif (isset($_POST['submit2']) && (!empty($_POST['submit2']))){
                $name = $_POST['id'];
                $pwd = $_POST['pwd'];
                $yzm = $_POST['yzm'];
                $str = "select * from teacher WHERE tea_id='$name'";
                $result = mysql_query($str);
                if ($arr = mysql_fetch_row($result)) {
                    if ($pwd == $arr[2]) {
                        session_start();
                        $code = $_SESSION['yzm'];
                        if ($yzm == $code) {
                            session_start();
                            $username = $arr[1];
                            $_SESSION['username'] = $username;
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
            }elseif (isset($_POST['submit3']) && (!empty($_POST['submit3']))){
                $name = $_POST['id'];
                $pwd = $_POST['pwd'];
                $yzm = $_POST['yzm'];
                $str = "select * from admin WHERE adm_id='$name'";
                $result = mysql_query($str);
                if ($arr = mysql_fetch_row($result)) {
                    if ($pwd == $arr[2]) {
                        session_start();
                        $code = $_SESSION['yzm'];
                        if ($yzm == $code) {
                            session_start();
                            $username = $arr[1];
                            $_SESSION['username'] = $username;
                            header("Location:admin/yun_adminhome.php");
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
        }
    }
?>