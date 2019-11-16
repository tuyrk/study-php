<?php
$DEBUG = true;
require_once("db_config.php");
mysqli_query($link, "drop database exam_20180622_58030");
mysqli_query($link, "create database exam_20180622_58030");
mysqli_query($link, "use exam_20180622_58030");
mysqli_query($link, "CREATE TABLE user_70(name CHAR(50),address CHAR(50),password CHAR(50))ENGINE=MyISAM DEFAULT CHARSET=utf8");
mysqli_query($link, "INSERT INTO user_70(name,address,password)VALUES('mike','shanghai','c4ca4238a0b923820dcc509a6f75849b')");
mysqli_query($link, "INSERT INTO user_70(name,address,password)VALUES('rose','beijing','c4ca4238a0b923820dcc509a6f75849b')");
echo mysqli_error($link);


