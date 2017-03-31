<?php
    if (isset($_POST['submit1'])&&(!empty($_POST['submit1']))){
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $yzm = $_POST['yzm'];
        if($id == 123456){
            if($pwd == 123456){
                if($yzm == "u8c3"){
                    header("Location:student/yun_studenthome.html");
                }else{
                    echo '<script language="JavaScript">alert("验证码错误");location.href="yun_login.html";</script>';
                }
            }else{
                echo '<script language="JavaScript">alert("密码错误");location.href="yun_login.html";</script>';
                }
        }else{
                echo '<script language="JavaScript">alert("学号错误");location.href="yun_login.html";</script>';
        }
    }
    if (isset($_POST['submit2'])&&(!empty($_POST['submit2']))){
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $yzm = $_POST['yzm'];
        if($id == 654321){
             if($pwd == 654321){
                if($yzm == "u8c3"){
                    header("Location:teacher/yun_teacherhome.html");
                }else{
                    echo '<script language="JavaScript">alert("验证码错误");location.href="yun_login.html";</script>';
                }
            }else{
                echo '<script language="JavaScript">alert("密码错误");location.href="yun_login.html";</script>';
            }
        }else{
            echo '<script language="JavaScript">alert("学号错误");location.href="yun_login.html";</script>';
        }
    }
    if (isset($_POST['submit3'])&&(!empty($_POST['submit3']))){
        $id = $_POST['id'];
        $pwd = $_POST['pwd'];
        $yzm = $_POST['yzm'];
        if($id == 000000){
            if($pwd == 000000){
                if($yzm == "u8c3"){
                    header("Location:admin/yun_adminhome.html");
                }else{
                    echo '<script language="JavaScript">alert("验证码错误");location.href="yun_login.html";</script>';
                }
            }else{
                echo '<script language="JavaScript">alert("密码错误");location.href="yun_login.html";</script>';
            }
        }else{
            echo '<script language="JavaScript">alert("学号错误");location.href="yun_login.html";</script>';
        }
    }
?>