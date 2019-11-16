<?php
require_once("db_config_server.php");
mysqli_query($link, "CREATE TABLE user_70(name CHAR(50),address CHAR(50),password CHAR(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link, "INSERT INTO user_70(name,address,password)VALUES('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_query($link, "INSERT INTO user_70(name,address,password)VALUES('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')");
echo mysqli_error($link);