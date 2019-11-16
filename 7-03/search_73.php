<!--
实现查询功能。
要求如下：
    程序文件名为search_73.php
    表名为user_70；姓名字段为name。
    实现姓名列表。
    实现按姓名查询的form表单。
    姓名查询框的id与name为search_name。
    确定按钮的id、name与value属性值为ok。
    如果查询到数据，则显示此姓名对应的地址。
    如果没有查询到数据，则显示“查无此人”。
    附：建表代码与测试数据
    create table user_70(name char(50),address char(50),password char(50))ENGINE=MyISAM DEFAULT CHARSET=utf8
    insert into user_70(name,address,password)values('mike','shanghai','1')
    insert into user_70(name,address,password)values('rose','beijing','1')
    小提示
    请将数据库配置文件，建表文件与解题代码文件分成三个独立的文件，否则会影响到判分。
-->
<form method="post">
    姓名：<label for="search_name"></label><input type="text" id="search_name" name="search_name"/><br>
    <input type="submit" id="ok" name="ok" value="ok"/>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/4
 * Time: 16:13
 */
require_once('db_config.php');
if (isset($_POST['ok'])) {
    $search_name = $_POST['search_name'];
    $query_string = "select address from user_70 WHERE name = '$search_name'";
    $rs = mysqli_query($link, $query_string);
    if (mysqli_num_rows($rs) == 1) {
        $row = mysqli_fetch_assoc($rs);
        echo $row['address'];
    } else {
        echo '查无此人';
    }
}