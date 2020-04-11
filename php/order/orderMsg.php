<?php
//引入数据库连接文件
include('../conn.php');

// 接收article信息
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $order_name = $_GET['order-name'];
    $order_title = $_GET['order-title'];
    $order_content = $_GET['order-content'];
    $order_address = $_GET['order-address'];
    $order_phone = $_GET['order-phone'];
}

// sql语句
$sql = "INSERT INTO order(oreder_name, order_title, order_content, order_address, order_phone) VALUES ('$order_name','$order_title','$order_content','$order_address','$order_phone')";
