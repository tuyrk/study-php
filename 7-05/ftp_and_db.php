<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 11:56
 */
/*
实现代码上传到应用服务器并成功连接到数据库服务。(基础必考)
要求如下：
	文件名为ftp_and_db.php
	程序文件中用mysqli扩展库连接到数据库
	将连接对象用var_dump输出
 */
$link = mysqli_connect("localhost","user_20180705_58030","VDay03M5mD7qFG9","exam_20180705_58030");
var_dump($link);