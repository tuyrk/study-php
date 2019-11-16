<meta charset="UTF-8"/>
<?php
$link = mysqli_connect("localhost", "root", "","test");
var_dump($link);
//创建一个新的数据库

mysqli_query($link, "drop database student");
mysqli_query($link, "create database student");
mysqli_query($link, "
create table stuinfo(
id CHAR(50),
name CHAR(50),
score INT)");
$id = uniqid();
mysqli_query($link, "
insert into stuinfo
(id, name, score) VALUES 
('$id', '涂元坤', '100')");
//mysqli_query($link, "delete from stuinfo where id = 002 limit 3");
$rs = mysqli_query($link,"select * from stuinfo");
while($row = mysqli_fetch_assoc($rs)){
    echo $row["id"]." ".$row["name"]." ".$row["score"]."<br/>";
}
echo mysqli_error($link);
?>