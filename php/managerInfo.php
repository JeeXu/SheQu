<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //管理员信息
    $manager_name = $_POST['manager_name'];
    $manager_sex = $_POST['manager_sex'];
    $manager_age = $_POST['manager_age'];
    $manager_idcard = $_POST['manager_idcard'];
    $manager_phone = $_POST['manager_phone'];
}

//引入数据库连接文件
include('conn.php');

$sql = "INSERT INTO login () VALUES ()";