<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
// header('Location: '.$uri.'/shequ/index.html');
// exit;

session_start();

?>
<?php if(isset($_SESSION['username'])):?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="社区养老" />
    <meta name="author" content="JeeXu" />
    <title>社区管理</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/5.11.2/css/all.css" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://v4.bootcss.com/docs/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180" />
    <link rel="icon" href="img/favicon-32x32.png" sizes="32x32" type="image/png" />
    <!-- 地图 -->
    <script src="https://webapi.amap.com/maps?v=1.4.15&key=a631b156740f96870f828c5d4a1a5662"></script>
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/guanli.css" rel="stylesheet" />
    <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99;
        }

        to {
            opacity: 1;
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
    </style>
</head>

<body>
    <!-- title板块 -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.html">社区管理系统</a>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search" /> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a href="/shequ/admin.php">欢迎您，<?php echo $_SESSION['username'];?></a>
                <a class="nav-link" href="./php/exit.php">Sign out</a>
            </li>
        </ul>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- 侧边栏 -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item" id="cate1">
                            <a class="nav-link active">
                                <i class="iconfont" style="font-weight: bold;">&#xe601;</i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item" id="cate2" onclick="article()">
                            <a class="nav-link">
                                <i class="iconfont">&#xe669;</i>
                                发表内容
                            </a>
                        </li>
                        <li class="nav-item" id="cate3">
                            <a class="nav-link">
                                <i class="iconfont">&#xe600;</i>
                                预约信息
                            </a>
                        </li>
                        <li class="nav-item" id="cate4" onclick="oldperson()">
                            <a class="nav-link">
                                <i class="iconfont">&#xe602;</i>
                                老人信息
                            </a>
                        </li>
                        <li class="nav-item" id="cate5" onclick="helpMsg()">
                            <a class="nav-link">
                                <i class="iconfont">&#xe719;</i>
                                求助信息
                            </a>
                        </li>
                        <li class="nav-item" id="cate6">
                            <a class="nav-link">
                                <i class="iconfont">&#xe662;</i>
                                地址查询
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>其他操作</span>
                        <a class="d-flex align-items-center text-muted" aria-label="Add a new report">
                            <i class="iconfont">&#xe603;</i>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item" id="cate7">
                            <a class="nav-link"><i class="iconfont">&#xe60f;</i>
                                编辑发表信息
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="iconfont">&#xe6d6;</i>
                                Others
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- 页面板块 -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- 页面1 -->
                <div class="cate1" style="display: block;">
                    <div class="chartjs-size-monitor" style="
                position: absolute;
                left: 0px;
                top: 0px;
                right: 0px;
                bottom: 0px;
                overflow: hidden;
                pointer-events: none;
                visibility: hidden;
                z-index: -1;
              ">
                        <div class="chartjs-size-monitor-expand" style="
                  position: absolute;
                  left: 0;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  overflow: hidden;
                  pointer-events: none;
                  visibility: hidden;
                  z-index: -1;
                ">
                            <div style="
                    position: absolute;
                    width: 1000000px;
                    height: 1000000px;
                    left: 0;
                    top: 0;
                  "></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="
                  position: absolute;
                  left: 0;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  overflow: hidden;
                  pointer-events: none;
                  visibility: hidden;
                  z-index: -1;
                ">
                            <div style="
                    position: absolute;
                    width: 200%;
                    height: 200%;
                    left: 0;
                    top: 0;
                  "></div>
                        </div>
                    </div>
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    Share
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    Export
                                </button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <i class="iconfont">&#xe74b;</i>
                                This week
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="978" height="412"
                        style="display: block; width: 978px; height: 412px;"></canvas>
                </div>

                <!-- 页面2 发表的信息 -->
                <div class="cate2" style="display: none;">
                    <div class="box">
                        <div id="msg-box"></div>
                    </div>
                </div>

                <!-- 页面3 预约信息-->
                <div class="cate3" style="display: none;">
                    <div class="box row">
                        <!-- 预约卡片信息 -->
                        <div class="card mb-3" style="max-width: 500px;">
                            <div class="row no-gutters">
                                <div class="col-md-4 side-msg">
                                    <h4>医疗</h4>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a
                                            little bit longer.
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3" style="max-width: 500px;">
                            <div class="row no-gutters">
                                <div class="col-md-4 side-msg">
                                    <h4>家政</h4>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a
                                            little bit longer.
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 页面4 信息查询 -->
                <div class="cate4" style="display: none;">
                    <div class="box">
                        <h1 class="h2">信息查询</h1>
                        <div class="row">
                            <input class="form-control col-4 offset-3" id="searchName" name="searchName" type="search"
                                placeholder="Search Name" />
                            <input class="btn btn-dark" type="button" value="查询" onclick="showOldperson()" />
                            <input class="btn btn-secondary" id="reset" type="button" value="清除"
                                onclick="oldperson()" />
                            <small class="text-muted" id="search-result"
                                style="display: flex; align-items: center;"></small>
                        </div>
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">老人信息</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <a type="button" class="btn btn-sm btn-outline-secondary" href="oldPerson.php"
                                        target="_blank">
                                        添加
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        onclick="oldperson()">
                                        ALL
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th>姓名</th>
                                        <th>性别</th>
                                        <th>年龄</th>
                                        <th>民族</th>
                                        <th>电话</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="oldperson-msg"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- 页面5 求助信息 -->
                <div class="cate5" style="display: none;">
                    <div class="box">
                        <div class="row" id="helpMsg-card">
                            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                <!-- model -->
                                <div class="card-header">求助人姓名</div>
                                <div class="card-body">
                                    <h5 class="card-title">Warning card title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and
                                        make up the bulk of the card's content.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 页面6 地址查询 -->
                <div class="cate6" style="display: none;">
                    <div class="box">
                        <h1 class="h2">查询条件</h1>
                        <div class="row">
                            <input class="form-control col-4 offset-3" name="seachName" type="search"
                                placeholder="Search Name" />
                            <input class="btn btn-dark" type="button" value="查询" />
                        </div>
                    </div>
                    <!-- 地图div -->
                    <div id="ditu" style="width: 96%; height: 650px;"></div>
                    <script src="js/ditu.js"></script>
                </div>

                <!-- 页面7 -->
                <div class="cate7" style="display: none;">
                    <div class="box">
                        <h1 class="h2">编写发表信息</h1>
                        <div class="container box">
                            <!-- 表单 -->
                            <form action="php/article/article.php" method="POST">
                                <div class="form-group">
                                    <label for="article-title" class="h4">文章标题</label>
                                    <input type="text" name="article-title" class="form-control col-md-10"
                                        id="article-title" autocomplete="off" placeholder="Enter the title" required />
                                </div>
                                <div class="form-group">
                                    <label for="article-content" class="h4">文章内容</label>
                                    <textarea class="form-control" name="article-content" id="article-content" rows="10"
                                        autocomplete="off" required></textarea>
                                </div>
                                <button type="reset" class="btn btn-secondary">取消</button>
                                <button type="submit" class="btn btn-primary" id="publish">
                                    发表
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/jquery.slim.min.js"></script>
    <script>
    window.jQuery ||
        document.write(
            '<script src="/js/vendor/jquery.slim.min.js"><\/script>'
        );
    </script>
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/feather.min.js"></script>
    <!-- chart js图表 -->
    <script src="js/Chart.min.js"></script>
    <script src="js/guanli.js"></script>
    <!-- ajax数据 -->
    <script src="js/ajax.js"></script>
</body>

</html>



<?php else: ?>
<script>
window.location.href = "login.html"
</script>
<?php endif ?>