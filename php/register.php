<?php
$name1 = null;
//注册
$register_username = $_POST['register_username'];
$register_password = $_POST['register_password'];
$register_passport = $_POST['register_passport'];

$passport = "1234";
$url = "../login.html";
$url_register = "../register.html";
//引入数据库连接文件
include 'conn.php';

//加密
$register_password = md5($register_password);

$sql = "INSERT INTO login(name, password) VALUES ('$register_username','$register_password')";
$sql_select = "SELECT name FROM login WHERE name = '$register_username' limit 1";
//返回值true/false
$result_select = $conn->query($sql_select);
while ($row = mysqli_fetch_array($result_select)) {
    $name1 = $row['name'];
}

if ($name1 === $register_username) {
    echo '用户名已存在，请重新输入';
    header("refresh:1.5;url=$url_register");
    exit();
} else {
    if ($register_passport == $passport) {
        if ($conn->query($sql) === TRUE) {
            echo '注册成功，等待跳转';
            header("refresh:1.5;url=$url");
            exit();
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            echo '注册失败，请重新尝试！';
            header("refresh:1.5;url=$url_register");
            exit();
        }
    } else {
        echo "通行证不正确，请重新输入";
        header("refresh:1.5;url=$url_register");
        exit();
    }
}

