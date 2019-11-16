<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/8
 * Time: 9:45
 */
$link = mysqli_connect("localhost", "root","123456","student","3306");
mysqli_query($link,"set names utf8");
mysqli_query($link,"use student");