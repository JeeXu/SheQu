<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$minzu = $_POST['minzu'];
$age = $_POST['age'];
$shenfenzheng = $_POST['shenfenzheng'];
$hunyin = $_POST['hunyin'];
$duju = $_POST['duju'];
$zinv = $_POST['zinv'];
$Inshequ = $_POST['Inshequ'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$lianxiren = $_POST['lianxiren'];
$lianxinrenphone = $_POST['lianxinrenphone'];
$imagefile = $_FILES['imagefile'];

//引入数据库连接文件
include '../conn.php';

$sql = "INSERT INTO oldperson(name,gender,minzu,age,shenfenzheng,hunyin,duju,zinv,Inshequ,phone,address,lianxiren,lianxinrenphone)
VALUES ('$name','$gender','$minzu','$age','$shenfenzheng','$hunyin','$duju','$zinv','$Inshequ','$phone','$address','$lianxiren','$lianxinrenphone')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功!<br>等待关闭!!";
    echo '<script>setTimeout("window.opener=null;window.close()",1000);</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();