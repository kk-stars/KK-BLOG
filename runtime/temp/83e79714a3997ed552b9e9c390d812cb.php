<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\update\updateflink.html";i:1544453224;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1524713445;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1524713961;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>修改友情链接 - Babysbreath博客管理系统</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/style.css">
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
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html';</script>
    <![endif]-->
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
                    <?php echo \think\Request::instance()->session('adminName'); ?>
                </a>
            </li>
            <li><a href="<?php echo url('Login/login'); ?>" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li>
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
            <li class="disabled"><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a class="dropdown-toggle" id="settingMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">设置</a>
          <ul class="dropdown-menu" aria-labelledby="settingMenu">
            <li><a href="<?php echo url('Setting/setting'); ?>">基本设置</a></li>
          </ul>
        </li>
      </ul>
    </aside>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">
            <div class="row">
                <form action="<?php echo url('update/updateFlink'); ?>" method="post" class="add-flink-form" autocomplete="off" draggable="false">
                    <div class="col-md-9">
                        <input type="hidden" name="friendshipLinkId" value="<?php echo $UpdateData['friendshipLinkId']; ?>" />
                        <h1 class="page-header">修改友情链接</h1>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>名称</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" id="flink-name" name="friendshipLinkName" class="form-control" value="<?php echo $UpdateData['friendshipLinkName']; ?>" placeholder="在此处输入名称" required autofocus autocomplete="off">
                                <span class="prompt-text">例如：Babysbreath技术博客</span></div>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>WEB地址</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" id="flink-url" name="friendshipLinkURL" class="form-control"
                                       value="<?php echo $UpdateData['friendshipLinkURL']; ?>" placeholder="在此处输入URL地址" required
                                       autocomplete="off">
                                <span class="prompt-text">例子：<code>http://www.baidu.com/</code>——不要忘了<code>http://</code></span>
                            </div>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>图像地址</span></h2>
                            <div class="add-article-box-content">
                                <input type="text" id="flink-imgurl" name="pic" class="form-control"
                                       value="<?php echo $UpdateData['pic']; ?>" placeholder="在此处输入图像地址"
                                       required autocomplete="off">
                                <span class="prompt-text">图像地址是可选的，可以为网站LOGO地址等</span></div>
                        </div>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>描述</span></h2>
                            <div class="add-article-box-content">
                                <textarea class="form-control" name="description" autocomplete="off"><?php echo $UpdateData['description']; ?></textarea>
                                <span class="prompt-text">描述是可选的手工创建的内容总结</span></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h1 class="page-header">操作</h1>
                        <div class="add-article-box">
                            <h2 class="add-article-box-title"><span>保存</span></h2>
                            <div class="add-article-box-content">
                                <p>
                                    <label>状态：</label>
                                    <span class="article-status-display">已增加</span>
                                </p>
                                <p>
                                    <label>target：</label>
                                    <input type="radio" name="target" value="0" <?php if($UpdateData['target'] == '0'): ?> checked <?php endif; ?>/>_blank&nbsp;&nbsp;
                                    <input type="radio" name="target" value="1" <?php if($UpdateData['target'] == '1'): ?> checked <?php endif; ?>/>_self&nbsp;&nbsp;
                                    <input type="radio" name="target" value="2" <?php if($UpdateData['target'] == '2'): ?> checked <?php endif; ?>/>_top
                                </p>
                                <p>
                                    <label>rel：</label>
                                    <input type="radio" name="rel" value="0" <?php if($UpdateData['rel'] == '0'): ?> checked <?php endif; ?>/>nofollow&nbsp;&nbsp;
                                    <input type="radio" name="rel" value="1" <?php if($UpdateData['rel'] == '1'): ?> checked <?php endif; ?>/>none</p>
                                </p>
                                <p>
                                    <label>修改于：</label>
                                    <span class="article-time-display">
                                        <input style="border: none;" type="datetime" value="<?php echo $UpdateData['lastModifyTime']; ?>"/>
                                    </span>
                                </p>
                            </div>
                            <div class="add-article-box-footer">
                                <button class="btn btn-primary" type="submit">更新</button>
                            </div>
                        </div>
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