<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/8
 * Time: 9:45
 */
$DEBUG = true;
require_once("db_config.php");
mysqli_query($link, "drop database student");
mysqli_query($link, "create database student");
mysqli_query($link, "use student");
mysqli_query($link, "CREATE TABLE stuinfo(
id CHAR(50),
name CHAR(50),
score INT
)ENGINE = MYISAM DEFAULT CHARSET = utf8");

mysqli_query($link, "CREATE TABLE user (
  username CHAR(20),
  password CHAR(40)
) ENGINE = MYISAM DEFAULT CHARSET = utf8");
echo mysqli_error($link);
