<?php session_start()?>
<?php if(isset($_SESSION['username'])):?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>老人信息登记</title>
    <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" type="image/png" />
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>老人信息登记</h1>
        </div>
        <div class="body">
            <form action="php/oldperson/oldperson.php" method="POST" enctype="multipart/form-data">
                <table class="table">
                    <tbody>
                        <tr class="row">
                            <td class="col-3">
                                <label for="name">姓名：</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="姓名" />
                            </td>
                            <td class="col-3">
                                <label for="gender">性别：</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="男">男</option>
                                    <option value="女">女</option>
                                </select>
                            </td>
                            <td class="col-3">
                                <label for="minzu">民族：</label>
                                <select name="minzu" id="minzu" class="form-control">
                                    <option value="汉族">汉族</option>
                                    <option value="蒙古族">蒙古族</option>
                                    <option value="回族">回族</option>
                                    <option value="藏族">藏族</option>
                                    <option value="维吾尔族">维吾尔族</option>
                                    <option value="苗族">苗族</option>
                                    <option value="其他">其他</option>
                                </select>
                            </td>
                            <td class="col-3" rowspan="4">
                                <div class="card" style="position: absolute;">
                                    <img src="img/img_avatar.png" style="width: 100%;" id="image" />
                                    <div class="card-body">
                                        <input type="hidden" value="204800" name="MAX_FILE_SIZE" />
                                        <input type="file" id="imagelaod" name="imagefile" class="form-control-file" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">
                                <label for="age">年龄：</label>
                                <input type="number" name="age" id="age" class="form-control" min="40" max="120" />
                            </td>
                            <td class="col-3">
                                <label for="shenfenzheng">身份证：</label>
                                <input type="text" name="shenfenzheng" id="shenfenzheng" class="form-control"
                                    placeholder="号码" />
                            </td>
                            <td class="col-3">
                                <label for="hunyin">婚姻状况：</label>
                                <select name="hunyin" id="hunyin" class="form-control">
                                    <option value="已婚">已婚</option>
                                    <option value="未婚">未婚</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">
                                <label for="duju">是否独居：</label>
                                <select name="duju" id="duju" class="form-control">
                                    <option value="是">是</option>
                                    <option value="否">否</option>
                                </select>
                            </td>
                            <td class="col-3">
                                <label for="zinv">有无子女：</label>
                                <select name="zinv" id="zinv" class="form-control">
                                    <option value="有">有</option>
                                    <option value="无">无</option>
                                </select>
                            </td>
                            <td class="col-3">
                                <label for="Inshequ">所处社区：</label>
                                <select name="Inshequ" id="Inshequ" class="form-control">
                                    <option value="暂无">暂无</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">
                                <label for="phone">联系电话：</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="电话">
                            </td>
                            <td class="col-6">
                                <label for="address">家庭住址：</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="地址">
                            </td>
                        </tr>
                        <tr class="row">
                            <td class="col-3">
                                <label for="lianxiren">紧急联系人：</label>
                                <input type="text" name="lianxiren" id="lianxiren" class="form-control"
                                    placeholder="子女">
                            </td>
                            <td class="col-3">
                                <label for="lianxinrenphone">联系人电话：</label>
                                <input type="tel" name="lianxinrenphone" id="lianxinrenphone" class="form-control"
                                    placeholder="电话">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">提交</button>
                <button type="reset" class="btn btn-dark">取消</button>
            </form>
        </div>
        <footer class="text-center">Copyright &copy; 2020 <a href="">Jeexu</a></footer>
    </div>

    <script></script>
</body>

</html>

<?php else: ?>
<h1>您无权访问，请登陆后重试</h1>
<a href="login.html">登录</a>
<?php endif ?>