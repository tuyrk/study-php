<?php
require_once('db_config.php');
session_start();
if (isset($_POST['ok'])) {
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $query_string = "select count(*) counter from user_70 WHERE name  = '$name' and password = '$password'";
    $rs = mysqli_query($link, $query_string);
    $row = mysqli_fetch_assoc($rs);
    if ($row['counter'] == 1) {
        $_SESSION['s_name'] = $name;
        header('location:user_info.php');
    } else {
        echo "用户名或密码错误<br>";
        $_SESSION['s_name'] = null;
    }
}
?>
<meta charset="UTF-8">
<div align="center">
    <b>用户登录</b>
    <form action="login.php" method="post">
        姓名：<label for="name"></label><input type="text" id="name" name="name" value=""/><br>
        密码：<label for="password"></label><input type="password" id="password" name="password" value=""/><br>
        <input type="submit" id="ok" name="ok" value="提交"><br>
    </form>
</div>