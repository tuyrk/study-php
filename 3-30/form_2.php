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
    $gender = $_POST["gender"];
    if ($gender == 01) {
        $check_boy = "checked";
    } else {
        $check_girl = "checked";
    }
    $check_asp = "";
    $check_jsp = "";
    $check_php = "";
    if (isset($_POST["love"])) {
        foreach ($_POST["love"] as $key => $value) {
            if ($value == "asp") {
                $check_asp = "checked";
            }
            if ($value == "jsp") {
                $check_jsp = "checked";
            }
            if ($value == "php") {
                $check_php = "checked";
            }
//            echo $key . "=>" . $value;
//            echo "<br/>";
        }
    } else {
        echo "用户没有选择爱好";
    }
    echo "保存成功";
} else {
//    第一次进入时，初始化一些变量
    $name = "";
    $age = "";
    $gender = "";
    $check_boy = "";
    $check_girl = "";
    $check_asp = "";
    $check_jsp = "";
    $check_php = "";
}
?>
<form action="" method="post">
    <label for="name">姓名：</label><input type="text" id="name" name="name" value="<?php echo $name; ?>"/>
    <br/>
    <label for="age">年龄：</label><input type="text" id="age" name="age" value="<?php echo $age; ?>"/>
    <br/>
    性别：
    <!--    <label for="boy">男</label><input type="radio" id="boy" name="gender" value="01" -->
    <?php //if ($gender == 01){?><!--checked--><?php //} ?><!--/>-->
    <!--    <label for="girl">女</label><input type="radio" id="girl" name="gender" value="02" -->
    <?php //if ($gender == 02){?><!--checked--><?php //} ?><!--/>-->
    <label for="boy">男</label><input type="radio" id="boy" name="gender" value="01" <?php echo $check_boy ?>/>
    <label for="girl">女</label><input type="radio" id="girl" name="gender" value="02" <?php echo $check_girl ?>/>
    <br/>
    爱好：
    <label for="asp">asp</label><input type="checkbox" id="asp" name="love[]" value="asp" <?php echo $check_asp ?>/>
    <label for="jsp">jsp</label><input type="checkbox" id="jsp" name="love[]" value="jsp" <?php echo $check_jsp ?>/>
    <label for="php">php</label><input type="checkbox" id="php" name="love[]" value="php" <?php echo $check_php ?>/>
    <br/>
    <input type="submit" id="ok" name="ok" value="提交"/>
</form>
