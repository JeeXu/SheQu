<?php
/*  删除求助信息  */

//引入数据库连接文件
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $delId = $_GET['id'];
}

// sql语句
$sql = "DELETE FROM help where id=" . $delId;
$result = $conn->query($sql);

if (!$result) {
    die('无法删除数据：' . $conn->error);
}
echo '数据删除成功！';
$conn->close();

