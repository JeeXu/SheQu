<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "shequDB";

$conn = new mysqli($servername, $username, $password, $dbname);
//检测连接
if ($conn->connect_error) {
    die("连接失败：" . $conn->connect_error);
}


//设定数据库数据传输的编码
$conn->query("SET NAMES UTF8");
