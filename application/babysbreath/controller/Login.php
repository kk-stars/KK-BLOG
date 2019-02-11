<?php
namespace app\babysbreath\controller;
use think\Controller;
use think\Request;
use app\babysbreath\model\Operation;

class Login extends Controller{
    protected function _initialize(){

        $config = db('config') -> where('id','1') -> find();
        $this->assign('conf',$config);
    }

    public function login(){
        $config = db('config') -> where('id','1') -> field('userName') -> find();

        if (request()->isPost()){
            $Name = strip_tags($_POST['loginName']);//strip_tags ： 清除字符串中的   HTML 和   PHP 标签
            $password = md5($_POST['loginPassword']);

            $checkCode = input('checkCode');//验证码
            $code = input('code');//是否开启验证码
            if($code == '1'){
            	if(captcha_check($checkCode) == false){
                    $info = array('code' => '-2','message' => '验证码错误！');
                    echo json_encode($info);
                    die;
                }
            }

            if ($Name != null && $password != null){
                $admin = db('admin') -> where(['loginName' => $Name,'status' => 1]) -> find();
                if ($admin['loginPassword'] === $password){

                    session('kkstars_adminId',$admin['adminId']);//将管理员id存入session会话中
                    session('kkstars_adminName',$config['userName']);//将管理员登录名称和密码存入session会话中
                    session('loginPassword',$admin['loginPassword']);
                    session('LoginTime',time());

                    $info = array('code' => 1,'message' => "登录成功!正在跳转……",'status' => '1');

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('kkstars_adminName');
                    $op -> op('login','登录',$op_admin,'登录成功');

                    $op -> loginInfo($Name);

                }else{
                    $info = array('code' => 0,'message' => "管理员名称或密码输入不正确!",'status' => '0');
                }

            }else{
                $info = array('code' => -1,'message' => "数据错误!");
            }

            echo JSON_encode($info);die;
        }
        return view();
    }

    public function loginExit(){

        //操作记录
        $op = new Operation();
        $op_admin = session('kkstars_adminName');
        $op -> op('loginExit','退出登录',$op_admin,'退出成功');

        session('[destroy]');
        session(null);

        $this->success('退出成功!',url('Login/login'));
    }

}
