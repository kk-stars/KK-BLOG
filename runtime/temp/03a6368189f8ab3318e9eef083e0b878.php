<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\comment\comment.html";i:1524713521;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\header.html";i:1524713445;s:77:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\aside.html";i:1524713961;s:78:"G:\PHPWAMP_IN2\wwwroot\kk-blog/application/babysbreath\view\Public\prompt.html";i:1517304229;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>评论 - Babysbreath博客管理系统</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/style.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__admin/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="__PUBLIC__admin/images/icon/icon.png">
<link rel="shortcut icon" href="__PUBLIC__admin/images/icon/favicon.ico">
<script src="__PUBLIC__admin/js/jquery-2.1.4.min.js"></script>
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
      <form action="" method="post">
        <h1 class="page-header">管理 <span class="badge"><?php echo \think\Request::instance()->session('commentCount'); ?></span></h1>
        <div class="table-responsive" id="responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th width="80px"><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">选择</span></th>
                <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">评论内容</span></th>
                <th width="400px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">评论对象</span></th>
                <th width="200px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">评论者</span></th>
                <th width="180px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">日期</span></th>
                <th width="150px"><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <tbody>
             <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
              <tr id="cid_<?php echo $c['commentId']; ?>">
                <td><input type="checkbox" class="input-control" id="commentid" name="checkbox[]" value="<?php echo $c['commentId']; ?>" /><?php echo $c['commentId']; ?></td>
                <td class="article-title"><?php echo mb_substr($c['commentContent'],0,40,'utf-8'); if(strlen($c['commentContent']) > 152){echo " ……";} ?></td>
                <td class="article-title"><?php echo mb_substr($c['articleTitle'],0,25,'utf-8'); if(strlen($c['articleTitle']) > 100){echo " ……";} ?></td>
                <td class="article-title">匿名</td>
                <td><?php echo $c['addTime']; ?></td>
                <td><a id="seeComment" href="javascript:;" onClick="seeComment(<?php echo $c['commentId']; ?>)">
                	<i class="fa fa-eye"></i> 查看　</a>　
                	<a id="del" href="javascript:;" onClick="delComment(<?php echo $c['commentId']; ?>)">
	                	<i class="fa fa-trash-o"></i> 删除　</a>
                </td>
              </tr>
             <?php endforeach; endif; else: echo "" ;endif; ?>
              <tr  height="80px"><td colspan="6"><div class="pagelist"><?php echo $comment->render(); ?></div></td></tr>
            </tbody>
          </table>
        </div>
        <footer class="message_footer">
          <nav>
            <div style="margin-top: -68px;" class="btn-toolbar operation" role="toolbar">
              <div class="btn-group" role="group"> <a class="btn btn-default" onClick="select()">全选</a> <a class="btn btn-default" onClick="reverse()">反选</a> <a class="btn btn-default" onClick="noselect()">不选</a> </div>
              <div class="btn-group" role="group">
                <button type="submit" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="删除全部选中" name="checkbox_delete">删除</button>
              </div>
            </div>
          </nav>
        </footer>
      </form>
    </div>
  </div>
</section>
<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 1000px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					查看评论
				</h4>
			</div>
			<div class="modal-body" id='commentBody'>
	          <table class="table table-striped table-hover">
	            <tbody>
	              <tr>
	                <td width="100px">评论内容:</td>
	                <td class="article-title"><p id="cmContent"></p></td>
	              </tr>
	              <tr>
	                <td>评论对象:</td>
	                <td class="article-title" id="cmArticle"></td>
	              </tr>
	              <tr>
	                <td>评论　者:</td>
	                <td class="article-title" id="cmAtor"></td>
	              </tr>
	              <tr>
	                <td>日　　期:</td>
	                <td class="article-title" id="cmDate"></td>
	              </tr>
	            </tbody>
	          </table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default"
						data-dismiss="modal">关闭
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="delcomment" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="closeX" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="myModalLabel">
					删除评论
				</h4>
			</div>
			<div class="modal-body" id='delCommentBody'>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" id="close" data-dismiss="modal" >关闭
				</button>
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
//查看评论
function seeComment(commentId) {
		/*	post提交( 提交的地址，提交的数据，接受返回信息 )	*/
		$.post('__URL__/seeComment',{'commentId':commentId},function(data){
			var d = JSON.parse(data);/*	 JSON.parse 解析JSON字符串 。将一个 JSON 字符串转换为对象。 */
			if(d.code == 1){
				$('#cmContent').html(d.message.commentContent);
				$('#cmArticle').html(d.message.articleTitle);
				$('#cmAtor').html(d.message.userName);
				$('#cmDate').html(d.message.addTime);
				$('#comment').modal('show');
			}else{
				$('#cmContent').remove();
				$('#cmArticle').remove();
				$('#cmAtor').remove();
				$('#cmDate').remove();
				$('#commentBody').html(d.message);
				$('#comment').modal('show');
			}
		})
        return false;
}

//删除评论
function delComment(commentId){
	var c = confirm('确定要删除此评论吗?');
	if(c == true){
		$.post('__URL__/delComment',{'commentId':commentId},function(data){
			var d = JSON.parse(data);
			if(d.code == 1){
				$('#delCommentBody').html(d.message);
				$('#delcomment').modal('show');
				$('#cid_'+commentId).remove();
			}else{
				$('#delCommentBody').html(d.message);
				$('#delcomment').modal('show');
			}
		});
	}
    return false;
}
</script>
</body>
</html>
