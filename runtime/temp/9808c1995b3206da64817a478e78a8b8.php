<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\about\about.html";i:1545384344;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1544511710;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1544926203;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>关于我 - Babysbreath博客管理系统</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/style.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/beyond.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="__PUBLIC__admin/images/icon/icon.png">
<link rel="shortcut icon" href="__PUBLIC__admin/images/icon/favicon.png">
<script src="__PUBLIC__admin/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="__PUBLIC__admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/respond.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<style>
	.checkbox{
	width: 219px;
    float: left;
    margin: 0 5px 0 5px;
    height: 80px;
	text-align:center;
	}
</style>
</head>

<body class="user-select">
<section class="container-fluid">
    <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?php echo url('Index/index'); ?>">Babysbreath</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo \think\Request::instance()->session('kkstars_adminName'); ?>
                </a>
            </li>
            <li><a href="<?php echo url('Login/loginExit'); ?>" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="row">
  
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li><a href="<?php echo url('Index/index'); ?>">报告</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="<?php echo url('Article/article'); ?>">文章</a></li>
        <li><a href="<?php echo url('mood/mood'); ?>">心情随笔</a></li>
        <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">图片</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
        	<li><a href="<?php echo url('imgs/index'); ?>">图片列表</a></li>
        	<li><a href="<?php echo url('imgs/img'); ?>">添加图片</a></li>
          </ul>
        </li>
        <li><a href="<?php echo url('Comment/comment'); ?>">评论</a></li>
        <li><a href="<?php echo url('Message/message'); ?>">网站留言</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="<?php echo url('Cate/category'); ?>">栏目</a></li>
        <li><a class="dropdown-toggle" id="otherMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">其他</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="<?php echo url('Flink/flink'); ?>">友情链接</a></li>
            <li><a href="<?php echo url('Log/log'); ?>">操作记录</a></li>
            <!--<li class="disabled"><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>-->
          </ul>
        </li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
          <ul class="dropdown-menu" aria-labelledby="settingMenu">
            <li><a href="<?php echo url('Setting/setting'); ?>">基本设置</a></li>
            <li><a href="<?php echo url('About/about'); ?>">关于我</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
      <div class="row">
        <form action="<?php echo url('About/about'); ?>" method="post" enctype="multipart/form-data">
          <div style="width: 100%;">
            <h1 class="page-header">我的信息</h1>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>关于我</span></h2>
              <div class="add-article-box-content">
                <input type="text" name="aboutMe" class="form-control" placeholder="" required autofocus autocomplete="off" value="<?php echo $about['aboutMe']; ?>" />
              </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>信息（别名 —— 职位 —— 性别 —— 地址）</span></h2>
              <div class="add-article-box-content" style="    height: 55px;">
                <input type="text" name="alias" style="width:25%;float:left;" class="form-control" placeholder="别名" required autofocus autocomplete="off" value="<?php echo $about['alias']; ?>" />

                <input type="text" name="position" style="width:25%;float:left;margin-left: 10px;" class="form-control" placeholder="职位" required autofocus autocomplete="off" value="<?php echo $about['position']; ?>" />

                <input type="text" name="sex" style="width:25%;float:left;margin-left: 10px;" class="form-control" placeholder="性别" required autofocus autocomplete="off" value="<?php echo $about['sex']; ?>" />

                <input type="text" name="address" style="width:23%;float:right;" class="form-control" placeholder="地址" required autofocus autocomplete="off" value="<?php echo $about['address']; ?>" />
              </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>联系我（QQ —— Github —— 微博 —— 微信 —— 邮箱）</span></h2>
              <div class="add-article-box-content" style="    height: 55px;">
                <input type="text" name="qq" style="width:20%;float:left;" class="form-control" placeholder="QQ" required autofocus autocomplete="off" value="<?php echo $about['qq']; ?>" />

                <input type="text" name="github" style="width:20%;float:left;margin-left: 10px;" class="form-control" placeholder="Github" required autofocus autocomplete="off" value="<?php echo $about['github']; ?>" />

                <input type="text" name="weibo" style="width:20%;float:left;margin-left: 10px;" class="form-control" placeholder="微博" required autofocus autocomplete="off" value="<?php echo $about['weibo']; ?>" />

                <input type="text" name="email" style="width:20%;float:left;margin-left: 10px;" class="form-control" placeholder="邮箱" required autofocus autocomplete="off" value="<?php echo $about['email']; ?>" />

                <input type="text" name="weixin" style="width:17.4%;float:right;" class="form-control" placeholder="微信" required autofocus autocomplete="off" value="<?php echo $about['weixin']; ?>" />
              </div>
            </div>

            <div class="add-article-box" style="width: 18%">
              <h2 class="add-article-box-title"><span>微信二维码</span></h2>
              <div class="add-article-box-content" id="imgDiv">
                <input type="file" id="add-img" name="wechat" />
                <?php if($about['wechat'] != null): ?>
                <img src="__PUBLIC__<?php echo $about['wechat']; ?>" title="微信二维码" width="250px" />
                <?php endif; ?>
              </div>
            </div>
            <button class="btn btn-primary" type="submit" style="float:right;">更新</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--提示模态框-->
  
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
      </div>
      <div class="modal-body"> <img src="__PUBLIC__admin/images/baoman/baoman_01.gif" alt="深思熟虑" />
        <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<script src="__PUBLIC__admin/js/bootstrap.min.js"></script>
<script src="__PUBLIC__admin/js/admin-scripts.js"></script>
</body>
</html>