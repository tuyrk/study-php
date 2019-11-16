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
if (isset($_GET['action'])) {
    $offset = $_GET['offset'];
    $action = $_GET['action'];
    if ($action == 'top') {
        $offset = 0;
    }
    if ($action == 'next') {
        echo $max_rows;
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

$rs = mysqli_query($link, "SELECT * FROM stuinfo LIMIT $offset, $rows_of_page");
echo "<table border = 1>";
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
<a href=\"list_page_2.php?action=top&offset=$offset\">首页</a>|
<a href=\"list_page_2.php?action=pre&offset=$offset\">前一页</a>|
<a href=\"list_page_2.php?action=next&offset=$offset\">后一页</a>
<a href=\"list_page_2.php?action=bottom&offset=$offset\">尾页</a>
</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>

