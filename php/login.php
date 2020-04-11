<?php
//if(!isset($_POST['submit'])){exit('非法访问!');}
session_start();

$url = "../index.php";
$url_login = "../login.html";
$login_name = $login_password = $name = $name1 = $password = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //登录
//    $login_name = $_POST['id'];
//    $login_password = $_POST['password'];
    $login_name = !empty($_POST['username']) ? trim($_POST['username']) : '没有数据';
    $login_password = !empty($_POST['password']) ? trim($_POST['password']) : '没有数据';

}

//引入数据库连接文件
include('conn.php');

$login_password = md5($login_password);

$sql_name = "SELECT name FROM login WHERE name = '$login_name' limit 1";
$sql_password = "SELECT * FROM login WHERE name = '$login_name' and password = '$login_password' limit 1";
$result1 = $conn->query($sql_name);
$result = $conn->query($sql_password);
while ($row = mysqli_fetch_array($result1)) {
    $name1 = $row['name'];
}
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $password = $row['password'];
}
if ($name1 === $login_name) {
    if ($name === $login_name & $password === $login_password) {
        $_SESSION['username'] = $login_name;
        echo '登录成功，等待跳转';
        //header("refresh:1;url=https://www.baidu.com/");
        header("Location: $url");
        exit();
    } else {
        echo '密码错误，重新登录';
        header("refresh:1.5;url=$url_login");
        exit();
    }
} else {
    echo '没有找到用户名';;
    header("refresh:1.5;url=$url_login");
    exit();
}
