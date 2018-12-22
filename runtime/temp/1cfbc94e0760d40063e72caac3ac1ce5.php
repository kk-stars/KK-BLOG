<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\imgs\img.html";i:1544758242;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1544511710;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1544758073;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
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
<link rel="shortcut icon" href="__PUBLIC__admin/images/icon/favicon.png">
<script src="__PUBLIC__admin/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="__PUBLIC__admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/respond.min.js" type="text/javascript"></script>
  <script src="__PUBLIC__admin/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->

<style>
	.imgs{
		text-align:-webkit-auto;
		border-radius:10px;
		padding:20px;
		border:1px solid #ccc;
		margin:10px;
		*image-rendering: pixelated;
	}
	#imgDiv img{
		*float:left;
	}
	#imgDiv{
		position:absolute;
		margin-bottom: 270px;
	}
	#bigDiv{
		padding-left:365px;
		text-align: center;
		margin-top: 50px;
		text-align:-webkit-auto;
	}
	.a-add-img{
		float:left;
		width:222px;
		height:200px;
		display:inline-block;
		background:url(__PUBLIC__admin/images/add.jpg) no-repeat;
	}
	.a-upload-img{
		float:left;
		width:200px;
		height:200px;
		margin-left:20px;
		display:inline-block;
		background:url(__PUBLIC__admin/images/upload.png) no-repeat;
	}
	#add-img{
		height: 200px;
	    opacity: 0;
	    display: -webkit-inline-box;
	    width: 200px;
	}
	#upload-img{
		height: 200px;
	    opacity: 0;
	    display: -webkit-inline-box;
	    width: 200px;
	}
	.div-a-input{
		height:200px;
		width:100%;
		position:fixed;
		bottom:40px;
	}
</style>
</head>

<body class="user-select">
	<div id="bigDiv">
		<form method="post" id="formImg" action="<?php echo url('Imgs/img'); ?>" enctype="multipart/form-data">
			<br> &nbsp; <br>
			<div id="imgDiv" class="imgdiv">

			</div>
			<div class="div-a-input">
				<a href="javascript:;" id="a-add-img" class="a-add-img">
					<input type="file" id="add-img" name="imgs[]" multiple="multiple" />
				</a>
				<a href="javascript:;" id="a-upload-img" class="a-upload-img">
					<input type="submit" id="upload-img" value="上传" />
				</a>
			</div>
		</form>
	</div>
<script>
//预览图片
$(function () {
	$('#add-img').click(function(){

	    $("#add-img").change(function () {
	        var $file = $(this);
	        var fileObj = $file[0];
	        var windowURL = window.URL || window.webkitURL;
	        var dataURL;
	        var $img = $("#preview");
	        var fflen = fileObj.files.length;// > 8 ? 8 : fileObj.files.length;
	        var iDiv = document.getElementById('imgDiv');

	        for(var i = 0;i < fflen;i++){
		        if (fileObj && fileObj.files && fileObj.files[i]) {
		            dataURL = windowURL.createObjectURL(fileObj.files[i]);

			        var imgs = "<img width='300px' id='imgs' class='imgs' src='" + dataURL + "' title='' alt='' />";
		            iDiv.innerHTML = imgs;
		            //$img.attr('src', );
		        } else {
		            dataURL = $file.val();
		            var imgObj = document.getElementById("preview");
		            // 两个坑:
		            // 1、在设置filter属性时，元素必须已经存在在DOM树中，动态创建的Node，也需要在设置属性前加入到DOM中，先设置属性在加入，无效；
		            // 2、src属性需要像下面的方式添加，上面的两种方式添加，无效；
		            imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
		            imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;

		        }
	        }
	    });
	});
});
</script>
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
          </ul>
        </li>
      </ul>
    </aside>
  </div>
</section>
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
