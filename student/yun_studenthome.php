<?php
    include "student.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>扬州大学云财务管理系统</title>
    <link href="yun_studenthome.css" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="../jquery-3.2.0.js"></script>
</head>
<body>
    <div class="tool">
        <div class="Logo">
            <img src="../Logo/扬大横_白.png" alt="Logo">
        </div>
        <div class="user">
            <img src="../image/<?PHP echo $arr[6] ?>">
            <p><?PHP echo $arr[0] ?>,您好</p>
            <p>欢迎进入云财务管理系统</p>
        </div>
        <div class="banner">
                <div class="bar">
                    <p>网上缴费</p>
                </div>
                <div class="bar1">
                    <p>缴费记录</p>
                </div>
                <div class="sonBar1">
                    <p id="bar1_1">学费缴纳记录</p>
                    <p id="bar1_2">杂项缴纳记录</p>
                    <p id="bar1_3">账户余额查询</p>
                </div>
                <div class="bar2">
                    <p>助学查询</p>
                </div>
                <div class="sonBar2">
                    <p id="bar2_1">助学贷款查询</p>
                    <p id="bar2_2">贫困补助查询</p>
                    <p id="bar2_3">申请贫困生</p>
                </div>
                <div class="bar3">
                    <p>个人中心</p>
                </div>
                <div class="sonBar3">
                    <p id="bar3_1">个人信息查询</p>
                    <p id="bar3_2">个人信息修改</p>
                    <p id="bar3_3">注销账户</p>
                </div>
        </div>
    </div>
    <div class="bar_page">
        <table>
            <?php
            $str = "select * from stu_first";
            $result = mysql_query($str);
            for($i = 1;$i<=3;$i++){
                echo "<tr>";
                for($j = 1;$j<=4;$j++){
                    $fir = mysql_fetch_row($result);
                    echo "<td  id=\"tr_".$i."_td_".$j."\" class=\"baoming\" onclick=\"stu_first('.$i.','.$j.')\">".$fir[0]."</td>";
                    echo"<div class=\"window".$i."_".$j."\">
                <div>
                    <p style=\"font-size: 2rem\">".$fir[0]."</p>
                    <hr>
                    <p>姓名：".$arr[0]."</p>
                    <p>性别：".$arr[1]."</p>
                    <p>学号：".$arr[2]."</p>
                    <p>学院：".$arr[4]."</p>
                    <p>时间：".$fir[1]."</p>
                    <p>金额：".$fir[2]."</p>    
                    <hr>
                    <form action=\"./Jiaofei.php\" method=\"post\">
                    <input type=\"text\" value=\"".$fir[0]."\" name=\"title\" style=\"display: none\">
                    <input type=\"text\" value=\"".$fir[2]."\" name=\"price\" style=\"display: none\">
                    <input class=\"button\" id=\"submit".$i."_".$j."\" type=\"submit\" value=\"确定\">
                    <input class=\"button\" id=\"close".$i."_".$j."\" type=\"button\" value=\"取消\">
                    </form>
                </div>
            </div>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <div class="last">
            <p>版权所有©2017 扬州大学</p>
        </div>
    </div>
    <div class="bar1_1_page">
        <table>
            <tr class="head">
                <th></th>
                <th>学院</th>
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>
            <?php
            $str = "select * from stu".$arr[2]." WHERE title = '学费'";
            $result = mysql_query($str);
            for($i = 1;$mon = mysql_fetch_row($result);$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>".$mon[2]."</td>";
                echo "<td>".$mon[1]."</td>";
                echo "<td>已交</td>";
                echo "<td>".$mon[0]."</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="foot">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">下一页</th>
            </tr>
        </table>
    </div>
    <div class="bar1_2_page">
        <table>
            <tr class="head">
                <th></th>
                <th>学院</th>
                <th>时间</th>
                <th>金额</th>
                <th>备注</th>
            </tr>
            <?php
            $str = "select * from stu".$arr[2]." WHERE title != '学费' and title != '助学金' and title != '助学贷款'";
            $result = mysql_query($str);
            for($i = 1;$mon = mysql_fetch_row($result);$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>".$mon[2]."</td>";
                echo "<td>".$mon[1]."</td>";
                echo "<td>".$mon[0]."</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="foot">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">下一页</th>
            </tr>
        </table>
    </div>
    <div class="bar1_3_page">
        <div class="yue">
            <p>账户余额查询</p>
            <hr>
            <div class="yue_text" style="position: relative;left: 5px">
                <p>姓名：<?PHP echo $arr[0]?></p>
                <p>学号：<?PHP echo $arr[2]?></p>
                <p>账户类型：电子账户</p>
                <p>金额：<?PHP echo $arr[7]?></p>
            </div>
            <hr>
            <br>
        </div>
    </div>
    <div class="bar2_1_page">
        <?php
        if($arr[8] == 1) {
            echo
            "<table>
            <tr class=\"head\">
                <th></th>
                <th>学院</th>
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>";
            $str = "select * from stu" . $arr[2] . " WHERE title = '助学贷款'";
            $result = mysql_query($str);
            for ($i = 1; $mon = mysql_fetch_row($result); $i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $arr[4] . "</td>";
                echo "<td>" . $mon[2] . "</td>";
                echo "<td>" . $mon[1] . "</td>";
                echo "<td>已发放</td>";
                echo "<td>" . $mon[0] . "</td>";
                echo "</tr>";
            }
            echo
            "<tr  class=\"head\">
                <th colspan=\"2\">上一页</th>
                <th colspan=\"2\"><p>跳转至:<input type=\"text\"></p></th>
                <th colspan=\"2\">下一页</th>
            </tr>
        </table>";
        }else{
            echo "<div class=\"yue\"><hr><p>你不是贫困生,暂不开放此功能</p><hr></div>";
        }
        ?>
    </div>
    <div class="bar2_2_page">
        <?php
        if($arr[8] == 1){
            echo
            "<table>
            <tr class=\"head\">
                <th></th>
                <th>学院</th>
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>";
            $str = "select * from stu".$arr[2]." WHERE title = '助学金'";
            $result = mysql_query($str);
            for($i = 1;$mon = mysql_fetch_row($result);$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>".$mon[2]."</td>";
                echo "<td>".$mon[1]."</td>";
                echo "<td>已发放</td>";
                echo "<td>".$mon[0]."</td>";
                echo "</tr>";
            }
            echo
            "<tr  class=\"head\">
                <th colspan=\"2\">上一页</th>
                <th colspan=\"2\"><p>跳转至:<input type=\"text\"></p></th>
                <th colspan=\"2\">下一页</th>
            </tr>
        </table>";
        }else{
            echo "<div class=\"yue\"><hr><p>你不是贫困生,暂不开放此功能</p><hr></div>";
        }
        ?>
    </div>
    <div class="bar2_3_page">
        <div class="yue">
            <?php
            if($arr[8] == 1){
                $str = "select * from porstu WHERE stu_id='$user'";
                $result = mysql_query($str);
                $por = mysql_fetch_row($result);
                echo "<p>贫困生信息表</p><hr><div style=\"text - align: left;position: relative;left: 0\">";
                echo "<h2>姓名：".$por[1]."</h2>
                    <h2>民族：".$por[2]."</h2>
                    <h2>籍贯：".$por[3]."</h2>
                    <h2>政治面貌：".$por[4]."</h2>
                    <h2>性别：".$por[5]."</h2>
                    <h2>身份证号：".$por[6]."</h2>
                    <h2>家庭住址：".$por[7]."</h2></div><hr>";
            }else{
                echo
                "<form action=\"./Por.php\" method=\"post\">
                <p>贫困生申请表</p>
                <hr>
                <div style=\"text-align: left;position: relative;left: 200px\">
                    <label for=\"get_stu_name\">姓名：</label><input type=\"text\" id=\"get_stu_name\" name=\"por_name\">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for=\"get_stu_minzu\">民族：</label><input type=\"text\" id=\"get_stu_minzu\" name=\"por_mingzu\">
                    <br><br>
                    <label for=\"get_stu_name\">籍贯：</label><input type=\"text\" name=\"por_jiguan\">
                    &nbsp;&nbsp;&nbsp;&nbsp;<label for=\"get_stu_name\">政治面貌：</label><input type=\"text\" name=\"por_zhengzhi\">
                    <br><br>
                    性别：<input type=\"radio\" value=\"男\" name=\"por_sex\">男
                          <input type=\"radio\" value=\"女\" name=\"por_sex\">女
                    <br><br>
                    身份证号：<input type=\"text\"  name=\"por_idcard\">
                    <br><br>
                    家庭住址：<input type=\"text\" name=\"por_zhuzhi\">
                    <br><br>
                    家庭收入：<input type=\"text\" name=\"por_shouru\">
                    <br><br>
                    个人简述：<textarea rows=\"5\" cols=\"30\" name=\"por_jianshu\" style=\"resize: none\"></textarea>
                </div>
                <hr>
                <input type=\"submit\" value=\"上交\" class=\"submit2_3\">
                <input type=\"button\" value=\"取消\" class=\"submit2_3\" onclick=\"reset();\">
            </form>";
            }
            ?>
        </div>
    </div>
    <div class="bar3_1_page">
        <div class="yue">
            <form>
                <p>个人信息</p>
                <hr>
                <div class="yue_text" style="position: relative;left: 5px">
                    <p>姓名：<?PHP echo $arr[0]?></p>
                    <p>性别：<?PHP echo $arr[1]?></p>
                    <p>学号：<?PHP echo $arr[2]?></p>
                    <p>学院：<?PHP echo $arr[4]?></p>
                    <p>财务编号：<?PHP echo $arr[5]?></p>
                </div>
                <hr>
            </form>
        </div>
    </div>
    <div class="bar3_2_page">
        <div class="yue">
            <form action="./Update.php" method="post">
                <p>修改信息</p>
                <hr>
                <div style="font-size:25px;text-align: left;position: relative;left: 350px">
                    姓名：<input type="text" name="stu_name">
                    <br><br>
                    性别：<input type="radio" value="男" name="sex">男
                          <input type="radio" value="女" name="sex">女
                    <br><br>
                    学院：<input type="text" name="stu_xueyuan">
                    <br><br>
                    密码：<input type="text" name="stu_pwd" minlength="6">
                    <br><br>
                    财务编号：<input type="text" name="stu_bianhao" maxlength="15" minlength="15">
                    <br><br>
                    请上传头像图片：<input type="file"  name="stu_pic"><br/>
                </div>
                <hr>
                <input type="submit" value="上交" class="submit3_2">
                <input type="button" value="取消" class="submit3_2" onclick="reset();">
            </form>
        </div>
    </div>
    <script language="JavaScript" type="text/javascript">
        $(".bar").click(function () {
            $(".bar_page").show();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar1_1").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").show();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar1_2").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").show();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar1_3").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").show();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar2_1").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").show();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar2_2").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").show();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar2_3").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").show();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar3_1").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").show();
            $(".bar3_2_page").hide();
            $(".bar_page .window").css("display","none");
        });
        $("#bar3_2").click(function () {
            $(".bar_page").hide();
            $(".bar1_1_page").hide();
            $(".bar1_2_page").hide();
            $(".bar1_3_page").hide();
            $(".bar2_1_page").hide();
            $(".bar2_2_page").hide();
            $(".bar2_3_page").hide();
            $(".bar3_1_page").hide();
            $(".bar3_2_page").show();
            $(".bar_page .window").css("display","none");
        });
        $("#bar3_3").click(function () {
            self.location='.././yun_login.html';
        });
        $(".bar").click(function () {
            $(".sonBar1 p").slideUp("1500");
            $(".sonBar2 p").slideUp("1500");
            $(".sonBar3 p").slideUp("1500");
        });
        $(".bar1").click(function () {
            $(".sonBar1 p").slideToggle("1500");
            $(".sonBar2 p").slideUp("1500");
            $(".sonBar3 p").slideUp("1500");
        });
        $(".bar2").click(function () {
            $(".sonBar1 p").slideUp("1500");
            $(".sonBar2 p").slideToggle("1500");
            $(".sonBar3 p").slideUp("1500");
        });
        $(".bar3").click(function () {
            $(".sonBar1 p").slideUp("1500");
            $(".sonBar2 p").slideUp("1500");
            $(".sonBar3 p").slideToggle("1500");
        });
        $("#tr_1_td_1").click(function () {
            $(".bar_page .window1_1").css("display","block");
        });
        $("#close1_1,#submit1_1").click(function () {
            $(".bar_page .window1_1").css("display","none");
        });
        $("#tr_1_td_2").click(function () {
            $(".bar_page .window1_2").css("display","block");
        });
        $("#close1_2,#submit1_2").click(function () {
            $(".bar_page .window1_2").css("display","none");
        });
        $("#tr_1_td_3").click(function () {
            $(".bar_page .window1_3").css("display","block");
        });
        $("#close1_3,#submit1_3").click(function () {
            $(".bar_page .window1_3").css("display","none");
        });
        $("#tr_1_td_4").click(function () {
            $(".bar_page .window1_4").css("display","block");
        });
        $("#close1_4,#submit1_4").click(function () {
            $(".bar_page .window1_4").css("display","none");
        });
        $("#tr_2_td_1").click(function () {
            $(".bar_page .window2_1").css("display","block");
        });
        $("#close2_1,#submit2_1").click(function () {
            $(".bar_page .window2_1").css("display","none");
        });
        $("#tr_2_td_2").click(function () {
            $(".bar_page .window2_2").css("display","block");
        });
        $("#close2_2,#submit2_2").click(function () {
            $(".bar_page .window2_2").css("display","none");
        });
        $("#tr_2_td_3").click(function () {
            $(".bar_page .window2_3").css("display","block");
        });
        $("#close2_3,#submit2_3").click(function () {
            $(".bar_page .window2_3").css("display","none");
        });
        $("#tr_2_td_4").click(function () {
            $(".bar_page .window2_4").css("display","block");
        });
        $("#close2_4,#submit2_4").click(function () {
            $(".bar_page .window2_4").css("display","none");
        });
        $("#tr_3_td_1").click(function () {
            $(".bar_page .window3_1").css("display","block");
        });
        $("#close3_1,#submit3_1").click(function () {
            $(".bar_page .window3_1").css("display","none");
        });
        $("#tr_3_td_2").click(function () {
            $(".bar_page .window3_2").css("display","block");
        });
        $("#close3_2,#submit3_2").click(function () {
            $(".bar_page .window3_2").css("display","none");
        });
        $("#tr_3_td_3").click(function () {
            $(".bar_page .window3_3").css("display","block");
        });
        $("#close3_3,#submit3_3").click(function () {
            $(".bar_page .window3_3").css("display","none");
        });
        $("#tr_3_td_4").click(function () {
            $(".bar_page .window3_4").css("display","block");
        });
        $("#close3_4,#submit3_4").click(function () {
            $(".bar_page .window3_4").css("display","none");
        });
    </script>
</body>
</html>
﻿