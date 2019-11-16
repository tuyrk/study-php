<!--
实现登陆与访问保护功能。
要求如下：
	程序文件名为login.php
	表名为user_70；姓名字段为name
	密码字段为password，md5加密
	表单提交方式为post
	表单中姓名输入框的id与name属性值为name
	密码输入框的id与name属性值为password；提交按钮id与name属性值为ok
	登陆成功后，则设置session变量s_name，其值为登陆的用户名
	如果用户登陆成功，自动跳转到user_info.php页面，在此页面中输出session变量s_name的值
	附：建表代码与测试数据
	create table user_70(name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8
	insert into user_70(name,address,password)values('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')
	insert into user_70(name,address,password)values('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')
	小提示
	请将数据库配置文件，建表文件与解题代码文件分成三个独立的文件，否则会影响到判分。
-->
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 12:03
 */
session_start();
require_once("ftp_and_db.php");
if (isset($_POST['ok'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $rs = mysqli_query($link, "select count(*) counter from user_70 where name = '$name' and password = '$password'");
    $counter = mysqli_fetch_assoc($rs)['counter'];
    if ($counter == 1) {
        $_SESSION['s_name'] = $name;
        header('location:user_info.php');
    } else {
        echo '用户名或密码错误';
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>实现登陆与访问保护功能</title>
</head>
<body>
<form method="post">
    姓名：<label for="name"></label><input type="text" id="name" name="name"/>
    密码：<label for="password"></label><input type="password" id="password" name="password"/>
    <input type="submit" id="ok" name="ok">
</form>
</body>
</html>
