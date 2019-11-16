<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/6
 * Time: 9:43
 */
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    if ($name == null) {
        echo '姓名不能为空';
    } else {
        echo '欢迎' . $name;
    }
}