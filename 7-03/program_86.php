<!--
本题10分
给定一个数，求其阶乘，采用自定义函数实现。
要求如下：
    文件名为program_86.php
    数字通过url传递，格式为program_86.php?nubmer=*
    函数名为recursion
    通过echo recursion($nubmer)输出结果
-->
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/4
 * Time: 16:37
 */
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    echo recursion($number);
}

function recursion($number)
{
    for ($result = 1; $number > 1; $number--) {
        $result = $result * $number;
    }
    return $result;
}