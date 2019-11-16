<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/8
 * Time: 12:07
 */
//如果用户名不存在，就新注册，否则修改密码
require_once('db_config.php');
session_start();
if (isset($_POST['ok'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query_string = "select count(*) counter from user WHERE username = '$username' and password = '$password'";
    $rs = mysqli_query($link, $query_string);
    $row = mysqli_fetch_assoc($rs);
    if ($row['counter'] == 1) {
        $_SESSION['user'] = $username;
        header('location:userlist_1.php');
    } else {
        echo "用户名或密码错误<br>";
        $_SESSION['user'] = null;
    }
}
?>
<meta charset="UTF-8">
<div align="center">
    <b>用户登录</b>
    <form action="login_2.php" method="post">
        姓名：<label for="username"></label><input type="text" id="username" name="username" value=""/><br>
        密码：<label for="password"></label><input type="password" id="password" name="password" value=""/><br>
        <input type="submit" id="ok" name="ok" value="提交"><br>
    </form>
</div>

