<?php
namespace app\babysbreath\controller;
use think\Controller;
use app\babysbreath\model\Operation;

class Comm extends Controller{

    protected function _initialize(){
        $this -> CheckLoginTime();

        if (!session('kkstars_adminId') && !session('LoginTime') && !session('kkstars_adminName')){
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }

        $config = db('config') -> where('id','1') -> find();
        $this->assign('conf',$config);

        $count = db('comment') -> where('status','1') -> count();
        $adminCount = db('Admin') -> where('status','1') -> count();
        $articleCount = db('article') -> where('status','1') -> count();
        $friendshiplink = db('friendshiplink') -> where('status','1') -> count();
        session('commentCount' , $count);       //评论数
        session('adminCount' , $adminCount);    //管理员数
        session('flinkCount' , $friendshiplink);//链接数
        session('articleCount' , $articleCount);//文章数

        session('php',PHP_VERSION);             //php版本
        session('phpSapiName',php_sapi_name()); //php运行方式
        session('serverGetVersion',$_SERVER["SERVER_SOFTWARE"]);//服务器软件
        session('phpUnameS',php_uname('s'));    //操作系统
        session('loginIP',$_SERVER['REMOTE_ADDR']);   //登陆者IP地址

        $mysql = 'select version();';           //原生查询mysql版本
        $result = \think\db::query($mysql);
        if($result !== null){
            $version = implode('', $result[0]);
        }else{
            $version = '未知版本';
        }
        session('mysqlVersion',$version);

    }

    public function CheckLoginTime()
    {
        if(session('LoginTime') && session('kkstars_adminName') && session('kkstars_adminId')){
            //检查登录是否超时
            $NowTime = time();
            $LoginTime = session('LoginTime');
            // $timeout 超时时间（s）
            $timeout = db('config') -> where('id','1')  -> field('loginTimeout') -> find();
            if(($NowTime - $LoginTime) > $timeout['loginTimeout'] ){

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('login timeout','登录超时',$op_admin,'登录已超时，请重新登录');

                session('[destroy]');
                session(null);
                $this -> error('登录已超时，请重新登录',url('Login/login'));
            }else{
                session('LoginTime',$NowTime);
            }
        }else{
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }
    }
}

?>