<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\cate\category.html";i:1548061118;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\header.html";i:1548059639;s:77:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\aside.html";i:1548053658;s:78:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\prompt.html";i:1545573305;s:76:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\info.html";i:1548061883;s:83:"D:\PHPWAMP_IN3\wwwroot\kkstars/application/babysbreath\view\Public\loginRecord.html";i:1524130899;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>栏目 - Babysbreath博客管理系统</title>
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
                    <?php echo \think\Request::instance()->session('kkstars_adminName'); ?><span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                    <li><a title="查看或修改个人信息" data-toggle="modal" onclick="loginInfo(<?php echo \think\Request::instance()->session('kkstars_adminId'); ?>)" id="loginInfo"  data-target="#seeUserInfo">修改密码</a></li>
                    <li><a title="查看您的登录记录" data-toggle="modal" data-target="#seeUserLoginlog" onclick="log(<?php echo \think\Request::instance()->session('kkstars_adminName'); ?>)">登录记录</a></li>
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
        <div class="col-md-5">
          <h1 class="page-header">添加</h1>
          <form action="<?php echo url('Add/addCategory'); ?>" method="post" autocomplete="off">
            <div class="form-group">
              <label for="category-name">栏目名称</label>
              <input type="text" id="category-name" name="cateName" class="form-control" placeholder="在此处输入栏目名称" required autocomplete="off">
              <span class="prompt-text">这将是它在站点上显示的名字。</span> </div>
            <div class="form-group">
              <label for="category-alias">栏目别名</label>
              <input type="text" id="category-alias" name="cateAlias" class="form-control" placeholder="在此处输入栏目别名" required autocomplete="off">
              <span class="prompt-text">“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</span> </div>
            <div class="form-group">
              <label for="category-fname">父栏目</label>
              <select id="category-fname" class="form-control" name="cateFather">
                <option value="0" selected>无</option>
              	<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
	               <option value="<?php echo $c['cateId']; ?>"><?php if($c['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat(" —— ",$c['level']);?><?php echo $c['cateName']; ?></option>
           		<?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
              <span class="prompt-text">栏目是有层级关系的，您可以有一个“音乐”分类目录，在这个目录下可以有叫做“流行”和“古典”的子目录。</span> </div>
            <div class="form-group">
              <label for="category-keywords">关键字</label>
              <input type="text" id="category-keywords" name="cateKeywords" class="form-control" placeholder="在此处输入栏目关键字" autocomplete="off">
              <span class="prompt-text">关键字会出现在网页的keywords属性中。</span> </div>
            <div class="form-group">
              <label for="category-describe">描述</label>
              <textarea class="form-control" id="category-describe" name="cateDescription" rows="4" autocomplete="off"></textarea>
              <span class="prompt-text">描述会出现在网页的description属性中。</span> </div>
            <button class="btn btn-primary" type="submit">添加新栏目</button>
          </form>
        </div>
        <div class="col-md-7">
          <h1 class="page-header">管理 <span class="badge"><?php echo $count; ?></span>
          <h4 style="float: right; margin-top: -50px; margin-right: 65px;"><a href="<?php echo url('cate/cateRecovery'); ?>">栏目回收站</a></h4></h1>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width='80px'><span class="glyphicon glyphicon-paperclip"></span> <span class="visible-lg">ID</span></th>
                  <th><span class="glyphicon glyphicon-file"></span> <span class="visible-lg">名称</span></th>
                  <th width='180px'><span class="glyphicon glyphicon-list-alt"></span> <span class="visible-lg">别名</span></th>
                  <th width='80px'><span class="glyphicon glyphicon-pushpin"></span> <span class="visible-lg">总数</span></th>
                  <th width='100px'><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
                </tr>
              </thead>
              <tbody>
              	<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
	                <tr id="cid_<?php echo $c['cateId']; ?>">
	                  <td style="text-align: center;"><?php echo $c['cateId']; ?></td>
	                  <td><?php if($c['level'] != 0): ?>|<?php endif; ?><?php echo str_repeat(" —— ",$c['level']);?><?php echo $c['cateName']; ?></td>
	                  <td><?php echo $c['cateAlias']; ?></td>
	                  <td><?php echo $c['cateArticles']; ?></td>
	                  <td>
	                  	<a href="<?php echo url('update/updateCategory',array('cateId' => $c['cateId'])); ?>">修改　</a>
	                  	<a rel="1" href="javascript:;" onclick="delCate(<?php echo $c['cateId']; ?>)">删除</a>
	                  </td>
	                </tr>
           		<?php endforeach; endif; else: echo "" ;endif; ?>
	                <!-- <tr><td colspan='5'><div class="pagelist"></div></td></tr> -->
              </tbody>
            </table>
            <span class="prompt-text"><strong>注：</strong>删除一个栏目也会删除栏目下的文章和子栏目,请谨慎删除!(可在栏目回收站还原)</span> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="delCate" tabindex="-1" role="dialog" aria-labelledby="cateModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="closeX" data-dismiss="modal" aria-hidden="true">×
				</button>
				<h4 class="modal-title" id="cateModalLabel">
					删除栏目
				</h4>
			</div>
			<div class="modal-body" id='delCateBody'>

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
	function log(aid){
		$.post('__URL__/loginLog',{'aid' : aid},function(data){
			var d = JSON.parse(data);
			var dLen = d.message.length;
			if(d.code == 1){
				var tbody = document.getElementById('tbody');
				tbody.innerHTML = '';
				for(var i = 1; i < dLen; i++){
					if(d.message[i].operationStatus == 1){
						var dOpStatus = '成功';
					}
					var html = "<tr><td id='ip'>" + d.message[i].IP + "</td> <td id='time'>" + d.message[i].addTime + "</td> <td id='status'>" + dOpStatus + "</td></tr>";

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
//删除评论
function delCate(cateId){
	var c = confirm('确定要删除此栏目吗?');
	if(c == true){
		$.post('__URL__/delCate',{'cateId':cateId},function(data){
			var d = JSON.parse(data);
			if(d.code == 1){
				$('#delCateBody').html(d.message);
				$('#delCate').modal('show');
				$('#cid_'+cateId).remove();
			}else{
				$('#delCateBody').html(d.message);
				$('#delCate').modal('show');
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
            if(aLogPwd == aNewPwd){

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

            }else{
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
