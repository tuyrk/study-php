<?php
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
mysqli_query($link, "INSERT INTO stuinfo (id, name, score) VALUES ('001','mike',98)");
mysqli_query($link, "INSERT INTO stuinfo (id, name, score) VALUES ('002','tom',88)");

for ($i = 1; $i <= 40; $i++) {
    $id = $i;
    $name = "name_" . $i;
    $score = $i + 50;
    mysqli_query($link, "INSERT INTO stuinfo (id, name, score) VALUES ('$id','$name',$score)");
}
if ($DEBUG) {
    echo mysqli_error($link);
}