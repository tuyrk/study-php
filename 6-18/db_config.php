<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/20
 * Time: 21:59
 */
$link = mysqli_connect("localhost", "user_20180618_58030", "eYDAb719vMuqF1q", "exam_20180618_58030");
mysqli_query($link, "CREATE DATABASE IF NOT EXISTS exam_20180618_58030");
mysqli_query($link, "SET NAMES utf8");
mysqli_query($link, "USE exam_20180618_58030");