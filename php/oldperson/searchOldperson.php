<?php
//引入数据库连接文件
include '../conn.php';
//接收查询的名字
$search_name = isset($_GET['search_name']) ? $_GET["search_name"] : '';

// sql语句，查询最新10条和按照查询名字查询
$sql = "SELECT * FROM oldperson  ORDER BY id DESC LIMIT 10";
$sql_name = "SELECT * FROM oldperson WHERE name = '" . $search_name . "'";

//判断执行不同sql的条件
if ($search_name != null) {
    $result = $conn->query($sql_name);
} else {
    $result = $conn->query($sql);
}

$i =0;
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" .++$i ."</td>";
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['gender']. "</td>";
    echo "<td>" .$row['age']. "</td>";
    echo "<td>" .$row['minzu']. "</td>";
    echo "<td>" .$row['phone']. "</td>";
    echo "<td><a href=\"\">详情</a></td></tr>";
}

$conn->close();