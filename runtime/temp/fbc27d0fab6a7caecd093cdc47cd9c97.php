<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\board\board.html";i:1544148677;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\header.html";i:1527503171;s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/index\view\Public\footer.html";i:1524903142;}*/ ?>
<!DOCTYPE HTML>
<html>
<title>留言板 — <?php echo $conf['title']; ?></title>
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
<!-- 留言 -->
<script type="text/javascript" src="__PUBLIC__index/comment/js/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="__PUBLIC__index/comment/css/comment.css">
<link rel="stylesheet" href="__PUBLIC__index/comment/css/style.css">
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
        <span class="c-gray">留言板</span>
    </div>
</nav>

<section class="container">
    <div class="col-xs-12 col-md-10 col-md-offset-1 mt-20">
        <div class="entry">
            <div style="background: #e1e2e9;">
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong>如果你发现了本站的漏洞&nbsp;<img
                            src="__PUBLIC__index/img/GIF/yun.gif" alt="" height="auto"
                            original="__PUBLIC__index/images/hacker.gif"
                            style="height: auto;">&nbsp; &nbsp;
					</strong></span>
                </p>
                <p style="text-align: center;">
                    <br>
                </p>
                <p style="text-align: center;">
                    <br>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong>如果你对本站有什么意见或建议
							&nbsp;&nbsp;<img src="__PUBLIC__index/img/GIF/feng.gif"
                                             alt="" height="auto" style="height: auto;"
                                             original="__PUBLIC__index/images/yijian.gif">
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
                    <br>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong>如果你有什么比较好的文章
							&nbsp;&nbsp;<img src="__PUBLIC__index/img/GIF/caihong.gif" alt=""
                                             height="auto" style="height: auto;"
                                             original="__PUBLIC__index/images/page.gif">
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
                    <br>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong>都可以联系
							&nbsp;</strong></span><span style="font-size: 16px; font-family: NSimSun;"><strong>℡ <?php echo $conf['alias']; ?>
                               <img src="__PUBLIC__index/img/GIF/ping.gif" alt="" height="auto" style="height: auto;" original="__PUBLIC__index/images/page.gif">\
                    </strong></span>
                </p>
                <p style="text-align: center;">
                    <br>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong>邮箱：<?php echo $conf['email']; ?>
							&nbsp;&nbsp;<img src="__PUBLIC__index/img/GIF/xin.gif" alt=""
                                             height="auto" style="height: auto;"
                                             original="__PUBLIC__index/images/mail.gif">
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
                <p style="text-align: center;">
					<span style="font-size: 16px; font-family: NSimSun;"><strong><br>
					</strong></span>
                </p>
            </div>
        </div>
        <div class="commentAll">
            <!--评论区域 begin-->
            <div class="reviewArea clearfix">
                <textarea id="commentTextarea" class="comment-content comment-input" placeholder="请输入留言&hellip;"
                          onkeyup="keyUP(this)"></textarea>
                <a href="javascript:;" class="plBtn" onclick="submitComment()">留言</a>
            </div>
            <!--评论区域 end-->
            <!--回复区域 begin-->
            <div class="comment-show" id="commentS">
                <?php if(is_array($message) || $message instanceof \think\Collection || $message instanceof \think\Paginator): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?>
                <div class="comment-show-con clearfix">
                    <div class="pull-left">    <!-- class : comment-show-con-img  -->
                        <img src="__PUBLIC__index/img/head.png" alt="">
                    </div>
                    <div class="comment-show-con-list pull-left clearfix">
                        <div class="pl-text clearfix">
                            <span class="comment-size-name"><?php echo $m['randAtorName']; ?> : </span>
                            <span class="my-pl-con">&nbsp;<?php echo $m['messageContent']; ?></span>
                        </div>
                        <div class="date-dz">
                            <span class="date-dz-left pull-left comment-time"><?php echo $m['addTime']; ?></span>
                            <div class="date-dz-right pull-right comment-pl-block">
                                <!--<a href="javascript:;" class="removeBlock">删除</a>-->
                                <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                                <data id="mname" value="<?php echo $m['randAtorName']; ?>" type="hidden"></data>
                                <data id="mid" value="<?php echo $m['messageId']; ?>" type="hidden"></data>
                                <data id="rname" value="<?php echo $conf['alias']; ?>" type="hidden"></data>
                            </div>
                        </div>
                        <div class="hf-list-con" style="display: block;">
                            <?php if($m['reply'] != null): if(is_array($m['reply']) || $m['reply'] instanceof \think\Collection || $m['reply'] instanceof \think\Paginator): $i = 0; $__LIST__ = $m['reply'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mr): $mod = ($i % 2 );++$i;?>
                            <div class="all-pl-con">
                                <div class="pl-text hfpl-text clearfix">
                                    <a href="about" class="comment-size-name"><?php echo $conf['alias']; ?> : </a>
                                    <span class="my-pl-con">回复@<span class="comment-size-name"><?php echo $mr['mname']; ?> </span> :  <?php echo $mr['replyContent']; ?>
                                </span>
                                </div>
                                <div class="date-dz">
                                    <span class="date-dz-left pull-left comment-time"><?php echo $mr['addTime']; ?></span>
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
        if (len > 999) {
            $(t).val($(t).val().substring(0, 1000));
        }
    }
