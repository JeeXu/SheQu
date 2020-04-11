<?php
/*$fromurl="../../"; //跳转往这个地址。
if( $_SERVER['HTTP_REFERER'] == "" )
{
header("Location:".$fromurl); exit;
}
*/

//引入数据库连接文件
include '../conn.php';

/*class Article {
    public $id;
    public $title;
    public $content;
    public $time;
}
$json = '';
$data = array();*/

// sql语句
$sql = "SELECT * FROM article ORDER BY reg_time DESC LIMIT 10";
$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
    echo "<div class=\"card\"><div class=\"card-header\"><span class=\"h3\">" . $row['article_title'] . "</span>";
    echo "<small class=\"text-muted \">" . $row['reg_time'] . "</small></div>";
    echo "<div class=\"card-body\">";
    echo "<pre class=\"card-text\">" . $row['article_content'] . "</pre>";
    echo "<button class=\"btn btn-primary\" id=\"" . $row['id'] . "\" onclick='delArticle()'>删除</button>";
    echo "</div></div>";
}


/*while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $article = new Article();
    $article->id = $row['id'];
    $article->title = $row['article_title'];
    $article->content = $row['article_content'];
    $article->time = $row['reg_time'];
    $data[] = $article;
}
$json = json_encode($data);
echo $json;*/
$conn->close();