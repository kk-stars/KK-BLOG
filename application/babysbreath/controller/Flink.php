<?php
namespace app\babysbreath\controller;
use app\babysbreath\model\Operation;

class Flink extends Comm{
    public function flink()
    {
        $flink = db('friendshiplink') -> where('status','1') -> paginate(15);
        $this->assign('fl',$flink);
        return view();
    }

    public function del()
    {
        if(request() -> isPost()){
            $id = input('id');
            $name = db('friendshiplink') -> where('friendshipLinkId',$id) -> field('friendshipLinkName') -> find();
            $result = db('friendshiplink') -> where('friendshipLinkId',$id) -> delete();
            if($result) {

                //操作记录
                $op = new Operation();
                $op_admin = session('kkstars_adminName');
                $op -> op('delete','友情链接',$op_admin,$name['friendshipLinkName']);

                $info = array('code' => '1','msg' => "删除成功！");
            }else{
                $info = array('code' => '1','msg' => "删除成功！");
            }
            echo json_encode($info);die;
        }

    }
}
