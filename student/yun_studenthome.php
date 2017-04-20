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
            <img src="../image/user.png">
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
                <td>CET4</td>
                <td>CET6</td>
                <td>雅思</td>
                <td>GRE</td>
            </tr>
            <tr>
                <td>思科</td>
                <td>计算机<br>二级</td>
                <td>计算机<br>三级</td>
                <td>计算机<br>四级</td>
            </tr>
            <tr>
                <td>会计证</td>
                <td>MME</td>
                <td>全国<br>普通话</td>
                <td>工程师<br>证书</td>
            </tr>
        </table>
        <div class="last">
            <p>版权所有©2017 扬州大学</p>
        </div>
    </div>
    <div class="bar1_1_page">
        <table>
            <tr class="head">
                <th colspan="2">全部标记为已查看</th>
                <th colspan="2">查看选中项目详情</th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
            <tr class="head">
                <th></th>
                <th>学院</th>
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>
            <tr>
                <td>1</td>
                <td>信息工程学院</td>
                <td>2016—2017</td>
                <td>2000</td>
                <td>已交</td>
                <td>学费</td>
            </tr>
            <tr>
                <td>2</td>
                <td>信息工程学院</td>
                <td>2016—2017</td>
                <td>1500</td>
                <td>已交</td>
                <td>住宿费</td>
            </tr>
            <tr>
                <td>3</td>
                <td>信息工程学院</td>
                <td>2016—2017</td>
                <td>1200</td>
                <td>已交</td>
                <td>重修费</td>
            </tr>
            <tr>
                <td>4</td>
                <td>信息工程学院</td>
                <td>2016—2017</td>
                <td>486</td>
                <td>已交</td>
                <td>书本费</td>
            </tr>
            <tr>
                <td>5</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>6</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>7</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>8</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>9</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>10</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>11</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>12</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>13</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>14</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>15</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>16</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>17</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>18</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>19</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>20</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">下一页</th>
            </tr>
        </table>
    </div>
    <div class="bar1_2_page">
        <table>
            <tr  class="head">
                <th colspan="2">全部标记为已查看</th>
                <th colspan="2">查看选中项目详情</th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
            <tr  class="head">
                <th>学号</th>
                <th>姓名</th>
                <th>学院</th>
                <th>学期</th>
                <th>费用</th>
                <th>状态</th>
            </tr>
            <tr>
                <td>123456</td>
                <td>张三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">反馈选中项目错误</th>
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
                <p>账户：</p>
                <p>金额：</p>
            </div>
            <hr>
            <br>
        </div>
    </div>
    <div class="bar2_1_page">
        <table>
            <tr class="head">
                <th colspan="2">全部标记为已查看</th>
                <th colspan="2">查看选中项目详情</th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
            <tr class="head">
                <th></th>
                <th>学院</th>
                <th>学期</th>
                <th>金额</th>
                <th>状态</th>
                <th>备注</th>
            </tr>
            <tr>
                <td>1</td>
                <td>信息工程学院</td>
                <td>2017年3月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>2</td>
                <td>信息工程学院</td>
                <td>2017年4月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>3</td>
                <td>信息工程学院</td>
                <td>2017年5月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>4</td>
                <td>信息工程学院</td>
                <td>2017年6月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>5</td>
                <td>信息工程学院</td>
                <td>2017年7月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>6</td>
                <td>信息工程学院</td>
                <td>2017年8月</td>
                <td>3000</td>
                <td>已发放</td>
                <td>补助金</td>
            </tr>
            <tr>
                <td>7</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>8</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>9</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>10</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>11</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>12</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>13</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>14</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>15</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>16</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>17</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>18</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>19</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>20</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
        </table>
    </div>
    <div class="bar2_2_page">
        <table>
            <tr  class="head">
                <th colspan="2">全部标记为已查看</th>
                <th colspan="2">查看选中项目详情</th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
            <tr  class="head">
                <th>学号</th>
                <th>姓名</th>
                <th>学院</th>
                <th>学期</th>
                <th>费用</th>
                <th>状态</th>
            </tr>
            <tr>
                <td>123456</td>
                <td>张三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>李四三</td>
                <td>信息工程学院</td>
                <td>2017—2018</td>
                <td>5400</td>
                <td>已交</td>
            </tr>
            <tr  class="head">
                <th colspan="2">上一页</th>
                <th colspan="2"><p>跳转至:<input type="text"></p></th>
                <th colspan="2">反馈选中项目错误</th>
            </tr>
        </table>
    </div>
    <div class="bar2_3_page">
        <div class="yue">
            <form>
                <p>贫困生申请表</p>
                <hr>
                <div style="text-align: left;position: relative;left: 200px">
                    <label for="get_stu_name">姓名：</label><input type="text" id="get_stu_name">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="get_stu_minzu">民族：</label><input type="text" id="get_stu_minzu">
                    <br><br>
                    <label for="get_stu_name">籍贯：</label><input type="text">
                    &nbsp;&nbsp;&nbsp;&nbsp;<label for="get_stu_name">政治面貌：</label><input type="text">
                    <br><br>
                    性别：<input type="radio" value="男" name="sex">男
                          <input type="radio" value="女" name="sex">女
                    <br><br>
                    身份证号：<input type="text">
                    <br><br>
                    家庭住址：<input type="text">
                    <br><br>
                    家庭收入：<input type="text">
                    <br><br>
                    个人简述：<textarea rows="5" cols="30" style="resize: none"></textarea>
                </div>
                <hr>
                <input type="submit" value="上交" class="submit2_3">
                <input type="submit" value="取消" class="submit2_3">
            </form>
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
            <form action="Update.php" method="post">
                <p>修改信息</p>
                <hr>
                <div style="text-align: left;position: relative;left: 350px">
                    姓名：<input type="text" name="stu_name">
                    <?php ?>
                    <br><br>
                    性别：<input type="radio" value="男" name="sex">男
                          <input type="radio" value="女" name="sex">女
                    <br><br>
                    学院：<input type="text" name="stu_xueyuan">
                    <br><br>
                    学号：<input type="text" name="stu_id">
                    <br><br>
                    财务编号：<input type="text" name="stu_bianhao">
                </div>
                <hr>
                <input type="submit" value="上交" class="submit3_2">
                <input type="submit" value="取消" class="submit3_2">
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
    </script>
</body>
</html>
﻿