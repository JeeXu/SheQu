<?php
/*  手机端发送求助信息，插入数据到数据库  */

//引入数据库连接文件
include('../conn.php');

$help_name=$help_phone=$help_address=null;
// 接收help信息
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $help_name = $_POST['help-name'];
    $help_phone = $_POST['help-phone'];
    $help_address = $_POST['help-address'];
}

// sql语句
$sql = "INSERT INTO help(name, phone, address) VALUES ('$help_name','$help_phone','$help_address')";

if ($conn->query($sql) === TRUE) {
    echo "成功";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit();
}