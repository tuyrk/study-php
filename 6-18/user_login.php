<!--
第三题 实现登陆功能
要求如下：
    程序文件名为user_login.php
    表名为user_170；姓名字段为user_name(char 50)
    密码字段为password(char 50),password采用md5加密。
    表单提交方式为post(char 50)
    表单中姓名输入框的id与name属性值都为user_name
    密码输入框的id与name属性值为password；提交按钮id、name与value属性值都为ok
    登陆成功后，设置session变量session_name，其值为登陆的用户名
    如果用户登陆成功，自动跳转到user_info.php页面，在此页面中输出session变量session_name的值

    附：建表代码与测试数据
    create table user_170(user_name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8
    insert into user_170(user_name,address,password)values('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')
    insert into user_170(user_name,address,password)values('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')
    小提示
    请将数据库配置文件，建表文件与解题代码文件分成三个独立的文件，否则会影响到判分。
-->

<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/20
 * Time: 21:58
 */
require_once("db_config.php");
session_start();
if (isset($_POST['ok'])) {
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);
    $query_string = "select count(*) counter from user_170 WHERE user_name = '$user_name' AND password = '$password'";
    echo $query_string;
    $rs = mysqli_query($link, $query_string);
    $row = mysqli_fetch_assoc($rs);
    if ($row['counter'] == 1) {
        $_SESSION['session_name'] = $user_name;
        header('location:user_info.php');
    } else {
        echo "姓名或密码错误";
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>实现登陆功能</title>
</head>
<body>
<form method="post">
    姓名：<label for="user_name"></label><input id="user_name" name="user_name"/><br>
    密码：<label for="password"></label><input id="password" name="password"/><br>
    <input type="submit" id="ok" name="ok" value="ok"/>
</form>
</body>
</html>