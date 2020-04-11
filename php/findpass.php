<?php
$name1 = null;
//找回密码
$find_id = $_POST['find_id'];
$find_password = $_POST['find_password'];
$find_verificationCode = $_POST['verificationCode'];

$yanzhengma = "1234";
$url = "../index.html";
$url_login = "../login.html";
//引入数据库连接文件
include('conn.php');

$find_password = md5($find_password);

$sql = "UPDATE login SET password = '$find_password'
WHERE name = '$find_id'";
$sql_selectName = "SELECT name FROM login WHERE name = '$find_id' limit 1";
$result = $conn->query($sql_selectName);
while ($row = mysqli_fetch_array($result)){
    $name1 = $row['name'];
}
if ($name1 === $find_id) {
    if ($find_verificationCode === $yanzhengma){
        if ($conn->query($sql) === TRUE) {
            echo "更改密码成功，等待跳转";
            header("refresh:1;url=$url");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("refresh:1.5;url=$url_login");
            exit();
        }
    }else{
        echo "验证码不正确，请重新输入";
        header("refresh:1.5;url=$url_login");
        exit();
    }
} else {
    echo "没有发现用户名,请重新输入";
    header("refresh:1.5;url=$url_login");
    exit();
}
