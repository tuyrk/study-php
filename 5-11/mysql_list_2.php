<meta charset="UTF-8"/>

<?php
require_once("db_config.php");
$rs = mysqli_query($link, "SELECT * FROM stuinfo");
echo "<center>";
echo "<table border = 1>";
echo "<tr><td>学号</td><td>姓名</td><td>分数</td><td>操作</td></tr>";
while ($row = mysqli_fetch_assoc($rs)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["score"] . "</td>";
    echo "<td>";
    echo "<a href='mysql_edit_2.php?id=" . $row["id"] . "'>编辑</a>";
    echo "|";
    echo "<a href='mysql_delete_1.php?id=" . $row["id"] . "' onclick=\"return confirm('yes','no');\">删除</a>";
    echo "</td>";
    echo "</tr>";
}
echo "<tr>";
echo "<td colspan = '4' align='center'>";
// 新增、编辑二合一模式
echo "<a href='mysql_edit_2.php'>新增</a>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</center>";
?>