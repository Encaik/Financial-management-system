<?php
    include "student.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>扬州大学云财务管理系系统</title>
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
            <tr>
                <td class="baoming">CET4</td>
                <td class="baoming">CET6</td>
                <td class="baoming">雅思</td>
                <td class="baoming">GRE</td>
            </tr>
            <tr>
                <td class="baoming">思科</td>
                <td class="baoming">计算机<br>二级</td>
                <td class="baoming">计算机<br>三级</td>
                <td class="baoming">计算机<br>四级</td>
            </tr>
            <tr>
                <td class="baoming">会计证</td>
                <td class="baoming">MME</td>
                <td class="baoming">全国<br>普通话</td>
                <td class="baoming">工程师<br>证书</td>
            </tr>
            <div class="window">
                <div>
                    <p style="font-size: 2rem">编辑信息</p>
                    <hr>
                    <p>姓名：<?php echo $arr[0] ?></p>
                    <p>性别：<?php echo $arr[1] ?></p>
                    <p>学号：<?php echo $arr[2] ?></p>
                    <p>学院：<?php echo $arr[4] ?></p>
                    <p>金额：30元</p>
                    <p>余额：<?php echo $arr[7] ?></p>
                    <hr>
                    <form method="post">
                    <input class="button" id="submit" type="submit" value="确定">
                    <input class="button" id="close" type="button" value="取消">
                    </form>
                </div>
            </div>
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
            for($i = 1;$i<=20;$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>2016-2017</td>";
                echo "<td>2000</td>";
                echo "<td>已交</td>";
                echo "<td>学费</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="head">
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
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>
            <?php
            for($i = 1;$i<=20;$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>2016-2017</td>";
                echo "<td>2000</td>";
                echo "<td>已交</td>";
                echo "<td>住宿费</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="head">
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
            for($i = 1;$i<=20;$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>2016-2017</td>";
                echo "<td>8000</td>";
                echo "<td>已发放</td>";
                echo "<td>贷款</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">下一页</th>
            </tr>
        </table>
    </div>
    <div class="bar2_2_page">
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
            for($i = 1;$i<=20;$i++){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>2016-2017</td>";
                echo "<td>3000</td>";
                echo "<td>已发放</td>";
                echo "<td>助学金</td>";
                echo "</tr>";
            }
            ?>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">下一页</th>
            </tr>
        </table>
    </div>
    <div class="bar2_3_page">
        <div class="yue">
            <?php
            if($arr[8] == 1){
                $str = "select * from porstu WHERE stu_id='$user'";
                $result = mysql_query($str);
                $por = mysql_fetch_row($result);
                echo "<p>贫困生信息表</p><hr><div style=\"text - align: left;position: relative;left: 0\">";
                echo "<h4>姓名：".$por[1]."</h4><h4>民族：".$por[2]."</h4>
                    <h4>籍贯：".$por[3]."<h4><h4>政治面貌：".$por[4]."</h4>
                    <h4>性别：".$por[5]."</h4>
                    <h4>身份证号：".$por[6]."</h4>
                    <h4>家庭住址：".$por[7]."</h4>
                    <h4>家庭收入：".$por[8]."</h4>
                    <h4>个人简述：".$por[9]."</h4></div><hr>";
            }else{
                echo
                "<form  action=\"./Por.php\" method=\"post\">
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
                <div style="text-align: left;position: relative;left: 350px">
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
        $(".baoming").click(function () {
            $(".bar_page .window").css("display","block");
        });
        $("#close,#submit").click(function () {
            $(".bar_page .window").css("display","none");
        });
    </script>
</body>
</html>
﻿