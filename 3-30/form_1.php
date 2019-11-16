<!--
使用type="submit"提交表单
-->
<meta charset="UTF-8"/>
<?php
//经典代码段
if (isset($_POST["name"])) {
//    提交进入时，获取用户输入的数据
    $name = $_POST["name"];
    $age = $_POST["age"];
    echo "保存成功";
} else {
//    第一次进入时，初始化一些变量
    $name = "";
    $age = "";
}
?>
<form action="" method="post">
    <label for="name">姓名：</label><input type="text" id="name" name="name" value="<?php echo $name;?>"/>
    <br/>
    <label for="age">年龄：</label><input type="text" id="age" name="age" value="<?php echo $age;?>"/>
    <br/>
    <input type="submit" id="ok" name="ok" value="提交"/>
</form>
