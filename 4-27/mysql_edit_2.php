<?php
require_once("db_config.php");
if (isset($_POST['ok'])) {
    $id = $_POST["id"];
    echo $id;
    $query_string = "delete from stuinfo where id = '$id'";
    mysqli_query($link, $query_string);
}