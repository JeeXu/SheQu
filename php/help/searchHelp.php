<?php
/* 显示求助信息 */

//引入数据库连接文件
include '../conn.php';


// sql语句
$sql = "SELECT * FROM help ORDER BY reg_time DESC LIMIT 10";

$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
    echo "<div class=\"card text-white bg-warning mb-3\" style=\"min-width:18rem;max-width: 18rem;\">";
    echo "<div class=\"card-header\">".$row['name']."</div>";
    echo "<div class=\"card-body\"><h5 class=\"card-title\">Warning</h5>";
    echo "<p class=\"card-text\">我在[".$row['address']."]位置<br>电话：<span>".$row['phone']."</span></p>";
    echo "<p class=\"card-text\"><small class=\"text-muted\">".$row['reg_time']."</small>";
    echo "<button class=\"btn btn-danger\" id=\"" . $row['id'] . "\" onclick='delHelpMsg()'>删除</button>";
    echo "</div></div>";
}