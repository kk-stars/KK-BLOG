<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\about\about.html";i:1531729263;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\header.html";i:1527503171;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\footer.html";i:1524903142;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>关于我 — <?php echo $conf['title']; ?></title>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="keywords" content="<?php echo $conf['keywords']; ?>">
    <meta name="description" content="<?php echo $conf['title']; ?>">
    <LINK rel="Bookmark" href="__PUBLIC__index/h.png">
    <LINK rel="Shortcut Icon" href="__PUBLIC__index/h.png"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__index/plugin/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__index/plugin/Hui-iconfont/1.0.8/iconfont.min.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__index/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__index/plugin/pifu/pifu.css"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }

    function showSide() {
        $('.navbar-nav').toggle();
    }</script>
</head>
<body>

<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container cl">
            <a class="navbar-logo hidden-xs" href="index">
                <img class="logo" src="__PUBLIC__index/img/logo.png" alt="Lao王博客"/>
            </a>
            <a class="logo navbar-logo-m visible-xs" href="index">Babysbreath满天星博客</a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:void(0);"
               onclick="showSide();">&#xe667;</a>
            <nav class="nav navbar-nav nav-collapse w_menu" role="navigation">
                <ul class="cl">
                    <li class="active"><a href="index" data-hover="首页">首页</a></li>
                    <li><a href="cate" data-hover="学无止尽">学无止境</a></li>
                    <li><a href="mood" data-hover="心情随笔">心情随笔</a></li>
                    <li><a href="board" data-hover="留言板">留言板</a></li>
                    <li><a href="about" data-hover="关于我">关于我</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!--导航条-->
<nav class="breadcrumb">
    <div class="container">
        <i class="Hui-iconfont">&#xe67f;</i>
        <a href="index.html" class="c-primary">首页</a>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray">关于</span>
    </div>
</nav>

<section class="container">
    <div class="container-fluid">
        <div class="about">
            <h2 style="font-size:30px;">Just about me</h2>
            <ul style="font-size:16px;">
                <p><?php echo $about['aboutMe']; ?><img src="__PUBLIC__index/img/GIF/ku.gif" alt="" height="auto" style="height: auto;" original="__PUBLIC__index/images/page.gif"></p>
            </ul>
            <h2 style="font-size:30px;">About my blog</h2>
            <ul style="font-size:16px;">
                <p>域 名：<?php echo $conf['url']; ?> 注册于2017年02月02日</p>
                <p>服务器：阿里云服务器 ，于2017年02月23日完成备案</p>
                <p>备案号：<?php echo $conf['beian']; ?></p>
                <p><img src="__PUBLIC__index/img/GIF/fo.gif" alt="" height="auto" style="height: auto;" original="__PUBLIC__index/images/page.gif"><?php echo $conf['description']; ?><img src="__PUBLIC__index/img/GIF/Q.gif" alt="" height="auto" style="height: auto;" original="__PUBLIC__index/images/page.gif"></p>
            </ul>
            <h2 style="font-size:30px;">Contact me</h2>
            <ul style="font-size:16px;">
                <p><i class="Hui-iconfont">&#xe67b;</i>qq : <?php echo $about['qq']; ?></p>
                <p><i class="Hui-iconfont">&#xe6d1;</i>git : <?php echo $about['github']; ?></p>
                <p><i class="Hui-iconfont">&#xe63b;</i>email : <?php echo $conf['email']; ?></p>
            </ul>
        </div>

    </div>
</section>

<footer class="footer mt-20">
    <div class="container-fluid" id="foot">
        <p>Copyright &copy; 2018 www.kkstars.cn <br>
            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $conf['beian']; ?></a>
            <a href="" target="_blank">Babysbreath满天星个人博客</a><br>
        </p>
    </div>
</footer>

<script type="text/javascript" src="plugin/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="plugin/layer/3.0/layer.js"></script>
<script type="text/javascript" src="plugin/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="plugin/pifu/pifu.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script> $(function () {
    $(window).on("scroll", backToTopFun);
    backToTopFun();
}); </script>
</body>
</html>
