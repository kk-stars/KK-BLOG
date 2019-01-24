<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\article\article_detail.html";i:1548068333;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\header.html";i:1547368745;s:74:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\article\comment.html";i:1548127819;s:71:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\right.html";i:1548123207;s:72:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/index\view\Public\footer.html";i:1545573305;}*/ ?>
<!DOCTYPE HTML>
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

<!--导航条-->
<nav class="breadcrumb">
    <div class="container">
        <i class="Hui-iconfont">&#xe67f;</i>
        <a href="index.html" class="c-primary">首页</a>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray">文章</span>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray"><?php echo $a['articleTitle']; ?></span>
    </div>
</nav>

<section class="container pt-20">

    <div class="row w_main_row">
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-default mb-20 w_main_left">
                <div class="panel-body pt-10 pb-10">
                    <h2 class="c_titile"><?php echo $a['articleTitle']; ?></h2>
                    <p class="box_c"><span class="d_time">发布时间：<?php echo $a['addTime']; ?></span><span>编辑：
                        <a href="mailto:520@kkstars.cn"><?php echo $a['ator']; ?></a></span><span>阅读（<?php echo $a['articleClicks']; ?>）</span>
                    </p>
                    <ul class="infos">
                        <p>
                            <?php if($a['articlePic'] != null): ?>
                            <img width="400px" src="__PUBLIC__<?php echo $a['articlePic']; ?>"/>
                            <?php endif; ?>
                            <?php echo $a['articleContent']; ?>
                        </p>
                        <p>&nbsp;</p>
                        <p align="center" class="pageLink"></p>

                    </ul>

                    <div class="keybq">
                        <p><span>关键字</span>：
                            <?php if(is_array($a['articleKeywords']) || $a['articleKeywords'] instanceof \think\Collection || $a['articleKeywords'] instanceof \think\Paginator): $i = 0; $__LIST__ = $a['articleKeywords'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ak): $mod = ($i % 2 );++$i;?>
                            <a class="label label-default" href=""><?php echo $ak; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </p>
                    </div>


                    <div class="nextinfo">
                        <p class="last">上一篇：
                            <?php if($up['articleId'] != null): ?>
                            <a href="article?aid=<?php echo $up['articleId']; ?>"><?php echo $up['articleTitle']; ?></a>
                            <?php else: ?>
                            <a href="javascript:;">没有了 :(</a>
                            <?php endif; ?>
                        </p>

                        <p class="next">下一篇：
                            <?php if($down['articleId'] != null): ?>
                            <a href="article?aid=<?php echo $down['articleId']; ?>"><?php echo $down['articleTitle']; ?></a>
                            <?php else: ?>
                            <a href="javascript:;">没有了 :(</a>
                            <?php endif; ?>
                        </p>
                    </div>

                </div>
            </div>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="__PUBLIC__index/comment/css/comment.css">
    <link rel="stylesheet" href="__PUBLIC__index/comment/css/style.css">
    <script type="text/javascript" src="__PUBLIC__index/comment/js/jquery-1.12.0.min.js"></script>
    <!--  <script type="text/javascript" src="__PUBLIC__index/comment/js/jquery.flexText.js"></script>-->
</head>
<body>
<!--
    此评论textarea文本框部分使用的https://github.com/alexdunphy/flexText此插件
-->
<div class="commentAll">
    <!--评论区域 begin-->
    <div class="reviewArea clearfix">
        <?php if($conf['comment'] == '1'): ?>
            <textarea id="commentTextarea" class="comment-content comment-input" placeholder="请输入评论&hellip;" onkeyup="keyUP(this)"></textarea>
            <a href="javascript:;" class="plBtn" onclick="submitComment(<?php echo $a['articleId']; ?>)">评论</a>
        <?php else: ?>
            <textarea id="commentTextarea" class="comment-content comment-input" placeholder="评论系统正在维护中&hellip;" style="pointer-events:none;background: #e1e2e9;"></textarea>
            <a href="javascript:;" class="plBtn" style="pointer-events:none;background: #e1e2e9;">评论</a>
        <?php endif; ?>
    </div>
    <!--评论区域 end-->
    <!--回复区域 begin-->
    <div class="comment-show" id="commentS">
        <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
        <div class="comment-show-con clearfix">
            <div class="pull-left">    <!-- class : comment-show-con-img  -->
                <img src="__PUBLIC__index/img/head.png" alt="">
            </div>
            <div class="comment-show-con-list pull-left clearfix">
                <div class="pl-text clearfix">
                    <span class="comment-size-name"><?php echo $c['randAtorName']; ?> : </span>
                    <span class="my-pl-con">&nbsp;<?php echo $c['commentContent']; ?></span>
                </div>
                <div class="date-dz">
                    <span class="date-dz-left pull-left comment-time"><?php echo $c['addTime']; ?></span>
                    <div class="date-dz-right pull-right comment-pl-block">
                        <!--<a href="javascript:;" class="removeBlock">删除</a>-->
                        <?php if($conf['comment'] == '1'): ?>
                            <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                        <?php endif; ?>
                        <data id="cname" value="<?php echo $c['randAtorName']; ?>" type="hidden"></data>
                        <data id="cid" value="<?php echo $c['commentId']; ?>" type="hidden"></data>
                        <data id="rname" value="<?php echo $conf['userName']; ?>" type="hidden"></data>
                        <?php if($conf['comment'] == '1'): ?>
                            <span class="pull-left date-dz-line">|</span>
                        <?php endif; if($c['praiseState'] == 1): ?>
                            <a href="javascript:;" id="commentP_<?php echo $c['commentId']; ?>" onclick="praise(<?php echo $c['commentId']; ?>,'c')" class="date-dz-z pull-left date-dz-z-click">
                                <i id="comRedPraise_<?php echo $c['commentId']; ?>" class="date-dz-z-click-red red"></i>赞 (<i id="comPnum_<?php echo $c['commentId']; ?>" class="z-num"><?php echo $c['praise']; ?></i>)
                            </a>
                        <?php else: ?>
                            <a href="javascript:;" id="commentP_<?php echo $c['commentId']; ?>" onclick="praise(<?php echo $c['commentId']; ?>,'c')" class="date-dz-z pull-left">
                                <i id="comRedPraise_<?php echo $c['commentId']; ?>" class="date-dz-z-click-red"></i>赞 (<i id="comPnum_<?php echo $c['commentId']; ?>" class="z-num"><?php echo $c['praise']; ?></i>)
                            </a>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="hf-list-con" style="display: block;">
                    <?php if($c['reply'] != null): if(is_array($c['reply']) || $c['reply'] instanceof \think\Collection || $c['reply'] instanceof \think\Paginator): $i = 0; $__LIST__ = $c['reply'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cr): $mod = ($i % 2 );++$i;?>
                    <div class="all-pl-con">
                        <div class="pl-text hfpl-text clearfix">
                            <a href="about" class="comment-size-name"><?php echo $conf['userName']; ?> : </a>
                            <span class="my-pl-con">回复@<span class="comment-size-name"><?php echo $cr['cname']; ?> </span> :  <?php echo $cr['replyContent']; ?>
                                </span>
                        </div>
                        <div class="date-dz">
                            <span class="date-dz-left pull-left comment-time"><?php echo $cr['replyTime']; ?></span>
                            <div class="date-dz-right pull-right comment-pl-block">
                                <!--<a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>-->
                                <!--<span class="pull-left date-dz-line">|</span>-->

                                <?php if($cr['praiseState'] == 1): ?>

                                    <a href="javascript:;" id="replyP_<?php echo $cr['replyId']; ?>" onclick="praise(<?php echo $cr['replyId']; ?>,'r')" class="date-dz-z pull-left date-dz-z-click">
                                        <i id="repRedPraise_<?php echo $cr['replyId']; ?>" class="date-dz-z-click-red red"></i>赞 (<i id="rePnum_<?php echo $cr['replyId']; ?>" class="z-num"><?php echo $cr['praise']; ?></i>)
                                    </a>

                                <?php else: ?>

                                    <a href="javascript:;" id="replyP_<?php echo $cr['replyId']; ?>" onclick="praise(<?php echo $cr['replyId']; ?>,'r')" class="date-dz-z pull-left">
                                        <i id="repRedPraise_<?php echo $cr['replyId']; ?>" class="date-dz-z-click-red"></i>赞 (<i id="rePnum_<?php echo $cr['replyId']; ?>" class="z-num"><?php echo $cr['praise']; ?></i>)
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--回复区域 end-->
</div>


<!--textarea高度自适应-->
<script type="text/javascript">
    $(function () {
        $('.comment-content').flexText();
    });
</script>
<!--textarea限制字数-->
<script type="text/javascript">
    function keyUP(t) {
        var len = $(t).val().length;
        if (len > 299) {
            $(t).val($(t).val().substring(0, 300));
        }
    }
</script>
<!--评论-->
<script>
    function submitComment(aid) {

        var cCT = document.getElementById('commentTextarea').value;
        $.post('__URL__/comment', {'content': cCT, 'aid': aid}, function (data) {
            var d = JSON.parse(data);
            if (d.code == 1) {
                var cHtml = '<div class="comment-show-con clearfix"><div class="pull-left"><img src="__PUBLIC__index/img/head.png" alt=""></div> <div class="comment-show-con-list pull-left clearfix"><div class="pl-text clearfix"> <a href="#" class="comment-size-name">' + d.data.randAtorName + ' : </a> <span class="my-pl-con">&nbsp;' + d.data.commentContent + '</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + d.data.addTime + '</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num"> ' + d.data.praise + ' </i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
                if (cCT.replace(/(^\s*)|(\s*$)/g, "") != '') {
                    // 空格开头或者空格结尾 ^是开始 \s是空白 *表示0个或多个 |是或者 $是结尾 g表示全局
                    $('#commentS').prepend(cHtml);
                    // 插入提交的评论内容
                    $('#commentTextarea').prop('value', '').siblings('pre').find('span').text('');
                    // 清空提交后的 textarea  和  pre 里的内容
                } else {
                    alert('评论内容不能以空格开头或空格结尾');
                    return false;
                }

            } else {
                alert(d.message);
                return false;
            }
        });

    }
</script>
<!--点击回复动态创建回复块-->
<script type="text/javascript">
    $('.comment-show').on('click', '.pl-hf', function () {
        //获取回复人的名字
        var fhName = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
        //回复@
        var fhN = '回复@' + fhName;
        //var oInput = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.hf-con');
        var fhHtml = '<div id="replydiv" class="hf-con pull-left"> <textarea id="replyTextarea" class="replyContent comment-input hf-input" placeholder=" ' + fhN + ' " onkeyup="keyUP(this)"></textarea> <a href="javascript:;" onclick="replyComment()" class="hf-pl">评论</a></div>';
        //显示回复
        if ($(this).is('.hf-con-block')) {
            $(this).parents('.date-dz-right').parents('.date-dz').append(fhHtml);
            $(this).removeClass('hf-con-block');
            $('.replyContent').flexText();
            $(this).parents('.date-dz-right').siblings('.hf-con').find('.pre').css('padding', '6px 15px');
            //console.log($(this).parents('.date-dz-right').siblings('.hf-con').find('.pre'))
            //input框自动聚焦
            //$(this).parents('.date-dz-right').siblings('.hf-con').find('.hf-input').val('').focus().val(fhN);
        } else {
            $(this).addClass('hf-con-block');
            $(this).parents('.date-dz-right').siblings('.hf-con').remove();
        }
    });
</script>
<!--回复评论-->
<script>

    function replyComment(rname) {

        var ator = $('#rname').val();
        var cname = document.getElementById('cname').value;
        var cid = document.getElementById('cid').value;
        var cRT = document.getElementById('replyTextarea').value;
        $.post('__URL__/reply', {
            'replyContent': cRT,//回复内容
            'cname': cname,     //评论人姓名
            'replyCid': cid,    //评论id
            'ator': ator         //回复人姓名
        }, function (data) {
            var d = JSON.parse(data);
            if (d.code == 1) {
                var rHtml = '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="about" class="comment-size-name">' + d.data.ator + ' : </a><span class="my-pl-con">回复@<span class="comment-size-name">' + d.data.cname + ' </span>:  ' + d.data.replyContent + '</span></div><div class="date-dz"><span class="date-dz-left pull-left comment-time">' + d.data.replyTime + '</span><div class="date-dz-right pull-right comment-pl-block"><a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">' + d.data.praise + '</i>)</a></div></div></div>';
                $('#replydiv').parents('.comment-show-con-list').find('.hf-list-con').css('display', 'block').prepend(rHtml) && $('#replydiv').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') && $('#replydiv').remove();

            } else {
                alert(d.message);
                return false;
            }
        });

    }
</script>
<!--点赞-->
<script type="text/javascript">
    function praise(id, t) {
        $.post('__URL__/praise', {'id': id, 'type': t}, function (data) {
            var d = JSON.parse(data);
            if (t == 'r') {

                if (d.code == 0) {

                    $('#replyP_' + id).removeClass('date-dz-z-click red');
                    $('#rePnum_' + id).html(d.pnum);
                    $('#repRedPraise_' + id).removeClass('red');

                } else if (d.code == 1) {

                    $('#replyP_' + id).addClass('date-dz-z-click');
                    $('#rePnum_' + id).html(d.pnum);
                    $('#repRedPraise_' + id).addClass('red');

                }

            } else if (t == 'c') {

                if (d.code == 0) {

                    $('#commentP_' + id).removeClass('date-dz-z-click red');
                    $('#comPnum_' + id).html(d.pnum);
                    $('#comRedPraise_' + id).removeClass('red');

                } else if (d.code == 1) {

                    $('#commentP_' + id).addClass('date-dz-z-click');
                    $('#comPnum_' + id).html(d.pnum);
                    $('#comRedPraise_' + id).addClass('red');

                }

            }
        });
    }
</script>
</body>
</html>
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
