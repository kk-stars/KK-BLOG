<?php
namespace app\babysbreath\controller;
use think\Controller;
use think\Request;
use app\babysbreath\model\Operation;

class Login extends Controller{
    protected function _initialize(){
        session('[destroy]');
        session(null);

        $config = db('config') -> where('id','1') -> find();
        $this->assign('conf',$config);
    }

    public function login(){

        if (request()->isPost()){
            $Name = strip_tags($_POST['loginName']);//strip_tags ： 清除字符串中的   HTML 和   PHP 标签
            $password = md5($_POST['loginPassword']);

            $info = array();
            if ($Name != null && $password != null){
                $admin = db('admin') -> where(['loginName' => $Name,'status' => 1]) -> find();
                if ($admin['loginPassword'] === $password){

                    session('adminId',$admin['adminId']);//将管理员id存入session会话中
                    session('adminName',$admin['adminName']);//将管理员登录名称和密码存入session会话中
                    session('loginPassword',$admin['loginPassword']);

                    $info = array('code' => 1,'message' => "登录成功!正在跳转……",'status' => '1');

                    //操作记录
                    $op = new Operation();
                    $op_admin = session('adminName');
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

        session('[destroy]');
        session(null);
        $this->success('退出成功!',url('Login/login'));
    }

}
