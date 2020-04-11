<?php
//引入数据库连接文件
include '../conn.php';

//创建数据库
/*$sql = "CREATE DATABASE shequDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
}else {
    echo "Error creating database:" .$conn->connect_error;
}*/

// 使用 sql 创建数据表  社区信息表
/*$sql = "CREATE TABLE shequMessage (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
shequnum VARCHAR(30) NOT NULL,
shequname VARCHAR(30) NOT NULL,
shengfen VARCHAR(30) NOT NULL,
city VARCHAR(30) NOT NULL,
xianqu VARCHAR(30) NOT NULL,
jiedao VARCHAR(30) NOT NULL,
fuzherenname VARCHAR(30) NOT NULL,
fuzherenphone VARCHAR(11) NOT NULL,
shequphone VARCHAR(11) NOT NULL,
shequaddress VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";*/

//老人信息表
/*$sql = "CREATE TABLE oldperson (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
gender VARCHAR(5) NOT NULL,
minzu VARCHAR(30) NOT NULL,
age INT(5) NOT NULL,
shenfenzheng VARCHAR(18) NOT NULL,
hunyin VARCHAR(5) NOT NULL,
duju VARCHAR(5) NOT NULL,
zinv VARCHAR(5) NOT NULL,
Inshequ VARCHAR(30) NOT NULL,
phone VARCHAR (11) NOT NULL,
address VARCHAR(30) NOT NULL,
lianxiren VARCHAR(10) NOT NULL,
lianxinrenphone VARCHAR(11) NOT NULL,
reg_date TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";*/


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();
