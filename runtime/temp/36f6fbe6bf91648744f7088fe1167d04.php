<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\log\log.html";i:1544510706;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1544511710;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1544505253;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Dashboard">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>操作记录 - Babysbreath博客管理系统</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="__PUBLIC__admin/images/icon/icon.png">
    <link rel="shortcut icon" href="__PUBLIC__admin/images/icon/favicon.ico">
    <script src="__PUBLIC__admin/js/jquery-2.1.4.min.js"></script>
    <!--[if gte IE 9]>
    <script src="__PUBLIC__admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__admin/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__admin/js/respond.min.js" type="text/javascript"></script>
    <script src="__PUBLIC__admin/js/selectivizr-min.js" type="text/javascript"></script>
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
            <li><a href="<?php echo url('Visitor/visitor'); ?>">访问记录</a></li>
            <!--<li class="disabled"><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>-->
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
            <form action="<?php echo url('Log/log'); ?>" method="post">
                <h1 class="page-header">管理 <span class="badge"><?php echo $LogC; ?></span></h1>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="70px">
                                <span class="glyphicon glyphicon-th-large"></span>
                                <span class="visible-lg">选择</span></th>
                            <th width="120px">
                                <span class="glyphicon glyphicon-tag"></span>
                                <span class="visible-lg">操作者</span>
                            </th>
                            <th width="150px">
                                <span class="glyphicon glyphicon-link"></span>
                                <span class="visible-lg">IP</span>
                            </th>
                            <th width="200px">
                                <span class="glyphicon glyphicon-bookmark"></span>
                                <span class="visible-lg">国家/省份/城市</span>
                            </th>
                            <th width="100px">
                                <span class="glyphicon glyphicon-link"></span>
                                <span class="visible-lg">运营商</span>
                            </th>
                            <th width="70px">
                                <span class="glyphicon glyphicon-list"></span>
                                <span class="visible-lg">类型</span>
                            </th>
                            <th width="70px">
                                <span class="glyphicon glyphicon-list"></span>
                                <span class="visible-lg">模块</span>
                            </th>
                            <th>
                                <span class="glyphicon glyphicon-file"></span>
                                <span class="visible-lg">详情</span>
                            </th>
                            <th width="160px">
                                <span class="glyphicon glyphicon-time"></span>
                                <span class="visible-lg">时间</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($op) || $op instanceof \think\Collection || $op instanceof \think\Paginator): $i = 0; $__LIST__ = $op;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?>
                            <tr id="operation_tr_<?php echo $o['id']; ?>">
                                <td style="text-align: center;"><?php echo $o['id']; ?></td>
                                <td class="article-title"><?php echo $o['op_admin']; ?></td>
                                <td class="article-title"><?php echo $o['op_ip']; ?></td>
                                <td class="article-title">
                                    <?php if($o['op_country'] == ''): ?>未知<?php else: ?><?php echo $o['op_country']; endif; ?>/
                                    <?php if($o['op_region'] == ''): ?>未知<?php else: ?><?php echo $o['op_region']; endif; ?>/
                                    <?php if($o['op_city'] == ''): ?>未知<?php else: ?><?php echo $o['op_city']; endif; ?></td>
                                <td class="article-title">
                                    <?php if($o['op_isp'] == ''): ?>未知<?php else: ?><?php echo $o['op_isp']; endif; ?></td>
                                <td class="article-title"><?php echo $o['op_type']; ?></td>
                                <td class="article-title"><?php echo $o['op_module']; ?></td>
                                <td class="article-title"><?php echo $o['op_details']; ?></td>
                                <td><?php echo $o['op_time']; ?></td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr>
                            <td colspan="9">
                                <div class="pagelist"><?php echo $op->render(); ?></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</section>
<!--提示模态框-->
<div class="modal fade" id="delarticle" tabindex="-1" role="dialog" aria-labelledby="articleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" id="closeX" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="articleModalLabel">

                </h4>
            </div>
            <div class="modal-body" id='delArticleBody'>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="close" data-dismiss="modal" >关闭 </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
<script>
    function delOperation(id){
        var c = confirm("确定要删除此记录吗?");
        if(c == true){
            $.post('__URL__/del',{'id':id},function(data){
                var d = JSON.parse(data);
                if(d.code === '1'){
                    $('#articleModalLabel').html('删除记录');
                    $('#delArticleBody').html(d.msg);
                    $('#delarticle').modal('show');
                    $('#operation_tr_' + id).remove();
                }else{
                    $('#articleModalLabel').html('删除记录');
                    $('#delArticleBody').html(d.msg);
                    $('#delarticle').modal('show');
                }
            });
        }
    }
</script>
</body>
</html>
