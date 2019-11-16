<?php
require_once("db_config.php");
if (isset($_POST['ok'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $old_name = $_POST['old_name'];
    echo $old_name;
    $score = $_POST['score'];
    //数据有效性判断区域
    $query_string = "select count(*) as counter from stuinfo WHERE name = '$name'";
    $rs = mysqli_query($link, $query_string);
    $row = mysqli_fetch_assoc($rs);
    if (empty($id)) {
        $new_id = uniqid();
        if ($row['counter'] == 0) {

        } else {
            $name = $name . uniqid();
            echo "姓名重名，请修改<br>";
        }
        $query_string = "INSERT INTO stuinfo (id, name, score) VALUES ('$new_id', '$name', '$score')";
    } else {
        if ($row['counter'] >= 1 && $name != $old_name) {
            $name = $name . uniqid();
            echo "姓名重名，请修改<br>";
        }
        $query_string = "update stuinfo set name = '$name', score = '$score' where id = '$id'";
    }
    mysqli_query($link, $query_string);
} else {
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }
}
if(isset($_GET)){
    if (empty($_GET['id'])) {
        $name = '';
        $score = '';
    } else {
        $query_string = "select * from stuinfo where id = '$id'";
        $rs = mysqli_query($link, $query_string);
        $row = mysqli_fetch_assoc($rs);
        $name = $row["name"];
        $score = $row["score"];
    }
}

?>
<form id="form_1" method="post" action="">
    <input type="hidden" id="id" name="id" value="<?php if (!empty($id)) {
        echo $id;
    } ?>">
    <input type="hidden" id="old_name" name="old_name" value="<?php
        echo $name; ?>">
    姓名：<input type="text" id="name" name="name" placeholder="姓名不能为空" value="<?php echo $name; ?>"/><br/>
    成绩：<input type="text" id="score" name="score" value="<?php echo $score; ?>"/><br/>
    <input type="submit" id="ok" name="ok" value="提交"/><br/>
</form>
<a href="mysql_list_2.php">返回列表</a>