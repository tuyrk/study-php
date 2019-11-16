<?php
$link = mysqli_connect("localhost", "root","123456","student","3306");
mysqli_query($link,"set names utf8");
mysqli_query($link,"use student");