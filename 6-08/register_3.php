<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/15
 * Time: 9:28
 */
require_once('db_config.php');
//如果用户名不存在，就新注册，否则修改密码
if (isset($_POST['ok'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    echo $password . "<br>";
    $query_string = "select count(*) as counter from user WHERE username='$username'";
    $rs = mysqli_query($link, $query_string);
    $row = mysqli_fetch_assoc($rs);
    if ($row['counter'] == 0) {
        //新用户，插入
        $query_string = "insert into user (username, password) values ('$username','$password')";
    } else {
        $query_string = "update user set password = '$password' where username = '$username'";
    }
    echo $query_string;
    mysqli_query($link, $query_string);
    mysqli_error($link);
    header('location:login_3.php');
}
?>
<meta charset="UTF-8">
<div align="center">
    <b>用户注册</b> <br>
    <form action="register_3.php" method="post">
        用户名：<label for="username"></label><input type="text" id="username" name="username"/><br>
        密　码：<label for="password"></label><input type="password" id="password" name="password"/><br>
        <input type="submit" id="ok" name="ok" value="提交"/>
    </form>
</div>