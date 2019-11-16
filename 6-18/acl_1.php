<!--
第三题 实现ACL功能
    要求如下：
        程序文件名为acl_1.php
        定义ACL控制文件acl_list.php
        在acl_list.php中定义acl表如下：
        $acl=array(
        "cto"=>array("p_1.php","p_2.php","p_3.php"),
        "manager"=>array("p_2.php","p_3.php"),
        "staff"=>array("p_3.php")
        )

        建立p_1.php,p_2.php,p_3.php三个程序，在其中实现acl访问控制。
        采用get方式实现角色传入，URL请求格式如下：
        p_x.php?role=cto等
        当有权限时，页面中显示"欢迎光临"字样。
        当无权限时，页面中显示"无权访问"字样。
-->
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/20
 * Time: 22:48
 */
if (isset($_GET['role'])) {
    $role = $_GET['role'];
    if (isset($acl[$role])) {
        if (in_array($resource, $acl[$role])) {
            echo '欢迎光临';
        } else {
            echo '无权访问';
        }
    } else {
        echo '没有此权限';
    }
} else {
    echo '无权访问';
}