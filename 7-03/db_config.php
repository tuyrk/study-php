<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/4
 * Time: 16:06
 */
$link = mysqli_connect("localhost", "user_20180703_58030", "OitAxvTWBLq7szD", "exam_20180703_58030");
mysqli_query($link, "set names utf8");
mysqli_query($link, "use exam_20180703_58030");
mysqli_error($link);