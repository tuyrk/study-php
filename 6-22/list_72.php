<?php
require_once("db_config.php");

$page_num = 10;
$query_string = "SELECT count(*) AS amount FROM user_70";
$rs = mysqli_query($link, $query_string);
$row = mysqli_fetch_assoc($rs);
$amount = $row['amount'];

$offset = 0;
if (!empty($_GET['offset'])) {
    $offset = $_GET['offset'];
}
if (!empty($_GET['action'])) {
    if ($_GET['action'] == 'top') {
        $offset = 0;
    } else if ($_GET['action'] == 'previous') {
        if ($offset - $page_num >= 0) {
            $offset -= $page_num;
        }
    } else if ($_GET['action'] == 'next') {
        if ($offset + $page_num <= $amount - $page_num) {
            $offset += $page_num;
        }
    } else if ($_GET['action'] == 'bottom') {
        $offset = (int)($amount / $page_num);
        if ($amount % $page_num == 0) {
            $offset--;
        }
        $offset *= $page_num;
    }
}
$query_string = "SELECT * FROM user_70 LIMIT $offset, $page_num";
$rs = mysqli_query($link, $query_string);

echo $query_string;
echo "<table border='1'>";
$id = 1;
echo "<tr><td align='center' colspan='2'>姓名列表</td></tr>";
while ($row = mysqli_fetch_assoc($rs)) {
    echo "<tr>";
    echo "<td>";
    echo $row['name'];
    echo "</td>";
    echo "</tr>";
}
echo
"<tr><td align='center' colspan='2'>
<a href=\"list_72.php?action=top\">首页</a>
<a href=\"list_72.php?action=previous&offset=$offset\">上一页</a>
<a href=\"list_72.php?action=next&offset=$offset\">下一页</a>
<a href=\"list_72.php?action=bottom\">末页</a>
</td></tr>";
echo "</table>";
