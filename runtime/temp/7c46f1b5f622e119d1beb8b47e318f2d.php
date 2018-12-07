<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\add\addarticle.html";i:1524712218;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1524713445;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1524713961;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>写文章 - Babysbreath博客管理系统</title>
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
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->

<script src="__PUBLIC__admin/UEditor/ueditor.config.js"></script>
<script src="__PUBLIC__admin/UEditor/ueditor.all.min.js"> </script>
<script src="__PUBLIC__admin/UEditor/lang/zh-cn/zh-cn.js"></script>
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
        <form action="" method="post" class="add-article-form" enctype="multipart/form-data" >
          <div class="col-md-9">
            <h1 class="page-header">撰写新文章</h1>
            <div class="form-group">
              <label for="article-title" class="sr-only">标题</label>
              <input type="text" id="article-title" name="articleTitle" class="form-control" placeholder="在此处输入标题" required autofocus autocomplete="off">
            </div>
            <div class="form-group">
              <label for="article-content" class="sr-only">内容</label>
			  <textarea name="articleContent" id="articleContent"></textarea>
            </div>
			<script type="text/javascript">
				UE.getEditor('articleContent', {
					initialFrameWidth : 1146,
					initialFrameHeight : 400
				});
			</script>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>关键字</span></h2>
              <div class="add-article-box-content">
              	<input type="text" class="form-control" placeholder="请输入关键字" name="articleKeywords" autocomplete="off">
                <span class="prompt-text">多个标签请用竖线 | 隔开。</span>
              </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>描述</span></h2>
              <div class="add-article-box-content">
              	<textarea class="form-control" name="articleDescription" autocomplete="off"></textarea>
                <span class="prompt-text">描述是可选的手工创建的内容总结，并可以在网页描述中使用</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h1 class="page-header">操作</h1>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>栏目</span></h2>
              <div class="add-article-box-content">
                <ul class="category-list">
<!-- 	                  <li>
	                    <label>
	                    	<input name="articleCate" type="radio" value="9999" checked="checked" />无
		                    <em class="hidden-md">( 栏目ID: <span>0</span> )</em>
	                   	</label>
	                  </li> -->
                	<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
	                  <li>
	                    <label>
	                    	<input name="articleCate" type="radio" value="<?php echo $c['cateId']; ?>" /><?php if($c['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat(" —— ",$c['level']);?><?php echo $c['cateName']; ?>
		                    <em class="hidden-md">( 栏目ID: <span><?php echo $c['cateId']; ?></span> )</em>
	                   	</label>
	                  </li>
                  	<?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>标签</span></h2>
              <div class="add-article-box-content">
                <input type="text" class="form-control" placeholder="输入新标签" name="articleTags" autocomplete="off">
                <span class="prompt-text">多个标签请用竖线  | 隔开</span> </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>标题图片</span></h2>
              <div class="add-article-box-content">
                <input type="file" id="pictureUpload" name="articlePic" />
              </div>
            </div>
            <div class="add-article-box">
              <h2 class="add-article-box-title"><span>发布</span></h2>
              <div class="add-article-box-content">
              	<p><label>状态：</label><span class="article-status-display">未发布</span></p>
              	<p><label>是否轮播：</label>
              		<input type="radio" name="slider" value="1" />YES
              		<input type="radio" name="slider" value="0" checked/>NO
              	</p>
              	<p><label>图片库：</label>
              		<input type="radio" name="saveImg" value="1" />YES
              		<input type="radio" name="saveImg" value="0" checked/>NO
              	</p>
                <p><label>公开度：</label>
                	<input type="radio" name="overt" value="1" checked/>公开
                	<input type="radio" name="overt" value="0" />加密
                </p>
                <!--<p><label>发布于：</label><span class="article-time-display"><input style="border: none;" type="datetime" name="time" value="2016-01-09 17:29:37" /></span></p> -->
              </div>
              <div class="add-article-box-footer">
                <button class="btn btn-primary" type="submit">发布</button>
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
<script>

function loginInfo(aid){
	$.get('__URL__/info',{'adminId':aid},function(data){
		var d = JSON.parse(data);
		document.getElementById('adminId').value = aid;
		document.getElementById('adminName').value = d.adminName;
		document.getElementById('loginName').value = d.loginName;
		document.getElementById('infoContactNumber').value = d.contactNumber;
	});
}

function submitInfo(){
	var aAdmId = $('#adminId').val();
	var aAdmName = $('#adminName').val();
	var aLogName = $('#loginName').val();
	var aCttNum = $('#infoContactNumber').val();
	var aAdmPwd = $('#oldPassword').val();
	var aLogPwd = $('#loginPassword').val();
	var aNewPwd = $('#newPassword').val();

	var phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;
	//电话
	var phone = $.trim(aCttNum);
	if (!phoneReg.test(phone)) {
	  alert('请输入有效的手机号码！');
	  return false;
	}

	if(aAdmPwd != '' && aLogPwd != '' && aNewPwd != '' && aLogPwd == aNewPwd){
		$.post('__URL__/info',{'adminId':aAdmId,'adminName':aAdmName,'loginName':aLogName,'contactNumber':aCttNum,'oldPassword':aAdmPwd,'loginPassword':aLogPwd,'newPassword':aNewPwd},function(info){
			var d = JSON.parse(info);
			if(d.code == 1){
				$('#adminModalLabel').html('信息提示');
				$('#upAdminBody').html(d.message);
				$('#upadmin').modal('show');
				$('#seeUserInfo').modal('hide');
				setTimeout('location.href = "<?php echo url('admin/Login/login'); ?>";',2000);
			}
		});
	}else if(aAdmPwd == '' || aLogPwd == '' && aNewPwd == ''){
		$.post('__URL__/info',{'adminId':aAdmId,'adminName':aAdmName,'loginName':aLogName,'contactNumber':aCttNum,'oldPassword':0,'loginPassword':0,'newPassword':0},function(info){
			var d = JSON.parse(info);
			if(d.code == 1){
				$('#adminModalLabel').html('信息提示');
				$('#upAdminBody').html(d.message);
				$('#upadmin').modal('show');
				$('#seeUserInfo').modal('hide');
				setTimeout('location.href = "<?php echo url('admin/Login/login'); ?>";',2000);
			}
		});
	}else{
   	  alert('密码错误!');
   	  return false;
	}
}
</script>
</body>
</html>
