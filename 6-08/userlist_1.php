<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/8
 * Time: 9:45
 */

// session操作
// 表面意义为会话
session_start();
if (isset($_SESSION['user'])) {
    echo "这是领导才能访问的重要列表<br>";
    echo "欢迎领导：" . $_SESSION['user'] . '<br>';
} else {
    echo "你无权访问，请登录";
    echo ">登录</a><br>";
}
require_once('db_config.php');
$query_string = "SELECT * FROM user";
$rs = mysqli_query($link, $query_string);
while ($row = mysqli_fetch_assoc($rs)) {
    echo $row['username'] . ' ' . $row['password'] . '<br>';
}
?>

