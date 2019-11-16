<meta charset="UTF-8"/>
<?php
$link = mysqli_connect("localhost", "root", "","test");
mysqli_query($link,"create database student");
mysqli_query($link,"USE student");
mysqli_query($link,"set NAMES  utf8");
mysqli_query($link,"create database student");
mysqli_query($link,"drop table stuinfo");
mysqli_query($link, "
create table stuinfo(
id CHAR(50),
name CHAR(50),
score INT) ENGINE = myisam DEFAULT CHARSET = utf8");//memory myisam innodb
$id = uniqid();
mysqli_query($link, "
insert into stuinfo
(id, name, score) VALUES 
('$id', '涂元坤', '100')");
$rs = mysqli_query($link,"select * from stuinfo");
while($row = mysqli_fetch_assoc($rs)){
    echo $row["id"]." ".$row["name"]." ".$row["score"]."<br/>";
}
echo mysqli_error($link);
?>

