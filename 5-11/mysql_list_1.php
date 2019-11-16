<meta charset="UTF-8"/>
<?php
require_once("db_config.php");
$rs = mysqli_query($link, "SELECT * FROM stuinfo");
echo "<table border = 1>";
echo "<tr><td>学号</td><td>姓名</td><td>分数</td></tr>";
while ($row = mysqli_fetch_assoc($rs)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["score"] . "</td>";
    echo "</tr>";
}
echo "</table>";