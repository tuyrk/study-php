<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/4
 * Time: 16:09
 */
require_once('db_config.php');
mysqli_query($link, "CREATE TABLE user_70(name CHAR(50),address CHAR(50),password CHAR(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link, "INSERT INTO user_70(name,address,password)VALUES('mike','shanghai','1')");
mysqli_query($link, "INSERT INTO user_70(name, address, password)VALUES('rose', 'beijing', '1')");
mysqli_error($link);
