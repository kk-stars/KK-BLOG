<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\mood\mood.html";i:1545573305;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\header.html";i:1545573305;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\footer.html";i:1545573305;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>碎言碎语 — <?php echo $conf['title']; ?></title>
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
    <link rel="stylesheet" type="text/css" href="__PUBLIC__index/css/timeline.css"/>

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
    <div class="container"><i class="Hui-iconfont">&#xe67f;</i>
        <a href="index" class="c-primary">首页</a>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray">碎言碎语</span></div>
</nav>

<section class="container mt-20">
    <div class="container-fluid">
        <div class="timeline">
            <?php if(is_array($mood) || $mood instanceof \think\Collection || $mood instanceof \think\Paginator): $i = 0; $__LIST__ = $mood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-picture">
                    <img src="__PUBLIC__index/css/timeline/cd-icon-location.svg" alt="position">
                </div>
                <div class="cd-timeline-content">
                    <h4><?php echo $m['moodTitle']; ?></h4>
                    <p><img width="520px" src="__PUBLIC__<?php echo $m['moodPic']; ?>"/><?php echo $m['moodContent']; ?></p>
                    <span class="cd-date"><?php echo mb_substr($m['addTime'] ,0,10) ; ?></span>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

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

<script type="text/javascript" src="__PUBLIC__index/plugin/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/layer/3.0/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/pifu/pifu.js"></script>
<script type="text/javascript" src="__PUBLIC__index/js/common.js"></script>
<script> $(function () {
    $(window).on("scroll", backToTopFun);
    backToTopFun();
}); </script>
<script>
    $(function () {
        //on scolling, show/animate timeline blocks when enter the viewport
        $(window).on('scroll', function () {
            $('.cd-timeline-block').each(function () {
                if ($(this).offset().top <= $(window).scrollTop() + $(window).height() * 0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden')) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
                }
                if ($(window).scrollTop() - $(this).offset().top > 0) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden').removeClass('bounce-in');
                }

            });
            $('.cd-timeline-block').each(function () {
                if ($(this).offset().top < $(window).scrollTop() + $(window).height() * 0.75) {
                    $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden');
                }
            });
        });
    });

</script>
</body>
</html>
