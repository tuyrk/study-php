<meta charset="UTF-8">
<div align="center">
    <b>用户登录</b>
    <form action="login.php" method="post">
        姓名：<label for="username"></label><input type="text" id="username" name="username" value=""/><br>
        密码：<label for="password"></label><input type="password" id="password" name="password" value=""/><br>
        <input type="submit" id="ok" name="ok" value="提交"><br>
    </form>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/8
 * Time: 10:14
 */
session_start();
if (isset($_POST['ok'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //在数据库中查询是否有此人及密码是否正确
    if ($username == '马云' and $password == "123456") {
        $_SESSION['user'] = $username;
        header("location:userlist_1.php");
    } else {
        echo "用户名或密码错误";
    }
}