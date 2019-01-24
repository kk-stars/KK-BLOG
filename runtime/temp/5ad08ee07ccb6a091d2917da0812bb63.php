<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\imgs\index.html";i:1545573305;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\header.html";i:1545573305;s:77:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\aside.html";i:1545573305;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\prompt.html";i:1545573305;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>文章 - Babysbreath博客管理系统</title>
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
      <form action="/Article/checkAll" method="" >
        <h1 class="page-header">操作</h1>
        <ol class="breadcrumb">
          <li>
          	<a href="<?php echo url('imgs/img'); ?>">增加图片</a>
          </li>
          <li>
          	<a href="<?php echo url('imgs/imgRecovery'); ?>">图片回收站</a>
          </li>
        </ol>
        <h1 class="page-header">管理 <span class="badge"><?php echo $imgCount; ?></span></h1>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="70px"><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                <th width="180px"><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">图片</span></th>
                <th width="180px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th width="150px"><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
            	<?php if(is_array($imgData) || $imgData instanceof \think\Collection || $imgData instanceof \think\Paginator): $i = 0; $__LIST__ = $imgData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$id): $mod = ($i % 2 );++$i;?>
	              <tr height = '87px' id="iid_<?php echo $id['imgId']; ?>">
	                <td><input type="checkbox" class="input-control" name="checkbox[]" value="<?php echo $id['imgId']; ?>" /><?php echo $id['imgId']; ?></td>
	                <td><img height="70px" src="__PUBLIC__/<?php echo $id['imgSrc']; ?>" title=""/></td>
	                <td><?php echo $id['addTime']; ?></td>
	                <td><a href="javascript:;" onclick="delimg(<?php echo $id['imgId']; ?>)">
	                	<i class="fa fa-trash-o"></i> 删除</a>
	                </td>
	              </tr>
              	<?php endforeach; endif; else: echo "" ;endif; ?>
	              <tr height="80px" style="background: #eee;"><td colspan='4'><div class="pagelist"><?php echo $imgData->render(); ?></div></td></tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</section>
<div class="modal fade" id="delimg" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="closeX" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="imgModalLabel">

				</h4>
			</div>
			<div class="modal-body" id='delImgBody'>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" id="close" data-dismiss="modal" >关闭 </button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<script>
function delimg(iId){
	var c = confirm("确定要删除此图片吗?");
	if(c == true){
		//老师说：在用异步请求（__URL__/delArticle）的时候先用同步（http://localhost/……）请求，异步请求报错只会报服务器的错误，，找不到错误
		$.post('__URL__/delImg',{'imgId':iId},function(data){
			var d = JSON.parse(data);
			if(d.code == 1){
				$('#imgModalLabel').html('删除图片');
				$('#delImgBody').html(d.message);
				$('#delimg').modal('show');
				$('#iid_'+iId).remove();
			}else{
				$('#imgModalLabel').html('删除图片');
				$('#delImgBody').html(d.message);
				$('#delimg').modal('show');
			}
		});
	    return false;
	}
}
</script>
</body>
</html>
