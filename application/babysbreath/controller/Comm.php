<?php
namespace app\babysbreath\controller;
use think\Controller;
use app\babysbreath\model\Operation;
use think\Request;
use app\index\model\GetIP;

class Comm extends Controller{

    protected function _initialize(){
        $this -> CheckLoginTime();

        if (!session('kkstars_adminId') && !session('LoginTime') && !session('kkstars_adminName')){
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }

        $config = db('config') -> where('id','1') -> find();
        $this->assign('conf',$config);

        $messageCount = db('message') -> where('status','1') -> count();
        $adminCount = db('Admin') -> where('status','1') -> count();
        $articleCount = db('article') -> where('status','1') -> count();
        $friendshiplink = db('friendshiplink') -> where('status','1') -> count();
        
        $ip = new GetIP();
        $loginIP = $ip -> GetIP();
        
        $this -> assign([
        		'messageCount' => $messageCount,//留言数
        		'adminCount' => $adminCount,    //管理员数
        		'flinkCount' => $friendshiplink,//链接数
        		'articleCount' => $articleCount,//文章数
        ]);
        session('adminCount' , $adminCount);    
        session('flinkCount' , $friendshiplink);
        session('articleCount' , $articleCount);

        session('php',PHP_VERSION);             //php版本
        session('phpSapiName',php_sapi_name()); //php运行方式
        session('serverGetVersion',$_SERVER["SERVER_SOFTWARE"]);//服务器软件
        session('phpUnameS',php_uname('s'));    //操作系统
        session('loginIP',$loginIP);   //登陆者IP地址

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
                $this -> error('登录已超时，请重新登录系统',url('Login/login'));
            }else{
                session('LoginTime',$NowTime);
            }
        }else{
            $this->error('尚未登录系统!请先登录……',url('Login/Login'));
        }
    }

    public function info(){

        if(request()->isPost()){
            $aInfo['adminId'] = input('adminId');
            $aInfo['loginPassword'] = input('loginPassword');

            $aOldPwd = md5(input('oldPassword')); //原始密码
            $aNewPwd = input('newPassword');//确认密码


            $dataTableUserPwd = db('admin') -> where('adminId',$aInfo['adminId']) -> field('loginPassword') -> find();
            $dataTableUserPwd = $dataTableUserPwd['loginPassword'];

            if($aOldPwd != '' && $aInfo['loginPassword'] != '' && $aNewPwd != ''){

                //修改密码
                if($aOldPwd === $dataTableUserPwd && $aNewPwd === $aInfo['loginPassword']){
                    $aInfo['loginPassword'] = md5($aInfo['loginPassword']);
                    $result = db('admin') -> where('adminId',$aInfo['adminId']) -> update($aInfo);
                    if($result){

                        //操作记录
                        $op = new Operation();
                        $op_admin = session('kkstars_adminName');
                        $op -> op('Update Password','修改密码',$op_admin,'您已成功修改密码，需重新登录系统！');

                        session('[destroy]');
                        session(null);
                        $info = array('code' => '1', 'message' => '您已成功修改密码，需重新登录系统！');

                    }else{
                        $info = array('code' => '-1', 'message' => '修改密码失败!','data' => $aInfo);
                    }
                }else{
                    $info = array('code' => '-2' , 'message' => '密码错误!');
                }
            }else{
                $info = array('code' => '-3' , 'message' => '请填写完整再进行提交!');
            }
            echo json_encode($info);die;
        }
    }

    public function loginLog()
    {
        $login = input('login');
        if($login){
            $log = db('operation') -> where('op_type',$login) -> field('op_city,op_ip,op_time,op_details') -> order('op_time desc') -> limit(20) -> select();
            $info = array('code' => '1' , 'message' => $log);
            echo json_encode($info);die;
        }

    }
}

?>