<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Message extends Comm{
    public function message()
    {
        $message = db('message') -> where('status','1') -> paginate(18);
        $mCount = db('message') -> where('status','1') -> count();
        $this->assign('message',$message);
        $this->assign('mCount',$mCount);
        return view();
    }


    public function seeMessage()
    {
        $messageId = $_POST['messageId'];
        //$messageId = input('messageId');
        $result = db('message') -> where('messageId',$messageId) -> find();
        //dump($result);die;
        if($result){
            $info = array('code' => '1','message' => $result);
        }else{
            $info = array('code' => '0','message' => '数据查询错误!');
        }
        echo json_encode($info);die;
        return view();
    }


    public function delMessage()
    {
        $messageId = input('messageId');
        $result = db('message') -> where('messageId',$messageId) -> delete();
        if($result){
            $info = array('code' => '1','message' => '数据删除成功!');

            //操作记录
            $op = new Operation();
            $op_admin = session('adminName');
            $op -> op('delete','留言',$op_admin,'网站留言ID：'.$messageId);
        }else{
            $info = array('code' => '0','message' => '数据删除错误!');
        }
        echo json_encode($info);die;
        return view();
    }
}
