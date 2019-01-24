<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\index\index.html";i:1548125450;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\header.html";i:1547368745;s:71:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\right.html";i:1548123207;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\footer.html";i:1545573305;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $conf['title']; ?></title>
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
    <script type="application/x-javascript">
    addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }

    function showSide() {
        $('.navbar-nav').toggle();
    }
    </script>
    <script type="text/javascript" src="__PUBLIC__index/js/ajax.js"></script>
    <style>
        .loadImg{
            height: 29px;
            margin-top: -4px;
        }
    </style>
    <script>
        window.onload=function () {
            var oUl = document.getElementById('ul-article');
            var iPage = 1;// 定义页数
            var b = true;

            getLi();

            function getLi(){

                var load = document.getElementById('load');// 加载
                load.innerHTML = "点击加载更多";

                ajax('get' , '__URL__/flow' , 'page=' + iPage , function (data) {
                    var d = JSON.parse(data);
                    //如果没有数据
                    if(!d.data.length){
                        var load = document.getElementById('load');// 加载
                        load.innerHTML = '没有数据了 :(';
                        load.setAttribute('style', 'pointer-events: none');
                    }

                    for (var i = 0 ; i < d.data.length ; i++){

                        var ac = d.data[i].articleContent;

                        var content = ac.replace(/<[^>]+>/g,"");//清除html标签
                        //alert(content);return false;


                        var strs={};

                        strs.GetLength = function(str){
                            var realLength = 0;
                            var len = str.length;
                            var charCode = -1;
                            for(var i=0;i<len;i++){
                                charCode = str.charCodeAt(i);
                                if(charCode>0 && charCode<=128) realLength +=1;
                                else realLength += 2;
                            }
                            return realLength;
                        }
                        strs.CutStr = function(str,len){
                            var strLen = str.length;
                            var char_length = 0;
                            for (var j = 0; j < strLen; j++){
                                var son_str = str.charCodeAt(j);
                                (son_str > 0 && son_str <= 128) ? char_length += 1 : char_length += 2;
                                if (char_length >= len){
                                    newStr = str.substr(0, j+1) + "…";
                                    return newStr;
                                }
                            }
                        }
                        if(strs.GetLength(content) > 230){
                            var contt = strs.CutStr(content,230);//内容
                        }else{
                            var contt = content;
                        }

                        if(strs.GetLength(d.data[i].articleTitle) > 70){
                            var articleTitle = strs.CutStr(d.data[i].articleTitle,70);//标题
                        }else{
                            var articleTitle = d.data[i].articleTitle;
                        }

                        var aid = d.data[i].articleId;
                        var url = "article" + "?aid=" + aid;

                        var cid = d.data[i].cateId;
                        var cUrl = "cate" + "?cid=" + cid;

                        if(d.data[i].articleClicks == '' || d.data[i].articleClicks === null){
                            d.data[i].articleClicks = 0;
                        }

                        if(d.data[i].articlePic == '' || d.data[i].articlePic == null){

                            var html = "<li class='index_arc_item no_pic'><h4 class='title'><a href='article?aid=" + d.data[i].articleId + "'>" + d.data[i].articleTitle + "</a></h4><div class='date_hits'><span>" + d.data[i].ator + "</span><span>" + d.data[i].addTime.substr(0,10) + "</span><span><a href='cate?cid=" + d.data[i].cateId + "'>" + d.data[i].cateName + "</a></span><p class='hits'><i class='Hui-iconfont' title='点击量'>&#xe6c1;</i> " + d.data[i].articleClicks + " °</p><p class='commonts'><i class='Hui-iconfont' title='评论'>&#xe622;</i><span id='sourceId::105' class='cy_cmt_count'>" + d.data[i].articleComments + "</span></p></div><div class='desc'>" + contt + "</div></li>";

                        }else{

                            var html = "<li class='index_arc_item'><a href='article?aid=" + d.data[i].articleId + "' class='pic'><img class='lazyload' src='__PUBLIC__" + d.data[i].articlePic + "' data-original='__PUBLIC__" + d.data[i].articlePic + "' alt='" + d.data[i].articleTitle + "'></a><h4 class='title'><a href='article?aid=" + d.data[i].articleId + "'>" + d.data[i].articleTitle + "</a></h4><div class='date_hits'><span>" + d.data[i].ator + "</span><span>" + d.data[i].addTime.substr(0,10) + "</span><span><a href='cate?cid=" + d.data[i].cateId + "'>" + d.data[i].cateName + "</a></span><p class='hits'><i class='Hui-iconfont' title='点击量'></i> " + d.data[i].articleClicks + " ° </p><p class='commonts'><i class='Hui-iconfont' title=''></i> <span class='cy_cmt_count'>" + d.data[i].articleComments + "</span></p></div><div class='desc'>" + contt + "</div></li>";
                        }

                        oUl.innerHTML += html;

                    }

                });
                b = true; //执行状态
            }

            var load = document.getElementById('load');// 加载
            load.onclick = function(){
                var img = "<img src='__PUBLIC__index/img/loading/068.gif' class='loadImg' alt='加载中...' />";
                load.innerHTML = img;
                if(b){
                    b = false;
                    iPage++;
                    window.setTimeout(function(){getLi()},1000);//这里 getLi() 要写成 function(){ getLi() }
                }
            }
        }

    </script>
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
                    <li><a href="cate" data-hover="学无止境">学无止境</a></li>
                    <li><a href="mood" data-hover="心情随笔">心情随笔</a></li>
                    <li><a href="board" data-hover="留言板">留言板</a></li>
                    <li><a href="about" data-hover="关于我">关于我</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<section class="container pt-20">
    <!--<div class="Huialert Huialert-info"><i class="Hui-iconfont">&#xe6a6;</i>成功状态提示</div>-->
    <!--left-->
    <div class="col-sm-9 col-md-9">
        <!--滚动图-->
        <div class="slider_main">
            <div class="slider">
                <div class="bd">
                    <ul>
                        <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="article?aid=<?php echo $s['articleId']; ?>" target="_blank">
                                    <img title="<?php echo mb_strlen($s['articleTitle'],'utf-8') > 8 ? mb_substr($s['articleTitle'],0,8,'utf-8').' . . . ' : $s['articleTitle'] ?>" src="__PUBLIC__<?php echo $s['articlePic']; ?>" class="sliderImg" />
                                </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <ol class="hd cl dots">
                    <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?>
                        <li><?php echo $key + 1; ?></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ol>
                <a class="slider-arrow prev" href="javascript:void(0)"></a>
                <a class="slider-arrow next" href="javascript:void(0)"></a>
            </div>
        </div>

        <div class="mt-20 bg-fff box-shadow radius mb-5">
            <div class="tab-category">
                <a href=""><strong class="current">最新发布</strong></a>
            </div>
        </div>
        <div class="art_content">
            <ul class="index_arc" id="ul-article">

                <!--   此处 ：：：ajax加载文章   -->

            </ul>
            <div class="text-c mb-20" id="moreBlog">
                <a class="btn  radius btn-block " id="load" href="javascript:;" onclick="moreBlog();">点击加载更多</a>
            </div>
        </div>
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

    <!--搜索-->
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>搜索</strong></a>
        </div>
        <div class="tab-category-item">
            <ul class="index_recd">
                <li class="index_recd_item">
                    <form action="search" method="get">
                        <input class="search" id="key" name="k" type="text" maxlength="38" placeholder="请输入搜索内容…" />
                        <!--<input type="submit" id="submit" hidden/>-->

                    </form>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript" src="__PUBLIC__index/plugin/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('body').keyup(function(event){
                var text = $('#key').val();
                if(text.length > '38'){
                    alert('您输入的字符已超出38个字符！');return false;
                };
                var isFocus = $('#key').is(':Focus');//判断鼠标焦点是否在输入框里
                if(isFocus === true){
                    if(event.keyCode==13){ 	//回车键  13
                        if(text == ''){
                            alert('请输入搜索内容');return false;
                        }else{
                            $.get('search',{'k':text},function(){});
                            //$('#submit').trigger('click');                  //回车键触发事件
                        }
                    }
                }
            });
        });
    </script>


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
                <?php if(is_array($rightCate) || $rightCate instanceof \think\Collection || $rightCate instanceof \think\Paginator): $i = 0; $__LIST__ = $rightCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                <a href="cate?cid=<?php echo $c['cateId']; ?>"><?php echo $c['cateName']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>

    <!--图片-->
    <?php if($about['wechat'] != ''): ?>
    <div class="bg-fff box-shadow radius mb-20">
        <div class="tab-category">
            <a href=""><strong>扫我关注</strong></a>
        </div>
        <div class="tab-category-item">
            <img data-original="__PUBLIC__<?php echo $about['wechat']; ?>" class="img-responsive lazyload" alt="响应式图片">
        </div>
    </div>
    <?php endif; ?>

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
            delayTime: 800,
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
