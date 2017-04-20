<?php
include "admin.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>扬州大学云财务管理系系统</title>
    <link href="./yun_adminhome.css" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="../jquery-3.2.0.js"></script>
</head>
<body>
<div class="tool">
    <div class="Logo">
        <img src="../Logo/扬大横_白.png" alt="Logo">
    </div>
    <div class="user">
        <img src="../image/user.png">
        <p><?PHP echo $arr[0] ?>,您好</p>
        <p>欢迎进入云财务管理系统</p>
    </div>
    <div class="banner">
        <div class="bar1">
            <p>账户管理</p>
        </div>
        <div class="sonBar1">
            <p id="bar1_1">待办事务</p>
            <p id="bar1_2">修改密码</p>

        </div>
        <div class="bar2">
            <p>学生端</p>
        </div>
        <div class="sonBar2">
            <p id="bar2_1">缴费记录</p>
            <p id="bar2_2">助学审批</p>

        </div>
        <div class="bar3">
            <p>教师端</p>
        </div>
        <div class="sonBar3">
            <p  id="bar3_1">工资发放</p>
            <p  id="bar3_2">课程审批</p>
            <p  id="bar3_3">项目结题</p>
            <p  id="bar3_4">经费审批</p>
        </div>
        <div class="bar4">
            <p>数据管理</p>
        </div>
        <div class="sonBar4">
            <p id="bar4_1">查看数据</p>
            <p id="bar4_2">云数据</p>
            <p id="bar4_3"></p>
        </div>
        <div class="bar5">
            <p>注销账户</p>
        </div>
    </div>
</div>

<div class="bar1_1_page">
    <div class="yue">
        <form>
            <p>代办事务</p>
            <hr>
            <div style="text-align: right;padding-right:300px">
                <br>
                <p>X位同学助学申请未审批<input class="button" type="button" value="立即处理"></p>
                <br>
                <p>X位老师工资未发放<input class="button" type="button" value="立即处理"></p>
                <br>
                <p>X项开设课程申请未通过<input class="button" type="button" value="立即处理"></p>
                <br>
                <p>X笔经费未审批发放<input class="button" type="button" value="立即处理"></p>
                <br>
                <p></p>
            </div>
            <hr>
        </form>
    </div>
</div>
<div class="bar1_2_page">
    <div class="yue">
        <form>
            <p>修改密码</p>
            <hr>
            <div style="text-align:left ;padding-left:300px">
                <br>
                <p>原密码：<input type="text" name="name"></p>
                <br>
                <p>新密码：<input type="text" name="name"></p>
                <br>
                <p></p>
            </div>
            <hr>
            <input style="text-align:center" class="button" type="submit" value="上交" >
        </form>
    </div>
</div>

<div class="bar2_1_page">
    <form style="text-align: left;position: relative;left:10px">
        <div style="margin:10px 30px;">
            范围:<select>
                <option value="3 months">最近三个月</option>
                <option value="1 year">最近一年</option>
                <option value="all">全部</option>
            </select>
            <span style="float:right;">订单号：<input type="text" name="name"><input class="button" type="submit" value="查询"></span>
        </div>
    </form>
    <table style="text-align:center;">
        <tr>
            <th>序号</th>
            <th>订单号</th>
            <th>类别</th>
            <th>姓名</th>
            <th>学号</th>
            <th>所在学院</th>
            <th>金额</th>
            <th>状态</th>
            <th>备注</th>
        </tr>
        <tr>
            <td>1</td>
            <td >2017010700001</td>
            <td >英语四级</td>
            <td >张三</td>
            <td>161300000</td>
            <td>信息工程学院</td>
            <td>30</td>
            <td>已交</td>
            <td></td>

        </tr>
        <tr>
            <td>2</td>
            <td ></td>
            <td ></td>
            <td ></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>16</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>17</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>19</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>20</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <form sytle="float:right">X条记录&nbsp;x/xxx页&nbsp;上一页&nbsp;下一页&nbsp;跳转到：<input style="width:50px;" type="text" name="name"> </form>
