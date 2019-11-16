<!--
BMI健康指标计算器。
要求如下：
    程序文件名为bmi_631.php
    完成对BMI指数的计算，计算公式为：
    体质指数（BMI）=体重（kg）÷身高*身高（m）
    身高输入框的id与name为height
    体重输入框的id与name为weight
    确定按钮的id、name与value属性值为ok。
    点击确定后，计算此人的BMI指数并显示在页面上。
    显示格式为“BMI:xx.xx”,计算结果用round保留到小数点后2位(四舍五入）。
    注：此题提交到服务器端计算并显示结果。(此题用JS方法实现的不得分)
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>BMI健康指标计算器</title>
</head>
<body>
<form method="post">
    身高(单位:m)：<label for="height"></label><input type="text" id="height" name="height"/><br>
    体重(单位:kg)：<label for="weight"></label><input type="text" id="weight" name="weight"/><br>
    <input type="submit" id="ok" name="ok" value="ok"/>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/7/4
 * Time: 15:48
 */
if (isset($_POST['ok'])) {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $BMI = $weight / pow($height, 2);
    echo "BMI:" . round($BMI, 2);
}