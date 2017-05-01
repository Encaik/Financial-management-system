<?php
include "teacher.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>扬州大学云财务管理系统</title>
    <link href="yun_teacherhome.css" rel="stylesheet" type="text/css" >
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
            <p>课程安排</p>
        </div>
        <div class="bar1">
            <p>工资查询</p>
        </div>
        <div class="bar2">
            <p>课外辅导</p>
        </div>
        <div class="sonBar2">
            <p class="bar2_1">申请开设课程</p>
            <p class="bar2_2">查看已开课程</p>
        </div>
        <div class="bar3">
            <p>科研管理</p>
        </div>
        <div class="sonBar3">
            <p class="bar3_1">项目结题</p>
            <p class="bar3_2">经费申请</p>
            <p class="bar3_3">经费状况</p>
        </div>
        <div class="bar4">
            <p>个人中心</p>
        </div>
        <div class="sonBar4">
            <p class="bar4_1">个人信息查询</p>
            <p class="bar4_2">个人信息修改</p>
            <p class="bar4_3">注销账户</p>
        </div>
    </div>
</div>

<div class="bar_page">
    <table>
        <tr>
            <th>课时\星期</th>
            <th>星期一</th>
            <th>星期二</th>
            <th>星期三</th>
            <th>星期四</th>
            <th>星期五</th>
            <th>星期六</th>
            <th>星期日</th>
        </tr>
        <tr>
            <th>第一小节</th>
            <?php
                for($i=1;$i<=7;$i++){
                    $str = "select * from teales" . $arr[1] . " WHERE day = $i and jie = '1'";
                    $result = mysql_query($str);
                    $les = mysql_fetch_row($result);
                    echo "<td rowspan=\"2\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
                }
            ?>
        </tr>
        <tr>
            <th>第二小节</th>
        </tr>
        <tr>
            <th>第三小节</th>
            <?php
            for($i=1;$i<=7;$i++){
                $str = "select * from teales" . $arr[1] . " WHERE day = $i and jie = '2'";
                $result = mysql_query($str);
                $les = mysql_fetch_row($result);
                if($les[5]==3){
                    echo "<td rowspan=\"3\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
                }else{
                    echo "<td rowspan=\"2\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <th>第四小节</th>
        </tr>
        <tr>
            <th>第五小节</th>
            <?php
            $str = "select * from teales" . $arr[1] . " WHERE jie = '2' and shichang = '3'";
            $result = mysql_query($str);
            $les = mysql_num_rows($result);
            for(;7-$les;$les++){
                echo "<td></td>";
            }
            ?>
        </tr>
        <tr>
            <th>第六小节</th>
            <?php
            for($i=1;$i<=7;$i++){
                $str = "select * from teales" . $arr[1] . " WHERE day = $i and jie = '3'";
                $result = mysql_query($str);
                $les = mysql_fetch_row($result);
                if($les[5]==3){
                    echo "<td rowspan=\"3\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
                }else{
                    echo "<td rowspan=\"2\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
                }
            }
            ?>
        </tr>
        <tr>
            <th>第七小节</th>
        </tr>
        <tr>
            <th>第八小节</th>
            <?php
            $str = "select * from teales" . $arr[1] . " WHERE jie = '3' and shichang = '3'";
            $result = mysql_query($str);
            $les = mysql_num_rows($result);
            for(;7-$les;$les++){
                echo "<td></td>";
            }
            ?>
        </tr>
        <tr>
            <th>第九小节</th>
            <?php
            for($i=1;$i<=7;$i++){
                $str = "select * from teales" . $arr[1] . " WHERE day = $i and jie = '4'";
                $result = mysql_query($str);
                $les = mysql_fetch_row($result);
                echo "<td rowspan=\"2\">".$les[0]."<br>".$les[1]."<br>".$les[2]."</td>";
            }
            ?>
        </tr>
        <tr>
            <th>第十小节</th>
        </tr>
    </table>
    <div class="last">
        <p>版权所有©2017 扬州大学</p>
    </div>
</div>

<div class="bar1_page">
    <form style="text-align: left;position: relative;left:10px;">
        <div >
            范围:<select>
                <option value="3 months">最近三个月</option>
                <option value="1 year">最近一年</option>
                <option value="all">全部</option>
            </select>
        </div>
    </form>
    <table>
        <tr>
            <th>序号</th>
            <th>时间</th>
            <th>出勤天数</th>
            <th>基本工资</th>
            <th>加班工资</th>
            <th>应发工资</th>
            <th>未满勤扣款</th>
            <th>其他扣款</th>
            <th>扣款合计</th>
            <th>实际工资</th>
            <th>发放情况</th>
        </tr>
        <tr>
            <td>1</td>
            <td >2017.1</td>
            <td >20</td>
            <td >4800</td>
            <td>200</td>
            <td>5000</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>5000</td>
            <td>已发放</td>
        </tr>
        <tr>
            <td>2</td>
            <td >2017.2</td>
            <td >20</td>
            <td >4800</td>
            <td>200</td>
            <td>5000</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>5000</td>
            <td>已发放</td>
        </tr>
        <tr>
            <td>3</td>
            <td >2017.3</td>
            <td >20</td>
            <td >4800</td>
            <td>200</td>
            <td>5000</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>5000</td>
            <td>已发放</td>
        </tr>


    </table>
</div>

<div class="bar2_1_page">
    <div class="yue">
        <form >
            <p>开设课程申请表</p>
            <hr>
            <div style="text-align: left;position: relative;left: 200px">
                课程名称：<input class="inputtext" type="text" name="name"><br><br>
                上课时间：<input class="inputtext"  type="text" name="time"><br><br>
                面向对象：<input class="inputtext" type="text" name="name"><br><br>
                课程简介：<textarea rows="5" cols="20" name="curriculum"></textarea><br><br>
                老师简介：<textarea rows="5" cols="20" name="teacher"></textarea><br><br>
                课程费用：<input class="inputtext" type="text" name="name"><br><br>
            </div>
            <hr>
            <input class="button" type="submit" value="提交" onclick="">
        </form>
    </div>
</div>

<div class="bar2_2_page">
    <table>
        <tr>
            <th>序号</th>
            <th>课程名称</th>
            <th>上课时间</th>
            <th>教室</th>

        </tr>
        <tr>
            <td>1</td>
            <td>Web制作基础</td>
            <td>4-16周 周一 9-10</td>
            <td >07012402</td>
        </tr>
    </table>
</div>

<div class="bar3_1_page">

    <table>
        <tr>
            <th>序号</th>
            <th style="width:300px">课题名称</th>
            <th>研究时间</th>
            <th>负责人</th>
            <th>研究类别</th>
            <th>项目类别</th>
            <th>所在学院</th>
            <th>团队人数</th>
            <th>项目资金</th>
            <th>完成情况</th>
        </tr>
        <tr>
            <td>1</td>
            <td>基于复杂网络的本体结构分析研究</td>
            <td>2016.7-2017.1</td>
            <td>张三</td>
            <td>基础</td>
            <td>校重点项目</td>
            <td>信息工程学院</td>
            <td>10</td>
            <td>1500</td>
            <td>已完成</td>
        </tr>


    </table>

</div>

<div class="bar3_2_page">
    <div class="yue">
        <form>
            <p>经费申请</p>
            <hr>
            项目名称：<input class="inputtext" type="text" name="name"><br><br>
            申请人：&nbsp;&nbsp;&nbsp;<input class="inputtext" type="text" name="name"><br><br>
            申请金额：<input class="inputtext" type="text" name="name"><br><br>
            研究年限：<input class="inputtext" type="text" name="name"><br><br>
            研究类别：<input class="inputtext" type="text" name="name"><br><br>
            项目类别：<input class="inputtext" type="text" name="name"><br><br>
            所在学院：<input class="inputtext" type="text" name="name"><br><br>

            <hr>
            <input class="button" type="submit" value="提交" onclick="">
        </form>
    </div>
</div>

<div class="bar3_3_page">
    <table>
        <tr>
            <th>序号</th>
            <th>项目名称</th>
            <th>申请金额</th>
            <th>申请状况</th>
            <th>实际金额</th>
            <th>已用金额</th>
            <th>剩余金额</th>
            <th>查看</th>
        </tr>
        <tr>
            <td>1</td>
            <td>基于复杂网络的本体结构分析研究</td>
            <td>1500</td>
            <td>已发放</td>
            <td>1500</td>
            <td>1300</td>
            <td>200</td>
            <td><input type="button" value="明细" ></td>
        </tr>
    </table>
</div>

<div class="bar4_1_page">
    <div class="yue" style="position: relative;top: -30px">
        <form>
            <p>个人信息</p>
            <hr>
            <div style="text-align: left;padding-left:300px;position:relative;left: 25px;">
                <p>姓名：<?php echo $arr[0] ?></p>
                <p>性别：<?php echo $arr[3] ?></p>
                <p>学院：<?php echo $arr[4] ?></p>
                <p>工号：<?php echo $arr[1] ?></p>
                <p>职务：<?php echo $arr[5] ?></p>
            </div>
            <hr>
        </form>
    </div>
</div>

<div class="bar4_2_page">
    <div class="yue">
        <form action="./Update.php" method="post">
            <p>修改信息</p>
            <hr>
            <div style="text-align: left;position: relative;left: 350px">
                姓名：<input type="text" name="tea_name">
                <br><br>
                性别：<input type="radio" value="男" name="sex">男
                <input type="radio" value="女" name="sex">女
                <br><br>
                学院：<input type="text" name="tea_xueyuan">
                <br><br>
                密码：<input type="text" name="tea_pwd">
                <br><br>
                职务：<input type="text" name="tea_zhiwu">
                <br><br>
                请上传头像图片：<input type="file"  name="tea_pic"><br/>
            </div>
            <hr>
            <input class="button" type="submit" value="上交" >
            <input class="button" type="button" value="取消"  onclick="reset();">
        </form>
    </div>
</div>
<script language="JavaScript" type="text/javascript">
    $(".bar").click(function () {
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideUp("1500");

    });
    $(".bar1").click(function () {
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideUp("1500");

    });
    $(".bar2").click(function () {
        $(".sonBar2 p").slideToggle("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideUp("1500");

    });
    $(".bar3").click(function () {
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideToggle("1500");
        $(".sonBar4 p").slideUp("1500");

    });
    $(".bar4").click(function () {
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideToggle("1500");

    });
    $(".bar").click(function () {
        $(".bar_page").show();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar1").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").show();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar2_1").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").show();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar2_2").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").show();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar3_1").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").show();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar3_2").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").show();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar3_3").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").show();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
    });
    $(".bar4_1").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").show();
        $(".bar4_2_page").hide();
    });
    $(".bar4_2").click(function () {
        $(".bar_page").hide();
        $(".bar1_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").show();
    });
    $(".bar4_3").click(function () {
        self.location='../yun_login.html';
    });
</script>
</body>