</div>
<div class="bar2_2_page">
    <form style="text-align: left;position: relative;left:10px">
        <div style="margin:10px 30px;">

            <span >关键字：<input type="text" name="name"><input class="button2" type="submit" value="查询"></span>
        </div>
    </form>
    <table style="text-align:center;">
        <tr>
            <th>序号</th>
            <th>账户</th>

            <th>姓名</th>
            <th>性别</th>
            <th>学号</th>
            <th>所在学院</th>
            <th>民族</th>
            <th>籍贯</th>
            <th>政治面貌</th>
            <th>家庭年收入</th>
            <th>家庭地址</th>
            <th>操作</th>

        </tr>
        <tr>
            <td>1</td>
            <td >161300000</td>

            <td >张三</td>
            <td>男</td>
            <td>161300000</td>
            <td>信息工程学院</td>
            <td>汉</td>
            <td>江苏</td>
            <td>共青团员</td>
            <td>30000</td>
            <td><input class="button3" type="button" value="详情"></td>
            <td><input class="button3" type="button" value="编辑"><input class="button3" type="button" value="删除"></td>


        </tr>
        <tr>
            <td>2</td>
            <td ></td>
            <td ></td>
            <td ></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>16</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>17</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>19</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>20</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <form sytle="float:right">X条记录&nbsp;x/xxx页&nbsp;上一页&nbsp;下一页&nbsp;跳转到：<input style="width:50px;" type="text" name="name">
</div>

<div class="bar3_1_page">
    2_1
</div>
<div class="bar3_2_page">
    2_2
</div>
<div class="bar3_3_page">
    2_3
</div>
<div class="bar3_4_page">

</div>
<div class="bar4_1_page">
    <form style="text-align: left;position: relative;left:10px">
        <div style="margin:10px 30px;">
            类别:<select>
                <option value="3 months">学生</option>
                <option value="1 year">教师</option>
                <option value="all">全部</option>
            </select>
            <span style="text-align:center"><input class="button1" type="button" value="添加账户"></span>
            <span style="float:right;">关键字：<input type="text" name="name"><input class="button2" type="submit" value="查询"></span>
        </div>
    </form>
    <table style="text-align:center;">
        <tr>
            <th>序号</th>
            <th>账户</th>
            <th>类别</th>
            <th>姓名</th>
            <th>性别</th>
            <th>学号/工号</th>
            <th>所在学院</th>
            <th>账户余额</th>
            <th>操作</th>

        </tr>
        <tr>
            <td>1</td>
            <td >161300000</td>
            <td >学生</td>
            <td >张三</td>
            <td>男</td>
            <td>161300000</td>
            <td>信息工程学院</td>
            <td>30</td>
            <td><input class="button3" type="button" value="编辑"><input class="button3" type="button" value="删除"></td>


        </tr>
        <tr>
            <td>2</td>
            <td ></td>
            <td ></td>
            <td ></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>8</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>12</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>13</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>15</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>16</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>17</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>18</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>19</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>20</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <form sytle="float:right">X条记录&nbsp;x/xxx页&nbsp;上一页&nbsp;下一页&nbsp;跳转到：<input style="width:50px;" type="text" name="name">
</div>
<div class="bar4_2_page">
    3_2
</div>
<div class="bar4_3_page">
    3_2
</div>
<script language="JavaScript" type="text/javascript">
    $("#bar1_1").click(function () {
        $(".bar1_1_page").show();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();

        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar1_2").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").show();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();

        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar1_3").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").show();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();

        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar2_1").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").show();
        $(".bar2_2_page").hide();

        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar2_2").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").show();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });

    $("#bar3_1").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").show();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar3_2").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").show();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar3_3").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").show();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar3_4").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").show();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar4_1").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").show();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").hide();
    });
    $("#bar4_2").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").show();
        $(".bar4_3_page").hide();
    });
    $("#bar4_3").click(function () {
        $(".bar1_1_page").hide();
        $(".bar1_2_page").hide();
        $(".bar1_3_page").hide();
        $(".bar2_1_page").hide();
        $(".bar2_2_page").hide();
        <!--$(".bar2_3_page").hide();-->
        $(".bar3_1_page").hide();
        $(".bar3_2_page").hide();
        $(".bar3_3_page").hide();
        $(".bar3_4_page").hide();
        $(".bar4_1_page").hide();
        $(".bar4_2_page").hide();
        $(".bar4_3_page").show();
    });

    $(".bar1").click(function () {
        $(".sonBar1 p").slideToggle("1500");
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideUp("1500");
    });
    $(".bar2").click(function () {
        $(".sonBar1 p").slideUp("1500");
        $(".sonBar2 p").slideToggle("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideUp("1500");
    });
    $(".bar3").click(function () {
        $(".sonBar1 p").slideUp("1500");
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideToggle("1500");
        $(".sonBar4 p").slideUp("1500");
    });
    $(".bar4").click(function () {
        $(".sonBar1 p").slideUp("1500");
        $(".sonBar2 p").slideUp("1500");
        $(".sonBar3 p").slideUp("1500");
        $(".sonBar4 p").slideToggle("1500");
    });
    $(".bar5").click(function () {
        self.location='../yun_login.html';
    });
</script>
</body>
</html>
﻿
