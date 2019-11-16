<?php
/**
 * Created by PhpStorm.
 * User: TYK
 * Date: 2018/6/22
 * Time: 10:56
 */
if (isset($_POST['ok'])) {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $BMI = $weight / pow($height, 2);
    echo 'BMI:' . round($BMI, 2);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>BMI健康指标计算器</title>
</head>
<body>
<form method="post">
    身高：<label for="height"></label><input type="text" id="height" name="height"/><br>
    体重：<label for="weight"></label><input type="text" id="weight" name="weight"/><br>
    <input type="submit" id="ok" name="ok" value="ok"><br>
</form>
</body>
</html>
