<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:85:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\comment\replycomment.html";i:1548141762;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\header.html";i:1548062421;s:77:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\aside.html";i:1548137762;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\prompt.html";i:1545573305;s:76:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\info.html";i:1548061883;s:83:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\loginRecord.html";i:1548063034;}*/ ?>
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
    <link rel="shortcut icon" href="__PUBLIC__admin/images/icon/favicon.png">
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
                    <?php echo \think\Request::instance()->session('kkstars_adminName'); ?><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                    <li><a title="查看或修改个人信息" data-toggle="modal" onclick="loginInfo(<?php echo \think\Request::instance()->session('kkstars_adminId'); ?>)" id="loginInfo"  data-target="#seeUserInfo">修改密码</a></li>
                    <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog" onclick="log()">登录记录</a></li>
                </ul>
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

        <li><a class="dropdown-toggle" id="commentMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">文章评论</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="<?php echo url('Comment/comment'); ?>">评论</a></li>
            <li><a href="<?php echo url('Comment/replyComment'); ?>">回复</a></li>
            <!--<li class="disabled"><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>-->
          </ul>
        </li>

        <li><a class="dropdown-toggle" id="messageMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">网站留言</a>
          <ul class="dropdown-menu" aria-labelledby="otherMenu">
            <li><a href="<?php echo url('Message/message'); ?>">留言</a></li>
            <li><a href="<?php echo url('Message/replyMessage'); ?>">回复</a></li>
            <!--<li class="disabled"><a data-toggle="modal" data-target="#areDeveloping">访问记录</a></li>-->
          </ul>
        </li>
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
            <form action="" method="post">
                <h1 class="page-header">管理 <span class="badge"><?php echo $replyCommentCount; ?></span></h1>
                <div class="table-responsive" id="responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th width="80px"><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">ID</span></th>
                            <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">回复内容</span></th>
                            <th width="400px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">回复评论</span></th>
                            <th width="200px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">回复者</span></th>
                            <th width="180px"><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">回复日期</span></th>
                            <th width="180px"><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($replyComment) || $replyComment instanceof \think\Collection || $replyComment instanceof \think\Paginator): $i = 0; $__LIST__ = $replyComment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                        <tr id="cid_<?php echo $c['replyId']; ?>">
                            <td style="text-align: center;"><?php echo $c['replyId']; ?></td>
                            <td class="article-title"><?php echo mb_substr($c['replyContent'],0,40,'utf-8'); if(strlen($c['replyContent']) > 152){echo " ……";} ?>
                            </td>
                            <td class="article-title"><?php echo mb_substr($c['commentContent'],0,25,'utf-8'); if(strlen($c['commentContent']) > 100){echo " ……";} ?>
                            </td>
                            <td class="article-title"><?php echo $c['ator']; ?></td>
                            <td><?php echo $c['replyTime']; ?></td>
                            <td><a id="seeComment" href="javascript:;" onClick="seeComment(<?php echo $c['replyId']; ?>)">
                                <i class="fa fa-eye"></i> 查看　</a>　
                                <a id="del" href="javascript:;" onClick="delComment(<?php echo $c['replyId']; ?>)">
                                    <i class="fa fa-trash-o"></i> 删除　</a>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <tr height="80px">
                            <td colspan="6">
                                <div class="pagelist"><?php echo $replyComment->render(); ?></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
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
                        <td>评论文章:</td>
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

<div class="modal fade" id="delcomment" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel"
     aria-hidden="true">
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
                <button type="button" class="btn btn-default" id="close" data-dismiss="modal">关闭
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
<!--个人信息-->

<div class="modal fade" id="seeUserInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form method="post" action="">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" >修改密码</h4>
        </div>
        <div class="modal-body">
          <table class="table" style="margin-bottom:0px;">
            <thead>
              <tr> </tr>
            </thead>
            <tbody>
              <tr>
                <td wdith="20%">旧密码:</td>
                <td width="80%"><input type="password" class="form-control" name="oldPassword" id="oldPassword" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">新密码:</td>
                <td width="80%"><input type="password" class="form-control" name="loginPassword" id="loginPassword" maxlength="18" autocomplete="off" /></td>
              </tr>
              <tr>
                <td wdith="20%">确认密码:</td>
                <td width="80%"><input type="password" class="form-control" name="newPassword" id="newPassword" maxlength="18" autocomplete="off" /></td>
              </tr>
            </tbody>
            <tfoot>
              <tr></tr>
            </tfoot>
          </table>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="adminId" id="adminId" value="<?php echo \think\Request::instance()->session('kkstars_adminId'); ?>" />
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" onclick="submitInfo()" class="btn btn-primary">提交</button>
            <script type="text/javascript">
                $(function(){
                    $('#seeUserInfo').keyup(function(event){
                        if(event.keyCode==13){ 	//回车键  13
                            submitInfo();			//回车键触发事件
                        }
                    });
                });
            </script>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="upadmin" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="closeX" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="adminModalLabel">
					修改密码
				</h4>
			</div>
			<div class="modal-body" id='upAdminBody'>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--登陆次数-->

