<?php
$shequnum = $_POST['shequNum'];
$shequname = $_POST['shequName'];
$shengfen = $_POST['shengFen'];
$city = $_POST['city'];
$xianqu = $_POST['xianQu'];
$jiedao = $_POST['jieDao'];
$fuzherenname = $_POST['fuZheren'];
$fuzherenphone = $_POST['fuZherenPhone'];
$shequphone = $_POST['shequPhone'];
$shequaddress = $_POST['shequAddress'];

//引入数据库连接文件
include('conn.php');

$sql = "INSERT INTO shequMessage(shequnum, shequname, shengfen, city, xianqu, jiedao, fuzherenname, fuzherenphone, shequphone, shequaddress) 
VALUES ('$shequnum','$shequname','$shengfen','$city','$xianqu','$jiedao','$fuzherenname','$fuzherenphone','$shequphone','$shequaddress')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();