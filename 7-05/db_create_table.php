<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 12:03
 */
require_once('ftp_and_db.php');
$query_strings = array(
    "create table user_70(name char(50),address char(50),password char(50))ENGINE = MyISAM DEFAULT CHARSET = utf8",
    "insert into user_70(name, address, password)values('mike', 'shanghai', 'c4ca4238a0b923820dcc509a6f75849b')",
    "insert into user_70(name, address, password)values('rose', 'beijing', 'c4ca4238a0b923820dcc509a6f75849b')"
);
foreach ($query_strings as $query_string) {
    mysqli_query($link, $query_string);
}