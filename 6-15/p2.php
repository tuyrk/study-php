<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/15
 * Time: 10:18
 */
require_once('acl.php');
$resource = 'p2.php';
//在实际开发中，角色应该是由session传过来，教学中直接用URL参数来模拟
if (isset($_GET['role'])) {
    $role = $_GET['role'];
    if (isset($acl[$role])) {
        if (in_array($resource, $acl[$role])) {
            echo '欢迎光临' . $role;
        } else {
            echo '您无权访问';
        }
    } else {
        echo '没有设置对应的权限';
    }
} else {
    echo '无权访问';
}