</script>
<!--评论-->
<script>
    function submitComment() {

        var cCT = document.getElementById('commentTextarea').value;
        $.post('__URL__/add', {'content': cCT}, function (data) {
            var d = JSON.parse(data);
            if (d.code == 1) {
                var cHtml = '<div class="comment-show-con clearfix"><div class="pull-left"><img src="__PUBLIC__index/img/head.png" alt=""></div> <div class="comment-show-con-list pull-left clearfix"><div class="pl-text clearfix"> <span href="#" class="comment-size-name">' + d.data.randAtorName + ' : </span> <span class="my-pl-con">&nbsp;' + d.data.messageContent + '</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + d.data.addTime + '</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> </div> </div><div class="hf-list-con"></div></div> </div>';
                if (cCT.replace(/(^\s*)|(\s*$)/g, "") != '') {
                    // 空格开头或者空格结尾 ^是开始 \s是空白 *表示0个或多个 |是或者 $是结尾 g表示全局
                    $('#commentS').prepend(cHtml);
                    // 插入提交的评论内容
                    $('#commentTextarea').prop('value', '').siblings('pre').find('span').text('');
                    // 清空提交后的 textarea  和  pre 里的内容
                } else {
                    alert('留言内容不能以空格开头或空格结尾');
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
        var fhHtml = '<div id="replydiv" class="hf-con pull-left"> <textarea id="replyTextarea" class="replyContent comment-input hf-input" placeholder=" ' + fhN + ' " onkeyup="keyUP(this)"></textarea> <a href="javascript:;" onclick="replyComment()" class="hf-pl">留言</a></div>';
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

        var ator = document.getElementById('rname').value;
        var mname = document.getElementById('mname').value;
        var mid = document.getElementById('mid').value;
        var cRT = document.getElementById('replyTextarea').value;
        $.post('__URL__/reply', {
            'replyContent': cRT,//回复内容
            'mname': mname,     //评论人姓名
            'replyMid': mid,    //评论id
            'ator': ator         //回复人姓名
        }, function (data) {
            var d = JSON.parse(data);
            if (d.code == 1) {
                var rHtml = '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="about" class="comment-size-name">' + d.data.ator + ' : </a><span class="my-pl-con">回复@<span class="comment-size-name">' + d.data.mname + ' </span>:  ' + d.data.replyContent + '</span></div><div class="date-dz"><span class="date-dz-left pull-left comment-time">' + d.data.addTime + '</span></div></div>';
                $('#replydiv').parents('.comment-show-con-list').find('.hf-list-con').css('display', 'block').prepend(rHtml) && $('#replydiv').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') && $('#replydiv').remove();

            } else {
                alert(d.message);
                return false;
            }
        });

    }
</script>

<script type="text/javascript" src="__PUBLIC__index/plugin/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/layer/3.0/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="__PUBLIC__index/plugin/pifu/pifu.js"></script>
<script type="text/javascript" src="__PUBLIC__index/js/common.js"></script>

<script type="text/javascript" src="__PUBLIC__index/comment/js/jquery.flexText.js"></script>
<script> $(function () {
    $(window).on("scroll", backToTopFun);
    backToTopFun();
});
</script>
</body>
</html>
