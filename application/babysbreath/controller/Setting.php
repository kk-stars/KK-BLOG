<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Setting extends Comm{
    public function setting()
    {
        if(request()->isPost()){
            $config = input('post.');

            if(!empty($_FILES['logo']['name'])){
                $img = request() -> file('logo');
                $path = ROOT_PATH."public".DS."static\admin\Upload";
                $picInfo = $img -> validate(['sixe'=>'5000 * 1024','ext'=>'jpg,gif,jpeg,png']) -> move($path);
                $config['logo'] = "admin/Upload/" . date('Ymd') . '/' . $picInfo->getFilename();

                if(session('adminId') === 1){
                    $upConf = db('config') -> where('id','1') -> update($config);
                    if($upConf){

                        //操作记录
                        $op = new Operation();
                        $op_admin = session('adminName');
                        $op -> op('update','设置',$op_admin,'修改设置成功！');

                        $this->success('修改成功！');
                    }else{
                        $this->error('修改失败！',url('setting/setting'));
                    }
                }else{
                    $this->error('修改失败！你无权限修改网站设置',url('setting/setting'));
                }
                if($picInfo){

                }else{

                    $this->error($picInfo->getError());

                }
            }

            if(session('adminId') === 1){
                if(!isset($config['message'])){
                    $config['message'] = 0;
                }
                if(!isset($config['comment'])){
                    $config['comment'] = 0;
                }
                if(!isset($config['code'])){
                    $config['code'] = 0;
                }
                if(!isset($config['close'])){
                    $config['close'] = 0;
                }
                if(!isset($config['uploadPic'])){
                    $config['uploadPic'] = 0;
                }

                $upConf = db('config') -> where('id','1') -> update($config);
                if($upConf){

                    //操作记录
                    $op = new Operation();
                    $op_ip = $_SERVER['REMOTE_ADDR'];
                    $op_admin = session('adminName');
                    $op -> op($op_ip,'update','设置',$op_admin,'修改设置成功！');

                    $this->success('修改成功！');
                }else{
                    $this->error('修改失败！',url('setting/setting'));
                }
            }else{
                $this->error('！！！修改失败！你无权限修改网站设置！！！',url('setting/setting'));
            }
        }
        return view();
    }
}
