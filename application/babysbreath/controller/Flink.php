<?php
namespace app\babysbreath\controller;

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
            $result = db('friendshiplink') -> where('friendshipLinkId',$id) -> update(['status' => '0']);
            if($result) {
                $info = array('code' => '1','msg' => "删除成功！");
            }else{
                $info = array('code' => '1','msg' => "删除成功！");
            }
            echo json_encode($info);die;
        }

    }
}
