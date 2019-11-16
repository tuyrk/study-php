<meta charset="UTF-8"/>
<?php
echo "<center>";
require_once("db_config.php");
//$rs = mysqli_query($link, "SELECT * FROM stuinfo");
//计算表的总记录数
$query_string = "SELECT count(*) AS counter FROM stuinfo";
$rs = mysqli_query($link, $query_string);
$row = mysqli_fetch_assoc($rs);
$max_rows = $row['counter'];

$rows_of_page = 10;

$where_string = "";
if (isset($_POST['ok'])) {
    $where_string .="WHERE 1 = 1";
    $name = $_POST['name'];
    $score = $_POST['score'];

    if ($name != null && $name != '') {
        $where_string .= " and name like '%$name%'";
    }
    if ($score != null && $score != '') {
        $where_string .= " and score = '$score'";
    }
}

if (isset($_GET['action'])) {
    $offset = $_GET['offset'];
    $action = $_GET['action'];
    $where_string=$_GET['where_string'];
    echo $where_string;
    if ($action == 'top') {
        $offset = 0;
    }
    if ($action == 'next') {
        if ($offset + $rows_of_page < $max_rows) {
            $offset += $rows_of_page;
        }
    } else if ($offset >= $rows_of_page) {
        $offset -= $rows_of_page;
    }
    if ($action == 'bottom') {
        if ($max_rows % $rows_of_page == 0) {
            $offset = $max_rows - $rows_of_page;
        } else {
            $offset = $max_rows - $max_rows % $rows_of_page;
        }
    }
} else {
    $offset = 0;
}
$query_string = "SELECT * FROM stuinfo $where_string LIMIT $offset, $rows_of_page";
echo $query_string;
$rs = mysqli_query($link, $query_string);
echo "<table border = 1>";
?>
<form action="" method="post">
    <tr>
        <td colspan="3">
            姓名：<input type="text" id="name" name="name" value="">
            成绩：<input type="text" id="score" name="score" value="">
            <input type="submit" id="ok" name="ok" value="查询">
        </td>
    </tr>
</form>
<?php
echo "<tr><td>学号</td><td>姓名</td><td>分数</td></tr>";
while ($row = mysqli_fetch_assoc($rs)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["score"] . "</td>";
    echo "</tr>";
}
echo "<tr>";

echo "<td colspan='3' align='center'>
<a href=\"list_page_3.php?action=top&offset=$offset&where_string=$where_string\">首页</a>|
<a href=\"list_page_3.php?action=pre&offset=$offset&where_string=$where_string\">前一页</a>|
<a href=\"list_page_3.php?action=next&offset=$offset&where_string=$where_string\">后一页</a>
<a href=\"list_page_3.php?action=bottom&offset=$offset&where_string=$where_string\">尾页</a>
</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>

