<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\article\article_news.html";i:1528957741;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\header.html";i:1527503171;s:71:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\right.html";i:1528945764;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\footer.html";i:1524903142;}*/ ?>
<html>
<head>
    <title>文章详情 - <?php echo $conf['title']; ?></title>
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
    <style>
        body{
            overflow-x:hidden;
            overflow-y:auto;
        }
    </style>
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
        <span class="c-gray">头条</span>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray"><?php echo $i['t']; ?></span>
    </div>
</nav>

<section class="container pt-20">

    <div class="row w_main_row">
        <div class="col-lg-9 col-md-9">
            <iframe src="<?php echo $i['u']; ?>" scrolling="auto" height="100%" width="100%" frameborder="0"></iframe>
        </div>
        <!--right-->
<div class="col-sm-3 col-md-3">

    <!--站点声明-->
    <div class="panel panel-default mb-20">
        <div class="panel-body">
            <i class="Hui-iconfont" style="float: left;">&#xe62f;&nbsp;</i>
            <div class="slideTxtBox">
                <div class="bd">
                    <ul>
                        <li><a href="javascript:void(0);">满天星博客正式上线，欢迎访问 :)</a></li>
                        <li><a href="javascript:void(0);">内容如有侵犯，请立即联系管理员删除</a></li>
                        <li><a href="javascript:void(0);">本站内容仅供学习和参阅，不做任何商业用途</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--博主信息-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>博主信息</strong></a>
        </div>
        <div class="tab-category-item">
            <ul class="index_recd">
                <li class="index_recd_item">
                    <i class="Hui-iconfont">&#xe653;</i>姓名：<?php echo $about['alias']; ?>
                </li>
                <li class="index_recd_item">
                    <i class="Hui-iconfont">&#xe70d;</i>职业：<?php echo $about['position']; ?>
                </li>
                <li class="index_recd_item">
                    <i class="Hui-iconfont">&#xe63b;</i>邮箱：
                    <a href="mailto:<?php echo $about['email']; ?>">
                        <?php echo $about['email']; ?>
                    </a>
                </li>
                <li class="index_recd_item">
                    <i class="Hui-iconfont">&#xe671;</i>定位：<?php echo $about['address']; ?>
                </li>
            </ul>
        </div>
    </div>


    <!--热门推荐-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>热门推荐</strong></a>
        </div>
        <div class="tab-category-item">
            <ul class="index_recd">
                <?php if(is_array($comtArticles) || $comtArticles instanceof \think\Collection || $comtArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $comtArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="article?aid=<?php echo $ca['articleId']; ?>"><?php echo $ca['articleTitle']; ?></a>
                    <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe622;</i> <?php echo $ca['articleComments']; ?> </p>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--五条数据-->
            </ul>
        </div>
    </div>

    <!--点击排行-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>点击排行</strong></a>
        </div>
        <div class="tab-category-item">
            <ul class="index_recd clickTop">
                <?php if(is_array($heatArticles) || $heatArticles instanceof \think\Collection || $heatArticles instanceof \think\Paginator): $i = 0; $__LIST__ = $heatArticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ha): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="article?aid=<?php echo $ha['articleId']; ?>"><?php echo $ha['articleTitle']; ?></a>
                    <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe6c1;</i> <?php echo $ha['articleClicks']; ?> ° </p>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--7条数据-->
            </ul>
        </div>
    </div>

    <!--标签-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>栏目云</strong></a>
        </div>
        <div class="tab-category-item">
            <div class="tags">
                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                <a href="cate?cid=<?php echo $c['cateId']; ?>"><?php echo $c['cateName']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>


    <!--头条新闻-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>头条新闻</strong></a>
        </div>
        <div class="tab-category-item">
            <ul class="index_recd clickTop">
                <?php if(is_array($toutiao) || $toutiao instanceof \think\Collection || $toutiao instanceof \think\Paginator): $i = 0; $__LIST__ = $toutiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tt): $mod = ($i % 2 );++$i;if($key < 5): ?>
                        <li>
                            <a href="article_news?u=<?php echo $tt['url']; ?>&t=<?php echo $tt['title']; ?>"><?php echo $tt['title']; ?></a>
                            <p class="hits"><i class="Hui-iconfont" title="点击量">&#xe606;</i><?php echo mb_substr($tt['date'],-5)?></p>
                        </li>
                    <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                <!--10条数据-->
            </ul>
        </div>
    </div>

    <!--图片-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>扫我关注</strong></a>
        </div>
        <div class="tab-category-item">
            <img data-original="__PUBLIC__<?php echo $about['wechat']; ?>" class="img-responsive lazyload" alt="响应式图片">
        </div>
    </div>

    <!--友情链接-->
<!--    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>隔壁邻居</strong></a>
        </div>
        <div class="tab-category-item">
            <span>
                    <i class="Hui-iconfont">&#xe6f1;</i>
                    <a href="" class="btn-link" title="">
                    </a>
                </span>
        </div>
    </div>-->

    <!--分享-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>站点分享</strong></a>
        </div>
        <div class="panel-body">

            <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            </div>
            <script>window._bd_share_config = {
                "common": {
                    "bdSnsKey": {},
                    "bdText": "",
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": "",
                    "bdStyle": "2",
                    "bdSize": "24"
                }, "share": {}
            };
            with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
        </div>
    </div>


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

<script type="text/javascript" src="__PUBLIC__index/comment/js/jquery.flexText.js"></script>
<script>
    $(function () {
        $(window).on("scroll", backToTopFun);
        backToTopFun();
    });
</script>
<script type="text/javascript" src="__PUBLIC__index/plugin/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script>
    $(function () {
//幻灯片
        jQuery(".slider_main .slider").slide({
            mainCell: ".bd ul",
            titCell: ".hd li",
            trigger: "mouseover",
            effect: "leftLoop",
            autoPlay: true,
            delayTime: 700,
            interTime: 2000,
            pnLoop: true,
            titOnClassName: "active"
        })
//tips
        jQuery(".slideTxtBox").slide({
            titCell: ".hd ul",
            mainCell: ".bd ul",
            autoPage: true,
            effect: "top",
            autoPlay: true
        });
//标签
        $(".tags a").each(function () {
            var x = 9;
            var y = 0;
            var rand = parseInt(Math.random() * (x - y + 1) + y);
            $(this).addClass("tags" + rand)
        });

        $("img.lazyload").lazyload({failurelimit: 3});
    });

</script>
</body>

</html>
