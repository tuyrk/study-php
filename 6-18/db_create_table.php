<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/20
 * Time: 22:00
 */
require_once("db_config.php");
mysqli_query($link, "CREATE TABLE user_170(user_name CHAR(50),address CHAR(50),password CHAR(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link, "INSERT INTO user_170(user_name,address,password)VALUES('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_query($link, "INSERT INTO user_170(user_name,address,password)VALUES('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_error($link);