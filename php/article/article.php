<?php
//引入数据库连接文件
include('../conn.php');

// 变量定义
$url_home = "../../index.php";

$article_title = $article_content=null;

// 接收article信息
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $article_title = $_POST['article-title'];
    $article_content = $_POST['article-content'];
}
if ($article_title==null || $article_content == null){
    echo "error!内容为空";
    exit();
}

// sql语句
$sql = "INSERT INTO article(article_title, article_content) VALUES ('$article_title','$article_content')";

if ($conn->query($sql) === TRUE) {
    echo "新文章已发布成功<br>等待跳转";
    header("refresh:1.5;url=$url_home");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("refresh:1.5;url=$url_home");
    exit();
}