<div class="modal fade" id="seeUserLoginlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >登录记录</h4>
      </div>
      <div class="modal-body">
        <table class="table" style="margin-bottom:0px;">
          <thead>
            <tr>
              <th>登录IP</th>
              <th>登录地点</th>
              <th>登录时间</th>
              <th>状态</th>
            </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<script>
	function log(){
		$.post('__URL__/loginLog',{'login' : 'login'},function(data){
			var d = JSON.parse(data);
			var dLen = d.message.length;
			if(d.code == 1){
				var tbody = document.getElementById('tbody');
				tbody.innerHTML = '';
				for(var i = 1; i < dLen; i++){
					var html = "<tr><td id='ip'>"
                            + d.message[i].op_ip +
                            "</td> <td id='city'>"
                            + d.message[i].op_city +
                            "</td> <td id='time'>"
                            + d.message[i].op_time +
                            "</td> <td id='status'>"
                            + d.message[i].op_details +
                            "</td></tr>";

					tbody.innerHTML += html;
				}
				$('#seeUserLoginlog').modal('show');
			}
		});
	}
</script>
<script src="__PUBLIC__admin/js/bootstrap.min.js"></script>
<script src="__PUBLIC__admin/js/admin-scripts.js"></script>
<script>
    //查看评论
    function seeComment(commentId) {
        /*	post提交( 提交的地址，提交的数据，接受返回信息 )	*/
        $.post('__URL__/seeReplyComment', {'commentId': commentId}, function (data) {
            var d = JSON.parse(data);/*	 JSON.parse 解析JSON字符串 。将一个 JSON 字符串转换为对象。 */
            if (d.code == 1) {
                $('#cmContent').html(d.message.replyContent);
                $('#cmArticle').html(d.message.commentContent);
                $('#cmAtor').html(d.message.ator);
                $('#cmDate').html(d.message.replyTime);
                $('#comment').modal('show');
            } else {
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
    function delComment(commentId) {
        var c = confirm('确定要删除此评论吗?');
        if (c == true) {
            $.post('__URL__/delReplyComment', {'commentId': commentId}, function (data) {
                var d = JSON.parse(data);
                if (d.code == 1) {
                    $('#delCommentBody').html(d.message);
                    $('#delcomment').modal('show');
                    $('#cid_' + commentId).remove();
                } else {
                    $('#delCommentBody').html(d.message);
                    $('#delcomment').modal('show');
                }
            });
        }
        return false;
    }
</script>
<script>
    function submitInfo() {
        var aAdmId = $('#adminId').val();
        var aAdmPwd = $('#oldPassword').val();
        var aLogPwd = $('#loginPassword').val();
        var aNewPwd = $('#newPassword').val();

        if (aAdmPwd != '' && aLogPwd != '' && aNewPwd != '') {
            if (aLogPwd == aNewPwd) {

                $.post('__URL__/info', {
                    'adminId': aAdmId,
                    'oldPassword': aAdmPwd,
                    'loginPassword': aLogPwd,
                    'newPassword': aNewPwd
                }, function (info) {
                    var d = JSON.parse(info);
                    if (d.code == 1) {
                        $('#adminModalLabel').html('信息提示');
                        $('#upAdminBody').html(d.message);
                        $('#upadmin').modal('show');
                        $('#seeUserInfo').modal('hide');
                        setTimeout('location.href = "<?php echo url('babysbreath/Login/login'); ?>";', 2000);
                    }
                });

            } else {
                alert('确认密码填写错误!');
                return false;
            }
        } else {
            alert('请填写完整再进行提交!');
            return false;
        }
    }
</script>
</body>
</html>
