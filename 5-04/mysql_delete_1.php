<?php
require_once("db_config.php");
$id = $_GET['id'];
$query_string = "DELETE FROM stuinfo WHERE id = '$id'";
mysqli_query($link, $query_string);
header("location:mysql_list_2.php");